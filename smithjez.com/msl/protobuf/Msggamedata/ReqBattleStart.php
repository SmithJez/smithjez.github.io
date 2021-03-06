<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqBattleStart.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqBattleStart</code>
 */
class ReqBattleStart extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.BattleType battle_type = 1;</code>
     */
    private $battle_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartScenario scenario = 2;</code>
     */
    private $scenario = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartDungeon dungeon = 3;</code>
     */
    private $dungeon = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartFriendDungeon friend_dungeon = 4;</code>
     */
    private $friend_dungeon = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartArena arena = 5;</code>
     */
    private $arena = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartInfinite infinite = 6;</code>
     */
    private $infinite = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartClan clan = 7;</code>
     */
    private $clan = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartColossus colossus = 8;</code>
     */
    private $colossus = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartCVC cvc = 9;</code>
     */
    private $cvc = null;

    public function __construct() {
        \GPBMetadata\ReqBattleStart::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleType battle_type = 1;</code>
     * @return int
     */
    public function getBattleType()
    {
        return $this->battle_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleType battle_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\BattleType::class);
        $this->battle_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartScenario scenario = 2;</code>
     * @return \Msggamedata\MsgBattleStartScenario
     */
    public function getScenario()
    {
        return $this->scenario;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartScenario scenario = 2;</code>
     * @param \Msggamedata\MsgBattleStartScenario $var
     * @return $this
     */
    public function setScenario($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartScenario::class);
        $this->scenario = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartDungeon dungeon = 3;</code>
     * @return \Msggamedata\MsgBattleStartDungeon
     */
    public function getDungeon()
    {
        return $this->dungeon;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartDungeon dungeon = 3;</code>
     * @param \Msggamedata\MsgBattleStartDungeon $var
     * @return $this
     */
    public function setDungeon($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartDungeon::class);
        $this->dungeon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartFriendDungeon friend_dungeon = 4;</code>
     * @return \Msggamedata\MsgBattleStartFriendDungeon
     */
    public function getFriendDungeon()
    {
        return $this->friend_dungeon;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartFriendDungeon friend_dungeon = 4;</code>
     * @param \Msggamedata\MsgBattleStartFriendDungeon $var
     * @return $this
     */
    public function setFriendDungeon($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartFriendDungeon::class);
        $this->friend_dungeon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartArena arena = 5;</code>
     * @return \Msggamedata\MsgBattleStartArena
     */
    public function getArena()
    {
        return $this->arena;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartArena arena = 5;</code>
     * @param \Msggamedata\MsgBattleStartArena $var
     * @return $this
     */
    public function setArena($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartArena::class);
        $this->arena = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartInfinite infinite = 6;</code>
     * @return \Msggamedata\MsgBattleStartInfinite
     */
    public function getInfinite()
    {
        return $this->infinite;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartInfinite infinite = 6;</code>
     * @param \Msggamedata\MsgBattleStartInfinite $var
     * @return $this
     */
    public function setInfinite($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartInfinite::class);
        $this->infinite = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartClan clan = 7;</code>
     * @return \Msggamedata\MsgBattleStartClan
     */
    public function getClan()
    {
        return $this->clan;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartClan clan = 7;</code>
     * @param \Msggamedata\MsgBattleStartClan $var
     * @return $this
     */
    public function setClan($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartClan::class);
        $this->clan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartColossus colossus = 8;</code>
     * @return \Msggamedata\MsgBattleStartColossus
     */
    public function getColossus()
    {
        return $this->colossus;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartColossus colossus = 8;</code>
     * @param \Msggamedata\MsgBattleStartColossus $var
     * @return $this
     */
    public function setColossus($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartColossus::class);
        $this->colossus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartCVC cvc = 9;</code>
     * @return \Msggamedata\MsgBattleStartCVC
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartCVC cvc = 9;</code>
     * @param \Msggamedata\MsgBattleStartCVC $var
     * @return $this
     */
    public function setCvc($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartCVC::class);
        $this->cvc = $var;

        return $this;
    }

}

