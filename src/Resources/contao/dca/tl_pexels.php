<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Contao\System;
use Trilobit\WorldofimagesBundle\DataProvider\Configuration\ConfigurationProvider;

/* todo: make complete */

$GLOBALS['TL_DCA']['tl_pexels'] = [
    'config' => [
        'dataContainer' => 'File',
        'closed' => true,
    ],

    'palettes' => [
        'default' => '{filter_legend},pexels_orientation,pexels_color',
    ],
    'fields' => [
        'pexels_orientation' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pexelsGetOrientation'],
            //'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'pexels_color' => [
            'inputType' => 'select',
            'options_callback' => [ConfigurationProvider::class, 'pexelsGetColor'],
            //'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors'],
            'eval' => ['chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
    ],
];
