<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspRefreshClanMembers.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspRefreshClanMembers</code>
 */
class RspRefreshClanMembers extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserClanMember clan_members = 1;</code>
     */
    private $clan_members;

    public function __construct() {
        \GPBMetadata\RspRefreshClanMembers::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserClanMember clan_members = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClanMembers()
    {
        return $this->clan_members;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserClanMember clan_members = 1;</code>
     * @param \Msggamedata\MsgUserClanMember[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClanMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserClanMember::class);
        $this->clan_members = $arr;

        return $this;
    }

}

