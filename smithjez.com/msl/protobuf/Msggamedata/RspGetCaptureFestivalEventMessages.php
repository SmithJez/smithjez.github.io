<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetCaptureFestivalEventMessages.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspGetCaptureFestivalEventMessages</code>
 */
class RspGetCaptureFestivalEventMessages extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCaptureFestivalEventMessage event_messages = 1;</code>
     */
    private $event_messages;

    public function __construct() {
        \GPBMetadata\RspGetCaptureFestivalEventMessages::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCaptureFestivalEventMessage event_messages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventMessages()
    {
        return $this->event_messages;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCaptureFestivalEventMessage event_messages = 1;</code>
     * @param \Msggamedata\MsgCaptureFestivalEventMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgCaptureFestivalEventMessage::class);
        $this->event_messages = $arr;

        return $this;
    }

}

