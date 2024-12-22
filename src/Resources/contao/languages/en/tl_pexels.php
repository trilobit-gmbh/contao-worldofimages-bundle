<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

/* todo: make complete */

$GLOBALS['TL_LANG']['MSC']['pexels']['poweredBy'] = '<br>Pexels for Contao &mdash; provided by:';
$GLOBALS['TL_LANG']['MSC']['pexels']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pexels']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/pexels_icon.png" alt="Logo Pexels GmbH" title="Pexels GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pexels']['hint'] = '<p>Photos provided by <a href="https://www.pexels.com/" target="_blank" rel="noopener noreferrer"><u>Pexels</u></a>.</p>'
    .'<p><strong>Guidelines</strong></p>'
    .'<ul>'
    .'<li>By default, the API is rate-limited to 200 requests per hour and</li>'
    .'<li>20,000 requests per month.</li>'
    .'<li>Always credit our photographers when possible (e.g. "Photo by John Doe on Pexels" with a link to the photo page on Pexels).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API documentation: <a href="https://www.pexels.com/api/documentation/" target="_blank" rel="noopener noreferrer"><u>www.pexels.com/api/documentation/</u></a></p>'
    .'<p>Please note the <strong>Pexels <a href="https://www.pexels.com/photo-license/" target="_blank" rel="noopener noreferrer"><u>Terms & Conditions</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['pexels']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['pexels']['cachedResult'] = 'Cache result; To keep the Pexels API fast for everyone, requests are cached for 24 hours.';

$GLOBALS['TL_LANG']['tl_pexels']['pexels_legend'] = 'Pexels settings';
$GLOBALS['TL_LANG']['tl_pexels']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_pexels']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_pexels']['result_legend'] = 'Search result';

$GLOBALS['TL_LANG']['tl_pexels']['pexels_orientation'][0] = 'Orientation';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_orientation'][1] = 'Whether an image is wider than it is tall, or taller than it is wide.';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_color'][0] = 'Colors';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_color'][1] = 'Filter images by color properties.';

$GLOBALS['TL_LANG']['tl_pexels']['options']['orientation'] = [
    'landscape' => 'Landscape',
    'portrait' => 'Portrait',
    'squarish' => 'Squarish',
];

$GLOBALS['TL_LANG']['tl_pexels']['options']['color'] = [
    'red' => 'Red',
    'orange' => 'Orange',
    'yellow' => 'Yellow',
    'green' => 'Green',
    'turquoise' => 'Turquoise',
    'blue' => 'Blue',
    'violet' => 'Violet',
    'pink' => 'Pink',
    'brown' => 'Brown',
    'black' => 'Black',
    'gray' => 'Gray',
    'white' => 'White',
];
