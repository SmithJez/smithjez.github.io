<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgItemTypeStarEssence.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgItemTypeStarEssence</code>
 */
class MsgItemTypeStarEssence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 val_per_summon = 1;</code>
     */
    private $val_per_summon = 0;
    /**
     * Generated from protobuf field <code>fixed32 cutscene_uid = 2;</code>
     */
    private $cutscene_uid = 0;
    /**
     * Generated from protobuf field <code>string egg = 3;</code>
     */
    private $egg = '';

    public function __construct() {
        \GPBMetadata\MsgItemTypeStarEssence::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 val_per_summon = 1;</code>
     * @return int
     */
    public function getValPerSummon()
    {
        return $this->val_per_summon;
    }

    /**
     * Generated from protobuf field <code>uint32 val_per_summon = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setValPerSummon($var)
    {
        GPBUtil::checkUint32($var);
        $this->val_per_summon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 cutscene_uid = 2;</code>
     * @return int
     */
    public function getCutsceneUid()
    {
        return $this->cutscene_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 cutscene_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCutsceneUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->cutscene_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string egg = 3;</code>
     * @return string
     */
    public function getEgg()
    {
        return $this->egg;
    }

    /**
     * Generated from protobuf field <code>string egg = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEgg($var)
    {
        GPBUtil::checkString($var, True);
        $this->egg = $var;

        return $this;
    }

}

