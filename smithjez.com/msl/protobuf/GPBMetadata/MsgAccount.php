<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgAccount.proto

namespace GPBMetadata;

class MsgAccount
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\AccountType::initOnce();
        \GPBMetadata\AccountPushSetting::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad3020a104d73674163636f756e742e70726f746f120b6d736767616d65" .
            "646174611a184163636f756e745075736853657474696e672e70726f746f" .
            "22fa010a0a4d73674163636f756e7412120a0a6163636f756e745f696418" .
            "0120012804122e0a0c6163636f756e745f7479706518022001280e32182e" .
            "6d736767616d65646174612e4163636f756e745479706512320a09736d73" .
            "5f616c61726d18032001280e321f2e6d736767616d65646174612e416363" .
            "6f756e745075736853657474696e6712330a0a707573685f616c61726d18" .
            "042001280e321f2e6d736767616d65646174612e4163636f756e74507573" .
            "6853657474696e6712130a0b707269766174655f6b657918052001280912" .
            "120a0a7075626c69635f6b657918062001280912160a0e6163636f756e74" .
            "5f73746174757318072001280942130a11636f6d2e66656c616e69612e6d" .
            "736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
