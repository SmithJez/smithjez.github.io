<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserClanMember.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserClanMember</code>
 */
class MsgUserClanMember extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData user_data = 1;</code>
     */
    private $user_data = null;
    /**
     * Generated from protobuf field <code>uint64 clan_id = 2;</code>
     */
    private $clan_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade member_grade = 3;</code>
     */
    private $member_grade = 0;
    /**
     * Generated from protobuf field <code>uint32 clan_battle_season_idx = 4;</code>
     */
    private $clan_battle_season_idx = 0;
    /**
     * Generated from protobuf field <code>uint32 phase = 5;</code>
     */
    private $phase = 0;
    /**
     * Generated from protobuf field <code>uint32 phase_battle_count = 6;</code>
     */
    private $phase_battle_count = 0;
    /**
     * Generated from protobuf field <code>uint32 season_battle_count = 7;</code>
     */
    private $season_battle_count = 0;
    /**
     * Generated from protobuf field <code>uint32 max_season_battle_count = 8;</code>
     */
    private $max_season_battle_count = 0;
    /**
     * Generated from protobuf field <code>uint64 season_best_score = 9;</code>
     */
    private $season_best_score = 0;
    /**
     * Generated from protobuf field <code>uint64 contribution = 10;</code>
     */
    private $contribution = 0;
    /**
     * Generated from protobuf field <code>uint32 cur_boss_level = 11;</code>
     */
    private $cur_boss_level = 0;
    /**
     * Generated from protobuf field <code>uint64 cur_boss_remain_hp = 12;</code>
     */
    private $cur_boss_remain_hp = 0;
    /**
     * Generated from protobuf field <code>uint32 clan_reward_date = 13;</code>
     */
    private $clan_reward_date = 0;
    /**
     * Generated from protobuf field <code>uint32 last_login = 14;</code>
     */
    private $last_login = 0;
    /**
     * Generated from protobuf field <code>bool is_attendance = 15;</code>
     */
    private $is_attendance = false;
    /**
     * Generated from protobuf field <code>uint64 reg_date = 16;</code>
     */
    private $reg_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserClanMember::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData user_data = 1;</code>
     * @return \Msggamedata\MsgUserProfileData
     */
    public function getUserData()
    {
        return $this->user_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData user_data = 1;</code>
     * @param \Msggamedata\MsgUserProfileData $var
     * @return $this
     */
    public function setUserData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserProfileData::class);
        $this->user_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 clan_id = 2;</code>
     * @return int|string
     */
    public function getClanId()
    {
        return $this->clan_id;
    }

    /**
     * Generated from protobuf field <code>uint64 clan_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->clan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade member_grade = 3;</code>
     * @return int
     */
    public function getMemberGrade()
    {
        return $this->member_grade;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade member_grade = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMemberGrade($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\ClanMemberGrade::class);
        $this->member_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_battle_season_idx = 4;</code>
     * @return int
     */
    public function getClanBattleSeasonIdx()
    {
        return $this->clan_battle_season_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_battle_season_idx = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setClanBattleSeasonIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->clan_battle_season_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 phase = 5;</code>
     * @return int
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Generated from protobuf field <code>uint32 phase = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPhase($var)
    {
        GPBUtil::checkUint32($var);
        $this->phase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 phase_battle_count = 6;</code>
     * @return int
     */
    public function getPhaseBattleCount()
    {
        return $this->phase_battle_count;
    }

    /**
     * Generated from protobuf field <code>uint32 phase_battle_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPhaseBattleCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->phase_battle_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 season_battle_count = 7;</code>
     * @return int
     */
    public function getSeasonBattleCount()
    {
        return $this->season_battle_count;
    }

    /**
     * Generated from protobuf field <code>uint32 season_battle_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSeasonBattleCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->season_battle_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_season_battle_count = 8;</code>
     * @return int
     */
    public function getMaxSeasonBattleCount()
    {
        return $this->max_season_battle_count;
    }

    /**
     * Generated from protobuf field <code>uint32 max_season_battle_count = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSeasonBattleCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_season_battle_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 season_best_score = 9;</code>
     * @return int|string
     */
    public function getSeasonBestScore()
    {
        return $this->season_best_score;
    }

    /**
     * Generated from protobuf field <code>uint64 season_best_score = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeasonBestScore($var)
    {
        GPBUtil::checkUint64($var);
        $this->season_best_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 contribution = 10;</code>
     * @return int|string
     */
    public function getContribution()
    {
        return $this->contribution;
    }

    /**
     * Generated from protobuf field <code>uint64 contribution = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setContribution($var)
    {
        GPBUtil::checkUint64($var);
        $this->contribution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_boss_level = 11;</code>
     * @return int
     */
    public function getCurBossLevel()
    {
        return $this->cur_boss_level;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_boss_level = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCurBossLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->cur_boss_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 cur_boss_remain_hp = 12;</code>
     * @return int|string
     */
    public function getCurBossRemainHp()
    {
        return $this->cur_boss_remain_hp;
    }

    /**
     * Generated from protobuf field <code>uint64 cur_boss_remain_hp = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurBossRemainHp($var)
    {
        GPBUtil::checkUint64($var);
        $this->cur_boss_remain_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_reward_date = 13;</code>
     * @return int
     */
    public function getClanRewardDate()
    {
        return $this->clan_reward_date;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_reward_date = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setClanRewardDate($var)
    {
        GPBUtil::checkUint32($var);
        $this->clan_reward_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_login = 14;</code>
     * @return int
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Generated from protobuf field <code>uint32 last_login = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setLastLogin($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_login = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_attendance = 15;</code>
     * @return bool
     */
    public function getIsAttendance()
    {
        return $this->is_attendance;
    }

    /**
     * Generated from protobuf field <code>bool is_attendance = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAttendance($var)
    {
        GPBUtil::checkBool($var);
        $this->is_attendance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 reg_date = 16;</code>
     * @return int|string
     */
    public function getRegDate()
    {
        return $this->reg_date;
    }

    /**
     * Generated from protobuf field <code>uint64 reg_date = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRegDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->reg_date = $var;

        return $this;
    }

}

