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
goog.require('proto.MsgGameData');
goog.require('goog.dom');

function readUrl(url, url2, url3, url4, url5, url6) {
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
	
	var monster = new proto.MsgGameData.deserializeBinary (bytes);
	var stringText = new proto.MsgString.deserializeBinary (bytesString);
	var dunSubStage = new proto.MsgGameData.deserializeBinary (bytes2);
	var dunMonGroup = new proto.MsgGameData.deserializeBinary (bytes3);
	var dunMon = new proto.MsgGameData.deserializeBinary (bytes4);
	var mon = new proto.MsgGameData.deserializeBinary (bytes5);
	var monStage = new proto.MsgGameData.deserializeBinary (bytes6);
	
	/* console.log(stringText.array[0][100]); */
	
	var arrayString = stringText.array[0];
	var arrayDunSub = dunSubStage.array[17];
	var arrayDunMonGroup = dunMonGroup.array[19];
	var arrayDunMon = dunMon.array[18];
	var arrayMon = mon.array[3];
	var arrayMonStage = monStage.array[14];
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
	

	
	/* console.log(arrayDunMon); */
	
	var monMap = {};
	for (var i = 0; i < arrayMon.length; i++) {
		monMap[arrayMon[i][0]] = arrayMon[i];
	}
	
	var monStageMap = {};
	for (var i = 0; i < arrayMonStage.length; i++) {
		monStageMap[arrayMonStage[i][0]] = arrayMonStage[i];
	}
	
	
	var arr = [];
	for (var i = 0; i < arrayString.length; i++) 
	{
		arr.push( {
			Key: arrayString[i][0][0],
			value: arrayString[i][0][1]
		})
	}
	
	/* console.log(arrayDunMonGroup[0]); */
	
	var listMon =  [];
	
	var displayArray = monster.array[16]
	
	var golemArray = [];
	

	
	for(i = 0; i < displayArray.length; i++) {
		
			
/* 		var newHeader = goog.dom.createDom('p', {'style': 'background-color:#EEE'},
			stringMap[displayArray[i][1]]); */
			
			if(displayArray[i][8] == "stage_dungeon_golem") {
				golemArray = displayArray[i][11];
			}
			
			listMon.push ({
				Key: stringMap[displayArray[i][0]],
				value: stringMap[displayArray[i][1]]
			})
			
			/* console.log (displayArray[i][1]); */
			
		/* goog.dom.appendChild(document.body, newHeader);	 */
	}
	
	var mainHead = goog.dom.getElement('mainHead');
	
	
	
	var tableHeaderList = ["Stage", "Astromon", "Lv", "Hp", "Atk", "Def", "Rec", "Crit Dmg", "Crit Rate", "Resist"];
	var headTRChild = goog.dom.createDom('tr', "trHead", "");
	for (i = 0; i < tableHeaderList.length; i++) {
		var headTD = goog.dom.createDom('th', {'align': 'center'}, tableHeaderList[i])
		headTD.setAttribute('bgColor', '#FF0000');
		if(tableHeaderList[i] == "Astromon"){
			headTD.setAttribute('colspan', 2);
		} else {
			if(i == 0 || i == 2){
				
			} else {
				headTD.setAttribute('width', '14%');
			}
			
		}
		
		
		
		

		
		goog.dom.appendChild (headTRChild, headTD);
		
	}
	goog.dom.append( mainHead,  headTRChild );

	var mainBody = goog.dom.getElement('mainBody');
	
	for (i = 0; i < golemArray.length; i++) {
			var displaySize = 0;
			var mDubSubStage = dunSubStageMap[golemArray[i]][9];
			
			var nonBossStageSize = mDubSubStage.length - 1;
			
			var mMonGroup = monGroupMap[mDubSubStage[1][2]];
			/* console.log(mMonGroup); */
			
			var stageTd = goog.dom.createDom('td',  {'align': 'center'}, "B" + (i+1))
			var line = goog.dom.createDom('tr', undefined, stageTd)
			
			
			goog.dom.append(mainBody, line );

			
			var stageMonBoss = monStageMap[  mDubSubStage[ nonBossStageSize][3]];
			
			var monBossObj = monMap[stageMonBoss[1]];
			
			var bossStat = CalStat(   stageMonBoss, monBossObj );

			var line2 = goog.dom.createDom('tr', undefined, "")
			
			var img = goog.dom.createDom('img', undefined)
			img.setAttribute('src', '/img/' + monBossObj[29] + '.webp')
			var td = goog.dom.createDom('td', undefined, img)
			var tdName = goog.dom.createDom('td', {'align': 'center'}, stringMap[monBossObj[1]])
			var tdBossLv = goog.dom.createDom('td', {'align': 'center'}, stageMonBoss[2].toString())
			
			goog.dom.appendChild (line2, img);
			goog.dom.appendChild (line2, tdName);
			goog.dom.appendChild (line2, tdBossLv);
			
			
			for (j = 1; j < bossStat.length; j++){
				var bossData = goog.dom.createDom('td', {'align': 'center'}, bossStat[j].toString())	
				
				goog.dom.appendChild (line2, bossData);
			}
			
			displaySize++;
			
			goog.dom.append( mainBody,  line2 );
			
			/* 3 = requiredMon = monGroup*/
			/* 4 = fixedMon = dunMon */
			
			
			
			var fixedMon = mDubSubStage[ nonBossStageSize][4]
			
			
			if (fixedMon.length == 0 ) {
				/* use mongroup same as boss*/
				/* dunMonMap */
				var stageMonSize =  monGroupMap[ mDubSubStage[ nonBossStageSize][2]][1].length;
				
				for(x = 0; x < stageMonSize; x++) {
					

				
					/* console.log( stageMonSize); */
					var stageMonMinionBoss = dunMonMap[ monGroupMap[ mDubSubStage[ nonBossStageSize][2]][1][x][0]];
					/* console.log( stageMonMinionBoss); */
					var monMinionBossObj = monMap[ dunMonMap[stageMonMinionBoss[0]][1]];
					/* console.log( monMinionBossObj); */
					var minionBossStat = CalStat(   stageMonMinionBoss, monMinionBossObj );
					
					var line2 = goog.dom.createDom('tr', undefined, "")
					
					var img = goog.dom.createDom('img', undefined)
					img.setAttribute('src', '/img/' + monMinionBossObj[29] + '.webp')
					var td = goog.dom.createDom('td', undefined, img)
					var tdName = goog.dom.createDom('td', {'align': 'center'}, stringMap[monMinionBossObj[1]])
					var tdMinionBossLv = goog.dom.createDom('td', {'align': 'center'}, stageMonMinionBoss[2].toString())
					
					goog.dom.appendChild (line2, img);
					goog.dom.appendChild (line2, tdName);
					goog.dom.appendChild (line2, tdMinionBossLv);
					
					
					for (j = 1; j < minionBossStat.length; j++){
						var bossData = goog.dom.createDom('td', {'align': 'center'}, minionBossStat[j].toString())	
						
						goog.dom.appendChild (line2, bossData);
					}
					
					displaySize++;
					
					goog.dom.append( mainBody,  line2 );

				
				}
				
				
				
				
				
				
			} else {
				/* use dunmon */
				/* console.log(  fixedMon); */
				
				for (z = 0; z < fixedMon.length; z++) {
					
					var stageMonMinionBoss = dunMonMap[ fixedMon[z]];
					/* console.log( stageMonMinionBoss); */
					var monMinionBossObj = monMap[ dunMonMap[stageMonMinionBoss[0]][1]];
					/* console.log( monMinionBossObj); */
					var minionBossStat = CalStat(   stageMonMinionBoss, monMinionBossObj );
					
					var line2 = goog.dom.createDom('tr', undefined, "")
					
					var img = goog.dom.createDom('img', undefined)
					img.setAttribute('src', '/img/' + monMinionBossObj[29] + '.webp')
					var td = goog.dom.createDom('td', undefined, img)
					var tdName = goog.dom.createDom('td', {'align': 'center'}, stringMap[monMinionBossObj[1]])
					var tdMinionBossLv = goog.dom.createDom('td', {'align': 'center'}, stageMonMinionBoss[2].toString())
					
					goog.dom.appendChild (line2, img);
					goog.dom.appendChild (line2, tdName);
					goog.dom.appendChild (line2, tdMinionBossLv);
					
					
					for (j = 1; j < minionBossStat.length; j++){
						var bossData = goog.dom.createDom('td', {'align': 'center'}, minionBossStat[j].toString())	
						
						goog.dom.appendChild (line2, bossData);
					}
					displaySize++;
					goog.dom.append( mainBody,  line2 );
					
				}
				
				
				
				
				
				
			}
			
			
			
			
			for (j = 0; j < mMonGroup[1].length; j++){
				
				var mDunMon = mMonGroup[1][j];
				/* console.log(  mDunMon[0]); */
				var stageMon = dunMonMap[mDunMon[0]];
				
				var monObj = monMap[stageMon[1]];
				

				var line2 = goog.dom.createDom('tr', undefined, "")

				var img = goog.dom.createDom('img', undefined)
				img.setAttribute('src', '/img/' + monObj[29] + '.webp')
				var td = goog.dom.createDom('td', undefined, img)
				var tdName = goog.dom.createDom('td', {'align': 'center'}, stringMap[monObj[1]])
				var tdBossLv = goog.dom.createDom('td', {'align': 'center'}, stageMon[2].toString())

				goog.dom.appendChild (line2, img);
				goog.dom.appendChild (line2, tdName);
				goog.dom.appendChild (line2, tdBossLv);

				var monStat = CalStat(   stageMon, monObj );

				for (k = 1; k < monStat.length; k++){
					var monData = goog.dom.createDom('td', {'align': 'center'}, monStat[k].toString())
					
					goog.dom.appendChild (line2, monData);
				}
displaySize++;
				goog.dom.append( mainBody,  line2 );
				
	
			}
			
			
stageTd.setAttribute('rowspan', displaySize+1);
			
			
			
		/* goog.dom.appendChild(document.body, newHeader); */
	}

	
	return bytes;
}


function CalStat(stageMonsterArray, monsterArray) {
	
	var num1 = clamp( (parseFloat(stageMonsterArray[2]) - 1), 0, Number.MAX_SAFE_INTEGER);
	var num2 = monsterArray[10] * monsterArray[14];
	var num3 = monsterArray[11] * monsterArray[15];
	var num4 = monsterArray[12] * monsterArray[16];
	var num5 = monsterArray[9] * monsterArray[13];
	
	/* var monsterUid = stageMonsterArray[1]; */
	var grade = stageMonsterArray[25];
	var attack = Math.round( (monsterArray[10] + num2 * num1) * stageMonsterArray[5]).toLocaleString();
	var defence = Math.round(  (monsterArray[11] + num3 * num1) * stageMonsterArray[6]).toLocaleString();
	var heal = Math.round( (monsterArray[12] + num4 * num1) * stageMonsterArray[7]).toLocaleString();
	var hp = Math.round( (monsterArray[9] + num5 * num1) * stageMonsterArray[8]).toLocaleString();
	
	var cDmg = stageMonsterArray[27];
	if(cDmg == undefined) {
		cDmg = 0;
	}
	
	var cRate = stageMonsterArray[28];
	if(cRate == undefined) {
		cRate = 0;
	}
	
	var cResist =  stageMonsterArray[29];
	if (cResist == undefined) {
		cResist = 0;
	}
	
	var bResist = monsterArray[34];
	if (bResist == undefined) {
		bResist = 0;
	}
	
	var critDmg =  (cDmg + monsterArray[33] - 1 ) * 100 + "%";
	var critRate =  Math.round( ((cRate + monsterArray[32]) * 100)) + "%";
	var resist = Math.round( (cResist + bResist ) * 100) + "%";
	
	var statArray = [grade, hp, attack, defence, heal, critDmg, critRate, resist];
	
	/* console.log(stageMonsterArray); */
	
	return statArray;
}

function clamp(num, min, max) {
  return num <= min ? min : num >= max ? max : num;
}
