<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserClanJoinApply.proto

namespace GPBMetadata;

class MsgUserClanJoinApply
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserProfileData::initOnce();
        \GPBMetadata\ClanMemberGrade::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae3010a1a4d736755736572436c616e4a6f696e4170706c792e70726f74" .
            "6f120b6d736767616d65646174611a15436c616e4d656d62657247726164" .
            "652e70726f746f2283010a144d736755736572436c616e4a6f696e417070" .
            "6c7912320a09757365725f6461746118012001280b321f2e6d736767616d" .
            "65646174612e4d73675573657250726f66696c654461746112370a116a6f" .
            "696e5f6d656d6265725f677261646518022001280e321c2e6d736767616d" .
            "65646174612e436c616e4d656d626572477261646542130a11636f6d2e66" .
            "656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

