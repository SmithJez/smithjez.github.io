<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetBingoEventData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspGetBingoEventData</code>
 */
class RspGetBingoEventData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoEventData user_bingo_event_data = 1;</code>
     */
    private $user_bingo_event_data = null;

    public function __construct() {
        \GPBMetadata\RspGetBingoEventData::initOnce();
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

}
