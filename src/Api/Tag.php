<?php

namespace WeWork\Api;

use WeWork\Traits\HttpClientTrait;

class Tag
{
    use HttpClientTrait;

    /**
     * 创建标签
     *
     * @param array $json
     * @return array
     */
    public function create(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/add_corp_tag', $json);
    }

    /**
     * 更新标签名字
     *
     * @param array $json
     * @return array
     */
    public function update(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/edit_corp_tag', $json);
    }

    /**
     * 删除标签
     *
     * @param array $json
     * @return array
     */
    public function delete(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/del_corp_tag', $json);
    }

    /**
     * 获取标签成员
     *
     * @param int $id
     * @return array
     */
    public function get(int $id): array
    {
        return $this->httpClient->get('tag/get', ['tagid' => $id]);
    }

    /**
     * 增加标签成员
     *
     * @param array $json
     * @return array
     */
    public function addUsers(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/mark_tag', $json);
    }

    /**
     * 删除标签成员
     *
     * @param array $json
     * @return array
     */
    public function delUsers(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/mark_tag', $json);
    }

    /**
     * 获取标签列表
     *
     * @return array
     */
    public function list(): array
    {
        return $this->httpClient->get('externalcontact/get_corp_tag_list');
    }
    /**
     * 获取标签列表
     *
     * @return array
     */
    public function listSingle(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/get_corp_tag_list',$json);
    }
}
