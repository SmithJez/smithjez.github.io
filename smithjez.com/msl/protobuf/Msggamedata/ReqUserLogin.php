<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqUserLogin.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqUserLogin</code>
 */
class ReqUserLogin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string uuid = 1;</code>
     */
    private $uuid = '';
    /**
     * Generated from protobuf field <code>string private_key = 2;</code>
     */
    private $private_key = '';
    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType platform_type = 3;</code>
     */
    private $platform_type = 0;
    /**
     * Generated from protobuf field <code>string platform_user_id = 4;</code>
     */
    private $platform_user_id = '';
    /**
     * Generated from protobuf field <code>.msggamedata.MsgClientDeviceInfo client_device_info = 5;</code>
     */
    private $client_device_info = null;

    public function __construct() {
        \GPBMetadata\ReqUserLogin::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string uuid = 1;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Generated from protobuf field <code>string uuid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string private_key = 2;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Generated from protobuf field <code>string private_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType platform_type = 3;</code>
     * @return int
     */
    public function getPlatformType()
    {
        return $this->platform_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType platform_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatformType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\AccountPlatformType::class);
        $this->platform_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform_user_id = 4;</code>
     * @return string
     */
    public function getPlatformUserId()
    {
        return $this->platform_user_id;
    }

    /**
     * Generated from protobuf field <code>string platform_user_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatformUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgClientDeviceInfo client_device_info = 5;</code>
     * @return \Msggamedata\MsgClientDeviceInfo
     */
    public function getClientDeviceInfo()
    {
        return $this->client_device_info;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgClientDeviceInfo client_device_info = 5;</code>
     * @param \Msggamedata\MsgClientDeviceInfo $var
     * @return $this
     */
    public function setClientDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgClientDeviceInfo::class);
        $this->client_device_info = $var;

        return $this;
    }

}

