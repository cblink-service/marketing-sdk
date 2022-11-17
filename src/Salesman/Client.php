<?php

namespace Cblink\Service\Marketing\Salesman;

use Cblink\Service\Marketing\Kernel\BaseApi;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Client extends BaseApi
{

    /**
     * 分销基础配置详情
     *
     * @param int $type
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function configShow(int $type, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/config/%s', $type), $query);
    }

    /**
     * 分销基础配置保存
     *
     * @param int $type
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function configCreate(int $type, array $data = [])
    {
        return $this->httpPost(sprintf('/api/salesman/config/%s', $type), $data);
    }

    /**
     * 等级配置列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelList(array $query = [])
    {
        return $this->httpGet('/api/salesman/level', $query);
    }

    /**
     * 等级配置详情
     *
     * @param $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function levelShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/level/%s', $id), $query);
    }

    /**
     * 等级升级配置详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelRuleShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/level/%s/rule', $id), $query);
    }

    /**
     * 等级奖励配置详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelRewardShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/level/%s/reward', $id), $query);
    }

    /**
     * 等级配置新增
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelCreate(array $data = [])
    {
        return $this->httpPost('/api/salesman/level', $data);
    }

    /**
     * 等级配置编辑
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelUpdate($id, array $data = [])
    {
        return $this->httpPut(sprintf('/api/salesman/level/%s', $id), $data);
    }

    /**
     * 等级配置删除
     *
     * @param $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function levelDelete($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/api/salesman/level/%s', $id), $query);
    }

    /**
     * 分销员列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanList(array $query = [])
    {
        return $this->httpGet('/api/salesman', $query);
    }

    /**
     * 分销员详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanShow($id, array $query=[])
    {
        return $this->httpGet(sprintf('/api/salesman/%s', $id), $query);
    }

    /**
     * 分销员新增
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanCreate(array $data = [])
    {
        return $this->httpPost('/api/salesman', $data);
    }

    /**
     * 分销员客户列表
     *
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function customList(array $query = [])
    {
        return $this->httpGet('/api/salesman/custom', $query);
    }

    /**
     * 分销员列表
     *
     * @param $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function customShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/custom/%s', $id), $query);
    }

    /**
     * 创建客户
     *
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function customStore(array $data = [])
    {
        return $this->httpPost('/api/salesman/custom', $data);
    }


    /**
     * 修改分销员余额
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanBalanceUpdate($id, array $query = [])
    {
        return $this->httpPut(sprintf('/api/salesman/%s/balance', $id), $query);
    }

    /**
     * 余额变动记录列表
     *
     * @param       $id
     * @param array $query
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function serialList($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/%s/balance/serial', $id), $query);
    }

    /**
     * 分销员提现列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function withdrawalList(array $query = [])
    {
        return $this->httpGet('/api/salesman/withdrawal', $query);
    }

    /**
     * 申请提现
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function withdrawalCreate(array $data = [])
    {
        return $this->httpPost('/api/salesman/withdrawal', $data);
    }

    /**
     * 统计分销员相关数据
     *
     * @param $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function salesmanStatisticsShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/%s/statistics', $id), $query);
    }

    /**
     * 分销订单列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function tradeList(array $query = [])
    {
        return $this->httpGet('/api/salesman/trade', $query);
    }

    /**
     * 分销订单列表
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function tradeShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/trade/%s', $id), $query);
    }

    /**
     * 创建分销单
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createTrade(array $data = [])
    {
        return $this->httpPost('/api/salesman/trade', $data);
    }

    /**
     * 订单退款
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refundTrade(array $data = [])
    {
        return $this->httpPost('/api/salesman/trade/refund', $data);
    }

    /**
     * 订单结算
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function settleTrade(array $data = [])
    {
        return $this->httpPost('/api/salesman/trade/settle', $data);
    }

    /**
     * 新增奖励记录
     *
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function sendLevelReward(array $data = [])
    {
        return $this->httpPost('/api/salesman/level/send-reward', $data);
    }

    /**
     * 查询等级奖励
     *
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getSalesmanLevelReward(array $query = [])
    {
        return $this->httpGet('/api/salesman/level/salesman-reward', $query);
    }
}