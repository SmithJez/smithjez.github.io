<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqBreakupFriend.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqBreakupFriend</code>
 */
class ReqBreakupFriend extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 friend_user_id = 1;</code>
     */
    private $friend_user_id = 0;

    public function __construct() {
        \GPBMetadata\ReqBreakupFriend::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 friend_user_id = 1;</code>
     * @return int|string
     */
    public function getFriendUserId()
    {
        return $this->friend_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 friend_user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFriendUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->friend_user_id = $var;

        return $this;
    }

}

