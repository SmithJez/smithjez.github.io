<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserClanMonsterSlot.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserClanMonsterSlot</code>
 */
class MsgUserClanMonsterSlot extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 monster_ids = 1;</code>
     */
    private $monster_ids;

    public function __construct() {
        \GPBMetadata\MsgUserClanMonsterSlot::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated uint64 monster_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsterIds()
    {
        return $this->monster_ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 monster_ids = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsterIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->monster_ids = $arr;

        return $this;
    }

}

