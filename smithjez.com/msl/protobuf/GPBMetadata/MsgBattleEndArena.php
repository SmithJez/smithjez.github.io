<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleEndArena.proto

namespace GPBMetadata;

class MsgBattleEndArena
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\BattleEndResultType::initOnce();
        \GPBMetadata\MsgBattleMonsterStat::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaa020a174d7367426174746c65456e644172656e612e70726f746f120b" .
            "6d736767616d65646174611a1a4d7367426174746c654d6f6e7374657253" .
            "7461742e70726f746f22c8010a114d7367426174746c65456e644172656e" .
            "6112150a0d6c6973745f6368756e6b5f696418012001280d12150a0d656e" .
            "656d795f757365725f696418022001280412300a06726573756c74180320" .
            "01280e32202e6d736767616d65646174612e426174746c65456e64526573" .
            "756c745479706512170a0f6172656e615f626174746c655f696418042001" .
            "2804123a0a0f6d6f6e5f726573756c745f6461746118052003280b32212e" .
            "6d736767616d65646174612e4d7367426174746c654d6f6e737465725374" .
            "617442130a11636f6d2e66656c616e69612e6d736c6462620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}

