<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgDungeonStage.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgDungeonStage</code>
 */
class MsgDungeonStage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 stage_idx = 2;</code>
     */
    private $stage_idx = 0;
    /**
     * Generated from protobuf field <code>fixed32 name = 3;</code>
     */
    private $name = 0;
    /**
     * Generated from protobuf field <code>fixed32 desc = 4;</code>
     */
    private $desc = 0;
    /**
     * Generated from protobuf field <code>string stage_prefab = 5;</code>
     */
    private $stage_prefab = '';
    /**
     * Generated from protobuf field <code>.msggamedata.BattleType battle_type = 6;</code>
     */
    private $battle_type = 0;
    /**
     * Generated from protobuf field <code>string stage_title_image = 8;</code>
     */
    private $stage_title_image = '';
    /**
     * Generated from protobuf field <code>string stage_mark_image = 9;</code>
     */
    private $stage_mark_image = '';
    /**
     * Generated from protobuf field <code>repeated fixed32 substages = 12;</code>
     */
    private $substages;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgGeneralDungeonStageInfo generalDungeonStageInfo = 13;</code>
     */
    private $generalDungeonStageInfo = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriendDungeonStageInfo friendDungeonStageInfo = 14;</code>
     */
    private $friendDungeonStageInfo = null;

    public function __construct() {
        \GPBMetadata\MsgDungeonStage::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_idx = 2;</code>
     * @return int
     */
    public function getStageIdx()
    {
        return $this->stage_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_idx = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStageIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 name = 3;</code>
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>fixed32 name = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkUint32($var);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 4;</code>
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDesc($var)
    {
        GPBUtil::checkUint32($var);
        $this->desc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stage_prefab = 5;</code>
     * @return string
     */
    public function getStagePrefab()
    {
        return $this->stage_prefab;
    }

    /**
     * Generated from protobuf field <code>string stage_prefab = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStagePrefab($var)
    {
        GPBUtil::checkString($var, True);
        $this->stage_prefab = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleType battle_type = 6;</code>
     * @return int
     */
    public function getBattleType()
    {
        return $this->battle_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleType battle_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\BattleType::class);
        $this->battle_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stage_title_image = 8;</code>
     * @return string
     */
    public function getStageTitleImage()
    {
        return $this->stage_title_image;
    }

    /**
     * Generated from protobuf field <code>string stage_title_image = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setStageTitleImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->stage_title_image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stage_mark_image = 9;</code>
     * @return string
     */
    public function getStageMarkImage()
    {
        return $this->stage_mark_image;
    }

    /**
     * Generated from protobuf field <code>string stage_mark_image = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setStageMarkImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->stage_mark_image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 substages = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubstages()
    {
        return $this->substages;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 substages = 12;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubstages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->substages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgGeneralDungeonStageInfo generalDungeonStageInfo = 13;</code>
     * @return \Msggamedata\MsgGeneralDungeonStageInfo
     */
    public function getGeneralDungeonStageInfo()
    {
        return $this->generalDungeonStageInfo;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgGeneralDungeonStageInfo generalDungeonStageInfo = 13;</code>
     * @param \Msggamedata\MsgGeneralDungeonStageInfo $var
     * @return $this
     */
    public function setGeneralDungeonStageInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgGeneralDungeonStageInfo::class);
        $this->generalDungeonStageInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriendDungeonStageInfo friendDungeonStageInfo = 14;</code>
     * @return \Msggamedata\MsgFriendDungeonStageInfo
     */
    public function getFriendDungeonStageInfo()
    {
        return $this->friendDungeonStageInfo;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgFriendDungeonStageInfo friendDungeonStageInfo = 14;</code>
     * @param \Msggamedata\MsgFriendDungeonStageInfo $var
     * @return $this
     */
    public function setFriendDungeonStageInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgFriendDungeonStageInfo::class);
        $this->friendDungeonStageInfo = $var;

        return $this;
    }

}

