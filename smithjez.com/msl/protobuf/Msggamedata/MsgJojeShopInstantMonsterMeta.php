<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgJojeShopInstantMonsterMeta.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgJojeShopInstantMonsterMeta</code>
 */
class MsgJojeShopInstantMonsterMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 1;</code>
     */
    private $monster_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 2;</code>
     */
    private $stat_weight_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType stat_type = 3;</code>
     */
    private $stat_type = 0;

    public function __construct() {
        \GPBMetadata\MsgJojeShopInstantMonsterMeta::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 1;</code>
     * @return int
     */
    public function getMonsterUid()
    {
        return $this->monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 1;</code>
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
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 2;</code>
     * @return int
     */
    public function getStatWeightType()
    {
        return $this->stat_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->stat_weight_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType stat_type = 3;</code>
     * @return int
     */
    public function getStatType()
    {
        return $this->stat_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType stat_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatType::class);
        $this->stat_type = $var;

        return $this;
    }

}

