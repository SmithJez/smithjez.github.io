<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqUserMonsterStore.proto

namespace GPBMetadata;

class ReqUserMonsterStore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MonsterStorageType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abf010a19526571557365724d6f6e7374657253746f72652e70726f746f" .
            "120b6d736767616d656461746122780a13526571557365724d6f6e737465" .
            "7253746f726512350a0c73746f726167655f7479706518012001280e321f" .
            "2e6d736767616d65646174612e4d6f6e7374657253746f72616765547970" .
            "6512100a0869735f73746f726518022001280812180a10757365725f6d6f" .
            "6e737465725f69647318032003280442130a11636f6d2e66656c616e6961" .
            "2e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

