<?php

namespace Cblink\Service\Marketing\CouponActivity;

use Cblink\Service\Marketing\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 领券活动列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * sage\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list(array $query = [])
    {
        return $this->httpGet('/api/coupon-activity', $query);
    }

    /**
     * 可参与的活动 同时 发券
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function usableList(array $query = [])
    {
        return $this->httpGet('/api/coupon-activity/usable-list', $query);
    }

    /**
     * 发券
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendCoupon(array $data = [])
    {
        return $this->httpPost('/api/coupon-activity/send-coupon', $data);
    }

    public function records(array $query=[])
    {
        return $this->httpGet('/api/coupon-activity/records', $query);
    }

    /**
     * 活动详情
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id)
    {
        return $this->httpGet(sprintf('/api/coupon-activity/%s', $id));
    }

    /**
     * 新增活动
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create($query)
    {
        return $this->httpPost('/api/coupon-activity', $query);
    }

    /**
     * 编辑活动
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, $query)
    {
        return $this->httpPut(sprintf('/api/coupon-activity/%s', $id), $query);
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
        return $this->httpPut(sprintf('/api/coupon-activity/%s/status', $id), $query);
    }

    /**
     * 根据 id 删除
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteById($id)
    {
        return $this->httpDelete(sprintf('/api/coupon-activity/%s', $id));
    }

}