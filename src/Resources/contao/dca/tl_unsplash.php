<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Trilobit\WorldofimagesBundle\DataProvider\Configuration\ConfigurationProvider;
use Trilobit\WorldofimagesBundle\FileUpload\Zone;

/* todo: make complete */

$GLOBALS['TL_DCA']['tl_unsplash'] = [
    'config' => [
        'dataContainer' => 'File',
        'closed' => true,
    ],
    'palettes' => [
        'default' => '{search_legend},searchQuery,searchSubmit;'
            .'{filter_legend},unsplash_order_by,unsplash_orientation,unsplash_color,unsplash_content_filter;'
            .'{result_legend},images,pagination',
    ],
    'fields' => [
        'unsplash_order_by' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'unsplashGetOrderby'],
            'reference' => &$GLOBALS['TL_LANG']['tl_unsplash']['options']['order_by'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'unsplash_orientation' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'unsplashGetOrientation'],
            'reference' => &$GLOBALS['TL_LANG']['tl_unsplash']['options']['orientation'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'unsplash_color' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'unsplashGetColor'],
            'reference' => &$GLOBALS['TL_LANG']['tl_unsplash']['options']['color'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'unsplash_content_filter' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'unsplashGetContentfilter'],
            'reference' => &$GLOBALS['TL_LANG']['tl_unsplash']['options']['content_filter'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
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
