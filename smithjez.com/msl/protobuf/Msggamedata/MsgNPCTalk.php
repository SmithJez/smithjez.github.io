<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgNPCTalk.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgNPCTalk</code>
 */
class MsgNPCTalk extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 npc_uid = 1;</code>
     */
    private $npc_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPCTalk.NPCPosition npc_position = 2;</code>
     */
    private $npc_position = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPC.NPCState npc_state = 3;</code>
     */
    private $npc_state = 0;
    /**
     * Generated from protobuf field <code>fixed32 text = 4;</code>
     */
    private $text = 0;

    public function __construct() {
        \GPBMetadata\MsgNPCTalk::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 npc_uid = 1;</code>
     * @return int
     */
    public function getNpcUid()
    {
        return $this->npc_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 npc_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNpcUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->npc_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPCTalk.NPCPosition npc_position = 2;</code>
     * @return int
     */
    public function getNpcPosition()
    {
        return $this->npc_position;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPCTalk.NPCPosition npc_position = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNpcPosition($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgNPCTalk_NPCPosition::class);
        $this->npc_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPC.NPCState npc_state = 3;</code>
     * @return int
     */
    public function getNpcState()
    {
        return $this->npc_state;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPC.NPCState npc_state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNpcState($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgNPC_NPCState::class);
        $this->npc_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 text = 4;</code>
     * @return int
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>fixed32 text = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkUint32($var);
        $this->text = $var;

        return $this;
    }

}

