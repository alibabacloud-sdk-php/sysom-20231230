<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoRequest;

use AlibabaCloud\Tea\Model;

class instanceTag extends Model
{
    /**
     * @example feature_dim_radar_chart
     *
     * @var string
     */
    public $key;

    /**
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'key',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
