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
 * kafka协议消费组信息
 *
 * @method string getGroup() 获取消费组名称
 * @method void setGroup(string $Group) 设置消费组名称
 * @method string getState() 获取状态。

- Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
- Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
- Stable：组内成员正常消费，分区分配平衡。正常运行状态
- PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
- CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开

 * @method void setState(string $State) 设置状态。

- Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
- Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
- Stable：组内成员正常消费，分区分配平衡。正常运行状态
- PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
- CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开

 * @method string getProtocolName() 获取分区分配策略均衡算法名称。

- 常见均衡算法如下：
    - range:按分区范围分配
    - roundrobin:轮询式分配
    - sticky:粘性分配（避免不必要的重平衡）
 * @method void setProtocolName(string $ProtocolName) 设置分区分配策略均衡算法名称。

- 常见均衡算法如下：
    - range:按分区范围分配
    - roundrobin:轮询式分配
    - sticky:粘性分配（避免不必要的重平衡）
 */
class ConsumerGroup extends AbstractModel
{
    /**
     * @var string 消费组名称
     */
    public $Group;

    /**
     * @var string 状态。

- Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
- Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
- Stable：组内成员正常消费，分区分配平衡。正常运行状态
- PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
- CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开

     */
    public $State;

    /**
     * @var string 分区分配策略均衡算法名称。

- 常见均衡算法如下：
    - range:按分区范围分配
    - roundrobin:轮询式分配
    - sticky:粘性分配（避免不必要的重平衡）
     */
    public $ProtocolName;

    /**
     * @param string $Group 消费组名称
     * @param string $State 状态。

- Empty：组内没有成员，但存在已提交的偏移量。所有消费者都离开但保留了偏移量
- Dead：组内没有成员，且没有已提交的偏移量。组被删除或长时间无活动
- Stable：组内成员正常消费，分区分配平衡。正常运行状态
- PreparingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开
- CompletingRebalance：组正在准备重新平衡。有新成员加入或现有成员离开

     * @param string $ProtocolName 分区分配策略均衡算法名称。

- 常见均衡算法如下：
    - range:按分区范围分配
    - roundrobin:轮询式分配
    - sticky:粘性分配（避免不必要的重平衡）
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ProtocolName",$param) and $param["ProtocolName"] !== null) {
            $this->ProtocolName = $param["ProtocolName"];
        }
    }
}
