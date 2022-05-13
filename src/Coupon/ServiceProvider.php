<?php

namespace Cblink\Service\Marketing\Coupon;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['coupon'] = function($pimple){
            return new Client($pimple);
        };
    }
}