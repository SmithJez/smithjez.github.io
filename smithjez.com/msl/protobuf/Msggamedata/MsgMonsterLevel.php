<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonsterLevel.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgMonsterLevel</code>
 */
class MsgMonsterLevel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 grade = 1;</code>
     */
    private $grade = 0;
    /**
     * Generated from protobuf field <code>uint32 lev = 2;</code>
     */
    private $lev = 0;
    /**
     * Generated from protobuf field <code>uint32 food = 3;</code>
     */
    private $food = 0;

    public function __construct() {
        \GPBMetadata\MsgMonsterLevel::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 1;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 2;</code>
     * @return int
     */
    public function getLev()
    {
        return $this->lev;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 food = 3;</code>
     * @return int
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Generated from protobuf field <code>uint32 food = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFood($var)
    {
        GPBUtil::checkUint32($var);
        $this->food = $var;

        return $this;
    }

}

