<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgItemTypeFood.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgItemTypeFood</code>
 */
class MsgItemTypeFood extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element_type = 1;</code>
     */
    private $element_type = 0;
    /**
     * Generated from protobuf field <code>uint32 val = 2;</code>
     */
    private $val = 0;

    public function __construct() {
        \GPBMetadata\MsgItemTypeFood::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element_type = 1;</code>
     * @return int
     */
    public function getElementType()
    {
        return $this->element_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setElementType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterElementType::class);
        $this->element_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 val = 2;</code>
     * @return int
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Generated from protobuf field <code>uint32 val = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVal($var)
    {
        GPBUtil::checkUint32($var);
        $this->val = $var;

        return $this;
    }

}

