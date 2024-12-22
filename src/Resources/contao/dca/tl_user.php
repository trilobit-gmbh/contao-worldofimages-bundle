<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Contao\Config;
use Contao\Controller;
use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;

foreach ($GLOBALS['TRILOBIT']['worldofimages']['provider']  as $provider) {
    if (empty(Config::get($provider.'ApiKey'))) {
        continue;
    }

    System::loadLanguageFile('tl_'.$provider);
    Controller::loadDataContainer('tl_'.$provider);

    $GLOBALS['TL_DCA']['tl_user']['fields'] = array_merge(
        $GLOBALS['TL_DCA']['tl_user']['fields'],
        $GLOBALS['TL_DCA']['tl_'.$provider]['fields']
    );

    if (empty(array_keys($GLOBALS['TL_DCA']['tl_'.$provider]['fields']))) {
        continue;
    }

    foreach (array_keys($GLOBALS['TL_DCA']['tl_user']['palettes']) as $palette) {
        if ('__selector__' === $palette) {
            continue;
        }

        PaletteManipulator::create()
            ->addLegend($provider.'_legend', 'backend_legend', PaletteManipulator::POSITION_APPEND)
            ->addField(
                array_filter(
                    array_map(
                        static function($item) use ($provider): string {
                            if (str_contains($item, $provider)) {
                                return $item;
                            }

                            return '';
                        },
                        array_keys($GLOBALS['TL_DCA']['tl_'.$provider]['fields'])
                    )
                ),
                $provider.'_legend'
            )
            ->applyToPalette($palette, 'tl_user')
        ;
    }
}
