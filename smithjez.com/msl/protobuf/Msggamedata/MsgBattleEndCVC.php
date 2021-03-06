<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleEndCVC.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleEndCVC</code>
 */
class MsgBattleEndCVC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     */
    private $battle_id = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.BattleEndResultType round_results = 2;</code>
     */
    private $round_results;
    /**
     * Generated from protobuf field <code>repeated uint32 result_times = 3;</code>
     */
    private $result_times;

    public function __construct() {
        \GPBMetadata\MsgBattleEndCVC::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     * @return int|string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkUint64($var);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.BattleEndResultType round_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoundResults()
    {
        return $this->round_results;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.BattleEndResultType round_results = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoundResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Msggamedata\BattleEndResultType::class);
        $this->round_results = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 result_times = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResultTimes()
    {
        return $this->result_times;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 result_times = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResultTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->result_times = $arr;

        return $this;
    }

}

