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

$GLOBALS['TL_DCA']['tl_pixabay'] = [
    'config' => [
        'dataContainer' => 'File',
        'closed' => true,
    ],
    'palettes' => [
        'default' => '{search_legend},searchQuery,searchSubmit;'
            .'{filter_legend},pixabay_image_type,pixabay_category,pixabay_order,pixabay_orientation,pixabay_min_width,pixabay_min_height,pixabay_colors,pixabay_editors_choice,pixabay_safesearch;'
            .'{result_legend},images,pagination',
    ],
    'fields' => [
        'pixabay_image_type' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pixabayGetImageType'],
            'load_callback' => [ConfigurationProvider::class, 'getValue'],
            'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(128) NOT NULL default ''",
        ],
        'pixabay_category' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pixabayGetCategory'],
            'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['category'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'pixabay_order' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pixabayGetOrder'],
            'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['order'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'pixabay_orientation' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pixabayGetOrientation'],
            'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'pixabay_colors' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pixabayGetColors'],
            'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'pixabay_editors_choice' => [
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'clr w50'],
            'sql' => "char(1) NOT NULL default ''",
        ],
        'pixabay_safesearch' => [
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50'],
            'sql' => "char(1) NOT NULL default ''",
        ],
        'pixabay_min_width' => [
            'inputType' => 'text',
            'eval' => ['rgxp' => 'natural', 'nospace' => true, 'tl_class' => 'w50'],
            'sql' => 'int(10) NULL',
        ],
        'pixabay_min_height' => [
            'inputType' => 'text',
            'eval' => ['rgxp' => 'natural', 'nospace' => true, 'tl_class' => 'w50'],
            'sql' => 'int(10) NULL',
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
