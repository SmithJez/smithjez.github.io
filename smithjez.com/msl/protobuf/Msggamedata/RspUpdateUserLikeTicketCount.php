<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUpdateUserLikeTicketCount.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUpdateUserLikeTicketCount</code>
 */
class RspUpdateUserLikeTicketCount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 count = 1;</code>
     */
    private $count = 0;

    public function __construct() {
        \GPBMetadata\RspUpdateUserLikeTicketCount::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 count = 1;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

}
