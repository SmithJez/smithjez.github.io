<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetCVCHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspGetCVCHistory</code>
 */
class RspGetCVCHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.CVCHistoryType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCVCHistoryItem histories = 2;</code>
     */
    private $histories;

    public function __construct() {
        \GPBMetadata\RspGetCVCHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.CVCHistoryType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.CVCHistoryType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\CVCHistoryType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCVCHistoryItem histories = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgCVCHistoryItem histories = 2;</code>
     * @param \Msggamedata\MsgCVCHistoryItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHistories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgCVCHistoryItem::class);
        $this->histories = $arr;

        return $this;
    }

}

