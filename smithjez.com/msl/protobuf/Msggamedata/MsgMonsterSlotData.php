<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonsterSlotData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgMonsterSlotData</code>
 */
class MsgMonsterSlotData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 index = 1;</code>
     */
    private $index = 0;
    /**
     * Generated from protobuf field <code>uint64 slot_1 = 2;</code>
     */
    private $slot_1 = 0;
    /**
     * Generated from protobuf field <code>uint64 slot_2 = 3;</code>
     */
    private $slot_2 = 0;
    /**
     * Generated from protobuf field <code>uint64 slot_3 = 4;</code>
     */
    private $slot_3 = 0;
    /**
     * Generated from protobuf field <code>uint64 slot_4 = 5;</code>
     */
    private $slot_4 = 0;
    /**
     * Generated from protobuf field <code>uint64 slot_5 = 6;</code>
     */
    private $slot_5 = 0;
    /**
     * Generated from protobuf field <code>uint32 friend_slot_idx = 7;</code>
     */
    private $friend_slot_idx = 0;
    /**
     * Generated from protobuf field <code>uint64 friend_user_id = 8;</code>
     */
    private $friend_user_id = 0;
    /**
     * Generated from protobuf field <code>uint32 support_monster_idx = 9;</code>
     */
    private $support_monster_idx = 0;
    /**
     * Generated from protobuf field <code>fixed32 support_monster_uid = 10;</code>
     */
    private $support_monster_uid = 0;

    public function __construct() {
        \GPBMetadata\MsgMonsterSlotData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 index = 1;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_1 = 2;</code>
     * @return int|string
     */
    public function getSlot1()
    {
        return $this->slot_1;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_1 = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlot1($var)
    {
        GPBUtil::checkUint64($var);
        $this->slot_1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_2 = 3;</code>
     * @return int|string
     */
    public function getSlot2()
    {
        return $this->slot_2;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_2 = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlot2($var)
    {
        GPBUtil::checkUint64($var);
        $this->slot_2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_3 = 4;</code>
     * @return int|string
     */
    public function getSlot3()
    {
        return $this->slot_3;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_3 = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlot3($var)
    {
        GPBUtil::checkUint64($var);
        $this->slot_3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_4 = 5;</code>
     * @return int|string
     */
    public function getSlot4()
    {
        return $this->slot_4;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_4 = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlot4($var)
    {
        GPBUtil::checkUint64($var);
        $this->slot_4 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_5 = 6;</code>
     * @return int|string
     */
    public function getSlot5()
    {
        return $this->slot_5;
    }

    /**
     * Generated from protobuf field <code>uint64 slot_5 = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlot5($var)
    {
        GPBUtil::checkUint64($var);
        $this->slot_5 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 friend_slot_idx = 7;</code>
     * @return int
     */
    public function getFriendSlotIdx()
    {
        return $this->friend_slot_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 friend_slot_idx = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFriendSlotIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->friend_slot_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 friend_user_id = 8;</code>
     * @return int|string
     */
    public function getFriendUserId()
    {
        return $this->friend_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 friend_user_id = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFriendUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->friend_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 support_monster_idx = 9;</code>
     * @return int
     */
    public function getSupportMonsterIdx()
    {
        return $this->support_monster_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 support_monster_idx = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSupportMonsterIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->support_monster_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 support_monster_uid = 10;</code>
     * @return int
     */
    public function getSupportMonsterUid()
    {
        return $this->support_monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 support_monster_uid = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSupportMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->support_monster_uid = $var;

        return $this;
    }

}

