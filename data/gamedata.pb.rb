# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgGameData.proto

require 'google/protobuf'

require 'MsgUid_pb'
require 'MsgUserLevel_pb'
require 'MsgMonster_pb'
require 'MsgMonsterType_pb'
require 'MsgMonsterLevel_pb'
require 'MsgMonsterSkill_pb'
require 'MsgRandom_pb'
require 'MsgSetting_pb'
require 'MsgShopItem_pb'
require 'MsgItem_pb'
require 'MsgStage_pb'
require 'MsgSubStage_pb'
require 'MsgStageMonster_pb'
require 'MsgStageMonsterGroup_pb'
require 'MsgDungeonStage_pb'
require 'MsgDungeonSubStage_pb'
require 'MsgStatusEffect_pb'
require 'MsgStartMonster_pb'
require 'MsgRune_pb'
require 'MsgSummon_pb'
require 'MsgRuneSetting_pb'
require 'MsgRuneRare_pb'
require 'MsgRuneOptionalEffect_pb'
require 'MsgRuneSetEffect_pb'
require 'MsgMonsterBeyond_pb'
require 'MsgDictItem_pb'
require 'MsgGiftSender_pb'
require 'MsgGiftTemplate_pb'
require 'MsgQuest_pb'
require 'MsgNPC_pb'
require 'MsgNPCTalkSequence_pb'
require 'MsgNPCTalkAuto_pb'
require 'MsgUserProfileIcon_pb'
require 'MsgMonsterEvolution_pb'
require 'MsgHelp_pb'
require 'MsgSubHelp_pb'
require 'MsgJojeShopSlot_pb'
require 'MsgMonsterAi_pb'
require 'MsgBattleMasterScript_pb'
require 'MsgArenaGrade_pb'
require 'MsgArenaSubGrade_pb'
require 'MsgMonsterEggCutScene_pb'
require 'MsgLoadingTemplate_pb'
require 'MsgLogTemplte_pb'
require 'MsgSupportMonster_pb'
require 'MsgCustomBtnSound_pb'
require 'MsgArenaSeason_pb'
require 'MsgChatLikeColor_pb'
require 'MsgDailyBonusSeason_pb'
require 'MsgDailyBonus_pb'
require 'MsgInfiniteSeason_pb'
require 'MsgInfiniteStage_pb'
require 'MsgInfiniteSubStage_pb'
require 'MsgMission_pb'
require 'MsgLobbyReward_pb'
require 'MsgCaptureDictItem_pb'
require 'MsgCredit_pb'
require 'MsgEnforcementValue_pb'
require 'MsgReviveMonster_pb'
require 'MsgPlatformAchievement_pb'
require 'MsgPackageQuest_pb'
require 'MsgCaptureKingSeason_pb'
require 'MsgCaptureKingGrade_pb'
require 'MsgClanEmblem_pb'
require 'MsgClanSeason_pb'
require 'MsgClanSeasonBattle_pb'
require 'MsgClanRewardGrade_pb'
require 'MsgClanRewardTier_pb'
require 'MsgClanStage_pb'
require 'MsgClanSubStage_pb'
require 'MsgClanBattleReward_pb'
require 'MsgDailyBonusReturnUserSequence_pb'
require 'MsgContractorSeason_pb'
require 'MsgGachaShopEventBanner_pb'
require 'MsgBingoSeason_pb'
require 'MsgBingoSeasonData_pb'
require 'MsgBingoTimeData_pb'
require 'MsgMonsterUpgradeSkill_pb'
require 'MsgMonsterUpgradeSkillPrice_pb'
require 'MsgClanAttendanceReward_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_message "msggamedata.MsgGameData" do
    optional :version, :uint32, 1
    repeated :uids, :message, 2, "msggamedata.MsgUid"
    repeated :user_levels, :message, 3, "msggamedata.MsgUserLevel"
    repeated :monsters, :message, 4, "msggamedata.MsgMonster"
    repeated :monster_types, :message, 5, "msggamedata.MsgMonsterType"
    repeated :monster_levels, :message, 7, "msggamedata.MsgMonsterLevel"
    repeated :monster_skills, :message, 8, "msggamedata.MsgMonsterSkill"
    repeated :randoms, :message, 9, "msggamedata.MsgRandom"
    repeated :settings, :message, 10, "msggamedata.MsgSetting"
    repeated :shop_items, :message, 11, "msggamedata.MsgShopItem"
    repeated :items, :message, 12, "msggamedata.MsgItem"
    repeated :stages, :message, 13, "msggamedata.MsgStage"
    repeated :substages, :message, 14, "msggamedata.MsgSubStage"
    repeated :stage_monsters, :message, 15, "msggamedata.MsgStageMonster"
    repeated :stage_monster_groups, :message, 16, "msggamedata.MsgStageMonsterGroup"
    repeated :dungeon_stages, :message, 17, "msggamedata.MsgDungeonStage"
    repeated :dungeon_substages, :message, 18, "msggamedata.MsgDungeonSubStage"
    repeated :dungeon_monsters, :message, 19, "msggamedata.MsgStageMonster"
    repeated :dungeon_monster_groups, :message, 20, "msggamedata.MsgStageMonsterGroup"
    repeated :status_effects, :message, 21, "msggamedata.MsgStatusEffect"
    repeated :start_monsters, :message, 22, "msggamedata.MsgStartMonster"
    repeated :runes, :message, 23, "msggamedata.MsgRune"
    repeated :summons, :message, 24, "msggamedata.MsgSummon"
    repeated :rune_settings, :message, 25, "msggamedata.MsgRuneSetting"
    repeated :rune_rares, :message, 26, "msggamedata.MsgRuneRare"
    repeated :rune_optional_effects, :message, 27, "msggamedata.MsgRuneOptionalEffect"
    repeated :rune_set_effects, :message, 28, "msggamedata.MsgRuneSetEffect"
    repeated :monster_beyond_pricing, :message, 29, "msggamedata.MsgMonsterBeyond"
    repeated :monster_dict, :message, 30, "msggamedata.MsgDictItem"
    repeated :gift_sender, :message, 31, "msggamedata.MsgGiftSender"
    repeated :gift_template, :message, 32, "msggamedata.MsgGiftTemplate"
    repeated :quests, :message, 33, "msggamedata.MsgQuest"
    repeated :npcs, :message, 34, "msggamedata.MsgNPC"
    repeated :npc_talk_seqs, :message, 35, "msggamedata.MsgNPCTalkSequence"
    repeated :npc_auto_talks, :message, 36, "msggamedata.MsgNPCTalkAuto"
    repeated :user_profile_icon, :message, 37, "msggamedata.MsgUserProfileIcon"
    repeated :monster_evolution_pricing, :message, 38, "msggamedata.MsgMonsterEvolution"
    repeated :helps, :message, 39, "msggamedata.MsgHelp"
    repeated :subhelps, :message, 40, "msggamedata.MsgSubHelp"
    repeated :joje_shop_slots, :message, 41, "msggamedata.MsgJojeShopSlot"
    repeated :monster_ais, :message, 42, "msggamedata.MsgMonsterAi"
    repeated :battle_master_script, :message, 43, "msggamedata.MsgBattleMasterScript"
    repeated :arena_grade, :message, 44, "msggamedata.MsgArenaGrade"
    repeated :arena_sub_grade, :message, 45, "msggamedata.MsgArenaSubGrade"
    repeated :monster_egg_cutscenes, :message, 46, "msggamedata.MsgMonsterEggCutScene"
    repeated :loading_template, :message, 47, "msggamedata.MsgLoadingTemplate"
    repeated :log_template, :message, 48, "msggamedata.MsgLogTemplte"
    repeated :support_monsters, :message, 50, "msggamedata.MsgSupportMonster"
    repeated :custom_btn_sounds, :message, 51, "msggamedata.MsgCustomBtnSound"
    repeated :arena_seasons, :message, 52, "msggamedata.MsgArenaSeason"
    repeated :arena_attacker_gain_winning_point, :uint32, 53
    repeated :arena_defender_gain_winning_point, :uint32, 54
    repeated :chat_like_color, :message, 55, "msggamedata.MsgChatLikeColor"
    repeated :daily_bonus_seasons, :message, 56, "msggamedata.MsgDailyBonusSeason"
    repeated :daily_bonuses, :message, 57, "msggamedata.MsgDailyBonus"
    repeated :infinite_seasons, :message, 58, "msggamedata.MsgInfiniteSeason"
    repeated :infinite_stages, :message, 59, "msggamedata.MsgInfiniteStage"
    repeated :infinite_substages, :message, 60, "msggamedata.MsgInfiniteSubStage"
    repeated :infinite_monsters, :message, 61, "msggamedata.MsgStageMonster"
    repeated :infinite_monster_groups, :message, 62, "msggamedata.MsgStageMonsterGroup"
    repeated :missions, :message, 63, "msggamedata.MsgMission"
    repeated :lobby_rewards, :message, 64, "msggamedata.MsgLobbyReward"
    repeated :monster_capture_dicts, :message, 65, "msggamedata.MsgCaptureDictItem"
    repeated :credit, :message, 66, "msggamedata.MsgCredit"
    repeated :enforcement_values, :message, 67, "msggamedata.MsgEnforcementValue"
    repeated :revive_monsters, :message, 68, "msggamedata.MsgReviveMonster"
    repeated :platform_achievements, :message, 69, "msggamedata.MsgPlatformAchievement"
    repeated :packages, :message, 70, "msggamedata.MsgPackageQuest"
    repeated :captureking_seasons, :message, 71, "msggamedata.MsgCaptureKingSeason"
    repeated :captureking_grades, :message, 72, "msggamedata.MsgCaptureKingGrade"
    repeated :clan_emblems, :message, 73, "msggamedata.MsgClanEmblem"
    repeated :clan_seasons, :message, 74, "msggamedata.MsgClanSeason"
    repeated :clan_season_battles, :message, 75, "msggamedata.MsgClanSeasonBattle"
    repeated :clan_grades, :message, 76, "msggamedata.MsgClanRewardGrade"
    repeated :clan_reward_tiers, :message, 77, "msggamedata.MsgClanRewardTier"
    repeated :clan_stages, :message, 78, "msggamedata.MsgClanStage"
    repeated :clan_substages, :message, 79, "msggamedata.MsgClanSubStage"
    repeated :clan_battle_rewards, :message, 80, "msggamedata.MsgClanBattleReward"
    repeated :daily_bonus_returnuser_sequences, :message, 81, "msggamedata.MsgDailyBonusReturnUserSequence"
    repeated :contractor_seasons, :message, 82, "msggamedata.MsgContractorSeason"
    repeated :gacha_shop_event_banners, :message, 83, "msggamedata.MsgGachaShopEventBanner"
    repeated :special_revive_monsters, :message, 84, "msggamedata.MsgReviveMonster"
    repeated :bingo_seasons, :message, 90, "msggamedata.MsgBingoSeason"
    repeated :bingo_season_datas, :message, 91, "msggamedata.MsgBingoSeasonData"
    repeated :bingo_time_datas, :message, 92, "msggamedata.MsgBingoTimeData"
    repeated :monster_upgrade_skills, :message, 93, "msggamedata.MsgMonsterUpgradeSkill"
    repeated :monster_upgrade_skill_pricing, :message, 94, "msggamedata.MsgMonsterUpgradeSkillPrice"
    repeated :clan_attendance_rewards, :message, 95, "msggamedata.MsgClanAttendanceReward"
  end
end

module Msggamedata
  MsgGameData = Google::Protobuf::DescriptorPool.generated_pool.lookup("msggamedata.MsgGameData").msgclass
end