<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserMonsterInfoDownload.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserMonsterInfoDownload</code>
 */
class MsgUserMonsterInfoDownload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgMonsterSlotData slots = 1;</code>
     */
    private $slots;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster monsters = 2;</code>
     */
    private $monsters;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune runes = 3;</code>
     */
    private $runes;

    public function __construct() {
        \GPBMetadata\MsgUserMonsterInfoDownload::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgMonsterSlotData slots = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgMonsterSlotData slots = 1;</code>
     * @param \Msggamedata\MsgMonsterSlotData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSlots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgMonsterSlotData::class);
        $this->slots = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster monsters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsters()
    {
        return $this->monsters;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster monsters = 2;</code>
     * @param \Msggamedata\MsgUserMonster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserMonster::class);
        $this->monsters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune runes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRunes()
    {
        return $this->runes;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserRune runes = 3;</code>
     * @param \Msggamedata\MsgUserRune[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRunes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserRune::class);
        $this->runes = $arr;

        return $this;
    }

}

