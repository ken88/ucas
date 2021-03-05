// Search.js
// Author: Phillip Stiby
//
// The Search object is constructed passing an Array of data objects (generally an array of data).
// The search function takes a string to search for in each data object within the data array and 
// a search field used to perform the matching against.
//
// For example:
// var data = [[1,"hello", "hello world"],[2,"world", "hello world"]];
// calling search("hello",1)
// will try and match 'hello' with the second field in each object so will call onHandleLine function 
// with one result being the first in the array.
// calling search("hello world",2)
// will try and match 'hello world' with the third field in each object so will call onHandleLine function
// with both enteries.
//
// This also supports named fields so the following data could also be used
// var data = [{id:1,shortSt:"hello", longSt:"hello world"},{id:2,shortSt:"world", longSt:"hello world"}];
// and you could call the following: 
// calling search("hello",'shortSt');

function Search(data) {
	this.srchData = data;
}

Search.prototype = {
	constructor: Search,
	handlers: [],
	srchData: [],
	search: function(str, srchFld) {
		//trim search string
		str = str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		var results = new Array();
		var score = 0;
		var j = 0;
		var match = true;
		var moreThanLimit = false;
		str = str.toUpperCase();
		var strLen = str.length;
		var searchWords = str.split(" ");
		if (str.length==0) {
			this.callHandler('onNoInput');
			return;
		}
		//check search words against qual data, fail fast.
		for(var i=0;i<this.srchData.length;i++) {
			match = true;
			for (var l=0;l<searchWords.length;l++) {
				if (this.srchData[i][srchFld].indexOf(searchWords[l])==-1) {
					match = false;
					break;
				}
			}
			if (match) {
				if(results.length==50) {
					this.callHandler('onMoreThanLimit');
					moreThanLimit = true;
					break;
				}
				score = 0;
				// Add 100 for whole string match
				if(str == this.srchData[i][srchFld]) {
					score = 100;
					results[j] = new Array();
					results[j]['score'] = Math.ceil(score);
					results[j]['fld'] = srchFld;
					results[j]['data'] = this.srchData[i];
					j++;
					continue;
				}
				
				//Add 20 if matches the start
				if(this.srchData[i][srchFld].length > strLen 
					&& this.srchData[i][srchFld].substr(0,strLen)==str) {
					score = 50;
					results[j] = new Array();
					results[j]['score'] = Math.ceil(score);
					results[j]['fld'] = srchFld;
					results[j]['data'] = this.srchData[i];
					j++;
					continue;
				}
				
				// Add 10 for each whole word matched
				var matchWords = this.srchData[i][srchFld].split(" ");
				for (var y=0;y<matchWords.length;y++) {
					for (var x=0;x<searchWords.length;x++) {
						if(matchWords[y] == searchWords[x]) {
							score += 10;
							if(x==y-1 || (x==0 && y==0)) {
								score +=5;
							}
						} else if (
							matchWords[y].length>searchWords[x].length &&
							matchWords[y].substr(0,searchWords[x].length) == searchWords[x]){
							score += 2;
              if(x==y-1 || (x==0 && y==0)) {
								score +=3;
							}
						}
					}
				}
				// For each match score 1-10 for size match
				score += (10.0/(this.srchData[i][srchFld].length))*str.length;
				results[j] = new Array();
				results[j]['score'] = Math.ceil(score);
				results[j]['fld'] = srchFld;
				results[j]['data'] = this.srchData[i];
				j++;
			}
		}
		if(!moreThanLimit) {
			this.callHandler('onLessThanEqualLimit');
		}
		if (results.length==0) {
			this.callHandler('onNoMatch')
		}
		else {
			this.callHandler('onMatch')
			results.sort(this.sort);
			for(var k=0;k<results.length;k++) {
				this.callHandler('onHandleLine',results[k]['data']);
			}
		}
	},
	onMatch: function(fn) {
		this.handlers['onMatch'] = fn;
		return this;
	},
	onNoMatch: function(fn) {
		this.handlers['onNoMatch'] = fn;
		return this;
	},
	onNoInput: function(fn) {
		this.handlers['onNoInput'] = fn;
		return this;
	},
	onHandleLine: function(fn) {
		this.handlers['onHandleLine'] = fn;
		return this;
	},
	sort: function(fn) {
		this.handlers['sort'] = fn;
		return this;
	},
	onMoreThanLimit: function(fn) {
		this.handlers['onMoreThanLimit'] = fn;
		return this;
	},
	onLessThanEqualLimit: function(fn) {
		this.handlers['onLessThanEqualLimit'] = fn;
		return this;
	},
	callHandler: function(handler, args) {
		var fn = this.handlers[handler];
		if(!(fn===undefined)) {
			fn.call(this,args);
		}
	},
	sort: function (a,b)
	{
		var aScore = a['score'];
		var bScore = b['score'];
		var result = bScore-aScore;
		if (result == 0 ) {
			var aText = a['data'][a['fld']];
			var bText = b['data'][b['fld']];
			result = (bText < aText?1:-1);
		}
		return result;
	}
}