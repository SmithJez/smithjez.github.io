<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspContract.proto

namespace GPBMetadata;

class RspContract
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgContract::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab2010a11527370436f6e74726163742e70726f746f120b6d736767616d" .
            "656461746122730a0b527370436f6e747261637412380a0f636f6e747261" .
            "63745f73746174757318012001280e321f2e6d736767616d65646174612e" .
            "4d7367436f6e74726163742e537461747573122a0a08636f6e7472616374" .
            "18022001280b32182e6d736767616d65646174612e4d7367436f6e747261" .
            "637442130a11636f6d2e66656c616e69612e6d736c6462620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}
