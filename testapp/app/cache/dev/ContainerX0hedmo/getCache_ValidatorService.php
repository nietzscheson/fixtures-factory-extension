<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.validator' shared service.

return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('bWZBQk+zPb', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()) && false ?: '_'});
