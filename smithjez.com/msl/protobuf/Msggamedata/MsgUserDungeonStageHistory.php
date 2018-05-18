<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserDungeonStageHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserDungeonStageHistory</code>
 */
class MsgUserDungeonStageHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 1;</code>
     */
    private $stage_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 clear_substage_uid = 2;</code>
     */
    private $clear_substage_uid = 0;
    /**
     * Generated from protobuf field <code>uint64 clear_substage_date = 3;</code>
     */
    private $clear_substage_date = 0;
    /**
     * Generated from protobuf field <code>uint32 reset_count = 4;</code>
     */
    private $reset_count = 0;
    /**
     * Generated from protobuf field <code>uint64 reset_count_updated_date = 5;</code>
     */
    private $reset_count_updated_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserDungeonStageHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 1;</code>
     * @return int
     */
    public function getStageUid()
    {
        return $this->stage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 clear_substage_uid = 2;</code>
     * @return int
     */
    public function getClearSubstageUid()
    {
        return $this->clear_substage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 clear_substage_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setClearSubstageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->clear_substage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 clear_substage_date = 3;</code>
     * @return int|string
     */
    public function getClearSubstageDate()
    {
        return $this->clear_substage_date;
    }

    /**
     * Generated from protobuf field <code>uint64 clear_substage_date = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClearSubstageDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->clear_substage_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reset_count = 4;</code>
     * @return int
     */
    public function getResetCount()
    {
        return $this->reset_count;
    }

    /**
     * Generated from protobuf field <code>uint32 reset_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResetCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->reset_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 reset_count_updated_date = 5;</code>
     * @return int|string
     */
    public function getResetCountUpdatedDate()
    {
        return $this->reset_count_updated_date;
    }

    /**
     * Generated from protobuf field <code>uint64 reset_count_updated_date = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setResetCountUpdatedDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->reset_count_updated_date = $var;

        return $this;
    }

}

