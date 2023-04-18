<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

namespace Trilobit\WorldofimagesBundle\FileUpload;

use Contao\BackendUser;
use Contao\FileUpload;

class FlickrZone extends FileUpload
{
    public function uploadTo($targetDir): array
    {
        $uploaded = (new Zone())->uploadTo('flickr', $targetDir, $this);

        foreach ($uploaded as $value) {
            $this->resizeUploadedImage($value);
        }

        $this->blnHasError = false;

        return $uploaded;
    }

    /**
     * @throws \Exception
     */
    public function generateMarkup(): string
    {
        $this->import(BackendUser::class, 'User');

        return (new Zone())->generateMarkup('flickr', $this->User);
    }
}
