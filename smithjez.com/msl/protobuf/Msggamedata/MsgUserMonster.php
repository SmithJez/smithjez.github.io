<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserMonster</code>
 */
class MsgUserMonster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 3;</code>
     */
    private $monster_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 lev = 4;</code>
     */
    private $lev = 0;
    /**
     * Generated from protobuf field <code>float attack = 5;</code>
     */
    private $attack = 0.0;
    /**
     * Generated from protobuf field <code>float defence = 6;</code>
     */
    private $defence = 0.0;
    /**
     * Generated from protobuf field <code>float heal = 7;</code>
     */
    private $heal = 0.0;
    /**
     * Generated from protobuf field <code>double hp = 8;</code>
     */
    private $hp = 0.0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType stat_type = 9;</code>
     */
    private $stat_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 10;</code>
     */
    private $stat_weight_type = 0;
    /**
     * Generated from protobuf field <code>uint32 exp = 12;</code>
     */
    private $exp = 0;
    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape1 = 13;</code>
     */
    private $rune_slot_shape1 = 0;
    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape2 = 14;</code>
     */
    private $rune_slot_shape2 = 0;
    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape3 = 15;</code>
     */
    private $rune_slot_shape3 = 0;
    /**
     * Generated from protobuf field <code>uint64 rune_slot_id1 = 16;</code>
     */
    private $rune_slot_id1 = 0;
    /**
     * Generated from protobuf field <code>uint64 rune_slot_id2 = 17;</code>
     */
    private $rune_slot_id2 = 0;
    /**
     * Generated from protobuf field <code>uint64 rune_slot_id3 = 18;</code>
     */
    private $rune_slot_id3 = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade grade = 19;</code>
     */
    private $grade = 0;
    /**
     * Generated from protobuf field <code>bool locked = 21;</code>
     */
    private $locked = false;
    /**
     * Generated from protobuf field <code>uint64 create_date = 22;</code>
     */
    private $create_date = 0;
    /**
     * Generated from protobuf field <code>uint64 last_battle_date = 23;</code>
     */
    private $last_battle_date = 0;
    /**
     * Generated from protobuf field <code>bool is_friend = 24;</code>
     */
    private $is_friend = false;
    /**
     * Generated from protobuf field <code>bool is_support = 25;</code>
     */
    private $is_support = false;
    /**
     * Generated from protobuf field <code>fixed32 support_monster_uid = 26;</code>
     */
    private $support_monster_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 leader_skill_grade = 27;</code>
     */
    private $leader_skill_grade = 0;
    /**
     * Generated from protobuf field <code>uint64 pasted_user_monster_id = 28;</code>
     */
    private $pasted_user_monster_id = 0;
    /**
     * Generated from protobuf field <code>uint32 pasted_count = 29;</code>
     */
    private $pasted_count = 0;
    /**
     * Generated from protobuf field <code>uint32 update_timestamp = 30;</code>
     */
    private $update_timestamp = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 31;</code>
     */
    private $storage_type = 0;
    /**
     * Generated from protobuf field <code>uint32 default_skill_level = 32;</code>
     */
    private $default_skill_level = 0;
    /**
     * Generated from protobuf field <code>uint32 active_skill_level = 33;</code>
     */
    private $active_skill_level = 0;
    /**
     * Generated from protobuf field <code>fixed32 costume_bundle_uid = 34;</code>
     */
    private $costume_bundle_uid = 0;

    public function __construct() {
        \GPBMetadata\MsgUserMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
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
     * Generated from protobuf field <code>fixed32 monster_uid = 3;</code>
     * @return int
     */
    public function getMonsterUid()
    {
        return $this->monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 4;</code>
     * @return int
     */
    public function getLev()
    {
        return $this->lev;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float attack = 5;</code>
     * @return float
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Generated from protobuf field <code>float attack = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setAttack($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defence = 6;</code>
     * @return float
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Generated from protobuf field <code>float defence = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setDefence($var)
    {
        GPBUtil::checkFloat($var);
        $this->defence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float heal = 7;</code>
     * @return float
     */
    public function getHeal()
    {
        return $this->heal;
    }

    /**
     * Generated from protobuf field <code>float heal = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setHeal($var)
    {
        GPBUtil::checkFloat($var);
        $this->heal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double hp = 8;</code>
     * @return float
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Generated from protobuf field <code>double hp = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setHp($var)
    {
        GPBUtil::checkDouble($var);
        $this->hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType stat_type = 9;</code>
     * @return int
     */
    public function getStatType()
    {
        return $this->stat_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType stat_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setStatType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatType::class);
        $this->stat_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 10;</code>
     * @return int
     */
    public function getStatWeightType()
    {
        return $this->stat_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->stat_weight_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 12;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape1 = 13;</code>
     * @return int
     */
    public function getRuneSlotShape1()
    {
        return $this->rune_slot_shape1;
    }

    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape1 = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setRuneSlotShape1($var)
    {
        GPBUtil::checkUint32($var);
        $this->rune_slot_shape1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape2 = 14;</code>
     * @return int
     */
    public function getRuneSlotShape2()
    {
        return $this->rune_slot_shape2;
    }

    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape2 = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRuneSlotShape2($var)
    {
        GPBUtil::checkUint32($var);
        $this->rune_slot_shape2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape3 = 15;</code>
     * @return int
     */
    public function getRuneSlotShape3()
    {
        return $this->rune_slot_shape3;
    }

    /**
     * Generated from protobuf field <code>uint32 rune_slot_shape3 = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRuneSlotShape3($var)
    {
        GPBUtil::checkUint32($var);
        $this->rune_slot_shape3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 rune_slot_id1 = 16;</code>
     * @return int|string
     */
    public function getRuneSlotId1()
    {
        return $this->rune_slot_id1;
    }

    /**
     * Generated from protobuf field <code>uint64 rune_slot_id1 = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRuneSlotId1($var)
    {
        GPBUtil::checkUint64($var);
        $this->rune_slot_id1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 rune_slot_id2 = 17;</code>
     * @return int|string
     */
    public function getRuneSlotId2()
    {
        return $this->rune_slot_id2;
    }

    /**
     * Generated from protobuf field <code>uint64 rune_slot_id2 = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRuneSlotId2($var)
    {
        GPBUtil::checkUint64($var);
        $this->rune_slot_id2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 rune_slot_id3 = 18;</code>
     * @return int|string
     */
    public function getRuneSlotId3()
    {
        return $this->rune_slot_id3;
    }

    /**
     * Generated from protobuf field <code>uint64 rune_slot_id3 = 18;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRuneSlotId3($var)
    {
        GPBUtil::checkUint64($var);
        $this->rune_slot_id3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade grade = 19;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade grade = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterGrade::class);
        $this->grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool locked = 21;</code>
     * @return bool
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Generated from protobuf field <code>bool locked = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->locked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 22;</code>
     * @return int|string
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 22;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_battle_date = 23;</code>
     * @return int|string
     */
    public function getLastBattleDate()
    {
        return $this->last_battle_date;
    }

    /**
     * Generated from protobuf field <code>uint64 last_battle_date = 23;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastBattleDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_battle_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_friend = 24;</code>
     * @return bool
     */
    public function getIsFriend()
    {
        return $this->is_friend;
    }

    /**
     * Generated from protobuf field <code>bool is_friend = 24;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFriend($var)
    {
        GPBUtil::checkBool($var);
        $this->is_friend = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_support = 25;</code>
     * @return bool
     */
    public function getIsSupport()
    {
        return $this->is_support;
    }

    /**
     * Generated from protobuf field <code>bool is_support = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSupport($var)
    {
        GPBUtil::checkBool($var);
        $this->is_support = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 support_monster_uid = 26;</code>
     * @return int
     */
    public function getSupportMonsterUid()
    {
        return $this->support_monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 support_monster_uid = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setSupportMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->support_monster_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 leader_skill_grade = 27;</code>
     * @return int
     */
    public function getLeaderSkillGrade()
    {
        return $this->leader_skill_grade;
    }

    /**
     * Generated from protobuf field <code>uint32 leader_skill_grade = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setLeaderSkillGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->leader_skill_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pasted_user_monster_id = 28;</code>
     * @return int|string
     */
    public function getPastedUserMonsterId()
    {
        return $this->pasted_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 pasted_user_monster_id = 28;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPastedUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pasted_user_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pasted_count = 29;</code>
     * @return int
     */
    public function getPastedCount()
    {
        return $this->pasted_count;
    }

    /**
     * Generated from protobuf field <code>uint32 pasted_count = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setPastedCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->pasted_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 update_timestamp = 30;</code>
     * @return int
     */
    public function getUpdateTimestamp()
    {
        return $this->update_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint32 update_timestamp = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setUpdateTimestamp($var)
    {
        GPBUtil::checkUint32($var);
        $this->update_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 31;</code>
     * @return int
     */
    public function getStorageType()
    {
        return $this->storage_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setStorageType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStorageType::class);
        $this->storage_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 default_skill_level = 32;</code>
     * @return int
     */
    public function getDefaultSkillLevel()
    {
        return $this->default_skill_level;
    }

    /**
     * Generated from protobuf field <code>uint32 default_skill_level = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultSkillLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->default_skill_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 active_skill_level = 33;</code>
     * @return int
     */
    public function getActiveSkillLevel()
    {
        return $this->active_skill_level;
    }

    /**
     * Generated from protobuf field <code>uint32 active_skill_level = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveSkillLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_skill_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 costume_bundle_uid = 34;</code>
     * @return int
     */
    public function getCostumeBundleUid()
    {
        return $this->costume_bundle_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 costume_bundle_uid = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setCostumeBundleUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->costume_bundle_uid = $var;

        return $this;
    }

}

