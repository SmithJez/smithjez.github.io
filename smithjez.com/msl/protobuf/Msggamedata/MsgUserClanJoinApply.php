<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserClanJoinApply.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserClanJoinApply</code>
 */
class MsgUserClanJoinApply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData user_data = 1;</code>
     */
    private $user_data = null;
    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 2;</code>
     */
    private $join_member_grade = 0;

    public function __construct() {
        \GPBMetadata\MsgUserClanJoinApply::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData user_data = 1;</code>
     * @return \Msggamedata\MsgUserProfileData
     */
    public function getUserData()
    {
        return $this->user_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData user_data = 1;</code>
     * @param \Msggamedata\MsgUserProfileData $var
     * @return $this
     */
    public function setUserData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserProfileData::class);
        $this->user_data = $var;

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

