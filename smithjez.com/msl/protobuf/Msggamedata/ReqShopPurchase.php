<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqShopPurchase.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqShopPurchase</code>
 */
class ReqShopPurchase extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 1;</code>
     */
    private $shop_item_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 purchase_item_cnt = 2;</code>
     */
    private $purchase_item_cnt = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.ReqShopPurchase.ReceiptInfo receipt_info = 3;</code>
     */
    private $receipt_info = null;
    /**
     * Generated from protobuf field <code>uint64 purchase_id = 4;</code>
     */
    private $purchase_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.IngameShopType shop_type = 5;</code>
     */
    private $shop_type = 0;

    public function __construct() {
        \GPBMetadata\ReqShopPurchase::initOnce();
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
     * Generated from protobuf field <code>uint32 purchase_item_cnt = 2;</code>
     * @return int
     */
    public function getPurchaseItemCnt()
    {
        return $this->purchase_item_cnt;
    }

    /**
     * Generated from protobuf field <code>uint32 purchase_item_cnt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPurchaseItemCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->purchase_item_cnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ReqShopPurchase.ReceiptInfo receipt_info = 3;</code>
     * @return \Msggamedata\ReqShopPurchase_ReceiptInfo
     */
    public function getReceiptInfo()
    {
        return $this->receipt_info;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ReqShopPurchase.ReceiptInfo receipt_info = 3;</code>
     * @param \Msggamedata\ReqShopPurchase_ReceiptInfo $var
     * @return $this
     */
    public function setReceiptInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\ReqShopPurchase_ReceiptInfo::class);
        $this->receipt_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 purchase_id = 4;</code>
     * @return int|string
     */
    public function getPurchaseId()
    {
        return $this->purchase_id;
    }

    /**
     * Generated from protobuf field <code>uint64 purchase_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPurchaseId($var)
    {
        GPBUtil::checkUint64($var);
        $this->purchase_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.IngameShopType shop_type = 5;</code>
     * @return int
     */
    public function getShopType()
    {
        return $this->shop_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.IngameShopType shop_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setShopType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\IngameShopType::class);
        $this->shop_type = $var;

        return $this;
    }

}

