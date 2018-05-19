<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonsterSkill.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgMonsterSkill</code>
 */
class MsgMonsterSkill extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 name = 2;</code>
     */
    private $name = 0;
    /**
     * Generated from protobuf field <code>fixed32 desc = 3;</code>
     */
    private $desc = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterSkillType type = 4;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterSkillTargetType target = 5;</code>
     */
    private $target = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSkillAction action = 6;</code>
     */
    private $action = null;
    /**
     * Generated from protobuf field <code>fixed32 status_effect = 7;</code>
     */
    private $status_effect = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSkillTrigger trigger = 8;</code>
     */
    private $trigger = null;
    /**
     * Generated from protobuf field <code>string icon = 9;</code>
     */
    private $icon = '';
    /**
     * Generated from protobuf field <code>uint32 soul_size = 10;</code>
     */
    private $soul_size = 0;

    public function __construct() {
        \GPBMetadata\MsgMonsterSkill::initOnce();
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
     * Generated from protobuf field <code>fixed32 name = 2;</code>
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>fixed32 name = 2;</code>
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
     * Generated from protobuf field <code>fixed32 desc = 3;</code>
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 3;</code>
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
     * Generated from protobuf field <code>.msggamedata.MonsterSkillType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterSkillType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterSkillType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterSkillTargetType target = 5;</code>
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterSkillTargetType target = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterSkillTargetType::class);
        $this->target = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSkillAction action = 6;</code>
     * @return \Msggamedata\MsgMonsterSkillAction
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSkillAction action = 6;</code>
     * @param \Msggamedata\MsgMonsterSkillAction $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterSkillAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 status_effect = 7;</code>
     * @return int
     */
    public function getStatusEffect()
    {
        return $this->status_effect;
    }

    /**
     * Generated from protobuf field <code>fixed32 status_effect = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusEffect($var)
    {
        GPBUtil::checkUint32($var);
        $this->status_effect = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSkillTrigger trigger = 8;</code>
     * @return \Msggamedata\MsgMonsterSkillTrigger
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSkillTrigger trigger = 8;</code>
     * @param \Msggamedata\MsgMonsterSkillTrigger $var
     * @return $this
     */
    public function setTrigger($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterSkillTrigger::class);
        $this->trigger = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string icon = 9;</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Generated from protobuf field <code>string icon = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 soul_size = 10;</code>
     * @return int
     */
    public function getSoulSize()
    {
        return $this->soul_size;
    }

    /**
     * Generated from protobuf field <code>uint32 soul_size = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSoulSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->soul_size = $var;

        return $this;
    }

}
