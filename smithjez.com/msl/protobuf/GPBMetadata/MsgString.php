<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgString.proto

namespace GPBMetadata;

class MsgString
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgLocalizedString::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80010a0f4d7367537472696e672e70726f746f120b6d736767616d6564" .
            "61746122430a094d7367537472696e6712360a0d6c6f63616c5f73747269" .
            "6e677318012003280b321f2e6d736767616d65646174612e4d73674c6f63" .
            "616c697a6564537472696e6742130a11636f6d2e66656c616e69612e6d73" .
            "6c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

