<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonsterEggCutScene.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgMonsterEggCutScene</code>
 */
class MsgMonsterEggCutScene extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 grade1_normal = 2;</code>
     */
    private $grade1_normal = 0;
    /**
     * Generated from protobuf field <code>uint32 grade1_special = 3;</code>
     */
    private $grade1_special = 0;
    /**
     * Generated from protobuf field <code>uint32 grade2_normal = 4;</code>
     */
    private $grade2_normal = 0;
    /**
     * Generated from protobuf field <code>uint32 grade2_special = 5;</code>
     */
    private $grade2_special = 0;
    /**
     * Generated from protobuf field <code>uint32 grade3_normal = 6;</code>
     */
    private $grade3_normal = 0;
    /**
     * Generated from protobuf field <code>uint32 grade3_special = 7;</code>
     */
    private $grade3_special = 0;
    /**
     * Generated from protobuf field <code>uint32 grade4_normal = 8;</code>
     */
    private $grade4_normal = 0;
    /**
     * Generated from protobuf field <code>uint32 grade4_special = 9;</code>
     */
    private $grade4_special = 0;
    /**
     * Generated from protobuf field <code>uint32 grade5_normal = 10;</code>
     */
    private $grade5_normal = 0;
    /**
     * Generated from protobuf field <code>uint32 grade5_special = 11;</code>
     */
    private $grade5_special = 0;
    /**
     * Generated from protobuf field <code>uint32 grade6_normal = 12;</code>
     */
    private $grade6_normal = 0;
    /**
     * Generated from protobuf field <code>uint32 grade6_special = 13;</code>
     */
    private $grade6_special = 0;

    public function __construct() {
        \GPBMetadata\MsgMonsterEggCutScene::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade1_normal = 2;</code>
     * @return int
     */
    public function getGrade1Normal()
    {
        return $this->grade1_normal;
    }

    /**
     * Generated from protobuf field <code>uint32 grade1_normal = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade1Normal($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade1_normal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade1_special = 3;</code>
     * @return int
     */
    public function getGrade1Special()
    {
        return $this->grade1_special;
    }

    /**
     * Generated from protobuf field <code>uint32 grade1_special = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade1Special($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade1_special = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade2_normal = 4;</code>
     * @return int
     */
    public function getGrade2Normal()
    {
        return $this->grade2_normal;
    }

    /**
     * Generated from protobuf field <code>uint32 grade2_normal = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade2Normal($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade2_normal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade2_special = 5;</code>
     * @return int
     */
    public function getGrade2Special()
    {
        return $this->grade2_special;
    }

    /**
     * Generated from protobuf field <code>uint32 grade2_special = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade2Special($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade2_special = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade3_normal = 6;</code>
     * @return int
     */
    public function getGrade3Normal()
    {
        return $this->grade3_normal;
    }

    /**
     * Generated from protobuf field <code>uint32 grade3_normal = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade3Normal($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade3_normal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade3_special = 7;</code>
     * @return int
     */
    public function getGrade3Special()
    {
        return $this->grade3_special;
    }

    /**
     * Generated from protobuf field <code>uint32 grade3_special = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade3Special($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade3_special = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade4_normal = 8;</code>
     * @return int
     */
    public function getGrade4Normal()
    {
        return $this->grade4_normal;
    }

    /**
     * Generated from protobuf field <code>uint32 grade4_normal = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade4Normal($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade4_normal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade4_special = 9;</code>
     * @return int
     */
    public function getGrade4Special()
    {
        return $this->grade4_special;
    }

    /**
     * Generated from protobuf field <code>uint32 grade4_special = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade4Special($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade4_special = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade5_normal = 10;</code>
     * @return int
     */
    public function getGrade5Normal()
    {
        return $this->grade5_normal;
    }

    /**
     * Generated from protobuf field <code>uint32 grade5_normal = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade5Normal($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade5_normal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade5_special = 11;</code>
     * @return int
     */
    public function getGrade5Special()
    {
        return $this->grade5_special;
    }

    /**
     * Generated from protobuf field <code>uint32 grade5_special = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade5Special($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade5_special = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade6_normal = 12;</code>
     * @return int
     */
    public function getGrade6Normal()
    {
        return $this->grade6_normal;
    }

    /**
     * Generated from protobuf field <code>uint32 grade6_normal = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade6Normal($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade6_normal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade6_special = 13;</code>
     * @return int
     */
    public function getGrade6Special()
    {
        return $this->grade6_special;
    }

    /**
     * Generated from protobuf field <code>uint32 grade6_special = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade6Special($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade6_special = $var;

        return $this;
    }

}

