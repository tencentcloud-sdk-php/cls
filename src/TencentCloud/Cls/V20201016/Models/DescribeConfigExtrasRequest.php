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
 * DescribeConfigExtras请求参数结构体
 *
 * @method array getFilters() 获取过滤器，支持如下选项：
name
- 按照【特殊采集配置名称】进行模糊匹配过滤。
- 类型：String

configExtraId
- 按照【特殊采集配置ID】进行过滤。
- 类型：String

topicId
- 按照【日志主题】进行过滤。
- 类型：String

machineGroupId
- 按照【机器组ID】进行过滤。
- 类型：String

每次请求的Filters的上限为10，Filter.Values的上限为5。
 * @method void setFilters(array $Filters) 设置过滤器，支持如下选项：
name
- 按照【特殊采集配置名称】进行模糊匹配过滤。
- 类型：String

configExtraId
- 按照【特殊采集配置ID】进行过滤。
- 类型：String

topicId
- 按照【日志主题】进行过滤。
- 类型：String

machineGroupId
- 按照【机器组ID】进行过滤。
- 类型：String

每次请求的Filters的上限为10，Filter.Values的上限为5。
 * @method integer getOffset() 获取分页的偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0
 * @method integer getLimit() 获取分页单页的限制数目，默认值为20，最大值100
 * @method void setLimit(integer $Limit) 设置分页单页的限制数目，默认值为20，最大值100
 */
class DescribeConfigExtrasRequest extends AbstractModel
{
    /**
     * @var array 过滤器，支持如下选项：
name
- 按照【特殊采集配置名称】进行模糊匹配过滤。
- 类型：String

configExtraId
- 按照【特殊采集配置ID】进行过滤。
- 类型：String

topicId
- 按照【日志主题】进行过滤。
- 类型：String

machineGroupId
- 按照【机器组ID】进行过滤。
- 类型：String

每次请求的Filters的上限为10，Filter.Values的上限为5。
     */
    public $Filters;

    /**
     * @var integer 分页的偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 分页单页的限制数目，默认值为20，最大值100
     */
    public $Limit;

    /**
     * @param array $Filters 过滤器，支持如下选项：
name
- 按照【特殊采集配置名称】进行模糊匹配过滤。
- 类型：String

configExtraId
- 按照【特殊采集配置ID】进行过滤。
- 类型：String

topicId
- 按照【日志主题】进行过滤。
- 类型：String

machineGroupId
- 按照【机器组ID】进行过滤。
- 类型：String

每次请求的Filters的上限为10，Filter.Values的上限为5。
     * @param integer $Offset 分页的偏移量，默认值为0
     * @param integer $Limit 分页单页的限制数目，默认值为20，最大值100
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
