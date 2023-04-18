<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

// global operations
$GLOBALS['TL_LANG']['tl_pexels']['operationAddFromPexels'][0] = 'Pexels';
$GLOBALS['TL_LANG']['tl_pexels']['operationAddFromPexels'][1] = 'Pexels';

// legends
$GLOBALS['TL_LANG']['tl_pexels']['pexels_search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_result_legend'] = 'Search result';

$GLOBALS['TL_LANG']['tl_settings']['pexels_legend'] = $GLOBALS['TL_LANG']['tl_pexels']['pexels_legend'];

// fields
$GLOBALS['TL_LANG']['tl_pexels']['pexelsApiKey'][0] = 'Pexels API-Key';
$GLOBALS['TL_LANG']['tl_pexels']['pexelsApiKey'][1] = 'Please enter your Pexels API key here. More information at <a href="https://www.pexels.com/api/documentation/" target="_blank" rel="noopener noreferrer"><u>www.pexels.com/api/documentation/</u></a>.';
$GLOBALS['TL_LANG']['tl_pexels']['pexelsApiUrl'][0] = 'Pexels API-URL';
$GLOBALS['TL_LANG']['tl_pexels']['pexelsApiUrl'][1] = 'Please enter your Pexels API URL here. More information at <a href="https://www.pexels.com/api/documentation/" target="_blank" rel="noopener noreferrer"><u>www.pexels.com/api/documentation/</u></a>.';
$GLOBALS['TL_LANG']['tl_pexels']['pexelsImageSource'][0] = 'Source for high-resolution images';
$GLOBALS['TL_LANG']['tl_pexels']['pexelsImageSource'][1] = 'Please select the field for the high-resolution images.';

$GLOBALS['TL_LANG']['tl_pexels']['fileupload'][0] = 'File-Upload Pexels';
$GLOBALS['TL_LANG']['tl_pexels']['fileupload'][1] = 'File-Upload Pexels';
$GLOBALS['TL_LANG']['tl_pexels']['poweredBy'][0] = 'Pexels for Contao &mdash; powered by:';
$GLOBALS['TL_LANG']['tl_pexels']['poweredBy'][1] = 'Pexels for Contao &mdash; powered by...';
$GLOBALS['TL_LANG']['tl_pexels']['searchTerm'][0] = 'Search';
$GLOBALS['TL_LANG']['tl_pexels']['searchTerm'][1] = 'Please enter here your search term(s).';
$GLOBALS['TL_LANG']['tl_pexels']['searchPexels'][0] = '';
$GLOBALS['TL_LANG']['tl_pexels']['searchPexels'][1] = 'Click on \'Start image search\' to start the search with your search term.';

$GLOBALS['TL_LANG']['MSC']['pexels']['cachedResult'] = 'Cache result; In order to keep the Pexels API fast for all, requests must be cached 24 hours.';
$GLOBALS['TL_LANG']['MSC']['pexels']['searchPexels'] = 'Start search';
$GLOBALS['TL_LANG']['MSC']['pexels']['searchPexelsResult'] = 'Result';
$GLOBALS['TL_LANG']['MSC']['pexels']['photographer'] = 'Photograph';
$GLOBALS['TL_LANG']['MSC']['pexels']['photographerUrl'] = 'Profil';
$GLOBALS['TL_LANG']['MSC']['pexels']['hint'] = '<p>Photos provided by <a href="https://www.pexels.com/" target="_blank" rel="noopener noreferrer"><u>Pexels</u></a>.</p>'
    .'<p><strong>Guidelines</strong></p>'
    .'<ul>'
    .'<li>By default, the API is limited to 200 queries per hour and</li>'
    .'<li>20,000 queries per month.</li>'
    .'<li>Always call our photographer if possible (for example, "Photo of John Doe on Pexels" with a link to the photo page on Pexels).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API-Dokumentation: <a href="https://www.pexels.com/api/documentation/" target="_blank" rel="noopener noreferrer"><u>www.pexels.com/api/documentation/</u></a></p>'
    .'<p>Please note the <strong>Pexels <a href="https://www.pexels.com/photo-license/" target="_blank" rel="noopener noreferrer"><u>Terms of Service</u></a></strong>!</p>'
;

$GLOBALS['TL_LANG']['ERR']['imageSourceNotAvailable'] = 'The desired image source "%s" is not available with this API key. Instead, "large2x" was used. <br> For more information, see <a href="https://www.pexels.com/api/documentation/" target="_blank" rel="noopener noreferrer"><u>www.pexels.com/api/documentation/</u></a>.';
