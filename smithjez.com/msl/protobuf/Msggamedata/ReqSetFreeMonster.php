<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqSetFreeMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqSetFreeMonster</code>
 */
class ReqSetFreeMonster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_monster_id = 1;</code>
     */
    private $user_monster_id = 0;

    public function __construct() {
        \GPBMetadata\ReqSetFreeMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 user_monster_id = 1;</code>
     * @return int|string
     */
    public function getUserMonsterId()
    {
        return $this->user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_monster_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_monster_id = $var;

        return $this;
    }

}

