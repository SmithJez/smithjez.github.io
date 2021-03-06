<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRune.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgRune</code>
 */
class MsgRune extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint32 shape = 3;</code>
     */
    private $shape = 0;
    /**
     * Generated from protobuf field <code>uint32 color = 4;</code>
     */
    private $color = 0;
    /**
     * Generated from protobuf field <code>string icon = 5;</code>
     */
    private $icon = '';
    /**
     * Generated from protobuf field <code>uint32 add_optional_effect_per_tier = 6;</code>
     */
    private $add_optional_effect_per_tier = 0;
    /**
     * Generated from protobuf field <code>uint32 max_tier = 7;</code>
     */
    private $max_tier = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgRuneEffect rune_effects = 8;</code>
     */
    private $rune_effects;

    public function __construct() {
        \GPBMetadata\MsgRune::initOnce();
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
     * Generated from protobuf field <code>uint32 shape = 3;</code>
     * @return int
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Generated from protobuf field <code>uint32 shape = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setShape($var)
    {
        GPBUtil::checkUint32($var);
        $this->shape = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 color = 4;</code>
     * @return int
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Generated from protobuf field <code>uint32 color = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkUint32($var);
        $this->color = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string icon = 5;</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Generated from protobuf field <code>string icon = 5;</code>
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
     * Generated from protobuf field <code>uint32 add_optional_effect_per_tier = 6;</code>
     * @return int
     */
    public function getAddOptionalEffectPerTier()
    {
        return $this->add_optional_effect_per_tier;
    }

    /**
     * Generated from protobuf field <code>uint32 add_optional_effect_per_tier = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAddOptionalEffectPerTier($var)
    {
        GPBUtil::checkUint32($var);
        $this->add_optional_effect_per_tier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_tier = 7;</code>
     * @return int
     */
    public function getMaxTier()
    {
        return $this->max_tier;
    }

    /**
     * Generated from protobuf field <code>uint32 max_tier = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxTier($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_tier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgRuneEffect rune_effects = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuneEffects()
    {
        return $this->rune_effects;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgRuneEffect rune_effects = 8;</code>
     * @param \Msggamedata\MsgRuneEffect[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuneEffects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgRuneEffect::class);
        $this->rune_effects = $arr;

        return $this;
    }

}

