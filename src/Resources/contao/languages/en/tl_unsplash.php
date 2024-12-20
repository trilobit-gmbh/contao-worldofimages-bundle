<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

$GLOBALS['TL_LANG']['MSC']['unsplash']['poweredBy'] = '<br>Unsplash für Contao &mdash; zur Verfügung gestellt von:';
$GLOBALS['TL_LANG']['MSC']['unsplash']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['unsplash']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/unsplash_icon.png" alt="Logo Unsplash Inc" title="Unsplash Inc"></figure>';
$GLOBALS['TL_LANG']['MSC']['unsplash']['hint'] = '<p>Fotos zur Verfügung gestellt von <a href="https://unsplash.com/" target="_blank" rel="noopener noreferrer"><u>Unsplash</u></a>.</p>'
    .'<p><strong>Richtlinien</strong></p>'
    .'<ul>'
    .'<li>Standardmäßig ist die API beschränkt auf 50 Abfragen pro Stunde.</li>'
    .'<li>Nennen Sie immer unseren Fotografen wenn möglich (z.B. "Foto von John Doe auf Unsplash" mit einem Link zur Fotoseite auf Unsplash).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API-Dokumentation: <a href="https://unsplash.com/developers" target="_blank" rel="noopener noreferrer"><u>unsplash.com/developers</u></a></p>'
    .'<p>Beachten Sie bitte die <strong>Unsplash <a href="https://unsplash.com/terms" target="_blank" rel="noopener noreferrer"><u>Nutzungsbedingungen</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['unsplash']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['unsplash']['cachedResult'] = 'Cache result; To keep the Unsplash API fast for everyone, requests are cached for 24 hours.';

$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_legend'] = 'Unsplash settings';
$GLOBALS['TL_LANG']['tl_unsplash']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_unsplash']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_unsplash']['result_legend'] = 'Search results';

$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_order_by'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_order_by'][1] = 'Order by.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_orientation'][0] = 'Orientation';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_orientation'][1] = 'Orientation.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_color'][0] = 'Colors';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_color'][1] = 'Colors.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_content_filter'][0] = 'Filter';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_content_filter'][1] = 'Filter.';

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
