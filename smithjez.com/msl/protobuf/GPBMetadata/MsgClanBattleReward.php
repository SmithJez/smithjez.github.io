<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgClanBattleReward.proto

namespace GPBMetadata;

class MsgClanBattleReward
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgClanRewardProb::initOnce();
        \GPBMetadata\MsgClanRewardMust::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aba020a194d7367436c616e426174746c655265776172642e70726f746f" .
            "120b6d736767616d65646174611a174d7367436c616e5265776172644d75" .
            "73742e70726f746f22d9010a134d7367436c616e426174746c6552657761" .
            "7264120b0a0375696418012001280712100a086465616c5f6d696e180220" .
            "01280d12100a086465616c5f6d617818032001280d12340a0c7265776172" .
            "645f70726f627318042003280b321e2e6d736767616d65646174612e4d73" .
            "67436c616e52657761726450726f6212340a0c7265776172645f6d757374" .
            "7318052003280b321e2e6d736767616d65646174612e4d7367436c616e52" .
            "65776172644d75737412160a0e7265776172645f67656e6572616c180620" .
            "01280d120d0a05677261646518072001280d42130a11636f6d2e66656c61" .
            "6e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

