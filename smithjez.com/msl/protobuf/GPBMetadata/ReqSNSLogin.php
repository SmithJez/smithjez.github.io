<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqSNSLogin.proto

namespace GPBMetadata;

class ReqSNSLogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\AccountPlatformType::initOnce();
        \GPBMetadata\MsgClientDeviceInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af5020a11526571534e534c6f67696e2e70726f746f120b6d736767616d" .
            "65646174611a194d7367436c69656e74446576696365496e666f2e70726f" .
            "746f229a020a0b526571534e534c6f67696e12320a08736e735f74797065" .
            "18012001280e32202e6d736767616d65646174612e4163636f756e74506c" .
            "6174666f726d54797065120f0a07757365725f696418022001280912110a" .
            "096163635f746f6b656e180320012809122f0a066f7074696f6e18042001" .
            "280e321f2e6d736767616d65646174612e526571534e534c6f67696e2e4f" .
            "7074696f6e123c0a12636c69656e745f6465766963655f696e666f180520" .
            "01280b32202e6d736767616d65646174612e4d7367436c69656e74446576" .
            "696365496e666f120c0a047575696418062001280922360a064f7074696f" .
            "6e12080a044e6f6e65100012120a0e55736543757272656e744461746110" .
            "01120e0a0a557365534e5344617461100242130a11636f6d2e66656c616e" .
            "69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

