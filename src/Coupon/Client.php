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
        return $this->httpGet('/coupon/category', $query);
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
        return $this->httpGet('/coupon/category/app', $query);
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
        return $this->httpPost('/coupon/category/app', $query);
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
        return $this->httpGet('/coupon', $query);
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
        return $this->httpGet("/coupon/$id");
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
        return $this->httpPost('/coupon', $query);
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
        return $this->httpPut("/coupon/$id", $query);
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
        return $this->httpPost('/coupon/batch-send-buyer', $query);
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
        return $this->httpPost('/coupon/send-buyer', $query);
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
        return $this->httpGet('/coupon/buyer/list', $query);
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
        return $this->httpGet("/coupon/buyer/$code", $query);
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
        return $this->httpGet('/coupon/buyer/use-list', $query);
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
        return $this->httpPost('/coupon/buyer/calculate', $query);
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
        return $this->httpPost('/coupon/buyer/cancel', $query);
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
        return $this->httpPost('/coupon/buyer/reversal', $query);
    }

}