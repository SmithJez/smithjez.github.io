<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleStartArena.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleStartArena</code>
 */
class MsgBattleStartArena extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 list_chunk_id = 1;</code>
     */
    private $list_chunk_id = 0;
    /**
     * Generated from protobuf field <code>uint64 candidate_user_id = 2;</code>
     */
    private $candidate_user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 3;</code>
     */
    private $monster_slot = null;

    public function __construct() {
        \GPBMetadata\MsgBattleStartArena::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 list_chunk_id = 1;</code>
     * @return int
     */
    public function getListChunkId()
    {
        return $this->list_chunk_id;
    }

    /**
     * Generated from protobuf field <code>uint32 list_chunk_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setListChunkId($var)
    {
        GPBUtil::checkUint32($var);
        $this->list_chunk_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 candidate_user_id = 2;</code>
     * @return int|string
     */
    public function getCandidateUserId()
    {
        return $this->candidate_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 candidate_user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCandidateUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->candidate_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 3;</code>
     * @return \Msggamedata\MsgMonsterSlotData
     */
    public function getMonsterSlot()
    {
        return $this->monster_slot;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 3;</code>
     * @param \Msggamedata\MsgMonsterSlotData $var
     * @return $this
     */
    public function setMonsterSlot($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterSlotData::class);
        $this->monster_slot = $var;

        return $this;
    }

}

