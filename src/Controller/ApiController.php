<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

namespace Trilobit\WorldofimagesBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Trilobit\WorldofimagesBundle\FileUpload\Zone;

class ApiController
{
    #[Route('/_trilobit/{slug}', name: self::class, defaults: ['_scope' => 'backend'])]
    public function __invoke($slug): void
    {
        if (!\in_array($slug, $GLOBALS['TRILOBIT']['worldofimages']['provider'], true)) {
            return;
        }

        Zone::handleRequest($slug);
    }
}
