<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqMaxMonsterEvolution.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqMaxMonsterEvolution</code>
 */
class ReqMaxMonsterEvolution extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 base_user_monster_id = 1;</code>
     */
    private $base_user_monster_id = 0;
    /**
     * Generated from protobuf field <code>uint64 material_user_monster_id = 2;</code>
     */
    private $material_user_monster_id = 0;

    public function __construct() {
        \GPBMetadata\ReqMaxMonsterEvolution::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 base_user_monster_id = 1;</code>
     * @return int|string
     */
    public function getBaseUserMonsterId()
    {
        return $this->base_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 base_user_monster_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBaseUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->base_user_monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 material_user_monster_id = 2;</code>
     * @return int|string
     */
    public function getMaterialUserMonsterId()
    {
        return $this->material_user_monster_id;
    }

    /**
     * Generated from protobuf field <code>uint64 material_user_monster_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaterialUserMonsterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->material_user_monster_id = $var;

        return $this;
    }

}

