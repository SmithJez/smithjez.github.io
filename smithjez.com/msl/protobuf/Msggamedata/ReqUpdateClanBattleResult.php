<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqUpdateClanBattleResult.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqUpdateClanBattleResult</code>
 */
class ReqUpdateClanBattleResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 update_user_id = 1;</code>
     */
    private $update_user_id = 0;

    public function __construct() {
        \GPBMetadata\ReqUpdateClanBattleResult::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 update_user_id = 1;</code>
     * @return int|string
     */
    public function getUpdateUserId()
    {
        return $this->update_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 update_user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->update_user_id = $var;

        return $this;
    }

}

