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

function readUrl(url) {
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
	
	/* console.log(stringText.array[0][100]); */
	
	var arrayString = stringText.array[0];
	/* console.log(arrayString.length); */
	
	var stringMap = {};
	for (var i = 0; i < arrayString.length; i++) {
		stringMap[arrayString[i][0]] = arrayString[i][1];
	}
	
	
	var arr = [];
	for (var i = 0; i < arrayString.length; i++) 
	{
		arr.push( {
			Key: arrayString[i][0][0],
			value: arrayString[i][0][1]
		})
	}
	
	/* console.log(monster.array); */
	
	var listMon =  [];
	
	for(i = 0; i < monster.array[3].length; i++) {
		var newHeader = goog.dom.createDom('p', {'style': 'background-color:#EEE'},
			stringMap[monster.array[3][i][1]]);
			
			listMon.push ({
				Key: stringMap[monster.array[3][i][0]],
				value: stringMap[monster.array[3][i][1]]
			})
			
			/* console.log (stringMap[monster.array[3][i][1]]); */
			
		goog.dom.appendChild(document.body, newHeader);	
	}
	
	
	return bytes;
}
