<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspSellRune.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspSellRune</code>
 */
class RspSellRune extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune user_runes = 2;</code>
     */
    private $user_runes;

    public function __construct() {
        \GPBMetadata\RspSellRune::initOnce();
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
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune user_runes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserRunes()
    {
        return $this->user_runes;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune user_runes = 2;</code>
     * @param \Msggamedata\MsgUserRune[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserRunes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserRune::class);
        $this->user_runes = $arr;

        return $this;
    }

}

