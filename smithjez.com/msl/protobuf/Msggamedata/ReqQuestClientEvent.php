<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqQuestClientEvent.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqQuestClientEvent</code>
 */
class ReqQuestClientEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.MainCondi main_condi = 1;</code>
     */
    private $main_condi = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPCTalkTopic.Scene v_npc_scene = 2;</code>
     */
    private $v_npc_scene = 0;

    public function __construct() {
        \GPBMetadata\ReqQuestClientEvent::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.MainCondi main_condi = 1;</code>
     * @return int
     */
    public function getMainCondi()
    {
        return $this->main_condi;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.MainCondi main_condi = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMainCondi($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgQuest_MainCondi::class);
        $this->main_condi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPCTalkTopic.Scene v_npc_scene = 2;</code>
     * @return int
     */
    public function getVNpcScene()
    {
        return $this->v_npc_scene;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgNPCTalkTopic.Scene v_npc_scene = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVNpcScene($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgNPCTalkTopic_Scene::class);
        $this->v_npc_scene = $var;

        return $this;
    }

}

