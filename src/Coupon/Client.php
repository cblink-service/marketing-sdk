<?php

namespace Cblink\Service\Marketing\Coupon;

use Cblink\Service\Marketing\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 优惠券分类列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function categoryList(array $query = [])
    {
        return $this->httpGet('/api/coupon/category', $query);
    }

    /**
     * 应用下的优惠券类型列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function appCategoryList(array $query = [])
    {
        return $this->httpGet('/api/coupon/category/app', $query);
    }

    /**
     * 应用方申请优惠券类型
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function AppApplyCategory(array $query = [])
    {
        return $this->httpPost('/api/coupon/category/app', $query);
    }

    /**
     * 应用下优惠券列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list(array $query = [])
    {
        return $this->httpGet('/api/coupon', $query);
    }

    /**
     * 应用的优惠券详情
     *
     * @param int $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(int $id)
    {
        return $this->httpGet("/api/coupon/$id");
    }

    /**
     * 应用创建优惠券
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $query = [])
    {
        return $this->httpPost('/api/coupon', $query);
    }

    /**
     * 应用修改优惠券
     *
     * @param int $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(int $id, array $query = [])
    {
        return $this->httpPut("/api/coupon/$id", $query);
    }

    /**
     * 应用修改优惠券描述
     *
     * @param int $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateDesc(int $id, array $query = [])
    {
        return $this->httpPut("/api/coupon/$id/desc", $query);
    }

    /**
     * 应用修改优惠券状态
     *
     * @param int $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStatus(int $id, array $query = [])
    {
        return $this->httpPut("/api/coupon/$id/status", $query);
    }

    /**
     * 应用修改自增数量
     *
     * @param int $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function incStock(int $id, array $data = [])
    {
        return $this->httpPut("/api/coupon/$id/stock", $data);
    }

    /**
     * 应用批量发送优惠券
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function batchSend(array $query = [])
    {
        return $this->httpPost('/api/coupon/batch/send-buyers', $query);
    }

    /**
     * 应用发送优惠券
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(array $query = [])
    {
        return $this->httpPost('/api/coupon/send-buyer', $query);
    }

    /**
     * 一键领取多个优惠券
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendCoupons(array $query=[])
    {
        return $this->httpPost('/api/coupon/batch/send-buyer', $query);
    }

    /**
     * 买方优惠券列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function buyerList(array $query = [])
    {
        return $this->httpGet('/api/coupon/buyer/list', $query);
    }

    /**
     * 买方优惠券详情
     *
     * @param string $code
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function buyerShow(string $code, array $query = [])
    {
        return $this->httpGet("/api/coupon/buyer/$code", $query);
    }

    /**
     * 买方优惠券可用列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function buyerUseList(array $query = [])
    {
        return $this->httpGet('/api/coupon/buyer/use-list', $query);
    }

    /**
     * 优惠券计算
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function calculate(array $query = [])
    {
        return $this->httpPost('/api/coupon/buyer/calculate', $query);
    }

    /**
     * 锁定
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lock(array $query = [])
    {
        return $this->httpPost('/api/coupon/buyer/lock', $query);
    }

    /**
     * 核销
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancel(array $query = [])
    {
        return $this->httpPost('/api/coupon/buyer/cancel', $query);
    }

    /**
     * 冲正
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function reversal(array $query = [])
    {
        return $this->httpPost('/api/coupon/buyer/reversal', $query);
    }

    /**
     * 用户使用记录
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function useRecord(array $query = [])
    {
        return $this->httpGet('/api/coupon/buyer/use-record', $query);
    }

    /**
     * 优惠券关联活动列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMarketingMapList($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/coupon/%s/marketing-list', $id), $query);
    }

    /**
     * 优惠券统计
     *
     * @param array $query
     *
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCouponCount( array $query = [])
    {
        return $this->httpGet('/api/coupon/buyer/coupon-count', $query);
    }
}