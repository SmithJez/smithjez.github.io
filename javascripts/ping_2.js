/* importScripts('../closure/goog/base.js');
importScripts('../closure/goog/asserts/asserts.js');
importScripts('../protobuf/arith.js');
importScripts('../protobuf/constants.js');
importScripts('../protobuf/utils.js');
importScripts('../protobuf/decoder.js');
importScripts('../protobuf/encoder.js');
importScripts('../protobuf/reader.js');
importScripts('../protobuf/writer.js');
importScripts('../protobuf/map.js');
importScripts('../protobuf/message.js'); */
/* importScripts('msg_game_data.js'); */
goog.require('proto.msggamedata.MsgGameData');
goog.require('goog.dom');
goog.require('goog.net.XhrIo');

function loadPage() {
  myVar = setTimeout(showPage, 0);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
}

function GenerateDungeon(url, url2, url3, url4, url5, url6, dunType) {

  var req = new XMLHttpRequest();
  req.open('GET', url, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream = req.responseText;
  var bytes = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var req2 = new XMLHttpRequest();
  req2.open('GET', url2, false);
  req2.overrideMimeType('text/plain; charset=x-user-defined');
  req2.send(null);
  if (req2.status != 200) throw '[' + req2.status + ']' + req2.statusText;
  this.stream2 = req2.responseText;
  var bytes2 = [];
  for (i = 0; i < this.stream2.length; i++) {
    bytes2[i] = this.stream2.charCodeAt(i) & 0xff;
  }

  var req3 = new XMLHttpRequest();
  req3.open('GET', url3, false);
  req3.overrideMimeType('text/plain; charset=x-user-defined');
  req3.send(null);
  if (req3.status != 200) throw '[' + req3.status + ']' + req3.statusText;
  this.stream3 = req3.responseText;
  var bytes3 = [];
  for (i = 0; i < this.stream3.length; i++) {
    bytes3[i] = this.stream3.charCodeAt(i) & 0xff;
  }

  var req4 = new XMLHttpRequest();
  req4.open('GET', url4, false);
  req4.overrideMimeType('text/plain; charset=x-user-defined');
  req4.send(null);
  if (req4.status != 200) throw '[' + req4.status + ']' + req4.statusText;
  this.stream4 = req4.responseText;
  var bytes4 = [];
  for (i = 0; i < this.stream4.length; i++) {
    bytes4[i] = this.stream4.charCodeAt(i) & 0xff;
  }

  var req5 = new XMLHttpRequest();
  req5.open('GET', url5, false);
  req5.overrideMimeType('text/plain; charset=x-user-defined');
  req5.send(null);
  if (req5.status != 200) throw '[' + req5.status + ']' + req5.statusText;
  this.stream5 = req5.responseText;
  var bytes5 = [];
  for (i = 0; i < this.stream5.length; i++) {
    bytes5[i] = this.stream5.charCodeAt(i) & 0xff;
  }

  var req6 = new XMLHttpRequest();
  req6.open('GET', url6, false);
  req6.overrideMimeType('text/plain; charset=x-user-defined');
  req6.send(null);
  if (req6.status != 200) throw '[' + req6.status + ']' + req6.statusText;
  this.stream6 = req6.responseText;
  var bytes6 = [];
  for (i = 0; i < this.stream6.length; i++) {
    bytes6[i] = this.stream6.charCodeAt(i) & 0xff;
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


  var monster = new proto.msggamedata.MsgGameData.deserializeBinary(bytes);
  var stringText = new proto.msggamedata.MsgString.deserializeBinary(bytesString);
  var dunSubStage = new proto.msggamedata.MsgGameData.deserializeBinary(bytes2);
  var dunMonGroup = new proto.msggamedata.MsgGameData.deserializeBinary(bytes3);
  var dunMon = new proto.msggamedata.MsgGameData.deserializeBinary(bytes4);
  var mon = new proto.msggamedata.MsgGameData.deserializeBinary(bytes5);
  var monStage = new proto.msggamedata.MsgGameData.deserializeBinary(bytes6);
  var statusEffect = new proto.msggamedata.MsgGameData.deserializeBinary(bytesStatusEffect);
  var skill = new proto.msggamedata.MsgGameData.deserializeBinary(bytesSkill);

  /* console.log(stringText.array[0][100]); */

  var arrayString = stringText.array[0];
  var arrayDunSub = dunSubStage.array[17];
  var arrayDunMonGroup = dunMonGroup.array[19];
  var arrayDunMon = dunMon.array[18];
  var arrayMon = mon.array[3];
  var arrayMonStage = monStage.array[14];
  var arrayStatusEffect = statusEffect.array[20];
  var arraySkill = skill.array[7];

  /* console.log(arrayString.length); */

  var stringMap = {};
  for (var i = 0; i < arrayString.length; i++) {
    stringMap[arrayString[i][0]] = arrayString[i][1];
  }

  var dunSubStageMap = {};
  for (var i = 0; i < arrayDunSub.length; i++) {
    dunSubStageMap[arrayDunSub[i][0]] = arrayDunSub[i];
  }

  var monGroupMap = {};
  for (var i = 0; i < arrayDunMonGroup.length; i++) {
    monGroupMap[arrayDunMonGroup[i][0]] = arrayDunMonGroup[i];
  }

  var dunMonMap = {};
  for (var i = 0; i < arrayDunMon.length; i++) {
    dunMonMap[arrayDunMon[i][0]] = arrayDunMon[i];
  }
  var monMap = {};
  for (var i = 0; i < arrayMon.length; i++) {
    monMap[arrayMon[i][0]] = arrayMon[i];
  }

  var monStageMap = {};
  for (var i = 0; i < arrayMonStage.length; i++) {
    monStageMap[arrayMonStage[i][0]] = arrayMonStage[i];
  }

  var statusEffectMap = {};
  for (var i = 0; i < arrayStatusEffect.length; i++) {
    statusEffectMap[arrayStatusEffect[i][0]] = arrayStatusEffect[i];
  }

  var skillMap = {};
  for (var i = 0; i < arraySkill.length; i++) {
    skillMap[arraySkill[i][0]] = arraySkill[i];
  }


  var arr = [];
  for (var i = 0; i < arrayString.length; i++) {
    arr.push({
      Key: arrayString[i][0][0],
      value: arrayString[i][0][1]
    })
  }

  /* console.log(arrayDunMonGroup[0]); */

  var listMon = [];

  var displayArray = monster.array[16]

  var golemArray = [];

  /* console.log(monster); */


  for (i = 0; i < displayArray.length; i++) {
    var splitDun = dunType.toLowerCase().split("|");

    var enumDunType = ReadEnumFromNumber(proto.msggamedata.BattleType, displayArray[i][5]).toLowerCase();
    // console.log( enumDunType + " : "+ dunType );

    if (enumDunType == splitDun[0]) {
      if(splitDun[1] != undefined) {

        var dunOpenDate =  splitDun[1].toLowerCase();
        var currentOpenDate = ReadEnumFromNumber(proto.msggamedata.MsgGeneralDungeonStageInfo.OpenDay, displayArray[i][12][4]).toLowerCase();
        // console.log(dunOpenDate);
        // console.log(currentOpenDate);
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

  var main_body = goog.dom.getElement('template_body');

  for (i = 0; i < golemArray.length; i++) {

    // console.log("start");

    var mDubSubStage = dunSubStageMap[golemArray[i]][9];
    var nonBossStageSize = mDubSubStage.length - 1;
    var mMonGroup = monGroupMap[mDubSubStage[0][2]];
    var stageMonBoss = monStageMap[mDubSubStage[nonBossStageSize][3]];
    var monBossObj = monMap[stageMonBoss[1]];
    var bossStat = CalStat(stageMonBoss, monBossObj);



    var floor_lvl = i + 1;

    var floor_div = goog.dom.createDom('div', {"id":"floor_id", "class": "floor_div_" + floor_lvl  } , "");

    goog.dom.appendChild(main_body, floor_div);

    var floor_h3 = goog.dom.createDom('h3', "floor_header black_5", "B" + floor_lvl );

    goog.dom.appendChild(floor_div, floor_h3);

    var container_div = goog.dom.createDom('div', "w3-row-padding div_header_color col-container", "");

    goog.dom.appendChild(floor_div, container_div);

    var displaySize = 1;

    var group_i_1 = goog.dom.createDom('div', "group_" + floor_lvl + "_" + displaySize );

    goog.dom.appendChild(container_div, group_i_1);

    // START SKILL
    CreateStatDom(stringMap, group_i_1, monBossObj, stageMonBoss, bossStat, "black_2");
    // END SKILL

    // START SKILL
    var div_skill_col = goog.dom.createDom('div', "col black_3 width_max", "");
    goog.dom.appendChild(group_i_1, div_skill_col);

    var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills" );

    goog.dom.appendChild(div_skill_col, skill_h4);

    var boss_passive_skill_effect = statusEffectMap[ monBossObj [25]];
    var boss_passive_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect[4]).replace("SEST", "se").toLowerCase() ;

    var boss_active_skill_effect = statusEffectMap[ monBossObj [26]];
    var boss_active_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect[4]).replace("SEST", "se").toLowerCase() ;

    try {
      var boss_cond_skill_effect = statusEffectMap[skillMap[monBossObj[44]][6]];
      var boss_cond_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_cond_skill_effect[4]).replace("SEST", "se").toLowerCase() ;
    } catch (err) {

    }



    var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
    goog.dom.appendChild(div_skill_col, div_skill_col_holder);

    var passive_skill = skillMap[monBossObj [23]];
    var active_skill = skillMap[monBossObj [24]];
    var conditional_skill = skillMap[monBossObj [44]];

    CreateSkillTable(stringMap, div_skill_col_holder, boss_passive_skill_effect,  passive_skill  ,  boss_passive_skill_effect_icon, "Passive");
    goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));

    CreateSkillTable(stringMap, div_skill_col_holder, boss_active_skill_effect,  active_skill  ,  boss_active_skill_effect_icon, "Active");
    goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));

    if(conditional_skill != undefined) {
      CreateSkillTable(stringMap, div_skill_col_holder, boss_cond_skill_effect,  conditional_skill  ,  boss_cond_skill_effect_icon, "Conditional");
    }
    // END SKILL




    var div_skill_col_holder = goog.dom.createDom('div', "w3-half padding_8", "");
    goog.dom.appendChild(div_skill_col, div_skill_col_holder);


    var boss_skill_list = stageMonBoss[26];
    for(kk = 0; kk < boss_skill_list.length; kk++) {

      var status_effect = statusEffectMap[ boss_skill_list[kk]];
      var status_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, status_effect[4]).replace("SEST", "se").toLowerCase() ;
      var boss_skill = skillMap[monBossObj [44]];

      CreateBossSkillTable(stringMap, div_skill_col_holder, status_effect, status_effect_icon, "Boss");
      if(kk < (boss_skill_list.length - 1)) {
        goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));
      }


    }



    displaySize++;


    /* 3 = requiredMon = monGroup*/
    /* 4 = fixedMon = dunMon */

    var fixedMon = mDubSubStage[nonBossStageSize][4]


    if (fixedMon.length == 0) {
      /* use mongroup same as boss*/
      /* dunMonMap */

      var stageMonSize = monGroupMap[mDubSubStage[nonBossStageSize][2]][1].length;

      for (x = 0; x < stageMonSize; x++) {

        var group_i_1 = goog.dom.createDom('div', "group_" + floor_lvl + "_" + displaySize );

        goog.dom.appendChild(container_div, group_i_1);


        /* console.log( stageMonSize); */
        var stageMonMinionBoss = dunMonMap[monGroupMap[mDubSubStage[nonBossStageSize][2]][1][x][0]];
        /* console.log( stageMonMinionBoss); */
        var monMinionBossObj = monMap[dunMonMap[stageMonMinionBoss[0]][1]];
        /* console.log( monMinionBossObj); */
        var minionBossStat = CalStat(stageMonMinionBoss, monMinionBossObj);


        CreateStatDom(stringMap, group_i_1, monMinionBossObj, stageMonMinionBoss, minionBossStat, "black_2");


        // START SKILL
        var div_skill_col = goog.dom.createDom('div', "col black_3 width_max", "");
        goog.dom.appendChild(group_i_1, div_skill_col);

        var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills" );

        goog.dom.appendChild(div_skill_col, skill_h4);

        var boss_passive_skill_effect = statusEffectMap[ monMinionBossObj [25]];
        var boss_passive_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect[4]).replace("SEST", "se").toLowerCase() ;

        var boss_active_skill_effect = statusEffectMap[ monMinionBossObj [26]];
        var boss_active_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect[4]).replace("SEST", "se").toLowerCase() ;


        var div_skill_col_holder = goog.dom.createDom('div', "", "");
        goog.dom.appendChild(div_skill_col, div_skill_col_holder);

        var passive_skill = skillMap[monMinionBossObj [23]];
        var active_skill = skillMap[monMinionBossObj [24]];


        CreateSkillTable(stringMap, div_skill_col_holder, boss_passive_skill_effect,  passive_skill  ,  boss_passive_skill_effect_icon, "Passive");
        goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));

        CreateSkillTable(stringMap, div_skill_col_holder, boss_active_skill_effect,  active_skill  ,  boss_active_skill_effect_icon, "Active");


        // END SKILL


        displaySize++;



      }



    } else {
      /* use dunmon */

      for (z = 0; z < fixedMon.length; z++) {

        var group_i_1 = goog.dom.createDom('div', "group_" + floor_lvl + "_" + displaySize );

        goog.dom.appendChild(container_div, group_i_1);

        var stageMonMinionBoss = dunMonMap[fixedMon[z]];
        var monMinionBossObj = monMap[dunMonMap[stageMonMinionBoss[0]][1]];
        var minionBossStat = CalStat(stageMonMinionBoss, monMinionBossObj);


        CreateStatDom(stringMap, group_i_1, monMinionBossObj, stageMonMinionBoss, minionBossStat, "black_2");

        // START SKILL
        var div_skill_col = goog.dom.createDom('div', "col black_3 width_max", "");
        goog.dom.appendChild(group_i_1, div_skill_col);

        var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills" );

        goog.dom.appendChild(div_skill_col, skill_h4);

        var boss_passive_skill_effect = statusEffectMap[ monMinionBossObj [25]];
        var boss_passive_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect[4]).replace("SEST", "se").toLowerCase() ;

        var boss_active_skill_effect = statusEffectMap[ monMinionBossObj [26]];
        var boss_active_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect[4]).replace("SEST", "se").toLowerCase() ;


        var div_skill_col_holder = goog.dom.createDom('div', "", "");
        goog.dom.appendChild(div_skill_col, div_skill_col_holder);



        var passive_skill = skillMap[monMinionBossObj [23]];
        var active_skill = skillMap[monMinionBossObj [24]];


        CreateSkillTable(stringMap, div_skill_col_holder, boss_passive_skill_effect,  passive_skill  ,  boss_passive_skill_effect_icon, "Passive");
        goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));

        CreateSkillTable(stringMap, div_skill_col_holder, boss_active_skill_effect,  active_skill  ,  boss_active_skill_effect_icon, "Active");

        // END SKILL


        displaySize++;


      }


    }

    if(nonBossStageSize != 0) {


    var fixedMon2 = mDubSubStage[0][4]

    for (z = 1; z < fixedMon2.length; z++) {

      var group_i_1 = goog.dom.createDom('div', "group_" + floor_lvl + "_" + displaySize );

      goog.dom.appendChild(container_div, group_i_1);

      var stageMonMinionBoss = dunMonMap[fixedMon2[z]];
      var monMinionBossObj = monMap[dunMonMap[stageMonMinionBoss[0]][1]];
      var minionBossStat = CalStat(stageMonMinionBoss, monMinionBossObj);
    console.log(stringMap[monMinionBossObj[1]] + " : " +monMinionBossObj[39])


      CreateStatDom(stringMap, group_i_1, monMinionBossObj, stageMonMinionBoss, minionBossStat, "black_2");

      // START SKILL
      var div_skill_col = goog.dom.createDom('div', "col black_3 width_max", "");
      goog.dom.appendChild(group_i_1, div_skill_col);

      var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills" );

      goog.dom.appendChild(div_skill_col, skill_h4);

      var boss_passive_skill_effect = statusEffectMap[ monMinionBossObj [25]];
      var boss_passive_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect[4]).replace("SEST", "se").toLowerCase() ;

      var boss_active_skill_effect = statusEffectMap[ monMinionBossObj [26]];
      var boss_active_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect[4]).replace("SEST", "se").toLowerCase() ;


      var div_skill_col_holder = goog.dom.createDom('div', "", "");
      goog.dom.appendChild(div_skill_col, div_skill_col_holder);


      var passive_skill = skillMap[monMinionBossObj [23]];
      var active_skill = skillMap[monMinionBossObj [24]];


      CreateSkillTable(stringMap, div_skill_col_holder, boss_passive_skill_effect,  passive_skill  ,  boss_passive_skill_effect_icon, "Passive");
      goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));

      CreateSkillTable(stringMap, div_skill_col_holder, boss_active_skill_effect,  active_skill  ,  boss_active_skill_effect_icon, "Active");

      // END SKILL


      displaySize++;


    }

    }



// dunSubStageMap[golemArray[i]][9]
    var maxSize = mDubSubStage[0][1];
    var fixedSize = mDubSubStage[0][4];
    // console.log(maxSize);
    // console.log(fixedSize.length);

    if(maxSize > fixedSize.length) {
      for (j = 0; j < mMonGroup[1].length; j++) {


        var group_i_1 = goog.dom.createDom('div', "group_" + floor_lvl + "_" + displaySize );

        goog.dom.appendChild(container_div, group_i_1);

        var mDunMon = mMonGroup[1][j];
        var stageMon = dunMonMap[mDunMon[0]];

        var monObj = monMap[stageMon[1]];


        var monStat = CalStat(stageMon, monObj);

        CreateStatDom(stringMap, group_i_1, monObj, stageMon, monStat, "black_2");

        // START SKILL
        var div_skill_col = goog.dom.createDom('div', "col black_3 width_max", "");
        goog.dom.appendChild(group_i_1, div_skill_col);

        var skill_h4 = goog.dom.createDom('h4', "text_align_center black_2", "Skills" );

        goog.dom.appendChild(div_skill_col, skill_h4);

        var boss_passive_skill_effect = statusEffectMap[ monObj [25]];
        var boss_passive_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_passive_skill_effect[4]).replace("SEST", "se").toLowerCase() ;

        var boss_active_skill_effect = statusEffectMap[ monObj [26]];
        var boss_active_skill_effect_icon = ReadEnumFromNumber( proto.msggamedata.MsgStatusEffect.StatusEffectSubType, boss_active_skill_effect[4]).replace("SEST", "se").toLowerCase() ;


        var div_skill_col_holder = goog.dom.createDom('div', "", "");
        goog.dom.appendChild(div_skill_col, div_skill_col_holder);

        var passive_skill = skillMap[monObj [23]];
        var active_skill = skillMap[monObj [24]];


        CreateSkillTable(stringMap, div_skill_col_holder, boss_passive_skill_effect,  passive_skill  ,  boss_passive_skill_effect_icon, "Passive");
        goog.dom.appendChild(div_skill_col_holder, goog.dom.createDom('br',""));

        CreateSkillTable(stringMap, div_skill_col_holder, boss_active_skill_effect,  active_skill  ,  boss_active_skill_effect_icon, "Active");


        // END SKILL

        displaySize++;

      }

    }

  }
    showPage();
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

function clamp(num, min, max) {
  return num <= min ? min : num >= max ? max : num;
}

function ReadEnumFromNumber(myEnum, number) {
  for (var g in myEnum) {
    if (myEnum[g] == number) {
      return g;
    }
  }
  return null;
}

function SetSkillDesc (ori_desc, m) {
  var text = ori_desc;
  var text2 = "";

  var argChance = Math.round( m[7] * 100  ).toString();
  var arg = argChance;

  var argDuration = m[6].toString();
  var arg2 = argDuration;

  var num = Math.round( m[8] * 100 );
  var value = "";

  if( num == undefined) {
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
  }) ;

  var p2 = /\[-]/g;

  var text3 = text2.replace(p2, "</span>");




  text3 = text3.replace("{0}", arg).replace("{1}", arg2).replace("{2}", arg3).replace("{3}", arg4);


  return text3;


}


function CreateSkillTable (stringMap, div_skill_col_holder, boss_skill_effect, boss_skill, boss_skill_effect_icon,  title) {

  var rawType = "";
  var rawTarget = "";
  var pureType = "";
  var actionPower;
  try {
    pureType = boss_skill[5][0];
    rawType = ReadEnumFromNumber(proto.msggamedata.MsgMonsterSkillAction.ActionType, pureType);
    rawTarget = ReadEnumFromNumber(proto.msggamedata.MonsterSkillTargetType,  boss_skill[4]  );
    actionPower = (Math.round (boss_skill[5][1] * 10000) / 100 )  .toString() + "%"   ;
  } catch (err) {

  }


  var actionType = rawType.replace("ATTACK", "Attack").replace("HEAL", "Heal");

  var target = rawTarget.replace("MST_","" ).replace("ONE", "Single").replace("TEAM", "Allied").replace("ALL","All")   ;

  var table = goog.dom.createDom('table', {"class":"skill_table", "cellspacing":"0", "cellpadding":"0"  });
  goog.dom.appendChild(div_skill_col_holder, table);
  var tbody = goog.dom.createDom('tbody',"");
  goog.dom.appendChild(table, tbody);

// rowTitle
  var rowSkillTitle = goog.dom.createDom('tr',"");
  goog.dom.appendChild(tbody, rowSkillTitle);
  var tdSkillType = goog.dom.createDom('td', {"class":"bold_text", "colspan":"3" }, title + " Skill" );
  goog.dom.appendChild(rowSkillTitle, tdSkillType);
  var tdSkillName = goog.dom.createDom('td', {"class":"bold_text yellow_text right_text", "colspan":"4" }, stringMap[boss_skill[1]] );
  goog.dom.appendChild(rowSkillTitle, tdSkillName);

// rowDetail
  var rowSkillDetail = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillDetail);
  var tdSkillIcon = goog.dom.createDom('td',{"rowspan":"3"});
  goog.dom.appendChild(rowSkillDetail, tdSkillIcon);
  var imgSkillIcon = goog.dom.createDom('img', { "class": "skill_icon", "src": "img/" + boss_skill[8].toLowerCase()  + ".png"  }, "");

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
  var tdSkillDesc = goog.dom.createDom('td', {"class":"skill_desc", "colspan":"6", "rowspan":"2" }, stringMap[boss_skill[2]] );
  goog.dom.appendChild(rowSkillDesc, tdSkillDesc);
  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);

  // rowEffectTitle
  var rowSkillEffectTitle = goog.dom.createDom('tr',"");
  goog.dom.appendChild(tbody, rowSkillEffectTitle);
  var tdSkillEffectType = goog.dom.createDom('td', {"class":"bold_text", "colspan":"3" }, title + " Effect"  );
  goog.dom.appendChild(rowSkillEffectTitle, tdSkillEffectType);
  var tdSkillEffectName = goog.dom.createDom('td', {"class":"bold_text yellow_text right_text", "colspan":"4" }, stringMap[boss_skill_effect[1]] );
  goog.dom.appendChild(rowSkillEffectTitle, tdSkillEffectName);


  // rowEffectDesc

  var skill_desc = stringMap[boss_skill_effect[2]]

  var skill_desc_display = SetSkillDesc (skill_desc, boss_skill_effect);
  var rowSkillEffectDesc = goog.dom.createDom('tr',"");
  goog.dom.appendChild(tbody, rowSkillEffectDesc);

  var tdSkillEffectIcon = goog.dom.createDom('td',{"rowspan":"3"});
  goog.dom.appendChild(rowSkillEffectDesc, tdSkillEffectIcon);

  var imgSkillEffectIcon = goog.dom.createDom('img', { "class": "skill_icon", "src": "img/" + boss_skill_effect_icon  + ".png"}, "");
  goog.dom.appendChild(tdSkillEffectIcon, imgSkillEffectIcon);
  var tdSkillEffectDesc = goog.dom.createDom('td', {"class":"skill_desc", "colspan":"6", "rowspan":"2" }, "" );
  tdSkillEffectDesc.innerHTML = skill_desc_display
  goog.dom.appendChild(rowSkillEffectDesc, tdSkillEffectDesc);




  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);



}


function CreateBossSkillTable (stringMap, div_skill_col_holder, boss_skill_effect, boss_skill_effect_icon,  title) {

  var bossSkill = boss_skill_effect[11][1];


  var condition = ReadEnumFromNumber(proto.msggamedata.MsgStatusEffect.StatusEffectTriggerCond,  bossSkill).replace("SETC_","")  ;



  var suffix = "";

  var turn = boss_skill_effect[11][2].toString();

  if(condition == "ALWAYS") {
    turn = "-";
  } else if (condition == "TURN") {
    suffix = " turns";
  } else if (condition == "HIT") {
    suffix = " hits";
  } else {
    suffix = "";
  }

  var turnCount = turn + suffix;



  var amount = boss_skill_effect[8];
  if(amount == undefined) {
    amount = boss_skill_effect[9];
  } else {
    amount = (Math.round(   (amount * 10000) ) / 100)  .toString() + "%";
  }

  if(amount == undefined) {
    amount = "-";
  }


  var table = goog.dom.createDom('table', {"class":"skill_table", "cellspacing":"0", "cellpadding":"0", "table-layout":"fixed"  });
  goog.dom.appendChild(div_skill_col_holder, table);
  var tbody = goog.dom.createDom('tbody',"");
  goog.dom.appendChild(table, tbody);

// rowTitle
  var rowSkillTitle = goog.dom.createDom('tr',"");
  goog.dom.appendChild(tbody, rowSkillTitle);
  var tdSkillType = goog.dom.createDom('td', {"class":"bold_text", "colspan":"2" }, title + " Skill" );
  goog.dom.appendChild(rowSkillTitle, tdSkillType);
  var tdSkillName = goog.dom.createDom('td', {"class":"bold_text yellow_text right_text", "colspan":"3" }, stringMap[boss_skill_effect[1]] );
  goog.dom.appendChild(rowSkillTitle, tdSkillName);

// rowDetail
  var rowSkillDetail = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillDetail);
  var tdSkillIcon = goog.dom.createDom('td',{"rowspan":"3"});
  goog.dom.appendChild(rowSkillDetail, tdSkillIcon);
  var imgSkillIcon = goog.dom.createDom('img', { "class": "skill_icon", "src": "img/" + boss_skill_effect_icon  + ".png"  }, "");

  goog.dom.appendChild(tdSkillIcon, imgSkillIcon);

  var tdSkillPowerTitle = goog.dom.createDom('td', "bold_text red_text", "Amount:");
  goog.dom.appendChild(rowSkillDetail, tdSkillPowerTitle);

  var tdSkillPowerValue = goog.dom.createDom('td', "yellow_text", amount.toString());

  goog.dom.appendChild(rowSkillDetail, tdSkillPowerValue);

  var tdSkillTypeTitle = goog.dom.createDom('td', "bold_text red_text", "Every:");
  goog.dom.appendChild(rowSkillDetail, tdSkillTypeTitle);
  var tdSkillTypeValue = goog.dom.createDom('td', "yellow_text", turnCount);
  goog.dom.appendChild(rowSkillDetail, tdSkillTypeValue);

// rowSkillDesc
  var skill_desc = stringMap[boss_skill_effect[2]]
  var skill_desc_display = SetSkillDesc (skill_desc, boss_skill_effect);

  var rowSkillDesc = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowSkillDesc);
  var tdSkillDesc = goog.dom.createDom('td', {"class":"skill_desc", "colspan":"4", "rowspan":"2" } );
  tdSkillDesc.innerHTML = skill_desc_display

  goog.dom.appendChild(rowSkillDesc, tdSkillDesc);
  var rowBlank = goog.dom.createDom('tr', "");
  goog.dom.appendChild(tbody, rowBlank);


}



function CreateSkillDom (stringMap, div_skill_col_holder, boss_skill_effect, boss_skill_effect_icon, title ) {

  var div_skill_holder = goog.dom.createDom('div', "align_left", "");
  goog.dom.appendChild(div_skill_col_holder, div_skill_holder);

  var div_skill_holder_inside = goog.dom.createDom('div', "", "");
  goog.dom.appendChild(div_skill_holder, div_skill_holder_inside);

  var div_skill_holder_inside_title_holder = goog.dom.createDom('div', "", "");
  goog.dom.appendChild(div_skill_holder_inside, div_skill_holder_inside_title_holder);

  var div_skill_type = goog.dom.createDom('div', "div_horizontal", title);
  goog.dom.appendChild(div_skill_holder_inside_title_holder, div_skill_type);

  var div_skill_name = goog.dom.createDom('div', "float_right", stringMap[boss_skill_effect[1]] );
  goog.dom.appendChild(div_skill_holder_inside_title_holder, div_skill_name);

  var img_skill = goog.dom.createDom('img', { "class": "w3-quarter skill_icon", "src": "img/" + boss_skill_effect_icon + ".png"  }, "")

  goog.dom.appendChild(div_skill_holder_inside, img_skill);

  var skill_desc = stringMap[boss_skill_effect[2]]

  var skill_desc_display = SetSkillDesc (skill_desc, boss_skill_effect);
  var div_desc = goog.dom.createDom ('div', "w3-threequarter div_align_top", "");
  div_desc.innerHTML = skill_desc_display;
  goog.dom.appendChild(div_skill_holder_inside, div_desc);


}



function CreateStatDom (stringMap, group_i_1, monBossObj, stageMonBoss, bossStat, color ) {

  var div_col = goog.dom.createDom('div', "col " + color + " stat_width", "");

  goog.dom.appendChild(group_i_1, div_col);

  var mon_name_h4 = goog.dom.createDom('h4', "text_align_center", stringMap[monBossObj[1]] );

  goog.dom.appendChild(div_col, mon_name_h4);

  var div_icon_holder = goog.dom.createDom('div',"");
  goog.dom.appendChild(div_col, div_icon_holder);

  var mon_icon = goog.dom.createDom('img', {"class":"img_1", "src": '/img/' + monBossObj[29] + '.png'  } , "");


  goog.dom.appendChild(div_icon_holder, mon_icon);

  var mon_grade = goog.dom.createDom('img', {"class":"img_3", "src": '/img/s' + stageMonBoss[25] + '_.png'  } , "");

  goog.dom.appendChild(div_icon_holder, mon_grade);

  var mon_element = ReadEnumFromNumber(proto.msggamedata.MonsterElementType, monBossObj[21] ).replace("ME_","").toLowerCase();

  var mon_frame = goog.dom.createDom('img', {"class":"monster_icon img_2", "src": 'img/frame_evo' + monBossObj[28] + "_" + mon_element + '.png'  } , "");

  goog.dom.appendChild(div_icon_holder, mon_frame);



  var div_stat = goog.dom.createDom('div', "");

  goog.dom.appendChild(div_col, div_stat);

  var div_lv_col_container = goog.dom.createDom('div', "col-container", "");

  goog.dom.appendChild(div_stat, div_lv_col_container);

  var div_lv_left = goog.dom.createDom('div', "stat_col", "Lv.");
  goog.dom.appendChild(div_lv_col_container, div_lv_left);

  var div_lv_right = goog.dom.createDom('div', "stat_col text_align_right", stageMonBoss[2].toString());
  goog.dom.appendChild(div_lv_col_container, div_lv_right);


  var stat_list = ["Hp", "Attack", "Defense", "Recovery", "Crit Dmg", "Crit Rate", "Resist", "Sp Fill/Hit", "Def%", "-DefDown", "-Shock", "-Both"];


  for (jj = 1; jj < bossStat.length; jj++) {
    var boss_data_col_container = goog.dom.createDom('div', "col-container", "");
    goog.dom.appendChild(div_stat, boss_data_col_container);
    var div_lv_left;
    if(stat_list[jj -1] == "-DefDown") {
      div_lv_left = goog.dom.createDom('img', {"class":"skill_icon_stat", "src": 'img/se_debuffdefence.png'  }   );
    } else if (stat_list[jj -1] == "-Shock") {
      div_lv_left = goog.dom.createDom('img', {"class":"skill_icon_stat", "src": 'img/se_stunelectricshock.png'  }   );
    } else if (stat_list[jj -1] == "-Both") {
      div_lv_left = goog.dom.createDom('div', "stat_col");

      var tempImg1 = goog.dom.createDom('img', {"class":"skill_icon_stat", "src": 'img/se_stunelectricshock.png'  }   );
      var tempImg2 = goog.dom.createDom('img', {"class":"skill_icon_stat", "src": 'img/se_debuffdefence.png'  }   );

      goog.dom.appendChild(div_lv_left, tempImg2);
      goog.dom.appendChild(div_lv_left, tempImg1);



    } else {
      div_lv_left = goog.dom.createDom('div', "stat_col", stat_list[jj - 1]);
    }

    goog.dom.appendChild(boss_data_col_container, div_lv_left);

    var div_lv_right = goog.dom.createDom('div', "stat_col text_align_right", bossStat[jj].toString());
    goog.dom.appendChild(boss_data_col_container, div_lv_right);
  }

}
