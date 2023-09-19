<?php

namespace Cblink\Service\Marketing\CouponActivity;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['couponActivity'] = function($pimple){
            return new Client($pimple);
        };
    }
}