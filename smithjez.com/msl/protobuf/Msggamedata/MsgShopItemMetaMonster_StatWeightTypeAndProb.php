<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemMetaMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb</code>
 */
class MsgShopItemMetaMonster_StatWeightTypeAndProb extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 1;</code>
     */
    private $stat_weight_type = 0;
    /**
     * Generated from protobuf field <code>float prob = 2;</code>
     */
    private $prob = 0.0;

    public function __construct() {
        \GPBMetadata\MsgShopItemMetaMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 1;</code>
     * @return int
     */
    public function getStatWeightType()
    {
        return $this->stat_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 1;</code>
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
     * Generated from protobuf field <code>float prob = 2;</code>
     * @return float
     */
    public function getProb()
    {
        return $this->prob;
    }

    /**
     * Generated from protobuf field <code>float prob = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setProb($var)
    {
        GPBUtil::checkFloat($var);
        $this->prob = $var;

        return $this;
    }

}
