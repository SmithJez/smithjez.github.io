<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleStartBasicInfo.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleStartBasicInfo</code>
 */
class MsgBattleStartBasicInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     */
    private $battle_id = 0;
    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 2;</code>
     */
    private $substage_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 reward_index = 3;</code>
     */
    private $reward_index = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 4;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleData battles = 5;</code>
     */
    private $battles;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 6;</code>
     */
    private $monster_slot = null;

    public function __construct() {
        \GPBMetadata\MsgBattleStartBasicInfo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     * @return int|string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkUint64($var);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 2;</code>
     * @return int
     */
    public function getSubstageUid()
    {
        return $this->substage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 2;</code>
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
     * Generated from protobuf field <code>uint32 reward_index = 3;</code>
     * @return int
     */
    public function getRewardIndex()
    {
        return $this->reward_index;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 4;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 4;</code>
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
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleData battles = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBattles()
    {
        return $this->battles;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleData battles = 5;</code>
     * @param \Msggamedata\MsgBattleData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBattles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgBattleData::class);
        $this->battles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 6;</code>
     * @return \Msggamedata\MsgMonsterSlotData
     */
    public function getMonsterSlot()
    {
        return $this->monster_slot;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 6;</code>
     * @param \Msggamedata\MsgMonsterSlotData $var
     * @return $this
     */
    public function setMonsterSlot($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterSlotData::class);
        $this->monster_slot = $var;

        return $this;
    }

}

