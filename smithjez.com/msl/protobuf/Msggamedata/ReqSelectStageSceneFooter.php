<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqSelectStageSceneFooter.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqSelectStageSceneFooter</code>
 */
class ReqSelectStageSceneFooter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.RefreshDungeonType dungeon_type = 1;</code>
     */
    private $dungeon_type = 0;

    public function __construct() {
        \GPBMetadata\ReqSelectStageSceneFooter::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RefreshDungeonType dungeon_type = 1;</code>
     * @return int
     */
    public function getDungeonType()
    {
        return $this->dungeon_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RefreshDungeonType dungeon_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDungeonType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\RefreshDungeonType::class);
        $this->dungeon_type = $var;

        return $this;
    }

}

