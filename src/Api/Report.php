<?php

namespace WeWork\Api;

use WeWork\Traits\HttpClientTrait;

class Report
{
    use HttpClientTrait;

    /**
     * 群主聚合获取「群聊数据统计」数据
     *
     * @param array $json
     * @return array
     */
    public function getGroupChat(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/groupchat/statistic', $json);
    }

    /**
     * 自然日聚合获取「群聊数据统计」数据
     *
     * @param array $json
     * @return array
     */
    public function getGroupChatDay(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/groupchat/statistic_group_by_day', $json);
    }

    /**
     * 「联系客户统计」数据
     *
     * @param array $json
     * @return array
     */
    public function getCustomerData(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/get_user_behavior_data', $json);
    }

    /**
     * 获取企业群发成员执行结果
     *
     * @param array $json
     * @return array
     */
    public function getSendResult(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/get_groupmsg_send_result', $json);
    }

}
