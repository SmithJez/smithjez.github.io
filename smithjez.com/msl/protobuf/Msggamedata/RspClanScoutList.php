<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspClanScoutList.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspClanScoutList</code>
 */
class RspClanScoutList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserClanJoinApply scout_data = 1;</code>
     */
    private $scout_data;

    public function __construct() {
        \GPBMetadata\RspClanScoutList::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserClanJoinApply scout_data = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScoutData()
    {
        return $this->scout_data;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserClanJoinApply scout_data = 1;</code>
     * @param \Msggamedata\MsgUserClanJoinApply[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScoutData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserClanJoinApply::class);
        $this->scout_data = $arr;

        return $this;
    }

}

