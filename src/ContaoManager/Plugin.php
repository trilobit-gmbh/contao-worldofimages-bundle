<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

namespace Trilobit\WorldofimagesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Trilobit\WorldofimagesBundle\TrilobitWorldofimagesBundle;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface, RoutingPluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(TrilobitWorldofimagesBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                ]),
        ];
    }

    /**
     * @throws \Exception
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        $version = (method_exists(ContaoCoreBundle::class, 'getVersion') ? ContaoCoreBundle::getVersion() : VERSION);

        if (version_compare($version, '5.0', '<')
            && version_compare($version, '5.x-dev', 'ne')
        ) {
            return $resolver
                ->resolve(__DIR__.'/../Resources/config/routing.annotation.yml')
                ->load(__DIR__.'/../Resources/config/routing.annotation.yml')
            ;
        }

        return $resolver
            ->resolve(__DIR__.'/../Resources/config/routing.attribute.yml')
            ->load(__DIR__.'/../Resources/config/routing.attribute.yml')
        ;

        /*
        if (version_compare($contaoVersion, '5.3', '>')
            || version_compare($contaoVersion, '5.x-dev', 'eq')
        ) {
            return $resolver
                ->resolve(__DIR__.'/../Resources/config/routing.attribute.yml')
                ->load(__DIR__.'/../Resources/config/routing.attribute.yml')
                ;
        } else {
        }

        return $resolver
            ->resolve(__DIR__.'/../Resources/config/routing.yml')
            ->load(__DIR__.'/../Resources/config/routing.yml')
        ;
        */
    }
}
