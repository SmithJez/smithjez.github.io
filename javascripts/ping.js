goog.require('proto.MsgGameData');
goog.require('goog.dom');

function sayHi() {
  var newHeader = goog.dom.createDom('h1', {'style': 'background-color:#EEE'},
    'Hello world!');
  goog.dom.appendChild(document.body, newHeader);
}

function GetString(file) {
	
	var rawFile = new XMLHttpRequest();
	rawFile.open("GET", file, false);
	rawFile.onreadystatechange = function() 
	{
		
	}
	
	var newHeader = new proto.msggamedata.MsgMonsterType.deserializeBinary (999);
  
	goog.dom.appendChild(document.body, newHeader);
}

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
	console.log(arrayString.length);
	var lookup = {};
	for (var i = 0; i < arrayString.length; i++) {
		/* console.log(arrayString[i][i]); */
		lookup[arrayString[i][0]] = arrayString[i][1];
		
		/* console.log(arrayString[i][0]); */
		
		/* console.log(lookup[arrayString[i]]); */
	}
	
/* 	var arr=arrayString.map(function(value){
		return {
			Key: value
		}
		
	}); */
	
	
	var arr = [];
	for (var i = 0; i < arrayString.length; i++) 
	{
		arr.push( {
			Key: arrayString[i][0][0],
			value: arrayString[i][0][1]
		})
			
	}
	
	
	/* console.log (lookup); */
	/* console.log (arr); */
	console.log (lookup[1871302204]);
	
	
/* 	var result = $.grep(monster.array, function(e){ return e[0] == 0; });
	console.log(result); */
	
	console.log(monster.array);
	
	for(i = 0; i < monster.array[3].length; i++) {
		var newHeader = goog.dom.createDom('h4', {'style': 'background-color:#EEE'},
			lookup[monster.array[3][i][1]]);
			
			console.log (lookup[monster.array[3][i][1]]);
			/* console.log (lookup[monster.array[3][i][1]]); */
			/* console.log(monster.array[3][i][1]); */
			
		goog.dom.appendChild(document.body, newHeader);	
	}
	
	
	return bytes;
}


function buildMap (obj) {
	let map = new Map();
	Object.keys(obj).forEach(key => {
		map.set(key, obj[key]);
	});
	return map;
	
	
}