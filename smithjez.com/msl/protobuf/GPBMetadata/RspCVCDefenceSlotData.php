<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspCVCDefenceSlotData.proto

namespace GPBMetadata;

class RspCVCDefenceSlotData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\CVCBattleUsedMonsterSlotData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaa010a1b527370435643446566656e6365536c6f74446174612e70726f" .
            "746f120b6d736767616d656461746122610a15527370435643446566656e" .
            "6365536c6f744461746112480a15646566656e6465725f6d6f6e73746572" .
            "5f736c6f7418012001280b32292e6d736767616d65646174612e43564342" .
            "6174746c65557365644d6f6e73746572536c6f744461746142130a11636f" .
            "6d2e66656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

