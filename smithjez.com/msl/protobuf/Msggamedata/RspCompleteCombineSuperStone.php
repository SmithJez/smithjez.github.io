<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspCompleteCombineSuperStone.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspCompleteCombineSuperStone</code>
 */
class RspCompleteCombineSuperStone extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem user_item = 2;</code>
     */
    private $user_item = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMeta user_meta = 3;</code>
     */
    private $user_meta = null;

    public function __construct() {
        \GPBMetadata\RspCompleteCombineSuperStone::initOnce();
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
     * Generated from protobuf field <code>.msggamedata.MsgUserItem user_item = 2;</code>
     * @return \Msggamedata\MsgUserItem
     */
    public function getUserItem()
    {
        return $this->user_item;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem user_item = 2;</code>
     * @param \Msggamedata\MsgUserItem $var
     * @return $this
     */
    public function setUserItem($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserItem::class);
        $this->user_item = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMeta user_meta = 3;</code>
     * @return \Msggamedata\MsgUserMeta
     */
    public function getUserMeta()
    {
        return $this->user_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMeta user_meta = 3;</code>
     * @param \Msggamedata\MsgUserMeta $var
     * @return $this
     */
    public function setUserMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMeta::class);
        $this->user_meta = $var;

        return $this;
    }

}

