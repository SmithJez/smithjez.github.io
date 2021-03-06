<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspExpandUserMonsterStorage.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspExpandUserMonsterStorage</code>
 */
class RspExpandUserMonsterStorage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStorageType storage_type = 1;</code>
     */
    private $storage_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserStorage user_storage = 2;</code>
     */
    private $user_storage = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     */
    private $user = null;

    public function __construct() {
        \GPBMetadata\RspExpandUserMonsterStorage::initOnce();
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
     * Generated from protobuf field <code>.msggamedata.MsgUserStorage user_storage = 2;</code>
     * @return \Msggamedata\MsgUserStorage
     */
    public function getUserStorage()
    {
        return $this->user_storage;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserStorage user_storage = 2;</code>
     * @param \Msggamedata\MsgUserStorage $var
     * @return $this
     */
    public function setUserStorage($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserStorage::class);
        $this->user_storage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

}

