<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

namespace Trilobit\WorldofimagesBundle\DataProvider\Configuration;

use Contao\DataContainer;
use Contao\System;

class ConfigurationProvider
{
    protected static function getConfig(string $provider, $key = null): array
    {
        $config = System::getContainer()->getParameter('trilobit');

        if (empty($config)
            || !\array_key_exists($provider, $config)
        ) {
            return [];
        }

        if (null === $key) {
            return $config[$provider];
        }

        if (empty($config[$provider][$key])) {
            return [];
        }

        return $config[$provider][$key];
    }

    public function pixabayGetImageType(DataContainer $dc): array
    {
        return self::getConfig('pixabay', 'image_type');
    }

    public function pixabayGetCategory(DataContainer $dc): array
    {
        return self::getConfig('pixabay', 'category');
    }

    public function pixabayGetOrder(DataContainer $dc): array
    {
        return self::getConfig('pixabay', 'order');
    }

    public function pixabayGetOrientation(DataContainer $dc): array
    {
        return self::getConfig('pixabay', 'orientation');
    }

    public function pixabayGetColors(DataContainer $dc): array
    {
        return self::getConfig('pixabay', 'colors');
    }

    public function pixabayGetImageSource(DataContainer $dc): array
    {
        return self::getConfig('pixabay', 'image_source');
    }

    public function unsplashGetOrderby(DataContainer $dc): array
    {
        return self::getConfig('unsplash', 'order_by');
    }

    public function unsplashGetOrientation(DataContainer $dc): array
    {
        return self::getConfig('unsplash', 'orientation');
    }

    public function unsplashGetColor(DataContainer $dc): array
    {
        return self::getConfig('unsplash', 'color');
    }

    public function unsplashGetContentfilter(DataContainer $dc): array
    {
        return self::getConfig('unsplash', 'content_filter');
    }

    public function pexelsGetOrientation(DataContainer $dc): array
    {
        return self::getConfig('unsplash', 'orientation');
    }

    public function pexelsGetColor(DataContainer $dc): array
    {
        return self::getConfig('pexels', 'color');
    }

    public function flickrGetTagMode(DataContainer $dc): array
    {
        return self::getConfig('flickr', 'tag_mode');
    }

    public function flickrGetSort(DataContainer $dc): array
    {
        return self::getConfig('flickr', 'sort');
    }

    public function flickrGetSafeSearch(DataContainer $dc): array
    {
        return self::getConfig('flickr', 'safe_search');
    }

    public function flickrGetContentTypes(DataContainer $dc): array
    {
        return self::getConfig('flickr', 'content_types');
    }

    public function flickrGetGeoContext(DataContainer $dc): array
    {
        return self::getConfig('flickr', 'geo_context');
    }

    public function flickrGetSearch(DataContainer $dc): array
    {
        return self::getConfig('flickr', 'search');
    }
}
