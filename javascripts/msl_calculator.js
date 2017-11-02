goog.require('goog.dom');
goog.require('goog.net.XhrIo');

var stringMap = {};
var monsterMap = {};
var monsterNameMap = {};
var dictMap = {};
var monsterTypeMap = {};
var statusEffectMap = {};
var skillMap = {};
var superEvolutionMonsterMap = {};

var dunSubStageMap = {};
var monGroupMap = {};
var dunMonMap = {};
var monMap = {};
var monStageMap = {};

var playerRealHp;
var playerRealAtk;
var playerRealDef;
var playerRealHeal;

var playerRealCritDmg;
var playerRealCritRate;
var playerRealResist;

var enemyRealHp;
var enemyRealAtk;
var enemyRealDef;
var enemyRealHeal;

var selectedMonUid;

var cachedName;

var strHp, strAtk, strDef, strHeal, strCritDmg, strCritRate, strResist, strHealMyHp, strHealMyMp, strIncHp, strIncMp, strShield, strStun;

var runeSetEffectMap = {};

var runeEffectUnique = [];
var runeUnique = [];

var runeUniqueMap = {};
var runeEffectUniqueMap = {};
var arrayRuneRare = [];
var runeRareMap = {};
var runeOptionalEffectMap = {};
var runeOptionalEffectMapRefined = {};

function GetCahcedName() {
  var input_astromon = goog.dom.getElement("input_astromon_name");

  console.log(cachedName);
  input_astromon.value = cachedName;


}

function ClearAstromonName() {
  var input_astromon = goog.dom.getElement("input_astromon_name");
  cachedName = input_astromon.value;
  console.log(cachedName);
  input_astromon.value = "";
}

function ChangeAstromonEvent(needToClearElement) {
  // console.log(input_astromon);
  var imgIcon = goog.dom.getElement("img_mon_icon");

  var input_astromon = goog.dom.getElement("input_astromon_name");
  // console.log(monName.value);

  var monElementMap = {};

  for (i = 2; i <= 6; i++) {
    var tempKey = monsterNameMap[input_astromon.value + "|" + i];
    if (tempKey != undefined) {
      var elementName = toTitleCase(ReadEnumFromNumber(proto.msggamedata.MonsterElementType, tempKey[21]).replace("ME_", "").replace("TREE", "Wood"));
      monElementMap[elementName] = tempKey;
    }
  }

  cachedName = input_astromon.value;


  var domElementList = goog.dom.getElement("element_list");

  var currentElement = domElementList.value;

  if (needToClearElement) {
    goog.dom.removeChildren(domElementList);

    for (var key in monElementMap) {
      var option = goog.dom.createDom('option', "", key);
      goog.dom.appendChild(domElementList, option);
      if (currentElement == "") {
        option.text = key;
        domElementList.add(option);
        currentElement = key;
      } else {
        currentElement = domElementList.value;
      }
    }
  }






  // console.log(monElementMap);


  // SetElement
  imgIcon.setAttribute('src', 'img/' + monElementMap[currentElement][29] + '.png');

  var imgElement = goog.dom.getElement("img_mon_element");

  var evoStage = monElementMap[currentElement][28];
  var oriElement = currentElement.replace("Wood", "Tree").toLowerCase();

  // SetMonIcon
  imgElement.setAttribute('src', 'img/frame_evo' + evoStage + "_" + oriElement + '.png');

  var imgGrade = goog.dom.getElement("img_mon_grade");
  var gradeList = goog.dom.getElement("grade_list");



  var grade = gradeList.options[gradeList.selectedIndex].value;
  // SetMOnGrade
  imgGrade.setAttribute('src', 'img/s' + grade + '_.png');

  // var lvlList = goog.dom.getElement("lvl_list");
  // var selectedLv = lvlList.value;

  selectedMonUid = monElementMap[currentElement];
  SetSkill(selectedMonUid);

  UpdateLvlSelect(grade);

  // console.log(monElementMap[currentElement]);



  UpdateMonStat(grade);

  SumGem();
}

function CalculateBattleStat() {



}



function UpdateLvlSelect(grade) {
  var lvlList = goog.dom.getElement("lvl_list");
  var maxLvl = grade * 10;

  goog.dom.removeChildren(lvlList);

  for (i = maxLvl; i >= 1; i--) {
    var option = goog.dom.createDom('option', "", i.toString());
    goog.dom.appendChild(lvlList, option);

    lvlList.add(option);
  }

}


function UpdateStage() {

  var selectedStageDom = goog.dom.getElement("stage_list");
  var selectStageVal = selectedStageDom.options[selectedStageDom.selectedIndex].value;

  // console.log(selectStageVal);


  switch (selectStageVal) {

    case "dun_dragon":

      var file1 = "/data/dungeon_stages.smj";
      var key = "B_DayRuneDungeon";
      GenerateFloor(file1, key);

      break;
    case "dun_golem":

      var file1 = "/data/dungeon_stages.smj";
      var key = "B_AllDayRuneDungeon";
      GenerateFloor(file1, key);

      break;
    case "dun_colos":
      var file1 = "/data/dungeon_stages.smj";
      var key = "B_ColossusDungeon";
      GenerateFloor(file1, key);
      break;
    case "dun_toc":

      break;
    case "dun_clan":

      break;

    default:
      var file1 = "/data/dungeon_stages.smj";
      var key = "B_DayRuneDungeon";
      GenerateFloor(file1, key);
  }

}


function GenerateFloor(file1, dunType) {

  var req = new XMLHttpRequest();
  req.open('GET', file1, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream = req.responseText;
  var bytes = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes[i] = this.stream.charCodeAt(i) & 0xff;
  }



  var monster = new proto.msggamedata.MsgGameData.deserializeBinary(bytes);



  var listMon = [];

  var displayArray = monster.array[16]

  var golemArray = [];

  for (i = 0; i < displayArray.length; i++) {
    var splitDun = dunType.toLowerCase().split("|");

    var enumDunType = ReadEnumFromNumber(proto.msggamedata.BattleType, displayArray[i][5]).toLowerCase();
    if (enumDunType == splitDun[0]) {
      if (splitDun[1] != undefined) {

        var dunOpenDate = splitDun[1].toLowerCase();
        var currentOpenDate = ReadEnumFromNumber(proto.msggamedata.MsgGeneralDungeonStageInfo.OpenDay, displayArray[i][12][4]).toLowerCase();
        if (currentOpenDate == dunOpenDate) {
          golemArray = displayArray[i][11];
        }

      } else {
        golemArray = displayArray[i][11];
      }

    }

    listMon.push({
      Key: stringMap[displayArray[i][0]],
      value: stringMap[displayArray[i][1]]
    })

  }
  var lastFloor = golemArray.length;

  var floorList = goog.dom.getElement("floor_list");

  var allEnList = [];
  goog.dom.removeChildren(floor_list);
  for (i = 0; i < lastFloor; i++) {
    var mDubSubStage = dunSubStageMap[golemArray[i]][9];
    var floorSize = mDubSubStage.length;




    // for (i = lastFloor; i >= 1; i--) {
    var option = goog.dom.createDom('option', {
      "value": golemArray[lastFloor - i - 1].toString()
    }, "B" + (lastFloor - i).toString());
    goog.dom.appendChild(floorList, option);

    floor_list.add(option);
    // }


  }



  GenerateEnemy();


}

function GenerateEnemy() {
  var floorList = goog.dom.getElement("floor_list");

  var enemyList = goog.dom.getElement("enemy_list");

  goog.dom.removeChildren(enemyList);

  var selectedFloor = floorList.options[floorList.selectedIndex].value;
  var dunSubStage = dunSubStageMap[selectedFloor];
  var battleArray = dunSubStage[9];

  var lastBattleArrayIndex = battleArray.length - 1;

  var bossGroup = battleArray[lastBattleArrayIndex];
  var bossMon = bossGroup[3];

  if (bossMon != undefined) {
    // hasBoss
    var boss = monStageMap[bossMon];
    var bossName = stringMap[monsterMap[boss[1]][1]];


    var option = goog.dom.createDom('option', {
      "value": bossMon
    }, bossName + " (Lv. " + boss[2] + ")");
    goog.dom.appendChild(enemyList, option);
    enemyList.add(option);

    var fixedMonOnBoss = bossGroup[4];


    for (l = 0; l < fixedMonOnBoss.length; l++) {

      var suffix = [];
      if (fixedMonOnBoss.length == 2) {
        suffix.push(" (Left)");
        suffix.push(" (Right)");
      }
      var fixedMonOnBossName = stringMap[monMap[dunMonMap[fixedMonOnBoss[l]][1]][1]];

      var option = goog.dom.createDom('option', {
        "value": fixedMonOnBoss[l]
      }, fixedMonOnBossName + " (Lv. " + dunMonMap[fixedMonOnBoss[l]][2] + ")" + suffix[l]);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var stage1Group = battleArray[0];
    var fixedCount = 0;

    if (lastBattleArrayIndex != 0) {
      var fixedGroup = stage1Group[4];
      for (o = fixedGroup.length - 1; o >= 0; o--) {

        var fixedMonName = stringMap[monMap[dunMonMap[fixedGroup[o]][1]][1]];

        var option = goog.dom.createDom('option', {
          "value": fixedGroup[o]
        }, fixedMonName + " (Lv. " + dunMonMap[fixedGroup[o]][2] + ")");
        goog.dom.appendChild(enemyList, option);
        enemyList.add(option);
        fixedCount++;
      }

      // bossGroup

      var maxBossMon = bossGroup[1];

      if (fixedCount < maxBossMon) {
        var stageBossGroup = bossGroup[2];
        var bossGroupArray = monGroupMap[stageBossGroup][1];


        for (qq = 0; qq < bossGroupArray.length; qq++) {
          var groupName = stringMap[monMap[dunMonMap[bossGroupArray[qq][0]][1]][1]];
          var exist = optionExists(bossGroupArray[qq][0], enemyList);
          if (exist == false) {
            var option = goog.dom.createDom('option', {
              "value": bossGroupArray[qq][0]
            }, groupName + " (Lv. " + dunMonMap[bossGroupArray[qq][0]][2] + ")");
            goog.dom.appendChild(enemyList, option);
            enemyList.add(option);
          }
        }



      }

      var groupOnly = stage1Group[2];
      var groupArray = monGroupMap[groupOnly][1];

      for (p = 0; p < groupArray.length; p++) {
        var groupName = stringMap[monMap[dunMonMap[groupArray[p][0]][1]][1]];
        var exist = optionExists(groupArray[p][0], enemyList);
        if (exist == false) {
          var option = goog.dom.createDom('option', {
            "value": groupArray[p][0]
          }, groupName + " (Lv. " + dunMonMap[groupArray[p][0]][2] + ")");
          goog.dom.appendChild(enemyList, option);
          enemyList.add(option);
        }
      }
    }








  } else {
    // noBoss

    var fixedGroup = stage1Group[4];
    for (o = fixedGroup.length - 1; o >= 0; o--) {

      var fixedMonName = stringMap[monMap[dunMonMap[fixedGroup[o]][1]][1]];

      var option = goog.dom.createDom('option', {
        "value": fixedGroup[o]
      }, fixedMonName);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var groupOnly = stage1Group[2];
    var groupArray = monGroupMap[groupOnly][1];

    for (p = 0; p < groupArray.length; p++) {
      var groupName = stringMap[monMap[dunMonMap[groupArray[p][0]][1]][1]];
      var exist = optionExists(groupArray[p][0], enemyList);
      // console.log(exist)
      if (exist == false) {
        var option = goog.dom.createDom('option', {
          "value": groupArray[p][0]
        }, groupName);
        goog.dom.appendChild(enemyList, option);
        enemyList.add(option);
      }

      // console.log(   );

    }

  }


  UpdateEnemyStat();

}


function UpdateEnemyStat() {
  var enemyList = goog.dom.getElement("enemy_list");
  var selectedEnemy = enemyList.options[enemyList.selectedIndex].value;

  var dunMon = dunMonMap[selectedEnemy];
  if (dunMon == undefined) {
    dunMon = monStageMap[selectedEnemy];
  }

  var enemyStat = CalStat(dunMon, monMap[dunMon[1]])


  enemyRealHp = enemyStat[1];
  enemyRealAtk = enemyStat[2];
  enemyRealDef = enemyStat[3];
  enemyRealHeal = enemyStat[4];

  var divHp = goog.dom.getElement("div_enemy_hp");
  divHp.innerHTML = enemyStat[1];

  var divAtk = goog.dom.getElement("div_enemy_atk");
  divAtk.innerHTML = enemyStat[2];

  var divDef = goog.dom.getElement("div_enemy_def");
  divDef.innerHTML = enemyStat[3];

  var divHeal = goog.dom.getElement("div_enemy_heal");
  divHeal.innerHTML = enemyStat[4];

  var divCritDmg = goog.dom.getElement("div_enemy_crit_dmg");
  divCritDmg.innerHTML = enemyStat[5];
  var divCritRate = goog.dom.getElement("div_enemy_crit_rate");
  divCritRate.innerHTML = enemyStat[6];
  var divResist = goog.dom.getElement("div_enemy_resist");
  divResist.innerHTML = enemyStat[7];

  // console.log(enemyStat);

  // SetElement
  var imgEnemyIcon = goog.dom.getElement("img_enemy_icon");
  imgEnemyIcon.setAttribute('src', 'img/' + monMap[dunMon[1]][29] + '.png')


  var imgElement = goog.dom.getElement("img_enemy_element");

  var evoStage = monMap[dunMon[1]][28];
  var element = ReadEnumFromNumber(proto.msggamedata.MonsterElementType, monMap[dunMon[1]][21]);



  var oriElement = element.replace("ME_", "").replace("Wood", "Tree").toLowerCase();

  // SetElement
  var imgElement = goog.dom.getElement("img_enemy_element");
  imgElement.setAttribute('src', 'img/frame_evo' + evoStage + "_" + oriElement + '.png');

  var imgGrade = goog.dom.getElement("img_enemy_grade");

  var grade = enemyStat[0];

  // SetMOnGrade
  imgGrade.setAttribute('src', 'img/s' + grade + '_.png');

  var lvlList = goog.dom.getElement("lvl_list");
  var selectedLv = lvlList.value;





}

function clamp(num, min, max) {
  return num <= min ? min : num >= max ? max : num;
}

function CalStat(stageMonsterArray, monsterArray) {

  var num1 = clamp((parseFloat(stageMonsterArray[2]) - 1), 0, Number.MAX_SAFE_INTEGER);
  var inc2 = monsterArray[14];
  var inc3 = monsterArray[15];
  var inc4 = monsterArray[16];
  var inc5 = monsterArray[13];

  if (inc2 == undefined) {
    inc2 = 0;
  }
  if (inc3 == undefined) {
    inc3 = 0;
  }
  if (inc4 == undefined) {
    inc4 = 0;
  }
  if (inc5 == undefined) {
    inc5 = 0;
  }

  var num2 = monsterArray[10] * inc2;
  var num3 = monsterArray[11] * inc3;
  var num4 = monsterArray[12] * inc4;
  var num5 = monsterArray[9] * inc5;

  /* var monsterUid = stageMonsterArray[1]; */
  var grade = stageMonsterArray[25];
  var attack = (monsterArray[10] + num2 * num1 * stageMonsterArray[5]);
  var defence = (monsterArray[11] + num3 * num1 * stageMonsterArray[6]);
  var heal = Math.round((monsterArray[12] + num4 * num1) * stageMonsterArray[7]);
  var hp = Math.round((monsterArray[9] + num5 * num1) * stageMonsterArray[8]);

  var cDmg = stageMonsterArray[27];
  if (cDmg == undefined) {
    cDmg = 0;
  }

  var cRate = stageMonsterArray[28];
  if (cRate == undefined) {
    cRate = 0;
  }

  var cResist = stageMonsterArray[29];
  if (cResist == undefined) {
    cResist = 0;
  }

  var bResist = monsterArray[34];
  if (bResist == undefined) {
    bResist = 0;
  }

  var critDmg = (cDmg + monsterArray[33] - 1) * 100 + "%";
  var critRate = Math.round(((cRate + monsterArray[32]) * 100)) + "%";
  var resist = Math.round((cResist + bResist) * 100) + "%";

  var sp = monsterArray[17];
  var spFillPercent = Math.floor(monsterArray[17] / stageMonsterArray[23]);

  var pureDef = Math.round((monsterArray[11] + num3 * num1) * stageMonsterArray[6]);

  var defencePercent = (Math.round(pureDef / (1200 + pureDef) * 10000) / 100).toString() + "%";

  var defencePercentReducedByDefDown = (Math.round((pureDef * (-0.7 + 1)) / (1200 + (pureDef * (-0.7 + 1))) * 10000) / 100).toString() + "%";
  var defencePercentReducedByShock = (Math.round((pureDef * (-0.5 + 1)) / (1200 + (pureDef * (-0.5 + 1))) * 10000) / 100).toString() + "%";

  var defDown = (pureDef * (-0.7 + 1));

  var defencePercentReducedByDownShock = (Math.round((defDown * (-0.5 + 1)) / (1200 + (defDown * (-0.5 + 1))) * 10000) / 100).toString() + "%";

  var statArray = [grade, hp, attack, defence, heal, critDmg, critRate, resist, spFillPercent + "%", defencePercent, defencePercentReducedByDefDown, defencePercentReducedByShock, defencePercentReducedByDownShock];

  /* console.log(stageMonsterArray); */

  return statArray;
}



function optionExists(needle, haystack) {

  var optionExists = false,
    optionsLength = haystack.length;

  while (optionsLength--) {
    if (haystack.options[optionsLength].value == needle) {
      optionExists = true;
      break;
    }
  }
  return optionExists;
}



function UpdateMonStat(grade, selectedLv) {
  // if(selectedMon == undefined) {
  //   selectedMon =  goog.dom.getElement("input_astromon_name").value;
  // }

  var gradeList = goog.dom.getElement("grade_list");
  var lvList = goog.dom.getElement("lvl_list");


  if (grade == undefined) {
    grade = gradeList.options[gradeList.selectedIndex].value;
  }
  if (selectedLv == undefined || selectedLv == "") {
    selectedLv = lvList.options[lvList.selectedIndex].value;
  }

  // console.log(selectedLv);

  var selectedMon = selectedMonUid;


  var monsterType = GetMonsterType(selectedMon);
  var monsterGradeWeight = (parseFloat(grade) - 1) / 10;

  var num1 = monsterType[12] * monsterType[2];
  var num2 = monsterType[12] * monsterType[3];
  var num3 = monsterType[12] * monsterType[4];
  var num4 = monsterType[12] - (num1 + num2 + num3);
  var num5 = num1 + selectedMon[10];
  var num6 = num2 + selectedMon[11];
  var num7 = num3 + selectedMon[12];
  var num8 = num4 + selectedMon[9];
  var num9 = num5 + num5 * monsterGradeWeight; //atk
  var num10 = num6 + num6 * monsterGradeWeight; //def
  var num11 = num7 + num7 * monsterGradeWeight; //heal
  var num12 = num8 + num8 * monsterGradeWeight; //hp

  var num1_1 = num9 * selectedMon[14];
  var num2_1 = num10 * selectedMon[15];
  var num3_1 = num11 * selectedMon[16];
  var num4_1 = num12 * selectedMon[13];
  var num5_1 = selectedLv - 1;

  var awakenList = goog.dom.getElement("awaken_list");
  var awaken = 1 + (awakenList.value * 0.05);


  var attack = (num9 + num1_1 * num5_1) * awaken;
  var defence = (num10 + num2_1 * num5_1) * awaken;
  var heal = (num11 + num3_1 * num5_1) * awaken;
  var hp = (num12 + num4_1 * num5_1) * awaken;
  // console.log(selectedLv);

  playerRealHp = hp;
  playerRealAtk = attack;
  playerRealDef = defence;
  playerRealHeal = heal;



  var displayHp = Math.round(hp);
  var displayAttack = Math.round(attack);
  var displayDefence = Math.round(defence);
  var displayHeal = Math.round(heal);

  var divHp = goog.dom.getElement("div_hp");
  divHp.innerHTML = displayHp.toLocaleString();

  var divAtk = goog.dom.getElement("div_atk");
  divAtk.innerHTML = displayAttack.toLocaleString();

  var divDef = goog.dom.getElement("div_def");
  divDef.innerHTML = displayDefence.toLocaleString();

  var divHeal = goog.dom.getElement("div_heal");
  divHeal.innerHTML = displayHeal.toLocaleString();

  var critRate = selectedMon[32];

  if (critRate == undefined) {
    critRate = 0;
  } else {
    critRate = Math.round(critRate * 100);
  }

  var resist = selectedMon[34];
  if (resist == undefined) {
    resist = 0;
  } else {
    resist = Math.round(resist * 100);
  }

  var divCritDmg = goog.dom.getElement("div_crit_dmg");
  divCritDmg.innerHTML = ((selectedMon[33] - 1) * 100) + "%";
  var divCritRate = goog.dom.getElement("div_crit_rate");
  divCritRate.innerHTML = critRate + "%";
  var divResist = goog.dom.getElement("div_resist");
  divResist.innerHTML = resist + "%";


  var divSp = goog.dom.getElement("div_sp")
  divSp.innerHTML = selectedMon[17];

  playerRealCritDmg = ((selectedMon[33] - 1) * 100);
  playerRealCritRate = critRate;
  playerRealResist = resist;


  ChangeGemSet();

}

function SetSkill(selectedMon) {
  var div_skill = goog.dom.getElement("div_skill");

  goog.dom.removeChildren(div_skill);

  var div_skill_col = goog.dom.createDom('div', "black_3 width_max", "");
  goog.dom.appendChild(div_skill, div_skill_col);

  var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills");

  goog.dom.appendChild(div_skill_col, skill_h4);



  var boss_passive_skill_effect = statusEffectMap[selectedMon[25]];
  var boss_passive_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect[4]).replace("SEST", "se").toLowerCase();

  var boss_active_skill_effect = statusEffectMap[selectedMon[26]];
  var boss_active_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect[4]).replace("SEST", "se").toLowerCase();

  var passive_skill = skillMap[selectedMon[23]];
  var active_skill = skillMap[selectedMon[24]];


  var div_skill_col2 = goog.dom.createDom('div', "black_3 width_max", "");
  goog.dom.appendChild(div_skill, div_skill_col2);

  var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
  goog.dom.appendChild(div_skill_col2, div_skill_col_holder);

  CreateSkillTable(div_skill_col_holder, boss_passive_skill_effect, passive_skill, boss_passive_skill_effect_icon, "Passive");

  var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
  goog.dom.appendChild(div_skill_col2, div_skill_col_holder);
  CreateSkillTable(div_skill_col_holder, boss_active_skill_effect, active_skill, boss_active_skill_effect_icon, "Active");





  // Leader


  var leaderSkill = skillMap[selectedMon[27]];

  var boss_leader_skill_effect = statusEffectMap[leaderSkill[6]];
  var boss_leader_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_leader_skill_effect[4]).replace("SEST", "se").toLowerCase();

  var conditionalSkill = skillMap[selectedMon[44]];

  if (conditionalSkill != undefined) {
    var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
    goog.dom.appendChild(div_skill_col, div_skill_col_holder);

    var boss_cond_skill_effect = statusEffectMap[selectedMon[45]];
    console.log(conditionalSkill)
    var boss_cond_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_cond_skill_effect[4]).replace("SEST", "se").toLowerCase();

    CreateLeaderSkillTable(div_skill_col_holder, boss_leader_skill_effect, leaderSkill, boss_leader_skill_effect_icon, "Leader");

    var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
    goog.dom.appendChild(div_skill_col, div_skill_col_holder);
    CreateSkillTable(div_skill_col_holder, boss_cond_skill_effect, conditionalSkill, boss_cond_skill_effect_icon, "Super");
  } else {
    var div_skill_col_holder = goog.dom.createDom('div', "w3-col padding_8", "");
    goog.dom.appendChild(div_skill_col, div_skill_col_holder);

    CreateLeaderSkillTable(div_skill_col_holder, boss_leader_skill_effect, leaderSkill, boss_leader_skill_effect_icon, "Leader");
  }



}


function GetMonsterType(selectedMon) {

  var key = selectedMon[28] + "_" + "1" + "_" + selectedMon[19];

  return monsterTypeMap[key];

}

function ReadProto(file) {
  var req = new XMLHttpRequest();
  req.open('GET', file, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream6 = req.responseText;
  var bytes = [];
  for (i = 0; i < this.stream6.length; i++) {
    bytes[i] = this.stream6.charCodeAt(i) & 0xff;
  }

  return bytes;
}


function GetAstromonUniqueList(file1, file2) {

  var req = new XMLHttpRequest();
  req.open('GET', file1, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream = req.responseText;
  var bytes = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var req = new XMLHttpRequest();
  req.open('GET', file2, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream = req.responseText;
  var bytes2 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes2[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var file3 = "/data/monster_types.smj"

  var req = new XMLHttpRequest();
  req.open('GET', file3, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream = req.responseText;
  var bytes3 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes3[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var stringFile = "/data/string.en.pb"
  var reqString = new XMLHttpRequest();
  reqString.open('GET', stringFile, false);
  reqString.overrideMimeType('text/plain; charset=x-user-defined');
  reqString.send(null);
  if (reqString.status != 200) throw '[' + reqString.status + ']' + reqString.statusText;
  this.streamString = reqString.responseText;
  var bytesString = [];
  for (i = 0; i < this.streamString.length; i++) {
    bytesString[i] = this.streamString.charCodeAt(i) & 0xff;
  }


  var statusEffectFile = "/data/status_effects.smj"
  var reqString = new XMLHttpRequest();
  reqString.open('GET', statusEffectFile, false);
  reqString.overrideMimeType('text/plain; charset=x-user-defined');
  reqString.send(null);
  if (reqString.status != 200) throw '[' + reqString.status + ']' + reqString.statusText;
  this.streamString = reqString.responseText;
  var bytesStatusEffect = [];
  for (i = 0; i < this.streamString.length; i++) {
    bytesStatusEffect[i] = this.streamString.charCodeAt(i) & 0xff;
  }


  var monsterSkillFile = "/data/monster_skills.smj"
  var reqString = new XMLHttpRequest();
  reqString.open('GET', monsterSkillFile, false);
  reqString.overrideMimeType('text/plain; charset=x-user-defined');
  reqString.send(null);
  if (reqString.status != 200) throw '[' + reqString.status + ']' + reqString.statusText;
  this.streamString = reqString.responseText;
  var bytesSkill = [];
  for (i = 0; i < this.streamString.length; i++) {
    bytesSkill[i] = this.streamString.charCodeAt(i) & 0xff;
  }

  var superEvolutionMonsterFile = "/data/super_evolution_monsters.smj"
  var reqString = new XMLHttpRequest();
  reqString.open('GET', superEvolutionMonsterFile, false);
  reqString.overrideMimeType('text/plain; charset=x-user-defined');
  reqString.send(null);
  if (reqString.status != 200) throw '[' + reqString.status + ']' + reqString.statusText;
  this.streamString = reqString.responseText;
  var bytesSuperEvolutionMonster = [];
  for (i = 0; i < this.streamString.length; i++) {
    bytesSuperEvolutionMonster[i] = this.streamString.charCodeAt(i) & 0xff;
  }


  var monsterDict = new proto.msggamedata.MsgGameData.deserializeBinary(bytes);
  var monster = new proto.msggamedata.MsgGameData.deserializeBinary(bytes2);
  var monsterType = new proto.msggamedata.MsgGameData.deserializeBinary(bytes3);
  var stringText = new proto.msggamedata.MsgString.deserializeBinary(bytesString);
  var statusEffect = new proto.msggamedata.MsgGameData.deserializeBinary(bytesStatusEffect);
  var skill = new proto.msggamedata.MsgGameData.deserializeBinary(bytesSkill);
  var superEvolutionMonster = new proto.msggamedata.MsgGameData.deserializeBinary(bytesSuperEvolutionMonster);

  var arrayMonsterDict = monsterDict.array[29];
  var arrayMonster = monster.array[3];
  var arrayMonsterType = monsterType.array[4];
  var arrayStatusEffect = statusEffect.array[20];
  var arraySkill = skill.array[7];
  var arraySuperEvolutionMonster = superEvolutionMonster.array[97];

  //sepppp


  var file2 = "/data/dungeon_substages.smj"
  var file3 = "/data/dungeon_monster_groups.smj"
  var file4 = "/data/dungeon_monsters.smj"
  var file5 = "/data/monsters.smj"
  var file6 = "/data/stage_monsters.smj"


  var req2 = new XMLHttpRequest();
  req2.open('GET', file2, false);
  req2.overrideMimeType('text/plain; charset=x-user-defined');
  req2.send(null);
  if (req2.status != 200) throw '[' + req2.status + ']' + req2.statusText;
  this.stream2 = req2.responseText;
  var bytes2 = [];
  for (i = 0; i < this.stream2.length; i++) {
    bytes2[i] = this.stream2.charCodeAt(i) & 0xff;
  }

  var req3 = new XMLHttpRequest();
  req3.open('GET', file3, false);
  req3.overrideMimeType('text/plain; charset=x-user-defined');
  req3.send(null);
  if (req3.status != 200) throw '[' + req3.status + ']' + req3.statusText;
  this.stream3 = req3.responseText;
  var bytes3 = [];
  for (i = 0; i < this.stream3.length; i++) {
    bytes3[i] = this.stream3.charCodeAt(i) & 0xff;
  }

  var req4 = new XMLHttpRequest();
  req4.open('GET', file4, false);
  req4.overrideMimeType('text/plain; charset=x-user-defined');
  req4.send(null);
  if (req4.status != 200) throw '[' + req4.status + ']' + req4.statusText;
  this.stream4 = req4.responseText;
  var bytes4 = [];
  for (i = 0; i < this.stream4.length; i++) {
    bytes4[i] = this.stream4.charCodeAt(i) & 0xff;
  }

  var req5 = new XMLHttpRequest();
  req5.open('GET', file5, false);
  req5.overrideMimeType('text/plain; charset=x-user-defined');
  req5.send(null);
  if (req5.status != 200) throw '[' + req5.status + ']' + req5.statusText;
  this.stream5 = req5.responseText;
  var bytes5 = [];
  for (i = 0; i < this.stream5.length; i++) {
    bytes5[i] = this.stream5.charCodeAt(i) & 0xff;
  }

  var req6 = new XMLHttpRequest();
  req6.open('GET', file6, false);
  req6.overrideMimeType('text/plain; charset=x-user-defined');
  req6.send(null);
  if (req6.status != 200) throw '[' + req6.status + ']' + req6.statusText;
  this.stream6 = req6.responseText;
  var bytes6 = [];
  for (i = 0; i < this.stream6.length; i++) {
    bytes6[i] = this.stream6.charCodeAt(i) & 0xff;
  }

  var runeFile = "/data/runes.smj"


  var req7 = new XMLHttpRequest();
  req7.open('GET', runeFile, false);
  req7.overrideMimeType('text/plain; charset=x-user-defined');
  req7.send(null);
  if (req7.status != 200) throw '[' + req7.status + ']' + req7.statusText;
  this.stream6 = req7.responseText;
  var bytesRune = [];
  for (i = 0; i < this.stream6.length; i++) {
    bytesRune[i] = this.stream6.charCodeAt(i) & 0xff;
  }

  var uidFile = "data/uids.smj"
  var req7 = new XMLHttpRequest();
  req7.open('GET', uidFile, false);
  req7.overrideMimeType('text/plain; charset=x-user-defined');
  req7.send(null);
  if (req7.status != 200) throw '[' + req7.status + ']' + req7.statusText;
  this.stream6 = req7.responseText;
  var bytesUids = [];
  for (i = 0; i < this.stream6.length; i++) {
    bytesUids[i] = this.stream6.charCodeAt(i) & 0xff;
  }

  var uids = new proto.msggamedata.MsgGameData.deserializeBinary(bytesUids);
  var arrayUids = uids.getUidsList();

  // var runes = new proto.msggamedata.MsgGameData.deserializeBinary(bytesRune);
  var runes = new proto.msggamedata.MsgGameData.deserializeBinary(bytesRune);
  var arrayRune = runes.getRunesList();
  var runeKeyArray = [];
  var runeObjectArray = [];


  var arrayString = stringText.array[0];

  stringMap = {};
  for (var i = 0; i < arrayString.length; i++) {
    stringMap[arrayString[i][0]] = arrayString[i][1];
  }

  var uidsMap = {};

  for (var i = 0; i < arrayUids.length; i++) {

    uidsMap[arrayUids[i].getStrUid()] = arrayUids[i];
  }

  strHp = stringMap[uidsMap["ustr.hp"].getUid()];
  strAtk = stringMap[uidsMap["ustr.attack"].getUid()];
  strDef = stringMap[uidsMap["ustr.defence"].getUid()];
  strHeal = stringMap[uidsMap["ustr.heal"].getUid()];
  strCritDmg = stringMap[uidsMap["ustr.critical"].getUid()];
  strCritRate = stringMap[uidsMap["ustr.critical.prob"].getUid()];
  strResist = stringMap[uidsMap["ustr.status.effect.resistance"].getUid()];
  strHealMyHp = stringMap[uidsMap["ustr.heal.myhp"].getUid()];
  strHealMyMp = stringMap[uidsMap["ustr.heal.mymp"].getUid()];
  strIncHp = stringMap[uidsMap["ustr.inc.hp"].getUid()];
  strIncMp = stringMap[uidsMap["ustr.inc.mp"].getUid()];
  strShield = stringMap[uidsMap["ustr.shield"].getUid()];
  strStun = stringMap[uidsMap["ustr.stun"].getUid()];

  var runeOptionalEffectFile = "data/rune_optional_effects.smj"
  var runeOptionalEffect = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(runeOptionalEffectFile));
  var arrayRuneOptionalEffect = runeOptionalEffect.getRuneOptionalEffectsList();

  // console.log(arrayRuneOptionalEffect);

  var arrayTemp = [];

  runeOptionalEffectMap = {};
  for (var i = 0; i < arrayRuneOptionalEffect.length; i++) {
    var runeTypeee = ReadEnumFromNumber(proto.msggamedata.RuneEffectType, arrayRuneOptionalEffect[i].getType());
    var runeValue = arrayRuneOptionalEffect[i].getVFloat();
    // console.log(runeValue);
    if(runeValue == 0) {
      runeValue = arrayRuneOptionalEffect[i].getVInt();
    }

    var key = runeTypeee + "|" + arrayRuneOptionalEffect[i].getRare();
    var gggg = runeOptionalEffectMap[key];
    var eee;
    // console.log(gggg);
    if(gggg == undefined) {
      eee = [];
    } else {
      eee = gggg;
    }

    eee.push(arrayRuneOptionalEffect[i]);

    runeOptionalEffectMap[key] = eee;
  }

  // console.log(runeOptionalEffectMap)


  runeOptionalEffectMapRefined = {};

  Object.entries(runeOptionalEffectMap).forEach( function(item, index, obj) {
    var key = item[0];
    var value = item[1];

    var temp = [];
    value.forEach( function (itemValue, itemIndex ) {
      var tempValue = itemValue.getVFloat() == 0 ? itemValue.getVInt() : itemValue.getVFloat();
      temp.push(tempValue);


    } )
    var lastValueIndex = value.length - 1;
    var uniqueCount = countUnique(temp);

    var uniqueVal = GetUniqueListForAll(temp);



    var firstVal = ( value[0].getVFloat() == 0 ? value[0].getVInt() : value[0].getVFloat())  ;
    var lastVal = ( value[lastValueIndex].getVFloat() == 0 ? value[lastValueIndex].getVInt() : value[lastValueIndex].getVFloat())  ;

    var dif = (lastVal - firstVal) /  (uniqueCount - 1);


    runeOptionalEffectMapRefined[key] = dif + "|" + uniqueVal;




  })

        // console.log(runeOptionalEffectMapRefined)


  var runeRareFile = "data/rune_rares.smj"
  var runeRare = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(runeRareFile));
  arrayRuneRare = runeRare.getRuneRaresList();

  runeRareMap = {};
  for (var i = 0; i < arrayRuneRare.length; i++) {
    runeRareMap[arrayRuneRare[i].getRare()] = arrayRuneRare[i];
  }




  var runeSetEffectFile = "data/rune_set_effects.smj"
  var runeSetEffect = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(runeSetEffectFile));
  var arrayRuneSetEffect = runeSetEffect.getRuneSetEffectsList();


  // console.log(arrayRuneSetEffect);

  runeSetEffectMap = {};
  for (var i = 0; i < arrayRuneSetEffect.length; i++) {

    var color = ReadEnumFromNumber(proto.msggamedata.MonsterRuneColor, arrayRuneSetEffect[i].getColor()).replace("MRC_", "").toLowerCase();
    runeSetEffectMap[color] = arrayRuneSetEffect[i];

  }

  // console.log(runeSetEffectMap);

  for (var i = 0; i < arrayRune.length; i++) {
    var color = ReadEnumFromNumber(proto.msggamedata.MonsterRuneColor, arrayRune[i].getColor()).replace("MRC_", "").toLowerCase();
    var shape = ReadEnumFromNumber(proto.msggamedata.MonsterRuneSlotShape, arrayRune[i].getShape()).replace("MRSS_", "").toLowerCase();


    var name = stringMap[arrayRune[i].getName()]
    // console.log(name);
    // var key = "rune_icon_" + color + "_" + shape + "_" + 1;


    var key = "rune_icon_" + color + "_" + 1 + "|" + name;
    runeKeyArray.push(key);

    // console.log(arrayRune[i].getRuneEffectsList())

    var runeEffectList = arrayRune[i].getRuneEffectsList();

    var runeEffectType = runeEffectList[0].getType();

    var runeEffectTypeText = ReadEnumFromNumber(proto.msggamedata.RuneEffectType, runeEffectType)

    var value;
    if (runeEffectTypeText.includes("PERCENT")) {
      value = runeEffectList[0].getVFloat();

    } else {
      value = runeEffectList[0].getVInt();
    }

    // console.log(   runeEffectTypeText + "_" + value)
    // getVFloat()
    // getVInt()
    // if (     )

    // runeObjectArray.push( arrayRune[i].getColor() + "_" + runeEffectTypeText + "_" + value  );
    runeObjectArray.push(runeEffectTypeText + "|" + value);
    // console.log(key);
  }



  runeUnique = GetUniqueListForAll(runeKeyArray);



  var domGemSetList = goog.dom.getElement("gem_set_list");
  var firstGem;
  var gemFirstItem = true;

  var runeObj = {};



  runeEffectUnique = GetUniqueListForAll(runeObjectArray);


  // console.log(runeEffectUnique)

  runeEffectUniqueMap = {};

  for (var i = 0; i < runeEffectUnique.length; i++) {
    var splited = runeEffectUnique[i].split("|");
    runeEffectUniqueMap[splited[0]] = splited[1];
  }

  // console.log(runeEffectUniqueMap);

  // console.log(runeEffectUnique);

  runeUnique.forEach(function(item) {
    var splitedItem = item.split("|");
    var splitedUnder = splitedItem[0].replace("rune_icon_", "").replace("_1", "");
    var setEffectObj = runeSetEffectMap[splitedUnder];
    var setEffectObjEffectList = setEffectObj.getEffectsList();

    var setEffectTextArray = [];

    setEffectObjEffectList.forEach(function(effectItem) {
      var effectType = ReadEnumFromNumber(proto.msggamedata.RuneSetEffectType, effectItem.getType())
      var stringKey = "";
      var value = effectItem.getValue();
      var positive = "";
      if (value > 0) {
        positive = "+"
      }
      if (value < 1) {
        value = Math.round(value * 100) + "%";
      }

      // console.log(value)
      switch (effectItem.getType()) {
        case proto.msggamedata.RuneSetEffectType.RSET_ADDATTACKPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDATTACK:
          stringKey = strAtk;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDDEFENCEPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDDEFENCE:
          stringKey = strDef;

          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHEALPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHEAL:
          stringKey = strHeal;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHPPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHP:
          stringKey = strHp;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDCRITICALDAMAGEPERCENT:
          stringKey = strCritDmg;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDCRITICALPROBPERCENT:
          stringKey = strCritRate;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDSTATUSEFFECTRESISTANCEPERCENT:
          stringKey = strResist;
          break;

        case proto.msggamedata.RuneSetEffectType.RSET_HEALMYHP:
          stringKey = strHealMyHp;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_HEALMYMP:
          stringKey = strHealMyMp;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_INCHP:
          stringKey = strIncHp;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_INCMP:
          stringKey = strIncMp;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_SHIELD:
          stringKey = strShield;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_STUN:
          stringKey = strStun;
          break;
        default:
          stringKey = "unknown";

      }

      var finalKey = stringKey + " " + positive + value;

      setEffectTextArray.push(finalKey)


    });


    // runeObj

    var displayText = splitedItem[1] + " (" + setEffectTextArray + ")"

    var option = goog.dom.createDom('option', {
      "value": splitedItem[0]
    }, displayText);
    if (gemFirstItem) {

      firstGem = option;
    }
    goog.dom.appendChild(domGemSetList, option);
    gemFirstItem = false;
  });


  var spacesToAdd = -23;
  var biggestLength = 0;
  $("#gem_set_list option").each(function() {
    var len = $(this).text().length;
    if (len > biggestLength) {
      biggestLength = len;
    }
  });
  var padLength = biggestLength + spacesToAdd;
  $("#gem_set_list option").each(function() {
    var parts = $(this).text().split(' (');
    var strLength = parts[0].length;
    // console.log(padLength-strLength)
    for (var x = 0; x < (padLength - strLength); x++) {
      parts[0] = parts[0] + ' ';
    }
    $(this).text(parts[0].replace(/ /g, '\u00a0') + '(' + parts[1]).text;
  });




  // console.log(runeUnique);

  var dunSubStage = new proto.msggamedata.MsgGameData.deserializeBinary(bytes2);
  var dunMonGroup = new proto.msggamedata.MsgGameData.deserializeBinary(bytes3);
  var dunMon = new proto.msggamedata.MsgGameData.deserializeBinary(bytes4);
  var mon = new proto.msggamedata.MsgGameData.deserializeBinary(bytes5);
  var monStage = new proto.msggamedata.MsgGameData.deserializeBinary(bytes6);

  var arrayDunSub = dunSubStage.array[17];
  var arrayDunMonGroup = dunMonGroup.array[19];
  var arrayDunMon = dunMon.array[18];
  var arrayMon = mon.array[3];
  var arrayMonStage = monStage.array[14];

  // arrayMon.forEach(function(item) {
  //   console.log(item [39])
  // })


  dunSubStageMap = {};
  for (var i = 0; i < arrayDunSub.length; i++) {
    dunSubStageMap[arrayDunSub[i][0]] = arrayDunSub[i];
  }

  monGroupMap = {};
  for (var i = 0; i < arrayDunMonGroup.length; i++) {
    monGroupMap[arrayDunMonGroup[i][0]] = arrayDunMonGroup[i];
  }

  dunMonMap = {};
  for (var i = 0; i < arrayDunMon.length; i++) {
    dunMonMap[arrayDunMon[i][0]] = arrayDunMon[i];
  }
  monMap = {};
  for (var i = 0; i < arrayMon.length; i++) {
    monMap[arrayMon[i][0]] = arrayMon[i];
  }

  monStageMap = {};
  for (var i = 0; i < arrayMonStage.length; i++) {
    monStageMap[arrayMonStage[i][0]] = arrayMonStage[i];
  }





  dictMap = {};
  for (var i = 0; i < arrayMonsterDict.length; i++) {
    dictMap[arrayMonsterDict[i][0]] = arrayMonsterDict[i];
  }

  monsterMap = {};
  for (var i = 0; i < arrayMonster.length; i++) {
    monsterMap[arrayMonster[i][0]] = arrayMonster[i];
  }

  monsterTypeMap = {};
  for (var i = 0; i < arrayMonsterType.length; i++) {

    var typeKey = arrayMonsterType[i][10] + "_" + arrayMonsterType[i][1] + "_" + arrayMonsterType[i][0];

    monsterTypeMap[typeKey] = arrayMonsterType[i];
  }

  statusEffectMap = {};
  for (var i = 0; i < arrayStatusEffect.length; i++) {
    statusEffectMap[arrayStatusEffect[i][0]] = arrayStatusEffect[i];
  }

  skillMap = {};
  for (var i = 0; i < arraySkill.length; i++) {
    skillMap[arraySkill[i][0]] = arraySkill[i];
  }

  superEvolutionMonsterMap = {};
  for (var i = 0; i < arraySuperEvolutionMonster.length; i++) {
    superEvolutionMonsterMap[arraySuperEvolutionMonster[i][0]] = arraySuperEvolutionMonster[i];
  }




  monsterNameMap = {};
  for (var i = 0; i < arrayMonster.length; i++) {
    monsterNameMap[stringMap[arrayMonster[i][1]] + "|" + arrayMonster[i][21]] = arrayMonster[i];
  }

  var superList = [];

  for (m = 0; m < arraySuperEvolutionMonster.length; m++) {
    superList.push(arraySuperEvolutionMonster[m][1]);
  }

  var uniq = GetUniqueList(superList, arrayMonsterDict);


  var domAstromonList = goog.dom.getElement("astromon_unique_list");

  var firstItem;
  var isFirst = true;
  uniq.forEach(function(item) {
    var option = goog.dom.createDom('option', "", item);
    if (isFirst) {
      firstItem = option;
    }

    goog.dom.appendChild(domAstromonList, option);
    isFirst = false;
  });

  var dataListAstromon = goog.dom.getElement("input_astromon_name");
  dataListAstromon.value = firstItem.value;
  ChangeAstromonEvent(firstItem);


}

function GetUniqueListForAll(arr) {
  var u = {},
    a = [];
  for (var i = 0, l = arr.length; i < l; ++i) {
    if (!u.hasOwnProperty(arr[i])) {
      a.push(arr[i]);
      u[arr[i]] = 1;
    }
  }
  return a;

}

function GetUniqueList(superList, arr) {
  var u = {},
    a = [];
  for (var i = 0, l = superList.length; i < l; ++i) {
    for (j = 0; j < superList[i].length; j++) {
      var monName = stringMap[monsterMap[superList[i][j]][1]];
      if (!u.hasOwnProperty(monName)) {
        a.push(monName);
        u[monName] = 1;
      }
    }

  }


  for (var i = 0, l = arr.length; i < l; ++i) {
    var monName = stringMap[monsterMap[arr[i][1]][1]];
    if (!u.hasOwnProperty(monName)) {
      a.push(monName);
      u[monName] = 1;
    }
  }
  return a.sort();
}

function ReadEnumFromNumber(myEnum, number) {
  for (var g in myEnum) {
    if (myEnum[g] == number) {
      return g;
    }
  }
  return null;
}

function toTitleCase(str) {
  return str.replace(/\w\S*/g, function(txt) {
    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
  });
}



function CreateSkillTable(div_skill_col_holder, boss_skill_effect, boss_skill, boss_skill_effect_icon, title) {

  var rawType = "";
  var rawTarget = "";
  var pureType = "";
  var actionPower;
  try {
    pureType = boss_skill[5][0];
    rawType = ReadEnumFromNumber(proto.msggamedata.MsgMonsterSkillAction.ActionType, pureType);
    rawTarget = ReadEnumFromNumber(proto.msggamedata.MonsterSkillTargetType, boss_skill[4]);
    actionPower = (Math.round(boss_skill[5][1] * 10000) / 100).toString() + "%";
  } catch (err) {

  }


  var actionType = rawType.replace("ATTACK", "Attack").replace("HEAL", "Heal");

  var target = rawTarget.replace("MST_", "").replace("ONE", "Single").replace("TEAM", "Allied").replace("ALL", "All");

  var table = goog.dom.createDom('table', {
    "class": "skill_table",
    "cellspacing": "0",
    "cellpadding": "0"
  });
  goog.dom.appendChild(div_skill_col_holder, table);
  var tbody = goog.dom.createDom('tbody', "");
  goog.dom.appendChild(table, tbody);

  // rowTitle
  var rowSkillTitle = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillTitle);
  var tdSkillType = goog.dom.createDom('td', {
    "class": "bold_text",
    "colspan": "3"
  }, title + " Skill");
  goog.dom.appendChild(rowSkillTitle, tdSkillType);
  var tdSkillName = goog.dom.createDom('td', {
    "class": "bold_text yellow_text right_text",
    "colspan": "4"
  }, stringMap[boss_skill[1]]);
  goog.dom.appendChild(rowSkillTitle, tdSkillName);

  // rowDetail
  var rowSkillDetail = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillDetail);
  var tdSkillIcon = goog.dom.createDom('td', {
    "rowspan": "3"
  });
  goog.dom.appendChild(rowSkillDetail, tdSkillIcon);
  var imgSkillIcon = goog.dom.createDom('img', {
    "class": "skill_icon",
    "src": "img/" + boss_skill[8].toLowerCase() + ".png"
  }, "");

  goog.dom.appendChild(tdSkillIcon, imgSkillIcon);

  var tdSkillTypeTitle = goog.dom.createDom('td', "bold_text red_text", "Type:");
  goog.dom.appendChild(rowSkillDetail, tdSkillTypeTitle);
  var tdSkillTypeValue = goog.dom.createDom('td', "yellow_text", actionType);
  goog.dom.appendChild(rowSkillDetail, tdSkillTypeValue);

  var tdSkillPowerTitle = goog.dom.createDom('td', "bold_text red_text", "Power:");
  goog.dom.appendChild(rowSkillDetail, tdSkillPowerTitle);
  var tdSkillPowerValue = goog.dom.createDom('td', "yellow_text", actionPower);
  goog.dom.appendChild(rowSkillDetail, tdSkillPowerValue);

  var tdSkillTargetTitle = goog.dom.createDom('td', "bold_text red_text", "Target:");
  goog.dom.appendChild(rowSkillDetail, tdSkillTargetTitle);
  var tdSkillTargetValue = goog.dom.createDom('td', "yellow_text", target);
  goog.dom.appendChild(rowSkillDetail, tdSkillTargetValue);

  // rowSkillDesc
  var rowSkillDesc = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillDesc);
  var tdSkillDesc = goog.dom.createDom('td', {
    "class": "skill_desc",
    "colspan": "6",
    "rowspan": "2"
  }, stringMap[boss_skill[2]]);
  goog.dom.appendChild(rowSkillDesc, tdSkillDesc);
  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);

  // rowEffectTitle
  var rowSkillEffectTitle = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillEffectTitle);
  var tdSkillEffectType = goog.dom.createDom('td', {
    "class": "bold_text",
    "colspan": "3"
  }, title + " Effect");
  goog.dom.appendChild(rowSkillEffectTitle, tdSkillEffectType);
  var tdSkillEffectName = goog.dom.createDom('td', {
    "class": "bold_text yellow_text right_text",
    "colspan": "4"
  }, stringMap[boss_skill_effect[1]]);
  goog.dom.appendChild(rowSkillEffectTitle, tdSkillEffectName);


  // rowEffectDesc

  var skill_desc = stringMap[boss_skill_effect[2]]

  var skill_desc_display = SetSkillDesc(skill_desc, boss_skill_effect);
  var rowSkillEffectDesc = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillEffectDesc);

  var tdSkillEffectIcon = goog.dom.createDom('td', {
    "rowspan": "3"
  });
  goog.dom.appendChild(rowSkillEffectDesc, tdSkillEffectIcon);

  var imgSkillEffectIcon = goog.dom.createDom('img', {
    "class": "skill_icon",
    "src": "img/" + boss_skill_effect_icon + ".png"
  }, "");
  goog.dom.appendChild(tdSkillEffectIcon, imgSkillEffectIcon);
  var tdSkillEffectDesc = goog.dom.createDom('td', {
    "class": "skill_desc",
    "colspan": "6",
    "rowspan": "2"
  }, "");
  tdSkillEffectDesc.innerHTML = skill_desc_display
  goog.dom.appendChild(rowSkillEffectDesc, tdSkillEffectDesc);




  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);



}

function CreateLeaderSkillTable(div_skill_col_holder, boss_skill_effect, boss_skill, boss_skill_effect_icon, title) {

  var rawType = "";
  var rawTarget = "";
  var pureType = "";
  var actionPower;
  try {
    pureType = boss_skill[5][0];
    rawType = ReadEnumFromNumber(proto.msggamedata.MsgMonsterSkillAction.ActionType, pureType);
    rawTarget = ReadEnumFromNumber(proto.msggamedata.MonsterSkillTargetType, boss_skill[4]);
    actionPower = (Math.round(boss_skill[5][1] * 10000) / 100).toString() + "%";
  } catch (err) {

  }


  var actionType = rawType.replace("ATTACK", "Attack").replace("HEAL", "Heal");

  var target = rawTarget.replace("MST_", "").replace("ONE", "Single").replace("TEAM", "Allied").replace("ALL", "All");

  var table = goog.dom.createDom('table', {
    "class": "skill_table",
    "cellspacing": "0",
    "cellpadding": "0"
  });
  goog.dom.appendChild(div_skill_col_holder, table);
  var tbody = goog.dom.createDom('tbody', "");
  goog.dom.appendChild(table, tbody);

  // rowTitle
  var rowSkillTitle = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillTitle);
  var tdSkillType = goog.dom.createDom('td', {
    "class": "bold_text",
    "colspan": "3"
  }, title + " Skill");
  goog.dom.appendChild(rowSkillTitle, tdSkillType);
  var tdSkillName = goog.dom.createDom('td', {
    "class": "bold_text yellow_text right_text",
    "colspan": "4"
  }, stringMap[boss_skill_effect[1]]);
  goog.dom.appendChild(rowSkillTitle, tdSkillName);


  // rowSkillDesc


  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);

  // rowEffectDesc

  var skill_desc = stringMap[boss_skill_effect[2]]

  var skill_desc_display = SetSkillDesc(skill_desc, boss_skill_effect);
  var rowSkillEffectDesc = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillEffectDesc);

  var tdSkillEffectIcon = goog.dom.createDom('td', {
    "rowspan": "3"
  });
  goog.dom.appendChild(rowSkillEffectDesc, tdSkillEffectIcon);

  var imgSkillEffectIcon = goog.dom.createDom('img', {
    "class": "skill_icon",
    "src": "img/" + boss_skill_effect_icon + ".png"
  }, "");
  goog.dom.appendChild(tdSkillEffectIcon, imgSkillEffectIcon);
  var tdSkillEffectDesc = goog.dom.createDom('td', {
    "class": "skill_desc",
    "colspan": "6",
    "rowspan": "2"
  }, "");
  tdSkillEffectDesc.innerHTML = skill_desc_display
  goog.dom.appendChild(rowSkillEffectDesc, tdSkillEffectDesc);




  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);



}


function SetSkillDesc(ori_desc, m) {
  var text = ori_desc;
  var text2 = "";

  var argChance = Math.round(m[7] * 100).toString();
  var arg = argChance;

  var argDuration = m[6].toString();
  var arg2 = argDuration;

  var num = Math.round(m[8] * 100);
  var value = "";

  if (num == undefined) {
    value = m[9].toString();
  } else {
    value = num.toString();
  }

  var arg4;
  try {
    arg4 = m[11][2];
  } catch (err) {
    arg4 = "";
    // console.log(m);
  }


  var arg3 = value;

  var p = /\[(.{6}?)]/g;

  var m = text.match(p);

  text2 = text.replace(p, function(match, text, urlId) {
    return `<span style=color:#${text}>`;
  });

  var p2 = /\[-]/g;

  var text3 = text2.replace(p2, "</span>");




  text3 = text3.replace("{0}", arg).replace("{1}", arg2).replace("{2}", arg3).replace("{3}", arg4);


  return text3;


}

function ChangeGemSet() {
  var gemSetDom = goog.dom.getElement("gem_set_list");
  var selectedGemSetValue = gemSetDom.options[gemSetDom.selectedIndex].value;

  var div_gem_atk = goog.dom.getElement("div_gem_atk");

  var gemColor = selectedGemSetValue.replace("rune_icon_", "").replace("_1", "");

  var setEffectObj = runeSetEffectMap[gemColor];
  var setEffectObjEffectList = setEffectObj.getEffectsList();

  var setEffectTextArray = [];

  setEffectObjEffectList.forEach(function(effectItem) {
    var effectType = ReadEnumFromNumber(proto.msggamedata.RuneSetEffectType, effectItem.getType())
    var stringKey = "";
    var value = effectItem.getValue();
    var positive = "";

    // console.log(value)
    switch (effectItem.getType()) {
      case proto.msggamedata.RuneSetEffectType.RSET_ADDATTACKPERCENT:
      case proto.msggamedata.RuneSetEffectType.RSET_ADDATTACK:
        stringKey = strAtk;
        var displayNum = CalculateGemStat(playerRealAtk, value);
        div_gem_atk.innerHTML = CalculateGemStat(playerRealAtk, value);
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_ADDDEFENCEPERCENT:
      case proto.msggamedata.RuneSetEffectType.RSET_ADDDEFENCE:
        stringKey = strDef;

        break;
      case proto.msggamedata.RuneSetEffectType.RSET_ADDHEALPERCENT:
      case proto.msggamedata.RuneSetEffectType.RSET_ADDHEAL:
        stringKey = strHeal;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_ADDHPPERCENT:
      case proto.msggamedata.RuneSetEffectType.RSET_ADDHP:
        stringKey = strHp;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_ADDCRITICALDAMAGEPERCENT:
        stringKey = strCritDmg;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_ADDCRITICALPROBPERCENT:
        stringKey = strCritRate;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_ADDSTATUSEFFECTRESISTANCEPERCENT:
        stringKey = strResist;
        break;

      case proto.msggamedata.RuneSetEffectType.RSET_HEALMYHP:
        stringKey = strHealMyHp;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_HEALMYMP:
        stringKey = strHealMyMp;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_INCHP:
        stringKey = strIncHp;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_INCMP:
        stringKey = strIncMp;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_SHIELD:
        stringKey = strShield;
        break;
      case proto.msggamedata.RuneSetEffectType.RSET_STUN:
        stringKey = strStun;
        break;
      default:
        stringKey = "unknown";

    }



  });

  var gem_icon = goog.dom.getElement("gem_icon");
  gem_icon.setAttribute("src", "img/" + selectedGemSetValue.replace("_1", "") + "_diamond_1.png");


  // console.log(gem_icon);







}


// var gemTypeList = { RET_ADDHPPERCENT:"Hp%", RET_ADDHP:"Hp", RET_ADDATTACKPERCENT:"Atk%", RET_ADDATTACK:"Atk", RET_ADDDEFENCEPERCENT:"Def%", RET_ADDDEFENCE:"Def", RET_ADDHEALPERCENT:"Recovery%"        }




function ChangeGemMainGrade(gem_grade_list, gem_type_list, gem_upgrade_list, gem_list) {
  goog.dom.removeChildren(gem_type_list);
  goog.dom.removeChildren(gem_upgrade_list);

  var gemTypeList = { RET_ADDHPPERCENT:strHp + "%", RET_ADDHP:strHp, RET_ADDATTACKPERCENT:strAtk + "%", RET_ADDATTACK:strAtk, RET_ADDDEFENCEPERCENT:strDef + "%", RET_ADDDEFENCE:strDef,
  RET_ADDHEALPERCENT:strHeal + "%", RET_ADDHEAL:strHeal, RET_ADDCRITICALDAMAGEPERCENT:strCritDmg, RET_ADDCRITICALPROBPERCENT:strCritRate, RET_ADDSTATUSEFFECTRESISTANCEPERCENT:strResist }

  var gem_grade_selected = gem_grade_list.options[gem_grade_list.selectedIndex].value;

  if(gem_grade_selected != "") {
    Object.entries(gemTypeList).forEach(function( item, index, obj)  {
      var key = item[0];
      var val = item[1];

      var option = goog.dom.createDom('option', {
        "value": key
      }, val);
      goog.dom.appendChild(gem_type_list, option);
      gem_type_list.add(option);
    });



    for(j = 15; j >= 0; j--) {
      var option = goog.dom.createDom('option', {
        "value": j
      }, "+" + j);
      goog.dom.appendChild(gem_upgrade_list, option);
      gem_upgrade_list.add(option);
    }

    ChangeGemStat(gem_grade_list, gem_type_list, gem_upgrade_list, gem_list);

    // console.log();

    var key = gem_upgrade_list.name;

    var keySubStatType = key.replace("_upgrade_list", "_sub_stat_type");
    var keySubStatUpgrade = key.replace("_upgrade_list", "_sub_stat_upgrade");
    var keySubStatValue = key.replace("_upgrade_list", "_sub_stat_value");

    var gem_sub_stat_type = goog.dom.getElementsByClass(keySubStatType);
    var gem_sub_stat_upgrade = goog.dom.getElementsByClass(keySubStatUpgrade);
    var gem_sub_stat_value = goog.dom.getElementsByClass(keySubStatValue);

    var gem_sub_stat_size = gem_sub_stat_value.length;

    // if(gem_sub_stat_size > 0) {
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[0], gem_sub_stat_upgrade[0], gem_sub_stat_value[0]);
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[1], gem_sub_stat_upgrade[1], gem_sub_stat_value[1]);
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[2], gem_sub_stat_upgrade[2], gem_sub_stat_value[2]);
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[3], gem_sub_stat_upgrade[3], gem_sub_stat_value[3]);




  }

  ChangeGemStat(gem_grade_list, gem_type_list, gem_upgrade_list, gem_list);

}


function ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem1_upgrade_list, gem_1) {

  var value = 0;
  if(gem_1_type_list.options.length > 0) {
    var gem_1_type_selected = gem_1_type_list.options[gem_1_type_list.selectedIndex].value;
    var gem_1_grade_selected = gem_1_grade_list.options[gem_1_grade_list.selectedIndex].value;
    var tier = gem1_upgrade_list.options[gem1_upgrade_list.selectedIndex].value;

    value = runeEffectUniqueMap[gem_1_type_selected];

    // console.log(value)
  }



  var rr = runeRareMap[gem_1_grade_selected];

  var maxTier = 16;
  var num1 = maxTier - 1;
  var flag = tier >= num1;
  var num2 = tier - 1;
  var num3 = 0;

  var val1 = 0;
  var val2 = 0;

  var isFloat = false;


  switch (gem_1_type_selected) {

    case "RET_ADDHPPERCENT":
      isFloat = true;

      val1 = rr.getAddHpPercent();
      val2 = rr.getAddHpPercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }

      break;
    case "RET_ADDHP":
      isFloat = false;

      val1 = rr.getAddHp();
      val2 = rr.getAddHpMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }

      break;

    case "RET_ADDATTACKPERCENT":
      isFloat = true;

      val1 = rr.getAddAttackPercent();
      val2 = rr.getAddAttackPercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDATTACK":
      isFloat = false;

      val1 = rr.getAddAttack();
      val2 = rr.getAddAttackMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDDEFENCEPERCENT":
      isFloat = true;

      val1 = rr.getAddDefencePercent();
      val2 = rr.getAddDefencePercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;
    case "RET_ADDDEFENCE":
      isFloat = false;

      val1 = rr.getAddDefence();
      val2 = rr.getAddDefenceMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDHEALPERCENT":
      isFloat = true;

      val1 = rr.getAddHealPercent();
      val2 = rr.getAddHealPercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDHEAL":
      isFloat = false;

      val1 = rr.getAddHeal();
      val2 = rr.getAddHealMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDCRITICALDAMAGEPERCENT":
      isFloat = true;

      val1 = rr.getAddCriticalDamagePercent();
      val2 = rr.getAddCriticalDamagePercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDCRITICALPROBPERCENT":
      isFloat = true;

      val1 = rr.getAddCriticalProbPercent();
      val2 = rr.getAddCriticalProbPercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;

    case "RET_ADDSTATUSEFFECTRESISTANCEPERCENT":
      isFloat = true;

      val1 = rr.getAddStatusEffectResistancePercent();
      val2 = rr.getAddStatusEffectResistancePercentMaxupgrade();

      if (!flag) {
        num3 = val1 * tier;
      } else {
        num3 = val1 * num2 + val2;
      }
      break;



    default:
      num3 = 0;



  }

  var ret = 0;
  var shownValue = 0;

  if(num3 != 0) {
    if (isFloat) {
      ret = value * (rr.getValue() + 1) + num3;
      shownValue = Math.round(ret * 100) + "%";
    } else {
      ret = value * (rr.getValue() + 1) + num3;
      shownValue = ret;
    }
  }

  gem_1.innerHTML = "+" + shownValue;

  // var gg = runeOptionalEffectMap["RET_ADDATTACK|5|"]

  // console.log(gg);




  // var step1 = 4;
  // var step2 = 7;
  // var step3 = 10;
  // var step4 = 13;
  // var step5 = 16;
  //
  //
  //
  // var listOfRuneOptionStat = runeOptionalEffectMap["RET_ADDATTACKPERCENT|6"];
  // var listOfRuneOptionStatSize = listOfRuneOptionStat.length;
  //
  // var val1 = Math.round( listOfRuneOptionStat[1].getVFloat()  * 1000) / 1000   ;
  // if(val1 == 0) {
  //   val1 = listOfRuneOptionStat[1].getVInt();
  // }
  //
  // var val0 = Math.round( listOfRuneOptionStat[0].getVFloat()  * 1000) / 1000   ;
  // if(val0 == 0) {
  //   val0 = listOfRuneOptionStat[0].getVInt();
  // }
  //
  // var dif = val1 - val0
  //
  //
  //
  // for(i = 0; i < step1; i++) {
  //   var cal1 = (val0 * 0) + val0 + (i * dif)
  //   cal1 = Math.round(  cal1 * 1000  ) / 1000
  //
  // }
  //
  // for(i = 0; i < step2; i++) {
  //   var cal1 = (val0 * 1) + val0 + (i * dif)
  //   cal1 = Math.round(  cal1 * 1000  ) / 1000
  //
  // }
  //
  // for(i = 0; i < step3; i++) {
  //   var cal1 = (val0 * 2) + val0 + (i * dif)
  //   cal1 = Math.round(  cal1 * 1000  ) / 1000
  //
  // }
  //
  // for(i = 0; i < step4; i++) {
  //   var cal1 = (val0 * 3) + val0 + (i * dif)
  //   cal1 = Math.round(  cal1 * 1000  ) / 1000
  //
  // }
  //
  // for(i = 0; i < step5; i++) {
  //   var cal1 = (val0 * 4) + val0 + (i * dif)
  //   cal1 = Math.round(  cal1 * 1000  ) / 1000
  //
  // }


  SumGem();


}

function ChangeGemSubStatUpgrade (div_parent_upgrade, div_type, div_upgrade, div_upgrade_value) {

  goog.dom.removeChildren(div_upgrade_value);


  var selectedType = div_type.options[div_type.selectedIndex].value;
  console.log(selectedType);
  if(selectedType != "blank") {
    var selectedUpgrade = div_parent_upgrade.options[div_parent_upgrade.selectedIndex].value;
    var selectedChildUpgrade = div_upgrade.options[div_upgrade.selectedIndex].value;

    var splitedValue = runeOptionalEffectMapRefined[selectedType + "|" + selectedUpgrade].split("|")

    var value = parseFloat( splitedValue[0]   ).toFixed(3);

    var arrayOfVal = JSON.parse("[" + splitedValue[1] + "]" );
    var uniqueValSize = arrayOfVal.length;
    // console.log(arrayOfVal)

    var upgradeVal = selectedChildUpgrade - 1;

    var step = (uniqueValSize - 1);

    var loopSize = (step * upgradeVal) + uniqueValSize;



    for (i = loopSize - 1; i >= 0; i--) {
      var valval = (arrayOfVal[0] * upgradeVal) + arrayOfVal[0] + ( value * i  )

      if(valval > 1)  {

        var option = goog.dom.createDom('option', {
          "value": valval
        }, "+" + valval.toLocaleString());
        goog.dom.appendChild(div_upgrade_value, option);
        div_upgrade_value.add(option);

        // console.log( displayVal   )
      } else {
        var displayVal = parseFloat((valval * 100).toFixed(2)) + "%";
        var option = goog.dom.createDom('option', {
          "value": valval
        }, "+" + displayVal);
        goog.dom.appendChild(div_upgrade_value, option);
        div_upgrade_value.add(option);

        // console.log( (displayVal * 100).toFixed(2)   )
      }


    }
  }




  SumGem();

}

function SumGem () {



  var totalPercentHp = 0;
  var totalHp = 0;

  var totalPercentAtk = 0;
  var totalAtk = 0;

  var totalPercentDef = 0;
  var totalDef = 0;

  var totalPercentHeal = 0;
  var totalHeal = 0;

  var totalPercentCritDmg = 0;

  var totalPercentCritRate = 0;

  var totalPercentResist = 0;


  var gem_main_types = goog.dom.getElementsByClass("gem_main_type");
  var gem_main_size = gem_main_types.length;

  if(gem_main_size > 0) {

    for(j = 0; j < gem_main_size; j++) {
      var optionJSize = gem_main_types[j].options.length;
      if(optionJSize > 0) {
        var selectedMainValue = gem_main_types[j].options[gem_main_types[j].selectedIndex].value;
        var selectMainId = gem_main_types[j].id;
        var valueMainId = selectMainId.replace("type_", "");

        var valueMainDom = goog.dom.getElement(valueMainId);

        var selectedMainValueDom = valueMainDom.innerText;
        var mainToCalValue = selectedMainValueDom.replace("+","");
        if(mainToCalValue.includes("%")) {
          mainToCalValue = parseFloat(mainToCalValue) / 100;
        } else {
          mainToCalValue = parseInt(mainToCalValue);
        }

        // console.log(selectedMainValue);
        switch (selectedMainValue) {

          case "RET_ADDHPPERCENT":
            totalPercentHp += mainToCalValue;

            break;
          case "RET_ADDHP":
            totalHp += mainToCalValue;

            break;

          case "RET_ADDATTACKPERCENT":
            totalPercentAtk += mainToCalValue;
            break;

          case "RET_ADDATTACK":
            totalAtk += mainToCalValue;
            break;

          case "RET_ADDDEFENCEPERCENT":
            totalPercentDef += mainToCalValue;
            break;
          case "RET_ADDDEFENCE":
            totalDef += mainToCalValue;
            break;

          case "RET_ADDHEALPERCENT":
            totalPercentHeal += mainToCalValue;
            break;

          case "RET_ADDHEAL":
            totalHeal += mainToCalValue;
            break;

          case "RET_ADDCRITICALDAMAGEPERCENT":
            totalPercentCritDmg += mainToCalValue;
            break;

          case "RET_ADDCRITICALPROBPERCENT":
            totalPercentCritRate += mainToCalValue;
            break;

          case "RET_ADDSTATUSEFFECTRESISTANCEPERCENT":
            totalPercentResist += mainToCalValue;
            break;



          default:


        }
      }

    }

  }










  var gem_types = goog.dom.getElementsByClass("gem_type");
  var gem_type_size = gem_types.length;


  for(i = 0; i < gem_type_size; i++) {
    var selectedValue = gem_types[i].options[gem_types[i].selectedIndex].value;
    var selectId = gem_types[i].id;

    var valueId = selectId.replace("type_", "");

    var valueDom = goog.dom.getElement(valueId);
    // console.log(valueDom.options.length )

    var sizeOfValue = valueDom.options.length;

    if(sizeOfValue > 0) {
      var  selectedValueDom = parseFloat(valueDom.options[valueDom.selectedIndex].value)   ;
      switch (selectedValue) {

        case "RET_ADDHPPERCENT":
          totalPercentHp += selectedValueDom;

          break;
        case "RET_ADDHP":
          totalHp += selectedValueDom;

          break;

        case "RET_ADDATTACKPERCENT":
          totalPercentAtk += selectedValueDom;
          break;

        case "RET_ADDATTACK":
          totalAtk += selectedValueDom;
          break;

        case "RET_ADDDEFENCEPERCENT":
          totalPercentDef += selectedValueDom;
          break;
        case "RET_ADDDEFENCE":
          totalDef += selectedValueDom;
          break;

        case "RET_ADDHEALPERCENT":
          totalPercentHeal += selectedValueDom;
          break;

        case "RET_ADDHEAL":
          totalHeal += selectedValueDom;
          break;

        case "RET_ADDCRITICALDAMAGEPERCENT":
          totalPercentCritDmg += selectedValueDom;
          break;

        case "RET_ADDCRITICALPROBPERCENT":
          totalPercentCritRate += selectedValueDom;
          break;

        case "RET_ADDSTATUSEFFECTRESISTANCEPERCENT":
          totalPercentResist += selectedValueDom;
          break;



        default:


      }
    }
  }


  // console.log(totalHp);


   var div_gem_hp = goog.dom.getElement("div_gem_hp");
   var div_gem_atk = goog.dom.getElement("div_gem_atk");
   var div_gem_def = goog.dom.getElement("div_gem_def");
   var div_gem_heal = goog.dom.getElement("div_gem_heal");
   var div_gem_crit_dmg = goog.dom.getElement("div_gem_crit_dmg");
   var div_gem_crit_rate = goog.dom.getElement("div_gem_crit_rate");
   var div_gem_resist = goog.dom.getElement("div_gem_resist");

  var displayHp = playerRealHp * totalPercentHp + totalHp ;
  var prefixHp;
  if(displayHp >= 0) {
   prefixHp = "+";
  } else {
   prefixHp = "-";
  }
  div_gem_hp.innerHTML = prefixHp + Math.round( displayHp).toLocaleString();

  var displayAtk = playerRealAtk * totalPercentAtk + totalAtk ;
  var prefixAtk;
  if(displayAtk >= 0) {
    prefixAtk = "+";
  } else {
    prefixAtk = "-";
  }
  div_gem_atk.innerHTML = prefixAtk + Math.round( displayAtk).toLocaleString();

  var displayDef = playerRealDef * totalPercentDef + totalDef ;
  var prefixDef;
  if(displayDef >= 0) {
    prefixDef = "+";
  } else {
    prefixDef = "-";
  }
  div_gem_def.innerHTML = prefixDef + Math.round( displayDef).toLocaleString();

  var displayHeal = playerRealHeal * totalPercentHeal + totalHeal ;
  var prefixHeal;
  if(displayHeal >= 0) {
    prefixHeal = "+";
  } else {
    prefixHeal = "-";
  }
  div_gem_heal.innerHTML = prefixHeal + Math.round( displayHeal).toLocaleString();

  var displayCritDmg = (totalPercentCritDmg * 100) ;
  var prefixCritDmg;
  if(displayCritDmg >= 0) {
    prefixCritDmg = "+";
  } else {
    prefixCritDmg = "-";
  }
  div_gem_crit_dmg.innerHTML = prefixCritDmg + Math.round( displayCritDmg).toLocaleString() + "%";

  var displayCritRate = (totalPercentCritRate * 100) ;
  var prefixCritRate;
  if(displayCritRate >= 0) {
    prefixCritRate = "+";
  } else {
    prefixCritRate = "-";
  }
  div_gem_crit_rate.innerHTML = prefixCritRate + Math.round( displayCritRate).toLocaleString() + "%";

  var displayResist = (totalPercentResist * 100) ;
  var prefixResist;
  if(displayResist >= 0) {
    prefixResist = "+";
  } else {
    prefixResist = "-";
  }
  div_gem_resist.innerHTML = prefixResist + Math.round( displayResist).toLocaleString() + "%";

}



function ChangeGemSubStatType (div_parent_grade, div_type, div_upgrade, div_upgrade_value) {
  // console.log(runeOptionalEffectMapRefined)
  // var div_type = goog.dom.getElement("div_type");
  // var div_upgrade = goog.dom.getElement("div_upgrade");
  goog.dom.removeChildren(div_upgrade);

  var div_type_selected = div_type.options[div_type.selectedIndex].value;
  if(div_type_selected != "") {

    // console.log(div_type_selected)

    for(j = 5; j >= 1; j--) {
      var option = goog.dom.createDom('option', {
        "value": j
      }, "+" + j);
      goog.dom.appendChild(div_upgrade, option);
      div_upgrade.add(option);
    }


  } else {
    // console.log("blank")

  }


  ChangeGemSubStatUpgrade(div_parent_grade, div_type, div_upgrade, div_upgrade_value);

}



function countUnique(iterable) {
  return new Set(iterable).size;
}


function CalculateGemStat(oriValue, gemValue) {
  var ret = 0;
  if (gemValue > 1) {
    //flatNumber
    ret = gemValue;
  } else {
    //percentage
    ret = oriValue * gemValue;
  }
  return ret;
}
