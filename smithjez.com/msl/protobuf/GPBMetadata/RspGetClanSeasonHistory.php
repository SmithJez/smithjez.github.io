<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetClanSeasonHistory.proto

namespace GPBMetadata;

class RspGetClanSeasonHistory
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ClanBattleSeasonState::initOnce();
        \GPBMetadata\MsgClanSeasonHistory::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af6010a1d527370476574436c616e536561736f6e486973746f72792e70" .
            "726f746f120b6d736767616d65646174611a1a4d7367436c616e53656173" .
            "6f6e486973746f72792e70726f746f228e010a17527370476574436c616e" .
            "536561736f6e486973746f727912380a0c736561736f6e5f737461746518" .
            "012001280e32222e6d736767616d65646174612e436c616e426174746c65" .
            "536561736f6e537461746512390a0e736561736f6e5f686973746f727918" .
            "022001280b32212e6d736767616d65646174612e4d7367436c616e536561" .
            "736f6e486973746f727942130a11636f6d2e66656c616e69612e6d736c64" .
            "62620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

