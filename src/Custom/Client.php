<?php

namespace Cblink\Service\Marketing\Custom;

use Cblink\Service\Marketing\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 领券中心可配置优惠券列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function couponByCenter(array $query = [])
    {
        return $this->httpGet('/api/custom/coupon/center', $query);
    }


}