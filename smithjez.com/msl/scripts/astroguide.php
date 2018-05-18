<?php

include __DIR__."/../vendor/autoload.php";

foreach (glob(__DIR__."/../protobuf/GPBMetadata/*.php") as $filename)
{
    include $filename;
}
foreach (glob(__DIR__."/../protobuf/Msggamedata/*.php") as $filename)
{
    include $filename;
}

use Msggamedata\MsgGameData;
use Msggamedata\MsgString;
use Msggamedata\MsgStatusEffect;
// use Msggamedata\MonsterElementType;
// use Msggamedata\MonsterElementType;

// $img_path = "<img src=../msl/img_combined/%s.png class=%s>";
$img_path = "../msl/image/%s.png";

ReadDB($_POST["lang"]);

function ReadDB($lang = "en")
{

  // echo "<script> console.log "Fff" " ."</script>";
  // $lang = "en";
  $db_string = __DIR__."/../db/string.".$lang.".pb.decrypted";
  $db_uid = __DIR__."/../db/uids.smj";
  $db_dict = __DIR__."/../db/monster_dict.smj";
  $db_monster = __DIR__."/../db/monsters.smj";
  $db_monster_skill = __DIR__."/../db/monster_skills.smj";
  $db_status_effect = __DIR__."/../db/status_effects.smj";
  $db_monster_type = __DIR__."/../db/monster_types.smj";
  $db_monster_upgrade_skill = __DIR__."/../db/monster_upgrade_skills.smj";
  $db_super_evolution_monster = __DIR__."/../db/super_evolution_monsters.smj";

  $gd_string = new MsgString();
  $gd = new MsgGameData();

  $gd_string->mergeFromString(GetProto($db_string));
  $str = $gd_string->getLocalStrings();

  $gd->mergeFromString(GetProto($db_super_evolution_monster));
  $super_evolution_monster = $gd->getSuperEvolutionMonsters();

  $gd->mergeFromString(GetProto($db_monster_upgrade_skill));
  $mon_upgrade_skill = $gd->getMonsterUpgradeSkills();

  $gd->mergeFromString(GetProto($db_monster));
  $mon = $gd->getMonsters();

  $gd->mergeFromString(GetProto($db_uid));
  $uid = $gd->getUids();

  $gd->mergeFromString(GetProto($db_dict));
  $dict = $gd->getMonsterDict();

  $gd->mergeFromString(GetProto($db_monster_type));
  $monster_type = $gd->getMonsterTypes();

  $gd->mergeFromString(GetProto($db_monster_skill));
  $monster_skill = $gd->getMonsterSkills();

  $gd->mergeFromString(GetProto($db_status_effect));
  $status_effect = $gd->getStatusEffects();

  $map_super_evolution_monster = array();
  foreach($super_evolution_monster as $val){
    $map_super_evolution_monster[$val->getFromMonster()] = $val->getToMonsters();
  }

  $map_mon_upgrade_skill = array();
  foreach($mon_upgrade_skill as $val) {
    $map_mon_upgrade_skill[$val->getUid()] = $val;
  }

  $map_text_to_uid = array();
  $map_uid_to_text = array();
  foreach($uid as $val){
    $map_uid_to_text[$val->getUid()] = $val->getStrUid();
    $map_text_to_uid[$val->getStrUid()] = $val->getUid();
  }

  $map_status_effect = array();
  foreach($status_effect as $val) {
    $map_status_effect[$val->getUid()] = $val;
  }

  $map_skill = array();
  foreach($monster_skill as $val) {
    $map_skill[$val->getUid()] = $val;
  }

  $map_str = array();
  foreach($str as $val) {
    $map_str[$val->getUid()] = $val->getText();
  }

  $map_mon = array();
  foreach($mon as $val) {
    $map_mon[$val->getUid()] = $val;
  }
  $map_mon_type = array();
  foreach($monster_type as $val) {
    $key = $val->getEvolution() . "_" . $val->getWeightType() . "_" . $val->getType();
    $map_mon_type[$key] = $val;
  }

  $ret = array();

  foreach($dict as $val) {
    $mon_uid = $val->getMonsterUid();
    $mon_msg = $map_mon[$mon_uid];




    $temp = AddArray($ret, $mon_msg, $map_str,
            $map_text_to_uid, $map_status_effect,
            $map_mon_type, $map_skill,
            $map_mon_upgrade_skill
          );
    array_push($ret, $temp);

    if(array_key_exists($mon_uid, $map_super_evolution_monster)) {
      $to_mons = $map_super_evolution_monster[$mon_uid];
      foreach($to_mons as $to_mon) {
        $temp_mon = $map_mon[$to_mon];

        $temp = AddArray($ret, $temp_mon, $map_str,
                $map_text_to_uid, $map_status_effect,
                $map_mon_type, $map_skill,
                $map_mon_upgrade_skill
              );
        array_push($ret, $temp);
      }
    }

  }
  echo json_encode($ret);
}

function AddArray($ret, $mon_msg, $map_str,
        $map_text_to_uid, $map_status_effect,
        $map_mon_type, $map_skill,
        $map_mon_upgrade_skill) {

  $mon_name = $map_str[$mon_msg->getName()];
  $mon_hp = $mon_msg->getDefHp();
  $mon_grade = $mon_msg->getBornGrade();
  $mon_evo = $mon_msg->getEvolution();
  $mon_element = ucfirst(GetElementString($mon_msg, $map_str, $map_text_to_uid));
  $mon_type = ucfirst(GetTypeString($mon_msg, $map_str, $map_text_to_uid));
  $mon_gender = GetGenderString($mon_msg);

  $mon_icon = sprintf($GLOBALS["img_path"], strtolower($mon_msg->getResourceName()), "");

  $skill_leader = $map_skill[$mon_msg->getLeaderSkill()];
  $skill_leader_effect = $map_status_effect[$skill_leader->getStatusEffect()];
  $mon_leader_icon = sprintf($GLOBALS["img_path"], strtolower(str_replace(".","_", $skill_leader->getIcon())),"");
  $mon_leader_name = $map_str[$skill_leader_effect->getName()];
  $mon_leader_desc = GetFormattedDescString($map_str[$skill_leader_effect->getDesc()], $skill_leader_effect,null, 0, true);

  // $active_ori_desc, $active_effect, null , 0, false

  $mon_skillbook = "No";

  $passive_skill = $map_skill[$mon_msg->getDefaultSkill()];
  $passive_action = $passive_skill->getAction();
  $passive_effect = $map_status_effect[$mon_msg->getDefaultSkillStatusEffectBeyond()];

  $mon_passive_icon = sprintf($GLOBALS["img_path"], strtolower(str_replace(".","_", $passive_skill->getIcon())),"");
  $mon_passive_effect_sub_type = strtolower(str_replace("SEST","se", ReadEnumFromNumber("msggamedata\MsgStatusEffect_StatusEffectSubType", $passive_effect->getSubType())));
  $mon_passive_effect_icon = sprintf($GLOBALS["img_path"], strtolower($mon_passive_effect_sub_type), "");

  $passive_ori_desc = $map_str[$passive_effect->getDesc()];
  $skill_level = $mon_msg->getSkillLevel();



  $active_skill = $map_skill[$mon_msg->getActiveSkill()];
  $active_action = $active_skill->getAction();
  $active_effect = $map_status_effect[$mon_msg->getActiveSkillStatusEffectBeyond()];

  $mon_active_icon = sprintf($GLOBALS["img_path"], strtolower(str_replace(".","_", $active_skill->getIcon())),"");
  $mon_active_effect_sub_type = strtolower(str_replace("SEST","se", ReadEnumFromNumber("msggamedata\MsgStatusEffect_StatusEffectSubType", $active_effect->getSubType())));
  $mon_active_effect_icon = sprintf($GLOBALS["img_path"], strtolower($mon_active_effect_sub_type), "");

  $active_ori_desc = $map_str[$active_effect->getDesc()];



  $mon_passive_skill_book = array();
  $mon_active_skill_book = array();
  if ($skill_level > 0) {
      $skill_upgrade = $map_mon_upgrade_skill[$skill_level];
      $passive_upgrade_array = $skill_upgrade->getDefaultValues();
      $mon_passive_effect_desc = GetFormattedDescString($passive_ori_desc, $passive_effect, $passive_upgrade_array, 4, false);

      $active_upgrade_array = $skill_upgrade->getActiveValues();
      $mon_active_effect_desc = GetFormattedDescString($active_ori_desc, $active_effect, $active_upgrade_array, 4, false);

      $mon_skillbook = "Yes";
      foreach($passive_upgrade_array as $val) {
          $passive_upgrade_type = $val->getUpgradeType();
          $p = "";
          if($passive_upgrade_type == 1) {
            $p = "Damage +" . round($val->getVal() * 100) . "%";
          }
          elseif ($passive_upgrade_type == 2) {
            $p = "Effect + " . round($val->getVal() * 100) . "%";
          }
          elseif ($passive_upgrade_type == 3) {
            $p = "Chance + " . round($val->getVal() * 100) . "%";
          }
          elseif ($passive_upgrade_type == 4) {
            $p = "Duration + " . $val->getTurn();
          }
          $mon_passive_skill_book[count($mon_passive_skill_book)] = $p;
      }

      foreach($active_upgrade_array as $val) {
          $active_upgrade_type = $val->getUpgradeType();
          $a = "";
          if($active_upgrade_type == 1) {
            $a = "Damage +" . round($val->getVal() * 100) . "%";
          }
          elseif ($active_upgrade_type == 2) {
            $a = "Effect + " . round($val->getVal() * 100) . "%";
          }
          elseif ($active_upgrade_type == 3) {
            $a = "Chance + " . round($val->getVal() * 100) . "%";
          }
          elseif ($active_upgrade_type == 4) {
            $a = "Duration + " . $val->getTurn();
          }
          $mon_active_skill_book[count($mon_active_skill_book)] = $a;
      }

  } else {
      $mon_passive_effect_desc = GetFormattedDescString($passive_ori_desc, $passive_effect, null , 0, false);
      for($i = 0; $i < 4; $i++) {
        $mon_passive_skill_book[$i] = "-";
      }

      $mon_active_effect_desc = GetFormattedDescString($active_ori_desc, $active_effect, null , 0, false);
      for($i = 0; $i < 4; $i++) {
        $mon_active_skill_book[$i] = "-";
      }
  }

  $con_skill = $mon_msg->getCondActiveSkill();

  if($con_skill > 0) {
    $con_active_skill = $map_skill[$mon_msg->getCondActiveSkill()];
    $con_active_action = $con_active_skill->getAction();
    $con_active_effect = $map_status_effect[$mon_msg->getCondActiveSkillStatusEffectBeyond()];
    $mon_con_active_effect_sub_type = strtolower(str_replace("SEST","se", ReadEnumFromNumber("msggamedata\MsgStatusEffect_StatusEffectSubType", $con_active_effect->getSubType())));

    $mon_con_active_icon = sprintf($GLOBALS["img_path"], strtolower(str_replace(".","_", $con_active_skill->getIcon())),"");
    $mon_con_active_name = $map_str[$con_active_skill->getName()];
    $mon_con_active_desc = $map_str[$con_active_skill->getDesc()];
    $mon_con_active_type = ReadEnumFromNumber("msggamedata\MsgMonsterSkillAction_ActionType",  $con_active_action->getType());
    $mon_con_active_mul = round($con_active_action->getWeight() * 100) . "%";
    $mon_con_active_soul_size = $con_active_skill->getSoulSize();
    $mon_con_active_target = GetSkillTargetString($con_active_skill);
    $mon_con_active_effect_icon = sprintf($GLOBALS["img_path"], strtolower($mon_con_active_effect_sub_type), "");
    //
    $con_active_ori_desc = $map_str[$con_active_effect->getDesc()];
    $mon_con_active_effect_name = $map_str[$con_active_effect->getName()];
    if ($skill_level > 0) {
        $mon_con_active_effect_desc = GetFormattedDescString($con_active_ori_desc, $con_active_effect, $active_upgrade_array , 4, false);

    } else {
        $mon_con_active_effect_desc = GetFormattedDescString($con_active_ori_desc, $con_active_effect, null , 0, false);
    }

    $mon_con_active_effect_duration = $con_active_effect->getTurn();
    $mon_con_active_effect_chance = round ($con_active_effect->getProb() * 100) . "%";
    $mon_con_active_effect_multiplier = round( $con_active_effect->getVFloat() * 100 ) . "%";
    $mon_con_active_effect_value = $con_active_effect->getVInt();
  }
  else {
    $mon_con_active_icon = "";
    $mon_con_active_name = "-";
    $mon_con_active_desc = "-";
    $mon_con_active_type = "-";
    $mon_con_active_mul = "-";
    $mon_con_active_soul_size = "-";
    $mon_con_active_target = "-";
    $mon_con_active_effect_icon = "";
    // $mon_con_active_effect_sub_type = "-";
    $mon_con_active_effect_name = "-";
    $mon_con_active_effect_desc = "-";
    $mon_con_active_effect_duration = "-";
    $mon_con_active_effect_chance = "-";
    $mon_con_active_effect_multiplier = "-";
    $mon_con_active_effect_value = "-";

  }


  $mon_stat = GetMonStat($mon_msg, $map_mon_type);
  $temp = array(
    "id"=>count($ret),
    "icon"=> $mon_icon,
    "name"=> $mon_name,
    "element"=> $mon_element,
    "grade"=> $mon_grade,
    "evo"=> $mon_evo,
    "type"=> $mon_type,
    "gender"=> $mon_gender,
    "skillbook"=> $mon_skillbook,
    "hp"=> number_format(round( $mon_stat["hp"])),
    "atk"=> number_format(round( $mon_stat["attack"])),
    "def"=> number_format(round( $mon_stat["defence"])),
    "heal"=> number_format(round( $mon_stat["heal"])),
    "crit_dmg"=> number_format(round( $mon_stat["crit_damage"])) . "%" ,
    "crit_rate"=> number_format(round( $mon_stat["crit_rate"])) . "%",
    "resist"=> number_format(round( $mon_stat["resist"])) . "%",
    "sp"=> $mon_msg->getMp(),
    "sp_recovery"=> $mon_msg->getMpRecovery(),
    "leader_icon"=> $mon_leader_icon,
    "leader_name"=> $mon_leader_name,
    "leader_desc"=> $mon_leader_desc,
    "passive_icon"=> $mon_passive_icon,
    "passive_name"=> $map_str[$passive_skill->getName()],
    "passive_desc"=> $map_str[$passive_skill->getDesc()],
    "passive_type"=> ReadEnumFromNumber("msggamedata\MsgMonsterSkillAction_ActionType",  $passive_action->getType()),
    "passive_multiplier"=> round($passive_action->getWeight() * 100) . "%",
    "passive_orb_size"=> $passive_skill->getSoulSize(),
    "passive_target"=> GetSkillTargetString($passive_skill),
    "passive_effect_icon"=> $mon_passive_effect_icon,
    "passive_effect_name"=> $map_str[$passive_effect->getName()],
    "passive_effect_desc"=> $mon_passive_effect_desc,
    "passive_effect_duration"=> $passive_effect->getTurn(),
    "passive_effect_chance"=> round ($passive_effect->getProb() * 100) . "%",
    "passive_effect_multiplier"=> round( $passive_effect->getVFloat() * 100 ) . "%",
    "passive_effect_value"=> $passive_effect->getVInt(),
    "passive_upgrade_1"=> $mon_passive_skill_book[0],
    "passive_upgrade_2"=> $mon_passive_skill_book[1],
    "passive_upgrade_3"=> $mon_passive_skill_book[2],
    "passive_upgrade_4"=> $mon_passive_skill_book[3],

    "active_icon"=> $mon_active_icon,
    "active_name"=> $map_str[$active_skill->getName()],
    "active_desc"=> $map_str[$active_skill->getDesc()],
    "active_type"=> ReadEnumFromNumber("msggamedata\MsgMonsterSkillAction_ActionType",  $active_action->getType()),
    "active_multiplier"=> round($active_action->getWeight() * 100) . "%",
    "active_orb_size"=> $active_skill->getSoulSize(),
    "active_target"=> GetSkillTargetString($active_skill),
    "active_effect_icon"=> $mon_active_effect_icon,
    "active_effect_name"=> $map_str[$active_effect->getName()],
    "active_effect_desc"=> $mon_active_effect_desc,
    "active_effect_duration"=> $active_effect->getTurn(),
    "active_effect_chance"=> round ($active_effect->getProb() * 100) . "%",
    "active_effect_multiplier"=> round( $active_effect->getVFloat() * 100 ) . "%",
    "active_effect_value"=> $active_effect->getVInt(),
    "active_upgrade_1"=> $mon_active_skill_book[0],
    "active_upgrade_2"=> $mon_active_skill_book[1],
    "active_upgrade_3"=> $mon_active_skill_book[2],
    "active_upgrade_4"=> $mon_active_skill_book[3],

    "con_active_icon"=> $mon_con_active_icon,
    "con_active_name"=> $mon_con_active_name,
    "con_active_desc"=> $mon_con_active_desc,
    "con_active_type"=> $mon_con_active_type,
    "con_active_multiplier"=> $mon_con_active_mul,
    "con_active_orb_size"=> $mon_con_active_soul_size,
    "con_active_target"=> $mon_con_active_target,
    "con_active_effect_icon"=> $mon_con_active_effect_icon,
    "con_active_effect_name"=> $mon_con_active_effect_name,
    "con_active_effect_desc"=> $mon_con_active_effect_desc,
    "con_active_effect_duration"=> $mon_con_active_effect_duration,
    "con_active_effect_chance"=> $mon_con_active_effect_chance,
    "con_active_effect_multiplier"=> $mon_con_active_effect_multiplier,
    "con_active_effect_value"=> $mon_con_active_effect_value,

  );

  return $temp;
}

function GetUpgradedSkillDeltaValue($skill_datas, $skill_lev, $original_se) {
  $skill_damage = 0;
  $new_se = new MsgStatusEffect();
  for($index = 0; $index < $skill_lev; ++$index) {
    $skill_data = $skill_datas[$index];
    if($skill_data != null) {
      if($skill_data->getUpgradeType() == 1) {
        $skill_damage +=$skill_data->getVal();
      }
      elseif ($skill_data->getUpgradeType() == 3) {
        $temp = $new_se->getProb() + $skill_data->getVal();
        $new_se->setProb($temp);
        $new_se->setProb(Clamp($new_se->getProb(), 0, 1 ));
      }
      elseif ($skill_data->getUpgradeType() == 4) {
        $temp_turn = $new_se->getTurn() + $skill_data->getTurn();
        $new_se->setTurn($temp_turn);
      }
      elseif ($skill_data->getUpgradeType() == 2) {
        if($original_se->getVInt() > 0) {
          $temp_val = $new_se->getVInt() + ($original_se->getVInt() * $skill_data->getVal());
          $new_se->setVInt($temp_val);
        }
        else {
          $temp_float = $new_se->getVFloat() + $skill_data->getVal();
          $new_se->setVFloat($temp_float);
        }
      }
    }
  }
  return $new_se;
}

function Clamp($current, $min, $max) {
    return max($min, min($max, $current));
}

function GetSkillTargetString($monster_skill) {
  $ret = "";
  $val = $monster_skill->getTarget();
  switch ($val) {
    case 1:
      $ret = "Single";
      break;
    case 2:
      $ret = "All";
      break;
    case 3:
      $ret = "Allies";
      break;
    case 4:
      $ret = "All Team";
      break;
    default:
      $ret = "";
      break;
  }
  return $ret;
}

function GetGenderString($mon_msg) {
  $ret = "";
  $val = $mon_msg->getGenderType();
  switch ($val) {
    case 1:
      $ret = "♂"; //"&#9794";
      break;
    case 2:
      $ret = "♀"; //"&#9792";  //
      break;
    default:
      $ret = "-";
      break;
  }
  return $ret;
}

function GetTypeString($mon_msg, $map_str, $map_text_to_uid) {
  $ret = "";
  $val = $mon_msg->getDefStatType();
  switch ($val) {
    case 1:
      $ret = $map_str[$map_text_to_uid["ustr.monster.type.attack"]];
      break;
    case 2:
      $ret = $map_str[$map_text_to_uid["ustr.monster.type.defence"]];
      break;
    case 3:
      $ret = $map_str[$map_text_to_uid["ustr.monster.type.heal"]];
      break;
    case 4:
      $ret = $map_str[$map_text_to_uid["ustr.monster.type.balance"]];
      break;
    case 5:
      $ret = $map_str[$map_text_to_uid["ustr.monster.type.hp"]];
      break;
    default:
      $ret = "";
      break;
  }

  return $ret;
}

function GetElementString($msg_mon, $map_str, $map_text_to_uid){
  $ret = "";
  $element = $msg_mon->getElement();
  switch ($element) {
    case 2:
      $ret = $map_str[$map_text_to_uid["str.monster.element.fire"]];
      break;
    case 3:
      $ret = $map_str[$map_text_to_uid["str.monster.element.water"]];
      break;
    case 4:
      $ret = $map_str[$map_text_to_uid["str.monster.element.tree"]];
      break;
    case 5:
      $ret = $map_str[$map_text_to_uid["str.monster.element.light"]];
      break;
    case 6:
      $ret = $map_str[$map_text_to_uid["str.monster.element.dark"]];
      break;
    default:
      $ret = "";
      break;
  }

  return $ret;
}

function GetProto($file_path) {
  $open = fopen($file_path, "rb") or die("Error");
  $raw = fread($open, filesize($file_path));
  fclose($open);
  return $raw;
}

function GetGradeIcon ($grade) {
  return sprintf($GLOBALS["img_path"], "s".$grade."_","img_3" );
}
function GetEvoIcon ($evo, $element) {
  $refine_element = ReadEnumFromNumber("msggamedata\MonsterElementType", $element);
  $final_element = str_replace("ME_", "", $refine_element);
  // $final_element = str_replace("Tree","Wood", $final_element);
  $final_element = strtolower($final_element);
  $cla = "monster_icon img_2";
  return sprintf($GLOBALS["img_path"], "frame_evo".$evo."_".$final_element, $cla);
}

function ReadEnumFromNumber($class, $number) {
  $fooClass = new ReflectionClass($class);
  $cons = $fooClass->getConstants();
  $con_name = null;
  foreach ($cons as $name => $value){
    if($value == $number){
      $con_name = $name;
      break;
    }
  }
  return $con_name;
}

function GetMonStat($mon_msg, $map_mon_type, $lvl = 60, $awaken = 0, $mon_grade = 6){
  $mon_type = $map_mon_type[GetMonsterType($mon_msg)];
  $mon_grade_weight = ($mon_grade - 1) / 10;
  $mon_sp = $mon_type->getSp();
  // $mon_sp = 20;
  $num1 = $mon_sp * $mon_type->getAttackWeight();
  $num2 = $mon_sp * $mon_type->getDefenceWeight();
  $num3 = $mon_sp * $mon_type->getHealWeight();
  $num4 = $mon_sp - ($num1 + $num2 + $num3);
  $num5 = $num1 + $mon_msg->getDefAttack();
  $num6 = $num2 + $mon_msg->getDefDefence();
  $num7 = $num3 + $mon_msg->getDefHeal();
  $num8 = $num4 + $mon_msg->getDefHp();
  $num9 = $num5 + $num5 * $mon_grade_weight;
  $num10 = $num6 + $num6 * $mon_grade_weight;
  $num11 = $num7 + $num7 * $mon_grade_weight;
  $num12 = $num8 + $num8 * $mon_grade_weight;

  $num1_1 = $num9 * $mon_msg->getIncAttack();
  $num2_1 = $num10 * $mon_msg->getIncDefence();
  $num3_1 = $num11 * $mon_msg->getIncHeal();
  $num4_1 = $num12 * $mon_msg->getIncHp();
  $num5_1 = $lvl - 1;

  $awaken_mon = 1 + ($awaken * 0.05);

  $attack = ($num9 + $num1_1 * $num5_1) * $awaken_mon;
  $defence = ($num10 + $num2_1 * $num5_1) * $awaken_mon;
  $heal = ($num11 + $num3_1 * $num5_1) * $awaken_mon;
  $hp = ($num12 + $num4_1 * $num5_1) * $awaken_mon;
  $crit_rate = $mon_msg->getCriticalProb() * 100;
  $crit_damage = ($mon_msg->getCriticalDamage() - 1) * 100;
  $resist = $mon_msg->getStatusEffectResistance() * 100;

  return array(
    "attack"=>$attack,
    "defence"=>$defence,
    "heal"=>$heal,
    "hp"=>$hp,
    "crit_rate"=>$crit_rate,
    "crit_damage"=>$crit_damage,
    "resist"=>$resist);

}

function GetMonsterType($mon_msg) {
  $key = $mon_msg->getEvolution() . "_" . "1" . "_" . $mon_msg->getDefStatType();
  return $key;
}

function GetFormattedDescString($ori_desc, $m, $skill_datas = null, $skill_lev = 0, $is_leader = false) {
  $format = $ori_desc;
  $original_format = "{0}(+{1})";
  $str1 = round ($m->getProb() * 100);
  $str2 = $m->getTurn();
  $v_int = round( $m->getVFloat() * 100 );
  if ($v_int == 0) {
    $v_int = $m->getVInt();
  }
  $str3 = $v_int;
  if($skill_datas != null) {
    if($skill_lev > 0) {
      $new_se = GetUpgradedSkillDeltaValue($skill_datas, $skill_lev, $m);
      if($new_se->getTurn() > 0 || $new_se->getProb() > 0 || $new_se->getVFloat() > 0 || $new_se->getVInt() > 0) {
        if($new_se->getProb() > 0) {
          $str1 = str_replace("{0}", $str1, $original_format);
          $str1 = str_replace("{1}", round($new_se->getProb() * 100), $str1 );
        }
        if($new_se->getTurn() > 0) {
          $str2 = str_replace("{0}", $str2, $original_format);
          $str2 = str_replace("{1}", ($new_se->getTurn()), $str2 );
        }
        if($new_se->getVFloat() > 0) {
          $str3 = str_replace("{0}", $str3, $original_format);
          $str3 = str_replace("{1}", round($new_se->getVFloat() * 100), $str3 );
        }
        if($new_se->getVInt() > 0) {
          $str3 = str_replace("{0}", $str3, $original_format);
          $str3 = str_replace("{1}", ($new_se->getVInt()), $str3 );
        }
      }
    }
  }

  $text = $ori_desc;

  $p = "\[(.{6}?)]";
  $replace_text = "<span style=color:#${text}>";

  $ret = str_replace("[-]", "</span>", $text);
  $ret = str_replace("[", "<span style=color:#", $ret );
  $ret = str_replace("]", ">", $ret);

  if($is_leader) {
    // $ret = str_replace("{0}", $str1, $ret);
    $ret = str_replace("{0}", $str3 . "-" . ($str3 + 5), $ret);
    $ret = str_replace("FFD428", "B22222", $ret);
  } else {
    $ret = str_replace("{0}", $str1, $ret);
    $ret = str_replace("{1}", $str2, $ret);
    $ret = str_replace("{2}", $str3, $ret);
    $ret = str_replace("FFD428", "B22222", $ret);
  }

  return $ret;



}

function SetSkillDesc ($ori_desc, $m, $is_leader = false) {
  $text = $ori_desc;
  $text_2 = "";
  $argChance = round($m->getProb() * 100);
  $arg = $argChance;
  $argDuration = $m->getTurn();
  $arg2 = $argDuration;
  $num = round($m->getVFloat() * 100);
  $value = "";

  if ($num == 0) {
    $value = $m->getVInt();
  } else {
    $value = $num;
  }

  $arg3 = $value;

  $p = "\[(.{6}?)]";
  $replace_text = "<span style=color:#${text}>";

  $ret = str_replace("[-]", "</span>", $text);
  $ret = str_replace("[", "<span style=color:#", $ret );
  $ret = str_replace("]", ">", $ret);

  if($is_leader) {
    $ret = str_replace("{0}", $num . "-" . ($num + 5), $ret);
  } else {
    $ret = str_replace("{2}", $num , str_replace("{1}", $arg2, str_replace("{0}", $arg, $ret)));
  }

  return $ret;



  //$text2 = preg_replace($p, ,  $text);





}



?>
