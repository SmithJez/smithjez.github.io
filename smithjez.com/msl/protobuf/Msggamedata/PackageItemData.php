<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PackageItemData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.PackageItemData</code>
 */
class PackageItemData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 1;</code>
     */
    private $shop_item_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.PackageItemState package_item_state = 2;</code>
     */
    private $package_item_state = 0;
    /**
     * Generated from protobuf field <code>fixed32 left_count = 3;</code>
     */
    private $left_count = 0;
    /**
     * Generated from protobuf field <code>uint64 repurchasable_time = 4;</code>
     */
    private $repurchasable_time = 0;
    /**
     * Generated from protobuf field <code>repeated fixed32 receive_reward = 5;</code>
     */
    private $receive_reward;
    /**
     * Generated from protobuf field <code>fixed32 purchase_count = 6;</code>
     */
    private $purchase_count = 0;

    public function __construct() {
        \GPBMetadata\PackageItemData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 1;</code>
     * @return int
     */
    public function getShopItemUid()
    {
        return $this->shop_item_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setShopItemUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->shop_item_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.PackageItemState package_item_state = 2;</code>
     * @return int
     */
    public function getPackageItemState()
    {
        return $this->package_item_state;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.PackageItemState package_item_state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPackageItemState($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\PackageItemState::class);
        $this->package_item_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 left_count = 3;</code>
     * @return int
     */
    public function getLeftCount()
    {
        return $this->left_count;
    }

    /**
     * Generated from protobuf field <code>fixed32 left_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLeftCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->left_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 repurchasable_time = 4;</code>
     * @return int|string
     */
    public function getRepurchasableTime()
    {
        return $this->repurchasable_time;
    }

    /**
     * Generated from protobuf field <code>uint64 repurchasable_time = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRepurchasableTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->repurchasable_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 receive_reward = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceiveReward()
    {
        return $this->receive_reward;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 receive_reward = 5;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceiveReward($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->receive_reward = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 purchase_count = 6;</code>
     * @return int
     */
    public function getPurchaseCount()
    {
        return $this->purchase_count;
    }

    /**
     * Generated from protobuf field <code>fixed32 purchase_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPurchaseCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->purchase_count = $var;

        return $this;
    }

}

