<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

$GLOBALS['TL_LANG']['MSC']['flickr']['poweredBy'] = '<br>Flickr für Contao &mdash; zur Verfügung gestellt von:';
$GLOBALS['TL_LANG']['MSC']['flickr']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['flickr']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/flickr_icon.png" alt="Logo Flickr, Inc." title="Flickr, Inc."></figure>';
$GLOBALS['TL_LANG']['MSC']['flickr']['hint'] = '<p>Fotos zur Verfügung gestellt von <a href="https://www.flickr.com/" target="_blank" rel="noopener noreferrer"><u>Flickr</u></a>.</p>'
    .'<p><strong>Richtlinien</strong></p>'
    .'<ul>'
    .'<li>Standardmäßig ist die API beschränkt auf 200 Abfragen pro Stunde und</li>'
    .'<li>20.000 Abfragen pro Monat.</li>'
    .'<li>Nennen Sie immer unseren Fotografen wenn möglich (z.B. "Foto von John Doe auf Flickr" mit einem Link zur Fotoseite auf Flickr).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API-Dokumentation: <a href="https://www.flickr.com/services/api/" target="_blank" rel="noopener noreferrer"><u>www.flickr.com/services/api/</u></a></p>'
    .'<p>Beachten Sie bitte die <strong>Flickr <a href="https://www.flickr.com/help/terms" target="_blank" rel="noopener noreferrer"><u>Nutzungsbedingungen</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['flickr']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['flickr']['cachedResult'] = 'Cache result; To keep the Flickr API fast for everyone, requests are cached for 24 hours.';

$GLOBALS['TL_LANG']['tl_flickr']['flickr_legend'] = 'Flickr settings';
$GLOBALS['TL_LANG']['tl_flickr']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_flickr']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_flickr']['result_legend'] = 'Search results';

$GLOBALS['TL_LANG']['tl_flickr']['flickr_search'][0] = 'Search mode';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_search'][1] = 'Tag- oder Text-Suche.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_tag_mode'][0] = 'Tag mode';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_tag_mode'][1] = 'Entweder „beliebig“ für eine ODER-Kombination von Tags oder „alle“ für eine UND-Kombination. Standardmäßig „beliebig“, wenn nicht anders angegeben.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_safe_search'][0] = 'Safe search';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_safe_search'][1] = 'Safe search.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_sort'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_sort'][1] = 'Order by.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_content_type'][0] = 'Content type';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_content_type'][1] = 'Content type.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_upload_date'][0] = 'Minimales Uploaddatum';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_upload_date'][1] = 'Minimales Uploaddatum.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_upload_date'][0] = 'Maximales Uploaddatum';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_upload_date'][1] = 'Maximales Uploaddatum.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_taken_date'][0] = 'Minimales Aufnahmedatum';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_taken_date'][1] = 'Minimales Aufnahmedatum.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_taken_date'][0] = 'Maximales Aufnahmedatum';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_taken_date'][1] = 'Maximales Aufnahmedatum.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_contacts'][0] = 'Contacts';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_contacts'][1] = 'Durchsuchen Sie Ihre Kontakte.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_group_id'][0] = 'Group ID';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_group_id'][1] = 'ID einer Gruppe, deren Pool zu durchsuchen ist.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_has_geo'][0] = 'Fotos mit Geotags';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_has_geo'][1] = 'Fotos, das mit Geotags versehen wurde.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_geo_context'][0] = 'Geo-Kontext';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_geo_context'][1] = 'Geo-Kontext.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lat'][0] = 'Latitude';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lat'][1] = 'Latitude.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lon'][0] = 'Longitude';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lon'][1] = 'Longitude.';

$GLOBALS['TL_LANG']['tl_flickr']['options']['tag_mode'] = [
    'OR' => 'Any',
    'AND' => 'All',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['sort'] = [
    'date-posted-asc' => 'Date posted ↑',
    'date-posted-desc' => 'Date posted  ↓',
    'date-taken-asc' => 'Date taken ↑',
    'date-taken-desc' => 'Date taken  ↓',
    'interestingness-desc' => 'Interestingness  ↓',
    'interestingness-asc' => 'Interestingness ↑',
    'relevance' => 'Relevanz',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['safe_search'] = [
    '1' => 'Sicher',
    '2' => 'Mäßig',
    '3' => 'Eingeschränkt',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['content_type'] = [
    '1' => 'Fotos',
    '2' => 'Screenshots',
    '3' => '„Sonstiges“',
    '4' => 'Fotos und Screenshots',
    '5' => 'Screenshots und „Sonstiges“.',
    '6' => 'Fotos und „Sonstiges“',
    '7' => 'Fotos, Screenshots und „Sonstiges“ (alle)',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['geo_context'] = [
    '0' => 'Nicht definiert',
    '1' => 'Drinnen',
    '2' => 'Draußen',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['search'] = [
    'tags' => 'Tag-Suche',
    'text' => 'Text-Suche',
];
