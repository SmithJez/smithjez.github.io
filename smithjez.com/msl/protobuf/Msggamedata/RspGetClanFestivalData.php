<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetClanFestivalData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspGetClanFestivalData</code>
 */
class RspGetClanFestivalData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgClanFestivalData my_clan_festival_data = 1;</code>
     */
    private $my_clan_festival_data = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanFestivalGiftSendData clan_member_festival_data = 2;</code>
     */
    private $clan_member_festival_data;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanFestivalGift clan_festival_gifts = 3;</code>
     */
    private $clan_festival_gifts;

    public function __construct() {
        \GPBMetadata\RspGetClanFestivalData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgClanFestivalData my_clan_festival_data = 1;</code>
     * @return \Msggamedata\MsgClanFestivalData
     */
    public function getMyClanFestivalData()
    {
        return $this->my_clan_festival_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgClanFestivalData my_clan_festival_data = 1;</code>
     * @param \Msggamedata\MsgClanFestivalData $var
     * @return $this
     */
    public function setMyClanFestivalData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgClanFestivalData::class);
        $this->my_clan_festival_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanFestivalGiftSendData clan_member_festival_data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClanMemberFestivalData()
    {
        return $this->clan_member_festival_data;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanFestivalGiftSendData clan_member_festival_data = 2;</code>
     * @param \Msggamedata\MsgClanFestivalGiftSendData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClanMemberFestivalData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgClanFestivalGiftSendData::class);
        $this->clan_member_festival_data = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanFestivalGift clan_festival_gifts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClanFestivalGifts()
    {
        return $this->clan_festival_gifts;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgClanFestivalGift clan_festival_gifts = 3;</code>
     * @param \Msggamedata\MsgClanFestivalGift[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClanFestivalGifts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgClanFestivalGift::class);
        $this->clan_festival_gifts = $arr;

        return $this;
    }

}

