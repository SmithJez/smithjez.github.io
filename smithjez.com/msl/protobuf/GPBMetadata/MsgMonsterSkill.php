<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonsterSkill.proto

namespace GPBMetadata;

class MsgMonsterSkill
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MonsterSkillType::initOnce();
        \GPBMetadata\MonsterSkillTargetType::initOnce();
        \GPBMetadata\MsgMonsterSkillAction::initOnce();
        \GPBMetadata\MsgMonsterSkillTrigger::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adb030a154d73674d6f6e73746572536b696c6c2e70726f746f120b6d73" .
            "6767616d65646174611a1c4d6f6e73746572536b696c6c54617267657454" .
            "7970652e70726f746f1a1b4d73674d6f6e73746572536b696c6c41637469" .
            "6f6e2e70726f746f1a1c4d73674d6f6e73746572536b696c6c5472696767" .
            "65722e70726f746f22be020a0f4d73674d6f6e73746572536b696c6c120b" .
            "0a03756964180120012807120c0a046e616d65180220012807120c0a0464" .
            "657363180320012807122b0a047479706518042001280e321d2e6d736767" .
            "616d65646174612e4d6f6e73746572536b696c6c5479706512330a067461" .
            "7267657418052001280e32232e6d736767616d65646174612e4d6f6e7374" .
            "6572536b696c6c5461726765745479706512320a06616374696f6e180620" .
            "01280b32222e6d736767616d65646174612e4d73674d6f6e73746572536b" .
            "696c6c416374696f6e12150a0d7374617475735f65666665637418072001" .
            "280712340a077472696767657218082001280b32232e6d736767616d6564" .
            "6174612e4d73674d6f6e73746572536b696c6c54726967676572120c0a04" .
            "69636f6e18092001280912110a09736f756c5f73697a65180a2001280d42" .
            "130a11636f6d2e66656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
