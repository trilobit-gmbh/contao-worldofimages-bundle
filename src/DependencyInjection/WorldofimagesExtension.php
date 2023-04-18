<?php

declare(strict_types=1);

/*
 * @copyright  trilobit GmbH
 * @author     trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license    LGPL-3.0-or-later
 */

namespace Trilobit\WorldofimagesBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Yaml\Yaml;

class WorldofimagesExtension extends Extension
{
    public function getAlias(): string
    {
        return 'trilobit';
    }

    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container, new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yml');

        $config = Yaml::parse(
            file_get_contents(__DIR__.'/../Resources/config/config.yml')
        )['trilobit'];

        if (!empty($configs[0])) {
            foreach ($GLOBALS['TRILOBIT']['worldofimages']['provider']  as $provider) {
                foreach ($configs[0][$provider] as $key => $value) {
                    $config[$provider][$key] = $value;
                }
            }
        }

        $container->setParameter($this->getAlias(), $config);
    }
}
