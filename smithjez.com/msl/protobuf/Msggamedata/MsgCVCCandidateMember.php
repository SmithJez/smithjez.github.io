<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgCVCCandidateMember.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgCVCCandidateMember</code>
 */
class MsgCVCCandidateMember extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserClanMember clan_member_data = 1;</code>
     */
    private $clan_member_data = null;
    /**
     * Generated from protobuf field <code>uint64 last_season_score = 2;</code>
     */
    private $last_season_score = 0;
    /**
     * Generated from protobuf field <code>uint32 last_arena_winning_point = 3;</code>
     */
    private $last_arena_winning_point = 0;
    /**
     * Generated from protobuf field <code>bool pickable = 4;</code>
     */
    private $pickable = false;

    public function __construct() {
        \GPBMetadata\MsgCVCCandidateMember::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserClanMember clan_member_data = 1;</code>
     * @return \Msggamedata\MsgUserClanMember
     */
    public function getClanMemberData()
    {
        return $this->clan_member_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserClanMember clan_member_data = 1;</code>
     * @param \Msggamedata\MsgUserClanMember $var
     * @return $this
     */
    public function setClanMemberData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserClanMember::class);
        $this->clan_member_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_season_score = 2;</code>
     * @return int|string
     */
    public function getLastSeasonScore()
    {
        return $this->last_season_score;
    }

    /**
     * Generated from protobuf field <code>uint64 last_season_score = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastSeasonScore($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_season_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_arena_winning_point = 3;</code>
     * @return int
     */
    public function getLastArenaWinningPoint()
    {
        return $this->last_arena_winning_point;
    }

    /**
     * Generated from protobuf field <code>uint32 last_arena_winning_point = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLastArenaWinningPoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_arena_winning_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool pickable = 4;</code>
     * @return bool
     */
    public function getPickable()
    {
        return $this->pickable;
    }

    /**
     * Generated from protobuf field <code>bool pickable = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setPickable($var)
    {
        GPBUtil::checkBool($var);
        $this->pickable = $var;

        return $this;
    }

}

