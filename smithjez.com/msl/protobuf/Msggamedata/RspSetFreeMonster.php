<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspSetFreeMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspSetFreeMonster</code>
 */
class RspSetFreeMonster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 2;</code>
     */
    private $user_monster = null;
    /**
     * Generated from protobuf field <code>.msggamedata.RspSetFreeMonster.RewardType reward_type = 3;</code>
     */
    private $reward_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem reward_user_item = 4;</code>
     */
    private $reward_user_item = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward_uid_and_amount = 5;</code>
     */
    private $reward_uid_and_amount = null;
    /**
     * Generated from protobuf field <code>bool reward_to_gift_system = 6;</code>
     */
    private $reward_to_gift_system = false;

    public function __construct() {
        \GPBMetadata\RspSetFreeMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 2;</code>
     * @return \Msggamedata\MsgUserMonster
     */
    public function getUserMonster()
    {
        return $this->user_monster;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 2;</code>
     * @param \Msggamedata\MsgUserMonster $var
     * @return $this
     */
    public function setUserMonster($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMonster::class);
        $this->user_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RspSetFreeMonster.RewardType reward_type = 3;</code>
     * @return int
     */
    public function getRewardType()
    {
        return $this->reward_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RspSetFreeMonster.RewardType reward_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\RspSetFreeMonster_RewardType::class);
        $this->reward_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem reward_user_item = 4;</code>
     * @return \Msggamedata\MsgUserItem
     */
    public function getRewardUserItem()
    {
        return $this->reward_user_item;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem reward_user_item = 4;</code>
     * @param \Msggamedata\MsgUserItem $var
     * @return $this
     */
    public function setRewardUserItem($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserItem::class);
        $this->reward_user_item = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward_uid_and_amount = 5;</code>
     * @return \Msggamedata\MsgUidAndAmount
     */
    public function getRewardUidAndAmount()
    {
        return $this->reward_uid_and_amount;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward_uid_and_amount = 5;</code>
     * @param \Msggamedata\MsgUidAndAmount $var
     * @return $this
     */
    public function setRewardUidAndAmount($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUidAndAmount::class);
        $this->reward_uid_and_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool reward_to_gift_system = 6;</code>
     * @return bool
     */
    public function getRewardToGiftSystem()
    {
        return $this->reward_to_gift_system;
    }

    /**
     * Generated from protobuf field <code>bool reward_to_gift_system = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRewardToGiftSystem($var)
    {
        GPBUtil::checkBool($var);
        $this->reward_to_gift_system = $var;

        return $this;
    }

}

