<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqChatMessage.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqChatMessage</code>
 */
class ReqChatMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string domain = 1;</code>
     */
    private $domain = '';
    /**
     * Generated from protobuf field <code>string channel = 2;</code>
     */
    private $channel = '';
    /**
     * Generated from protobuf field <code>string message = 3;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\ReqChatMessage::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel = 2;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Generated from protobuf field <code>string channel = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

