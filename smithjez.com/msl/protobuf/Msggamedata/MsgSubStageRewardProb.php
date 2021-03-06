<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgSubStageRewardProb.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgSubStageRewardProb</code>
 */
class MsgSubStageRewardProb extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 reward_count = 1;</code>
     */
    private $reward_count = 0;
    /**
     * Generated from protobuf field <code>float reward_percent = 2;</code>
     */
    private $reward_percent = 0.0;

    public function __construct() {
        \GPBMetadata\MsgSubStageRewardProb::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 reward_count = 1;</code>
     * @return int
     */
    public function getRewardCount()
    {
        return $this->reward_count;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float reward_percent = 2;</code>
     * @return float
     */
    public function getRewardPercent()
    {
        return $this->reward_percent;
    }

    /**
     * Generated from protobuf field <code>float reward_percent = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setRewardPercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->reward_percent = $var;

        return $this;
    }

}

