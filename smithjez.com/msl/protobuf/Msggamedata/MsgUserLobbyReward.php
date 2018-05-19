<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserLobbyReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserLobbyReward</code>
 */
class MsgUserLobbyReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>uint32 lobby_reward_uid = 2;</code>
     */
    private $lobby_reward_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 touch_cnt = 3;</code>
     */
    private $touch_cnt = 0;
    /**
     * Generated from protobuf field <code>uint64 update_date = 4;</code>
     */
    private $update_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserLobbyReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lobby_reward_uid = 2;</code>
     * @return int
     */
    public function getLobbyRewardUid()
    {
        return $this->lobby_reward_uid;
    }

    /**
     * Generated from protobuf field <code>uint32 lobby_reward_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLobbyRewardUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->lobby_reward_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 touch_cnt = 3;</code>
     * @return int
     */
    public function getTouchCnt()
    {
        return $this->touch_cnt;
    }

    /**
     * Generated from protobuf field <code>uint32 touch_cnt = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTouchCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->touch_cnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 update_date = 4;</code>
     * @return int|string
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Generated from protobuf field <code>uint64 update_date = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->update_date = $var;

        return $this;
    }

}
