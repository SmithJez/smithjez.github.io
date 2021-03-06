<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRspBattleStartFriendDungeon.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgRspBattleStartFriendDungeon</code>
 */
class MsgRspBattleStartFriendDungeon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartBasicInfo basic_info = 1;</code>
     */
    private $basic_info = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleFriend battle_friend = 2;</code>
     */
    private $battle_friend = null;
    /**
     * Generated from protobuf field <code>uint64 find_user_id = 3;</code>
     */
    private $find_user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.FriendDungeonType type = 4;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>uint64 dungeon_id = 5;</code>
     */
    private $dungeon_id = 0;

    public function __construct() {
        \GPBMetadata\MsgRspBattleStartFriendDungeon::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartBasicInfo basic_info = 1;</code>
     * @return \Msggamedata\MsgBattleStartBasicInfo
     */
    public function getBasicInfo()
    {
        return $this->basic_info;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleStartBasicInfo basic_info = 1;</code>
     * @param \Msggamedata\MsgBattleStartBasicInfo $var
     * @return $this
     */
    public function setBasicInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleStartBasicInfo::class);
        $this->basic_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleFriend battle_friend = 2;</code>
     * @return \Msggamedata\MsgBattleFriend
     */
    public function getBattleFriend()
    {
        return $this->battle_friend;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleFriend battle_friend = 2;</code>
     * @param \Msggamedata\MsgBattleFriend $var
     * @return $this
     */
    public function setBattleFriend($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleFriend::class);
        $this->battle_friend = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 find_user_id = 3;</code>
     * @return int|string
     */
    public function getFindUserId()
    {
        return $this->find_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 find_user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFindUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->find_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.FriendDungeonType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.FriendDungeonType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\FriendDungeonType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 dungeon_id = 5;</code>
     * @return int|string
     */
    public function getDungeonId()
    {
        return $this->dungeon_id;
    }

    /**
     * Generated from protobuf field <code>uint64 dungeon_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDungeonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->dungeon_id = $var;

        return $this;
    }

}

