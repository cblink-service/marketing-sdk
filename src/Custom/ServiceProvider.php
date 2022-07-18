<?php

namespace Cblink\Service\Marketing\Custom;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['custom'] = function($pimple){
            return new Client($pimple);
        };
    }
}