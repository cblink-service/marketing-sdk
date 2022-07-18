<?php

namespace Cblink\Service\Marketing\CouponCenter;

use Cblink\Service\Marketing\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 领券中心列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list(array $query = [])
    {
        return $this->httpGet('/api/coupon-center', $query);
    }

    /**
     * 可领取的领券中心列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function receiveList(array $query = [])
    {
        return $this->httpGet('/api/coupon-center/receive-list', $query);
    }

    /**
     * 领券中心详情
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id)
    {
        return $this->httpGet(sprintf('/api/coupon-center/receive-list/%s', $id));
    }

    /**
     * 新增领券中心
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($query)
    {
        return $this->httpPost('/api/coupon-center', $query);
    }

    /**
     * 编辑领券中心
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, $query)
    {
        return $this->httpPut(sprintf('/api/coupon-center/%s', $id), $query);
    }

    /**
     * 编辑状态
     *
     * @param $id
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStatus($id, $query)
    {
        return $this->httpPut(sprintf('/api/coupon-center/%s/status', $id), $query);
    }

    /**
     * 领取优惠券
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function receiveCoupon($query)
    {
        return $this->httpPost('/api/coupon-center/receive', $query);
    }
}