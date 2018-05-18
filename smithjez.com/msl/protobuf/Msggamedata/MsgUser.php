<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUser.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUser</code>
 */
class MsgUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 account_idx = 2;</code>
     */
    private $account_idx = 0;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>uint32 lev = 5;</code>
     */
    private $lev = 0;
    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     */
    private $exp = 0;
    /**
     * Generated from protobuf field <code>uint32 gold = 7;</code>
     */
    private $gold = 0;
    /**
     * Generated from protobuf field <code>uint32 paid_gem = 8;</code>
     */
    private $paid_gem = 0;
    /**
     * Generated from protobuf field <code>uint32 free_gem = 9;</code>
     */
    private $free_gem = 0;
    /**
     * Generated from protobuf field <code>uint32 energy = 10;</code>
     */
    private $energy = 0;
    /**
     * Generated from protobuf field <code>uint32 arena_point = 11;</code>
     */
    private $arena_point = 0;
    /**
     * Generated from protobuf field <code>uint32 arena_ticket = 12;</code>
     */
    private $arena_ticket = 0;
    /**
     * Generated from protobuf field <code>uint32 dungeon_ticket = 13;</code>
     */
    private $dungeon_ticket = 0;
    /**
     * Generated from protobuf field <code>uint32 energy_charge_time = 14;</code>
     */
    private $energy_charge_time = 0;
    /**
     * Generated from protobuf field <code>uint32 monster_inven_cnt = 15;</code>
     */
    private $monster_inven_cnt = 0;
    /**
     * Generated from protobuf field <code>uint64 representative_monster_id = 17;</code>
     */
    private $representative_monster_id = 0;
    /**
     * Generated from protobuf field <code>uint32 capture_bullet = 18;</code>
     */
    private $capture_bullet = 0;
    /**
     * Generated from protobuf field <code>string hello_message = 19;</code>
     */
    private $hello_message = '';
    /**
     * Generated from protobuf field <code>uint32 like_count = 20;</code>
     */
    private $like_count = 0;
    /**
     * Generated from protobuf field <code>uint32 like_ticket_count = 21;</code>
     */
    private $like_ticket_count = 0;
    /**
     * Generated from protobuf field <code>bool auto_fill_capture_bullet = 22;</code>
     */
    private $auto_fill_capture_bullet = false;
    /**
     * Generated from protobuf field <code>uint32 max_energy = 23;</code>
     */
    private $max_energy = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.UserCharType char_type = 24;</code>
     */
    private $char_type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.UserCharSkinType skin_type = 25;</code>
     */
    private $skin_type = 0;
    /**
     * Generated from protobuf field <code>uint32 user_profile_icon_uid = 26;</code>
     */
    private $user_profile_icon_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 tutorial_step = 27;</code>
     */
    private $tutorial_step = 0;
    /**
     * Generated from protobuf field <code>uint32 arena_winning_point = 28;</code>
     */
    private $arena_winning_point = 0;
    /**
     * Generated from protobuf field <code>string arena_message = 29;</code>
     */
    private $arena_message = '';
    /**
     * Generated from protobuf field <code>uint64 dungeon_ticket_expired_date = 30;</code>
     */
    private $dungeon_ticket_expired_date = 0;
    /**
     * Generated from protobuf field <code>uint64 arena_candidate_list_published_date = 31;</code>
     */
    private $arena_candidate_list_published_date = 0;
    /**
     * Generated from protobuf field <code>uint32 arena_ticket_charge_time = 32;</code>
     */
    private $arena_ticket_charge_time = 0;
    /**
     * Generated from protobuf field <code>uint32 arena_reward_date = 33;</code>
     */
    private $arena_reward_date = 0;
    /**
     * Generated from protobuf field <code>uint32 last_arena_winning_point = 34;</code>
     */
    private $last_arena_winning_point = 0;
    /**
     * Generated from protobuf field <code>uint32 arena_season_idx = 35;</code>
     */
    private $arena_season_idx = 0;
    /**
     * Generated from protobuf field <code>uint32 time_zone = 36;</code>
     */
    private $time_zone = 0;
    /**
     * Generated from protobuf field <code>uint32 crystal = 37;</code>
     */
    private $crystal = 0;
    /**
     * Generated from protobuf field <code>uint32 clan_point = 38;</code>
     */
    private $clan_point = 0;
    /**
     * Generated from protobuf field <code>uint64 create_date = 39;</code>
     */
    private $create_date = 0;
    /**
     * Generated from protobuf field <code>string cvc_message = 40;</code>
     */
    private $cvc_message = '';
    /**
     * Generated from protobuf field <code>uint32 lucky_ticket = 41;</code>
     */
    private $lucky_ticket = 0;
    /**
     * Generated from protobuf field <code>uint32 costume_ticket = 42;</code>
     */
    private $costume_ticket = 0;

    public function __construct() {
        \GPBMetadata\MsgUser::initOnce();
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
     * Generated from protobuf field <code>uint64 account_idx = 2;</code>
     * @return int|string
     */
    public function getAccountIdx()
    {
        return $this->account_idx;
    }

    /**
     * Generated from protobuf field <code>uint64 account_idx = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAccountIdx($var)
    {
        GPBUtil::checkUint64($var);
        $this->account_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 5;</code>
     * @return int
     */
    public function getLev()
    {
        return $this->lev;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gold = 7;</code>
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Generated from protobuf field <code>uint32 gold = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGold($var)
    {
        GPBUtil::checkUint32($var);
        $this->gold = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 paid_gem = 8;</code>
     * @return int
     */
    public function getPaidGem()
    {
        return $this->paid_gem;
    }

    /**
     * Generated from protobuf field <code>uint32 paid_gem = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPaidGem($var)
    {
        GPBUtil::checkUint32($var);
        $this->paid_gem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 free_gem = 9;</code>
     * @return int
     */
    public function getFreeGem()
    {
        return $this->free_gem;
    }

    /**
     * Generated from protobuf field <code>uint32 free_gem = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFreeGem($var)
    {
        GPBUtil::checkUint32($var);
        $this->free_gem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 energy = 10;</code>
     * @return int
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Generated from protobuf field <code>uint32 energy = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEnergy($var)
    {
        GPBUtil::checkUint32($var);
        $this->energy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_point = 11;</code>
     * @return int
     */
    public function getArenaPoint()
    {
        return $this->arena_point;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_point = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setArenaPoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->arena_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_ticket = 12;</code>
     * @return int
     */
    public function getArenaTicket()
    {
        return $this->arena_ticket;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_ticket = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setArenaTicket($var)
    {
        GPBUtil::checkUint32($var);
        $this->arena_ticket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dungeon_ticket = 13;</code>
     * @return int
     */
    public function getDungeonTicket()
    {
        return $this->dungeon_ticket;
    }

    /**
     * Generated from protobuf field <code>uint32 dungeon_ticket = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setDungeonTicket($var)
    {
        GPBUtil::checkUint32($var);
        $this->dungeon_ticket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 energy_charge_time = 14;</code>
     * @return int
     */
    public function getEnergyChargeTime()
    {
        return $this->energy_charge_time;
    }

    /**
     * Generated from protobuf field <code>uint32 energy_charge_time = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setEnergyChargeTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->energy_charge_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_inven_cnt = 15;</code>
     * @return int
     */
    public function getMonsterInvenCnt()
    {
        return $this->monster_inven_cnt;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_inven_cnt = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterInvenCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_inven_cnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 representative_monster_id = 17;</code>
     * @return int|string
     */
    public function getRepresentativeMonsterId()
    {
        return $this->representative_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 representative_monster_id = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRepresentativeMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->representative_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 capture_bullet = 18;</code>
     * @return int
     */
    public function getCaptureBullet()
    {
        return $this->capture_bullet;
    }

    /**
     * Generated from protobuf field <code>uint32 capture_bullet = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setCaptureBullet($var)
    {
        GPBUtil::checkUint32($var);
        $this->capture_bullet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hello_message = 19;</code>
     * @return string
     */
    public function getHelloMessage()
    {
        return $this->hello_message;
    }

    /**
     * Generated from protobuf field <code>string hello_message = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setHelloMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->hello_message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 like_count = 20;</code>
     * @return int
     */
    public function getLikeCount()
    {
        return $this->like_count;
    }

    /**
     * Generated from protobuf field <code>uint32 like_count = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setLikeCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->like_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 like_ticket_count = 21;</code>
     * @return int
     */
    public function getLikeTicketCount()
    {
        return $this->like_ticket_count;
    }

    /**
     * Generated from protobuf field <code>uint32 like_ticket_count = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setLikeTicketCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->like_ticket_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool auto_fill_capture_bullet = 22;</code>
     * @return bool
     */
    public function getAutoFillCaptureBullet()
    {
        return $this->auto_fill_capture_bullet;
    }

    /**
     * Generated from protobuf field <code>bool auto_fill_capture_bullet = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoFillCaptureBullet($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_fill_capture_bullet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_energy = 23;</code>
     * @return int
     */
    public function getMaxEnergy()
    {
        return $this->max_energy;
    }

    /**
     * Generated from protobuf field <code>uint32 max_energy = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxEnergy($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_energy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserCharType char_type = 24;</code>
     * @return int
     */
    public function getCharType()
    {
        return $this->char_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserCharType char_type = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setCharType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\UserCharType::class);
        $this->char_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserCharSkinType skin_type = 25;</code>
     * @return int
     */
    public function getSkinType()
    {
        return $this->skin_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserCharSkinType skin_type = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setSkinType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\UserCharSkinType::class);
        $this->skin_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 user_profile_icon_uid = 26;</code>
     * @return int
     */
    public function getUserProfileIconUid()
    {
        return $this->user_profile_icon_uid;
    }

    /**
     * Generated from protobuf field <code>uint32 user_profile_icon_uid = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setUserProfileIconUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_profile_icon_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 tutorial_step = 27;</code>
     * @return int
     */
    public function getTutorialStep()
    {
        return $this->tutorial_step;
    }

    /**
     * Generated from protobuf field <code>uint32 tutorial_step = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setTutorialStep($var)
    {
        GPBUtil::checkUint32($var);
        $this->tutorial_step = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_winning_point = 28;</code>
     * @return int
     */
    public function getArenaWinningPoint()
    {
        return $this->arena_winning_point;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_winning_point = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setArenaWinningPoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->arena_winning_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string arena_message = 29;</code>
     * @return string
     */
    public function getArenaMessage()
    {
        return $this->arena_message;
    }

    /**
     * Generated from protobuf field <code>string arena_message = 29;</code>
     * @param string $var
     * @return $this
     */
    public function setArenaMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->arena_message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 dungeon_ticket_expired_date = 30;</code>
     * @return int|string
     */
    public function getDungeonTicketExpiredDate()
    {
        return $this->dungeon_ticket_expired_date;
    }

    /**
     * Generated from protobuf field <code>uint64 dungeon_ticket_expired_date = 30;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDungeonTicketExpiredDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->dungeon_ticket_expired_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 arena_candidate_list_published_date = 31;</code>
     * @return int|string
     */
    public function getArenaCandidateListPublishedDate()
    {
        return $this->arena_candidate_list_published_date;
    }

    /**
     * Generated from protobuf field <code>uint64 arena_candidate_list_published_date = 31;</code>
     * @param int|string $var
     * @return $this
     */
    public function setArenaCandidateListPublishedDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->arena_candidate_list_published_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_ticket_charge_time = 32;</code>
     * @return int
     */
    public function getArenaTicketChargeTime()
    {
        return $this->arena_ticket_charge_time;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_ticket_charge_time = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setArenaTicketChargeTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->arena_ticket_charge_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_reward_date = 33;</code>
     * @return int
     */
    public function getArenaRewardDate()
    {
        return $this->arena_reward_date;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_reward_date = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setArenaRewardDate($var)
    {
        GPBUtil::checkUint32($var);
        $this->arena_reward_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_arena_winning_point = 34;</code>
     * @return int
     */
    public function getLastArenaWinningPoint()
    {
        return $this->last_arena_winning_point;
    }

    /**
     * Generated from protobuf field <code>uint32 last_arena_winning_point = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setLastArenaWinningPoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_arena_winning_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_season_idx = 35;</code>
     * @return int
     */
    public function getArenaSeasonIdx()
    {
        return $this->arena_season_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 arena_season_idx = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setArenaSeasonIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->arena_season_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 time_zone = 36;</code>
     * @return int
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Generated from protobuf field <code>uint32 time_zone = 36;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 crystal = 37;</code>
     * @return int
     */
    public function getCrystal()
    {
        return $this->crystal;
    }

    /**
     * Generated from protobuf field <code>uint32 crystal = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setCrystal($var)
    {
        GPBUtil::checkUint32($var);
        $this->crystal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_point = 38;</code>
     * @return int
     */
    public function getClanPoint()
    {
        return $this->clan_point;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_point = 38;</code>
     * @param int $var
     * @return $this
     */
    public function setClanPoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->clan_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 39;</code>
     * @return int|string
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 39;</code>
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
     * Generated from protobuf field <code>string cvc_message = 40;</code>
     * @return string
     */
    public function getCvcMessage()
    {
        return $this->cvc_message;
    }

    /**
     * Generated from protobuf field <code>string cvc_message = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setCvcMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->cvc_message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lucky_ticket = 41;</code>
     * @return int
     */
    public function getLuckyTicket()
    {
        return $this->lucky_ticket;
    }

    /**
     * Generated from protobuf field <code>uint32 lucky_ticket = 41;</code>
     * @param int $var
     * @return $this
     */
    public function setLuckyTicket($var)
    {
        GPBUtil::checkUint32($var);
        $this->lucky_ticket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 costume_ticket = 42;</code>
     * @return int
     */
    public function getCostumeTicket()
    {
        return $this->costume_ticket;
    }

    /**
     * Generated from protobuf field <code>uint32 costume_ticket = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setCostumeTicket($var)
    {
        GPBUtil::checkUint32($var);
        $this->costume_ticket = $var;

        return $this;
    }

}

