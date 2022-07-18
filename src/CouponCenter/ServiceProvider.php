<?php

namespace Cblink\Service\Marketing\CouponCenter;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['coupon_center'] = function($pimple){
            return new Client($pimple);
        };
    }
}