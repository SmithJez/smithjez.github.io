<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgEventDate.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgEventDate</code>
 */
class MsgEventDate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>uint64 start_date = 3;</code>
     */
    private $start_date = 0;
    /**
     * Generated from protobuf field <code>uint64 end_date = 4;</code>
     */
    private $end_date = 0;
    /**
     * Generated from protobuf field <code>string message = 5;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\MsgEventDate::initOnce();
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
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 3;</code>
     * @return int|string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 3;</code>
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
     * Generated from protobuf field <code>uint64 end_date = 4;</code>
     * @return int|string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 5;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

