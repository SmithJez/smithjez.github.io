<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserMonsterStore.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserMonsterStore</code>
 */
class RspUserMonsterStore extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 1;</code>
     */
    private $storage_type = 0;
    /**
     * Generated from protobuf field <code>bool is_store = 2;</code>
     */
    private $is_store = false;
    /**
     * Generated from protobuf field <code>repeated uint64 user_monster_ids = 3;</code>
     */
    private $user_monster_ids;

    public function __construct() {
        \GPBMetadata\RspUserMonsterStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 1;</code>
     * @return int
     */
    public function getStorageType()
    {
        return $this->storage_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStorageType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStorageType::class);
        $this->storage_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_store = 2;</code>
     * @return bool
     */
    public function getIsStore()
    {
        return $this->is_store;
    }

    /**
     * Generated from protobuf field <code>bool is_store = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsStore($var)
    {
        GPBUtil::checkBool($var);
        $this->is_store = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 user_monster_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserMonsterIds()
    {
        return $this->user_monster_ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 user_monster_ids = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserMonsterIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->user_monster_ids = $arr;

        return $this;
    }

}

