<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBingoCompleteEvent.proto

namespace GPBMetadata;

class MsgBingoCompleteEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgBingoCompleteEventReward::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abd010a1b4d736742696e676f436f6d706c6574654576656e742e70726f" .
            "746f120b6d736767616d656461746122740a154d736742696e676f436f6d" .
            "706c6574654576656e74120b0a03756964180120012807124e0a1c62696e" .
            "676f5f636f6d706c6574655f6576656e745f726577617264731802200328" .
            "0b32282e6d736767616d65646174612e4d736742696e676f436f6d706c65" .
            "74654576656e7452657761726442130a11636f6d2e66656c616e69612e6d" .
            "736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

