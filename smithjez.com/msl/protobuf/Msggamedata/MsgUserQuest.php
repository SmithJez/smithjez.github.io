<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserQuest.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserQuest</code>
 */
class MsgUserQuest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 quest_uid = 1;</code>
     */
    private $quest_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     */
    private $count = 0;
    /**
     * Generated from protobuf field <code>uint32 reward_count = 3;</code>
     */
    private $reward_count = 0;
    /**
     * Generated from protobuf field <code>bool rewarded = 4;</code>
     */
    private $rewarded = false;
    /**
     * Generated from protobuf field <code>uint32 create_date = 5;</code>
     */
    private $create_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserQuest::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 quest_uid = 1;</code>
     * @return int
     */
    public function getQuestUid()
    {
        return $this->quest_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 quest_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setQuestUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->quest_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_count = 3;</code>
     * @return int
     */
    public function getRewardCount()
    {
        return $this->reward_count;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool rewarded = 4;</code>
     * @return bool
     */
    public function getRewarded()
    {
        return $this->rewarded;
    }

    /**
     * Generated from protobuf field <code>bool rewarded = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRewarded($var)
    {
        GPBUtil::checkBool($var);
        $this->rewarded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 create_date = 5;</code>
     * @return int
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Generated from protobuf field <code>uint32 create_date = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkUint32($var);
        $this->create_date = $var;

        return $this;
    }

}

