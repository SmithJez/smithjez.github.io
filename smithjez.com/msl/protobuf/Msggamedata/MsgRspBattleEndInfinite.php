<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRspBattleEndInfinite.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgRspBattleEndInfinite</code>
 */
class MsgRspBattleEndInfinite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleEndBasicInfo info = 1;</code>
     */
    private $info = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgInfiniteDungeonHistory season_history = 2;</code>
     */
    private $season_history = null;

    public function __construct() {
        \GPBMetadata\MsgRspBattleEndInfinite::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleEndBasicInfo info = 1;</code>
     * @return \Msggamedata\MsgBattleEndBasicInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgBattleEndBasicInfo info = 1;</code>
     * @param \Msggamedata\MsgBattleEndBasicInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgBattleEndBasicInfo::class);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgInfiniteDungeonHistory season_history = 2;</code>
     * @return \Msggamedata\MsgInfiniteDungeonHistory
     */
    public function getSeasonHistory()
    {
        return $this->season_history;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgInfiniteDungeonHistory season_history = 2;</code>
     * @param \Msggamedata\MsgInfiniteDungeonHistory $var
     * @return $this
     */
    public function setSeasonHistory($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgInfiniteDungeonHistory::class);
        $this->season_history = $var;

        return $this;
    }

}

