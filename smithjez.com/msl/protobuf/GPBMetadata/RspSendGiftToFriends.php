<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspSendGiftToFriends.proto

namespace GPBMetadata;

class RspSendGiftToFriends
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUser::initOnce();
        \GPBMetadata\MsgPrice::initOnce();
        \GPBMetadata\MsgFriend::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaf020a1a52737053656e6447696674546f467269656e64732e70726f74" .
            "6f120b6d736767616d65646174611a0e4d736750726963652e70726f746f" .
            "1a0f4d7367467269656e642e70726f746f22c5010a1452737053656e6447" .
            "696674546f467269656e647312170a0f667269656e645f757365725f6964" .
            "7318012003280412220a047573657218022001280b32142e6d736767616d" .
            "65646174612e4d73675573657212260a077265776172647318032003280b" .
            "32152e6d736767616d65646174612e4d7367507269636512270a07667269" .
            "656e647318042003280b32162e6d736767616d65646174612e4d73674672" .
            "69656e64121f0a1764656c657465645f667269656e645f757365725f6964" .
            "7318052003280442130a11636f6d2e66656c616e69612e6d736c64626206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}
