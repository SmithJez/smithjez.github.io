<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgScenarioBattleClearHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgScenarioBattleClearHistory</code>
 */
class MsgScenarioBattleClearHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 1;</code>
     */
    private $stage_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 2;</code>
     */
    private $substage_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.StageDifficultyType difficulty = 3;</code>
     */
    private $difficulty = 0;
    /**
     * Generated from protobuf field <code>uint32 challenge_count = 4;</code>
     */
    private $challenge_count = 0;
    /**
     * Generated from protobuf field <code>uint32 clear_count = 5;</code>
     */
    private $clear_count = 0;

    public function __construct() {
        \GPBMetadata\MsgScenarioBattleClearHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 1;</code>
     * @return int
     */
    public function getStageUid()
    {
        return $this->stage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 1;</code>
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
     * Generated from protobuf field <code>fixed32 substage_uid = 2;</code>
     * @return int
     */
    public function getSubstageUid()
    {
        return $this->substage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 substage_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSubstageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->substage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.StageDifficultyType difficulty = 3;</code>
     * @return int
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.StageDifficultyType difficulty = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDifficulty($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\StageDifficultyType::class);
        $this->difficulty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_count = 4;</code>
     * @return int
     */
    public function getChallengeCount()
    {
        return $this->challenge_count;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 clear_count = 5;</code>
     * @return int
     */
    public function getClearCount()
    {
        return $this->clear_count;
    }

    /**
     * Generated from protobuf field <code>uint32 clear_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setClearCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->clear_count = $var;

        return $this;
    }

}

