<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqQuestReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqQuestReward</code>
 */
class ReqQuestReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 quest_uid = 1;</code>
     */
    private $quest_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 2;</code>
     */
    private $shop_item_uid = 0;

    public function __construct() {
        \GPBMetadata\ReqQuestReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 quest_uid = 1;</code>
     * @return int
     */
    public function getQuestUid()
    {
        return $this->quest_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 quest_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setQuestUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->quest_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 2;</code>
     * @return int
     */
    public function getShopItemUid()
    {
        return $this->shop_item_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setShopItemUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->shop_item_uid = $var;

        return $this;
    }

}

