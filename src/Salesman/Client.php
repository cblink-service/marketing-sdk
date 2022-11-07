<?php

namespace Cblink\Service\Marketing\Salesman;

use Cblink\Service\Marketing\Kernel\BaseApi;

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
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function configCreate(int $type, array $query = [])
    {
        return $this->httpPost(sprintf('/api/salesman/config/%s', $type), $query);
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
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelShow($id, $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/level/%s', $id), $query);
    }

    /**
     * 等级升级配置详情
     *
     * @param $id
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelRuleShow($id, $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/level/%s/rule', $id), $query);
    }

    /**
     * 等级奖励配置详情
     *
     * @param $id
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelRewardShow($id, $query = [])
    {
        return $this->httpGet(sprintf('/api/salesman/level/%s/reward', $id), $query);
    }

    /**
     * 等级配置新增
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelCreate($query = [])
    {
        return $this->httpPost('/api/salesman/level', $query);
    }

    /**
     * 等级配置编辑
     *
     * @param $id
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelUpdate($id, $query = [])
    {
        return $this->httpPut(sprintf('/api/salesman/level/%s', $id), $query);
    }

    /**
     * 等级配置删除
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function levelDelete($id)
    {
        return $this->httpDelete(sprintf('/api/salesman/level/%s', $id));
    }

    /**
     * 分销员列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanlist(array $query = [])
    {
        return $this->httpGet('/api/salesman', $query);
    }

    /**
     * 分销员详情
     *
     * @param int $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanShow(int $id, array $query=[])
    {
        return $this->httpGet(sprintf('/api/salesman/%s', $id), $query);
    }

    /**
     * 分销员新增
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanCreate(array $query=[])
    {
        return $this->httpPost('/api/salesman', $query);
    }

    /**
     * 分销员子分销员列表
     *
     * @param int $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanChildList(int $id, array $query=[])
    {
        return $this->httpGet(sprintf('/api/salesman/%s/child-list', $id), $query);
    }

    /**
     * 分销员客户列表
     *
     * @param int $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanCustomList(int $id, array $query=[])
    {
        return $this->httpGet(sprintf('/api/salesman/%s/custom-list', $id), $query);
    }


    /**
     * 修改分销员余额
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanUpdateBalance($id, array $query = [])
    {
        return $this->httpPut(sprintf('/api/salesman/%s/balance', $id), $query);
    }

    /**
     * 分销员客户列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function withdrawalList(array $query=[])
    {
        return $this->httpGet('/api/salesman/withdrawal', $query);
    }

    /**
     * 申请提现
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function withdrawalCreate(array $query=[])
    {
        return $this->httpPost('/api/salesman/withdrawal', $query);
    }

    /**
     * 修改提现状态
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function withdrawalUpdateStatus($id, array $query = [])
    {
        return $this->httpPut(sprintf('/api/salesman/withdrawal/%s', $id), $query);
    }
}