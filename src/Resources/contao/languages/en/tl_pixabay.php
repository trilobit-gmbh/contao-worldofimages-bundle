<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

/* todo: make complete */

$GLOBALS['TL_LANG']['MSC']['pixabay']['poweredBy'] = '<br>Pixabay for Contao &mdash; provided by:';
$GLOBALS['TL_LANG']['MSC']['pixabay']['trilobitLink'] = '<figure class="trilobit-gmbh"><img src="bundles/trilobitworldofimages/trilobit_gmbh.svg" alt="Logo trilobit GmbH" title="trilobit GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pixabay']['providerLink'] = '<figure><img src="bundles/trilobitworldofimages/pixabay_icon.png" alt="Logo Pixabay GmbH" title="Pixabay GmbH"></figure>';
$GLOBALS['TL_LANG']['MSC']['pixabay']['hint'] = '<p>Photos provided by <a href="https://pixabay.com" target="_blank" rel="noopener noreferrer"><u>Pixabay</u></a>.</p>'
    .'<p><strong>Guidelines</strong></p>'
    .'<ul>'
    .'<li>By default, the API is limited to 6,000 requests per hour (requests are linked to the API key) and</li>'
    .'<li>a maximum of 500 images per request.</li>'
    .'</ul>'
    .'<br>'
    .'<p>API documentation: <a href="https://pixabay.com/api/docs/" target="_blank" rel="noopener noreferrer"><u>pixabay.com/api/docs/</u></a></p>'
    .'<p>Please note the <strong>Pixabay <a href="https://pixabay.com/de/service/terms/#license" target="_blank" rel="noopener noreferrer"><u>Terms & Conditions</u></a></strong>!</p>'
;
$GLOBALS['TL_LANG']['MSC']['pixabay']['resultCount'] = 'Hits';
$GLOBALS['TL_LANG']['MSC']['pixabay']['cachedResult'] = 'Cache result; To keep the Unsplash API fast for everyone, requests are cached for 24 hours.';

$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_legend'] = 'Pixabay settings';
$GLOBALS['TL_LANG']['tl_pixabay']['search_legend'] = 'Search';
$GLOBALS['TL_LANG']['tl_pixabay']['filter_legend'] = 'Filter';
$GLOBALS['TL_LANG']['tl_pixabay']['result_legend'] = 'Search result';

$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_image_type'][0] = 'Type';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_image_type'][1] = 'Filter results by image type.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_orientation'][0] = 'Orientation';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_orientation'][1] = 'Whether an image is wider than it is tall, or taller than it is wide.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_order'][0] = 'Order by';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_order'][1] = 'How the results should be ordered.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_category'][0] = 'Category';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_category'][1] = 'Filter results by category.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_width'][0] = 'Minimum image width';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_width'][1] = 'Minimum image width.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_height'][0] = 'Minimum image height';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_min_height'][1] = 'Minimum image height.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_colors'][0] = 'Colors';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_colors'][1] = 'Filter images by color properties.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_editors_choice'][0] = 'Editor\'s Choice Award';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_editors_choice'][1] = 'Select images that have received an Editor\'s Choice award.';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_safesearch'][0] = 'Safe search';
$GLOBALS['TL_LANG']['tl_pixabay']['pixabay_safesearch'][1] = 'A flag indicating that only images suitable for all ages should be returned.';

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
    'webformatURL' => '640 pixel width [webformatURL]',
    'largeImageURL' => '1280 pixel width [largeImageURL]',
    'fullHDURL' => '1920 pixel width [fullHDURL]',
    'imageURL' => 'Original [imageURL]',
];
