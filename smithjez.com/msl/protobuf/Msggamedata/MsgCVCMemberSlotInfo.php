<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgCVCMemberSlotInfo.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgCVCMemberSlotInfo</code>
 */
class MsgCVCMemberSlotInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMonsterSlot monster_slot = 2;</code>
     */
    private $monster_slot = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster monsters = 3;</code>
     */
    private $monsters;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune runes = 4;</code>
     */
    private $runes;

    public function __construct() {
        \GPBMetadata\MsgCVCMemberSlotInfo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMonsterSlot monster_slot = 2;</code>
     * @return \Msggamedata\MsgUserCVCMonsterSlot
     */
    public function getMonsterSlot()
    {
        return $this->monster_slot;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMonsterSlot monster_slot = 2;</code>
     * @param \Msggamedata\MsgUserCVCMonsterSlot $var
     * @return $this
     */
    public function setMonsterSlot($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserCVCMonsterSlot::class);
        $this->monster_slot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster monsters = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsters()
    {
        return $this->monsters;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster monsters = 3;</code>
     * @param \Msggamedata\MsgUserMonster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserMonster::class);
        $this->monsters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune runes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRunes()
    {
        return $this->runes;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune runes = 4;</code>
     * @param \Msggamedata\MsgUserRune[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRunes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserRune::class);
        $this->runes = $arr;

        return $this;
    }

}
