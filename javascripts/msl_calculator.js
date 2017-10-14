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

var selectedMonUid;


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

  var grade = gradeList.value.replace("★", "");
  // SetMOnGrade
  imgGrade.setAttribute('src', 'img/s' + grade + '_.png');

  var lvlList = goog.dom.getElement("lvl_list");
  var selectedLv = lvlList.value;

  selectedMonUid = monElementMap[currentElement];
  SetSkill(selectedMonUid);

  UpdateLvlSelect(grade);

  // console.log(monElementMap[currentElement]);



  UpdateMonStat(grade, selectedLv);
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

      break;
    case "dun_colos":

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


function GenerateFloor (file1, dunType) {

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
      if(splitDun[1] != undefined) {

        var dunOpenDate =  splitDun[1].toLowerCase();
        var currentOpenDate = ReadEnumFromNumber(proto.msggamedata.MsgGeneralDungeonStageInfo.OpenDay, displayArray[i][12][4]).toLowerCase();
        if(currentOpenDate == dunOpenDate) {
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
    var option = goog.dom.createDom('option', {"value":golemArray[lastFloor - i - 1].toString()}, "B" + (lastFloor - i).toString());
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

  if(bossMon != undefined) {
    // hasBoss
    var boss = monStageMap[bossMon];
    var bossName = stringMap[ monsterMap[boss[1]] [1]];


    var option = goog.dom.createDom('option', {"value":bossMon}, bossName);
    goog.dom.appendChild(enemyList, option);
    enemyList.add(option);

    var fixedMonOnBoss = bossGroup[4];

    for (l = 0; l < fixedMonOnBoss.length; l++) {
      var suffix = [];
      if(fixedMonOnBoss.length == 2) {
        suffix.push(" (Left)");
        suffix.push(" (Right)");
      }
      var fixedMonOnBossName = stringMap[monMap[dunMonMap[fixedMonOnBoss[l]][1]][1]]  ;

      var option = goog.dom.createDom('option', {"value": fixedMonOnBoss[l] }, fixedMonOnBossName + suffix[l]);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var stage1Group = battleArray[0];


    var fixedGroup = stage1Group[4];
    for(o = fixedGroup.length - 1; o >= 0; o--) {

      var fixedMonName = stringMap[monMap[dunMonMap[fixedGroup[o]][1]][1]]  ;

      var option = goog.dom.createDom('option', {"value": fixedGroup[o] }, fixedMonName);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var groupOnly = stage1Group[2];
    var groupArray = monGroupMap[groupOnly][1];

    for(p = 0; p < groupArray.length; p++) {
      var groupName = stringMap[monMap[dunMonMap[ groupArray[p][0]][1]][1]];
      var exist = optionExists(groupArray[p][0], enemyList );
      // console.log(exist)
      if(exist == false) {
        var option = goog.dom.createDom('option', {"value":groupArray[p][0] }, groupName);
        goog.dom.appendChild(enemyList, option);
        enemyList.add(option);
      }

      // console.log(   );

    }




  } else {
    // noBoss

    var fixedGroup = stage1Group[4];
    for(o = fixedGroup.length - 1; o >= 0; o--) {

      var fixedMonName = stringMap[monMap[dunMonMap[fixedGroup[o]][1]][1]]  ;

      var option = goog.dom.createDom('option', {"value": fixedGroup[o] }, fixedMonName);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var groupOnly = stage1Group[2];
    var groupArray = monGroupMap[groupOnly][1];

    for(p = 0; p < groupArray.length; p++) {
      var groupName = stringMap[monMap[dunMonMap[ groupArray[p][0]][1]][1]];
      var exist = optionExists(groupArray[p][0], enemyList );
      // console.log(exist)
      if(exist == false) {
        var option = goog.dom.createDom('option', {"value":groupArray[p][0] }, groupName);
        goog.dom.appendChild(enemyList, option);
        enemyList.add(option);
      }

      // console.log(   );

    }

  }


  UpdateEnemyStat();

}


function UpdateEnemyStat () {
  var enemyList = goog.dom.getElement("enemy_list");
  var selectedEnemy = enemyList.options[enemyList.selectedIndex].value;

  var dunMon = dunMonMap[selectedEnemy];
  if(dunMon == undefined) {
    dunMon = monStageMap[selectedEnemy];
  }

  var enemyStat = CalStat(dunMon, monMap[dunMon[1]])



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

  console.log(enemyStat);





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

  if(inc2 == undefined) {
    inc2 = 0;
  }
  if(inc3 == undefined) {
    inc3 = 0;
  }
  if(inc4 == undefined) {
    inc4 = 0;
  }
  if(inc5 == undefined) {
    inc5 = 0;
  }

  var num2 = monsterArray[10] * inc2;
  var num3 = monsterArray[11] * inc3;
  var num4 = monsterArray[12] * inc4;
  var num5 = monsterArray[9] * inc5;

  /* var monsterUid = stageMonsterArray[1]; */
  var grade = stageMonsterArray[25];
  var attack = Math.round((monsterArray[10] + num2 * num1) * stageMonsterArray[5]).toLocaleString();
  var defence = Math.round((monsterArray[11] + num3 * num1) * stageMonsterArray[6]).toLocaleString();
  var heal = Math.round((monsterArray[12] + num4 * num1) * stageMonsterArray[7]).toLocaleString();
  var hp = Math.round((monsterArray[9] + num5 * num1) * stageMonsterArray[8]).toLocaleString();

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
  var spFillPercent = Math.floor(monsterArray[17] / stageMonsterArray[23]) ;

  var pureDef = Math.round((monsterArray[11] + num3 * num1) * stageMonsterArray[6]);

  var defencePercent = (Math.round  (pureDef / (1200 + pureDef) * 10000 ) / 100 ).toString() + "%"   ;

  var defencePercentReducedByDefDown = (Math.round  ( (pureDef* (-0.7+1)    ) / (1200 + (pureDef* (-0.7+1)    )) * 10000 ) / 100 ).toString() + "%"   ;
  var defencePercentReducedByShock = (Math.round  ( (pureDef* (-0.5+1)    ) / (1200 + (pureDef* (-0.5+1)    )) * 10000 ) / 100 ).toString() + "%"   ;

  var defDown = (pureDef * (-0.7+1));

  var defencePercentReducedByDownShock =  (Math.round ((defDown *(-0.5+1)) / (1200 + (defDown *(-0.5+1))) * 10000 ) / 100).toString() + "%";

  var statArray = [grade, hp, attack, defence, heal, critDmg, critRate, resist, spFillPercent + "%", defencePercent, defencePercentReducedByDefDown, defencePercentReducedByShock, defencePercentReducedByDownShock];

  /* console.log(stageMonsterArray); */

  return statArray;
}



function optionExists ( needle, haystack )
{

    var optionExists = false,
        optionsLength = haystack.length;

    while ( optionsLength-- )
    {
        if ( haystack.options[ optionsLength ].value == needle )
        {
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
  if (grade == undefined) {
    grade = goog.dom.getElement("grade_list").value.replace("★", "");
  }
  if (selectedLv == undefined || selectedLv == "") {
    selectedLv = goog.dom.getElement("lvl_list").value;
  }

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





  var arrayString = stringText.array[0];

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


  stringMap = {};
  for (var i = 0; i < arrayString.length; i++) {
    stringMap[arrayString[i][0]] = arrayString[i][1];
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

function GetUniqueList(superList, arr) {

  // console.log(superList);



  var u = {},
    a = [];
  for (var i = 0, l = superList.length; i < l; ++i) {

    for (j = 0; j < superList[i].length; j++) {
      // console.log(superList[i][j]);
      var monName = stringMap[monsterMap[superList[i][j]][1]];

      if (!u.hasOwnProperty(monName)) {
        a.push(monName);
        u[monName] = 1;
      }
    }

  }


  for (var i = 0, l = arr.length; i < l; ++i) {

    // var monId = arrayMonsterDict[i][1];
    var monName = stringMap[monsterMap[arr[i][1]][1]];

    // var temp = monName + "|" + monId;

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
