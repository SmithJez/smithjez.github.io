<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetBingoEventData.proto

namespace GPBMetadata;

class RspGetBingoEventData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserBingoEventData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa1010a1a52737047657442696e676f4576656e74446174612e70726f74" .
            "6f120b6d736767616d656461746122590a1452737047657442696e676f45" .
            "76656e744461746112410a15757365725f62696e676f5f6576656e745f64" .
            "61746118012001280b32222e6d736767616d65646174612e4d7367557365" .
            "7242696e676f4576656e744461746142130a11636f6d2e66656c616e6961" .
            "2e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

