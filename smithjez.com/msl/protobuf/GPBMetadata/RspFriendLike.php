<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspFriendLike.proto

namespace GPBMetadata;

class RspFriendLike
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUser::initOnce();
        \GPBMetadata\MsgFriend::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac5010a13527370467269656e644c696b652e70726f746f120b6d736767" .
            "616d65646174611a0f4d7367467269656e642e70726f746f22730a0d5273" .
            "70467269656e644c696b6512160a0e667269656e645f757365725f696418" .
            "012001280412220a047573657218022001280b32142e6d736767616d6564" .
            "6174612e4d73675573657212260a06667269656e6418032001280b32162e" .
            "6d736767616d65646174612e4d7367467269656e6442130a11636f6d2e66" .
            "656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

