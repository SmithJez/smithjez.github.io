<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqArenaCandidates.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqArenaCandidates</code>
 */
class ReqArenaCandidates extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.RefreshArenaCandidatesType type = 1;</code>
     */
    private $type = 0;

    public function __construct() {
        \GPBMetadata\ReqArenaCandidates::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RefreshArenaCandidatesType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RefreshArenaCandidatesType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\RefreshArenaCandidatesType::class);
        $this->type = $var;

        return $this;
    }

}
