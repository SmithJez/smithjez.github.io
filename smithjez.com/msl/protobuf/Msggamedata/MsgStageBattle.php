<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgStageBattle.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgStageBattle</code>
 */
class MsgStageBattle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 monster_count_min = 1;</code>
     */
    private $monster_count_min = 0;
    /**
     * Generated from protobuf field <code>uint32 monster_count_max = 2;</code>
     */
    private $monster_count_max = 0;
    /**
     * Generated from protobuf field <code>fixed32 monster_group = 3;</code>
     */
    private $monster_group = 0;
    /**
     * Generated from protobuf field <code>fixed32 required_monster = 4;</code>
     */
    private $required_monster = 0;
    /**
     * Generated from protobuf field <code>repeated fixed32 fixed_monster = 5;</code>
     */
    private $fixed_monster;

    public function __construct() {
        \GPBMetadata\MsgStageBattle::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 monster_count_min = 1;</code>
     * @return int
     */
    public function getMonsterCountMin()
    {
        return $this->monster_count_min;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_count_min = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterCountMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_count_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_count_max = 2;</code>
     * @return int
     */
    public function getMonsterCountMax()
    {
        return $this->monster_count_max;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_count_max = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterCountMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_count_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_group = 3;</code>
     * @return int
     */
    public function getMonsterGroup()
    {
        return $this->monster_group;
    }

    /**
     * Generated from protobuf field <code>fixed32 monster_group = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterGroup($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 required_monster = 4;</code>
     * @return int
     */
    public function getRequiredMonster()
    {
        return $this->required_monster;
    }

    /**
     * Generated from protobuf field <code>fixed32 required_monster = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRequiredMonster($var)
    {
        GPBUtil::checkUint32($var);
        $this->required_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 fixed_monster = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFixedMonster()
    {
        return $this->fixed_monster;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 fixed_monster = 5;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFixedMonster($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->fixed_monster = $arr;

        return $this;
    }

}
