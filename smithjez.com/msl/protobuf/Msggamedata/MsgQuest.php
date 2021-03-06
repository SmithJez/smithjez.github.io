<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgQuest.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgQuest</code>
 */
class MsgQuest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>repeated fixed32 precondi_quest_uids = 2;</code>
     */
    private $precondi_quest_uids;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.MainCondi main_condi = 3;</code>
     */
    private $main_condi = 0;
    /**
     * Generated from protobuf field <code>uint32 goal_count = 4;</code>
     */
    private $goal_count = 0;
    /**
     * Generated from protobuf field <code>uint32 repeat = 5;</code>
     */
    private $repeat = 0;
    /**
     * Generated from protobuf field <code>bool hidden = 6;</code>
     */
    private $hidden = false;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.QuestType type = 7;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgQuestSubCondi sub_condis = 8;</code>
     */
    private $sub_condis;
    /**
     * Generated from protobuf field <code>fixed32 name = 9;</code>
     */
    private $name = 0;
    /**
     * Generated from protobuf field <code>fixed32 desc = 10;</code>
     */
    private $desc = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.RewardType reward_type = 11;</code>
     */
    private $reward_type = 0;
    /**
     * Generated from protobuf field <code>uint32 reward_val = 12;</code>
     */
    private $reward_val = 0;
    /**
     * Generated from protobuf field <code>fixed32 reward_val_uid = 13;</code>
     */
    private $reward_val_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType reward_val_monster_weight_type = 14;</code>
     */
    private $reward_val_monster_weight_type = 0;
    /**
     * Generated from protobuf field <code>uint32 index = 15;</code>
     */
    private $index = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.QuestShortcut shortcut = 16;</code>
     */
    private $shortcut = 0;
    /**
     * Generated from protobuf field <code>fixed32 shortcut_stage_uid = 17;</code>
     */
    private $shortcut_stage_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.StageDifficultyType shortcut_stage_difficulty = 18;</code>
     */
    private $shortcut_stage_difficulty = 0;
    /**
     * Generated from protobuf field <code>fixed32 talk_seq_uid = 19;</code>
     */
    private $talk_seq_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.BattleType shortcut_battle_type = 20;</code>
     */
    private $shortcut_battle_type = 0;
    /**
     * Generated from protobuf field <code>uint32 reward_val_monster_lev = 21;</code>
     */
    private $reward_val_monster_lev = 0;

    public function __construct() {
        \GPBMetadata\MsgQuest::initOnce();
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
     * Generated from protobuf field <code>repeated fixed32 precondi_quest_uids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrecondiQuestUids()
    {
        return $this->precondi_quest_uids;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 precondi_quest_uids = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrecondiQuestUids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->precondi_quest_uids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.MainCondi main_condi = 3;</code>
     * @return int
     */
    public function getMainCondi()
    {
        return $this->main_condi;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.MainCondi main_condi = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMainCondi($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgQuest_MainCondi::class);
        $this->main_condi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 goal_count = 4;</code>
     * @return int
     */
    public function getGoalCount()
    {
        return $this->goal_count;
    }

    /**
     * Generated from protobuf field <code>uint32 goal_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGoalCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->goal_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 repeat = 5;</code>
     * @return int
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Generated from protobuf field <code>uint32 repeat = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRepeat($var)
    {
        GPBUtil::checkUint32($var);
        $this->repeat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hidden = 6;</code>
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Generated from protobuf field <code>bool hidden = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.QuestType type = 7;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.QuestType type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgQuest_QuestType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgQuestSubCondi sub_condis = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubCondis()
    {
        return $this->sub_condis;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgQuestSubCondi sub_condis = 8;</code>
     * @param \Msggamedata\MsgQuestSubCondi[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubCondis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgQuestSubCondi::class);
        $this->sub_condis = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 name = 9;</code>
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>fixed32 name = 9;</code>
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
     * Generated from protobuf field <code>fixed32 desc = 10;</code>
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 10;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgQuest.RewardType reward_type = 11;</code>
     * @return int
     */
    public function getRewardType()
    {
        return $this->reward_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.RewardType reward_type = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgQuest_RewardType::class);
        $this->reward_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_val = 12;</code>
     * @return int
     */
    public function getRewardVal()
    {
        return $this->reward_val;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_val = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardVal($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_val = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 reward_val_uid = 13;</code>
     * @return int
     */
    public function getRewardValUid()
    {
        return $this->reward_val_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 reward_val_uid = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardValUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_val_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType reward_val_monster_weight_type = 14;</code>
     * @return int
     */
    public function getRewardValMonsterWeightType()
    {
        return $this->reward_val_monster_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType reward_val_monster_weight_type = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardValMonsterWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->reward_val_monster_weight_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 15;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.QuestShortcut shortcut = 16;</code>
     * @return int
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.QuestShortcut shortcut = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setShortcut($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgQuest_QuestShortcut::class);
        $this->shortcut = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 shortcut_stage_uid = 17;</code>
     * @return int
     */
    public function getShortcutStageUid()
    {
        return $this->shortcut_stage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 shortcut_stage_uid = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setShortcutStageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->shortcut_stage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.StageDifficultyType shortcut_stage_difficulty = 18;</code>
     * @return int
     */
    public function getShortcutStageDifficulty()
    {
        return $this->shortcut_stage_difficulty;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.StageDifficultyType shortcut_stage_difficulty = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setShortcutStageDifficulty($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\StageDifficultyType::class);
        $this->shortcut_stage_difficulty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 talk_seq_uid = 19;</code>
     * @return int
     */
    public function getTalkSeqUid()
    {
        return $this->talk_seq_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 talk_seq_uid = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setTalkSeqUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->talk_seq_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleType shortcut_battle_type = 20;</code>
     * @return int
     */
    public function getShortcutBattleType()
    {
        return $this->shortcut_battle_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleType shortcut_battle_type = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setShortcutBattleType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\BattleType::class);
        $this->shortcut_battle_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_val_monster_lev = 21;</code>
     * @return int
     */
    public function getRewardValMonsterLev()
    {
        return $this->reward_val_monster_lev;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_val_monster_lev = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardValMonsterLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_val_monster_lev = $var;

        return $this;
    }

}

