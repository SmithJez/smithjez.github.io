<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgStatusEffect.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgStatusEffect</code>
 */
class MsgStatusEffect extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 name = 2;</code>
     */
    private $name = 0;
    /**
     * Generated from protobuf field <code>fixed32 desc = 3;</code>
     */
    private $desc = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectType type = 4;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectSubType sub_type = 5;</code>
     */
    private $sub_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 6;</code>
     */
    private $element = 0;
    /**
     * Generated from protobuf field <code>uint32 turn = 7;</code>
     */
    private $turn = 0;
    /**
     * Generated from protobuf field <code>float prob = 8;</code>
     */
    private $prob = 0.0;
    /**
     * Generated from protobuf field <code>float v_float = 9;</code>
     */
    private $v_float = 0.0;
    /**
     * Generated from protobuf field <code>uint32 v_int = 10;</code>
     */
    private $v_int = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectWhere where = 11;</code>
     */
    private $where = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.MsgStatusEffectBossSelf boss_self = 12;</code>
     */
    private $boss_self = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectIfCond if_cond = 13;</code>
     */
    private $if_cond = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectSubType if_cond_status_effect = 14;</code>
     */
    private $if_cond_status_effect = 0;

    public function __construct() {
        \GPBMetadata\MsgStatusEffect::initOnce();
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
     * Generated from protobuf field <code>fixed32 name = 2;</code>
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>fixed32 name = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkUint32($var);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 3;</code>
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDesc($var)
    {
        GPBUtil::checkUint32($var);
        $this->desc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgStatusEffect_StatusEffectType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectSubType sub_type = 5;</code>
     * @return int
     */
    public function getSubType()
    {
        return $this->sub_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectSubType sub_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSubType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgStatusEffect_StatusEffectSubType::class);
        $this->sub_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 6;</code>
     * @return int
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setElement($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterElementType::class);
        $this->element = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 turn = 7;</code>
     * @return int
     */
    public function getTurn()
    {
        return $this->turn;
    }

    /**
     * Generated from protobuf field <code>uint32 turn = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTurn($var)
    {
        GPBUtil::checkUint32($var);
        $this->turn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float prob = 8;</code>
     * @return float
     */
    public function getProb()
    {
        return $this->prob;
    }

    /**
     * Generated from protobuf field <code>float prob = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setProb($var)
    {
        GPBUtil::checkFloat($var);
        $this->prob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float v_float = 9;</code>
     * @return float
     */
    public function getVFloat()
    {
        return $this->v_float;
    }

    /**
     * Generated from protobuf field <code>float v_float = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setVFloat($var)
    {
        GPBUtil::checkFloat($var);
        $this->v_float = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 v_int = 10;</code>
     * @return int
     */
    public function getVInt()
    {
        return $this->v_int;
    }

    /**
     * Generated from protobuf field <code>uint32 v_int = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setVInt($var)
    {
        GPBUtil::checkUint32($var);
        $this->v_int = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectWhere where = 11;</code>
     * @return int
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectWhere where = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setWhere($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgStatusEffect_StatusEffectWhere::class);
        $this->where = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.MsgStatusEffectBossSelf boss_self = 12;</code>
     * @return \Msggamedata\MsgStatusEffect_MsgStatusEffectBossSelf
     */
    public function getBossSelf()
    {
        return $this->boss_self;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.MsgStatusEffectBossSelf boss_self = 12;</code>
     * @param \Msggamedata\MsgStatusEffect_MsgStatusEffectBossSelf $var
     * @return $this
     */
    public function setBossSelf($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgStatusEffect_MsgStatusEffectBossSelf::class);
        $this->boss_self = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectIfCond if_cond = 13;</code>
     * @return int
     */
    public function getIfCond()
    {
        return $this->if_cond;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectIfCond if_cond = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setIfCond($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgStatusEffect_StatusEffectIfCond::class);
        $this->if_cond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectSubType if_cond_status_effect = 14;</code>
     * @return int
     */
    public function getIfCondStatusEffect()
    {
        return $this->if_cond_status_effect;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgStatusEffect.StatusEffectSubType if_cond_status_effect = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setIfCondStatusEffect($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgStatusEffect_StatusEffectSubType::class);
        $this->if_cond_status_effect = $var;

        return $this;
    }

}

