<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspChangeClanData.proto

namespace GPBMetadata;

class RspChangeClanData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgClan::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a81010a175273704368616e6765436c616e446174612e70726f746f120b" .
            "6d736767616d6564617461223c0a115273704368616e6765436c616e4461" .
            "746112270a09636c616e5f6461746118012001280b32142e6d736767616d" .
            "65646174612e4d7367436c616e42130a11636f6d2e66656c616e69612e6d" .
            "736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
