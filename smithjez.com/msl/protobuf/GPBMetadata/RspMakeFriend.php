<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspMakeFriend.proto

namespace GPBMetadata;

class RspMakeFriend
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgFriend::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a7c0a135273704d616b65467269656e642e70726f746f120b6d73676761" .
            "6d6564617461223b0a0d5273704d616b65467269656e64122a0a0a6e6577" .
            "5f667269656e6418012001280b32162e6d736767616d65646174612e4d73" .
            "67467269656e6442130a11636f6d2e66656c616e69612e6d736c64626206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}

