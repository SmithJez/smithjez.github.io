<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleStartColossus.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleStartColossus</code>
 */
class MsgBattleStartColossus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 1;</code>
     */
    private $substage_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterSlot monster_slot = 2;</code>
     */
    private $monster_slot = null;

    public function __construct() {
        \GPBMetadata\MsgBattleStartColossus::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 1;</code>
     * @return int
     */
    public function getSubstageUid()
    {
        return $this->substage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSubstageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->substage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterSlot monster_slot = 2;</code>
     * @return \Msggamedata\MsgUserMonsterSlot
     */
    public function getMonsterSlot()
    {
        return $this->monster_slot;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterSlot monster_slot = 2;</code>
     * @param \Msggamedata\MsgUserMonsterSlot $var
     * @return $this
     */
    public function setMonsterSlot($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMonsterSlot::class);
        $this->monster_slot = $var;

        return $this;
    }

}
