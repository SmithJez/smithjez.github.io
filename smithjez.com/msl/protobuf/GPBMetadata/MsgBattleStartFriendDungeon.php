<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleStartFriendDungeon.proto

namespace GPBMetadata;

class MsgBattleStartFriendDungeon
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgMonsterSlotData::initOnce();
        \GPBMetadata\FriendDungeonType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a95020a214d7367426174746c655374617274467269656e6444756e6765" .
            "6f6e2e70726f746f120b6d736767616d65646174611a17467269656e6444" .
            "756e67656f6e547970652e70726f746f22ac010a1b4d7367426174746c65" .
            "5374617274467269656e6444756e67656f6e12120a0a64756e67656f6e5f" .
            "696418012001280412350a0c6d6f6e737465725f736c6f7418022001280b" .
            "321f2e6d736767616d65646174612e4d73674d6f6e73746572536c6f7444" .
            "61746112140a0c66696e645f757365725f6964180320012804122c0a0474" .
            "79706518042001280e321e2e6d736767616d65646174612e467269656e64" .
            "44756e67656f6e5479706542130a11636f6d2e66656c616e69612e6d736c" .
            "6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

