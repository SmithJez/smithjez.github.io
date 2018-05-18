<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgCaptureKingGrade.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgCaptureKingGrade</code>
 */
class MsgCaptureKingGrade extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 min = 2;</code>
     */
    private $min = 0;
    /**
     * Generated from protobuf field <code>uint32 max = 3;</code>
     */
    private $max = 0;
    /**
     * Generated from protobuf field <code>bool is_champion = 4;</code>
     */
    private $is_champion = false;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward = 5;</code>
     */
    private $reward = null;

    public function __construct() {
        \GPBMetadata\MsgCaptureKingGrade::initOnce();
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
     * Generated from protobuf field <code>uint32 min = 2;</code>
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Generated from protobuf field <code>uint32 min = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max = 3;</code>
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Generated from protobuf field <code>uint32 max = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_champion = 4;</code>
     * @return bool
     */
    public function getIsChampion()
    {
        return $this->is_champion;
    }

    /**
     * Generated from protobuf field <code>bool is_champion = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsChampion($var)
    {
        GPBUtil::checkBool($var);
        $this->is_champion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward = 5;</code>
     * @return \Msggamedata\MsgUidAndAmount
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward = 5;</code>
     * @param \Msggamedata\MsgUidAndAmount $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUidAndAmount::class);
        $this->reward = $var;

        return $this;
    }

}

