<?php

namespace WeWork\Api;

use WeWork\Traits\HttpClientTrait;
use Psr\Http\Message\StreamInterface;

class ExternalContact
{
    use HttpClientTrait;

    /**
     * 上传临时素材
     *
     * @param string $type
     * @param string $path
     * @return array
     */
    public function upload(string $media_type, string $path): array
    {
        return $this->httpClient->postFile('media/upload_attachment', $path, array('media_type'=>$media_type,'attachment_type'=>1));
    }

    /**
     * 获取客户列表
     *
     * @param array $json
     * @return array
     */
    public function list(string $id): array
    {
        return $this->httpClient->get('externalcontact/list', ['userid' => $id]);
    }

    /**
     * 获取客户详情
     *
     * @param array $json
     * @return array
     */

    public function getcustomer(string $id): array
    {
        return $this->httpClient->get('externalcontact/get',['external_userid' => $id]);
    }


    public function follow_user(): array
    {
        return $this->httpClient->postJson('externalcontact/get_follow_user_list');
    }


    /**
     * 配置客户联系「联系我」方式
     *
     * @param array $json
     * @return array
     */


    public function add_contact_way(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/add_contact_way',$json);
    }

      /**
       * 获取客户
       *
       * @param array $json
       * @return array
       */

      public function get_by_user(array $json): array
      {
            return $this->httpClient->postJson('externalcontact/batch/get_by_user',$json);
      }




    /**
     * 创建企业群发
     *
     * @param array $json
     * @return array
     */

    public function add_msg_template(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/add_msg_template',$json);
    }

    /**
     * 企业发表内容到客户的朋友圈
     *
     * @param array $json
     * @return array
     */

    public function add_moment_task(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/add_moment_task',$json);
    }
    /**
     * 发送新客户欢迎语
     *
     * @param array $json
     * @return array
     */

    public function send_welcome_msg(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/send_welcome_msg',$json);
    }

    /**
     * 获取朋友圈任务创建结果
     *
     * @param array $json
     * @return array
     */

    public function get_moment_task(array $json): array
    {
        return $this->httpClient->get('externalcontact/get_moment_task_result',$json);
    }

    /**
     * 获取朋友圈成员发布状态
     *
     * @param array $json
     * @return array
     */

    public function get_moment_status(array $json): array
    {
        return $this->httpClient->postJson('externalcontact/get_moment_task',$json);
    }
}
