<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgSpecialGuardianDungeonDate.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgSpecialGuardianDungeonDate</code>
 */
class MsgSpecialGuardianDungeonDate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>uint64 start_date = 2;</code>
     */
    private $start_date = 0;
    /**
     * Generated from protobuf field <code>uint64 end_date = 3;</code>
     */
    private $end_date = 0;

    public function __construct() {
        \GPBMetadata\MsgSpecialGuardianDungeonDate::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 2;</code>
     * @return int|string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 3;</code>
     * @return int|string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_date = $var;

        return $this;
    }

}

