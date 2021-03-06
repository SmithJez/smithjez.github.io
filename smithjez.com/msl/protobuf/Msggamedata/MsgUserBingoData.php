<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserBingoData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserBingoData</code>
 */
class MsgUserBingoData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>fixed32 bingo_season_uid = 2;</code>
     */
    private $bingo_season_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 bingo_set = 3;</code>
     */
    private $bingo_set = 0;
    /**
     * Generated from protobuf field <code>uint32 bingo_phase = 4;</code>
     */
    private $bingo_phase = 0;
    /**
     * Generated from protobuf field <code>uint32 bingo_state = 5;</code>
     */
    private $bingo_state = 0;
    /**
     * Generated from protobuf field <code>uint64 last_login_time = 6;</code>
     */
    private $last_login_time = 0;
    /**
     * Generated from protobuf field <code>bool is_bingo_change = 7;</code>
     */
    private $is_bingo_change = false;

    public function __construct() {
        \GPBMetadata\MsgUserBingoData::initOnce();
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
     * Generated from protobuf field <code>fixed32 bingo_season_uid = 2;</code>
     * @return int
     */
    public function getBingoSeasonUid()
    {
        return $this->bingo_season_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 bingo_season_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBingoSeasonUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->bingo_season_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bingo_set = 3;</code>
     * @return int
     */
    public function getBingoSet()
    {
        return $this->bingo_set;
    }

    /**
     * Generated from protobuf field <code>uint32 bingo_set = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBingoSet($var)
    {
        GPBUtil::checkUint32($var);
        $this->bingo_set = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bingo_phase = 4;</code>
     * @return int
     */
    public function getBingoPhase()
    {
        return $this->bingo_phase;
    }

    /**
     * Generated from protobuf field <code>uint32 bingo_phase = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBingoPhase($var)
    {
        GPBUtil::checkUint32($var);
        $this->bingo_phase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bingo_state = 5;</code>
     * @return int
     */
    public function getBingoState()
    {
        return $this->bingo_state;
    }

    /**
     * Generated from protobuf field <code>uint32 bingo_state = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBingoState($var)
    {
        GPBUtil::checkUint32($var);
        $this->bingo_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_login_time = 6;</code>
     * @return int|string
     */
    public function getLastLoginTime()
    {
        return $this->last_login_time;
    }

    /**
     * Generated from protobuf field <code>uint64 last_login_time = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastLoginTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_login_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_bingo_change = 7;</code>
     * @return bool
     */
    public function getIsBingoChange()
    {
        return $this->is_bingo_change;
    }

    /**
     * Generated from protobuf field <code>bool is_bingo_change = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBingoChange($var)
    {
        GPBUtil::checkBool($var);
        $this->is_bingo_change = $var;

        return $this;
    }

}

