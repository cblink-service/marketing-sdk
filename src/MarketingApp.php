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
 */
class MarketingApp extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Coupon\ServiceProvider::class,
    ];
}