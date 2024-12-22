<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

/* todo: make complete */

$GLOBALS['TL_LANG']['MSC']['pixabay']['poweredBy'] = '<br>Pixabay für Contao &mdash; zur Verfügung gestellt von:';
$GLOBALS['TL_LANG']['MSC']['pixabay']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pixabay']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/pixabay_icon.png" alt="Logo Pixabay GmbH" title="Pixabay GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pixabay']['hint'] = '<p>Fotos zur Verfügung gestellt von <a href="https://pixabay.com" target="_blank" rel="noopener noreferrer"><u>Pixabay</u></a>.</p>'
    .'<p><strong>Richtlinien</strong></p>'
    .'<ul>'
    .'<li>Standardmäßig ist die API beschränkt auf 6.000 Anfragen pro Stunde (Anfragen sind an den API-Key geknüpft) und</li>'
    .'<li>maximal 500 Bilder pro Abfrage.</li>'
    .'</ul>'
    .'<br>'
    .'<p>API-Dokumentation: <a href="https://pixabay.com/api/docs/" target="_blank" rel="noopener noreferrer"><u>pixabay.com/api/docs/</u></a></p>'
    .'<p>Beachten Sie bitte die <strong>Pixabay <a href="https://pixabay.com/de/service/terms/#license" target="_blank" rel="noopener noreferrer"><u>Nutzungsbedingungen</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['pixabay']['resultCount'] = 'Treffer';
$GLOBALS['TL_LANG']['MSC']['pixabay']['cachedResult'] = 'Cache-Ergebnis; Um die Pixabay-API für alle schnell zu halten, werden Anfragen 24 Stunden zwischengespeichert.';

$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_legend'] = 'Pixabay-Einstellungen';
$GLOBALS['TL_LANG']['tl_pixabay']['search_legend'] = 'Suche';
$GLOBALS['TL_LANG']['tl_pixabay']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_pixabay']['result_legend'] = 'Suchergebnisse';

$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_image_type'][0] = 'Typ';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_image_type'][1] = 'Typ.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_orientation'][0] = 'Ausrichtung';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_orientation'][1] = 'Ausrichtung.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_order'][0] = 'Sortierung';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_order'][1] = 'Sortierung.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_category'][0] = 'Kategorie';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_category'][1] = 'Kategorie.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_width'][0] = 'Minimale Bildbreite';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_width'][1] = 'Minimale Bildbreite.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_height'][0] = 'Minimale Bildhöhe';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_height'][1] = 'Minimale Bildhöhe.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_colors'][0] = 'Farben';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_colors'][1] = 'Farben.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_editors_choice'][0] = 'Editor\'s Choice Award';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_editors_choice'][1] = 'Wählen Sie Bilder aus, die einen Editor\'s Choice Award erhalten haben.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_safesearch'][0] = 'SafeSearch';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_safesearch'][1] = 'SafeSearch.';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['category'] = [
    'all' => 'Alle',
    'buildings' => 'Architektur/Gebäude',
    'business' => 'Business/Finanzen',
    'computer' => 'Computer/Kommunikation',
    'feelings' => 'Emotionen',
    'food' => 'Essen/Trinken',
    'health' => 'Gesundheit/Medizin',
    'backgrounds' => 'Hintergründe/Muster',
    'industry' => 'Industrie/Handwerk',
    'people' => 'Menschen/Personen',
    'music' => 'Musik',
    'nature' => 'Natur/Landschaft',
    'places' => 'Plätze/Monumente',
    'travel' => 'Reisen/Ferien',
    'religion' => 'Religion',
    'education' => 'Schule/Ausbildung',
    'fashion' => 'Schönheit/Mode',
    'sports' => 'Sport',
    'animals' => 'Tiere',
    'transportation' => 'Transport/Verkehr',
    'science' => 'Wissenschaft/Technik',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation'] = [
    'all' => 'Jede Ausrichtung',
    'horizontal' => 'Horizontal',
    'vertical' => 'Vertikal',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['order'] = [
    'popular' => 'Beliebt',
    'latest' => 'Neu',
    'ec' => 'Editor\'s Choice',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type'] = [
    'all' => 'Alle Bilder',
    'photo' => 'Fotos',
    'illustration' => 'Illustrationen',
    'vector' => 'Vektorgrafiken',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors'] = [
    'grayscale' => 'Graustufen',
    'transparent' => 'transparent',
    'red' => 'Rot',
    'orange' => 'Orange',
    'yellow' => 'Gelb',
    'green' => 'Grün',
    'turquoise' => 'Türkis',
    'blue' => 'Blau',
    'lilac' => 'lila',
    'pink' => 'Rosa',
    'white' => 'Weiß',
    'gray' => 'Grau',
    'black' => 'Schwarz',
    'brown' => 'Braun',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source'] = [
    'webformatURL' => '640 Pixel Breite [webformatURL]',
    'largeImageURL' => '1280 Pixel Breite [largeImageURL]',
    'fullHDURL' => '1920 Pixel Breite [fullHDURL]',
    'imageURL' => 'original [imageURL]',
];
