<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

use Contao\Input;
use Contao\System;

$request = System::getContainer()
    ->get('request_stack')
    ->getCurrentRequest()
;

if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request)) {
    $GLOBALS['TL_CSS'][] = 'bundles/trilobitworldofimages/css/backend.css';

    if (empty(Input::get('source'))) {
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/trilobitworldofimages/js/backend.js';
    }
}

$GLOBALS['TRILOBIT']['worldofimages']['provider'] = [
    'unsplash',
    'pixabay',
    'pexels',
    'flickr',
];
