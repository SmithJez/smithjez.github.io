<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspRecommendMonsterAndParty.proto

namespace GPBMetadata;

class RspRecommendMonsterAndParty
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgRecommendMonster::initOnce();
        \GPBMetadata\MsgRecommendMonsterParty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aae020a215273705265636f6d6d656e644d6f6e73746572416e64506172" .
            "74792e70726f746f120b6d736767616d65646174611a1e4d73675265636f" .
            "6d6d656e644d6f6e7374657250617274792e70726f746f22be010a1b5273" .
            "705265636f6d6d656e644d6f6e73746572416e64506172747912190a1172" .
            "65636f6d6d656e645f646174655f6964180120012804123c0a127265636f" .
            "6d6d656e645f6d6f6e737465727318022003280b32202e6d736767616d65" .
            "646174612e4d73675265636f6d6d656e644d6f6e7374657212460a177265" .
            "636f6d6d656e645f6d6f6e737465725f706172747918032003280b32252e" .
            "6d736767616d65646174612e4d73675265636f6d6d656e644d6f6e737465" .
            "72506172747942130a11636f6d2e66656c616e69612e6d736c6462620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}
