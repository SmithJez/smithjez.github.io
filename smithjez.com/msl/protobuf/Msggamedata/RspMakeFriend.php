<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspMakeFriend.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspMakeFriend</code>
 */
class RspMakeFriend extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriend new_friend = 1;</code>
     */
    private $new_friend = null;

    public function __construct() {
        \GPBMetadata\RspMakeFriend::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriend new_friend = 1;</code>
     * @return \Msggamedata\MsgFriend
     */
    public function getNewFriend()
    {
        return $this->new_friend;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriend new_friend = 1;</code>
     * @param \Msggamedata\MsgFriend $var
     * @return $this
     */
    public function setNewFriend($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgFriend::class);
        $this->new_friend = $var;

        return $this;
    }

}

