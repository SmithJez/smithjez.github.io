<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgJojeShopList.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgJojeShopList</code>
 */
class MsgJojeShopList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>uint64 tid = 2;</code>
     */
    private $tid = 0;
    /**
     * Generated from protobuf field <code>uint64 owner_id = 3;</code>
     */
    private $owner_id = 0;
    /**
     * Generated from protobuf field <code>uint32 slot = 4;</code>
     */
    private $slot = 0;
    /**
     * Generated from protobuf field <code>uint64 create_date = 6;</code>
     */
    private $create_date = 0;
    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 7;</code>
     */
    private $shop_item_uid = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice price = 8;</code>
     */
    private $price = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItem.ItemType item_type = 9;</code>
     */
    private $item_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopInstantMonsterMeta instant_monster_meta = 10;</code>
     */
    private $instant_monster_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSoulStoneMeta soul_stone_meta = 11;</code>
     */
    private $soul_stone_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopMonsterEggMeta monster_egg_meta = 12;</code>
     */
    private $monster_egg_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopRuneMeta rune_meta = 13;</code>
     */
    private $rune_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopFoodMeta food_meta = 14;</code>
     */
    private $food_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopBeyondStoneMeta beyond_stone_meta = 15;</code>
     */
    private $beyond_stone_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSuperStoneMeta super_stone_meta = 16;</code>
     */
    private $super_stone_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSuperStoneStuffMeta super_stone_stuff_meta = 17;</code>
     */
    private $super_stone_stuff_meta = null;

    public function __construct() {
        \GPBMetadata\MsgJojeShopList::initOnce();
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
     * Generated from protobuf field <code>uint64 tid = 2;</code>
     * @return int|string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Generated from protobuf field <code>uint64 tid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTid($var)
    {
        GPBUtil::checkUint64($var);
        $this->tid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 owner_id = 3;</code>
     * @return int|string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>uint64 owner_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkUint64($var);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 slot = 4;</code>
     * @return int
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Generated from protobuf field <code>uint32 slot = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSlot($var)
    {
        GPBUtil::checkUint32($var);
        $this->slot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 6;</code>
     * @return int|string
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 7;</code>
     * @return int
     */
    public function getShopItemUid()
    {
        return $this->shop_item_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 shop_item_uid = 7;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgPrice price = 8;</code>
     * @return \Msggamedata\MsgPrice
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgPrice price = 8;</code>
     * @param \Msggamedata\MsgPrice $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgPrice::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItem.ItemType item_type = 9;</code>
     * @return int
     */
    public function getItemType()
    {
        return $this->item_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItem.ItemType item_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setItemType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgShopItem_ItemType::class);
        $this->item_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopInstantMonsterMeta instant_monster_meta = 10;</code>
     * @return \Msggamedata\MsgJojeShopInstantMonsterMeta
     */
    public function getInstantMonsterMeta()
    {
        return $this->instant_monster_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopInstantMonsterMeta instant_monster_meta = 10;</code>
     * @param \Msggamedata\MsgJojeShopInstantMonsterMeta $var
     * @return $this
     */
    public function setInstantMonsterMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopInstantMonsterMeta::class);
        $this->instant_monster_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSoulStoneMeta soul_stone_meta = 11;</code>
     * @return \Msggamedata\MsgJojeShopSoulStoneMeta
     */
    public function getSoulStoneMeta()
    {
        return $this->soul_stone_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSoulStoneMeta soul_stone_meta = 11;</code>
     * @param \Msggamedata\MsgJojeShopSoulStoneMeta $var
     * @return $this
     */
    public function setSoulStoneMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopSoulStoneMeta::class);
        $this->soul_stone_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopMonsterEggMeta monster_egg_meta = 12;</code>
     * @return \Msggamedata\MsgJojeShopMonsterEggMeta
     */
    public function getMonsterEggMeta()
    {
        return $this->monster_egg_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopMonsterEggMeta monster_egg_meta = 12;</code>
     * @param \Msggamedata\MsgJojeShopMonsterEggMeta $var
     * @return $this
     */
    public function setMonsterEggMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopMonsterEggMeta::class);
        $this->monster_egg_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopRuneMeta rune_meta = 13;</code>
     * @return \Msggamedata\MsgJojeShopRuneMeta
     */
    public function getRuneMeta()
    {
        return $this->rune_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopRuneMeta rune_meta = 13;</code>
     * @param \Msggamedata\MsgJojeShopRuneMeta $var
     * @return $this
     */
    public function setRuneMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopRuneMeta::class);
        $this->rune_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopFoodMeta food_meta = 14;</code>
     * @return \Msggamedata\MsgJojeShopFoodMeta
     */
    public function getFoodMeta()
    {
        return $this->food_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopFoodMeta food_meta = 14;</code>
     * @param \Msggamedata\MsgJojeShopFoodMeta $var
     * @return $this
     */
    public function setFoodMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopFoodMeta::class);
        $this->food_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopBeyondStoneMeta beyond_stone_meta = 15;</code>
     * @return \Msggamedata\MsgJojeShopBeyondStoneMeta
     */
    public function getBeyondStoneMeta()
    {
        return $this->beyond_stone_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopBeyondStoneMeta beyond_stone_meta = 15;</code>
     * @param \Msggamedata\MsgJojeShopBeyondStoneMeta $var
     * @return $this
     */
    public function setBeyondStoneMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopBeyondStoneMeta::class);
        $this->beyond_stone_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSuperStoneMeta super_stone_meta = 16;</code>
     * @return \Msggamedata\MsgJojeShopSuperStoneMeta
     */
    public function getSuperStoneMeta()
    {
        return $this->super_stone_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSuperStoneMeta super_stone_meta = 16;</code>
     * @param \Msggamedata\MsgJojeShopSuperStoneMeta $var
     * @return $this
     */
    public function setSuperStoneMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopSuperStoneMeta::class);
        $this->super_stone_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSuperStoneStuffMeta super_stone_stuff_meta = 17;</code>
     * @return \Msggamedata\MsgJojeShopSuperStoneStuffMeta
     */
    public function getSuperStoneStuffMeta()
    {
        return $this->super_stone_stuff_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgJojeShopSuperStoneStuffMeta super_stone_stuff_meta = 17;</code>
     * @param \Msggamedata\MsgJojeShopSuperStoneStuffMeta $var
     * @return $this
     */
    public function setSuperStoneStuffMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgJojeShopSuperStoneStuffMeta::class);
        $this->super_stone_stuff_meta = $var;

        return $this;
    }

}

