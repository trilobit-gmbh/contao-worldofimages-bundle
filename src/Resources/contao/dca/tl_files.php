<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Contao\Config;
use Contao\System;
use Trilobit\WorldofimagesBundle\FileUpload\Zone;

foreach ($GLOBALS['TRILOBIT']['worldofimages']['provider']  as $provider) {
    if ('' !== Config::get($provider.'ApiKey')) {
        System::loadLanguageFile('tl_'.$provider);

        $GLOBALS['TL_DCA']['tl_files']['config']['onload_callback'][] = [Zone::class, $provider.'SetUploader'];

        $GLOBALS['TL_DCA']['tl_files']['list']['global_operations'] = array_merge(
            [$provider => [
                'label' => ucfirst($provider),
                'href' => 'act=paste&mode=move&source='.$provider,
                'class' => 'header_'.$provider.' header_imageworld_item',
                'data' => 'imageworld',
                'icon' => '/bundles/trilobitworldofimages/'.$provider.'_icon.tiny.png',
                'button_callback' => [Zone::class, $provider.'HasAccess'],
            ]],
            $GLOBALS['TL_DCA']['tl_files']['list']['global_operations']
        );
    }
}

$GLOBALS['TL_DCA']['tl_files']['list']['global_operations'] = array_merge(
    ['image_worlds' => [
        'label' => 'Bilderwelt',
        'href' => 'act=paste&mode=move',
        'class' => 'header_imageworld',
        'icon' => 'sizes.svg',
    ]],
    $GLOBALS['TL_DCA']['tl_files']['list']['global_operations']
);
