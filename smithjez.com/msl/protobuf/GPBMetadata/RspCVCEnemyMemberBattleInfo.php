<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspCVCEnemyMemberBattleInfo.proto

namespace GPBMetadata;

class RspCVCEnemyMemberBattleInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserCVCMember::initOnce();
        \GPBMetadata\MsgCVCMemberSlotInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a81020a21527370435643456e656d794d656d626572426174746c65496e" .
            "666f2e70726f746f120b6d736767616d65646174611a1a4d73674356434d" .
            "656d626572536c6f74496e666f2e70726f746f2295010a1b527370435643" .
            "456e656d794d656d626572426174746c65496e666f12330a0c656e656d79" .
            "5f6d656d62657218012001280b321d2e6d736767616d65646174612e4d73" .
            "67557365724356434d656d62657212410a16656e656d795f6d656d626572" .
            "5f736c6f745f696e666f18022001280b32212e6d736767616d6564617461" .
            "2e4d73674356434d656d626572536c6f74496e666f42130a11636f6d2e66" .
            "656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
