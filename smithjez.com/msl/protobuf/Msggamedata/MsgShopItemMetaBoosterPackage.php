<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemMetaBoosterPackage.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemMetaBoosterPackage</code>
 */
class MsgShopItemMetaBoosterPackage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemOptionalReward instant_reward = 1;</code>
     */
    private $instant_reward = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBoosterPackageEventData event_datas = 2;</code>
     */
    private $event_datas;

    public function __construct() {
        \GPBMetadata\MsgShopItemMetaBoosterPackage::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemOptionalReward instant_reward = 1;</code>
     * @return \Msggamedata\MsgShopItemOptionalReward
     */
    public function getInstantReward()
    {
        return $this->instant_reward;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemOptionalReward instant_reward = 1;</code>
     * @param \Msggamedata\MsgShopItemOptionalReward $var
     * @return $this
     */
    public function setInstantReward($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgShopItemOptionalReward::class);
        $this->instant_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBoosterPackageEventData event_datas = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventDatas()
    {
        return $this->event_datas;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBoosterPackageEventData event_datas = 2;</code>
     * @param \Msggamedata\MsgBoosterPackageEventData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventDatas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgBoosterPackageEventData::class);
        $this->event_datas = $arr;

        return $this;
    }

}

