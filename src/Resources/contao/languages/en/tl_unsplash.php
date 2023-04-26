<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

$GLOBALS['TL_LANG']['MSC']['unsplash']['poweredBy'] = '<br>Unsplash für Contao &mdash; zur Verfügung gestellt von:';
$GLOBALS['TL_LANG']['MSC']['unsplash']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['unsplash']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/unsplash_icon.png" alt="Logo Unsplash Inc" title="Unsplash Inc"></figure>';
$GLOBALS['TL_LANG']['MSC']['unsplash']['hint'] = '<p>Fotos zur Verfügung gestellt von <a href="https://unsplash.com/" target="_blank" rel="noopener noreferrer"><u>Unsplash</u></a>.</p>'
    .'<p><strong>Richtlinien</strong></p>'
    .'<ul>'
    .'<li>Standardmäßig ist die API beschränkt auf 5.000 Abfragen pro Stunde.</li>'
    .'<li>Nennen Sie immer unseren Fotografen wenn möglich (z.B. "Foto von John Doe auf Unsplash" mit einem Link zur Fotoseite auf Unsplash).</li>'
    .'</ul>'
    .'<br>'
    .'<p>API-Dokumentation: <a href="https://unsplash.com/developers" target="_blank" rel="noopener noreferrer"><u>unsplash.com/developers</u></a></p>'
    .'<p>Beachten Sie bitte die <strong>Unsplash <a href="https://unsplash.com/terms" target="_blank" rel="noopener noreferrer"><u>Nutzungsbedingungen</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['unsplash']['resultCount'] = 'Treffer';
$GLOBALS['TL_LANG']['MSC']['unsplash']['cachedResult'] = 'Cache-Ergebnis; Um die Pixabay-API für alle schnell zu halten, werden Anfragen 24 Stunden zwischengespeichert.';

$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_legend'] = 'Unsplash-Einstellungen';
$GLOBALS['TL_LANG']['tl_unsplash']['search_legend'] = 'Suche';
$GLOBALS['TL_LANG']['tl_unsplash']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_unsplash']['result_legend'] = 'Suchergebnisse';

$GLOBALS['TL_LANG']['tl_unsplash']['queryTitle'] = 'Suchbegriffe';
$GLOBALS['TL_LANG']['tl_unsplash']['queryHelp'] = 'Bitte geben sie hier ihren Suchbegriff bzw. ihre Suchbegriffe ein.';

$GLOBALS['TL_LANG']['tl_unsplash']['searchTitle'] = '';
$GLOBALS['TL_LANG']['tl_unsplash']['searchButton'] = 'Suche starten';
$GLOBALS['TL_LANG']['tl_unsplash']['searchHelp'] = '';

$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_order_by'][0] = 'Sortierung';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_order_by'][1] = 'Sortierung.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_orientation'][0] = 'Ausrichtung';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_orientation'][1] = 'Ausrichtung.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_color'][0] = 'Farben';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_color'][1] = 'Farben.';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_content_filter'][0] = 'Filter';
$GLOBALS['TL_LANG']['tl_unsplash']['unsplash_content_filter'][1] = 'Filter.';

$GLOBALS['TL_LANG']['tl_unsplash']['options']['orientation'] = [
    'landscape' => 'Horizontal',
    'portrait' => 'Vertikal',
    'squarish' => 'Quadratisch',
];

$GLOBALS['TL_LANG']['tl_unsplash']['options']['order_by'] = [
    'relevant' => 'Relevant',
    'latest' => 'Neu',
];

$GLOBALS['TL_LANG']['tl_unsplash']['options']['content_filter'] = [
    'low' => 'Sicher (Keine Bilder, die Nacktheit oder Gewalt enthalten)',
    'high' => 'Eingeschränkt (Inhalte weiter entfernen, die für jüngere Zielgruppen möglicherweise ungeeignet sind)',
];

$GLOBALS['TL_LANG']['tl_unsplash']['options']['color'] = [
    'black_and_white' => 'Rot',
    'black' => 'Schwarz',
    'white' => 'Weiß',
    'yellow' => 'Gelb',
    'orange' => 'Orange',
    'red' => 'Rot',
    'purple' => 'Lila',
    'magenta' => 'Magenta',
    'green' => 'Grün',
    'teal' => 'Blaugrün',
    'blue' => 'Blau',
];
