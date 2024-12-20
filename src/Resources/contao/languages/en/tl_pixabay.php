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
$GLOBALS['TL_LANG']['MSC']['pixabay']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['pixabay']['cachedResult'] = 'Cache-Ergebnis; Um die Pixabay-API für alle schnell zu halten, werden Anfragen 24 Stunden zwischengespeichert.';

$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_legend'] = 'Pixabay settings';
$GLOBALS['TL_LANG']['tl_pixabay']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_pixabay']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_pixabay']['result_legend'] = 'Search results';

$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_image_type'][0] = 'Type';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_image_type'][1] = 'Type.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_orientation'][0] = 'Orientation';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_orientation'][1] = 'Orientation.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_order'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_order'][1] = 'Order by.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_category'][0] = 'Category';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_category'][1] = 'Category.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_width'][0] = 'Minimale Bildbreite';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_width'][1] = 'Minimale Bildbreite.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_height'][0] = 'Minimale Bildhöhe';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_height'][1] = 'Minimale Bildhöhe.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_colors'][0] = 'Colors';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_colors'][1] = 'Colors.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_editors_choice'][0] = 'Editor\'s Choice Award';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_editors_choice'][1] = 'Wählen Sie Bilder aus, die einen Editor\'s Choice Award erhalten haben.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_safesearch'][0] = 'Safe search';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_safesearch'][1] = 'Safe search.';

$GLOBALS['TL_LANG']['tl_pixabay']['options']['category'] = [
    'all' => 'All',
    'buildings' => 'Buildings',
    'business' => 'Business',
    'computer' => 'Computer',
    'feelings' => 'Feelings',
    'food' => 'Food',
    'health' => 'Health',
    'backgrounds' => 'Backgrounds',
    'industry' => 'Industry',
    'people' => 'People',
    'music' => 'Music',
    'nature' => 'Nature',
    'places' => 'Places',
    'travel' => 'Travel',
    'religion' => 'Religion',
    'education' => 'Education',
    'fashion' => 'Fashion',
    'sports' => 'Sports',
    'animals' => 'Animals',
    'transportation' => 'Transportation',
    'science' => 'Science',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['orientation'] = [
    'all' => 'All',
    'horizontal' => 'Horizontal',
    'vertical' => 'Vertical',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['order'] = [
    'popular' => 'Popular',
    'latest' => 'Latest',
    'ec' => 'Editor\'s choice',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_type'] = [
    'all' => 'All',
    'photo' => 'Photo',
    'illustration' => 'Illustration',
    'vector' => 'Vector',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['colors'] = [
    'grayscale' => 'Grayscale',
    'transparent' => 'Transparent',
    'red' => 'Red',
    'orange' => 'Orange',
    'yellow' => 'Yellow',
    'green' => 'Green',
    'turquoise' => 'Turquoise',
    'blue' => 'Blue',
    'lilac' => 'Lilac',
    'pink' => 'Pink',
    'white' => 'White',
    'gray' => 'Gray',
    'black' => 'Black',
    'brown' => 'Brown',
];

$GLOBALS['TL_LANG']['tl_pixabay']['options']['image_source'] = [
    'webformatURL' => '640 Pixel Breite [webformatURL]',
    'largeImageURL' => '1280 Pixel Breite [largeImageURL]',
    'fullHDURL' => '1920 Pixel Breite [fullHDURL]',
    'imageURL' => 'original [imageURL]',
];
