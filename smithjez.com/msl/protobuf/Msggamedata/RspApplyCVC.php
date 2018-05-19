<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspApplyCVC.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspApplyCVC</code>
 */
class RspApplyCVC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.CVCSeasonState cvc_season_state = 1;</code>
     */
    private $cvc_season_state = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserCVCMember cvc_members = 2;</code>
     */
    private $cvc_members;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCVCCandidateMember candidate_member_list = 3;</code>
     */
    private $candidate_member_list;

    public function __construct() {
        \GPBMetadata\RspApplyCVC::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.CVCSeasonState cvc_season_state = 1;</code>
     * @return int
     */
    public function getCvcSeasonState()
    {
        return $this->cvc_season_state;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.CVCSeasonState cvc_season_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCvcSeasonState($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\CVCSeasonState::class);
        $this->cvc_season_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserCVCMember cvc_members = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCvcMembers()
    {
        return $this->cvc_members;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserCVCMember cvc_members = 2;</code>
     * @param \Msggamedata\MsgUserCVCMember[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCvcMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserCVCMember::class);
        $this->cvc_members = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCVCCandidateMember candidate_member_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCandidateMemberList()
    {
        return $this->candidate_member_list;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCVCCandidateMember candidate_member_list = 3;</code>
     * @param \Msggamedata\MsgCVCCandidateMember[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCandidateMemberList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgCVCCandidateMember::class);
        $this->candidate_member_list = $arr;

        return $this;
    }

}
