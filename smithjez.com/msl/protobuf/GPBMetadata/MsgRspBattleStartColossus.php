<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRspBattleStartColossus.proto

namespace GPBMetadata;

class MsgRspBattleStartColossus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgBattleStartBasicInfo::initOnce();
        \GPBMetadata\MsgUserMonsterSlot::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afd010a1f4d7367527370426174746c655374617274436f6c6f73737573" .
            "2e70726f746f120b6d736767616d65646174611a184d7367557365724d6f" .
            "6e73746572536c6f742e70726f746f2295010a194d736752737042617474" .
            "6c655374617274436f6c6f7373757312380a0a62617369635f696e666f18" .
            "012001280b32242e6d736767616d65646174612e4d7367426174746c6553" .
            "746172744261736963496e666f123e0a15636f6c6f737375735f6d6f6e73" .
            "7465725f736c6f7418022001280b321f2e6d736767616d65646174612e4d" .
            "7367557365724d6f6e73746572536c6f7442130a11636f6d2e66656c616e" .
            "69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

