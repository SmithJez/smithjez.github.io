<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetClanGraduationReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspGetClanGraduationReward</code>
 */
class RspGetClanGraduationReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgClan clan = 1;</code>
     */
    private $clan = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift user_gifts = 2;</code>
     */
    private $user_gifts;

    public function __construct() {
        \GPBMetadata\RspGetClanGraduationReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgClan clan = 1;</code>
     * @return \Msggamedata\MsgClan
     */
    public function getClan()
    {
        return $this->clan;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgClan clan = 1;</code>
     * @param \Msggamedata\MsgClan $var
     * @return $this
     */
    public function setClan($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgClan::class);
        $this->clan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift user_gifts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserGifts()
    {
        return $this->user_gifts;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift user_gifts = 2;</code>
     * @param \Msggamedata\MsgUserGift[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserGifts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserGift::class);
        $this->user_gifts = $arr;

        return $this;
    }

}

