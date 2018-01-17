<?php

namespace spec\Nietzscheson\FixturesFactoryExtension\ServiceContainer;

use Behat\Testwork\ServiceContainer\Extension;
use Nietzscheson\FixturesFactoryExtension\ServiceContainer\FixturesFactoryExtensionInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Nietzscheson\FixturesFactoryDemoBundle\FixturesFactoryDemoBundle;

class FixturesFactoryExtensionSpec extends ObjectBehavior
{

    function let(ContainerBuilder $container, ParameterBagInterface $parameterBag)
    {
        $container->hasExtension(Argument::any())->willReturn(false);
        $container->addResource(Argument::any())->willReturn($container);
        $container->getParameterBag()->willReturn($parameterBag);
        $container->setDefinition(Argument::cetera())->willReturn(null);
        $container->setParameter(Argument::cetera())->willReturn(null);
        $container->addCompilerPass(Argument::cetera())->willReturn(null);
        $container->setAlias(Argument::cetera())->willReturn(null);
    }

    function it_is_implements_a_fixtures_factory_extension_interface()
    {
        $this->shouldImplement(FixturesFactoryExtensionInterface::class);
    }

    function it_is_implements_a_extension_interface()
    {
        $this->shouldImplement(Extension::class);
    }

    function it_provides_a_config_key()
    {
        $this->getConfigKey()->shouldReturn(FixturesFactoryExtensionInterface::CONFIG_KEY);
    }
}