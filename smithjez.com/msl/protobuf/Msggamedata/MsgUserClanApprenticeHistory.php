<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserClanApprenticeHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserClanApprenticeHistory</code>
 */
class MsgUserClanApprenticeHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 clan_id = 2;</code>
     */
    private $clan_id = 0;
    /**
     * Generated from protobuf field <code>uint32 start_season_idx = 3;</code>
     */
    private $start_season_idx = 0;
    /**
     * Generated from protobuf field <code>uint32 last_season_idx = 4;</code>
     */
    private $last_season_idx = 0;
    /**
     * Generated from protobuf field <code>bool graduation_status = 5;</code>
     */
    private $graduation_status = false;
    /**
     * Generated from protobuf field <code>fixed32 last_season_stage_uid = 6;</code>
     */
    private $last_season_stage_uid = 0;
    /**
     * Generated from protobuf field <code>uint64 last_season_contribution = 7;</code>
     */
    private $last_season_contribution = 0;
    /**
     * Generated from protobuf field <code>uint32 last_season_boss_lev = 8;</code>
     */
    private $last_season_boss_lev = 0;
    /**
     * Generated from protobuf field <code>fixed32 last_season_grade = 9;</code>
     */
    private $last_season_grade = 0;
    /**
     * Generated from protobuf field <code>uint64 create_date = 10;</code>
     */
    private $create_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserClanApprenticeHistory::initOnce();
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
     * Generated from protobuf field <code>uint32 start_season_idx = 3;</code>
     * @return int
     */
    public function getStartSeasonIdx()
    {
        return $this->start_season_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 start_season_idx = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStartSeasonIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->start_season_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_season_idx = 4;</code>
     * @return int
     */
    public function getLastSeasonIdx()
    {
        return $this->last_season_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 last_season_idx = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLastSeasonIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_season_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool graduation_status = 5;</code>
     * @return bool
     */
    public function getGraduationStatus()
    {
        return $this->graduation_status;
    }

    /**
     * Generated from protobuf field <code>bool graduation_status = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setGraduationStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->graduation_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 last_season_stage_uid = 6;</code>
     * @return int
     */
    public function getLastSeasonStageUid()
    {
        return $this->last_season_stage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 last_season_stage_uid = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLastSeasonStageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_season_stage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_season_contribution = 7;</code>
     * @return int|string
     */
    public function getLastSeasonContribution()
    {
        return $this->last_season_contribution;
    }

    /**
     * Generated from protobuf field <code>uint64 last_season_contribution = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastSeasonContribution($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_season_contribution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_season_boss_lev = 8;</code>
     * @return int
     */
    public function getLastSeasonBossLev()
    {
        return $this->last_season_boss_lev;
    }

    /**
     * Generated from protobuf field <code>uint32 last_season_boss_lev = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setLastSeasonBossLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_season_boss_lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 last_season_grade = 9;</code>
     * @return int
     */
    public function getLastSeasonGrade()
    {
        return $this->last_season_grade;
    }

    /**
     * Generated from protobuf field <code>fixed32 last_season_grade = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLastSeasonGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_season_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 10;</code>
     * @return int|string
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_date = $var;

        return $this;
    }

}

