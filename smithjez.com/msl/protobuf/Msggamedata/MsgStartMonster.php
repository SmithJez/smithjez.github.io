<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgStartMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgStartMonster</code>
 */
class MsgStartMonster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 2;</code>
     */
    private $monster_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 start_level = 3;</code>
     */
    private $start_level = 0;

    public function __construct() {
        \GPBMetadata\MsgStartMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 2;</code>
     * @return int
     */
    public function getMonsterUid()
    {
        return $this->monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 start_level = 3;</code>
     * @return int
     */
    public function getStartLevel()
    {
        return $this->start_level;
    }

    /**
     * Generated from protobuf field <code>fixed32 start_level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStartLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->start_level = $var;

        return $this;
    }

}

