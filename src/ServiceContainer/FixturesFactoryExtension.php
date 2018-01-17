<?php

namespace Nietzscheson\FixturesFactoryExtension\ServiceContainer;

use Behat\Testwork\ServiceContainer\ExtensionManager;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader;

class FixturesFactoryExtension implements FixturesFactoryExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigKey()
    {
        return self::CONFIG_KEY;
    }

    public function initialize(ExtensionManager $extensionManager)
    {
    }

    public function configure(ArrayNodeDefinition $builder)
    {
    }

    public function load(ContainerBuilder $container, array $config)
    {
        
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/config'));
        $loader->load('services.yml');

        $definition = new Definition('AppKernel', array(
            'test',
            true,
        ));

        $container->setDefinition('kernel', $definition);
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
    }
}