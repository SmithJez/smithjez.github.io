<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgEnforcementValue.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgEnforcementValue.TargetCountAndSeed</code>
 */
class MsgEnforcementValue_TargetCountAndSeed extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     */
    private $count = 0;
    /**
     * Generated from protobuf field <code>uint32 seed = 3;</code>
     */
    private $seed = 0;

    public function __construct() {
        \GPBMetadata\MsgEnforcementValue::initOnce();
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
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 seed = 3;</code>
     * @return int
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Generated from protobuf field <code>uint32 seed = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSeed($var)
    {
        GPBUtil::checkUint32($var);
        $this->seed = $var;

        return $this;
    }

}

