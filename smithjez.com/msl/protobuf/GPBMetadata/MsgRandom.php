<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRandom.proto

namespace GPBMetadata;

class MsgRandom
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgRandomItem::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80010a0f4d736752616e646f6d2e70726f746f120b6d736767616d6564" .
            "61746122430a094d736752616e646f6d120b0a0375696418012001280712" .
            "290a056974656d7318022003280b321a2e6d736767616d65646174612e4d" .
            "736752616e646f6d4974656d42130a11636f6d2e66656c616e69612e6d73" .
            "6c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

