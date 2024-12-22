<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

$GLOBALS['TL_LANG']['MSC']['unsplash']['poweredBy'] = '<br>Unsplash for Contao &mdash; provided by:';
$GLOBALS['TL_LANG']['MSC']['unsplash']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['unsplash']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/unsplash_icon.png" alt="Logo Unsplash Inc" title="Unsplash Inc"></figure>';
$GLOBALS['TL_LANG']['MSC']['unsplash']['hint'] = '<p>Photos provided by <a href="https://unsplash.com/" target="_blank" rel="noopener noreferrer"><u>Unsplash</u></a>.</p>'
    .'<p><strong>Guidelines</strong></p>'
    .'<ul>'
    .'<li>By default, the API is limited to 50 queries per hour.</li>'
    .'<li>Always credit our photographer when possible (e.g. "Photo by John Doe on Unsplash" with a link to the photo page on Unsplash).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API documentation: <a href="https://unsplash.com/developers" target="_blank" rel="noopener noreferrer"><u>unsplash.com/developers</u></a></p>'
    .'<p>API status: <a href="https://status.unsplash.com/" target="_blank" rel="noopener noreferrer"><u>status.unsplash.com</u></a></p>'
    .'<p>Please note the <strong>Unsplash <a href="https://unsplash.com/terms" target="_blank" rel="noopener noreferrer"><u>Terms & Conditions</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['unsplash']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['unsplash']['cachedResult'] = 'Cache result; To keep the Unsplash API fast for everyone, requests are cached for 24 hours.';

$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_legend'] = 'Unsplash settings';
$GLOBALS['TL_LANG']['tl_unsplash']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_unsplash']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_unsplash']['result_legend'] = 'Search results';

$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_order_by'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_order_by'][1] = 'How the results should be ordered.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_orientation'][0] = 'Orientation';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_orientation'][1] = 'Whether an image is wider than it is tall, or taller than it is wide.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_color'][0] = 'Colors';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_color'][1] = 'Filter images by color properties.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_content_filter'][0] = 'Filter';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_content_filter'][1] = 'Content safety.';

$GLOBALS['TL_LANG']['tl_unsplash']['options']['orientation'] = [
    'landscape' => 'Landscape',
    'portrait' => 'Portrait',
    'squarish' => 'Squarish',
];

$GLOBALS['TL_LANG']['tl_unsplash']['options']['order_by'] = [
    'relevant' => 'Relevant',
    'latest' => 'Latest',
];

$GLOBALS['TL_LANG']['tl_unsplash']['options']['content_filter'] = [
    'low' => 'Safe (No images containing nudity or violence)',
    'high' => 'Restricted (further remove content that may be inappropriate for younger audiences)',
];

$GLOBALS['TL_LANG']['tl_unsplash']['options']['color'] = [
    'black_and_white' => 'Black and white',
    'black' => 'Black',
    'white' => 'White',
    'yellow' => 'Yellow',
    'orange' => 'orange',
    'red' => 'Red',
    'purple' => 'Purple',
    'magenta' => 'Magenta',
    'green' => 'Green',
    'teal' => 'Teal',
    'blue' => 'Blue',
];
