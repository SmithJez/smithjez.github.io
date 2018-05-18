<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqMonsterSummon.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqMonsterSummon</code>
 */
class ReqMonsterSummon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 left_user_monster_id = 1;</code>
     */
    private $left_user_monster_id = 0;
    /**
     * Generated from protobuf field <code>uint64 right_user_monster_id = 2;</code>
     */
    private $right_user_monster_id = 0;
    /**
     * Generated from protobuf field <code>fixed32 summon_uid = 3;</code>
     */
    private $summon_uid = 0;

    public function __construct() {
        \GPBMetadata\ReqMonsterSummon::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 left_user_monster_id = 1;</code>
     * @return int|string
     */
    public function getLeftUserMonsterId()
    {
        return $this->left_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 left_user_monster_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLeftUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->left_user_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 right_user_monster_id = 2;</code>
     * @return int|string
     */
    public function getRightUserMonsterId()
    {
        return $this->right_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 right_user_monster_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRightUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->right_user_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 summon_uid = 3;</code>
     * @return int
     */
    public function getSummonUid()
    {
        return $this->summon_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 summon_uid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSummonUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->summon_uid = $var;

        return $this;
    }

}

