<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqLobbyReward.proto

namespace GPBMetadata;

class ReqLobbyReward
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgLobbyReward::initOnce();
        \GPBMetadata\ShipLobbyType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8c020a145265714c6f6262795265776172642e70726f746f120b6d7367" .
            "67616d65646174611a13536869704c6f626279547970652e70726f746f22" .
            "b4010a0e5265714c6f62627952657761726412180a106c6f6262795f7265" .
            "776172645f75696418012001280d12170a0f64656c74615f746f7563685f" .
            "636e7418022001280d12400a0b7265776172645f7479706518032001280e" .
            "322b2e6d736767616d65646174612e4d73674c6f6262795265776172642e" .
            "4c6f62627952657761726454797065122d0a09736869705f747970651804" .
            "2001280e321a2e6d736767616d65646174612e536869704c6f6262795479" .
            "706542130a11636f6d2e66656c616e69612e6d736c6462620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}

