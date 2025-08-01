<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCosRecharges请求参数结构体
 *
 * @method string getTopicId() 获取日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
 * @method integer getStatus() 获取状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
 * @method void setStatus(integer $Status) 设置状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
 * @method integer getEnable() 获取是否启用:   0： 未启用  ， 1：启用
 * @method void setEnable(integer $Enable) 设置是否启用:   0： 未启用  ， 1：启用
 */
class DescribeCosRechargesRequest extends AbstractModel
{
    /**
     * @var string 日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var integer 状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
     */
    public $Status;

    /**
     * @var integer 是否启用:   0： 未启用  ， 1：启用
     */
    public $Enable;

    /**
     * @param string $TopicId 日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
     * @param integer $Status 状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
     * @param integer $Enable 是否启用:   0： 未启用  ， 1：启用
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
