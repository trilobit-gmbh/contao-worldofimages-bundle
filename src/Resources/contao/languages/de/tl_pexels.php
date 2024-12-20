<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

/* todo: make complete */

$GLOBALS['TL_LANG']['MSC']['pexels']['poweredBy'] = '<br>Pexels für Contao &mdash; zur Verfügung gestellt von:';
$GLOBALS['TL_LANG']['MSC']['pexels']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pexels']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/pexels_icon.png" alt="Logo Pexels GmbH" title="Pexels GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pexels']['hint'] = '<p>Fotos zur Verfügung gestellt von <a href="https://www.pexels.com/" target="_blank" rel="noopener noreferrer"><u>Pexels</u></a>.</p>'
    .'<p><strong>Richtlinien</strong></p>'
    .'<ul>'
    .'<li>Standardmäßig ist die API beschränkt auf 200 Abfragen pro Stunde und</li>'
    .'<li>20.000 Abfragen pro Monat.</li>'
    .'<li>Nennen Sie immer unseren Fotografen wenn möglich (z.B. "Foto von John Doe auf Pexels" mit einem Link zur Fotoseite auf Pexels).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API-Dokumentation: <a href="https://www.pexels.com/api/documentation/" target="_blank" rel="noopener noreferrer"><u>www.pexels.com/api/documentation/</u></a></p>'
    .'<p>Beachten Sie bitte die <strong>Pexels <a href="https://www.pexels.com/photo-license/" target="_blank" rel="noopener noreferrer"><u>Nutzungsbedingungen</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['pexels']['resultCount'] = 'Treffer';
$GLOBALS['TL_LANG']['MSC']['pexels']['cachedResult'] = 'Cache-Ergebnis; Um die Pexels-API für alle schnell zu halten, werden Anfragen 24 Stunden zwischengespeichert.';

$GLOBALS['TL_LANG']['tl_pexels']['pexels_legend'] = 'Pexels-Einstellungen';
$GLOBALS['TL_LANG']['tl_pexels']['search_legend'] = 'Suche';
$GLOBALS['TL_LANG']['tl_pexels']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_pexels']['result_legend'] = 'Suchergebnisse';

$GLOBALS['TL_LANG']['tl_pexels']['pexels_orientation'][0] = 'Ausrichtung';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_orientation'][1] = 'Ausrichtung.';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_color'][0] = 'Farben';
$GLOBALS['TL_LANG']['tl_pexels']['pexels_color'][1] = 'Farben.';

$GLOBALS['TL_LANG']['tl_pexels']['options']['orientation'] = [
    'landscape' => 'Horizontal',
    'portrait' => 'Vertikal',
    'squarish' => 'Quadratisch',
];

$GLOBALS['TL_LANG']['tl_pexels']['options']['color'] = [
    'red' => 'Rot',
    'orange' => 'Orange',
    'yellow' => 'Gelb',
    'green' => 'Grün',
    'turquoise' => 'Türkis',
    'blue' => 'Blau',
    'violet' => 'Violett',
    'pink' => 'Rosa',
    'brown' => 'Braun',
    'black' => 'Schwarz',
    'gray' => 'Grau',
    'white' => 'Weiß',
];
