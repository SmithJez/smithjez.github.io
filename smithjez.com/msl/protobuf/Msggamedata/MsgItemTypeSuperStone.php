<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgItemTypeSuperStone.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgItemTypeSuperStone</code>
 */
class MsgItemTypeSuperStone extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 stage_uids = 1;</code>
     */
    private $stage_uids;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.StageDifficultyType stage_difficulty = 2;</code>
     */
    private $stage_difficulty;

    public function __construct() {
        \GPBMetadata\MsgItemTypeSuperStone::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated uint32 stage_uids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStageUids()
    {
        return $this->stage_uids;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 stage_uids = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStageUids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->stage_uids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.StageDifficultyType stage_difficulty = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStageDifficulty()
    {
        return $this->stage_difficulty;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.StageDifficultyType stage_difficulty = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStageDifficulty($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Msggamedata\StageDifficultyType::class);
        $this->stage_difficulty = $arr;

        return $this;
    }

}

