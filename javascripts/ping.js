goog.require('proto.MsgLocalizedString');
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
	
	var newHeader = new proto.MsgString.deserializeBinary (999);
  
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
	
	console.log(bytes);
	
	
	var text = new proto.MsgString.deserializeBinary (bytes);
  var newHeader = goog.dom.createDom('h1', {'style': 'background-color:#EEE'},
    text.toString());
	/* console.log(newHeader.array.toString()); */
	
	goog.dom.appendChild(document.body, newHeader);
	
	return bytes;
}