<?php

namespace Nietzscheson\FixturesFactoryExtension\ServiceContainer;

use Behat\Testwork\ServiceContainer\Extension;

interface FixturesFactoryExtensionInterface extends Extension
{
    const CONFIG_KEY = "fixtures_factory";
}