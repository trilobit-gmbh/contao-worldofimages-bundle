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
    .'<li>Standardmäßig ist die API beschränkt auf 5.000 Anfragen pro Stunde (Anfragen sind an den API-Key geknüpft) und</li>'
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

$GLOBALS['TL_LANG']['tl_pixabay']['queryTitle'] = 'Suchbegriffe';
$GLOBALS['TL_LANG']['tl_pixabay']['queryHelp'] = 'Bitte geben sie hier ihren Suchbegriff bzw. ihre Suchbegriffe ein.';

$GLOBALS['TL_LANG']['tl_pixabay']['searchTitle'] = '';
$GLOBALS['TL_LANG']['tl_pixabay']['searchButton'] = 'Suche starten';
$GLOBALS['TL_LANG']['tl_pixabay']['searchHelp'] = '';

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

/*



$GLOBALS['TL_LANG']['tl_pixabay']['pixabayApiKey'][0] = 'Pixabay API-Key';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayApiKey'][1] = 'Bitte geben Sie hier Ihren Pixabay-API-Key ein. Weitere Informationen unter <a href="https://pixabay.com/api/docs/" target="_blank" rel="noopener noreferrer"><u>pixabay.com/api/docs/</u></a>.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayApiUrl'][0] = 'Pixabay API-URL';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayApiUrl'][1] = 'Bitte geben Sie hier Ihren Pixabay-API-URL ein. Weitere Informationen unter <a href="https://pixabay.com/api/docs/" target="_blank" rel="noopener noreferrer"><u>pixabay.com/api/docs/</u></a>.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayHighResolution'][0] = 'Bildsuche mit hoher Auflösung';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayHighResolution'][1] = 'Stellen Sie hier ein, wenn Ihr Pixabay-API-Key die Bildsuche mit hoher Auflösung unterstützt. Weitere Informationen unter <a href="https://pixabay.com/api/docs/" target="_blank" rel="noopener noreferrer"><u>pixabay.com/api/docs/</u></a>.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayImageSource'][0] = 'Quelle für hochaufgelöste Bilder';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabayImageSource'][1] = 'Bitte wählen Sie das Feld für die hochaufgelösten Bilder aus.';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['all'] = 'Alle';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['buildings'] = 'Architektur/Gebäude';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['business'] = 'Business/Finanzen';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['computer'] = 'Computer/Kommunikation';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['feelings'] = 'Emotionen';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['food'] = 'Essen/Trinken';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['health'] = 'Gesundheit/Medizin';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['backgrounds'] = 'Hintergründe/Muster';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['industry'] = 'Industrie/Handwerk';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['people'] = 'Menschen/Personen';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['music'] = 'Musik';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['nature'] = 'Natur/Landschaft';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['places'] = 'Plätze/Monumente';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['travel'] = 'Reisen/Ferien';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['religion'] = 'Religion';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['education'] = 'Schule/Ausbildung';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['fashion'] = 'Schönheit/Mode';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['sports'] = 'Sport';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['animals'] = 'Tiere';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['transportation'] = 'Transport/Verkehr';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['category']['science'] = 'Wissenschaft/Technik';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type']['all'] = 'Alle Bilder';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type']['photo'] = 'Fotos';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type']['illustration'] = 'Illustrationen';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type']['vector'] = 'Vektorgrafiken';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['order']['popular'] = 'Beliebt';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['order']['latest'] = 'Neu';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['order']['ec'] = 'Editor\'s Choice';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation']['all'] = 'Jede Ausrichtung';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation']['horizontal'] = 'Horizontal';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation']['vertical'] = 'Vertikal';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['grayscale'] = 'Graustufen';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['transparent'] = 'transparent';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['red'] = 'Rot';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['orange'] = 'Orange';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['yellow'] = 'Gelb';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['green'] = 'Grün';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['turquoise'] = 'Türkis';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['blue'] = 'Blau';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['lilac'] = 'lila';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['pink'] = 'Rosa';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['white'] = 'Weiß';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['gray'] = 'Grau';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['black'] = 'Schwarz';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors']['brown'] = 'Braun';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source']['webformatURL'] = '640 Pixel Breite [webformatURL]';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source']['largeImageURL'] = '1280 Pixel Breite [largeImageURL]';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source']['fullHDURL'] = '1920 Pixel Breite [fullHDURL]';
$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source']['imageURL'] = 'original [imageURL]';

$GLOBALS['TL_LANG']['ERR']['imageSourceNotAvailable'] = 'Die gewünschte Bildquelle "%s" ist nicht mit diesem API-Key verfügbar. Es wurde stattdessen "webformatURL" verwendet.<br>Weitere Informationen unter <a href="https://pixabay.com/api/docs/" target="_blank" rel="noopener noreferrer"><u>pixabay.com/api/docs/</u></a>.';
*/
