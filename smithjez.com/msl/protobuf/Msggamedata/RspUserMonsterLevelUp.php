<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserMonsterLevelUp.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserMonsterLevelUp</code>
 */
class RspUserMonsterLevelUp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 monster_id = 1;</code>
     */
    private $monster_id = 0;
    /**
     * Generated from protobuf field <code>uint32 lev = 2;</code>
     */
    private $lev = 0;

    public function __construct() {
        \GPBMetadata\RspUserMonsterLevelUp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 monster_id = 1;</code>
     * @return int|string
     */
    public function getMonsterId()
    {
        return $this->monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 monster_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 2;</code>
     * @return int
     */
    public function getLev()
    {
        return $this->lev;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->lev = $var;

        return $this;
    }

}

