<?php

namespace WeWork\Api;

use WeWork\Traits\HttpClientTrait;

class Crm
{
    use HttpClientTrait;

    /**
     * 获取外部联系人详情
     *
     * @param string $externalUserId
     * @return array
     */
    public function getExternalContact(string $externalUserId): array
    {
        return $this->httpClient->get('crm/get_external_contact', ['external_userid' => $externalUserId]);
    }
    /**
     * 获取客户列表
     *
     * @param array $json
     * @return array
     */
    public function list(string $id): array
    {
        return $this->httpClient->postJson('externalcontact/list', ['userid' => $id]);
    }
}
