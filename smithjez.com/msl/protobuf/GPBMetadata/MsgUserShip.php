<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserShip.proto

namespace GPBMetadata;

class MsgUserShip
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ShipLobbyType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac7010a114d736755736572536869702e70726f746f120b6d736767616d" .
            "65646174612287010a0b4d73675573657253686970120f0a07757365725f" .
            "6964180120012804122d0a09736869705f7479706518022001280e321a2e" .
            "6d736767616d65646174612e536869704c6f6262795479706512130a0b65" .
            "78706972655f6461746518032001280412150a0d73686f705f6974656d5f" .
            "756964180420012807120c0a046e616d6518052001280942130a11636f6d" .
            "2e66656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

