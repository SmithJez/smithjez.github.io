<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgClanBattleReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgClanBattleReward</code>
 */
class MsgClanBattleReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 deal_min = 2;</code>
     */
    private $deal_min = 0;
    /**
     * Generated from protobuf field <code>uint32 deal_max = 3;</code>
     */
    private $deal_max = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanRewardProb reward_probs = 4;</code>
     */
    private $reward_probs;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanRewardMust reward_musts = 5;</code>
     */
    private $reward_musts;
    /**
     * Generated from protobuf field <code>uint32 reward_general = 6;</code>
     */
    private $reward_general = 0;
    /**
     * Generated from protobuf field <code>uint32 grade = 7;</code>
     */
    private $grade = 0;

    public function __construct() {
        \GPBMetadata\MsgClanBattleReward::initOnce();
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
     * Generated from protobuf field <code>uint32 deal_min = 2;</code>
     * @return int
     */
    public function getDealMin()
    {
        return $this->deal_min;
    }

    /**
     * Generated from protobuf field <code>uint32 deal_min = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDealMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->deal_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 deal_max = 3;</code>
     * @return int
     */
    public function getDealMax()
    {
        return $this->deal_max;
    }

    /**
     * Generated from protobuf field <code>uint32 deal_max = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDealMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->deal_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanRewardProb reward_probs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewardProbs()
    {
        return $this->reward_probs;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanRewardProb reward_probs = 4;</code>
     * @param \Msggamedata\MsgClanRewardProb[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewardProbs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgClanRewardProb::class);
        $this->reward_probs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanRewardMust reward_musts = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewardMusts()
    {
        return $this->reward_musts;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanRewardMust reward_musts = 5;</code>
     * @param \Msggamedata\MsgClanRewardMust[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewardMusts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgClanRewardMust::class);
        $this->reward_musts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_general = 6;</code>
     * @return int
     */
    public function getRewardGeneral()
    {
        return $this->reward_general;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_general = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardGeneral($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_general = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 7;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade = $var;

        return $this;
    }

}

