<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgItemTypeHeroEssence.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgItemTypeHeroEssence</code>
 */
class MsgItemTypeHeroEssence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 summon_value = 1;</code>
     */
    private $summon_value = 0;
    /**
     * Generated from protobuf field <code>fixed32 reward_item_uid = 2;</code>
     */
    private $reward_item_uid = 0;

    public function __construct() {
        \GPBMetadata\MsgItemTypeHeroEssence::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 summon_value = 1;</code>
     * @return int
     */
    public function getSummonValue()
    {
        return $this->summon_value;
    }

    /**
     * Generated from protobuf field <code>uint32 summon_value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSummonValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->summon_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 reward_item_uid = 2;</code>
     * @return int
     */
    public function getRewardItemUid()
    {
        return $this->reward_item_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 reward_item_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardItemUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_item_uid = $var;

        return $this;
    }

}

