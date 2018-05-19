<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgGachaShopEvent.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgGachaShopEvent</code>
 */
class MsgGachaShopEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>fixed32 banner_uid = 2;</code>
     */
    private $banner_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 banner_index = 3;</code>
     */
    private $banner_index = 0;
    /**
     * Generated from protobuf field <code>uint64 start_date = 4;</code>
     */
    private $start_date = 0;
    /**
     * Generated from protobuf field <code>uint64 end_date = 5;</code>
     */
    private $end_date = 0;
    /**
     * Generated from protobuf field <code>string message = 6;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>.msggamedata.MsgGachaShopEvent.GachaShopEventType festival_type = 7;</code>
     */
    private $festival_type = 0;
    /**
     * Generated from protobuf field <code>fixed32 random_uid = 8;</code>
     */
    private $random_uid = 0;
    /**
     * Generated from protobuf field <code>repeated fixed32 monster_uids = 9;</code>
     */
    private $monster_uids;
    /**
     * Generated from protobuf field <code>float rate_val = 10;</code>
     */
    private $rate_val = 0.0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward = 11;</code>
     */
    private $reward = null;
    /**
     * Generated from protobuf field <code>uint32 reward_count = 12;</code>
     */
    private $reward_count = 0;
    /**
     * Generated from protobuf field <code>uint64 ticket_sales_start_date = 13;</code>
     */
    private $ticket_sales_start_date = 0;

    public function __construct() {
        \GPBMetadata\MsgGachaShopEvent::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 banner_uid = 2;</code>
     * @return int
     */
    public function getBannerUid()
    {
        return $this->banner_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 banner_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBannerUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->banner_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 banner_index = 3;</code>
     * @return int
     */
    public function getBannerIndex()
    {
        return $this->banner_index;
    }

    /**
     * Generated from protobuf field <code>uint32 banner_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBannerIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->banner_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 4;</code>
     * @return int|string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Generated from protobuf field <code>uint64 start_date = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 5;</code>
     * @return int|string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Generated from protobuf field <code>uint64 end_date = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 6;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgGachaShopEvent.GachaShopEventType festival_type = 7;</code>
     * @return int
     */
    public function getFestivalType()
    {
        return $this->festival_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgGachaShopEvent.GachaShopEventType festival_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFestivalType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgGachaShopEvent_GachaShopEventType::class);
        $this->festival_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 random_uid = 8;</code>
     * @return int
     */
    public function getRandomUid()
    {
        return $this->random_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 random_uid = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRandomUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->random_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 monster_uids = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsterUids()
    {
        return $this->monster_uids;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 monster_uids = 9;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsterUids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->monster_uids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float rate_val = 10;</code>
     * @return float
     */
    public function getRateVal()
    {
        return $this->rate_val;
    }

    /**
     * Generated from protobuf field <code>float rate_val = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setRateVal($var)
    {
        GPBUtil::checkFloat($var);
        $this->rate_val = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward = 11;</code>
     * @return \Msggamedata\MsgUidAndAmount
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUidAndAmount reward = 11;</code>
     * @param \Msggamedata\MsgUidAndAmount $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUidAndAmount::class);
        $this->reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_count = 12;</code>
     * @return int
     */
    public function getRewardCount()
    {
        return $this->reward_count;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_count = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ticket_sales_start_date = 13;</code>
     * @return int|string
     */
    public function getTicketSalesStartDate()
    {
        return $this->ticket_sales_start_date;
    }

    /**
     * Generated from protobuf field <code>uint64 ticket_sales_start_date = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTicketSalesStartDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->ticket_sales_start_date = $var;

        return $this;
    }

}
