<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUpgradeRune.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUpgradeRune</code>
 */
class RspUpgradeRune extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserRune user_rune = 2;</code>
     */
    private $user_rune = null;

    public function __construct() {
        \GPBMetadata\RspUpgradeRune::initOnce();
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
     * Generated from protobuf field <code>.msggamedata.MsgUserRune user_rune = 2;</code>
     * @return \Msggamedata\MsgUserRune
     */
    public function getUserRune()
    {
        return $this->user_rune;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserRune user_rune = 2;</code>
     * @param \Msggamedata\MsgUserRune $var
     * @return $this
     */
    public function setUserRune($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserRune::class);
        $this->user_rune = $var;

        return $this;
    }

}

