World of images bundle
======================

_todo_


Bilderwelten bundle
===================

Mit der Bilderwelten Erweiterung können sie über die Dateiverwaltung von Contao Bilder oder Fotos von den freien Bilddatenbanken Pixabay, Pexels, Unsplash und Flickr herunterladen. Um diese Bilddatenbanken benutzen zu können, benötigen sie jeweils einen API-Key, den sie nach der Registrierung bei dem jeweiligen Anbietern anfordern können. Sie können außerdem Voreinstellungen für die Bilderwelten-Suche in der Benutzerverwaltung festlegen.



Screenshots
===========

![Backend Ausschnitt](docs/images/contao-pixabay-bundle.png?raw=true "TrilobitPixabayBundle")


Installation
------------

Install the extension via composer: [trilobit-gmbh/contao-worldofimages-bundle](https://packagist.org/packages/trilobit-gmbh/contao-worldofimages-bundle).


Configuration
-----------------------------

And add the following code (with the API-Key from the Pixabay Website) to the config.yml of your project. You may have to create a config.yml, if it doesn't exist in your project. The config.yml is or has to be located in the app/config directory in Contao 4.4 and in the config directory in Contao 4.8.

    contao:
      localconfig:
        pixabayApiKey: 'Your Pixabay-API-Key'
        pexelsApiKey: 'Your Pexels-API-Key'
        unsplashApiKey: 'Your Unsplash-API-Key'
        flickrApiKey: 'Your Flickr-API-Key'

        pixabayImageSource: 'fullHDURL'
        pexelsImageSource: 'large2x'


Compatibility
-------------

- Contao version ~4.9
- Contao version ~4.13
- Contao version ~5.0
