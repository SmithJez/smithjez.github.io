<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgJojeShopSuperStoneStuffMeta.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgJojeShopSuperStoneStuffMeta</code>
 */
class MsgJojeShopSuperStoneStuffMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount data = 1;</code>
     */
    private $data = null;

    public function __construct() {
        \GPBMetadata\MsgJojeShopSuperStoneStuffMeta::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount data = 1;</code>
     * @return \Msggamedata\MsgUidAndAmount
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount data = 1;</code>
     * @param \Msggamedata\MsgUidAndAmount $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUidAndAmount::class);
        $this->data = $var;

        return $this;
    }

}

