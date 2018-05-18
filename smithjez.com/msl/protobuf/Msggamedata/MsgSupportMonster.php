<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgSupportMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgSupportMonster</code>
 */
class MsgSupportMonster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgSupportMonster.AvailableDay available_day = 2;</code>
     */
    private $available_day = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 3;</code>
     */
    private $monster_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 monster_lev = 4;</code>
     */
    private $monster_lev = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade monster_grade = 5;</code>
     */
    private $monster_grade = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType monster_weight_type = 6;</code>
     */
    private $monster_weight_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType monster_stat_type = 7;</code>
     */
    private $monster_stat_type = 0;
    /**
     * Generated from protobuf field <code>uint64 open_date = 8;</code>
     */
    private $open_date = 0;
    /**
     * Generated from protobuf field <code>uint64 close_date = 9;</code>
     */
    private $close_date = 0;
    /**
     * Generated from protobuf field <code>float attack_ability = 10;</code>
     */
    private $attack_ability = 0.0;
    /**
     * Generated from protobuf field <code>float defence_ability = 11;</code>
     */
    private $defence_ability = 0.0;
    /**
     * Generated from protobuf field <code>float heal_ability = 12;</code>
     */
    private $heal_ability = 0.0;
    /**
     * Generated from protobuf field <code>float hp_ability = 13;</code>
     */
    private $hp_ability = 0.0;

    public function __construct() {
        \GPBMetadata\MsgSupportMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgSupportMonster.AvailableDay available_day = 2;</code>
     * @return int
     */
    public function getAvailableDay()
    {
        return $this->available_day;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgSupportMonster.AvailableDay available_day = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailableDay($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgSupportMonster_AvailableDay::class);
        $this->available_day = $var;

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
     * Generated from protobuf field <code>uint32 monster_lev = 4;</code>
     * @return int
     */
    public function getMonsterLev()
    {
        return $this->monster_lev;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_lev = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade monster_grade = 5;</code>
     * @return int
     */
    public function getMonsterGrade()
    {
        return $this->monster_grade;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade monster_grade = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterGrade($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterGrade::class);
        $this->monster_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType monster_weight_type = 6;</code>
     * @return int
     */
    public function getMonsterWeightType()
    {
        return $this->monster_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType monster_weight_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->monster_weight_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType monster_stat_type = 7;</code>
     * @return int
     */
    public function getMonsterStatType()
    {
        return $this->monster_stat_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType monster_stat_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterStatType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatType::class);
        $this->monster_stat_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 open_date = 8;</code>
     * @return int|string
     */
    public function getOpenDate()
    {
        return $this->open_date;
    }

    /**
     * Generated from protobuf field <code>uint64 open_date = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOpenDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->open_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 close_date = 9;</code>
     * @return int|string
     */
    public function getCloseDate()
    {
        return $this->close_date;
    }

    /**
     * Generated from protobuf field <code>uint64 close_date = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCloseDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->close_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float attack_ability = 10;</code>
     * @return float
     */
    public function getAttackAbility()
    {
        return $this->attack_ability;
    }

    /**
     * Generated from protobuf field <code>float attack_ability = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setAttackAbility($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack_ability = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defence_ability = 11;</code>
     * @return float
     */
    public function getDefenceAbility()
    {
        return $this->defence_ability;
    }

    /**
     * Generated from protobuf field <code>float defence_ability = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setDefenceAbility($var)
    {
        GPBUtil::checkFloat($var);
        $this->defence_ability = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float heal_ability = 12;</code>
     * @return float
     */
    public function getHealAbility()
    {
        return $this->heal_ability;
    }

    /**
     * Generated from protobuf field <code>float heal_ability = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setHealAbility($var)
    {
        GPBUtil::checkFloat($var);
        $this->heal_ability = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float hp_ability = 13;</code>
     * @return float
     */
    public function getHpAbility()
    {
        return $this->hp_ability;
    }

    /**
     * Generated from protobuf field <code>float hp_ability = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setHpAbility($var)
    {
        GPBUtil::checkFloat($var);
        $this->hp_ability = $var;

        return $this;
    }

}

