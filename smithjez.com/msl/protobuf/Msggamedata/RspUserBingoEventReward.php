<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserBingoEventReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserBingoEventReward</code>
 */
class RspUserBingoEventReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoEventData user_bingo_event_data = 1;</code>
     */
    private $user_bingo_event_data = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift rewards = 2;</code>
     */
    private $rewards;

    public function __construct() {
        \GPBMetadata\RspUserBingoEventReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoEventData user_bingo_event_data = 1;</code>
     * @return \Msggamedata\MsgUserBingoEventData
     */
    public function getUserBingoEventData()
    {
        return $this->user_bingo_event_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoEventData user_bingo_event_data = 1;</code>
     * @param \Msggamedata\MsgUserBingoEventData $var
     * @return $this
     */
    public function setUserBingoEventData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserBingoEventData::class);
        $this->user_bingo_event_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift rewards = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift rewards = 2;</code>
     * @param \Msggamedata\MsgUserGift[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserGift::class);
        $this->rewards = $arr;

        return $this;
    }

}

