<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserBooster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserBooster</code>
 */
class MsgUserBooster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.BoosterType booster_type = 2;</code>
     */
    private $booster_type = 0;
    /**
     * Generated from protobuf field <code>fixed32 booster_item_uid = 3;</code>
     */
    private $booster_item_uid = 0;
    /**
     * Generated from protobuf field <code>uint64 expire_date = 4;</code>
     */
    private $expire_date = 0;
    /**
     * Generated from protobuf field <code>uint64 apply_event_date = 5;</code>
     */
    private $apply_event_date = 0;
    /**
     * Generated from protobuf field <code>uint64 event_end_date = 6;</code>
     */
    private $event_end_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserBooster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BoosterType booster_type = 2;</code>
     * @return int
     */
    public function getBoosterType()
    {
        return $this->booster_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BoosterType booster_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBoosterType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\BoosterType::class);
        $this->booster_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 booster_item_uid = 3;</code>
     * @return int
     */
    public function getBoosterItemUid()
    {
        return $this->booster_item_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 booster_item_uid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBoosterItemUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->booster_item_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 expire_date = 4;</code>
     * @return int|string
     */
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * Generated from protobuf field <code>uint64 expire_date = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->expire_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 apply_event_date = 5;</code>
     * @return int|string
     */
    public function getApplyEventDate()
    {
        return $this->apply_event_date;
    }

    /**
     * Generated from protobuf field <code>uint64 apply_event_date = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplyEventDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->apply_event_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 event_end_date = 6;</code>
     * @return int|string
     */
    public function getEventEndDate()
    {
        return $this->event_end_date;
    }

    /**
     * Generated from protobuf field <code>uint64 event_end_date = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEventEndDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->event_end_date = $var;

        return $this;
    }

}

