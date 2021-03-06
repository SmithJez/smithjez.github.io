<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspMonsterSummon.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspMonsterSummon</code>
 */
class RspMonsterSummon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 left_user_monster_id = 1;</code>
     */
    private $left_user_monster_id = 0;
    /**
     * Generated from protobuf field <code>uint64 right_user_monster_id = 2;</code>
     */
    private $right_user_monster_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 4;</code>
     */
    private $user_monster = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterDictData user_monster_dict_data = 5;</code>
     */
    private $user_monster_dict_data = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserSummonMonster user_summon_monster = 6;</code>
     */
    private $user_summon_monster = null;

    public function __construct() {
        \GPBMetadata\RspMonsterSummon::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 left_user_monster_id = 1;</code>
     * @return int|string
     */
    public function getLeftUserMonsterId()
    {
        return $this->left_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 left_user_monster_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLeftUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->left_user_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 right_user_monster_id = 2;</code>
     * @return int|string
     */
    public function getRightUserMonsterId()
    {
        return $this->right_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 right_user_monster_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRightUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->right_user_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 4;</code>
     * @return \Msggamedata\MsgUserMonster
     */
    public function getUserMonster()
    {
        return $this->user_monster;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 4;</code>
     * @param \Msggamedata\MsgUserMonster $var
     * @return $this
     */
    public function setUserMonster($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMonster::class);
        $this->user_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterDictData user_monster_dict_data = 5;</code>
     * @return \Msggamedata\MsgUserMonsterDictData
     */
    public function getUserMonsterDictData()
    {
        return $this->user_monster_dict_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterDictData user_monster_dict_data = 5;</code>
     * @param \Msggamedata\MsgUserMonsterDictData $var
     * @return $this
     */
    public function setUserMonsterDictData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMonsterDictData::class);
        $this->user_monster_dict_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserSummonMonster user_summon_monster = 6;</code>
     * @return \Msggamedata\MsgUserSummonMonster
     */
    public function getUserSummonMonster()
    {
        return $this->user_summon_monster;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserSummonMonster user_summon_monster = 6;</code>
     * @param \Msggamedata\MsgUserSummonMonster $var
     * @return $this
     */
    public function setUserSummonMonster($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserSummonMonster::class);
        $this->user_summon_monster = $var;

        return $this;
    }

}

