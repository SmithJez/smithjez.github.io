<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspFindFriend.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspFindFriend</code>
 */
class RspFindFriend extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriend friend = 1;</code>
     */
    private $friend = null;

    public function __construct() {
        \GPBMetadata\RspFindFriend::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriend friend = 1;</code>
     * @return \Msggamedata\MsgFriend
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriend friend = 1;</code>
     * @param \Msggamedata\MsgFriend $var
     * @return $this
     */
    public function setFriend($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgFriend::class);
        $this->friend = $var;

        return $this;
    }

}

