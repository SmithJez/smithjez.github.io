<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqChangeClanMaster.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqChangeClanMaster</code>
 */
class ReqChangeClanMaster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 new_master_user_id = 1;</code>
     */
    private $new_master_user_id = 0;

    public function __construct() {
        \GPBMetadata\ReqChangeClanMaster::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 new_master_user_id = 1;</code>
     * @return int|string
     */
    public function getNewMasterUserId()
    {
        return $this->new_master_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 new_master_user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNewMasterUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->new_master_user_id = $var;

        return $this;
    }

}

