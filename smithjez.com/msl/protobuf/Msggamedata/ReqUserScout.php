<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqUserScout.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqUserScout</code>
 */
class ReqUserScout extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 2;</code>
     */
    private $join_member_grade = 0;

    public function __construct() {
        \GPBMetadata\ReqUserScout::initOnce();
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
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 2;</code>
     * @return int
     */
    public function getJoinMemberGrade()
    {
        return $this->join_member_grade;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setJoinMemberGrade($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\ClanMemberGrade::class);
        $this->join_member_grade = $var;

        return $this;
    }

}
