<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserApplyList.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserApplyList</code>
 */
class RspUserApplyList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanListData clan_list_data = 1;</code>
     */
    private $clan_list_data;

    public function __construct() {
        \GPBMetadata\RspUserApplyList::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanListData clan_list_data = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClanListData()
    {
        return $this->clan_list_data;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanListData clan_list_data = 1;</code>
     * @param \Msggamedata\MsgClanListData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClanListData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgClanListData::class);
        $this->clan_list_data = $arr;

        return $this;
    }

}

