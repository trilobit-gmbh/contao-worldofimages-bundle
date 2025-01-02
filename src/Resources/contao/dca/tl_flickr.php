<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Contao\System;
use Trilobit\WorldofimagesBundle\DataProvider\Configuration\ConfigurationProvider;
use Trilobit\WorldofimagesBundle\FileUpload\Zone;

//System::loadLanguageFile('tl_pexels');

$GLOBALS['TL_DCA']['tl_flickr'] = [
    'config' => [
        'dataContainer' => 'File',
        'closed' => true,
    ],
    'palettes' => [
        'default' => '{search_legend},searchQuery,searchSubmit;'
            .'{filter_legend},flickr_search,flickr_tag_mode,flickr_safe_search,flickr_sort,flickr_content_type,flickr_min_upload_date,flickr_max_upload_date,flickr_min_taken_date,flickr_max_taken_date,flickr_contacts,flickr_group_id,flickr_has_geo,flickr_geo_context,flickr_lat,flickr_lon;'
            .'{result_legend},images,pagination',
    ],
    'fields' => [
        'flickr_search' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'flickrGetSearch'],
            'reference' => &$GLOBALS['TL_LANG']['tl_flickr']['options']['search'],
            'eval' => ['chosen' => true, 'tl_class' => 'clr w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_min_upload_date' => [
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(10) NOT NULL default ''",
        ],
        'flickr_max_upload_date' => [
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(10) NOT NULL default ''",
        ],
        'flickr_min_taken_date' => [
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(10) NOT NULL default ''",
        ],
        'flickr_max_taken_date' => [
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(10) NOT NULL default ''",
        ],
        'flickr_tag_mode' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'flickrGetTagMode'],
            'reference' => &$GLOBALS['TL_LANG']['tl_flickr']['options']['tag_mode'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_sort' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'flickrGetSort'],
            'reference' => &$GLOBALS['TL_LANG']['tl_flickr']['options']['sort'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_safe_search' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'flickrGetSafeSearch'],
            'reference' => &$GLOBALS['TL_LANG']['tl_flickr']['options']['safe_search'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_content_types' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'flickrGetContentTypes'],
            'reference' => &$GLOBALS['TL_LANG']['tl_flickr']['options']['content_types'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_group_id' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_contacts' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'clr w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_has_geo' => [
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'clr w50'],
            'sql' => "char(1) NOT NULL default ''",
        ],
        'flickr_geo_context' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'flickrGetGeoContext'],
            'reference' => &$GLOBALS['TL_LANG']['tl_flickr']['options']['geo_context'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'clr w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_lat' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'clr w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'flickr_lon' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],

        'searchQuery' => [
            'label' => &$GLOBALS['TL_LANG']['MSC']['woi_query'],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],
        'searchSubmit' => [
            'label' => &$GLOBALS['TL_LANG']['MSC']['woi_search'],
            'inputType' => 'text',
            'input_field_callback' => [Zone::class, 'onSearchSubmitField'],
            'eval' => ['tl_class' => 'w50'],
        ],
        'images' => [
            'inputType' => 'text',
            'input_field_callback' => [Zone::class, 'onImagesField'],
            'eval' => ['tl_class' => 'widget clr'],
        ],
        'pagination' => [
            'inputType' => 'text',
            'input_field_callback' => [Zone::class, 'onPaginationField'],
        ],
    ],
];
