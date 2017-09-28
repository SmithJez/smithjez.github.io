goog.require('proto.msggamedata.MsgGameData');
goog.require('goog.dom');
goog.require('goog.net.XhrIo');

function getStory(callback) {

  var stageDB = "/data/stages.smj"
  var subStageDB = "/data/substages.smj"
  var itemDB = "/data/items.smj"
  var randomDB = "data/randoms.smj"
  var runeDB = "data/runes.smj"
  var monsterDB = "data/monsters.smj"

  var req = new XMLHttpRequest();
  req.open('GET', stageDB, false);
  req.overrideMimeType('text/plain; charset=x-user-defined');
  req.send(null);
  if (req.status != 200) throw '[' + req.status + ']' + req.statusText;
  this.stream = req.responseText;
  var bytes = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var req2 = new XMLHttpRequest();
  req2.open('GET', subStageDB, false);
  req2.overrideMimeType('text/plain; charset=x-user-defined');
  req2.send(null);
  if (req2.status != 200) throw '[' + req2.status + ']' + req2.statusText;
  this.stream = req2.responseText;
  var bytes2 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes2[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var req3 = new XMLHttpRequest();
  req3.open('GET', itemDB, false);
  req3.overrideMimeType('text/plain; charset=x-user-defined');
  req3.send(null);
  if (req3.status != 200) throw '[' + req3.status + ']' + req3.statusText;
  this.stream = req3.responseText;
  var bytes3 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes3[i] = this.stream.charCodeAt(i) & 0xff;
  }


  var req4 = new XMLHttpRequest();
  req4.open('GET', randomDB, false);
  req4.overrideMimeType('text/plain; charset=x-user-defined');
  req4.send(null);
  if (req4.status != 200) throw '[' + req4.status + ']' + req4.statusText;
  this.stream = req4.responseText;
  var bytes4 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes4[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var req5 = new XMLHttpRequest();
  req5.open('GET', runeDB, false);
  req5.overrideMimeType('text/plain; charset=x-user-defined');
  req5.send(null);
  if (req5.status != 200) throw '[' + req5.status + ']' + req5.statusText;
  this.stream = req5.responseText;
  var bytes5 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes5[i] = this.stream.charCodeAt(i) & 0xff;
  }

  var req6 = new XMLHttpRequest();
  req6.open('GET', monsterDB, false);
  req6.overrideMimeType('text/plain; charset=x-user-defined');
  req6.send(null);
  if (req6.status != 200) throw '[' + req6.status + ']' + req6.statusText;
  this.stream = req6.responseText;
  var bytes6 = [];
  for (i = 0; i < this.stream.length; i++) {
    bytes6[i] = this.stream.charCodeAt(i) & 0xff;
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


  var stage = new proto.msggamedata.MsgGameData.deserializeBinary(bytes);
  var subStage = new proto.msggamedata.MsgGameData.deserializeBinary(bytes2);
  var items = new proto.msggamedata.MsgGameData.deserializeBinary(bytes3);
  var randoms = new proto.msggamedata.MsgGameData.deserializeBinary(bytes4);
  var runes = new proto.msggamedata.MsgGameData.deserializeBinary(bytes5);
  var mon = new proto.msggamedata.MsgGameData.deserializeBinary(bytes6);
  var stringText = new proto.msggamedata.MsgString.deserializeBinary(bytesString);

  var arrayString = stringText.array[0];
  var arraySubStage = subStage.array[13];
  var arrayItem = items.array[11];
  var arrayRandom = randoms.array[8];
  var arrayRune = runes.array[22];
  var arrayMon = mon.array[3];

  var stringMap = {};
  for (var i = 0; i < arrayString.length; i++) {
    stringMap[arrayString[i][0]] = arrayString[i][1];
  }

  var subStageMap = {};
  for (var i = 0; i < arraySubStage.length; i++) {
    subStageMap[arraySubStage[i][0]] = arraySubStage[i];
  }

  var itemMap = {};
  for (var i = 0; i < arrayItem.length; i++) {
    itemMap[arrayItem[i][0]] = arrayItem[i];
  }

  var randomMap = {};
  for (var i = 0; i < arrayRandom.length; i++) {
    randomMap[arrayRandom[i][0]] = arrayRandom[i];
  }

  var runeMap = {};
  for (var i = 0; i < arrayRune.length; i++) {
    runeMap[arrayRune[i][0]] = arrayRune[i];
  }

  var monMap = {};
  for (var i = 0; i < arrayMon.length; i++) {
    monMap[arrayMon[i][0]] = arrayMon[i];
  }

  // console.log(itemMap);

  var stageSize = stage.array[12].length;

  var mainHead = goog.dom.getElement('mainHead');
  var mainBody = goog.dom.createDom('tbody', {
    'id': 'mainBody'
  }, "");

  var table = goog.dom.getElement('mainTable');


  goog.dom.appendChild(table, mainBody);

  // use stageSize
  for (i = 0; i < stageSize; i++) {

    var isStoryStage = stage.array[12][i][16];
    if (isStoryStage != undefined) {
      //StageName
      var stageName = stringMap[stage.array[12][i][1]];

      var stageTd = goog.dom.createDom('td', {
        'colspan': '7'
      }, stageName)
      var line_stage = goog.dom.createDom('tr', {
        'class': 'line_stage'
      }, "")
      // line.setAttribute("rowspan", subStageList.length);

      var subStageList = stage.array[12][i][5];
      goog.dom.appendChild(line_stage, stageTd);
      goog.dom.appendChild(mainBody, line_stage);

      var stageHolderTd = goog.dom.createDom('td', {
        'colspan': '7', 'class': 'stage_holder_parent'
      }, "")
      goog.dom.appendChild(mainBody, stageHolderTd);

      // use subStageList.length
      for (k = 0; k < subStageList.length; k++) {
        var subRow = 0;
        var rewardList = subStageMap[subStageList[k]][24];

        var rewardGeneral = subStageMap[subStageList[k]][25];
        var rewardGeneralRandomList = randomMap[rewardGeneral][1];

        var subStagePing = goog.dom.createDom('td', {
          'id': 'ping_general_' + i + "_" + k + "_" + subRow ,
          'colspan': '6'
        }, "")
        var subStageNameText = goog.dom.createDom('td', { 'id': 'sub_stage_text', 'align':'center',
          'colspan': 1
        }, "General Drop")
        var lineSubStage = goog.dom.createDom('tr', 'line_sub_stage_general_' + i + "_" + k , "")

        goog.dom.appendChild(lineSubStage, subStageNameText);
        goog.dom.appendChild(lineSubStage, subStagePing);
        goog.dom.appendChild(stageHolderTd, lineSubStage);

        var bookTempMap = new Map();

        for(p =0 ; p < rewardGeneralRandomList.length; p++) {
          // console.log(rewardGeneralRandomList[p]);



          var rewardRandom = rewardGeneralRandomList[p];
          var rewardRandomProb = (rewardRandom[1] * 100).toFixed(2);
          var rewardRandomProbOriginal = rewardRandom[1];
          var rewardRandomQty = rewardRandom[3];

          if (rewardRandomProb > 0) {
            if (rewardRandom[0] != 15) {
              // console.log(subRow);
              if (p % 5 == 0 && p != 0) {
                subRow++;
                subStageTd = goog.dom.createDom('td', {
                  'id': 'ping_general_' + i + "_" + k + "_" + subRow,
                  'colspan': '6'
                }, "")

                subStageNameText.setAttribute('rowspan',subRow + 1);
                lineSubStage = goog.dom.createDom('tr', 'line_sub_stage_' + i + "_" + k + "_"  + subRow, "")

                goog.dom.appendChild(lineSubStage, subStageTd);
                goog.dom.appendChild(stageHolderTd, lineSubStage);
              }

              if (rewardRandom[0] == 11) {
                //DungeonTicket
                var img = goog.dom.createDom('img', "drop_icon")
                img.setAttribute('src', '/img/common_2_352.png')
                var td = goog.dom.createDom('td', {
                  'class': 'td_drop',
                  'align': 'center',
                  'rowspan': '3'
                }, img)
                var rowDrop1 = goog.dom.createDom('tr', undefined, "")
                var rowDrop2 = goog.dom.createDom('tr', undefined, "")

                var rewardNameTd = goog.dom.createDom('td', undefined, "Dragon Ticket[x" + rewardRandomQty + "]")
                goog.dom.appendChild(rowDrop1, rewardNameTd);
                var rewardProbTd = goog.dom.createDom('td', undefined, "(" + rewardRandomProb + "%)")
                goog.dom.appendChild(rowDrop2, rewardProbTd);

                var tdRewardText = goog.dom.createDom('td', {
                  'class': 'td_reward_text',
                  'align': 'center'
                }, td)

                var tempPing = goog.dom.getElement('ping_general_' + i + "_" + k + "_" + subRow);
                // console.log(tempPing);
                goog.dom.appendChild(tdRewardText, rowDrop1);
                goog.dom.appendChild(tdRewardText, rowDrop2);
                goog.dom.appendChild(tempPing, tdRewardText);

              }
              else {

                //Normal Item


                var rewardItem = itemMap[rewardRandom[2]];
                var rewardRandomName = stringMap[rewardItem[1]];
                var rewardRandomIcon = rewardItem[8];

                var img = goog.dom.createDom('img', "drop_icon")
                img.setAttribute('src', '/img/' + rewardRandomIcon + '.png')
                var td = goog.dom.createDom('td', {
                  'class': 'td_drop',
                  'align': 'center',
                  'rowspan': '3'
                }, img)
                var rowDrop1 = goog.dom.createDom('tr', undefined, "")
                var rowDrop2 = goog.dom.createDom('tr', undefined, "")

                var rewardNameTd = goog.dom.createDom('td', undefined, rewardRandomName + "[x" + rewardRandomQty + "]")
                goog.dom.appendChild(rowDrop1, rewardNameTd);
                var rewardProbTd = goog.dom.createDom('td', undefined, "(" + rewardRandomProb + "%)")
                goog.dom.appendChild(rowDrop2, rewardProbTd);

                var tdRewardText = goog.dom.createDom('td', {
                  'class': 'td_reward_text',
                  'align': 'center'
                }, td)
                var tempPing = goog.dom.getElement('ping_general_' + i + "_" + k + "_" + subRow);
                // console.log(tempPing);
                goog.dom.appendChild(tdRewardText, rowDrop1);
                goog.dom.appendChild(tdRewardText, rowDrop2);
                goog.dom.appendChild(tempPing, tdRewardText);


              }

            }
            else {
              //SkillBook Item

              if (bookTempMap.get("book") != undefined) {
                // has oldOnes
                var oldValue = bookTempMap.get("book");
                var newProb = oldValue + rewardRandomProbOriginal;
                bookTempMap.set("book", newProb);
              } else {
                // create new
                bookTempMap.set("book", rewardRandomProbOriginal);
              }



              // var rewardItem = itemMap[rewardRandom[2]];
              // var rewardRandomName = stringMap[ monMap[rewardRandom[2]][1] ];
              // var img = goog.dom.createDom('img', "drop_icon")
              // img.setAttribute('src', '/img/skill_book_3.png')
              // var td = goog.dom.createDom('td', {
              //   'class': 'td_drop',
              //   'align': 'center',
              //   'rowspan': '3'
              // }, img)
              // var rowDrop1 = goog.dom.createDom('tr', undefined, "")
              // var rowDrop2 = goog.dom.createDom('tr', undefined, "")
              //
              // var rewardNameTd = goog.dom.createDom('td', undefined, "[Book] " + rewardRandomName)
              // goog.dom.appendChild(rowDrop1, rewardNameTd);
              // var rewardProbTd = goog.dom.createDom('td', undefined, "(" + rewardRandomProb + "%)")
              // goog.dom.appendChild(rowDrop2, rewardProbTd);
              //
              // var tdRewardText = goog.dom.createDom('td', {
              //   'class': 'td_reward_text',
              //   'align': 'center'
              // }, td)
              // var tempPing = goog.dom.getElement('ping_general_' + i + "_" + k + "_" + subRow);
              // goog.dom.appendChild(tdRewardText, rowDrop1);
              // goog.dom.appendChild(tdRewardText, rowDrop2);
              // goog.dom.appendChild(tempPing, tdRewardText);
            }
          }





        }

        var rewardItem = itemMap[rewardRandom[2]];



        var img = goog.dom.createDom('img', "drop_icon")
        img.setAttribute('src', '/img/skill_book_3.png')
        var td = goog.dom.createDom('td', {
          'class': 'td_drop',
          'align': 'center',
          'rowspan': '3'
        }, img)
        var rowDrop1 = goog.dom.createDom('tr', undefined, "")
        var rowDrop2 = goog.dom.createDom('tr', undefined, "")

        var bookChance = (bookTempMap.get("book") * 100).toFixed(2);

        var rewardNameTd = goog.dom.createDom('td', undefined, "Skill Book")
        goog.dom.appendChild(rowDrop1, rewardNameTd);
        var rewardProbTd = goog.dom.createDom('td', undefined, "(" +bookChance+ "%)")
        goog.dom.appendChild(rowDrop2, rewardProbTd);

        var tdRewardText = goog.dom.createDom('td', {
          'class': 'td_reward_text',
          'align': 'center'
        }, td)
        var tempPing = goog.dom.getElement('ping_general_' + i + "_" + k + "_" + subRow);
        goog.dom.appendChild(tdRewardText, rowDrop1);
        goog.dom.appendChild(tdRewardText, rowDrop2);
        goog.dom.appendChild(tempPing, tdRewardText);


        for (j = 0; j < rewardList.length; j++) {
          //0 = normal ; 1 = hard; 2 = extreme

          var subRow = 0;

          var difficulty;
          switch (j) {
            case 0:
              difficulty = "Normal";
              break;
            case 1:
              difficulty = "Hard";
              break;
            case 2:
              difficulty = "Extreme";
              break;
            default:
              difficulty = "Normal";
              break;
          }

          var subStagePing = goog.dom.createDom('td', {
            'id': 'ping_' + i + "_" + k + "_" + j + "_" + subRow ,
            'colspan': '6'
          }, "")
          var subStageNameText = goog.dom.createDom('td', { 'id': 'sub_stage_text', 'align':'center',
            'colspan': 1
          }, stringMap[subStageMap[subStageList[k]][2]] + " [" + difficulty + "]")
          var lineSubStage = goog.dom.createDom('tr', 'line_sub_stage_' + i + "_" + k + "_" + j + "_" + subRow, "")

          goog.dom.appendChild(lineSubStage, subStageNameText);
          goog.dom.appendChild(lineSubStage, subStagePing);
          goog.dom.appendChild(stageHolderTd, lineSubStage);

          var reward = rewardList[j]

          var rewardRandomList = randomMap[reward[0][0][0]][1];
          // console.log(rewardRandomList);
          var runeTempMap = new Map();
          var runeTempKeySet = new Set();

          // loop use this = rewardRandomList.length
          for (h = 0; h < rewardRandomList.length; h++) {


            // console.log(j +":" +h);
            var rewardRandom = rewardRandomList[h];
            var rewardRandomProb = (rewardRandom[1] * 100).toFixed(2);
            var rewardRandomProbOriginal = rewardRandom[1];
            var rewardRandomQty = rewardRandom[3];



            if (rewardRandomProb > 0) {
              if (rewardRandom[0] != 6) {
                // console.log(subRow);
                if (h % 5 == 0 && h != 0) {
                  subRow++;
                  subStageTd = goog.dom.createDom('td', {
                    'id': 'ping_' + i + "_" + k + "_" + j + "_" + subRow ,
                    'colspan': '6'
                  }, "")

                  subStageNameText.setAttribute('rowspan',subRow + 1);
                  // var existing_sub_stage_text = goog.dom.getElement

                  // data = goog.dom.createDom('td', { 'id': 'sub_stage_text',
                  //   'colspan': 1
                  // }, stringMap[subStageMap[subStageList[k]][2]] + " [" + difficulty + "]")
                  lineSubStage = goog.dom.createDom('tr', 'line_sub_stage_' + i + "_" + k + "_" + j + "_" + subRow, "")

                  // goog.dom.appendChild(lineSubStage, data);
                  goog.dom.appendChild(lineSubStage, subStageTd);
                  goog.dom.appendChild(stageHolderTd, lineSubStage);
                }


                if (rewardRandom[0] == 11) {
                  //DungeonTicket
                  var img = goog.dom.createDom('img', "drop_icon")
                  img.setAttribute('src', '/img/common_2_352.png')
                  var td = goog.dom.createDom('td', {
                    'class': 'td_drop',
                    'align': 'center',
                    'rowspan': '3'
                  }, img)
                  var rowDrop1 = goog.dom.createDom('tr', undefined, "")
                  var rowDrop2 = goog.dom.createDom('tr', undefined, "")

                  var rewardNameTd = goog.dom.createDom('td', undefined, "Dragon Ticket[x" + rewardRandomQty + "]")
                  goog.dom.appendChild(rowDrop1, rewardNameTd);
                  var rewardProbTd = goog.dom.createDom('td', undefined, "(" + rewardRandomProb + "%)")
                  goog.dom.appendChild(rowDrop2, rewardProbTd);

                  var tdRewardText = goog.dom.createDom('td', {
                    'class': 'td_reward_text',
                    'align': 'center'
                  }, td)

                  var tempPing = goog.dom.getElement('ping_' + i + "_" + k + "_" + j + "_" + subRow);
                  // console.log(tempPing);
                  goog.dom.appendChild(tdRewardText, rowDrop1);
                  goog.dom.appendChild(tdRewardText, rowDrop2);
                  goog.dom.appendChild(tempPing, tdRewardText);

                }
                else {
                  //Normal Item
                  var rewardItem = itemMap[rewardRandom[2]];
                  var rewardRandomName = stringMap[rewardItem[1]];
                  var rewardRandomIcon = rewardItem[8];

                  var img = goog.dom.createDom('img', "drop_icon")
                  img.setAttribute('src', '/img/' + rewardRandomIcon + '.png')
                  var td = goog.dom.createDom('td', {
                    'class': 'td_drop',
                    'align': 'center',
                    'rowspan': '3'
                  }, img)
                  var rowDrop1 = goog.dom.createDom('tr', undefined, "")
                  var rowDrop2 = goog.dom.createDom('tr', undefined, "")

                  var rewardNameTd = goog.dom.createDom('td', undefined, rewardRandomName + "[x" + rewardRandomQty + "]")
                  goog.dom.appendChild(rowDrop1, rewardNameTd);
                  var rewardProbTd = goog.dom.createDom('td', undefined, "(" + rewardRandomProb + "%)")
                  goog.dom.appendChild(rowDrop2, rewardProbTd);

                  var tdRewardText = goog.dom.createDom('td', {
                    'class': 'td_reward_text',
                    'align': 'center'
                  }, td)
                  var tempPing = goog.dom.getElement('ping_' + i + "_" + k + "_" + j + "_" + subRow);
                  // console.log(tempPing);
                  goog.dom.appendChild(tdRewardText, rowDrop1);
                  goog.dom.appendChild(tdRewardText, rowDrop2);
                  goog.dom.appendChild(tempPing, tdRewardText);
                }

              } else {
                //RuneGem
                var rewardItem = runeMap[rewardRandom[2]];

                var iconName = "rune_icon_" + GetColorName(proto.msggamedata.MonsterRuneColor, rewardItem[3]).replace("MRC_", "").toLowerCase() + "_diamond_1";

                runeTempKeySet.add(rewardRandomQty);

                if (runeTempMap.get(rewardRandomQty) != undefined) {
                  // has oldOnes
                  var oldValue = runeTempMap.get(rewardRandomQty);

                  var arrayValue = oldValue.split("^");

                  var newProb = parseFloat(arrayValue[1]) + rewardRandomProbOriginal;
                  var newValue = arrayValue[0] + "^" + newProb;
                  runeTempMap.set(rewardRandomQty, newValue);
                } else {
                  // create new
                  var mapValue = iconName + "^" + rewardRandomProbOriginal
                  runeTempMap.set(rewardRandomQty, mapValue);
                }
              }

            }


          }

          //appendRune Here
          for (let key of runeTempKeySet) {
            var mapValue = runeTempMap.get(key).split("^");
            var prob = (mapValue[1] * 100).toFixed(2);

            var img = goog.dom.createDom('img', "drop_icon")
            img.setAttribute('src', '/img/' + mapValue[0] + '.png')
            var td = goog.dom.createDom('td', {
              'class': 'td_drop',
              'align': 'center',
              'rowspan': '3'
            }, img)
            var rowDrop1 = goog.dom.createDom('tr', undefined, "")
            var rowDrop2 = goog.dom.createDom('tr', undefined, "")
            var star = '★';
            var rewardNameTd = goog.dom.createDom('td', undefined, "[" + star + key + "]")
            goog.dom.appendChild(rowDrop1, rewardNameTd);
            var rewardProbTd = goog.dom.createDom('td', undefined, "(" + prob + "%)")
            goog.dom.appendChild(rowDrop2, rewardProbTd);

            var tdRewardText = goog.dom.createDom('td', {
              'align': 'center'
            }, td)

            var tempPing = goog.dom.getElement('ping_' + i + "_" + k + "_" + j + "_" + subRow);
            // console.log(tempPing);
            goog.dom.appendChild(tdRewardText, rowDrop1);
            goog.dom.appendChild(tdRewardText, rowDrop2);
            goog.dom.appendChild(tempPing, tdRewardText);
          }



        }





      }



      // goog.dom.append(mainBody, line);


    }
  }



  if (callback) {
    callback();
  }


}



function GetColorName(myEnum, number) {
  for (var g in myEnum) {
    if (myEnum[g] == number) {
      return g;
    }
  }
  return null;
}
