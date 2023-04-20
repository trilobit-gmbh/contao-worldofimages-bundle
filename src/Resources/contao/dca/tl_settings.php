<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;
use Trilobit\WorldofimagesBundle\DataProvider\Configuration\ConfigurationProvider;

$GLOBALS['TL_DCA']['tl_settings']['fields']['pixabayApiKey'] = [
    'inputType' => 'text',
    'eval' => ['tl_class' => 'clr w50'],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['pexelsApiKey'] = [
    'inputType' => 'text',
    'eval' => ['tl_class' => 'clr w50'],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['unsplashApiKey'] = [
    'inputType' => 'text',
    'eval' => ['tl_class' => 'clr w50'],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickrApiKey'] = [
    'inputType' => 'text',
    'eval' => ['tl_class' => 'clr w50'],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['pixabayHighResolution'] = [
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['pixabayImageSource'] = [
    'inputType' => 'select',
    'options_callback' => [ConfigurationProvider::class, 'pixabayGetImageSource'],
    'reference' => &$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source'],
    'eval' => ['chosen' => true, 'tl_class' => 'w50'],
];

PaletteManipulator::create()
    ->addLegend('worldofimages_legend', 'proxy_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField(
        ['flickrApiKey', 'pexelsApiKey', 'pixabayApiKey', 'pixabayImageSource', 'unsplashApiKey'],
        'worldofimages_legend',
        PaletteManipulator::POSITION_APPEND
    )
    ->applyToPalette('default', 'tl_settings')
;
