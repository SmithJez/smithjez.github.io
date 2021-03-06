<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgInfiniteSubStage.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgInfiniteSubStage</code>
 */
class MsgInfiniteSubStage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 stage_uid = 2;</code>
     */
    private $stage_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 floor = 3;</code>
     */
    private $floor = 0;
    /**
     * Generated from protobuf field <code>bool boss_stage = 4;</code>
     */
    private $boss_stage = false;
    /**
     * Generated from protobuf field <code>string boss_start_scene = 5;</code>
     */
    private $boss_start_scene = '';
    /**
     * Generated from protobuf field <code>repeated uint32 exps = 6;</code>
     */
    private $exps;
    /**
     * Generated from protobuf field <code>repeated uint32 monster_exps = 7;</code>
     */
    private $monster_exps;
    /**
     * Generated from protobuf field <code>repeated uint32 required_energies = 9;</code>
     */
    private $required_energies;
    /**
     * Generated from protobuf field <code>repeated fixed32 normal_display_mons = 10;</code>
     */
    private $normal_display_mons;
    /**
     * Generated from protobuf field <code>repeated fixed32 hard_display_mons = 11;</code>
     */
    private $hard_display_mons;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgStageBattle normal_battles = 12;</code>
     */
    private $normal_battles;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgStageBattle hard_battles = 13;</code>
     */
    private $hard_battles;
    /**
     * Generated from protobuf field <code>repeated uint32 tip_uids = 14;</code>
     */
    private $tip_uids;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSubStageRewardProb reward_probs = 15;</code>
     */
    private $reward_probs;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSubStageRewardMustDifficulty reward_musts = 16;</code>
     */
    private $reward_musts;
    /**
     * Generated from protobuf field <code>uint32 reward_general = 17;</code>
     */
    private $reward_general = 0;

    public function __construct() {
        \GPBMetadata\MsgInfiniteSubStage::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
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
     * Generated from protobuf field <code>uint32 stage_uid = 2;</code>
     * @return int
     */
    public function getStageUid()
    {
        return $this->stage_uid;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 floor = 3;</code>
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Generated from protobuf field <code>fixed32 floor = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFloor($var)
    {
        GPBUtil::checkUint32($var);
        $this->floor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool boss_stage = 4;</code>
     * @return bool
     */
    public function getBossStage()
    {
        return $this->boss_stage;
    }

    /**
     * Generated from protobuf field <code>bool boss_stage = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBossStage($var)
    {
        GPBUtil::checkBool($var);
        $this->boss_stage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string boss_start_scene = 5;</code>
     * @return string
     */
    public function getBossStartScene()
    {
        return $this->boss_start_scene;
    }

    /**
     * Generated from protobuf field <code>string boss_start_scene = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBossStartScene($var)
    {
        GPBUtil::checkString($var, True);
        $this->boss_start_scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 exps = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExps()
    {
        return $this->exps;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 exps = 6;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->exps = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 monster_exps = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsterExps()
    {
        return $this->monster_exps;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 monster_exps = 7;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsterExps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->monster_exps = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 required_energies = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredEnergies()
    {
        return $this->required_energies;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 required_energies = 9;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredEnergies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->required_energies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 normal_display_mons = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNormalDisplayMons()
    {
        return $this->normal_display_mons;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 normal_display_mons = 10;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNormalDisplayMons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->normal_display_mons = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 hard_display_mons = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHardDisplayMons()
    {
        return $this->hard_display_mons;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 hard_display_mons = 11;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHardDisplayMons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->hard_display_mons = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgStageBattle normal_battles = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNormalBattles()
    {
        return $this->normal_battles;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgStageBattle normal_battles = 12;</code>
     * @param \Msggamedata\MsgStageBattle[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNormalBattles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgStageBattle::class);
        $this->normal_battles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgStageBattle hard_battles = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHardBattles()
    {
        return $this->hard_battles;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgStageBattle hard_battles = 13;</code>
     * @param \Msggamedata\MsgStageBattle[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHardBattles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgStageBattle::class);
        $this->hard_battles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 tip_uids = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTipUids()
    {
        return $this->tip_uids;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 tip_uids = 14;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTipUids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->tip_uids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSubStageRewardProb reward_probs = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewardProbs()
    {
        return $this->reward_probs;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSubStageRewardProb reward_probs = 15;</code>
     * @param \Msggamedata\MsgSubStageRewardProb[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewardProbs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgSubStageRewardProb::class);
        $this->reward_probs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSubStageRewardMustDifficulty reward_musts = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewardMusts()
    {
        return $this->reward_musts;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSubStageRewardMustDifficulty reward_musts = 16;</code>
     * @param \Msggamedata\MsgSubStageRewardMustDifficulty[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewardMusts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgSubStageRewardMustDifficulty::class);
        $this->reward_musts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_general = 17;</code>
     * @return int
     */
    public function getRewardGeneral()
    {
        return $this->reward_general;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_general = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardGeneral($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_general = $var;

        return $this;
    }

}

