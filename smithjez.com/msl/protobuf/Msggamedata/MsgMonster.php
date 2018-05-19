<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgMonster</code>
 */
class MsgMonster extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.msggamedata.MonsterGrade born_grade = 4;</code>
     */
    private $born_grade = 0;
    /**
     * Generated from protobuf field <code>float def_hp = 10;</code>
     */
    private $def_hp = 0.0;
    /**
     * Generated from protobuf field <code>float def_attack = 11;</code>
     */
    private $def_attack = 0.0;
    /**
     * Generated from protobuf field <code>float def_defence = 12;</code>
     */
    private $def_defence = 0.0;
    /**
     * Generated from protobuf field <code>float def_heal = 13;</code>
     */
    private $def_heal = 0.0;
    /**
     * Generated from protobuf field <code>float inc_hp = 14;</code>
     */
    private $inc_hp = 0.0;
    /**
     * Generated from protobuf field <code>float inc_attack = 15;</code>
     */
    private $inc_attack = 0.0;
    /**
     * Generated from protobuf field <code>float inc_defence = 16;</code>
     */
    private $inc_defence = 0.0;
    /**
     * Generated from protobuf field <code>float inc_heal = 17;</code>
     */
    private $inc_heal = 0.0;
    /**
     * Generated from protobuf field <code>uint32 mp = 18;</code>
     */
    private $mp = 0;
    /**
     * Generated from protobuf field <code>uint32 mp_recovery = 19;</code>
     */
    private $mp_recovery = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType def_stat_type = 20;</code>
     */
    private $def_stat_type = 0;
    /**
     * Generated from protobuf field <code>string used_type = 21;</code>
     */
    private $used_type = '';
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 22;</code>
     */
    private $element = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice sell_price = 23;</code>
     */
    private $sell_price = null;
    /**
     * Generated from protobuf field <code>fixed32 default_skill = 24;</code>
     */
    private $default_skill = 0;
    /**
     * Generated from protobuf field <code>fixed32 active_skill = 25;</code>
     */
    private $active_skill = 0;
    /**
     * Generated from protobuf field <code>fixed32 default_skill_status_effect_beyond = 26;</code>
     */
    private $default_skill_status_effect_beyond = 0;
    /**
     * Generated from protobuf field <code>fixed32 active_skill_status_effect_beyond = 27;</code>
     */
    private $active_skill_status_effect_beyond = 0;
    /**
     * Generated from protobuf field <code>fixed32 leader_skill = 28;</code>
     */
    private $leader_skill = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterEvolution evolution = 29;</code>
     */
    private $evolution = 0;
    /**
     * Generated from protobuf field <code>string resource_name = 30;</code>
     */
    private $resource_name = '';
    /**
     * Generated from protobuf field <code>string first_evolution_resource_name = 31;</code>
     */
    private $first_evolution_resource_name = '';
    /**
     * Generated from protobuf field <code>string base_resource_name = 32;</code>
     */
    private $base_resource_name = '';
    /**
     * Generated from protobuf field <code>float critical_prob = 33;</code>
     */
    private $critical_prob = 0.0;
    /**
     * Generated from protobuf field <code>float critical_damage = 34;</code>
     */
    private $critical_damage = 0.0;
    /**
     * Generated from protobuf field <code>float status_effect_resistance = 35;</code>
     */
    private $status_effect_resistance = 0.0;
    /**
     * Generated from protobuf field <code>fixed32 size_factor = 36;</code>
     */
    private $size_factor = 0;
    /**
     * Generated from protobuf field <code>fixed32 next_evolution = 37;</code>
     */
    private $next_evolution = 0;
    /**
     * Generated from protobuf field <code>uint32 required_soulstone = 39;</code>
     */
    private $required_soulstone = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_default_ai = 40;</code>
     */
    private $monster_default_ai = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_active_ai = 41;</code>
     */
    private $monster_active_ai = 0;
    /**
     * Generated from protobuf field <code>string default_hit_sound = 42;</code>
     */
    private $default_hit_sound = '';
    /**
     * Generated from protobuf field <code>string active_hit_sound = 43;</code>
     */
    private $active_hit_sound = '';
    /**
     * Generated from protobuf field <code>repeated fixed32 story_desc = 44;</code>
     */
    private $story_desc;
    /**
     * Generated from protobuf field <code>fixed32 cond_active_skill = 45;</code>
     */
    private $cond_active_skill = 0;
    /**
     * Generated from protobuf field <code>fixed32 cond_active_skill_status_effect_beyond = 46;</code>
     */
    private $cond_active_skill_status_effect_beyond = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_cond_active_ai = 47;</code>
     */
    private $monster_cond_active_ai = 0;
    /**
     * Generated from protobuf field <code>string cond_active_hit_sound = 48;</code>
     */
    private $cond_active_hit_sound = '';
    /**
     * Generated from protobuf field <code>fixed32 root_monster_uid = 49;</code>
     */
    private $root_monster_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 skill_level = 50;</code>
     */
    private $skill_level = 0;
    /**
     * Generated from protobuf field <code>fixed32 first_evolution_monster_uid = 51;</code>
     */
    private $first_evolution_monster_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGenderType gender_type = 52;</code>
     */
    private $gender_type = 0;

    public function __construct() {
        \GPBMetadata\MsgMonster::initOnce();
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
     * Generated from protobuf field <code>.msggamedata.MonsterGrade born_grade = 4;</code>
     * @return int
     */
    public function getBornGrade()
    {
        return $this->born_grade;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGrade born_grade = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBornGrade($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterGrade::class);
        $this->born_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float def_hp = 10;</code>
     * @return float
     */
    public function getDefHp()
    {
        return $this->def_hp;
    }

    /**
     * Generated from protobuf field <code>float def_hp = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setDefHp($var)
    {
        GPBUtil::checkFloat($var);
        $this->def_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float def_attack = 11;</code>
     * @return float
     */
    public function getDefAttack()
    {
        return $this->def_attack;
    }

    /**
     * Generated from protobuf field <code>float def_attack = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setDefAttack($var)
    {
        GPBUtil::checkFloat($var);
        $this->def_attack = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float def_defence = 12;</code>
     * @return float
     */
    public function getDefDefence()
    {
        return $this->def_defence;
    }

    /**
     * Generated from protobuf field <code>float def_defence = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setDefDefence($var)
    {
        GPBUtil::checkFloat($var);
        $this->def_defence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float def_heal = 13;</code>
     * @return float
     */
    public function getDefHeal()
    {
        return $this->def_heal;
    }

    /**
     * Generated from protobuf field <code>float def_heal = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setDefHeal($var)
    {
        GPBUtil::checkFloat($var);
        $this->def_heal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float inc_hp = 14;</code>
     * @return float
     */
    public function getIncHp()
    {
        return $this->inc_hp;
    }

    /**
     * Generated from protobuf field <code>float inc_hp = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setIncHp($var)
    {
        GPBUtil::checkFloat($var);
        $this->inc_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float inc_attack = 15;</code>
     * @return float
     */
    public function getIncAttack()
    {
        return $this->inc_attack;
    }

    /**
     * Generated from protobuf field <code>float inc_attack = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setIncAttack($var)
    {
        GPBUtil::checkFloat($var);
        $this->inc_attack = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float inc_defence = 16;</code>
     * @return float
     */
    public function getIncDefence()
    {
        return $this->inc_defence;
    }

    /**
     * Generated from protobuf field <code>float inc_defence = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setIncDefence($var)
    {
        GPBUtil::checkFloat($var);
        $this->inc_defence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float inc_heal = 17;</code>
     * @return float
     */
    public function getIncHeal()
    {
        return $this->inc_heal;
    }

    /**
     * Generated from protobuf field <code>float inc_heal = 17;</code>
     * @param float $var
     * @return $this
     */
    public function setIncHeal($var)
    {
        GPBUtil::checkFloat($var);
        $this->inc_heal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mp = 18;</code>
     * @return int
     */
    public function getMp()
    {
        return $this->mp;
    }

    /**
     * Generated from protobuf field <code>uint32 mp = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setMp($var)
    {
        GPBUtil::checkUint32($var);
        $this->mp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mp_recovery = 19;</code>
     * @return int
     */
    public function getMpRecovery()
    {
        return $this->mp_recovery;
    }

    /**
     * Generated from protobuf field <code>uint32 mp_recovery = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setMpRecovery($var)
    {
        GPBUtil::checkUint32($var);
        $this->mp_recovery = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType def_stat_type = 20;</code>
     * @return int
     */
    public function getDefStatType()
    {
        return $this->def_stat_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType def_stat_type = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setDefStatType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatType::class);
        $this->def_stat_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string used_type = 21;</code>
     * @return string
     */
    public function getUsedType()
    {
        return $this->used_type;
    }

    /**
     * Generated from protobuf field <code>string used_type = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setUsedType($var)
    {
        GPBUtil::checkString($var, True);
        $this->used_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 22;</code>
     * @return int
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 22;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgPrice sell_price = 23;</code>
     * @return \Msggamedata\MsgPrice
     */
    public function getSellPrice()
    {
        return $this->sell_price;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice sell_price = 23;</code>
     * @param \Msggamedata\MsgPrice $var
     * @return $this
     */
    public function setSellPrice($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgPrice::class);
        $this->sell_price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 default_skill = 24;</code>
     * @return int
     */
    public function getDefaultSkill()
    {
        return $this->default_skill;
    }

    /**
     * Generated from protobuf field <code>fixed32 default_skill = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultSkill($var)
    {
        GPBUtil::checkUint32($var);
        $this->default_skill = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 active_skill = 25;</code>
     * @return int
     */
    public function getActiveSkill()
    {
        return $this->active_skill;
    }

    /**
     * Generated from protobuf field <code>fixed32 active_skill = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveSkill($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_skill = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 default_skill_status_effect_beyond = 26;</code>
     * @return int
     */
    public function getDefaultSkillStatusEffectBeyond()
    {
        return $this->default_skill_status_effect_beyond;
    }

    /**
     * Generated from protobuf field <code>fixed32 default_skill_status_effect_beyond = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultSkillStatusEffectBeyond($var)
    {
        GPBUtil::checkUint32($var);
        $this->default_skill_status_effect_beyond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 active_skill_status_effect_beyond = 27;</code>
     * @return int
     */
    public function getActiveSkillStatusEffectBeyond()
    {
        return $this->active_skill_status_effect_beyond;
    }

    /**
     * Generated from protobuf field <code>fixed32 active_skill_status_effect_beyond = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveSkillStatusEffectBeyond($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_skill_status_effect_beyond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 leader_skill = 28;</code>
     * @return int
     */
    public function getLeaderSkill()
    {
        return $this->leader_skill;
    }

    /**
     * Generated from protobuf field <code>fixed32 leader_skill = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setLeaderSkill($var)
    {
        GPBUtil::checkUint32($var);
        $this->leader_skill = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterEvolution evolution = 29;</code>
     * @return int
     */
    public function getEvolution()
    {
        return $this->evolution;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterEvolution evolution = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setEvolution($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterEvolution::class);
        $this->evolution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource_name = 30;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Generated from protobuf field <code>string resource_name = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_evolution_resource_name = 31;</code>
     * @return string
     */
    public function getFirstEvolutionResourceName()
    {
        return $this->first_evolution_resource_name;
    }

    /**
     * Generated from protobuf field <code>string first_evolution_resource_name = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstEvolutionResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_evolution_resource_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_resource_name = 32;</code>
     * @return string
     */
    public function getBaseResourceName()
    {
        return $this->base_resource_name;
    }

    /**
     * Generated from protobuf field <code>string base_resource_name = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_resource_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float critical_prob = 33;</code>
     * @return float
     */
    public function getCriticalProb()
    {
        return $this->critical_prob;
    }

    /**
     * Generated from protobuf field <code>float critical_prob = 33;</code>
     * @param float $var
     * @return $this
     */
    public function setCriticalProb($var)
    {
        GPBUtil::checkFloat($var);
        $this->critical_prob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float critical_damage = 34;</code>
     * @return float
     */
    public function getCriticalDamage()
    {
        return $this->critical_damage;
    }

    /**
     * Generated from protobuf field <code>float critical_damage = 34;</code>
     * @param float $var
     * @return $this
     */
    public function setCriticalDamage($var)
    {
        GPBUtil::checkFloat($var);
        $this->critical_damage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float status_effect_resistance = 35;</code>
     * @return float
     */
    public function getStatusEffectResistance()
    {
        return $this->status_effect_resistance;
    }

    /**
     * Generated from protobuf field <code>float status_effect_resistance = 35;</code>
     * @param float $var
     * @return $this
     */
    public function setStatusEffectResistance($var)
    {
        GPBUtil::checkFloat($var);
        $this->status_effect_resistance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 size_factor = 36;</code>
     * @return int
     */
    public function getSizeFactor()
    {
        return $this->size_factor;
    }

    /**
     * Generated from protobuf field <code>fixed32 size_factor = 36;</code>
     * @param int $var
     * @return $this
     */
    public function setSizeFactor($var)
    {
        GPBUtil::checkUint32($var);
        $this->size_factor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 next_evolution = 37;</code>
     * @return int
     */
    public function getNextEvolution()
    {
        return $this->next_evolution;
    }

    /**
     * Generated from protobuf field <code>fixed32 next_evolution = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setNextEvolution($var)
    {
        GPBUtil::checkUint32($var);
        $this->next_evolution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 required_soulstone = 39;</code>
     * @return int
     */
    public function getRequiredSoulstone()
    {
        return $this->required_soulstone;
    }

    /**
     * Generated from protobuf field <code>uint32 required_soulstone = 39;</code>
     * @param int $var
     * @return $this
     */
    public function setRequiredSoulstone($var)
    {
        GPBUtil::checkUint32($var);
        $this->required_soulstone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_default_ai = 40;</code>
     * @return int
     */
    public function getMonsterDefaultAi()
    {
        return $this->monster_default_ai;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_default_ai = 40;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterDefaultAi($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_default_ai = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_active_ai = 41;</code>
     * @return int
     */
    public function getMonsterActiveAi()
    {
        return $this->monster_active_ai;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_active_ai = 41;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterActiveAi($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_active_ai = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_hit_sound = 42;</code>
     * @return string
     */
    public function getDefaultHitSound()
    {
        return $this->default_hit_sound;
    }

    /**
     * Generated from protobuf field <code>string default_hit_sound = 42;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultHitSound($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_hit_sound = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string active_hit_sound = 43;</code>
     * @return string
     */
    public function getActiveHitSound()
    {
        return $this->active_hit_sound;
    }

    /**
     * Generated from protobuf field <code>string active_hit_sound = 43;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveHitSound($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_hit_sound = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 story_desc = 44;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoryDesc()
    {
        return $this->story_desc;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 story_desc = 44;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoryDesc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->story_desc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 cond_active_skill = 45;</code>
     * @return int
     */
    public function getCondActiveSkill()
    {
        return $this->cond_active_skill;
    }

    /**
     * Generated from protobuf field <code>fixed32 cond_active_skill = 45;</code>
     * @param int $var
     * @return $this
     */
    public function setCondActiveSkill($var)
    {
        GPBUtil::checkUint32($var);
        $this->cond_active_skill = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 cond_active_skill_status_effect_beyond = 46;</code>
     * @return int
     */
    public function getCondActiveSkillStatusEffectBeyond()
    {
        return $this->cond_active_skill_status_effect_beyond;
    }

    /**
     * Generated from protobuf field <code>fixed32 cond_active_skill_status_effect_beyond = 46;</code>
     * @param int $var
     * @return $this
     */
    public function setCondActiveSkillStatusEffectBeyond($var)
    {
        GPBUtil::checkUint32($var);
        $this->cond_active_skill_status_effect_beyond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_cond_active_ai = 47;</code>
     * @return int
     */
    public function getMonsterCondActiveAi()
    {
        return $this->monster_cond_active_ai;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_cond_active_ai = 47;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterCondActiveAi($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_cond_active_ai = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cond_active_hit_sound = 48;</code>
     * @return string
     */
    public function getCondActiveHitSound()
    {
        return $this->cond_active_hit_sound;
    }

    /**
     * Generated from protobuf field <code>string cond_active_hit_sound = 48;</code>
     * @param string $var
     * @return $this
     */
    public function setCondActiveHitSound($var)
    {
        GPBUtil::checkString($var, True);
        $this->cond_active_hit_sound = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 root_monster_uid = 49;</code>
     * @return int
     */
    public function getRootMonsterUid()
    {
        return $this->root_monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 root_monster_uid = 49;</code>
     * @param int $var
     * @return $this
     */
    public function setRootMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->root_monster_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 skill_level = 50;</code>
     * @return int
     */
    public function getSkillLevel()
    {
        return $this->skill_level;
    }

    /**
     * Generated from protobuf field <code>fixed32 skill_level = 50;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 first_evolution_monster_uid = 51;</code>
     * @return int
     */
    public function getFirstEvolutionMonsterUid()
    {
        return $this->first_evolution_monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 first_evolution_monster_uid = 51;</code>
     * @param int $var
     * @return $this
     */
    public function setFirstEvolutionMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->first_evolution_monster_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGenderType gender_type = 52;</code>
     * @return int
     */
    public function getGenderType()
    {
        return $this->gender_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterGenderType gender_type = 52;</code>
     * @param int $var
     * @return $this
     */
    public function setGenderType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterGenderType::class);
        $this->gender_type = $var;

        return $this;
    }

}
