<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspCreateClan.proto

namespace GPBMetadata;

class RspCreateClan
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\RspRefreshMyClanInfo::initOnce();
        \GPBMetadata\MsgUser::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac4010a13527370437265617465436c616e2e70726f746f120b6d736767" .
            "616d65646174611a0d4d7367557365722e70726f746f22740a0d52737043" .
            "7265617465436c616e123f0a14727370526566726573684d79436c616e49" .
            "6e666f18012001280b32212e6d736767616d65646174612e527370526566" .
            "726573684d79436c616e496e666f12220a047573657218022001280b3214" .
            "2e6d736767616d65646174612e4d73675573657242130a11636f6d2e6665" .
            "6c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

