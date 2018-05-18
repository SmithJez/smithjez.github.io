<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgSummon.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgSummon</code>
 */
class MsgSummon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 left_monster = 2;</code>
     */
    private $left_monster = 0;
    /**
     * Generated from protobuf field <code>fixed32 right_monster = 3;</code>
     */
    private $right_monster = 0;
    /**
     * Generated from protobuf field <code>fixed32 result_monster = 4;</code>
     */
    private $result_monster = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice price = 5;</code>
     */
    private $price = null;
    /**
     * Generated from protobuf field <code>float special_prob = 6;</code>
     */
    private $special_prob = 0.0;
    /**
     * Generated from protobuf field <code>bool is_limited = 7;</code>
     */
    private $is_limited = false;
    /**
     * Generated from protobuf field <code>uint64 start_date = 8;</code>
     */
    private $start_date = 0;
    /**
     * Generated from protobuf field <code>uint64 end_date = 9;</code>
     */
    private $end_date = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSummonTreePosition tree_position = 10;</code>
     */
    private $tree_position;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgSummonMaxCountMeta summon_max_count_meta = 11;</code>
     */
    private $summon_max_count_meta = null;

    public function __construct() {
        \GPBMetadata\MsgSummon::initOnce();
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
     * Generated from protobuf field <code>fixed32 left_monster = 2;</code>
     * @return int
     */
    public function getLeftMonster()
    {
        return $this->left_monster;
    }

    /**
     * Generated from protobuf field <code>fixed32 left_monster = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLeftMonster($var)
    {
        GPBUtil::checkUint32($var);
        $this->left_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 right_monster = 3;</code>
     * @return int
     */
    public function getRightMonster()
    {
        return $this->right_monster;
    }

    /**
     * Generated from protobuf field <code>fixed32 right_monster = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRightMonster($var)
    {
        GPBUtil::checkUint32($var);
        $this->right_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 result_monster = 4;</code>
     * @return int
     */
    public function getResultMonster()
    {
        return $this->result_monster;
    }

    /**
     * Generated from protobuf field <code>fixed32 result_monster = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResultMonster($var)
    {
        GPBUtil::checkUint32($var);
        $this->result_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice price = 5;</code>
     * @return \Msggamedata\MsgPrice
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice price = 5;</code>
     * @param \Msggamedata\MsgPrice $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgPrice::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float special_prob = 6;</code>
     * @return float
     */
    public function getSpecialProb()
    {
        return $this->special_prob;
    }

    /**
     * Generated from protobuf field <code>float special_prob = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setSpecialProb($var)
    {
        GPBUtil::checkFloat($var);
        $this->special_prob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_limited = 7;</code>
     * @return bool
     */
    public function getIsLimited()
    {
        return $this->is_limited;
    }

    /**
     * Generated from protobuf field <code>bool is_limited = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLimited($var)
    {
        GPBUtil::checkBool($var);
        $this->is_limited = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 8;</code>
     * @return int|string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 9;</code>
     * @return int|string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSummonTreePosition tree_position = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTreePosition()
    {
        return $this->tree_position;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgSummonTreePosition tree_position = 10;</code>
     * @param \Msggamedata\MsgSummonTreePosition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTreePosition($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgSummonTreePosition::class);
        $this->tree_position = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgSummonMaxCountMeta summon_max_count_meta = 11;</code>
     * @return \Msggamedata\MsgSummonMaxCountMeta
     */
    public function getSummonMaxCountMeta()
    {
        return $this->summon_max_count_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgSummonMaxCountMeta summon_max_count_meta = 11;</code>
     * @param \Msggamedata\MsgSummonMaxCountMeta $var
     * @return $this
     */
    public function setSummonMaxCountMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgSummonMaxCountMeta::class);
        $this->summon_max_count_meta = $var;

        return $this;
    }

}

