<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemMetaMonster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemMetaMonster</code>
 */
class MsgShopItemMetaMonster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond cond = 1;</code>
     */
    private $cond = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb prob_list = 2;</code>
     */
    private $prob_list;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemMetaMonster.MonsterPackage package = 3;</code>
     */
    private $package = null;
    /**
     * Generated from protobuf field <code>fixed32 cutscene_uid = 4;</code>
     */
    private $cutscene_uid = 0;
    /**
     * Generated from protobuf field <code>string egg = 5;</code>
     */
    private $egg = '';

    public function __construct() {
        \GPBMetadata\MsgShopItemMetaMonster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond cond = 1;</code>
     * @return \Msggamedata\MsgShopPurchaseCond
     */
    public function getCond()
    {
        return $this->cond;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond cond = 1;</code>
     * @param \Msggamedata\MsgShopPurchaseCond $var
     * @return $this
     */
    public function setCond($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgShopPurchaseCond::class);
        $this->cond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb prob_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProbList()
    {
        return $this->prob_list;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb prob_list = 2;</code>
     * @param \Msggamedata\MsgShopItemMetaMonster_StatWeightTypeAndProb[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProbList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgShopItemMetaMonster_StatWeightTypeAndProb::class);
        $this->prob_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemMetaMonster.MonsterPackage package = 3;</code>
     * @return \Msggamedata\MsgShopItemMetaMonster_MonsterPackage
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemMetaMonster.MonsterPackage package = 3;</code>
     * @param \Msggamedata\MsgShopItemMetaMonster_MonsterPackage $var
     * @return $this
     */
    public function setPackage($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgShopItemMetaMonster_MonsterPackage::class);
        $this->package = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 cutscene_uid = 4;</code>
     * @return int
     */
    public function getCutsceneUid()
    {
        return $this->cutscene_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 cutscene_uid = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCutsceneUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->cutscene_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string egg = 5;</code>
     * @return string
     */
    public function getEgg()
    {
        return $this->egg;
    }

    /**
     * Generated from protobuf field <code>string egg = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEgg($var)
    {
        GPBUtil::checkString($var, True);
        $this->egg = $var;

        return $this;
    }

}

