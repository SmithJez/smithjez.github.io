<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserBingoData.proto

namespace GPBMetadata;

class RspUserBingoData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserBingoData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e010a165273705573657242696e676f446174612e70726f746f120b6d" .
            "736767616d6564617461224a0a105273705573657242696e676f44617461" .
            "12360a0f757365725f62696e676f5f6461746118012001280b321d2e6d73" .
            "6767616d65646174612e4d73675573657242696e676f4461746142130a11" .
            "636f6d2e66656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

