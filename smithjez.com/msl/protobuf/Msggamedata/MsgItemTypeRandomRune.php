<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgItemTypeRandomRune.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgItemTypeRandomRune</code>
 */
class MsgItemTypeRandomRune extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 rare = 1;</code>
     */
    private $rare = 0;
    /**
     * Generated from protobuf field <code>repeated float rare_prob = 2;</code>
     */
    private $rare_prob;
    /**
     * Generated from protobuf field <code>repeated float born_optional_effect_prob = 3;</code>
     */
    private $born_optional_effect_prob;

    public function __construct() {
        \GPBMetadata\MsgItemTypeRandomRune::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 rare = 1;</code>
     * @return int
     */
    public function getRare()
    {
        return $this->rare;
    }

    /**
     * Generated from protobuf field <code>uint32 rare = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRare($var)
    {
        GPBUtil::checkUint32($var);
        $this->rare = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float rare_prob = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRareProb()
    {
        return $this->rare_prob;
    }

    /**
     * Generated from protobuf field <code>repeated float rare_prob = 2;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRareProb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->rare_prob = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float born_optional_effect_prob = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBornOptionalEffectProb()
    {
        return $this->born_optional_effect_prob;
    }

    /**
     * Generated from protobuf field <code>repeated float born_optional_effect_prob = 3;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBornOptionalEffectProb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->born_optional_effect_prob = $arr;

        return $this;
    }

}

