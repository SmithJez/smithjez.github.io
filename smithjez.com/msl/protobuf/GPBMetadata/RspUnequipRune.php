<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUnequipRune.proto

namespace GPBMetadata;

class RspUnequipRune
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUser::initOnce();
        \GPBMetadata\MsgUserMonster::initOnce();
        \GPBMetadata\MsgUserRune::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80020a14527370556e657175697052756e652e70726f746f120b6d7367" .
            "67616d65646174611a144d7367557365724d6f6e737465722e70726f746f" .
            "1a114d73675573657252756e652e70726f746f2294010a0e527370556e65" .
            "7175697052756e6512220a047573657218012001280b32142e6d73676761" .
            "6d65646174612e4d73675573657212310a0c757365725f6d6f6e73746572" .
            "18022001280b321b2e6d736767616d65646174612e4d7367557365724d6f" .
            "6e73746572122b0a09757365725f72756e6518032001280b32182e6d7367" .
            "67616d65646174612e4d73675573657252756e6542130a11636f6d2e6665" .
            "6c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

