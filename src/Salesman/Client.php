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
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function updateSalesman($id, array $data=[])
    {
        return $this->httpPut(sprintf('/api/salesman/%s', $id), $data);
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
     * 分销员升级
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function salesmanUpgrade(array $data = [])
    {
        return $this->httpPost('/api/salesman/upgrade', $data);
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
     * 编辑客户
     *
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function updateCustom(array $data = [])
    {
        return $this->httpPut('/api/salesman/custom', $data);
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
    public function listWithdrawal(array $query = [])
    {
        return $this->httpGet('/api/salesman/withdrawal', $query);
    }

    /**
     * 申请提现
     *
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function applyWithdrawal($id, array $data = [])
    {
        return $this->httpPost(sprintf('/api/salesman/%s/withdrawal', $id), $data);
    }

    /**
     * 通过提现
     *
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function passWithdrawalAudit($id, array $data = [])
    {
        return $this->httpPost(sprintf('/api/salesman/withdrawal/%s/audit/pass', $id), $data);
    }

    /**
     * 拒绝提现
     *
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function refuseWithdrawalAudit($id, array $data = [])
    {
        return $this->httpPost(sprintf('/api/salesman/withdrawal/%s/audit/refuse', $id), $data);
    }

    /**
     * 拒绝提现
     *
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function failWithdrawal($id, array $data = [])
    {
        return $this->httpPost(sprintf('/api/salesman/withdrawal/%s/fail', $id), $data);
    }

    /**
     * 完成提现
     *
     * @param $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function completeWithdrawal($id, array $data = [])
    {
        return $this->httpPost(sprintf('/api/salesman/withdrawal/%s/complete', $id), $data);
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

    /**
     * 更新分销员全局佣金比例
     *
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function updateCommissionRatio($id, array $data = [])
    {
        return $this->httpPut(sprintf('/api/salesman/%s/commission/ratio', $id), $data);
    }

    /**
     * 获取分销员全局佣金比例
     *
     * @param int $id
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getCommissionRatio($id)
    {
        return $this->httpGet(sprintf('/api/salesman/%s/commission/ratio', $id));
    }

    /**
     * 获取分销员审核记录列表
     *
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getAuditRecordList(array $query = [])
    {
        return $this->httpGet('/api/salesman/audit-record', $query);
    }

    /**
     * 获取分销员审核记录统计
     *
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getAuditRecordStatistics(array $query = [])
    {
        return $this->httpGet('/api/salesman/audit-record/statistics', $query);
    }

    /**
     * 获取分销员审核记录详情
     *
     * @param int $id
     * @param array $query
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getAuditRecordShow($id, array $query)
    {
        return $this->httpGet(sprintf('/api/salesman/audit-record/%s', $id), $query);
    }

    /**
     * 更新分销员审核记录
     *
     * @param int $id
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function updateAuditRecord($id, array $data = [])
    {
        return $this->httpPut(sprintf('/api/salesman/audit-record/%s', $id), $data);
    }

    /**
     * 创建分销员审核记录
     *
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function createAuditRecord(array $data = [])
    {
        return $this->httpPost('/api/salesman/audit-record', $data);
    }
}