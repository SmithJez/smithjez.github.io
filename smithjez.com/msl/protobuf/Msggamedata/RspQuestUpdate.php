<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspQuestUpdate.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspQuestUpdate</code>
 */
class RspQuestUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserQuest quests = 1;</code>
     */
    private $quests;

    public function __construct() {
        \GPBMetadata\RspQuestUpdate::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserQuest quests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuests()
    {
        return $this->quests;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserQuest quests = 1;</code>
     * @param \Msggamedata\MsgUserQuest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserQuest::class);
        $this->quests = $arr;

        return $this;
    }

}

