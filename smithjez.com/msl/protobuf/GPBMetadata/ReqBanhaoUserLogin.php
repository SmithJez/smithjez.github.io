<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqBanhaoUserLogin.proto

namespace GPBMetadata;

class ReqBanhaoUserLogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ReqUserLogin::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9d010a1852657142616e68616f557365724c6f67696e2e70726f746f12" .
            "0b6d736767616d656461746122570a1252657142616e68616f557365724c" .
            "6f67696e122f0a0c726571557365724c6f67696e18012001280b32192e6d" .
            "736767616d65646174612e526571557365724c6f67696e12100a08706173" .
            "73776f726418022001280942130a11636f6d2e66656c616e69612e6d736c" .
            "6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

