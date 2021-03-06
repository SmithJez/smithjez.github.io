<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemOptionalReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemOptionalReward</code>
 */
class MsgShopItemOptionalReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.RewardDataType data_type = 1;</code>
     */
    private $data_type = 0;
    /**
     * Generated from protobuf field <code>uint32 value_data = 2;</code>
     */
    private $value_data = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount uid_data = 3;</code>
     */
    private $uid_data = null;

    public function __construct() {
        \GPBMetadata\MsgShopItemOptionalReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RewardDataType data_type = 1;</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RewardDataType data_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\RewardDataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 value_data = 2;</code>
     * @return int
     */
    public function getValueData()
    {
        return $this->value_data;
    }

    /**
     * Generated from protobuf field <code>uint32 value_data = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setValueData($var)
    {
        GPBUtil::checkUint32($var);
        $this->value_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount uid_data = 3;</code>
     * @return \Msggamedata\MsgUidAndAmount
     */
    public function getUidData()
    {
        return $this->uid_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount uid_data = 3;</code>
     * @param \Msggamedata\MsgUidAndAmount $var
     * @return $this
     */
    public function setUidData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUidAndAmount::class);
        $this->uid_data = $var;

        return $this;
    }

}

