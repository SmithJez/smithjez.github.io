<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleMonsterStat.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleMonsterStat</code>
 */
class MsgBattleMonsterStat extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 slot_index = 1;</code>
     */
    private $slot_index = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_uid = 2;</code>
     */
    private $monster_uid = 0;
    /**
     * Generated from protobuf field <code>float attack = 3;</code>
     */
    private $attack = 0.0;
    /**
     * Generated from protobuf field <code>float defence = 4;</code>
     */
    private $defence = 0.0;
    /**
     * Generated from protobuf field <code>float heal = 5;</code>
     */
    private $heal = 0.0;
    /**
     * Generated from protobuf field <code>double hp = 6;</code>
     */
    private $hp = 0.0;

    public function __construct() {
        \GPBMetadata\MsgBattleMonsterStat::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 slot_index = 1;</code>
     * @return int
     */
    public function getSlotIndex()
    {
        return $this->slot_index;
    }

    /**
     * Generated from protobuf field <code>uint32 slot_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSlotIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->slot_index = $var;

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
     * Generated from protobuf field <code>float attack = 3;</code>
     * @return float
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Generated from protobuf field <code>float attack = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAttack($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defence = 4;</code>
     * @return float
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Generated from protobuf field <code>float defence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDefence($var)
    {
        GPBUtil::checkFloat($var);
        $this->defence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float heal = 5;</code>
     * @return float
     */
    public function getHeal()
    {
        return $this->heal;
    }

    /**
     * Generated from protobuf field <code>float heal = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setHeal($var)
    {
        GPBUtil::checkFloat($var);
        $this->heal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double hp = 6;</code>
     * @return float
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Generated from protobuf field <code>double hp = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setHp($var)
    {
        GPBUtil::checkDouble($var);
        $this->hp = $var;

        return $this;
    }

}

