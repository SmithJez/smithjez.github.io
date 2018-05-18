<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleEndScenario.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleEndScenario</code>
 */
class MsgBattleEndScenario extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     */
    private $battle_id = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgDataTypeUidAndAmount items = 2;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>.msggamedata.BattleEndResultType result = 3;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>uint32 curr_round = 4;</code>
     */
    private $curr_round = 0;
    /**
     * Generated from protobuf field <code>uint32 revival = 5;</code>
     */
    private $revival = 0;
    /**
     * Generated from protobuf field <code>uint32 mon_death = 6;</code>
     */
    private $mon_death = 0;
    /**
     * Generated from protobuf field <code>uint32 mon_count = 7;</code>
     */
    private $mon_count = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleMonsterStat mon_result_data = 8;</code>
     */
    private $mon_result_data;

    public function __construct() {
        \GPBMetadata\MsgBattleEndScenario::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     * @return int|string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>uint64 battle_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkUint64($var);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgDataTypeUidAndAmount items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgDataTypeUidAndAmount items = 2;</code>
     * @param \Msggamedata\MsgDataTypeUidAndAmount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgDataTypeUidAndAmount::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleEndResultType result = 3;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleEndResultType result = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\BattleEndResultType::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 curr_round = 4;</code>
     * @return int
     */
    public function getCurrRound()
    {
        return $this->curr_round;
    }

    /**
     * Generated from protobuf field <code>uint32 curr_round = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrRound($var)
    {
        GPBUtil::checkUint32($var);
        $this->curr_round = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 revival = 5;</code>
     * @return int
     */
    public function getRevival()
    {
        return $this->revival;
    }

    /**
     * Generated from protobuf field <code>uint32 revival = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRevival($var)
    {
        GPBUtil::checkUint32($var);
        $this->revival = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mon_death = 6;</code>
     * @return int
     */
    public function getMonDeath()
    {
        return $this->mon_death;
    }

    /**
     * Generated from protobuf field <code>uint32 mon_death = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMonDeath($var)
    {
        GPBUtil::checkUint32($var);
        $this->mon_death = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mon_count = 7;</code>
     * @return int
     */
    public function getMonCount()
    {
        return $this->mon_count;
    }

    /**
     * Generated from protobuf field <code>uint32 mon_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMonCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->mon_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleMonsterStat mon_result_data = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonResultData()
    {
        return $this->mon_result_data;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleMonsterStat mon_result_data = 8;</code>
     * @param \Msggamedata\MsgBattleMonsterStat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonResultData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgBattleMonsterStat::class);
        $this->mon_result_data = $arr;

        return $this;
    }

}

