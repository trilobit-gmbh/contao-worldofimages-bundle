<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

$GLOBALS['TL_LANG']['MSC']['flickr']['poweredBy'] = '<br>Flickr for Contao &mdash; provided by:';
$GLOBALS['TL_LANG']['MSC']['flickr']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['flickr']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/flickr_icon.png" alt="Logo Flickr, Inc." title="Flickr, Inc."></figure>';
$GLOBALS['TL_LANG']['MSC']['flickr']['hint'] = '<p>Photos provided by <a href="https://www.flickr.com/" target="_blank" rel="noopener noreferrer"><u>Flickr</u></a>.</p>'
    .'<p><strong>Guidelines</strong></p>'
    .'<ul>'
    .'<li>By default, the API is limited to 3,600 queries per hour.</li>'
    .'<li>Always credit our photographer when possible (e.g. "Photo by John Doe on Flickr" with a link to the photo page on Flickr).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API documentation: <a href="https://www.flickr.com/services/api/" target="_blank" rel="noopener noreferrer"><u>www.flickr.com/services/api/</u></a></p>'
    .'<p>Please note the <strong>Flickr <a href="https://www.flickr.com/help/terms" target="_blank" rel="noopener noreferrer"><u>Terms & Conditions</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['flickr']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['flickr']['cachedResult'] = 'Cache result; To keep the Flickr API fast for everyone, requests are cached for 24 hours.';

$GLOBALS['TL_LANG']['tl_flickr']['flickr_legend'] = 'Flickr settings';
$GLOBALS['TL_LANG']['tl_flickr']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_flickr']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_flickr']['result_legend'] = 'Search result';

$GLOBALS['TL_LANG']['tl_flickr']['flickr_search'][0] = 'Search mode';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_search'][1] = 'Tag or text search.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_tag_mode'][0] = 'Tag mode';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_tag_mode'][1] = 'Either \'any\' for an OR combination of tags, or \'all\' for an AND combination. Defaults to \'any\' if not specified.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_safe_search'][0] = 'Safe search';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_safe_search'][1] = 'Safe search setting.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_sort'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_sort'][1] = 'How the results should be ordered.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_content_types'][0] = 'Content type';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_content_types'][1] = 'Filter results by media type.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_upload_date'][0] = 'Minimum upload date';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_upload_date'][1] = 'Minimum upload date. Photos with an upload date greater than or equal to this value will be returned.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_upload_date'][0] = 'Maximum upload date';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_upload_date'][1] = 'Maximum upload date. Photos with an upload date less than or equal to this value will be returned.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_taken_date'][0] = 'Minimum taken date';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_min_taken_date'][1] = 'Minimum taken date. Photos with an taken date greater than or equal to this value will be returned.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_taken_date'][0] = 'Maximum taken date';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_max_taken_date'][1] = 'Maximum taken date. Photos with an taken date less than or equal to this value will be returned.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_contacts'][0] = 'Contacts';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_contacts'][1] = 'Search your contacts. Either \all\ or \ff\ for just friends and family.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_group_id'][0] = 'Group ID';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_group_id'][1] = 'The id of a group who\'s pool to search. If specified, only matching photos posted to the group\'s pool will be returned.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_has_geo'][0] = 'Has been geotagged';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_has_geo'][1] = 'Any photo that has been geotagged, or if the value is \'0\' any photo that has not been geotagged.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_geo_context'][0] = 'Geo context';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_geo_context'][1] = 'Geo context is a numeric value representing the photo\'s geotagginess beyond latitude and longitude.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lat'][0] = 'Latitude';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lat'][1] = 'A valid latitude, in decimal format, for doing radial geo queries.';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lon'][0] = 'Longitude';
$GLOBALS['TL_LANG']['tl_flickr']['flickr_lon'][1] = 'A valid longitude, in decimal format, for doing radial geo queries.';

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
    '1' => 'Safe',
    '2' => 'Moderate',
    '3' => 'Restricted',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['content_types'] = [
    '0' => 'Photos',
    '1' => 'Screenshots',
    '2' => '„other“',
    '3' => 'Virtual photos',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['geo_context'] = [
    '0' => 'not defined',
    '1' => 'indoors',
    '2' => 'outdoors',
];

$GLOBALS['TL_LANG']['tl_flickr']['options']['search'] = [
    'tags' => 'Tag search',
    'text' => 'Text search',
];
