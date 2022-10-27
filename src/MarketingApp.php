<?php

namespace Cblink\Service\Marketing;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read Coupon\Client $coupon       优惠券
 * @property-read CouponCenter\Client $couponCenter       领券中心
 * @property-read Custom\Client $custom       定制化接口
 * @property-read Salesman\Client $salesman       分销
 */
class MarketingApp extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Coupon\ServiceProvider::class,
        CouponCenter\ServiceProvider::class,
        Custom\ServiceProvider::class,
        Salesman\ServiceProvider::class,
    ];
}