<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqChangeClanMemberGrade.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqChangeClanMemberGrade</code>
 */
class ReqChangeClanMemberGrade extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.ChangeClanMemberGradeType change_type = 2;</code>
     */
    private $change_type = 0;

    public function __construct() {
        \GPBMetadata\ReqChangeClanMemberGrade::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ChangeClanMemberGradeType change_type = 2;</code>
     * @return int
     */
    public function getChangeType()
    {
        return $this->change_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ChangeClanMemberGradeType change_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setChangeType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\ChangeClanMemberGradeType::class);
        $this->change_type = $var;

        return $this;
    }

}

