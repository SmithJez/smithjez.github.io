<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgGeneralDungeonStageInfo.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgGeneralDungeonStageInfo.MsgUnlockConditionUserLev</code>
 */
class MsgGeneralDungeonStageInfo_MsgUnlockConditionUserLev extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 user_lev = 1;</code>
     */
    private $user_lev = 0;

    public function __construct() {
        \GPBMetadata\MsgGeneralDungeonStageInfo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 user_lev = 1;</code>
     * @return int
     */
    public function getUserLev()
    {
        return $this->user_lev;
    }

    /**
     * Generated from protobuf field <code>uint32 user_lev = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_lev = $var;

        return $this;
    }

}
