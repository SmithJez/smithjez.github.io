<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqLobbyReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqLobbyReward</code>
 */
class ReqLobbyReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 lobby_reward_uid = 1;</code>
     */
    private $lobby_reward_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 delta_touch_cnt = 2;</code>
     */
    private $delta_touch_cnt = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgLobbyReward.LobbyRewardType reward_type = 3;</code>
     */
    private $reward_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.ShipLobbyType ship_type = 4;</code>
     */
    private $ship_type = 0;

    public function __construct() {
        \GPBMetadata\ReqLobbyReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 lobby_reward_uid = 1;</code>
     * @return int
     */
    public function getLobbyRewardUid()
    {
        return $this->lobby_reward_uid;
    }

    /**
     * Generated from protobuf field <code>uint32 lobby_reward_uid = 1;</code>
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
     * Generated from protobuf field <code>uint32 delta_touch_cnt = 2;</code>
     * @return int
     */
    public function getDeltaTouchCnt()
    {
        return $this->delta_touch_cnt;
    }

    /**
     * Generated from protobuf field <code>uint32 delta_touch_cnt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDeltaTouchCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->delta_touch_cnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgLobbyReward.LobbyRewardType reward_type = 3;</code>
     * @return int
     */
    public function getRewardType()
    {
        return $this->reward_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgLobbyReward.LobbyRewardType reward_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgLobbyReward_LobbyRewardType::class);
        $this->reward_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ShipLobbyType ship_type = 4;</code>
     * @return int
     */
    public function getShipType()
    {
        return $this->ship_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ShipLobbyType ship_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setShipType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\ShipLobbyType::class);
        $this->ship_type = $var;

        return $this;
    }

}

