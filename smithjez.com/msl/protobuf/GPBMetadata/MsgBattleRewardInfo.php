<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleRewardInfo.proto

namespace GPBMetadata;

class MsgBattleRewardInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\RewardGrade::initOnce();
        \GPBMetadata\MsgUserItem::initOnce();
        \GPBMetadata\MsgUserMonster::initOnce();
        \GPBMetadata\MsgUserRune::initOnce();
        \GPBMetadata\MsgUserMonsterDictData::initOnce();
        \GPBMetadata\MsgUserMonsterSkillBook::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab9040a194d7367426174746c65526577617264496e666f2e70726f746f" .
            "120b6d736767616d65646174611a114d7367557365724974656d2e70726f" .
            "746f1a144d7367557365724d6f6e737465722e70726f746f1a114d736755" .
            "73657252756e652e70726f746f1a1c4d7367557365724d6f6e7374657244" .
            "696374446174612e70726f746f1a1d4d7367557365724d6f6e7374657253" .
            "6b696c6c426f6f6b2e70726f746f22f8020a134d7367426174746c655265" .
            "77617264496e666f12130a0b7265776172645f7479706518012001280d12" .
            "140a0c7265776172645f64656c746118022001280d122e0a0c7265776172" .
            "645f677261646518032001280e32182e6d736767616d65646174612e5265" .
            "77617264477261646512260a046974656d18042001280b32182e6d736767" .
            "616d65646174612e4d7367557365724974656d12310a0c757365725f6d6f" .
            "6e7374657218052001280b321b2e6d736767616d65646174612e4d736755" .
            "7365724d6f6e7374657212260a0472756e6518062001280b32182e6d7367" .
            "67616d65646174612e4d73675573657252756e6512370a0a736f756c5f73" .
            "746f6e6518072001280b32232e6d736767616d65646174612e4d73675573" .
            "65724d6f6e73746572446963744461746112380a0a736b696c6c5f626f6f" .
            "6b18082001280b32242e6d736767616d65646174612e4d7367557365724d" .
            "6f6e73746572536b696c6c426f6f6b12100a0869735f6576656e74180920" .
            "01280842130a11636f6d2e66656c616e69612e6d736c6462620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

