goog.require('goog.dom');
goog.require('goog.net.XhrIo');

var playerDefaultSkill;
var playerDefaultSkillStatusEffect;

var playerActiveSkill;
var playerActiveSkillStatusEffect;

var playerCondActiveSkill;
var playerCondActiveSkillStatusEffect;

var playerLeaderSkill;
var playerLeaderStatusEffect;

var stringMap = {};
var monsterMap = {};
var monsterNameMap = {};
var dictMap = {};
var monsterTypeMap = {};
var statusEffectMap = {};
var skillMap = {};
var superEvolutionMonsterMap = {};

var skillLeaderOnlyMapRefined = {};
var skillLeaderDescMap = {};

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

var playerRealGemHp;
var playerRealGemAtk;
var playerRealGemDef;
var playerRealGemHeal;

var playerRealGemCritDmg;
var playerRealGemCritRate;
var playerRealGemResist;

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
      var elementName = toTitleCase(ReadEnumFromNumber(proto.msggamedata.MonsterElementType, tempKey.getElement()).replace("ME_", "").replace("TREE", "Wood"));
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
  imgIcon.setAttribute('src', 'img/' + monElementMap[currentElement].getResourceName() + '.png');

  var imgElement = goog.dom.getElement("img_mon_element");

  var evoStage = monElementMap[currentElement].getEvolution();
  var oriElement = currentElement.replace("Wood", "Tree").toLowerCase();

  // SetMonIcon
  imgElement.setAttribute('src', 'img/frame_evo' + evoStage + "_" + oriElement + '.png');

  var imgGrade = goog.dom.getElement("img_mon_grade");
  var gradeList = goog.dom.getElement("grade_list");



  var grade = gradeList.options[gradeList.selectedIndex].value;
  // SetMOnGrade
  imgGrade.setAttribute('src', 'img/s' + grade + '_.png');

  selectedMonUid = monElementMap[currentElement];
  SetSkill(selectedMonUid);

  UpdateLvlSelect(grade);

  UpdateMonStat(grade);

  SumGem("_a");
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
    var mDubSubStage = dunSubStageMap[golemArray[i]].getBattlesList();

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
  var battleArray = dunSubStage.getBattlesList();

  var lastBattleArrayIndex = battleArray.length - 1;

  var bossGroup = battleArray[lastBattleArrayIndex];
  // console.log(bossGroup);

  var bossMon = bossGroup.getRequiredMonster();

  if (bossMon != undefined) {
    // hasBoss
    var boss = monStageMap[bossMon];
    var bossName = stringMap[monsterMap[boss .getMonster() ] .getName()];

    var option = goog.dom.createDom('option', {
      "value": bossMon
    }, bossName + " (Lv. " + boss.getMonsterLev() + ")");
    goog.dom.appendChild(enemyList, option);
    enemyList.add(option);

    var fixedMonOnBoss = bossGroup.getFixedMonsterList();


    for (l = 0; l < fixedMonOnBoss.length; l++) {

      var suffix = [];
      if (fixedMonOnBoss.length == 2) {
        suffix.push(" (Left)");
        suffix.push(" (Right)");
      }
      var fixedMonOnBossName = stringMap[monMap[dunMonMap[fixedMonOnBoss[l]] .getMonster()  ] .getName()  ];

      var option = goog.dom.createDom('option', {
        "value": fixedMonOnBoss[l]
      }, fixedMonOnBossName + " (Lv. " + dunMonMap[fixedMonOnBoss[l]]  .getMonsterLev() + ")" + suffix[l]);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var stage1Group = battleArray[0];
    var fixedCount = 0;

    if (lastBattleArrayIndex != 0) {
      var fixedGroup = stage1Group.getFixedMonsterList();
      for (o = fixedGroup.length - 1; o >= 0; o--) {

        var fixedMonName = stringMap[monMap[dunMonMap[fixedGroup[o]] .getMonster()  ] .getName() ];

        var option = goog.dom.createDom('option', {
          "value": fixedGroup[o]
        }, fixedMonName + " (Lv. " + dunMonMap[fixedGroup[o]]  .getMonsterLev() + ")");
        goog.dom.appendChild(enemyList, option);
        enemyList.add(option);
        fixedCount++;
      }

      // bossGroup

      var maxBossMon = bossGroup.getMonsterCountMax();

      if (fixedCount < maxBossMon) {
        var stageBossGroup = bossGroup.getMonsterGroup();
        var bossGroupArray = monGroupMap[stageBossGroup].getMonstersList();


        for (qq = 0; qq < bossGroupArray.length; qq++) {
          var groupName = stringMap[monMap[dunMonMap[bossGroupArray[qq] .getUid()   ]  .getMosnter()  ] .getName()  ];
          var exist = optionExists(bossGroupArray[qq][0], enemyList);
          if (exist == false) {
            var option = goog.dom.createDom('option', {
              "value": bossGroupArray[qq][0]
            }, groupName + " (Lv. " + dunMonMap[bossGroupArray[qq] .getUid()  ]  .getMonsterLev() + ")");
            goog.dom.appendChild(enemyList, option);
            enemyList.add(option);
          }
        }



      }

      var groupOnly = stage1Group.getMonsterGroup();
      var groupArray = monGroupMap[groupOnly].getMonstersList();

      for (p = 0; p < groupArray.length; p++) {
        var groupName = stringMap[monMap[dunMonMap[groupArray[p] .getUid()  ]  .getMonster()   ]  .getName()];
        var exist = optionExists(groupArray[p][0], enemyList);
        if (exist == false) {
          var option = goog.dom.createDom('option', {
            "value": groupArray[p][0]
          }, groupName + " (Lv. " + dunMonMap[groupArray[p] .getUid() ] .getMonsterLev() + ")");
          goog.dom.appendChild(enemyList, option);
          enemyList.add(option);
        }
      }
    }








  } else {
    // noBoss

    var fixedGroup = stage1Group.getFixedMonsterList;
    for (o = fixedGroup.length - 1; o >= 0; o--) {

      var fixedMonName = stringMap[monMap[dunMonMap[fixedGroup[o]] .getMonster()   ].getName()];

      var option = goog.dom.createDom('option', {
        "value": fixedGroup[o]
      }, fixedMonName);
      goog.dom.appendChild(enemyList, option);
      enemyList.add(option);
    }

    var groupOnly = stage1Group.getMonsterGroup();
    var groupArray = monGroupMap[groupOnly].getMonstersList();

    for (p = 0; p < groupArray.length; p++) {
      var groupName = stringMap[monMap[dunMonMap [groupArray[p] .getUid() ] .getMonster()   ].getName()];
      var exist = optionExists(groupArray[p] .getUid(), enemyList);
      // console.log(exist)
      if (exist == false) {
        var option = goog.dom.createDom('option', {
          "value": groupArray[p].getUid()
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
  // console.log(monMap[dunMon.getMonster() ]);

  var enemyStat = CalStat(dunMon, monMap[dunMon.getMonster() ])


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

  // console.log(monMap);

  var imgEnemyIcon = goog.dom.getElement("img_enemy_icon");
  imgEnemyIcon.setAttribute('src', 'img/' + monMap[dunMon.getMonster()  ].getResourceName() + '.png')


  var imgElement = goog.dom.getElement("img_enemy_element");

  var evoStage = monMap[dunMon  .getMonster()  ] .getEvolution();
  var element = ReadEnumFromNumber(proto.msggamedata.MonsterElementType, monMap[dunMon.getMonster()].getElement());



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

  var num1 = clamp((parseFloat(stageMonsterArray.getMonsterLev()) - 1), 0, Number.MAX_SAFE_INTEGER);
  var inc2 = monsterArray.getIncAttack();
  var inc3 = monsterArray.getIncDefence();
  var inc4 = monsterArray.getIncHeal();
  var inc5 = monsterArray.getIncHp();

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

  var num2 = monsterArray.getDefAttack() * inc2;
  var num3 = monsterArray.getDefDefence() * inc3;
  var num4 = monsterArray.getDefHeal() * inc4;
  var num5 = monsterArray.getDefHp() * inc5;

  /* var monsterUid = stageMonsterArray[1]; */
  var grade = stageMonsterArray.getMonsterSkillGrade();
  var attack = (monsterArray.getDefAttack()  + num2 * num1 * stageMonsterArray.getAttackAbility());
  var defence = (monsterArray.getDefDefence() + num3 * num1 * stageMonsterArray.getDefenceAbility());
  var heal = Math.round((monsterArray.getDefHeal() + num4 * num1) * stageMonsterArray.getHealAbility()  );
  var hp = Math.round((monsterArray.getDefHp() + num5 * num1) * stageMonsterArray.getHpAbility());

  var cDmg = stageMonsterArray.getAddCriticalDamagePercent();
  if (cDmg == undefined) {
    cDmg = 0;
  }

  var cRate = stageMonsterArray.getAddCriticalProbPercent();
  if (cRate == undefined) {
    cRate = 0;
  }

  var cResist = stageMonsterArray.getAddStatusEffectResistancePercent();
  if (cResist == undefined) {
    cResist = 0;
  }

  var bResist = monsterArray.getStatusEffectResistance();
  if (bResist == undefined) {
    bResist = 0;
  }

  var critDmg = (cDmg + monsterArray.getCriticalDamage() - 1) * 100 + "%";
  var critRate = Math.round(((cRate + monsterArray.getCriticalProb()) * 100)) + "%";
  var resist = Math.round((cResist + bResist) * 100) + "%";

  var sp = monsterArray.getMp();
  var spFillPercent = Math.floor(monsterArray.getMp() / stageMonsterArray.getMpFillCount());

  var pureDef = Math.round((monsterArray.getDefDefence() + num3 * num1) * stageMonsterArray.getDefenceAbility());

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

  var num1 = monsterType.getSp() * monsterType.getAttackWeight();
  var num2 = monsterType.getSp() * monsterType.getDefenceWeight();
  var num3 = monsterType.getSp() * monsterType.getHealWeight();
  var num4 = monsterType.getSp() - (num1 + num2 + num3);
  var num5 = num1 + selectedMon.getDefAttack();
  var num6 = num2 + selectedMon.getDefDefence();
  var num7 = num3 + selectedMon.getDefHeal();
  var num8 = num4 + selectedMon.getDefHp();
  var num9 = num5 + num5 * monsterGradeWeight; //atk
  var num10 = num6 + num6 * monsterGradeWeight; //def
  var num11 = num7 + num7 * monsterGradeWeight; //heal
  var num12 = num8 + num8 * monsterGradeWeight; //hp

  var num1_1 = num9 * selectedMon.getIncAttack();
  var num2_1 = num10 * selectedMon.getIncDefence();
  var num3_1 = num11 * selectedMon.getIncHeal();
  var num4_1 = num12 * selectedMon.getIncHp();
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

  var critRate = selectedMon.getCriticalProb();

  if (critRate == undefined) {
    critRate = 0;
  } else {
    critRate = Math.round(critRate * 100);
  }

  var resist = selectedMon.getStatusEffectResistance();
  if (resist == undefined) {
    resist = 0;
  } else {
    resist = Math.round(resist * 100);
  }

  var divCritDmg = goog.dom.getElement("div_crit_dmg");
  divCritDmg.innerHTML = ((selectedMon.getCriticalDamage() - 1) * 100) + "%";
  var divCritRate = goog.dom.getElement("div_crit_rate");
  divCritRate.innerHTML = critRate + "%";
  var divResist = goog.dom.getElement("div_resist");
  divResist.innerHTML = resist + "%";


  var divSp = goog.dom.getElement("div_sp")
  divSp.innerHTML = selectedMon.getMp();

  playerRealCritDmg = ((selectedMon.getCriticalDamage() - 1) * 100);
  playerRealCritRate = critRate;
  playerRealResist = resist;

  SumGem("_a");

  // ChangeGemSet();

}

function SetSkill(selectedMon) {
  var div_skill = goog.dom.getElement("div_skill");

  goog.dom.removeChildren(div_skill);

  var div_skill_col = goog.dom.createDom('div', "black_3 width_max", "");
  goog.dom.appendChild(div_skill, div_skill_col);

  var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills");

  goog.dom.appendChild(div_skill_col, skill_h4);



  var boss_passive_skill_effect = statusEffectMap[selectedMon.getDefaultSkillStatusEffectBeyond()];
  var boss_passive_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect.getSubType() ).replace("SEST", "se").toLowerCase();

  var boss_active_skill_effect = statusEffectMap[selectedMon.getActiveSkillStatusEffectBeyond()];
  var boss_active_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect.getSubType()).replace("SEST", "se").toLowerCase();

  var passive_skill = skillMap[selectedMon.getDefaultSkill()];
  var active_skill = skillMap[selectedMon.getActiveSkill()];

  playerDefaultSkill = passive_skill;
  playerDefaultSkillStatusEffect = boss_passive_skill_effect;

  playerActiveSkill = active_skill;
  playerActiveSkillStatusEffect = boss_active_skill_effect;



  var div_skill_col2 = goog.dom.createDom('div', "black_3 width_max", "");
  goog.dom.appendChild(div_skill, div_skill_col2);

  var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
  goog.dom.appendChild(div_skill_col2, div_skill_col_holder);

  CreateSkillTable(div_skill_col_holder, boss_passive_skill_effect, passive_skill, boss_passive_skill_effect_icon, "Passive");

  var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
  goog.dom.appendChild(div_skill_col2, div_skill_col_holder);
  CreateSkillTable(div_skill_col_holder, boss_active_skill_effect, active_skill, boss_active_skill_effect_icon, "Active");





  // Leader


  var leaderSkill = skillMap[selectedMon.getLeaderSkill()];
  playerLeaderSkill = leaderSkill;

  var boss_leader_skill_effect = statusEffectMap[leaderSkill.getStatusEffect()];
  var boss_leader_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_leader_skill_effect.getSubType()).replace("SEST", "se").toLowerCase();

  var conditionalSkill = skillMap[selectedMon.getCondActiveSkill()];

  if (conditionalSkill != undefined) {
    var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
    goog.dom.appendChild(div_skill_col, div_skill_col_holder);

    var boss_cond_skill_effect = statusEffectMap[selectedMon.getCondActiveSkillStatusEffectBeyond()];
    var boss_cond_skill_effect_icon = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_cond_skill_effect.getSubType()).replace("SEST", "se").toLowerCase();

    CreateLeaderSkillTable(div_skill_col_holder, boss_leader_skill_effect, leaderSkill, boss_leader_skill_effect_icon, "Leader");



    playerCondActiveSkill = conditionalSkill;
    playerCondActiveSkillStatusEffect = boss_cond_skill_effect;


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

  var key = selectedMon.getEvolution() + "_" + "1" + "_" + selectedMon.getDefStatType();

  console.log(key);

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

  var stringFile = "/data/string.en.pb"
  var monsterTypeFile = "/data/monster_types.smj"
  var statusEffectFile = "/data/status_effects.smj"
  var monsterSkillFile = "/data/monster_skills.smj"
  var superEvolutionMonsterFile = "/data/super_evolution_monsters.smj"

  var monsterDict = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file1));
  var monster = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file2));
  var monsterType = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(monsterTypeFile));
  var stringText = new proto.msggamedata.MsgString.deserializeBinary(ReadProto(stringFile));
  var statusEffect = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(statusEffectFile));
  var skill = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(monsterSkillFile));
  var superEvolutionMonster = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(superEvolutionMonsterFile));



  // var arrayMonsterDict = monsterDict.array[29];

  var arrayMonsterDict = monsterDict.getMonsterDictList();


  var arrayMonster = monster.getMonstersList();



  var arrayMonsterType = monsterType.getMonsterTypesList();
  var arrayStatusEffect = statusEffect.getStatusEffectsList();
  var arraySkill = skill.getMonsterSkillsList();

  var arraySuperEvolutionMonster = superEvolutionMonster.getSuperEvolutionMonstersList();



  var uidFile = "data/uids.smj"
  var uids = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(uidFile));

  var arrayUids = uids.getUidsList();

  var runeFile = "/data/runes.smj"

  var runes = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(runeFile));
  var arrayRune = runes.getRunesList();
  var runeKeyArray = [];
  var runeObjectArray = [];


  var arrayString = stringText.getLocalStringsList(); //stringText.array[0];

  // console.log(arrayString);


  stringMap = {};
  for (var i = 0; i < arrayString.length; i++) {
    stringMap[arrayString[i].getUid()] = arrayString[i].getText();
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

  runeSetEffectMap["blank"] = "blank";

  // console.log(runeSetEffectMap);

  for (var i = 0; i < arrayRune.length; i++) {
    var color = ReadEnumFromNumber(proto.msggamedata.MonsterRuneColor, arrayRune[i].getColor()).replace("MRC_", "").toLowerCase();
    var shape = ReadEnumFromNumber(proto.msggamedata.MonsterRuneSlotShape, arrayRune[i].getShape()).replace("MRSS_", "").toLowerCase();


    var name = stringMap[arrayRune[i].getName()]

    var key = "rune_icon_" + color + "_" + 1 + "|" + name;
    runeKeyArray.push(key);

    var runeEffectList = arrayRune[i].getRuneEffectsList();

    var runeEffectType = runeEffectList[0].getType();

    var runeEffectTypeText = ReadEnumFromNumber(proto.msggamedata.RuneEffectType, runeEffectType)

    var value;
    if (runeEffectTypeText.includes("PERCENT")) {
      value = runeEffectList[0].getVFloat();

    } else {
      value = runeEffectList[0].getVInt();
    }

    runeObjectArray.push(runeEffectTypeText + "|" + value);
  }



  runeUnique = GetUniqueListForAll(runeKeyArray);



  var domGemSetList = goog.dom.getElement("gem_set_list_a");
  var domGemSetListB = goog.dom.getElement("gem_set_list_b");
  var domGemSetListC = goog.dom.getElement("gem_set_list_c");
  // console.log(domGemSetList);
  // console.log(domGemSetListB);
  var firstGem;
  var gemFirstItem = true;
  var firstGemB;
  var gemFirstItemB = true;
  var firstGemC;
  var gemFirstItemC = true;

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

  var optionNoSet = goog.dom.createDom('option', {
    "value": "blank"
  }, "No Set");
  // if (gemFirstItem) {
  //   firstGem = option;
  //   gemFirstItem = false;
  // }
  goog.dom.appendChild(domGemSetList, optionNoSet);


  var optionNoSet2 = goog.dom.createDom('option', {
    "value": "blank"
  }, "No Set");
  goog.dom.appendChild(domGemSetListB, optionNoSet2);

  var optionNoSet3 = goog.dom.createDom('option', {
    "value": "blank"
  }, "No Set");
  goog.dom.appendChild(domGemSetListC, optionNoSet3);
  // console.log(firstGem)



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
      domGemSetList.value = firstGem;
    }
    goog.dom.appendChild(domGemSetList, option);

    gemFirstItem = false;


    var optionB = goog.dom.createDom('option', {
      "value": splitedItem[0]
    }, displayText);
    if (gemFirstItemB) {

      firstGemB = optionB;

      domGemSetListB.value = firstGemB;
    }
    goog.dom.appendChild(domGemSetListB, optionB);

    gemFirstItemB = false;


    var optionC = goog.dom.createDom('option', {
      "value": splitedItem[0]
    }, displayText);
    if (gemFirstItemC) {

      firstGemC = optionC;

      domGemSetListC.value = firstGemC;
    }
    goog.dom.appendChild(domGemSetListC, optionC);

    gemFirstItemC = false;
  });




  // var spacesToAdd = -23;
  // var biggestLength = 0;
  // $("#gem_set_list option").each(function() {
  //   var len = $(this).text().length;
  //   if (len > biggestLength) {
  //     biggestLength = len;
  //   }
  // });
  // var padLength = biggestLength + spacesToAdd;
  // $("#gem_set_list option").each(function() {
  //   var parts = $(this).text().split(' (');
  //
  //   var strLength = parts[0].length;
  //   // console.log(parts.length)
  //   if(parts.length > 1) {
  //     for (var x = 0; x < (padLength - strLength); x++) {
  //       parts[0] = parts[0] + ' ';
  //     }
  //     $(this).text(parts[0].replace(/ /g, '\u00a0') + '(' + parts[1]).text;
  //   }
  //
  // });

  var file2 = "/data/dungeon_substages.smj"
  var file3 = "/data/dungeon_monster_groups.smj"
  var file4 = "/data/dungeon_monsters.smj"
  var file5 = "/data/monsters.smj"
  var file6 = "/data/stage_monsters.smj"


  var dunSubStage = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file2));
  var dunMonGroup = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file3));
  var dunMon = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file4));
  var mon = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file5));
  var monStage = new proto.msggamedata.MsgGameData.deserializeBinary(ReadProto(file6));



  var arrayDunSub = dunSubStage.getDungeonSubstagesList();
  var arrayDunMonGroup = dunMonGroup.getDungeonMonsterGroupsList();
  var arrayDunMon = dunMon.getDungeonMonstersList();
  var arrayMon = mon.getMonstersList();
  var arrayMonStage = monStage.getStageMonstersList();

  // arrayMon.forEach(function(item) {
  //   console.log(item [39])
  // })




  dunSubStageMap = {};
  for (var i = 0; i < arrayDunSub.length; i++) {
    dunSubStageMap[arrayDunSub[i].getUid()] = arrayDunSub[i];
  }



  monGroupMap = {};
  for (var i = 0; i < arrayDunMonGroup.length; i++) {
    monGroupMap[arrayDunMonGroup[i].getUid()] = arrayDunMonGroup[i];
  }

    // console.log(arrayDunMon);

  dunMonMap = {};
  for (var i = 0; i < arrayDunMon.length; i++) {
    dunMonMap[arrayDunMon[i].getUid()] = arrayDunMon[i];
  }
  monMap = {};
  for (var i = 0; i < arrayMon.length; i++) {
    monMap[arrayMon[i].getUid()] = arrayMon[i];
  }

  monStageMap = {};
  for (var i = 0; i < arrayMonStage.length; i++) {
    monStageMap[arrayMonStage[i].getUid()] = arrayMonStage[i];
  }





  dictMap = {};
  for (var i = 0; i < arrayMonsterDict.length; i++) {
    dictMap[arrayMonsterDict[i].getUid()] = arrayMonsterDict;
  }

  monsterMap = {};
  for (var i = 0; i < arrayMonster.length; i++) {
    monsterMap[arrayMonster[i].getUid()] = arrayMonster[i];
  }

  monsterTypeMap = {};
  for (var i = 0; i < arrayMonsterType.length; i++) {

    var typeKey = arrayMonsterType[i].getEvolution() + "_" + arrayMonsterType[i].getWeightType() + "_" + arrayMonsterType[i].getType();
    console.log(typeKey);

    monsterTypeMap[typeKey] = arrayMonsterType[i];
  }

  statusEffectMap = {};
  for (var i = 0; i < arrayStatusEffect.length; i++) {
    statusEffectMap[arrayStatusEffect[i].getUid()] = arrayStatusEffect[i];
  }

  skillMap = {};
  for (var i = 0; i < arraySkill.length; i++) {
    skillMap[arraySkill[i].getUid()] = arraySkill[i];
  }

  var skillLeaderOnlyMap = {};
  skillLeaderDescMap = {};
  for (val of arraySkill) {
    var skillType = ReadEnumFromNumber( proto.msggamedata.MonsterSkillType  , val.getType());

    if(skillType == "MS_LEADER") {
      var skillEffectName = stringMap[statusEffectMap[ val.getStatusEffect() ].getName()];
      var skillEffect = statusEffectMap[ val .getStatusEffect()];
      var skillEffectValue = skillEffect.getVFloat();


      var skillImg = val.getIcon().replace(".", "_");

      var skillWhere = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectWhere  , skillEffect.getWhere());

      // console.log(skillEffectName);
      // console.log( statusEffectMap[ val [6]]   );

      var key = skillEffectName + "|" + skillImg;

      var exist = skillLeaderOnlyMap[key];
      var addNew;
      if(exist == undefined) {
        addNew = [];
      } else {
        addNew = exist;
      }

      addNew.push( skillEffectValue  );

      skillLeaderOnlyMap[key] = addNew;


      if(skillWhere == "SEW_ALL") {
        skillLeaderDescMap[key] = stringMap[skillEffect.getDesc()];
      }

    }

  }

  skillLeaderOnlyMapRefined = {};

  Object.entries(skillLeaderOnlyMap).forEach( function(item, index, obj) {
    var key = item[0];
    var value = item[1];

    var lastValueIndex = value.length - 1;
    var uniqueCount = countUnique(value);

    var uniqueVal = GetUniqueListForAll(value);

    skillLeaderOnlyMapRefined[key] =  uniqueVal;




  })


  var leaderDiv = goog.dom.getElement("leader_list");
  var leaderValueDiv = goog.dom.getElement("leader_list_value");

  Object.entries(skillLeaderOnlyMapRefined).forEach( function(item, index, obj) {
    var key = item[0];

    var splited = key.split("|");

    var value = item[1];
    var option = goog.dom.createDom('option', {"value":splited[1]}, splited[0]);
    goog.dom.appendChild(leaderDiv, option);
    // option.text = key;
    leaderDiv.add(option);

  });



  GetLeaderSkillValue( );



  // console.log(skillLeaderOnlyMapRefined);


  superEvolutionMonsterMap = {};
  for (var i = 0; i < arraySuperEvolutionMonster.length; i++) {
    superEvolutionMonsterMap[arraySuperEvolutionMonster[i].getUid()] = arraySuperEvolutionMonster[i];
  }




  monsterNameMap = {};
  for (var i = 0; i < arrayMonster.length; i++) {
    if(monsterNameMap[stringMap[arrayMonster[i].getName()] + "|" + arrayMonster[i].getElement()] == undefined  ) {
      monsterNameMap[stringMap[arrayMonster[i].getName()] + "|" + arrayMonster[i].getElement()] = arrayMonster[i];
    }

  }

  var superList = [];

  for (m = 0; m < arraySuperEvolutionMonster.length; m++) {
    superList.push(arraySuperEvolutionMonster[m].getToMonstersList());
  }

  var uniq = GetUniqueList(superList, arrayMonsterDict);


  var domAstromonList = goog.dom.getElement("astromon_unique_list");

  var firstItem;
  var isFirst = true;
  uniq.forEach(function(item) {
    var option = goog.dom.createDom('option', "", item);
    if (isFirst) {
      firstItem = option;
      // console.log(option);
    }

    goog.dom.appendChild(domAstromonList, option);
    isFirst = false;
  });

  var dataListAstromon = goog.dom.getElement("input_astromon_name");
  dataListAstromon.value = firstItem.value;
  ChangeAstromonEvent(firstItem);


  ReadUrlParams();

  // var fixedUrlGemB = goog.dom.getElement("fixedUrlGemB");

  ReadGemFromUrl("_a");
  ReadGemFromUrl("_b");
  ReadGemFromUrl("_c");


  CalcDamage(playerDefaultSkill.getType() );


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
      var monName = stringMap[monsterMap[superList[i][j]].getName()];
      if (!u.hasOwnProperty(monName)) {
        a.push(monName);
        u[monName] = 1;
      }
    }

  }


  for (var i = 0, l = arr.length; i < l; ++i) {
    var monName = stringMap[monsterMap[arr[i].getMonsterUid()].getName()];
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

    pureType = boss_skill.getAction().getType();
    rawType = ReadEnumFromNumber(proto.msggamedata.MsgMonsterSkillAction.ActionType, pureType);
    rawTarget = ReadEnumFromNumber(proto.msggamedata.MonsterSkillTargetType, boss_skill.getTarget());
    actionPower = (Math.round(boss_skill.getAction().getWeight() * 10000) / 100).toString() + "%";
    console.log(actionPower);
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
  }, stringMap[boss_skill.getName()]);
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
    "src": "img/" + boss_skill.getIcon().toLowerCase() + ".png"
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
  }, stringMap[boss_skill.getDesc()]);
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
  }, stringMap[boss_skill_effect.getName()]);
  goog.dom.appendChild(rowSkillEffectTitle, tdSkillEffectName);


  // rowEffectDesc

  var skill_desc = stringMap[boss_skill_effect.getDesc()]

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
    pureType = boss_skill.getAction().getType();
    rawType = ReadEnumFromNumber(proto.msggamedata.MsgMonsterSkillAction.ActionType, pureType);
    rawTarget = ReadEnumFromNumber(proto.msggamedata.MonsterSkillTargetType, boss_skill.getTarget());
    actionPower = (Math.round(boss_skill.getAction().getWeight() * 10000) / 100).toString() + "%";
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
  }, stringMap[boss_skill_effect.getName()]);
  goog.dom.appendChild(rowSkillTitle, tdSkillName);


  // rowSkillDesc


  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);

  // rowEffectDesc

  var skill_desc = stringMap[boss_skill_effect.getName()]

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

  var argChance = Math.round(m.getProb() * 100).toString();
  var arg = argChance;

  var argDuration = m.getTurn().toString();
  var arg2 = argDuration;

  var num = Math.round(m.getVFloat() * 100);
  var value = "";

  if (num == undefined) {
    value = m.getVInt().toString();
  } else {
    value = num.toString();
  }

  var arg4;
  try {
    arg4 = m.getBossSelf().getCondCount();
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

function SetSkillDescWithoutValue(ori_desc, value) {
  var text = ori_desc;
  var text2 = "";

  var p = /\[(.{6}?)]/g;

  var m = text.match(p);

  text2 = text.replace(p, function(match, text, urlId) {
    return `<span style=color:#${text}>`;
  });

  var p2 = /\[-]/g;

  var text3 = text2.replace(p2, "</span>");




  text3 = text3.replace("{0}", value);


  return text3;


}

function ChangeGemSet(gemSlot) {
  if(gemSlot == undefined) {
    gemSlot = "";
  }
  var gemSetDom = goog.dom.getElement("gem_set_list" + gemSlot);
  // var gemSetDomB = goog.dom.getElement("gem_set_list" + gemSlot);
  // console.log(gemSetDom);
  // console.log(gemSetDomB);
  var selectedGemSetValue = gemSetDom.options[gemSetDom.selectedIndex].value;

  var div_gem_atk = goog.dom.getElement("div_gem_atk");

  var gemColor = selectedGemSetValue.replace("rune_icon_", "").replace("_1", "");

  var setEffectObj = runeSetEffectMap[gemColor];
  // console.log(selectedGemSetValue);
  if(setEffectObj != "blank") {
    var setEffectObjEffectList = setEffectObj.getEffectsList();
    var setEffectTextArray = [];

    var displayNum;

    var ret = {};

    setEffectObjEffectList.forEach(function(effectItem) {
      var effectType = ReadEnumFromNumber(proto.msggamedata.RuneSetEffectType, effectItem.getType())
      var stringKey = "";
      var value = effectItem.getValue();
      var positive = "";

      // console.log(effectItem);
      // console.log(effectType);
      switch (effectItem.getType()) {
        case proto.msggamedata.RuneSetEffectType.RSET_ADDATTACKPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDATTACK:
          stringKey = strAtk;
          displayNum = CalculateGemStat(playerRealAtk, value);
          ret[effectType.replace("RSET","RET")] = value;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDDEFENCEPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDDEFENCE:
          stringKey = strDef;
          displayNum = CalculateGemStat(playerRealDef, value);
          ret[effectType.replace("RSET","RET")] = value;

          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHEALPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHEAL:
          stringKey = strHeal;
          displayNum = CalculateGemStat(playerRealHeal, value);
          ret[effectType.replace("RSET","RET")] = value;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHPPERCENT:
        case proto.msggamedata.RuneSetEffectType.RSET_ADDHP:
          stringKey = strHp;
          displayNum = CalculateGemStat(playerRealHp, value);
          ret[effectType.replace("RSET","RET")] = value;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDCRITICALDAMAGEPERCENT:
          stringKey = strCritDmg;
          displayNum = CalculateGemStat(playerRealCritDmg, value);
          ret[effectType.replace("RSET","RET")] = value;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDCRITICALPROBPERCENT:
          stringKey = strCritRate;

          displayNum = CalculateGemStat(playerRealCritRate, value);
          ret[effectType.replace("RSET","RET")] = value;
          break;
        case proto.msggamedata.RuneSetEffectType.RSET_ADDSTATUSEFFECTRESISTANCEPERCENT:
          stringKey = strResist;
          displayNum = CalculateGemStat(playerRealResist, value);
          ret[effectType.replace("RSET","RET")] = value;
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
  }

  // gemSlot


  var gem_icon = goog.dom.getElement("gem_icon" + gemSlot);
  gem_icon.setAttribute("src", "img/" + selectedGemSetValue.replace("_1", "") + "_diamond_1.png");


  return ret;


}


// var gemTypeList = { RET_ADDHPPERCENT:"Hp%", RET_ADDHP:"Hp", RET_ADDATTACKPERCENT:"Atk%", RET_ADDATTACK:"Atk", RET_ADDDEFENCEPERCENT:"Def%", RET_ADDDEFENCE:"Def", RET_ADDHEALPERCENT:"Recovery%"        }




function ChangeGemMainGrade(gem_grade_list, gem_type_list, gem_upgrade_list, gem_list, gemSlot) {
  if(gemSlot == undefined) {
    gemSlot = "";
  }
  goog.dom.removeChildren(gem_type_list);
  // console.log(gem_upgrade_list);
  goog.dom.removeChildren(gem_upgrade_list);

  var gemTypeList = { RET_ADDHPPERCENT:strHp + "%", RET_ADDHP:strHp, RET_ADDATTACKPERCENT:strAtk + "%", RET_ADDATTACK:strAtk, RET_ADDDEFENCEPERCENT:strDef + "%", RET_ADDDEFENCE:strDef,
  RET_ADDHEALPERCENT:strHeal + "%", RET_ADDHEAL:strHeal, RET_ADDCRITICALDAMAGEPERCENT:strCritDmg, RET_ADDCRITICALPROBPERCENT:strCritRate, RET_ADDSTATUSEFFECTRESISTANCEPERCENT:strResist }

  var gem_grade_selected = gem_grade_list.options[gem_grade_list.selectedIndex].value;

  if(gem_grade_selected != "blank") {
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

    ChangeGemStat(gem_grade_list, gem_type_list, gem_upgrade_list, gem_list, gemSlot);

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
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[0], gem_sub_stat_upgrade[0], gem_sub_stat_value[0], gemSlot);
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[1], gem_sub_stat_upgrade[1], gem_sub_stat_value[1], gemSlot);
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[2], gem_sub_stat_upgrade[2], gem_sub_stat_value[2], gemSlot);
    ChangeGemSubStatUpgrade(gem_grade_list, gem_sub_stat_type[3], gem_sub_stat_upgrade[3], gem_sub_stat_value[3], gemSlot);




  }

  ChangeGemStat(gem_grade_list, gem_type_list, gem_upgrade_list, gem_list, gemSlot);

}


function ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem1_upgrade_list, gem_1, gemSlot) {
  if(gemSlot == undefined) {
    gemSlot = "";
  }

  var value = 0;
  if(gem_1_type_list.options.length > 0) {
    var gem_1_type_selected = gem_1_type_list.options[gem_1_type_list.selectedIndex].value;
    var gem_1_grade_selected = gem_1_grade_list.options[gem_1_grade_list.selectedIndex].value;
    var tier = gem1_upgrade_list.options[gem1_upgrade_list.selectedIndex].value;

    value = runeEffectUniqueMap[gem_1_type_selected];

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
      num3 = -999999;



  }

  var ret = 0;
  var shownValue = 0;

  if(num3 != -999999) {
    if (isFloat) {
      ret = value * (rr.getValue() + 1) + num3;
      shownValue = (Math.round(ret * 10000)/ 100) + "%";
    } else {
      ret = value * (rr.getValue() + 1) + num3;
      shownValue = ret;
    }
  }

  gem_1.innerHTML = "+" + shownValue;



  SumGem(gemSlot);


}

function ChangeGemSubStatUpgrade (div_parent_upgrade, div_type, div_upgrade, div_upgrade_value, gemSlot) {

  if(gemSlot == undefined) {
    gemSlot = "";
  }

  goog.dom.removeChildren(div_upgrade_value);


  var selectedType = div_type.options[div_type.selectedIndex].value;
  // console.log(selectedType);
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




  SumGem(gemSlot);

}

function SumGem (gemSlot) {
  if(gemSlot == undefined) {
    gemSlot = "";
  }


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

  var gem_set_list = goog.dom.getElement("gem_set_list" + gemSlot);

  var gemSet = ChangeGemSet(gemSlot);
 // console.log( gemSet);
  if(gemSet != undefined) {
    var gemSetKeys = Object.keys(gemSet);
    var gemSetValues = Object.values(gemSet);

    // console.log( gemSetValues);


    for(z = 0; z < gemSetKeys.length; z++) {
      switch (gemSetKeys[z]) {

        case "RET_ADDHPPERCENT":
          totalPercentHp += gemSetValues[z];

          break;
        case "RET_ADDHP":
          totalHp += gemSetValues[z];

          break;

        case "RET_ADDATTACKPERCENT":
          totalPercentAtk += gemSetValues[z];
          break;

        case "RET_ADDATTACK":
          totalAtk += gemSetValues[z];
          break;

        case "RET_ADDDEFENCEPERCENT":
          totalPercentDef += gemSetValues[z];
          break;
        case "RET_ADDDEFENCE":
          totalDef += gemSetValues[z];
          break;

        case "RET_ADDHEALPERCENT":
          totalPercentHeal += gemSetValues[z];
          break;

        case "RET_ADDHEAL":
          totalHeal += gemSetValues[z];
          break;

        case "RET_ADDCRITICALDAMAGEPERCENT":
          totalPercentCritDmg += gemSetValues[z];
          break;

        case "RET_ADDCRITICALPROBPERCENT":
          totalPercentCritRate += gemSetValues[z];
          break;

        case "RET_ADDSTATUSEFFECTRESISTANCEPERCENT":
          totalPercentResist += gemSetValues[z];
          break;



        default:


      }
    }


  }





  var gem_main_types = goog.dom.getElementsByClass("gem_main_type" + gemSlot);
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







  // console.log(gemSlot);


  var gem_types = goog.dom.getElementsByClass("gem_type" + gemSlot);
  var gem_type_size = gem_types.length;
  // console.log(gem_types);

  for(i = 0; i < gem_type_size; i++) {
    var selectedValue = gem_types[i].options[gem_types[i].selectedIndex].value;
    var selectId = gem_types[i].id;

    var valueId = selectId.replace("type_", "");

    var valueDom = goog.dom.getElement(valueId);
    // console.log(valueId);
    // console.log(valueDom);

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

  var divLeader = goog.dom.getElement("leader_list");
  var divLeaderValue = goog.dom.getElement("leader_list_value");
  var img = goog.dom.getElement("leader_list_img");
  var leader_list_desc = goog.dom.getElement("leader_list_desc");

  var divLeaderSelectedValue = divLeaderValue.options[divLeaderValue.selectedIndex].value;
  var divLeaderSelected = divLeader.options[divLeader.selectedIndex].value;

  var totalLeaderBuffHp = 0;
  var totalLeaderBuffAtk = 0;
  var totalLeaderBuffDef = 0;
  var totalLeaderBuffHeal = 0;
  var totalLeaderBuffCritDmg = 0;
  var totalLeaderBuffCritRate = 0;
  var totalLeaderBuffResist = 0;



  switch (divLeaderSelected) {
    case "se_leaderbuffhp":
      totalLeaderBuffHp += playerRealHp * parseFloat(divLeaderSelectedValue);
      break;
    case "se_leaderbuffattack":
      totalLeaderBuffAtk += playerRealAtk * parseFloat(divLeaderSelectedValue);
      break;
    case "se_leaderbuffheal":
      totalLeaderBuffHeal += playerRealHeal * parseFloat(divLeaderSelectedValue);
      break;
    case "se_leaderbuffcriticaldamage":
      totalLeaderBuffCritDmg += (parseFloat(divLeaderSelectedValue) * 100);
      break;
    case "se_leaderbuffdefence":
      totalLeaderBuffDef += playerRealDef * parseFloat(divLeaderSelectedValue);
      break;
    case "se_leaderbuffcriticalprob":
      totalLeaderBuffCritRate +=  (parseFloat(divLeaderSelectedValue) * 100);
      break;

    case "se_leaderbuffresist":
      totalLeaderBuffResist +=  (parseFloat(divLeaderSelectedValue) * 100);
      break;

    case "se_leaderbuffhpcrystalrecovery":

      break;

    case "se_leaderbuffmpcrystalrecovery":

      break;

    default:


  }


  var totalDebuffHp = 0;
  var totalDebuffAtk = 0;
  var totalDebuffDef = 0;
  var totalDebuffHeal = 0;
  var totalDebuffCritDmg = 0;
  var totalDebuffCritRate = 0;
  var totalDebuffResist = 0;

  var gemHp = playerRealHp * totalPercentHp + totalHp;
  var oriGemHp = playerRealHp + gemHp;

  var gemAtk = playerRealAtk * totalPercentAtk + totalAtk;
  var oriGemAtk = playerRealAtk + gemAtk + totalLeaderBuffAtk;

  console.log(oriGemAtk);

  var buff_class = goog.dom.getElementsByClass("buff_switch");
  var buff_class_size = buff_class.length;

  for(i = 0; i < buff_class_size; i++) {

    var selectedValue = buff_class[i].value;
    var selectedChecked = buff_class[i].checked;

    if(selectedChecked) {
      switch (selectedValue) {
        case "atk_down":
          oriGemAtk *= 0.5;
          break;

        case "taunt":
          oriGemAtk *= 0.3;
          break;

        case "def_down":

          break;

        case "shock":

          break;

        case "blind":

          break;

        case "seal":

          break;

        case "heal_down":

          break;

        default:

      }


    }


    // console.log(selectedValue);
    // console.log(selectedChecked);
  }

  console.log(oriGemAtk);






  // var div_buff_hp = goog.dom.getElement("div_buff_hp");
  // var div_buff_atk = goog.dom.getElement("div_buff_atk");
  // var div_buff_def = goog.dom.getElement("div_buff_def");
  // var div_buff_heal = goog.dom.getElement("div_buff_heal");
  // var div_buff_crit_dmg = goog.dom.getElement("div_buff_crit_dmg");
  // var div_buff_crit_rate = goog.dom.getElement("div_buff_crit_rate");
  // var div_buff_resist = goog.dom.getElement("div_buff_resist");
  //
  // div_buff_hp.innerHTML = "+" + Math.round(totalLeaderBuffHp).toLocaleString();
  // div_buff_atk.innerHTML = "+" + Math.round(totalLeaderBuffAtk).toLocaleString();
  // div_buff_def.innerHTML = "+" + Math.round(totalLeaderBuffDef).toLocaleString();
  // div_buff_heal.innerHTML = "+" + Math.round(totalLeaderBuffHeal).toLocaleString();
  // div_buff_crit_dmg.innerHTML = "+" + Math.round(totalLeaderBuffCritDmg).toLocaleString() + "%";
  // div_buff_crit_rate.innerHTML = "+" + Math.round(totalLeaderBuffCritRate).toLocaleString() + "%";
  // div_buff_resist.innerHTML = "+" + Math.round(totalLeaderBuffResist).toLocaleString() + "%";


  var div_final_hp = goog.dom.getElement("div_final_hp" + gemSlot);
  var div_final_atk = goog.dom.getElement("div_final_atk" + gemSlot);
  var div_final_def = goog.dom.getElement("div_final_def" + gemSlot);
  var div_final_heal = goog.dom.getElement("div_final_heal" + gemSlot);
  var div_final_crit_dmg = goog.dom.getElement("div_final_crit_dmg" + gemSlot);
  var div_final_crit_rate = goog.dom.getElement("div_final_crit_rate" + gemSlot);
  var div_final_resist = goog.dom.getElement("div_final_resist" + gemSlot);

   var div_gem_hp = goog.dom.getElement("div_gem_hp" + gemSlot);
   var div_gem_atk = goog.dom.getElement("div_gem_atk" + gemSlot);
   var div_gem_def = goog.dom.getElement("div_gem_def" + gemSlot);
   var div_gem_heal = goog.dom.getElement("div_gem_heal" + gemSlot);
   var div_gem_crit_dmg = goog.dom.getElement("div_gem_crit_dmg" + gemSlot);
   var div_gem_crit_rate = goog.dom.getElement("div_gem_crit_rate" + gemSlot);
   var div_gem_resist = goog.dom.getElement("div_gem_resist" + gemSlot);


  var displayHp = playerRealHp * totalPercentHp + totalHp ;
  var prefixHp = "";
  var colorSpanHp = "<span style='color:#00FF00'>";
  if(displayHp >= 0) {
   prefixHp = "+";
  }
  else {
   colorSpanHp = "<span style='color:#FF0000'>";
  }
  playerRealGemHp = displayHp;
  var finalHp = playerRealHp + playerRealGemHp + totalLeaderBuffHp;
  div_gem_hp.innerHTML =  colorSpanHp + prefixHp + Math.round( displayHp).toLocaleString() +  "</span>";
  div_final_hp.innerHTML = Math.round(finalHp).toLocaleString();


  var displayAtk = playerRealAtk * totalPercentAtk + totalAtk ;
  var prefixAtk = "";
  var colorSpanAtk = "<span style='color:#00FF00'>";
  if(displayAtk >= 0) {
    prefixAtk = "+";
  }
  else {
    colorSpanAtk = "<span style='color:#FF0000'>";
  }
  playerRealGemAtk = displayAtk;
  var finalAtk = playerRealAtk + playerRealGemAtk + totalLeaderBuffAtk;

  div_final_atk.innerHTML = Math.round(finalAtk).toLocaleString();
  div_gem_atk.innerHTML = colorSpanAtk + prefixAtk + Math.round( displayAtk).toLocaleString() +  "</span>";

  var displayDef = playerRealDef * totalPercentDef + totalDef ;
  var prefixDef = "";
  var colorSpanDef = "<span style='color:#00FF00'>";
  if(displayDef >= 0) {
    prefixDef = "+";
  }
  else {
    colorSpanDef = "<span style='color:#FF0000'>";
  }
  playerRealGemDef = displayDef;
  var finalDef = playerRealDef + playerRealGemDef;
  div_final_def.innerHTML = Math.round(finalDef).toLocaleString();
  div_gem_def.innerHTML = colorSpanDef + prefixDef + Math.round( displayDef).toLocaleString() +  "</span>";

  var displayHeal = playerRealHeal * totalPercentHeal + totalHeal ;
  var prefixHeal = "";
  var colorSpanHeal = "<span style='color:#00FF00'>";
  if(displayHeal >= 0) {
    prefixHeal = "+";
  }
  else {
    colorSpanHeal = "<span style='color:#FF0000'>";
  }
  playerRealGemHeal = displayHeal;
  var finalHeal = playerRealHeal + playerRealGemHeal;
  div_final_heal.innerHTML = Math.round(finalHeal).toLocaleString();
  div_gem_heal.innerHTML = colorSpanHeal + prefixHeal + Math.round( displayHeal).toLocaleString() +  "</span>";

  var displayCritDmg = (totalPercentCritDmg * 100) ;
  var prefixCritDmg = "";
  var colorSpanCritDmg = "<span style='color:#00FF00'>";
  if(displayCritDmg >= 0) {
    prefixCritDmg = "+";
  }
  else {
    colorSpanCritDmg = "<span style='color:#FF0000'>";
  }
  playerRealGemCritDmg = displayCritDmg;
  var finalCritDmg = playerRealCritDmg + playerRealGemCritDmg;
  div_final_crit_dmg.innerHTML = Math.round(finalCritDmg).toLocaleString();
  div_gem_crit_dmg.innerHTML = colorSpanCritDmg + prefixCritDmg + Math.round( displayCritDmg).toLocaleString() +  "</span>";

  var displayCritRate = (totalPercentCritRate * 100) ;
  var prefixCritRate = "";
  var colorSpanCritRate = "<span style='color:#00FF00'>";
  if(displayCritRate >= 0) {
    prefixCritRate = "+";
  }
  else {
    colorSpanCritRate = "<span style='color:#FF0000'>";
  }
  playerRealGemCritRate = displayCritRate;
  var finalCritRate = playerRealCritRate + playerRealGemCritRate;
  div_final_crit_rate.innerHTML = Math.round(finalCritRate).toLocaleString();
  div_gem_crit_rate.innerHTML = colorSpanCritRate + prefixCritRate + Math.round( displayCritRate).toLocaleString() +  "</span>";

  var displayResist = (totalPercentResist * 100) ;
  var prefixResist = "";
  var colorSpanResist = "<span style='color:#00FF00'>";
  if(displayResist >= 0) {
    prefixResist = "+";
  }
  else {
    colorSpanResist = "<span style='color:#FF0000'>";
  }
  playerRealGemResist = displayResist;
  var finalResist = playerRealResist + playerRealGemResist;
  div_final_resist.innerHTML = Math.round(finalResist).toLocaleString();
  div_gem_resist.innerHTML = colorSpanResist + prefixResist + Math.round( displayResist).toLocaleString() +  "</span>";

  // google.charts.load('current', {'packages':['bar']});
  // google.charts.setOnLoadCallback(drawChart);
  // google.charts.load("current", {packages:["corechart"]});
  // google.charts.setOnLoadCallback(drawChart);

}



function ChangeGemSubStatType (div_parent_grade, div_type, div_upgrade, div_upgrade_value, gemSlot) {
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


  ChangeGemSubStatUpgrade(div_parent_grade, div_type, div_upgrade, div_upgrade_value, gemSlot);

}



function countUnique(iterable) {
  return new Set(iterable).size;
}


function CalculateGemStat(oriValue, gemValue) {
  var ret = 0;
  // console.log(oriValue);
  // console.log(gemValue);

  if (gemValue > 1) {
    //flatNumber
    ret = gemValue;
  } else {
    //percentage
    ret = oriValue * gemValue;
  }
  // console.log(ret);
  return ret;
}

// function ReadPost() {

// }


function ReadGemUrl (inputBox, gemSlot) {
  if(gemSlot == undefined) {
    gemSlot = "";
  }
  var gem_set_list = goog.dom.getElement("gem_set_list" + gemSlot);
  var gem_1_grade_list = goog.dom.getElement("gem_1_grade_list" + gemSlot);
  var gem_1_type_list = goog.dom.getElement("gem_1_type_list" + gemSlot);
  var gem_1_upgrade_list = goog.dom.getElement("gem_1_upgrade_list" + gemSlot);
  // console.log("gem_1_upgrade_list" + gemSlot);
  // console.log(gem_1_upgrade_list);
  var gem_1_list = goog.dom.getElement("gem_1_list" + gemSlot);

  var gem_2_grade_list = goog.dom.getElement("gem_2_grade_list" + gemSlot);
  var gem_2_type_list = goog.dom.getElement("gem_2_type_list" + gemSlot);
  var gem_2_upgrade_list = goog.dom.getElement("gem_2_upgrade_list" + gemSlot);
  var gem_2_list = goog.dom.getElement("gem_2_list" + gemSlot);

  var gem_3_grade_list = goog.dom.getElement("gem_3_grade_list" + gemSlot);
  var gem_3_type_list = goog.dom.getElement("gem_3_type_list" + gemSlot);
  var gem_3_upgrade_list = goog.dom.getElement("gem_3_upgrade_list" + gemSlot);
  var gem_3_list = goog.dom.getElement("gem_3_list" + gemSlot);


  var gem_1_sub_stat_type_1_list = goog.dom.getElement("gem_1_sub_stat_type_1_list" + gemSlot);
  var gem1_sub_stat_upgrade_1_list = goog.dom.getElement("gem1_sub_stat_upgrade_1_list" + gemSlot);
  var gem_1_sub_stat_1_list = goog.dom.getElement("gem_1_sub_stat_1_list" + gemSlot);
  var gem_1_sub_stat_type_2_list = goog.dom.getElement("gem_1_sub_stat_type_2_list" + gemSlot);
  var gem1_sub_stat_upgrade_2_list = goog.dom.getElement("gem1_sub_stat_upgrade_2_list" + gemSlot);
  var gem_1_sub_stat_2_list = goog.dom.getElement("gem_1_sub_stat_2_list" + gemSlot);
  var gem_1_sub_stat_type_3_list = goog.dom.getElement("gem_1_sub_stat_type_3_list" + gemSlot);
  var gem1_sub_stat_upgrade_3_list = goog.dom.getElement("gem1_sub_stat_upgrade_3_list" + gemSlot);
  var gem_1_sub_stat_3_list = goog.dom.getElement("gem_1_sub_stat_3_list" + gemSlot);
  var gem_1_sub_stat_type_4_list = goog.dom.getElement("gem_1_sub_stat_type_4_list" + gemSlot);
  var gem1_sub_stat_upgrade_4_list = goog.dom.getElement("gem1_sub_stat_upgrade_4_list" + gemSlot);
  var gem_1_sub_stat_4_list = goog.dom.getElement("gem_1_sub_stat_4_list" + gemSlot);

  var gem_2_sub_stat_type_1_list = goog.dom.getElement("gem_2_sub_stat_type_1_list" + gemSlot);
  var gem2_sub_stat_upgrade_1_list = goog.dom.getElement("gem2_sub_stat_upgrade_1_list" + gemSlot);
  var gem_2_sub_stat_1_list = goog.dom.getElement("gem_2_sub_stat_1_list" + gemSlot);
  var gem_2_sub_stat_type_2_list = goog.dom.getElement("gem_2_sub_stat_type_2_list" + gemSlot);
  var gem2_sub_stat_upgrade_2_list = goog.dom.getElement("gem2_sub_stat_upgrade_2_list" + gemSlot);
  var gem_2_sub_stat_2_list = goog.dom.getElement("gem_2_sub_stat_2_list" + gemSlot);
  var gem_2_sub_stat_type_3_list = goog.dom.getElement("gem_2_sub_stat_type_3_list" + gemSlot);
  var gem2_sub_stat_upgrade_3_list = goog.dom.getElement("gem2_sub_stat_upgrade_3_list" + gemSlot);
  var gem_2_sub_stat_3_list = goog.dom.getElement("gem_2_sub_stat_3_list" + gemSlot);
  var gem_2_sub_stat_type_4_list = goog.dom.getElement("gem_2_sub_stat_type_4_list" + gemSlot);
  var gem2_sub_stat_upgrade_4_list = goog.dom.getElement("gem2_sub_stat_upgrade_4_list" + gemSlot);
  var gem_2_sub_stat_4_list = goog.dom.getElement("gem_2_sub_stat_4_list" + gemSlot);

  var gem_3_sub_stat_type_1_list = goog.dom.getElement("gem_3_sub_stat_type_1_list" + gemSlot);
  var gem3_sub_stat_upgrade_1_list = goog.dom.getElement("gem3_sub_stat_upgrade_1_list" + gemSlot);
  var gem_3_sub_stat_1_list = goog.dom.getElement("gem_3_sub_stat_1_list" + gemSlot);
  var gem_3_sub_stat_type_2_list = goog.dom.getElement("gem_3_sub_stat_type_2_list" + gemSlot);
  var gem3_sub_stat_upgrade_2_list = goog.dom.getElement("gem3_sub_stat_upgrade_2_list" + gemSlot);
  var gem_3_sub_stat_2_list = goog.dom.getElement("gem_3_sub_stat_2_list" + gemSlot);
  var gem_3_sub_stat_type_3_list = goog.dom.getElement("gem_3_sub_stat_type_3_list" + gemSlot);
  var gem3_sub_stat_upgrade_3_list = goog.dom.getElement("gem3_sub_stat_upgrade_3_list" + gemSlot);
  var gem_3_sub_stat_3_list = goog.dom.getElement("gem_3_sub_stat_3_list" + gemSlot);
  var gem_3_sub_stat_type_4_list = goog.dom.getElement("gem_3_sub_stat_type_4_list" + gemSlot);
  var gem3_sub_stat_upgrade_4_list = goog.dom.getElement("gem3_sub_stat_upgrade_4_list" + gemSlot);
  var gem_3_sub_stat_4_list = goog.dom.getElement("gem_3_sub_stat_4_list" + gemSlot);


  var gemSet = getGemParameter(inputBox, "gem_set_list" + gemSlot);
  // console.log(gemSet);
  if(gemSet != undefined && gemSet != "") {

    gem_set_list.value = gemSet;
    SumGem(gemSlot);
  }

  var gem1GradeList = getGemParameter(inputBox, "gem_1_grade_list" + gemSlot);
  if(gem1GradeList != undefined && gem1GradeList != "") {

    gem_1_grade_list.value = gem1GradeList;
    ChangeGemMainGrade(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem1GradeList = getGemParameter(inputBox, "gem_1_grade_list" + gemSlot);
  if(gem1GradeList != undefined && gem1GradeList != "") {
    // var gem_1_grade_list = goog.dom.getElement("gem_1_grade_list" + gemSlot);
    gem_1_grade_list.value = gem1GradeList;
    ChangeGemMainGrade(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem2GradeList = getGemParameter(inputBox, "gem_2_grade_list" + gemSlot);
  if(gem2GradeList != undefined && gem2GradeList != "") {

    gem_2_grade_list.value = gem2GradeList;
    ChangeGemMainGrade(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }

  var gem3GradeList = getGemParameter(inputBox, "gem_3_grade_list" + gemSlot);
  if(gem3GradeList != undefined && gem3GradeList != "") {

    gem_3_grade_list.value = gem3GradeList;
    ChangeGemMainGrade(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  var gem1TypeList = getGemParameter(inputBox, "gem_1_type_list" + gemSlot);
  if(gem1TypeList != undefined && gem1TypeList != "blank") {

    gem_1_type_list.value = gem1TypeList;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem2TypeList = getGemParameter(inputBox, "gem_2_type_list" + gemSlot);
  if(gem2TypeList != undefined && gem1TypeList != "blank") {
    gem_2_type_list.value = gem2TypeList;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }


  var gem3TypeList = getGemParameter(inputBox, "gem_3_type_list" + gemSlot);
  if(gem3TypeList != undefined && gem1TypeList != "blank") {
    gem_3_type_list.value = gem3TypeList;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }


  var gem1UpgradeList = getGemParameter(inputBox, "gem_1_upgrade_list" + gemSlot);
  if(gem1UpgradeList != undefined && gem1UpgradeList != "blank") {
    gem_1_upgrade_list.value = gem1UpgradeList;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem2UpgradeList = getGemParameter(inputBox, "gem_2_upgrade_list" + gemSlot);
  if(gem2UpgradeList != undefined && gem2UpgradeList != "blank") {
    gem_2_upgrade_list.value = gem2UpgradeList;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }

  var gem3UpgradeList = getGemParameter(inputBox, "gem_3_upgrade_list" + gemSlot);
  if(gem3UpgradeList != undefined && gem3UpgradeList != "blank") {
    gem_3_upgrade_list.value = gem3UpgradeList;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  var gem_1_sub_stat_type_1_list_value = getGemParameter(inputBox, "gem_1_sub_stat_type_1_list" + gemSlot);
  if(gem_1_sub_stat_type_1_list_value != undefined && gem_1_sub_stat_type_1_list_value != "blank") {
    gem_1_sub_stat_type_1_list.value = gem_1_sub_stat_type_1_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_1_list, gem1_sub_stat_upgrade_1_list, gem_1_sub_stat_1_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_1_list_value = getGemParameter(inputBox, "gem1_sub_stat_upgrade_1_list" + gemSlot);
  if(gem1_sub_stat_upgrade_1_list_value != undefined && gem1_sub_stat_upgrade_1_list_value != "blank") {
    gem1_sub_stat_upgrade_1_list.value = gem1_sub_stat_upgrade_1_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_1_list, gem1_sub_stat_upgrade_1_list, gem_1_sub_stat_1_list, gemSlot);
  }

  var gem_1_sub_stat_1_list_value = getGemParameter(inputBox, "gem_1_sub_stat_1_list" + gemSlot);
  if(gem_1_sub_stat_1_list_value != undefined && gem_1_sub_stat_1_list_value != "blank") {
    gem_1_sub_stat_1_list.value = gem_1_sub_stat_1_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }



  var gem_1_sub_stat_type_2_list_value = getGemParameter(inputBox, "gem_1_sub_stat_type_2_list" + gemSlot);
  if(gem_1_sub_stat_type_2_list_value != undefined && gem_1_sub_stat_type_2_list_value != "blank") {
    gem_1_sub_stat_type_2_list.value = gem_1_sub_stat_type_2_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_2_list, gem1_sub_stat_upgrade_2_list, gem_1_sub_stat_2_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_2_list_value = getGemParameter(inputBox, "gem1_sub_stat_upgrade_2_list" + gemSlot);
  if(gem1_sub_stat_upgrade_2_list_value != undefined && gem1_sub_stat_upgrade_2_list_value != "blank") {
    gem1_sub_stat_upgrade_2_list.value = gem1_sub_stat_upgrade_2_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_2_list, gem1_sub_stat_upgrade_2_list, gem_1_sub_stat_2_list, gemSlot);
  }

  var gem_1_sub_stat_2_list_value = getGemParameter(inputBox, "gem_1_sub_stat_2_list" + gemSlot);
  if(gem_1_sub_stat_2_list_value != undefined && gem_1_sub_stat_2_list_value != "blank") {
    gem_1_sub_stat_2_list.value = gem_1_sub_stat_2_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }


  var gem_1_sub_stat_type_3_list_value = getGemParameter(inputBox, "gem_1_sub_stat_type_3_list" + gemSlot);
  if(gem_1_sub_stat_type_3_list_value != undefined && gem_1_sub_stat_type_3_list_value != "blank") {
    gem_1_sub_stat_type_3_list.value = gem_1_sub_stat_type_3_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_3_list, gem1_sub_stat_upgrade_3_list, gem_1_sub_stat_3_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_3_list_value = getGemParameter(inputBox, "gem1_sub_stat_upgrade_3_list" + gemSlot);
  if(gem1_sub_stat_upgrade_3_list_value != undefined && gem1_sub_stat_upgrade_3_list_value != "blank") {
    gem1_sub_stat_upgrade_3_list.value = gem1_sub_stat_upgrade_3_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_3_list, gem1_sub_stat_upgrade_3_list, gem_1_sub_stat_3_list, gemSlot);
  }

  var gem_1_sub_stat_3_list_value = getGemParameter(inputBox, "gem_1_sub_stat_3_list" + gemSlot);
  if(gem_1_sub_stat_3_list_value != undefined && gem_1_sub_stat_3_list_value != "blank") {
    gem_1_sub_stat_3_list.value = gem_1_sub_stat_3_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem_1_sub_stat_type_4_list_value = getGemParameter(inputBox, "gem_1_sub_stat_type_4_list" + gemSlot);
  if(gem_1_sub_stat_type_4_list_value != undefined && gem_1_sub_stat_type_4_list_value != "blank") {
    gem_1_sub_stat_type_4_list.value = gem_1_sub_stat_type_4_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_4_list, gem1_sub_stat_upgrade_4_list, gem_1_sub_stat_4_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_4_list_value = getGemParameter(inputBox, "gem1_sub_stat_upgrade_4_list" + gemSlot);
  if(gem1_sub_stat_upgrade_4_list_value != undefined && gem1_sub_stat_upgrade_4_list_value != "blank") {
    gem1_sub_stat_upgrade_4_list.value = gem1_sub_stat_upgrade_4_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_4_list, gem1_sub_stat_upgrade_4_list, gem_1_sub_stat_4_list, gemSlot);
  }

  var gem_1_sub_stat_4_list_value = getGemParameter(inputBox, "gem_1_sub_stat_4_list" + gemSlot);
  if(gem_1_sub_stat_4_list_value != undefined && gem_1_sub_stat_4_list_value != "blank") {
    gem_1_sub_stat_4_list.value = gem_1_sub_stat_4_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }




  var gem_2_sub_stat_type_1_list_value = getGemParameter(inputBox, "gem_2_sub_stat_type_1_list" + gemSlot);
  if(gem_2_sub_stat_type_1_list_value != undefined && gem_2_sub_stat_type_1_list_value != "blank") {
    gem_2_sub_stat_type_1_list.value = gem_2_sub_stat_type_1_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_1_list, gem2_sub_stat_upgrade_1_list, gem_2_sub_stat_1_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_1_list_value = getGemParameter(inputBox, "gem2_sub_stat_upgrade_1_list" + gemSlot);
  if(gem2_sub_stat_upgrade_1_list_value != undefined && gem2_sub_stat_upgrade_1_list_value != "blank") {
    gem2_sub_stat_upgrade_1_list.value = gem2_sub_stat_upgrade_1_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_1_list, gem2_sub_stat_upgrade_1_list, gem_2_sub_stat_1_list, gemSlot);
  }

  var gem_2_sub_stat_1_list_value = getGemParameter(inputBox, "gem_2_sub_stat_1_list" + gemSlot);
  if(gem_2_sub_stat_1_list_value != undefined && gem_2_sub_stat_1_list_value != "blank") {
    gem_2_sub_stat_1_list.value = gem_2_sub_stat_1_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }



  var gem_2_sub_stat_type_2_list_value = getGemParameter(inputBox, "gem_2_sub_stat_type_2_list" + gemSlot);
  if(gem_2_sub_stat_type_2_list_value != undefined && gem_2_sub_stat_type_2_list_value != "blank") {
    gem_2_sub_stat_type_2_list.value = gem_2_sub_stat_type_2_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_2_list, gem2_sub_stat_upgrade_2_list, gem_2_sub_stat_2_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_2_list_value = getGemParameter(inputBox, "gem2_sub_stat_upgrade_2_list" + gemSlot);
  if(gem2_sub_stat_upgrade_2_list_value != undefined && gem2_sub_stat_upgrade_2_list_value != "blank") {
    gem2_sub_stat_upgrade_2_list.value = gem2_sub_stat_upgrade_2_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_2_list, gem2_sub_stat_upgrade_2_list, gem_2_sub_stat_2_list, gemSlot);
  }

  var gem_2_sub_stat_2_list_value = getGemParameter(inputBox, "gem_2_sub_stat_2_list" + gemSlot);
  if(gem_2_sub_stat_2_list_value != undefined && gem_2_sub_stat_2_list_value != "blank") {
    gem_2_sub_stat_2_list.value = gem_2_sub_stat_2_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }


  var gem_2_sub_stat_type_3_list_value = getGemParameter(inputBox, "gem_2_sub_stat_type_3_list" + gemSlot);
  if(gem_2_sub_stat_type_3_list_value != undefined && gem_2_sub_stat_type_3_list_value != "blank") {
    gem_2_sub_stat_type_3_list.value = gem_2_sub_stat_type_3_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_3_list, gem2_sub_stat_upgrade_3_list, gem_2_sub_stat_3_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_3_list_value = getGemParameter(inputBox, "gem2_sub_stat_upgrade_3_list" + gemSlot);
  if(gem2_sub_stat_upgrade_3_list_value != undefined && gem2_sub_stat_upgrade_3_list_value != "blank") {
    gem2_sub_stat_upgrade_3_list.value = gem2_sub_stat_upgrade_3_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_3_list, gem2_sub_stat_upgrade_3_list, gem_2_sub_stat_3_list, gemSlot);
  }

  var gem_2_sub_stat_3_list_value = getGemParameter(inputBox, "gem_2_sub_stat_3_list" + gemSlot);
  if(gem_2_sub_stat_3_list_value != undefined && gem_2_sub_stat_3_list_value != "blank") {
    gem_2_sub_stat_3_list.value = gem_2_sub_stat_3_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }

  var gem_2_sub_stat_type_4_list_value = getGemParameter(inputBox, "gem_2_sub_stat_type_4_list" + gemSlot);
  if(gem_2_sub_stat_type_4_list_value != undefined && gem_2_sub_stat_type_4_list_value != "blank") {
    gem_2_sub_stat_type_4_list.value = gem_2_sub_stat_type_4_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_4_list, gem2_sub_stat_upgrade_4_list, gem_2_sub_stat_4_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_4_list_value = getGemParameter(inputBox, "gem2_sub_stat_upgrade_4_list" + gemSlot);
  if(gem2_sub_stat_upgrade_4_list_value != undefined && gem2_sub_stat_upgrade_4_list_value != "blank") {
    gem2_sub_stat_upgrade_4_list.value = gem2_sub_stat_upgrade_4_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_4_list, gem2_sub_stat_upgrade_4_list, gem_2_sub_stat_4_list, gemSlot);
  }

  var gem_2_sub_stat_4_list_value = getGemParameter(inputBox, "gem_2_sub_stat_4_list" + gemSlot);
  if(gem_2_sub_stat_4_list_value != undefined && gem_2_sub_stat_4_list_value != "blank") {
    gem_2_sub_stat_4_list.value = gem_2_sub_stat_4_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }



  var gem_3_sub_stat_type_1_list_value = getGemParameter(inputBox, "gem_3_sub_stat_type_1_list" + gemSlot);
  if(gem_3_sub_stat_type_1_list_value != undefined && gem_3_sub_stat_type_1_list_value != "blank") {
    gem_3_sub_stat_type_1_list.value = gem_3_sub_stat_type_1_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_1_list, gem3_sub_stat_upgrade_1_list, gem_3_sub_stat_1_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_1_list_value = getGemParameter(inputBox, "gem3_sub_stat_upgrade_1_list" + gemSlot);
  if(gem3_sub_stat_upgrade_1_list_value != undefined && gem3_sub_stat_upgrade_1_list_value != "blank") {
    gem3_sub_stat_upgrade_1_list.value = gem3_sub_stat_upgrade_1_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_1_list, gem3_sub_stat_upgrade_1_list, gem_3_sub_stat_1_list, gemSlot);
  }

  var gem_3_sub_stat_1_list_value = getGemParameter(inputBox, "gem_3_sub_stat_1_list" + gemSlot);
  if(gem_3_sub_stat_1_list_value != undefined && gem_3_sub_stat_1_list_value != "blank") {
    gem_3_sub_stat_1_list.value = gem_3_sub_stat_1_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }



  var gem_3_sub_stat_type_2_list_value = getGemParameter(inputBox, "gem_3_sub_stat_type_2_list" + gemSlot);
  if(gem_3_sub_stat_type_2_list_value != undefined && gem_3_sub_stat_type_2_list_value != "blank") {
    gem_3_sub_stat_type_2_list.value = gem_3_sub_stat_type_2_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_2_list, gem3_sub_stat_upgrade_2_list, gem_3_sub_stat_2_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_2_list_value = getGemParameter(inputBox, "gem3_sub_stat_upgrade_2_list" + gemSlot);
  if(gem3_sub_stat_upgrade_2_list_value != undefined && gem3_sub_stat_upgrade_2_list_value != "blank") {
    gem3_sub_stat_upgrade_2_list.value = gem3_sub_stat_upgrade_2_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_2_list, gem3_sub_stat_upgrade_2_list, gem_3_sub_stat_2_list, gemSlot);
  }

  var gem_3_sub_stat_2_list_value = getGemParameter(inputBox, "gem_3_sub_stat_2_list" + gemSlot);
  if(gem_3_sub_stat_2_list_value != undefined && gem_3_sub_stat_2_list_value != "blank") {
    gem_3_sub_stat_2_list.value = gem_3_sub_stat_2_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }


  var gem_3_sub_stat_type_3_list_value = getGemParameter(inputBox, "gem_3_sub_stat_type_3_list" + gemSlot);
  if(gem_3_sub_stat_type_3_list_value != undefined && gem_3_sub_stat_type_3_list_value != "blank") {
    gem_3_sub_stat_type_3_list.value = gem_3_sub_stat_type_3_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_3_list, gem3_sub_stat_upgrade_3_list, gem_3_sub_stat_3_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_3_list_value = getGemParameter(inputBox, "gem3_sub_stat_upgrade_3_list" + gemSlot);
  if(gem3_sub_stat_upgrade_3_list_value != undefined && gem3_sub_stat_upgrade_3_list_value != "blank") {
    gem3_sub_stat_upgrade_3_list.value = gem3_sub_stat_upgrade_3_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_3_list, gem3_sub_stat_upgrade_3_list, gem_3_sub_stat_3_list, gemSlot);
  }

  var gem_3_sub_stat_3_list_value = getGemParameter(inputBox, "gem_3_sub_stat_3_list" + gemSlot);
  if(gem_3_sub_stat_3_list_value != undefined && gem_3_sub_stat_3_list_value != "blank") {
    gem_3_sub_stat_3_list.value = gem_3_sub_stat_3_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  var gem_3_sub_stat_type_4_list_value = getGemParameter(inputBox, "gem_3_sub_stat_type_4_list" + gemSlot);
  if(gem_3_sub_stat_type_4_list_value != undefined && gem_3_sub_stat_type_4_list_value != "blank") {
    gem_3_sub_stat_type_4_list.value = gem_3_sub_stat_type_4_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_4_list, gem3_sub_stat_upgrade_4_list, gem_3_sub_stat_4_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_4_list_value = getGemParameter(inputBox, "gem3_sub_stat_upgrade_4_list" + gemSlot);
  if(gem3_sub_stat_upgrade_4_list_value != undefined && gem3_sub_stat_upgrade_4_list_value != "blank") {
    gem3_sub_stat_upgrade_4_list.value = gem3_sub_stat_upgrade_4_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_4_list, gem3_sub_stat_upgrade_4_list, gem_3_sub_stat_4_list, gemSlot);
  }

  var gem_3_sub_stat_4_list_value = getGemParameter(inputBox, "gem_3_sub_stat_4_list" + gemSlot);
  if(gem_3_sub_stat_4_list_value != undefined && gem_3_sub_stat_4_list_value != "blank") {
    gem_3_sub_stat_4_list.value = gem_3_sub_stat_4_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }



}


function ReadGemFromUrl (gemSlot) {
  if(gemSlot == undefined) {
    gemSlot = "";
  }
  var gem_set_list = goog.dom.getElement("gem_set_list" + gemSlot);
  var gem_1_grade_list = goog.dom.getElement("gem_1_grade_list" + gemSlot);
  var gem_1_type_list = goog.dom.getElement("gem_1_type_list" + gemSlot);
  var gem_1_upgrade_list = goog.dom.getElement("gem_1_upgrade_list" + gemSlot);
  // console.log("gem_1_upgrade_list" + gemSlot);
  // console.log(gem_1_upgrade_list);
  var gem_1_list = goog.dom.getElement("gem_1_list" + gemSlot);

  var gem_2_grade_list = goog.dom.getElement("gem_2_grade_list" + gemSlot);
  var gem_2_type_list = goog.dom.getElement("gem_2_type_list" + gemSlot);
  var gem_2_upgrade_list = goog.dom.getElement("gem_2_upgrade_list" + gemSlot);
  var gem_2_list = goog.dom.getElement("gem_2_list" + gemSlot);

  var gem_3_grade_list = goog.dom.getElement("gem_3_grade_list" + gemSlot);
  var gem_3_type_list = goog.dom.getElement("gem_3_type_list" + gemSlot);
  var gem_3_upgrade_list = goog.dom.getElement("gem_3_upgrade_list" + gemSlot);
  var gem_3_list = goog.dom.getElement("gem_3_list" + gemSlot);


  var gem_1_sub_stat_type_1_list = goog.dom.getElement("gem_1_sub_stat_type_1_list" + gemSlot);
  var gem1_sub_stat_upgrade_1_list = goog.dom.getElement("gem1_sub_stat_upgrade_1_list" + gemSlot);
  var gem_1_sub_stat_1_list = goog.dom.getElement("gem_1_sub_stat_1_list" + gemSlot);
  var gem_1_sub_stat_type_2_list = goog.dom.getElement("gem_1_sub_stat_type_2_list" + gemSlot);
  var gem1_sub_stat_upgrade_2_list = goog.dom.getElement("gem1_sub_stat_upgrade_2_list" + gemSlot);
  var gem_1_sub_stat_2_list = goog.dom.getElement("gem_1_sub_stat_2_list" + gemSlot);
  var gem_1_sub_stat_type_3_list = goog.dom.getElement("gem_1_sub_stat_type_3_list" + gemSlot);
  var gem1_sub_stat_upgrade_3_list = goog.dom.getElement("gem1_sub_stat_upgrade_3_list" + gemSlot);
  var gem_1_sub_stat_3_list = goog.dom.getElement("gem_1_sub_stat_3_list" + gemSlot);
  var gem_1_sub_stat_type_4_list = goog.dom.getElement("gem_1_sub_stat_type_4_list" + gemSlot);
  var gem1_sub_stat_upgrade_4_list = goog.dom.getElement("gem1_sub_stat_upgrade_4_list" + gemSlot);
  var gem_1_sub_stat_4_list = goog.dom.getElement("gem_1_sub_stat_4_list" + gemSlot);

  var gem_2_sub_stat_type_1_list = goog.dom.getElement("gem_2_sub_stat_type_1_list" + gemSlot);
  var gem2_sub_stat_upgrade_1_list = goog.dom.getElement("gem2_sub_stat_upgrade_1_list" + gemSlot);
  var gem_2_sub_stat_1_list = goog.dom.getElement("gem_2_sub_stat_1_list" + gemSlot);
  var gem_2_sub_stat_type_2_list = goog.dom.getElement("gem_2_sub_stat_type_2_list" + gemSlot);
  var gem2_sub_stat_upgrade_2_list = goog.dom.getElement("gem2_sub_stat_upgrade_2_list" + gemSlot);
  var gem_2_sub_stat_2_list = goog.dom.getElement("gem_2_sub_stat_2_list" + gemSlot);
  var gem_2_sub_stat_type_3_list = goog.dom.getElement("gem_2_sub_stat_type_3_list" + gemSlot);
  var gem2_sub_stat_upgrade_3_list = goog.dom.getElement("gem2_sub_stat_upgrade_3_list" + gemSlot);
  var gem_2_sub_stat_3_list = goog.dom.getElement("gem_2_sub_stat_3_list" + gemSlot);
  var gem_2_sub_stat_type_4_list = goog.dom.getElement("gem_2_sub_stat_type_4_list" + gemSlot);
  var gem2_sub_stat_upgrade_4_list = goog.dom.getElement("gem2_sub_stat_upgrade_4_list" + gemSlot);
  var gem_2_sub_stat_4_list = goog.dom.getElement("gem_2_sub_stat_4_list" + gemSlot);

  var gem_3_sub_stat_type_1_list = goog.dom.getElement("gem_3_sub_stat_type_1_list" + gemSlot);
  var gem3_sub_stat_upgrade_1_list = goog.dom.getElement("gem3_sub_stat_upgrade_1_list" + gemSlot);
  var gem_3_sub_stat_1_list = goog.dom.getElement("gem_3_sub_stat_1_list" + gemSlot);
  var gem_3_sub_stat_type_2_list = goog.dom.getElement("gem_3_sub_stat_type_2_list" + gemSlot);
  var gem3_sub_stat_upgrade_2_list = goog.dom.getElement("gem3_sub_stat_upgrade_2_list" + gemSlot);
  var gem_3_sub_stat_2_list = goog.dom.getElement("gem_3_sub_stat_2_list" + gemSlot);
  var gem_3_sub_stat_type_3_list = goog.dom.getElement("gem_3_sub_stat_type_3_list" + gemSlot);
  var gem3_sub_stat_upgrade_3_list = goog.dom.getElement("gem3_sub_stat_upgrade_3_list" + gemSlot);
  var gem_3_sub_stat_3_list = goog.dom.getElement("gem_3_sub_stat_3_list" + gemSlot);
  var gem_3_sub_stat_type_4_list = goog.dom.getElement("gem_3_sub_stat_type_4_list" + gemSlot);
  var gem3_sub_stat_upgrade_4_list = goog.dom.getElement("gem3_sub_stat_upgrade_4_list" + gemSlot);
  var gem_3_sub_stat_4_list = goog.dom.getElement("gem_3_sub_stat_4_list" + gemSlot);


  var gemSet = getUrlParameter("gem_set_list" + gemSlot);

  if(gemSet != undefined && gemSet != "") {

    gem_set_list.value = gemSet;
    SumGem(gemSlot);
  }

  var gem1GradeList = getUrlParameter("gem_1_grade_list" + gemSlot);
  if(gem1GradeList != undefined && gem1GradeList != "") {

    gem_1_grade_list.value = gem1GradeList;
    ChangeGemMainGrade(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem1GradeList = getUrlParameter("gem_1_grade_list" + gemSlot);
  if(gem1GradeList != undefined && gem1GradeList != "") {
    // var gem_1_grade_list = goog.dom.getElement("gem_1_grade_list" + gemSlot);
    gem_1_grade_list.value = gem1GradeList;
    ChangeGemMainGrade(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem2GradeList = getUrlParameter("gem_2_grade_list" + gemSlot);
  if(gem2GradeList != undefined && gem2GradeList != "") {

    gem_2_grade_list.value = gem2GradeList;
    ChangeGemMainGrade(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }

  var gem3GradeList = getUrlParameter("gem_3_grade_list" + gemSlot);
  if(gem3GradeList != undefined && gem3GradeList != "") {

    gem_3_grade_list.value = gem3GradeList;
    ChangeGemMainGrade(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  var gem1TypeList = getUrlParameter("gem_1_type_list" + gemSlot);
  if(gem1TypeList != undefined && gem1TypeList != "blank") {

    gem_1_type_list.value = gem1TypeList;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem2TypeList = getUrlParameter("gem_2_type_list" + gemSlot);
  if(gem2TypeList != undefined && gem1TypeList != "blank") {
    gem_2_type_list.value = gem2TypeList;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }


  var gem3TypeList = getUrlParameter("gem_3_type_list" + gemSlot);
  if(gem3TypeList != undefined && gem1TypeList != "blank") {
    gem_3_type_list.value = gem3TypeList;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }


  var gem1UpgradeList = getUrlParameter("gem_1_upgrade_list" + gemSlot);
  if(gem1UpgradeList != undefined && gem1UpgradeList != "blank") {
    gem_1_upgrade_list.value = gem1UpgradeList;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem2UpgradeList = getUrlParameter("gem_2_upgrade_list" + gemSlot);
  if(gem2UpgradeList != undefined && gem2UpgradeList != "blank") {
    gem_2_upgrade_list.value = gem2UpgradeList;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }

  var gem3UpgradeList = getUrlParameter("gem_3_upgrade_list" + gemSlot);
  if(gem3UpgradeList != undefined && gem3UpgradeList != "blank") {
    gem_3_upgrade_list.value = gem3UpgradeList;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  var gem_1_sub_stat_type_1_list_value = getUrlParameter("gem_1_sub_stat_type_1_list" + gemSlot);
  if(gem_1_sub_stat_type_1_list_value != undefined && gem_1_sub_stat_type_1_list_value != "blank") {
    gem_1_sub_stat_type_1_list.value = gem_1_sub_stat_type_1_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_1_list, gem1_sub_stat_upgrade_1_list, gem_1_sub_stat_1_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_1_list_value = getUrlParameter("gem1_sub_stat_upgrade_1_list" + gemSlot);
  if(gem1_sub_stat_upgrade_1_list_value != undefined && gem1_sub_stat_upgrade_1_list_value != "blank") {
    gem1_sub_stat_upgrade_1_list.value = gem1_sub_stat_upgrade_1_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_1_list, gem1_sub_stat_upgrade_1_list, gem_1_sub_stat_1_list, gemSlot);
  }

  var gem_1_sub_stat_1_list_value = getUrlParameter("gem_1_sub_stat_1_list" + gemSlot);
  if(gem_1_sub_stat_1_list_value != undefined && gem_1_sub_stat_1_list_value != "blank") {
    gem_1_sub_stat_1_list.value = gem_1_sub_stat_1_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }



  var gem_1_sub_stat_type_2_list_value = getUrlParameter("gem_1_sub_stat_type_2_list" + gemSlot);
  if(gem_1_sub_stat_type_2_list_value != undefined && gem_1_sub_stat_type_2_list_value != "blank") {
    gem_1_sub_stat_type_2_list.value = gem_1_sub_stat_type_2_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_2_list, gem1_sub_stat_upgrade_2_list, gem_1_sub_stat_2_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_2_list_value = getUrlParameter("gem1_sub_stat_upgrade_2_list" + gemSlot);
  if(gem1_sub_stat_upgrade_2_list_value != undefined && gem1_sub_stat_upgrade_2_list_value != "blank") {
    gem1_sub_stat_upgrade_2_list.value = gem1_sub_stat_upgrade_2_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_2_list, gem1_sub_stat_upgrade_2_list, gem_1_sub_stat_2_list, gemSlot);
  }

  var gem_1_sub_stat_2_list_value = getUrlParameter("gem_1_sub_stat_2_list" + gemSlot);
  if(gem_1_sub_stat_2_list_value != undefined && gem_1_sub_stat_2_list_value != "blank") {
    gem_1_sub_stat_2_list.value = gem_1_sub_stat_2_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }


  var gem_1_sub_stat_type_3_list_value = getUrlParameter("gem_1_sub_stat_type_3_list" + gemSlot);
  if(gem_1_sub_stat_type_3_list_value != undefined && gem_1_sub_stat_type_3_list_value != "blank") {
    gem_1_sub_stat_type_3_list.value = gem_1_sub_stat_type_3_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_3_list, gem1_sub_stat_upgrade_3_list, gem_1_sub_stat_3_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_3_list_value = getUrlParameter("gem1_sub_stat_upgrade_3_list" + gemSlot);
  if(gem1_sub_stat_upgrade_3_list_value != undefined && gem1_sub_stat_upgrade_3_list_value != "blank") {
    gem1_sub_stat_upgrade_3_list.value = gem1_sub_stat_upgrade_3_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_3_list, gem1_sub_stat_upgrade_3_list, gem_1_sub_stat_3_list, gemSlot);
  }

  var gem_1_sub_stat_3_list_value = getUrlParameter("gem_1_sub_stat_3_list" + gemSlot);
  if(gem_1_sub_stat_3_list_value != undefined && gem_1_sub_stat_3_list_value != "blank") {
    gem_1_sub_stat_3_list.value = gem_1_sub_stat_3_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }

  var gem_1_sub_stat_type_4_list_value = getUrlParameter("gem_1_sub_stat_type_4_list" + gemSlot);
  if(gem_1_sub_stat_type_4_list_value != undefined && gem_1_sub_stat_type_4_list_value != "blank") {
    gem_1_sub_stat_type_4_list.value = gem_1_sub_stat_type_4_list_value;
    ChangeGemSubStatType(gem_1_grade_list, gem_1_sub_stat_type_4_list, gem1_sub_stat_upgrade_4_list, gem_1_sub_stat_4_list, gemSlot );
  }

  var gem1_sub_stat_upgrade_4_list_value = getUrlParameter("gem1_sub_stat_upgrade_4_list" + gemSlot);
  if(gem1_sub_stat_upgrade_4_list_value != undefined && gem1_sub_stat_upgrade_4_list_value != "blank") {
    gem1_sub_stat_upgrade_4_list.value = gem1_sub_stat_upgrade_4_list_value;
    ChangeGemSubStatUpgrade(gem_1_grade_list, gem_1_sub_stat_type_4_list, gem1_sub_stat_upgrade_4_list, gem_1_sub_stat_4_list, gemSlot);
  }

  var gem_1_sub_stat_4_list_value = getUrlParameter("gem_1_sub_stat_4_list" + gemSlot);
  if(gem_1_sub_stat_4_list_value != undefined && gem_1_sub_stat_4_list_value != "blank") {
    gem_1_sub_stat_4_list.value = gem_1_sub_stat_4_list_value;
    ChangeGemStat(gem_1_grade_list, gem_1_type_list, gem_1_upgrade_list, gem_1_list, gemSlot);
  }




  var gem_2_sub_stat_type_1_list_value = getUrlParameter("gem_2_sub_stat_type_1_list" + gemSlot);
  if(gem_2_sub_stat_type_1_list_value != undefined && gem_2_sub_stat_type_1_list_value != "blank") {
    gem_2_sub_stat_type_1_list.value = gem_2_sub_stat_type_1_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_1_list, gem2_sub_stat_upgrade_1_list, gem_2_sub_stat_1_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_1_list_value = getUrlParameter("gem2_sub_stat_upgrade_1_list" + gemSlot);
  if(gem2_sub_stat_upgrade_1_list_value != undefined && gem2_sub_stat_upgrade_1_list_value != "blank") {
    gem2_sub_stat_upgrade_1_list.value = gem2_sub_stat_upgrade_1_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_1_list, gem2_sub_stat_upgrade_1_list, gem_2_sub_stat_1_list, gemSlot);
  }

  var gem_2_sub_stat_1_list_value = getUrlParameter("gem_2_sub_stat_1_list" + gemSlot);
  if(gem_2_sub_stat_1_list_value != undefined && gem_2_sub_stat_1_list_value != "blank") {
    gem_2_sub_stat_1_list.value = gem_2_sub_stat_1_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }



  var gem_2_sub_stat_type_2_list_value = getUrlParameter("gem_2_sub_stat_type_2_list" + gemSlot);
  if(gem_2_sub_stat_type_2_list_value != undefined && gem_2_sub_stat_type_2_list_value != "blank") {
    gem_2_sub_stat_type_2_list.value = gem_2_sub_stat_type_2_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_2_list, gem2_sub_stat_upgrade_2_list, gem_2_sub_stat_2_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_2_list_value = getUrlParameter("gem2_sub_stat_upgrade_2_list" + gemSlot);
  if(gem2_sub_stat_upgrade_2_list_value != undefined && gem2_sub_stat_upgrade_2_list_value != "blank") {
    gem2_sub_stat_upgrade_2_list.value = gem2_sub_stat_upgrade_2_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_2_list, gem2_sub_stat_upgrade_2_list, gem_2_sub_stat_2_list, gemSlot);
  }

  var gem_2_sub_stat_2_list_value = getUrlParameter("gem_2_sub_stat_2_list" + gemSlot);
  if(gem_2_sub_stat_2_list_value != undefined && gem_2_sub_stat_2_list_value != "blank") {
    gem_2_sub_stat_2_list.value = gem_2_sub_stat_2_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }


  var gem_2_sub_stat_type_3_list_value = getUrlParameter("gem_2_sub_stat_type_3_list" + gemSlot);
  if(gem_2_sub_stat_type_3_list_value != undefined && gem_2_sub_stat_type_3_list_value != "blank") {
    gem_2_sub_stat_type_3_list.value = gem_2_sub_stat_type_3_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_3_list, gem2_sub_stat_upgrade_3_list, gem_2_sub_stat_3_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_3_list_value = getUrlParameter("gem2_sub_stat_upgrade_3_list" + gemSlot);
  if(gem2_sub_stat_upgrade_3_list_value != undefined && gem2_sub_stat_upgrade_3_list_value != "blank") {
    gem2_sub_stat_upgrade_3_list.value = gem2_sub_stat_upgrade_3_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_3_list, gem2_sub_stat_upgrade_3_list, gem_2_sub_stat_3_list, gemSlot);
  }

  var gem_2_sub_stat_3_list_value = getUrlParameter("gem_2_sub_stat_3_list" + gemSlot);
  if(gem_2_sub_stat_3_list_value != undefined && gem_2_sub_stat_3_list_value != "blank") {
    gem_2_sub_stat_3_list.value = gem_2_sub_stat_3_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }

  var gem_2_sub_stat_type_4_list_value = getUrlParameter("gem_2_sub_stat_type_4_list" + gemSlot);
  if(gem_2_sub_stat_type_4_list_value != undefined && gem_2_sub_stat_type_4_list_value != "blank") {
    gem_2_sub_stat_type_4_list.value = gem_2_sub_stat_type_4_list_value;
    ChangeGemSubStatType(gem_2_grade_list, gem_2_sub_stat_type_4_list, gem2_sub_stat_upgrade_4_list, gem_2_sub_stat_4_list, gemSlot );
  }

  var gem2_sub_stat_upgrade_4_list_value = getUrlParameter("gem2_sub_stat_upgrade_4_list" + gemSlot);
  if(gem2_sub_stat_upgrade_4_list_value != undefined && gem2_sub_stat_upgrade_4_list_value != "blank") {
    gem2_sub_stat_upgrade_4_list.value = gem2_sub_stat_upgrade_4_list_value;
    ChangeGemSubStatUpgrade(gem_2_grade_list, gem_2_sub_stat_type_4_list, gem2_sub_stat_upgrade_4_list, gem_2_sub_stat_4_list, gemSlot);
  }

  var gem_2_sub_stat_4_list_value = getUrlParameter("gem_2_sub_stat_4_list" + gemSlot);
  if(gem_2_sub_stat_4_list_value != undefined && gem_2_sub_stat_4_list_value != "blank") {
    gem_2_sub_stat_4_list.value = gem_2_sub_stat_4_list_value;
    ChangeGemStat(gem_2_grade_list, gem_2_type_list, gem_2_upgrade_list, gem_2_list, gemSlot);
  }



  var gem_3_sub_stat_type_1_list_value = getUrlParameter("gem_3_sub_stat_type_1_list" + gemSlot);
  if(gem_3_sub_stat_type_1_list_value != undefined && gem_3_sub_stat_type_1_list_value != "blank") {
    gem_3_sub_stat_type_1_list.value = gem_3_sub_stat_type_1_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_1_list, gem3_sub_stat_upgrade_1_list, gem_3_sub_stat_1_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_1_list_value = getUrlParameter("gem3_sub_stat_upgrade_1_list" + gemSlot);
  if(gem3_sub_stat_upgrade_1_list_value != undefined && gem3_sub_stat_upgrade_1_list_value != "blank") {
    gem3_sub_stat_upgrade_1_list.value = gem3_sub_stat_upgrade_1_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_1_list, gem3_sub_stat_upgrade_1_list, gem_3_sub_stat_1_list, gemSlot);
  }

  var gem_3_sub_stat_1_list_value = getUrlParameter("gem_3_sub_stat_1_list" + gemSlot);
  if(gem_3_sub_stat_1_list_value != undefined && gem_3_sub_stat_1_list_value != "blank") {
    gem_3_sub_stat_1_list.value = gem_3_sub_stat_1_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }



  var gem_3_sub_stat_type_2_list_value = getUrlParameter("gem_3_sub_stat_type_2_list" + gemSlot);
  if(gem_3_sub_stat_type_2_list_value != undefined && gem_3_sub_stat_type_2_list_value != "blank") {
    gem_3_sub_stat_type_2_list.value = gem_3_sub_stat_type_2_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_2_list, gem3_sub_stat_upgrade_2_list, gem_3_sub_stat_2_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_2_list_value = getUrlParameter("gem3_sub_stat_upgrade_2_list" + gemSlot);
  if(gem3_sub_stat_upgrade_2_list_value != undefined && gem3_sub_stat_upgrade_2_list_value != "blank") {
    gem3_sub_stat_upgrade_2_list.value = gem3_sub_stat_upgrade_2_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_2_list, gem3_sub_stat_upgrade_2_list, gem_3_sub_stat_2_list, gemSlot);
  }

  var gem_3_sub_stat_2_list_value = getUrlParameter("gem_3_sub_stat_2_list" + gemSlot);
  if(gem_3_sub_stat_2_list_value != undefined && gem_3_sub_stat_2_list_value != "blank") {
    gem_3_sub_stat_2_list.value = gem_3_sub_stat_2_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }


  var gem_3_sub_stat_type_3_list_value = getUrlParameter("gem_3_sub_stat_type_3_list" + gemSlot);
  if(gem_3_sub_stat_type_3_list_value != undefined && gem_3_sub_stat_type_3_list_value != "blank") {
    gem_3_sub_stat_type_3_list.value = gem_3_sub_stat_type_3_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_3_list, gem3_sub_stat_upgrade_3_list, gem_3_sub_stat_3_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_3_list_value = getUrlParameter("gem3_sub_stat_upgrade_3_list" + gemSlot);
  if(gem3_sub_stat_upgrade_3_list_value != undefined && gem3_sub_stat_upgrade_3_list_value != "blank") {
    gem3_sub_stat_upgrade_3_list.value = gem3_sub_stat_upgrade_3_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_3_list, gem3_sub_stat_upgrade_3_list, gem_3_sub_stat_3_list, gemSlot);
  }

  var gem_3_sub_stat_3_list_value = getUrlParameter("gem_3_sub_stat_3_list" + gemSlot);
  if(gem_3_sub_stat_3_list_value != undefined && gem_3_sub_stat_3_list_value != "blank") {
    gem_3_sub_stat_3_list.value = gem_3_sub_stat_3_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  var gem_3_sub_stat_type_4_list_value = getUrlParameter("gem_3_sub_stat_type_4_list" + gemSlot);
  if(gem_3_sub_stat_type_4_list_value != undefined && gem_3_sub_stat_type_4_list_value != "blank") {
    gem_3_sub_stat_type_4_list.value = gem_3_sub_stat_type_4_list_value;
    ChangeGemSubStatType(gem_3_grade_list, gem_3_sub_stat_type_4_list, gem3_sub_stat_upgrade_4_list, gem_3_sub_stat_4_list, gemSlot );
  }

  var gem3_sub_stat_upgrade_4_list_value = getUrlParameter("gem3_sub_stat_upgrade_4_list" + gemSlot);
  if(gem3_sub_stat_upgrade_4_list_value != undefined && gem3_sub_stat_upgrade_4_list_value != "blank") {
    gem3_sub_stat_upgrade_4_list.value = gem3_sub_stat_upgrade_4_list_value;
    ChangeGemSubStatUpgrade(gem_3_grade_list, gem_3_sub_stat_type_4_list, gem3_sub_stat_upgrade_4_list, gem_3_sub_stat_4_list, gemSlot);
  }

  var gem_3_sub_stat_4_list_value = getUrlParameter("gem_3_sub_stat_4_list" + gemSlot);
  if(gem_3_sub_stat_4_list_value != undefined && gem_3_sub_stat_4_list_value != "blank") {
    gem_3_sub_stat_4_list.value = gem_3_sub_stat_4_list_value;
    ChangeGemStat(gem_3_grade_list, gem_3_type_list, gem_3_upgrade_list, gem_3_list, gemSlot);
  }

  SumGem(gemSlot);


}





function ReadUrlParams() {





  var playerMon = getUrlParameter("input_astromon_name");
  var playerElement = getUrlParameter("element_list");
  var gemSet = getUrlParameter("gem_set_list");
  var grade = getUrlParameter("grade");
  var lvlList = getUrlParameter("lvl_list");
  var awakenList = getUrlParameter("awaken_list");

  // SumGem();
  SetDataFromUrl(playerMon, playerElement, gemSet, grade, lvlList, awakenList);
  // console.log(playerElement);










}

function SetDataFromUrl(playerMon, playerElement, gemSet, grade, lvlList, awakenList) {
// console.log(playerMon.length);
  if(playerMon != undefined && playerMon.length > 0) {
    var dataListAstromon = goog.dom.getElement("input_astromon_name");
    dataListAstromon.value = playerMon;
    ChangeMonFromUrl(true, playerMon, playerElement, grade, lvlList, awakenList);
  }



  // ChangeGemMainGrade()


}

var getGemParameter = function getGemParameter(inputBox, sParam) {
  // var myOtherUrl =
  //      "http://example.com/index.html?url=" + encodeURIComponent(myUrl);


  var url = inputBox.value;
  // console.log(url);
  var string = encodeURIComponent(url);
  // console.log(string) ;
  var sPageURL = decodeURIComponent(string),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;


  for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
          return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
          //
      }
  }
};

var getUrlParameter = function getUrlParameter(sParam) {
  // var myOtherUrl =
  //      "http://example.com/index.html?url=" + encodeURIComponent(myUrl);


  var url = window.location.search.substring(1);
  var string = encodeURIComponent(url);
  // console.log(string) ;
  var sPageURL = decodeURIComponent(string),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;


  for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
          return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
          //
      }
  }
};



function ChangeMonFromUrl(needToClearElement, playerMon, playerElement, grade, lvlList, awakenList) {


  // console.log(grade)
  if(grade != undefined && grade != "") {
    var grade_list = goog.dom.getElement("grade_list");
    grade_list.value = grade;
  }




  if(awakenList != undefined && awakenList != "") {
    var awaken_list = goog.dom.getElement("awaken_list")
    awaken_list.value = awakenList;
  }

  var imgIcon = goog.dom.getElement("img_mon_icon");

  var input_astromon = goog.dom.getElement("input_astromon_name");
  // console.log(monName.value);

  var monElementMap = {};



  for (i = 2; i <= 6; i++) {
    var tempKey = monsterNameMap[input_astromon.value + "|" + i];
    if (tempKey != undefined) {
      var elementName = toTitleCase(ReadEnumFromNumber(proto.msggamedata.MonsterElementType, tempKey.getElement()).replace("ME_", "").replace("TREE", "Wood"));
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

  domElementList.value = playerElement;

  currentElement = playerElement;

  // console.log(playerElement);



  // SetElement
  imgIcon.setAttribute('src', 'img/' + monElementMap[currentElement].getResourceName() + '.png');

  var imgElement = goog.dom.getElement("img_mon_element");

  var evoStage = monElementMap[currentElement].getEvolution();
  var oriElement = currentElement.replace("Wood", "Tree").toLowerCase();

  // SetMonIcon
  imgElement.setAttribute('src', 'img/frame_evo' + evoStage + "_" + oriElement + '.png');

  var imgGrade = goog.dom.getElement("img_mon_grade");
  var gradeList = goog.dom.getElement("grade_list");



  var grade = gradeList.options[gradeList.selectedIndex].value;
  // SetMOnGrade
  imgGrade.setAttribute('src', 'img/s' + grade + '_.png');

  selectedMonUid = monElementMap[currentElement];
  SetSkill(selectedMonUid);

  UpdateLvlSelect(grade);

  if(lvlList != undefined && lvlList != "") {
    var lvl_list = goog.dom.getElement("lvl_list");
    lvl_list.value = lvlList;
  }

  UpdateMonStat(grade);

  SumGem("_a");
}

function GetStatFloatFromDiv (div) {
  var statDiv = goog.dom.getElement(div).textContent;
  var indexBracket = statDiv.indexOf("(") - 1;
  // console.log(indexBracket);
  if(indexBracket <= 0) {
    indexBracket = statDiv.length;
  }
  var refined = statDiv.substring(0, indexBracket).replace(",", "");
  return parseFloat(refined);
}

function drawChart(statType) {

  var hp = GetStatFloatFromDiv("div_hp");
  var hpA = GetStatFloatFromDiv("div_final_hp_a");
  var hpB = GetStatFloatFromDiv("div_final_hp_b");
  var hpC = GetStatFloatFromDiv("div_final_hp_c");

  var maxHp = Math.max(hp, hpA, hpB, hpC);

  var atk = GetStatFloatFromDiv("div_atk");
  var atkA = GetStatFloatFromDiv("div_final_atk_a");
  var atkB = GetStatFloatFromDiv("div_final_atk_b");
  var atkC = GetStatFloatFromDiv("div_final_atk_c");

  var def = GetStatFloatFromDiv("div_def");
  var defA = GetStatFloatFromDiv("div_final_def_a");
  var defB = GetStatFloatFromDiv("div_final_def_b");
  var defC = GetStatFloatFromDiv("div_final_def_c");

  var heal = GetStatFloatFromDiv("div_heal");
  var healA = GetStatFloatFromDiv("div_final_heal_a");
  var healB = GetStatFloatFromDiv("div_final_heal_b");
  var healC = GetStatFloatFromDiv("div_final_heal_c");

  var crit_dmg = GetStatFloatFromDiv("div_crit_dmg");
  var crit_dmgA = GetStatFloatFromDiv("div_final_crit_dmg_a");
  var crit_dmgB = GetStatFloatFromDiv("div_final_crit_dmg_b");
  var crit_dmgC = GetStatFloatFromDiv("div_final_crit_dmg_c");

  var crit_rate = GetStatFloatFromDiv("div_crit_rate");
  var crit_rateA = GetStatFloatFromDiv("div_final_crit_rate_a");
  var crit_rateB = GetStatFloatFromDiv("div_final_crit_rate_b");
  var crit_rateC = GetStatFloatFromDiv("div_final_crit_rate_c");

  var resist = GetStatFloatFromDiv("div_resist");
  var resistA = GetStatFloatFromDiv("div_final_resist_a");
  var resistB = GetStatFloatFromDiv("div_final_resist_b");
  var resistC = GetStatFloatFromDiv("div_final_resist_c");



  var data = google.visualization.arrayToDataTable([
    ['Hp', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', hp, hp,
    hpA, hpA,
    hpB, hpB,
    hpC, hpC ]
  ]);

  var options = {
    vAxes: {
      0: {
        title: 'Hp'
      }
    },
    hAxis: {
      maxValue: 100000
    },
    title: 'Stats Comparison',
    legend: {position:'top'},
    theme: 'material'
  };

  // var chart = new google.charts.Bar(document.getElementById('barchart_material'));
  //
  // chart.draw(data, google.charts.Bar.convertOptions(options));

  var chart = new google.visualization.BarChart(document.getElementById("barchart_material"));
  chart.draw(data, options)


  var dataAtk = google.visualization.arrayToDataTable([
    ['Atk', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', atk, atk,
    atkA, atkA,
    atkB, atkB,
    atkC, atkC ]
  ]);

  var optionsAtk = {
    vAxes: {
      0: {
        title: 'Attack'
      }
    },
    hAxis: {
      maxValue: 10000
    },
    legend: {position:'none'},
    theme: 'material'
  };


  var chart = new google.visualization.BarChart(document.getElementById("barchart_materialAtk"));
  chart.draw(dataAtk, optionsAtk)



  var dataDef = google.visualization.arrayToDataTable([
    ['Def', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', def, def,
    defA, defA,
    defB, defB,
    defC, defC ]

  ]);

  var optionsDef= {
    vAxes: {
      0: {
        title: 'Defense'
      }
    },
    hAxis: {
      maxValue: 10000
    },

    legend: {position:'none'},
    theme: 'material'
  };

  var chart = new google.visualization.BarChart(document.getElementById("barchart_materialDef"));
  chart.draw(dataDef, optionsDef)


  var dataHeal = google.visualization.arrayToDataTable([
    ['Recovery', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', heal, heal,
    healA, healA,
    healB, healB,
    healC, healC ]

  ]);

  var optionsHeal = {
    vAxes: {
      0: {
        title: 'Recovery'
      }
    },
    hAxis: {
      maxValue: 10000
    },

    legend: {position:'none'},
    theme: 'material'
  };


  var chart = new google.visualization.BarChart(document.getElementById("barchart_materialHeal"));
  chart.draw(dataHeal, optionsHeal)


  var dataCritDmg = google.visualization.arrayToDataTable([
    ['Crit Dmg', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', crit_dmg, crit_dmg,
    crit_dmgA, crit_dmgA,
    crit_dmgB, crit_dmgB,
    crit_dmgC, crit_dmgC ]

  ]);

  var optionsCritDmg = {
    vAxes: {
      0: {
        title: 'Crit Dmg'
      }
    },
    hAxis: {
      maxValue: 200
    },

    legend: {position:'none'},
    theme: 'material'
  };


  var chart = new google.visualization.BarChart(document.getElementById("barchart_materialCritDmg"));
  chart.draw(dataCritDmg, optionsCritDmg)


  var dataCritRate = google.visualization.arrayToDataTable([
    ['Crit Rate', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', crit_rate, crit_rate,
    crit_rateA, crit_rateA,
    crit_rateB, crit_rateB,
    crit_rateC, crit_rateC ]

  ]);

  var optionsCritRate = {
    vAxes: {
      0: {
        title: 'Crit Rate'
      }
    },
    hAxis: {
      maxValue: 100
    },

    legend: {position:'none'},
    theme: 'material'
  };


  var chart = new google.visualization.BarChart(document.getElementById("barchart_materialCritRate"));
  chart.draw(dataCritRate, optionsCritRate)


  var dataResist = google.visualization.arrayToDataTable([
    ['Resist', 'Original', { role: 'annotation' },
    'Gem A', { role: 'annotation' },
    'Gem B', { role: 'annotation' },
    'Gem C', { role: 'annotation' }],
    [' ', resist, resist,
    resistA, resistA,
    resistB, resistB,
    resistC, resistC ]

  ]);

  var optionsResist = {
    vAxes: {
      0: {
        title: 'Resist'
      }
    },
    hAxis: {
      maxValue: 85
    },

    legend: {position:'none'},
    theme: 'material'
  };


  var chart = new google.visualization.BarChart(document.getElementById("barchart_materialResist"));
  chart.draw(dataResist, optionsResist)

}


function CorrectGemSlot (box, targetSlot) {
  var text = box.value;

  var key = text.substring(0, 14);
  switch (key) {
    case "gem_set_list_a":
      return replaceAll(text, "_a", targetSlot);
      break;
    case "gem_set_list_b":
      return replaceAll(text, "_b", targetSlot);
      break;
    case "gem_set_list_c":
      return replaceAll(text, "_c", targetSlot);
      break;

    default:
      return "invalid link";
  }





}


function escapeRegExp(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}


function GetLeaderSkillValue () {

  var divLeader = goog.dom.getElement("leader_list");
  var divLeaderValue = goog.dom.getElement("leader_list_value");
  var img = goog.dom.getElement("leader_list_img");
  var leader_list_desc = goog.dom.getElement("leader_list_desc");



  goog.dom.removeChildren(divLeaderValue);

  var divLeaderSelectedValue = divLeader.options[divLeader.selectedIndex].value;
  var divLeaderSelectedKey = divLeader.options[divLeader.selectedIndex].text;
  var key = divLeaderSelectedKey + "|" +divLeaderSelectedValue;

  var value = skillLeaderOnlyMapRefined[key];



  img.setAttribute('src', 'img/' + divLeaderSelectedValue + '.png');


  var tempSet = new Set();

  for(vall of value) {
    for(i = 0; i <= 5; i++) {
      var newValue = (Math.round((parseFloat(vall) * 10000)) / 100) + (i);
      tempSet.add(newValue);
    }
  }

  var arr = Array.from(tempSet);
  arr.sort();
  arr.reverse();


  for(tempSetValue of arr) {
    var option = goog.dom.createDom('option', {"value": (tempSetValue / 100) }, " +" + tempSetValue.toString() + "%");
    goog.dom.appendChild(divLeaderValue, option);
    divLeaderValue.add(option);
  }


    ChangeLeaderBuffValue();

}


function ChangeLeaderBuffValue () {
  var divLeader = goog.dom.getElement("leader_list");
  var divLeaderValue = goog.dom.getElement("leader_list_value");
  var img = goog.dom.getElement("leader_list_img");
  var leader_list_desc = goog.dom.getElement("leader_list_desc");

  var divLeaderSelectedValue = divLeader.options[divLeader.selectedIndex].value;
  var divLeaderSelectedKey = divLeader.options[divLeader.selectedIndex].text;

  var key = divLeaderSelectedKey + "|" +divLeaderSelectedValue;

  var divLeaderValueSelectedValue = divLeaderValue.options[divLeaderValue.selectedIndex].value;



  var desc = skillLeaderDescMap[key];
  leader_list_desc.innerHTML = SetSkillDescWithoutValue(desc, ( Math.round(parseFloat(divLeaderValueSelectedValue) * 100 )));


  SumGem("_a");
  SumGem("_b");
  SumGem("_c");


}

function CalcEffect(val, targetSe, targetSt, targetElement = proto.msggamedata.MonsterElementType.ME_NONE, invertVal = false, addValue = 0) {
  if(targetSe != null && targetSe.getSubType() == targetSt ) {
    var num = targetSe.getVFloat() + addValue;
    if(invertVal) {
      num = -num;
    }
    if(targetSe.getElement() == proto.msggamedata.MonsterElementType.ME_NONE || targetSe.getElement() == targetElement) {
      return val * num;
    }

  }
  return 0;
}

function CalcLeaderEffect(val) {
  var leaderValueDiv = goog.dom.getElement("leader_list_value");
  var leaderValueSelected = leaderValueDiv.options[leaderValueDiv.selectedIndex].value;

  return val * parseFloat(leaderValueSelected);
}

function Attack (mst) {
  var num1 = 0;
  var flag1 = false;
  var playerSe = undefined;

  // console.log(proto.msggamedata.MonsterSkillType.MS_DEFAULT);

  if(mst == proto.msggamedata.MonsterSkillType.MS_DEFAULT) {
    playerSe = playerDefaultSkillStatusEffect;
  }
  else if(mst == proto.msggamedata.MonsterSkillType.MS_ACTIVE) {
    playerSe = playerActiveSkillStatusEffect;
  }
  else if(mst == proto.msggamedata.MonsterSkillType.MS_CONDACTIVE) {
    playerSe = playerCondActiveSkillStatusEffect;
  }

  var flag2 = playerSe != undefined;

  if(flag2) {
    var subType = playerSe.getSubType();
    var val = 0;

    if(subType == proto.msggamedata.MsgStatusEffect.StatusEffectSubType.SEST_SELFREPLACEDATTACKBYMAXDEFENCE   ) {

    } else if(subType == proto.msggamedata.MsgStatusEffect.StatusEffectSubType.SEST_SELFREPLACEDATTACKBYMAXHEAL) {

    } else if (subType == proto.msggamedata.MsgStatusEffect.StatusEffectSubType.SEST_SELFREPLACEDATTACKBYMAXHP) {

    }
    num1 = ApplyAttackBuff(val);

  }

  if(!flag1) {
    var ret = playerRealAtk;
    var num2 = playerRealGemAtk;
    var num3 = ApplyLeaderSkill(ret, proto.msggamedata.MsgStatusEffect.StatusEffectSubType.SEST_LEADERBUFFATTACK );
    console.log(num3);
  }



  return num1;

}

function ApplyLeaderSkill (ret, st) {
  var leaderToggle = goog.dom.getElement("leader_toggle");
  if(!leaderToggle.checked) {
    return 0;
  }
  var statusEffect = statusEffectMap[playerLeaderSkill.getStatusEffect()];

  if(statusEffect == undefined) {
    return 0;
  }

  return CalcLeaderEffect(ret);


}

function ApplyAttackBuff(val) {
  var num1 = val;
  var num2 = val;
  var flag1 = false;
  var flag2 = false;

  var num4 = attackDown();
  if(num4 != 0 ) {
    flag2 = true;
    num2 *= num4 + 1;
  }



  if(flag1 && flag2) {
    return (num1 + num2) / 2;
  }

  if(flag1) {
    return num1;
  }

  if(flag2) {
    return num2;
  }

  return val;

}


// function attackUp() {
//   if(isOn) {
//     return 0.5;
//   } else {
//     return 0;
//   }
// }

function attackDown() {
  var atkDownInput = goog.dom.getElement("atk_down");
  console.log(atkDownInput.checked);
  if(atkDownInput.checked) {
    return 0.5;
  } else {
    return 0;
  }


}







function ApplyBuffAndDebuff () {
  console.log("work");
  CalcDamage(playerDefaultSkill.getType());
}



function CalcDamage(mst) {
  var num1 = Attack(mst);

  console.log(num1);
}
