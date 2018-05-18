<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspMonsterCapture.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspMonsterCapture</code>
 */
class RspMonsterCapture extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 1;</code>
     */
    private $user_monster = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterDictData user_monster_dict_data = 3;</code>
     */
    private $user_monster_dict_data = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterCaptureBonusProb bonus_prob = 4;</code>
     */
    private $bonus_prob = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterCaptureHistory monster_capture_history = 5;</code>
     */
    private $monster_capture_history = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgCaptureKingUserHistory captureking_user_history = 6;</code>
     */
    private $captureking_user_history = null;

    public function __construct() {
        \GPBMetadata\RspMonsterCapture::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 1;</code>
     * @return \Msggamedata\MsgUserMonster
     */
    public function getUserMonster()
    {
        return $this->user_monster;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 1;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterDictData user_monster_dict_data = 3;</code>
     * @return \Msggamedata\MsgUserMonsterDictData
     */
    public function getUserMonsterDictData()
    {
        return $this->user_monster_dict_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonsterDictData user_monster_dict_data = 3;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgMonsterCaptureBonusProb bonus_prob = 4;</code>
     * @return \Msggamedata\MsgMonsterCaptureBonusProb
     */
    public function getBonusProb()
    {
        return $this->bonus_prob;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterCaptureBonusProb bonus_prob = 4;</code>
     * @param \Msggamedata\MsgMonsterCaptureBonusProb $var
     * @return $this
     */
    public function setBonusProb($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterCaptureBonusProb::class);
        $this->bonus_prob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterCaptureHistory monster_capture_history = 5;</code>
     * @return \Msggamedata\MsgMonsterCaptureHistory
     */
    public function getMonsterCaptureHistory()
    {
        return $this->monster_capture_history;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterCaptureHistory monster_capture_history = 5;</code>
     * @param \Msggamedata\MsgMonsterCaptureHistory $var
     * @return $this
     */
    public function setMonsterCaptureHistory($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterCaptureHistory::class);
        $this->monster_capture_history = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCaptureKingUserHistory captureking_user_history = 6;</code>
     * @return \Msggamedata\MsgCaptureKingUserHistory
     */
    public function getCapturekingUserHistory()
    {
        return $this->captureking_user_history;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCaptureKingUserHistory captureking_user_history = 6;</code>
     * @param \Msggamedata\MsgCaptureKingUserHistory $var
     * @return $this
     */
    public function setCapturekingUserHistory($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgCaptureKingUserHistory::class);
        $this->captureking_user_history = $var;

        return $this;
    }

}

