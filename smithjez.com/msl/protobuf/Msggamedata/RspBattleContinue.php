<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspBattleContinue.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspBattleContinue</code>
 */
class RspBattleContinue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 battle_id = 1;</code>
     */
    private $battle_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     */
    private $user = null;

    public function __construct() {
        \GPBMetadata\RspBattleContinue::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 battle_id = 1;</code>
     * @return int
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

}

