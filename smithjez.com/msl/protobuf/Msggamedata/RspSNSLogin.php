<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspSNSLogin.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspSNSLogin</code>
 */
class RspSNSLogin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType sns_type = 1;</code>
     */
    private $sns_type = 0;
    /**
     * Generated from protobuf field <code>bool need_choice = 2;</code>
     */
    private $need_choice = false;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgAccount cur_account = 3;</code>
     */
    private $cur_account = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser cur_user = 4;</code>
     */
    private $cur_user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgAccount sns_account = 5;</code>
     */
    private $sns_account = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser sns_user = 6;</code>
     */
    private $sns_user = null;
    /**
     * Generated from protobuf field <code>bool need_login = 7;</code>
     */
    private $need_login = false;
    /**
     * Generated from protobuf field <code>string token = 8;</code>
     */
    private $token = '';
    /**
     * Generated from protobuf field <code>uint32 ticket = 9;</code>
     */
    private $ticket = 0;

    public function __construct() {
        \GPBMetadata\RspSNSLogin::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType sns_type = 1;</code>
     * @return int
     */
    public function getSnsType()
    {
        return $this->sns_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType sns_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSnsType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\AccountPlatformType::class);
        $this->sns_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool need_choice = 2;</code>
     * @return bool
     */
    public function getNeedChoice()
    {
        return $this->need_choice;
    }

    /**
     * Generated from protobuf field <code>bool need_choice = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedChoice($var)
    {
        GPBUtil::checkBool($var);
        $this->need_choice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgAccount cur_account = 3;</code>
     * @return \Msggamedata\MsgAccount
     */
    public function getCurAccount()
    {
        return $this->cur_account;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgAccount cur_account = 3;</code>
     * @param \Msggamedata\MsgAccount $var
     * @return $this
     */
    public function setCurAccount($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgAccount::class);
        $this->cur_account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser cur_user = 4;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getCurUser()
    {
        return $this->cur_user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser cur_user = 4;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setCurUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->cur_user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgAccount sns_account = 5;</code>
     * @return \Msggamedata\MsgAccount
     */
    public function getSnsAccount()
    {
        return $this->sns_account;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgAccount sns_account = 5;</code>
     * @param \Msggamedata\MsgAccount $var
     * @return $this
     */
    public function setSnsAccount($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgAccount::class);
        $this->sns_account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser sns_user = 6;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getSnsUser()
    {
        return $this->sns_user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser sns_user = 6;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setSnsUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->sns_user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool need_login = 7;</code>
     * @return bool
     */
    public function getNeedLogin()
    {
        return $this->need_login;
    }

    /**
     * Generated from protobuf field <code>bool need_login = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedLogin($var)
    {
        GPBUtil::checkBool($var);
        $this->need_login = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 8;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ticket = 9;</code>
     * @return int
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Generated from protobuf field <code>uint32 ticket = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTicket($var)
    {
        GPBUtil::checkUint32($var);
        $this->ticket = $var;

        return $this;
    }

}

