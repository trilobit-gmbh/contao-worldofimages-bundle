<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

namespace Trilobit\WorldofimagesBundle\FileUpload;

use Contao\BackendTemplate;
use Contao\BackendUser;
use Contao\Config;
use Contao\Controller;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\CoreBundle\Monolog\ContaoContext;
use Contao\Database;
use Contao\Dbafs;
use Contao\DC_File;
use Contao\Environment;
use Contao\File;
use Contao\Files;
use Contao\FileUpload;
use Contao\Input;
use Contao\Message;
use Contao\StringUtil;
use Contao\System;
use Contao\Validator;
use Psr\Log\LogLevel;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

class Zone extends FileUpload
{
    public static function generateFilterPalette($provider)
    {
        Controller::loadDataContainer('tl_'.$provider);

        $palette = new DC_File('tl_'.$provider);

        $buffer = $palette->edit();

        $buffer = preg_replace(
            '/.*<fieldset /si',
            '<fieldset ',
            $buffer
        );

        $buffer = preg_replace(
            '/<\/fieldset>.*/si',
            '</fieldset>',
            $buffer
        );

        return preg_replace(
            '/<div id="tl_buttons">.*<\/div>/si',
            '',
            $buffer
        );
    }

    protected function setUploader(string $provider): void
    {
        if (empty($provider)) {
            return;
        }

        if ('move' === Input::get('act') && $provider === Input::get('source')) {
            $this->import(BackendUser::class, 'User');

            $zone = '\\Trilobit\\WorldofimagesBundle\\FileUpload\\'.ucfirst($provider).'Zone';
            $zoneClass = new $zone();
            $this->User->uploader = \get_class($zoneClass);
        }
    }

    protected function hasAccess(string $source, string $href, string $label, string $title, string $class, string $attributes)
    {
        $this->import(BackendUser::class, 'User');

        return $this->User->hasAccess($source, 'fop') && $this->User->hasAccess('f1', 'fop')
            ? '<a '
                .'href="'.$this->addToUrl($href).'" '
                .'title="'.StringUtil::specialchars($title).'" '
                .'class="'.$class.'" '
                .$attributes
                .'>'
                .$label
                .'</a> '
            : ''
            ;
    }

    public function pixabaySetUploader()
    {
        $this->setUploader('pixabay');
    }

    public function pexelsSetUploader()
    {
        $this->setUploader('pexels');
    }

    public function unsplashSetUploader()
    {
        $this->setUploader('unsplash');
    }

    public function flickrSetUploader()
    {
        $this->setUploader('flickr');
    }

    public function pixabayHasAccess($href, $label, $title, $class, $attributes): string
    {
        return $this->hasAccess('pixabay', $href, $label, $title, $class, $attributes);
    }

    public function pexelsHasAccess($href, $label, $title, $class, $attributes): string
    {
        return $this->hasAccess('pexels', $href, $label, $title, $class, $attributes);
    }

    public function unsplashHasAccess($href, $label, $title, $class, $attributes): string
    {
        return $this->hasAccess('unsplash', $href, $label, $title, $class, $attributes);
    }

    public function flickrHasAccess($href, $label, $title, $class, $attributes): string
    {
        return $this->hasAccess('flickr', $href, $label, $title, $class, $attributes);
    }

    /**
     * @param mixed $provider
     * @param mixed $user
     *
     * @throws \Exception
     */
    public function markup($provider, $user): string
    {
        System::loadLanguageFile('tl_'.$provider);
        Controller::loadDataContainer('tl_'.$provider);

        $container = System::getContainer();
        $config = $container->getParameter('trilobit')[$provider];

        $result = self::handleCache($provider);

        $query = '';
        $page = 1;
        $cachedResult = false;

        if (!empty($result)) {
            $cachedResult = true;

            $query = (
                \array_key_exists('q', $result['__api__']['parameter'])
                    ? $result['__api__']['parameter']['q']
                    : (
                        \array_key_exists('query', $result['__api__']['parameter'])
                            ? $result['__api__']['parameter']['query']
                            : (
                                \array_key_exists('tags', $result['__api__']['parameter'])
                                    ? $result['__api__']['parameter']['tags']
                                    : ''
                            )
                    )
            );

            $page = \array_key_exists('page', $result['__api__']['parameter'])
                ? $result['__api__']['parameter']['page']
                : 1
            ;
        }

        self::handleConfigParameter($config, $result, $user, $provider);

        $template = new BackendTemplate('be_fileupload');

        $template->provider = $provider;
        $template->query = $query;
        $template->page = $page;
        $template->language = $GLOBALS['TL_LANGUAGE'];
        $template->url = '/_trilobit/'.$provider;
        $template->queryKey = $config['query_key'];

        $template->queryParameter = '';
        foreach (array_keys($GLOBALS['TL_DCA']['tl_'.$provider]['fields']) as $item) {
            $template->queryParameter .= '&'.str_replace($provider.'_', '', $item)."='+document.querySelector('[name=\"".$item."\"]').value+'";
        }

        $template->search_legend = $GLOBALS['TL_LANG']['tl_'.$provider]['search_legend'];
        $template->result_legend = $GLOBALS['TL_LANG']['tl_'.$provider]['result_legend'];

        $template->filterPalette = self::generateFilterPalette($provider);

        $template->queryTitle = $GLOBALS['TL_LANG']['tl_'.$provider]['queryTitle'];
        $template->queryHelp = $GLOBALS['TL_LANG']['tl_'.$provider]['queryHelp'];
        $template->searchTitle = $GLOBALS['TL_LANG']['tl_'.$provider]['searchTitle'];
        $template->searchHelp = $GLOBALS['TL_LANG']['tl_'.$provider]['searchHelp'];
        $template->searchButton = $GLOBALS['TL_LANG']['tl_'.$provider]['searchButton'];

        $template->user = 'user';
        $template->views = 'views';
        $template->likes = 'likes';
        $template->favorites = 'favorites';
        $template->downloads = 'downloads';
        $template->tags = 'tags';
        $template->description = 'description';
        $template->color = 'color';

        $template->poweredBy = $GLOBALS['TL_LANG']['MSC'][$provider]['poweredBy'];
        $template->trilobitLink = $GLOBALS['TL_LANG']['MSC'][$provider]['trilobitLink'];
        $template->providerLink = $GLOBALS['TL_LANG']['MSC'][$provider]['providerLink'];
        $template->providerHint = $GLOBALS['TL_LANG']['MSC'][$provider]['hint'];
        $template->resultCount = $GLOBALS['TL_LANG']['MSC'][$provider]['resultCount'];
        $template->resultCached = '<div class="widget"><p>'
            .StringUtil::specialchars($GLOBALS['TL_LANG']['MSC'][$provider]['cachedResult'])
            .'</p></div>'
        ;
        $template->noResult = '<div class="widget"><p>'
            .StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['noResult'])
            .'</p></div>'
        ;
        $template->isCachedResult = $cachedResult ? 'true' : 'false';

        $template->first = StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['first']);
        $template->previous = StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['previous']);
        $template->next = StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['next']);
        $template->last = StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['last']);
        $template->goToPage = sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['goToPage']), '##PAGE##');

        $template->totalPages = preg_replace('/^(.*?)%s(.*?)%s(.*?)$/', '$1\'+page+\'$2\'+pages+\'$3', StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['totalPages']));
        $template->resultsPerPage = floor(Config::get('resultsPerPage') / 4) * 4;
        $template->paginationLinks = 7;

        return $template->parse();
    }

    /**
     * @param mixed $provider
     * @param mixed $targetDir
     * @param mixed $zone
     *
     * @throws \Exception
     */
    public function upload($provider, $targetDir, $zone): array
    {
        $container = System::getContainer();
        $rootDir = $container->getParameter('kernel.project_dir');
        $logger = $container->get('monolog.logger.contao');
        $config = $container->getParameter('trilobit')[$provider];

        $imageSource = '';
        $defaultFileChmod = Config::get('defaultFileChmod');

        $imageWidth = Config::get('gdMaxImgWidth');
        $imageHeight = Config::get('gdMaxImgHeight');

        $result = self::handleCache($provider);

        if (empty($result)) {
            Message::addError($GLOBALS['TL_LANG']['ERR']['emptyUpload']);

            $zone->reload();
        }

        if ('' === $targetDir || Validator::isInsecurePath($targetDir)) {
            throw new \InvalidArgumentException('Invalid target path '.$targetDir);
        }

        if (empty(Input::post('tl_imageIds'))) {
            Message::addError($GLOBALS['TL_LANG']['ERR']['emptyUpload']);

            $zone->reload();
        }

        $source = true;

        $ids = array_map(
            static function($item) { return (string) $item; },
            Input::post('tl_imageIds')
        );

        $result['found'] = array_map(
            static function($item) {
                $item['id'] = (string) $item['id'];

                return $item;
            },
            $result['found']
        );

        foreach ($result['found'] as $value) {
            if (!\in_array($value['id'], $ids, true)) {
                continue;
            }

            switch ($provider) {
                case 'pixabay':
                    $imageSource = (!empty(Config::get($provider.'ImageSource')) ? Config::get($provider.'ImageSource') : $config['default_upload_image']);
                    $file = $value[$imageSource];
                    if (empty($value[$imageSource])) {
                        $source = false;
                        $file = preg_replace('/^(.*)_(.*?)\.(.*?)$/', '$1_960.$3', $value[$config['preview_image']]);
                    }

                    $pathinfoWebformatUrl = pathinfo(urldecode($file));
                    $pathinfoPageUrl = pathinfo(urldecode($value[$config['image_page_url']]));
                    break;
                case 'pexels':
                    $imageSource = (!empty(Config::get($provider.'ImageSource')) ? Config::get($provider.'ImageSource') : $config['default_upload_image']);
                    $file = $value['src'][$imageSource];

                    $pathinfoWebformatUrl = pathinfo(urldecode($value['src']['original']));
                    $pathinfoPageUrl = pathinfo(urldecode($value[$config['image_page_url']]));
                    break;
                case 'unsplash':
                    $file = json_decode(file_get_contents($value['links']['download_location'].'?client_id='.$result['__api__']['key']), true)['url'];

                    if (!empty($imageWidth)) {
                        $file .= '&w='.$imageWidth;
                    }
                    if (!empty($imageHeight)) {
                        $file .= '&h='.$imageHeight;
                    }

                    $pathinfoWebformatUrl['basename'] = $value['alt_description'].'-'.$value['id'];
                    $pathinfoWebformatUrl['extension'] = 'jpg';
                    $pathinfoPageUrl = $pathinfoWebformatUrl;
                    break;
                case 'flickr':
                    $imageSource = (!empty(Config::get($provider.'ImageSource')) ? Config::get($provider.'ImageSource') : $config['default_upload_image']);
                    $file = 'https://live.staticflickr.com/'.$value['server'].'/'.$value['id'].'_'.$value['secret'].'_'.$imageSource.'.jpg';

                    $pathinfoWebformatUrl['basename'] = $value['title'].'-'.$value['id'];
                    $pathinfoWebformatUrl['extension'] = 'jpg';
                    $pathinfoPageUrl = $pathinfoWebformatUrl;
                    break;
            }

            // Sanitize the filename
            try {
                $pathinfoPageUrl['basename'] = StringUtil::sanitizeFileName($pathinfoPageUrl['basename']);
            } catch (\InvalidArgumentException $e) {
                Message::addError($GLOBALS['TL_LANG']['ERR']['filename']);
                continue;
            }

            $result['__upload__'][$value['id']] = [
                'files' => [
                    'api' => $targetDir.'/'.$pathinfoWebformatUrl['basename'],
                    'contao' => $targetDir.'/'.$provider.'_'.$pathinfoPageUrl['basename'].'.'.$pathinfoWebformatUrl['extension'],
                    'source' => $file,
                ],
            ];
        }

        if (!$source) {
            Message::addError(
                sprintf(
                    $GLOBALS['TL_LANG']['ERR']['imageSourceNotAvailable'],
                    $imageSource
                )
            );

            $logger->log(
                LogLevel::ERROR,
                ucfirst($provider).' image source"'.$imageSource.'" not available; extended "webformatURL" used instead',
                ['contao' => new ContaoContext(__METHOD__, strtoupper($provider).'_SEARCH')]
            );

            $zone->reload();
        }

        // Upload the files
        $uploaded = [];

        $languages = Database::getInstance()
            ->prepare("SELECT COUNT(language) AS language_count, language FROM tl_page WHERE type='root' AND published=1 GROUP BY language ORDER BY language_count DESC")
            ->limit(1)
            ->execute()
            ->fetchAllAssoc()
        ;

        if (empty($languages[0]['language'])) {
            $languages[0]['language'] = 'en';
        }

        $zone->import(Files::class, 'Files');

        foreach (Input::post('tl_imageIds') as $id) {
            $tmpFile = 'system/tmp/'.md5(uniqid((string) mt_rand(), true));
            $sourceFile = $result['__upload__'][$id]['files']['source'];

            if (empty($sourceFile)) {
                continue;
            }

            // get file: curl
            $objCurl = curl_init($sourceFile);

            curl_setopt($objCurl, \CURLOPT_HEADER, false);
            curl_setopt($objCurl, \CURLOPT_RETURNTRANSFER, true);
            curl_setopt($objCurl, \CURLOPT_BINARYTRANSFER, true);

            curl_setopt($objCurl, \CURLOPT_USERAGENT, 'Contao '.ucfirst($provider).' API');
            curl_setopt($objCurl, \CURLOPT_COOKIEJAR, $rootDir.'/system/tmp/curl.cookiejar.txt');
            curl_setopt($objCurl, \CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($objCurl, \CURLOPT_ENCODING, '');
            curl_setopt($objCurl, \CURLOPT_RETURNTRANSFER, true);
            curl_setopt($objCurl, \CURLOPT_AUTOREFERER, true);
            curl_setopt($objCurl, \CURLOPT_SSL_VERIFYPEER, false);    // required for https urls
            curl_setopt($objCurl, \CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($objCurl, \CURLOPT_TIMEOUT, 30);
            curl_setopt($objCurl, \CURLOPT_MAXREDIRS, 10);

            $stream = curl_exec($objCurl);
            $returnCode = curl_getinfo($objCurl, \CURLINFO_HTTP_CODE);

            curl_close($objCurl);

            // write
            if (200 === $returnCode) {
                // file handle
                $fileHandle = fopen($rootDir.'/'.$tmpFile, 'w');

                fwrite($fileHandle, $stream);

                fclose($fileHandle);
            } else {
                Message::addError('#'.$returnCode.' '.$GLOBALS['TL_LANG']['MSC']['accountError'].' ['.$sourceFile.']');
                continue;
            }

            $targetFile = $result['__upload__'][$id]['files']['contao'];

            // Set CHMOD and resize if neccessary
            if ($zone->Files->rename($tmpFile, $targetFile)) {
                // Chmod
                $zone->Files->chmod($targetFile, $defaultFileChmod);

                // Meta information
                $info = ucfirst($provider).' | '
                    .'ID: '.$id.' | '
                    .(!empty($result['__meta__'][$id]['tags']) ? 'Tags: '.$result['__meta__'][$id]['tags'].' | ' : '')
                    .(!empty($result['__meta__'][$id]['description']) ? 'Description: '.$result['__meta__'][$id]['description'].' | ' : '')
                    .'User: '.$result['__meta__'][$id]['user'];
                $file = Dbafs::addResource($targetFile);
                $file->meta = serialize([
                    $languages[0]['language'] => [
                        'title' => $info,
                        'alt' => $info.' | '
                            .'URL: '.$result['__meta__'][$id]['url'],
                        'license' => $result['__meta__'][$id]['url'],
                    ],
                ]);
                $file->save();

                // resize
                $this->resizeUploadedImage($targetFile);

                // Notify the user
                Message::addConfirmation(
                    sprintf(
                        $GLOBALS['TL_LANG']['MSC']['fileUploaded'],
                        $targetFile
                    )
                );

                $logger->log(
                    LogLevel::INFO,
                    ucfirst($provider).' image source"'.$targetFile.'" has been uploaded',
                    ['contao' => new ContaoContext(__METHOD__, 'TL_FILES')]
                );

                $uploaded[] = $targetFile;
            }
        }

        self::getSession()
            ->getBag('contao_backend')
            ->set('worldofimages', [
                'q' => Input::post('search'),
                'page' => Input::post('page'),
                'cache' => Input::post('tl_cache'),
            ])
        ;

        if (empty($uploaded)) {
            Message::addError(
                $GLOBALS['TL_LANG']['ERR']['generalUpload'],
                $provider.'ImageSource'
            );

            $zone->reload();
        }

        return $uploaded;
    }

    /**
     * @param mixed $provider
     *
     * @throws \Exception
     */
    public static function handleCache($provider, array $parameter = [], array $result = []): ?array
    {
        $container = System::getContainer();

        $cacheDir = $container->getParameter('kernel.cache_dir');
        $rootDir = $container->getParameter('kernel.project_dir');

        $session = self::getSession()
            ->getBag('contao_backend')
            ->get('worldofimages')
        ;

        $checksum = !empty($parameter)
            ? md5(implode('', $parameter))
            : (Input::post('tl_cache')
                ?: $session['cache'] ?? ''
            )
        ;

        $cacheFile = StringUtil::stripRootDir($cacheDir).'/trilobit/'.$provider.'_'.$checksum.'.json';

        if (!empty($result)) {
            $result['__api__']['cache'] = $checksum;
            $result['__api__']['tstamp'] = time();

            switch ($provider) {
                case 'pixabay':
                    foreach ($result['hits'] as $value) {
                        $result['__meta__'][$value['id']] = [
                            'user' => $value['user'],
                            'url' => $value['pageURL'],
                            'tags' => $value['tags'],
                            'downloads' => $value['downloads'],
                            'views' => $value['views'],
                            'likes' => $value['likes'],
                            'preview' => $value['webformatURL'],
                        ];
                    }
                    $result['found'] = $result['hits'];
                    $result['count'] = $result['totalHits'];
                    unset($result['hits'], $result['totalHits']);
                    break;
                case 'pexels':
                    foreach ($result['photos'] as $value) {
                        $result['__meta__'][$value['id']] = [
                            'user' => $value['photographer'],
                            'url' => $value['url'],
                            'description' => $value['alt'],
                            'color' => $value['avg_color'],
                            'preview' => $value['src']['medium'],
                        ];
                    }
                    $result['found'] = $result['photos'];
                    $result['count'] = $result['total_results'];
                    unset($result['photos'], $result['total_results']);
                    break;
                case 'unsplash':
                    foreach ($result['results'] as $value) {
                        $result['__meta__'][$value['id']] = [
                            'user' => $value['user']['name'],
                            'url' => $value['links']['html'],
                            'tags' => implode(
                                ', ',
                                array_filter(array_map(
                                    (static function($item) {
                                        if (isset($item['type']) && 'search' === $item['type']) {
                                            return $item['title'];
                                        }
                                    }),
                                    $value['tags']
                                ))
                            ),
                            'description' => $value['alt_description'],
                            'color' => $value['color'],
                            'likes' => $value['likes'],
                            'preview' => $value['urls']['small'],
                        ];
                    }
                    $result['found'] = $result['results'];
                    $result['count'] = $result['total'];
                    unset($result['results'], $result['total']);
                    break;
                case 'flickr':
                    foreach ($result['photos']['photo'] as $value) {
                        $result['__meta__'][$value['id']] = [
                            'user' => $value['owner'],
                            'description' => $value['title'],
                            'url' => 'https://www.flickr.com/photos/'.$value['owner'].'/'.$value['id'],
                            'preview' => 'https://live.staticflickr.com/'.$value['server'].'/'.$value['id'].'_'.$value['secret'].'_n.jpg',
                        ];
                    }
                    $result['found'] = $result['photos']['photo'];
                    $result['count'] = $result['photos']['total'];
                    break;
            }

            File::putContent($cacheFile, json_encode($result));
        } else {
            $result = null;

            if (file_exists($rootDir.'/'.$cacheFile)) {
                $cache = new File($cacheFile);

                if ($cache->mtime > time() - 60 * 60 * 24) {
                    $result = json_decode($cache->getContent(), true);
                    $result['__api__']['cachedResult'] = true;
                } else {
                    $cache->delete();
                }
            }
        }

        self::getSession()
            ->getBag('contao_backend')
            ->set('worldofimages', [])
        ;

        return $result;
    }

    public static function handleGetParameter($config): array
    {
        $parameter = [];

        foreach ($config['api'] as $item) {
            $key = $item[0];
            $type = $item[1];

            if (Input::get($key) && '' !== Input::get($key)) {
                if ('bool' === strtolower($type)) {
                    $parameter[$key] = 'true';
                } elseif ('int' === strtolower($type)) {
                    $parameter[$key] = (int) Input::get($key);
                } else {
                    $parameter[$key] = Input::get($key);
                }
            }
        }

        if ('tags' === Input::get('search')) {
            $parameter['tags'] = Input::get('tag_text');
        } elseif ('text' === Input::get('search')) {
            $parameter['text'] = Input::get('tag_text');
        } else {
            $parameter['tags'] = Input::get('tag_text');
            $parameter['text'] = Input::get('tag_text');
        }

        return $parameter;
    }

    public static function handleConfigParameter($config, $result, $user, $provider): void
    {
        $GLOBALS['TL_CONFIG']['page'] = 1;

        foreach ($config['api'] as $item) {
            $key = $item[0];
            $type = $item[1];

            if (!empty($user->{$provider.'_'.$key})) {
                $GLOBALS['TL_CONFIG'][$provider.'_'.$key] = $user->{$provider.'_'.$key};
            }

            if (empty($result)) {
                continue;
            }

            if (isset($result['__api__']['parameter'][$key])
                && !empty($result['__api__']['parameter'][$key])
            ) {
                if ('page' === $key) {
                    $GLOBALS['TL_CONFIG']['page'] = (int) $result['__api__']['parameter'][$key];
                } elseif ('bool' === strtolower($type)) {
                    $GLOBALS['TL_CONFIG'][$provider.'_'.$key] = 'true';
                } elseif ('int' === strtolower($type)) {
                    $GLOBALS['TL_CONFIG'][$provider.'_'.$key] = (int) $result['__api__']['parameter'][$key];
                } else {
                    $GLOBALS['TL_CONFIG'][$provider.'_'.$key] = $result['__api__']['parameter'][$key];
                }
            }
        }
    }

    /**
     * @param mixed $provider
     *
     * @throws \Exception
     */
    public static function handleRequest($provider): void
    {
        if (empty($apiKey = Config::get($provider.'ApiKey'))) {
            self::getResponse();
        }

        $container = System::getContainer();

        $config = $container->getParameter('trilobit')[$provider];
        $logger = $container->get('monolog.logger.contao');

        if (empty($apiUrl = $config['api_url'])) {
            self::getResponse();
        }

        if (empty($parameter = self::handleGetParameter($config))) {
            self::getResponse();
        }

        $result = self::handleCache($provider, $parameter);

        if (null === $result) {
            try {
                $result = json_decode(self::execute($provider, $apiUrl, $apiKey, $parameter), true);

                $result['__api__']['url'] = $apiUrl;
                $result['__api__']['key'] = $apiKey;
                $result['__api__']['parameter'] = $parameter;

                $result = self::handleCache($provider, $parameter, $result);

                $result['__api__']['cachedResult'] = false;
            } catch (\Exception $e) {
                $logger->log(
                    LogLevel::ERROR,
                    ucfirst($provider).' search failed: '.$e->getMessage(),
                    ['contao' => new ContaoContext(__METHOD__, strtoupper($provider).'_SEARCH')]
                );

                $exception = json_decode($e->getMessage());

                $result = [
                    '__api__' => [
                        'exception' => [
                            'status' => $exception->status,
                            'message' => $exception->code,
                        ],
                        'url' => $apiUrl,
                        'key' => $apiKey,
                        'parameter' => $parameter,
                        'tstamp' => time(),
                    ],
                ];
            }
        }

        self::getResponse($result);
    }

    protected static function execute($provider, $apiUrl, $apiKey, array $parameter)
    {
        $container = System::getContainer();

        $rootDir = $container->getParameter('kernel.project_dir');

        switch ($provider) {
            case 'pixabay':
                $url = $apiUrl.'?key='.$apiKey.'&'.http_build_query($parameter);
                break;
            case 'pexels':
                $url = $apiUrl.'?'.http_build_query($parameter);
                break;
            case 'unsplash':
                $url = $apiUrl.'search/photos/?client_id='.$apiKey.'&'.http_build_query($parameter);
                break;
            case 'flickr':
                $url = $apiUrl.'?method=flickr.photos.search&api_key='.$apiKey.'&format=json&nojsoncallback=1&'.http_build_query($parameter);
                break;
        }

        $url .= '&lang='.$GLOBALS['TL_LANGUAGE'];
        $url .= '&per_page='.floor(Config::get('resultsPerPage') / 4) * 4;

        $objCurl = curl_init();

        if ('pexels' === $provider) {
            curl_setopt($objCurl, \CURLOPT_HTTPHEADER, ['Authorization: '.$apiKey]);
        }

        curl_setopt($objCurl, \CURLOPT_URL, $url);
        curl_setopt($objCurl, \CURLOPT_USERAGENT, 'Contao '.ucfirst($provider).' API');
        curl_setopt($objCurl, \CURLOPT_COOKIEJAR, $rootDir.'/system/tmp/curl.cookiejar.txt');
        curl_setopt($objCurl, \CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($objCurl, \CURLOPT_ENCODING, '');
        curl_setopt($objCurl, \CURLOPT_RETURNTRANSFER, true);
        curl_setopt($objCurl, \CURLOPT_AUTOREFERER, true);
        curl_setopt($objCurl, \CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($objCurl, \CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($objCurl, \CURLOPT_TIMEOUT, 30);
        curl_setopt($objCurl, \CURLOPT_MAXREDIRS, 10);

        $result = curl_exec($objCurl);
        $status = curl_getinfo($objCurl, \CURLINFO_HTTP_CODE);

        curl_close($objCurl);

        if (200 !== $status) {
            throw new Exception($result);
        }

        return $result;
    }

    protected static function getResponse(array $result = []): void
    {
        $response = new JsonResponse();
        $response->setData($result);
        $response->send();
        exit();
    }

    protected static function getSession()
    {
        $version = (method_exists(ContaoCoreBundle::class, 'getVersion') ? ContaoCoreBundle::getVersion() : VERSION);

        if (version_compare($version, '4.9', '>')) {
            return System::getContainer()
                ->get('request_stack')
                ->getCurrentRequest()
                ->getSession()
                ;
        }

        return System::getContainer()
            ->get('session')
            ;
    }
}
