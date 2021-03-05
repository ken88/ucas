// version 17 apply
(function($){
$.fn.limitChars = function(p){
	return this.each (function(){
		var nums = "01234567890";
		var cLower = "abcdefghijklmnopqrstuvwxyz";
		var cUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		var chars = cLower + cUpper;
		var others = "!:?~`.-_";
		var retChar = "\u000D\u000A";

		var basicLatin = "\u0020\u0021\u0022\u0023\u0024\u0025\u0026\u0027\u0028\u0029\u002a\u002b\u002c\u002d\u002e\u002f\u0030\u0031\u0032\u0033\u0034\u0035\u0036\u0037\u0038\u0039\u003a\u003b\u003d\u003f\u0040\u0041\u0042\u0043\u0044\u0045\u0046\u0047\u0048\u0049\u004a\u004b\u004c\u004d\u004e\u004f\u0050\u0051\u0052\u0053\u0054\u0055\u0056\u0057\u0058\u0059\u005a\u005b\u005c\u005d\u005e\u005f\u0060\u0061\u0062\u0063\u0064\u0065\u0066\u0067\u0068\u0069\u006a\u006b\u006c\u006d\u006e\u006f\u0070\u0071\u0072\u0073\u0074\u0075\u0076\u0077\u0078\u0079\u007a\u007b\u007c\u007d\u007e\u007f";
		var basicLatin_Name = "\u0020\u0027\u002d\u002e\u0041\u0042\u0043\u0044\u0045\u0046\u0047\u0048\u0049\u004a\u004b\u004c\u004d\u004e\u004f\u0050\u0051\u0052\u0053\u0054\u0055\u0056\u0057\u0058\u0059\u005a\u0061\u0062\u0063\u0064\u0065\u0066\u0067\u0068\u0069\u006a\u006b\u006c\u006d\u006e\u006f\u0070\u0071\u0072\u0073\u0074\u0075\u0076\u0077\u0078\u0079\u007a";
		var basicLatin_Address = "\u0021\u0023\u0026\u0028\u0029\u002c\u002e\u002f\u0030\u0031\u0032\u0033\u0034\u0035\u0036\u0037\u0038\u0039\u003a\u003b\u0040\u0020\u0027\u002d\u0041\u0042\u0043\u0044\u0045\u0046\u0047\u0048\u0049\u004a\u004b\u004c\u004d\u004e\u004f\u0050\u0051\u0052\u0053\u0054\u0055\u0056\u0057\u0058\u0059\u005a\u0061\u0062\u0063\u0064\u0065\u0066\u0067\u0068\u0069\u006a\u006b\u006c\u006d\u006e\u006f\u0070\u0071\u0072\u0073\u0074\u0075\u0076\u0077\u0078\u0079\u007a";

		var latin1 = "\u00a0\u00a1\u00a2\u00a3\u00a4\u00a5\u00a6\u00a7\u00a8\u00a9\u00aa\u00ac\u00ae\u00af\u00b0\u00b1\u00b2\u00b3\u00b4\u00b5\u00b6\u00b7\u00b8\u00b9\u00ba\u00bc\u00bd\u00be\u00bf\u00c0\u00c1\u00c2\u00c3\u00c4\u00c5\u00c6\u00c7\u00c8\u00c9\u00ca\u00cb\u00cc\u00cd\u00ce\u00cf\u00d0\u00d1\u00d2\u00d3\u00d4\u00d5\u00d6\u00d7\u00d8\u00d9\u00da\u00db\u00dc\u00dd\u00de\u00df\u00e0\u00e1\u00e2\u00e3\u00e4\u00e5\u00e6\u00e7\u00e8\u00e9\u00ea\u00eb\u00ec\u00ed\u00ee\u00ef\u00f0\u00f1\u00f2\u00f3\u00f4\u00f5\u00f6\u00f7\u00f8\u00f9\u00fa\u00fb\u00fc\u00fd\u00fe\u00ff";
		var latin1_Name_Address = "\u00c0\u00c1\u00c2\u00c3\u00c4\u00c5\u00c6\u00c7\u00c8\u00c9\u00ca\u00cb\u00cc\u00cd\u00ce\u00cf\u00d0\u00d1\u00d2\u00d3\u00d4\u00d5\u00d6\u00d8\u00d9\u00da\u00db\u00dc\u00dd\u00e0\u00e1\u00e2\u00e3\u00e4\u00e5\u00e6\u00e7\u00e8\u00e9\u00ea\u00eb\u00ec\u00ed\u00ee\u00ef\u00f1\u00f2\u00f3\u00f4\u00f5\u00f6\u00f8\u00f9\u00fa\u00fb\u00fc\u00fd\u00ff\u00df";

		var latinXA = "\u0100\u0101\u0102\u0103\u0104\u0105\u0106\u0107\u0108\u0109\u010a\u010b\u010c\u010d\u010e\u010f\u0110\u0111\u0112\u0113\u0114\u0115\u0116\u0117\u0118\u0119\u011a\u011b\u011c\u011d\u011e\u011f\u0120\u0121\u0122\u0123\u0124\u0125\u0126\u0127\u0128\u0129\u012a\u012b\u012c\u012d\u012e\u012f\u0130\u0131\u0132\u0133\u0134\u0135\u0136\u0137\u0138\u0139\u013a\u013b\u013c\u013d\u013e\u013f\u0140\u0141\u0142\u0143\u0144\u0145\u0146\u0147\u0148\u0149\u014a\u014b\u014c\u014d\u014e\u014f\u0150\u0151\u0152\u0153\u0154\u0155\u0156\u0157\u0158\u0159\u015a\u015b\u015c\u015d\u015e\u015f\u0160\u0161\u0162\u0163\u0164\u0165\u0166\u0167\u0168\u0169\u016a\u016b\u016c\u016d\u016e\u016f\u0170\u0171\u0172\u0173\u0174\u0175\u0176\u0177\u0178\u0179\u017a\u017b\u017c\u017d\u017e\u017f"; 

		var latinXB = "\u0180\u0181\u0182\u0183\u0184\u0185\u0186\u0187\u0188\u0189\u018a\u018b\u018c\u018e\u0190\u0191\u0192\u0193\u0194\u0195\u0196\u0197\u0198\u0199\u019a\u019b\u019c\u019d\u019e\u019f\u01a0\u01a1\u01a2\u01a3\u01a4\u01a5\u01a6\u01ab\u01ac\u01ad\u01ae\u01af\u01b0\u01b1\u01b2\u01b3\u01b4\u01b5\u01b6\u01b7\u01b8\u01b9\u01ba\u01bb\u01bc\u01bd\u01be\u01bf\u01c0\u01c1\u01c2\u01c3\u01c4\u01c5\u01c6\u01c7\u01c8\u01c9\u01ca\u01cb\u01cc\u01cd\u01ce\u01cf\u01d0\u01d1\u01d2\u01d3\u01d4\u01d5\u01d6\u01d7\u01d8\u01d9\u01da\u01db\u01dc\u01dd\u01de\u01df\u01e0\u01e1\u01e2\u01e3\u01e4\u01e5\u01e6\u01e7\u01e8\u01e9\u01ea\u01eb\u01ec\u01ed\u01ee\u01ef\u01f0\u01f1\u01f2\u01f3\u01f4\u01f5\u01f6\u01f7\u01f8\u01f9\u01fa\u01fb\u01fc\u01fd\u01fe\u01ff\u0200\u0201\u0202\u0203\u0204\u0205\u0206\u0207\u0208\u0209\u020a\u020b\u020c\u020d\u020e\u020f\u0210\u0211\u0212\u0213\u0214\u0215\u0216\u0217\u0218\u0219\u021a\u021b\u021c\u021d\u021e\u021f\u0220\u0221\u0222\u0223\u0224\u0225\u0226\u0227\u0228\u0229\u022a\u022b\u022c\u022d\u022e\u022f\u0230\u0231\u0232\u0233\u0234\u0235\u0236\u0237\u0238\u0239\u023a\u023b\u023c\u023d\u023e\u023f\u0240\u0241\u0242\u0243\u0244\u0245\u0246\u0247\u0248\u0249\u024a\u024b\u024c\u024d\u024e\u024f";
		var latinXB_Name_Address = "\u0180\u0181\u0182\u0183\u0184\u0185\u0186\u0187\u0188\u0189\u018a\u018b\u018c\u018e\u0190\u0191\u0192\u0193\u0194\u0195\u0196\u0197\u0198\u0199\u019a\u019b\u019c\u019d\u019e\u019f\u01a0\u01a1\u01a2\u01a3\u01a4\u01a5\u01a6\u01ab\u01ac\u01ad\u01ae\u01af\u01b0\u01b1\u01b2\u01b3\u01b4\u01b5\u01b6\u01b7\u01b8\u01b9\u01ba\u01c4\u01c5\u01c6\u01c7\u01c8\u01c9\u01ca\u01cb\u01cc\u01cd\u01ce\u01cf\u01d0\u01d1\u01d2\u01d3\u01d4\u01d5\u01d6\u01d7\u01d8\u01d9\u01da\u01db\u01dc\u01dd\u01de\u01df\u01e0\u01e1\u01e2\u01e3\u01e4\u01e5\u01e6\u01e7\u01e8\u01e9\u01ea\u01eb\u01ec\u01ed\u01ee\u01ef\u01f0\u01f1\u01f2\u01f3\u01f4\u01f5\u01f8\u01f9\u01fa\u01fb\u01fc\u01fd\u01fe\u01ff\u0200\u0201\u0202\u0203\u0204\u0205\u0206\u0207\u0208\u0209\u020a\u020b\u020c\u020d\u020e\u020f\u0210\u0211\u0212\u0213\u0214\u0215\u0216\u0217\u0218\u0219\u021a\u021b\u021c\u021d\u021e\u021f\u0220\u0221\u0222\u0223\u0224\u0225\u0226\u0227\u0228\u0229\u022a\u022b\u022c\u022d\u022e\u022f\u0230\u0231\u0232\u0233\u0234\u0235\u0236\u0237\u0238\u0239\u023a\u023b\u023c\u023d\u023e\u023f\u0240\u0243\u0244\u0245\u0246\u0247\u0248\u0249\u024a\u024b\u024c\u024d\u024e\u024f";

		var latinXAdd = "\u1e00\u1e01\u1e02\u1e03\u1e04\u1e05\u1e06\u1e07\u1e08\u1e09\u1e0a\u1e0b\u1e0c\u1e0d\u1e0e\u1e0f\u1e10\u1e11\u1e12\u1e13\u1e14\u1e15\u1e16\u1e17\u1e18\u1e19\u1e1a\u1e1b\u1e1c\u1e1d\u1e1e\u1e1f\u1e20\u1e21\u1e22\u1e23\u1e24\u1e25\u1e26\u1e27\u1e28\u1e29\u1e2a\u1e2b\u1e2c\u1e2d\u1e2e\u1e2f\u1e30\u1e31\u1e32\u1e33\u1e34\u1e35\u1e36\u1e37\u1e38\u1e39\u1e3a\u1e3b\u1e3c\u1e3d\u1e3e\u1e3f\u1e40\u1e41\u1e42\u1e43\u1e44\u1e45\u1e46\u1e47\u1e48\u1e49\u1e4a\u1e4b\u1e4c\u1e4d\u1e4e\u1e4f\u1e50\u1e51\u1e52\u1e53\u1e54\u1e55\u1e56\u1e57\u1e58\u1e59\u1e5a\u1e5b\u1e5c\u1e5d\u1e5e\u1e5f\u1e60\u1e61\u1e62\u1e63\u1e64\u1e65\u1e66\u1e67\u1e68\u1e69\u1e6a\u1e6b\u1e6c\u1e6d\u1e6e\u1e6f\u1e70\u1e71\u1e72\u1e73\u1e74\u1e75\u1e76\u1e77\u1e78\u1e79\u1e7a\u1e7b\u1e7c\u1e7d\u1e7e\u1e7f\u1e80\u1e81\u1e82\u1e83\u1e84\u1e85\u1e86\u1e87\u1e88\u1e89\u1e8a\u1e8b\u1e8c\u1e8d\u1e8e\u1e8f\u1e90\u1e91\u1e92\u1e93\u1e94\u1e95\u1e96\u1e97\u1e98\u1e99\u1e9a\u1e9b\u1e9c\u1e9d\u1e9e\u1ea0\u1ea1\u1ea2\u1ea3\u1ea4\u1ea5\u1ea6\u1ea7\u1ea8\u1ea9\u1eaa\u1eab\u1eac\u1ead\u1eae\u1eaf\u1eb0\u1eb1\u1eb2\u1eb3\u1eb4\u1eb5\u1eb6\u1eb7\u1eb8\u1eb9\u1eba\u1ebb\u1ebc\u1ebd\u1ebe\u1ebf\u1ec0\u1ec1\u1ec2\u1ec3\u1ec4\u1ec5\u1ec6\u1ec7\u1ec8\u1ec9\u1eca\u1ecb\u1ecc\u1ecd\u1ece\u1ecf\u1ed0\u1ed1\u1ed2\u1ed3\u1ed4\u1ed5\u1ed6\u1ed7\u1ed8\u1ed9\u1eda\u1edb\u1edc\u1edd\u1ede\u1edf\u1ee0\u1ee1\u1ee2\u1ee3\u1ee4\u1ee5\u1ee6\u1ee7\u1ee8\u1ee9\u1eea\u1eeb\u1eec\u1eed\u1eee\u1eef\u1ef0\u1ef1\u1ef2\u1ef3\u1ef4\u1ef5\u1ef6\u1ef7\u1ef8\u1ef9\u1efa\u1efb\u1efc\u1efd\u1efe\u1eff";
		
		var latinXAdd_Name_Address = "\u1e00\u1e01\u1e02\u1e03\u1e04\u1e05\u1e06\u1e07\u1e08\u1e09\u1e0a\u1e0b\u1e0c\u1e0d\u1e0e\u1e0f\u1e10\u1e11\u1e12\u1e13\u1e14\u1e15\u1e16\u1e17\u1e18\u1e19\u1e1a\u1e1b\u1e1c\u1e1d\u1e1e\u1e1f\u1e20\u1e21\u1e22\u1e23\u1e24\u1e25\u1e26\u1e27\u1e28\u1e29\u1e2a\u1e2b\u1e2c\u1e2d\u1e2e\u1e2f\u1e30\u1e31\u1e32\u1e33\u1e34\u1e35\u1e36\u1e37\u1e38\u1e39\u1e3a\u1e3b\u1e3c\u1e3d\u1e3e\u1e3f\u1e40\u1e41\u1e42\u1e43\u1e44\u1e45\u1e46\u1e47\u1e48\u1e49\u1e4a\u1e4b\u1e4c\u1e4d\u1e4e\u1e4f\u1e50\u1e51\u1e52\u1e53\u1e54\u1e55\u1e56\u1e57\u1e58\u1e59\u1e5a\u1e5b\u1e5c\u1e5d\u1e5e\u1e5f\u1e60\u1e61\u1e62\u1e63\u1e64\u1e65\u1e66\u1e67\u1e68\u1e69\u1e6a\u1e6b\u1e6c\u1e6d\u1e6e\u1e6f\u1e70\u1e71\u1e72\u1e73\u1e74\u1e75\u1e76\u1e77\u1e78\u1e79\u1e7a\u1e7b\u1e7c\u1e7d\u1e7e\u1e7f\u1e80\u1e81\u1e82\u1e83\u1e84\u1e85\u1e86\u1e87\u1e88\u1e89\u1e8a\u1e8b\u1e8c\u1e8d\u1e8e\u1e8f\u1e90\u1e91\u1e92\u1e93\u1e94\u1e95\u1e96\u1e97\u1e98\u1e99\u1e9a\u1e9b\u1e9c\u1e9d\u1e9e\u1ea0\u1ea1\u1ea2\u1ea3\u1ea4\u1ea5\u1ea6\u1ea7\u1ea8\u1ea9\u1eaa\u1eab\u1eac\u1ead\u1eae\u1eaf\u1eb0\u1eb1\u1eb2\u1eb3\u1eb4\u1eb5\u1eb6\u1eb7\u1eb8\u1eb9\u1eba\u1ebb\u1ebc\u1ebd\u1ebe\u1ebf\u1ec0\u1ec1\u1ec2\u1ec3\u1ec4\u1ec5\u1ec6\u1ec7\u1ec8\u1ec9\u1eca\u1ecb\u1ecc\u1ecd\u1ece\u1ecf\u1ed0\u1ed1\u1ed2\u1ed3\u1ed4\u1ed5\u1ed6\u1ed7\u1ed8\u1ed9\u1eda\u1edb\u1edc\u1edd\u1ede\u1edf\u1ee0\u1ee1\u1ee2\u1ee3\u1ee4\u1ee5\u1ee6\u1ee7\u1ee8\u1ee9\u1eea\u1eeb\u1eec\u1eed\u1eee\u1eef\u1ef0\u1ef1\u1ef2\u1ef3\u1ef4\u1ef5\u1ef6\u1ef7\u1ef8\u1ef9\u1efa\u1efb\u1efc\u1efd\u1efe\u1eff";

		var statementExtra = "\u20ac";
		var suppressMessages = false;

		//sort out which characters are to be allowed
		if (p.statement) p.allow = basicLatin + latin1 + latinXA + latinXB + latinXAdd + retChar + statementExtra;
		if (p.extended) p.allow = basicLatin + latin1 + latinXA + latinXB + latinXAdd + retChar;
		if (p.name) p.allow = basicLatin_Name + latin1_Name_Address + latinXA + latinXB_Name_Address + latinXAdd_Name_Address;
		if (p.address) p.allow = basicLatin_Address + latin1_Name_Address + latinXA + latinXB_Name_Address + latinXAdd_Name_Address;
		if (p.numeric) p.allow = nums;
		if (p.latinAlpha) p.allow = chars;
		if (p.email) p.allow = chars + nums + ".@-_+!'";
		if (p.telno) p.allow = nums + "-+ ";
		if (p.postCode) p.allow = chars + nums + " ";
		if (p.houseName) p.allow = chars + nums + "- ";
		if (p.campus) p.allow = chars + nums + "-";
		if (p.numsChars) p.allow = chars + nums;
		if (p.disText) p.allow = chars + nums + " -'.#!,/&@";
		if (p.pocc) p.allow = chars + nums + " &,-'()";
		if (p.qualChars) p.allow = chars + nums + " !'-/.,#&();:+$%*";
		if (p.qualCharsCukas) p.allow = chars + nums + " !'-/.,#&();:";
		if (p.datesUnaval) p.allow = chars + nums + " :;\\'-.#!/&@()_+*%=";
		if (p.datesUnavailable) p.allow = chars + nums + " -/,";
		if (p.dates) p.allow = nums + "-/:";
		if (p.latinBasic) p.allow = basicLatin;
		if (p.instName) p.allow = chars + " .,()";
		if (p.title) p.allow = chars + nums + " .,()";
		if (p.timeSpent) p.allow = chars + nums + " .%-()";
		if (p.broad) p.allow = chars + nums + " !$%^&*()-=_+[]{};'#:@~\\|,.<>/?" + "\"";
		if (p.webUrl) p.allow = chars + nums + "-_.~!*'();:@&=+$,/?#[]";
		if (p.suppressMessages) suppressMessages = true;

		p.allow = p.allow.split('');
		var isCtrl = false;

		//sort out blur
		if (!isEventSupported("paste")) {
			$(this).bind('blur', function(e){
				var el = $(this);
				var newValue = "";
				var invalidChars = "";
				setTimeout(function(){
					var curValue = $(el).val();
					//Replace any 'Word' specific characters
					curValue = replaceWordChars(curValue);
					curValue = curValue.split('');
					for (var i = 0; i < curValue.length; i++) {
						found = false;
						for (var j = 0; j < p.allow.length; j++) {
							if (p.allow[j] == curValue[i]) {
								found = true;
								newValue += curValue[i];
								break;
							}
						}
						if (found == false) {
							if (invalidChars.length == 0) {
								invalidChars = curValue[i];
							}
							else {
								testInvalidChars = invalidChars.split('');
								foundInvChar = false;
								for (var k = 0; k < testInvalidChars.length; k++) {
									if (testInvalidChars[k] == curValue[i]) {
										foundInvChar = true;
									}
								}
								if (foundInvChar == false) {
									invalidChars += " " + curValue[i];
								}
							}
						}
					}
					$(el).val(newValue);

					if (invalidChars == "") {
						return;
					}

					if (typeof p.message !== 'undefined') {
						if(!suppressMessages) confirmMessage(p.message + "<br /> " + invalidChars);
					}
					else 
						if (invalidChars.length == 1) {
							if(!suppressMessages) confirmMessage("The following character is not permitted here <br />" + invalidChars);
						}
						else 
							if (invalidChars.length > 1) {
								if(!suppressMessages) confirmMessage("The following characters are not permitted here <br />(" + invalidChars + ")");
							}
				}, 0);
			});
		}
		else {
			//sort out pasting
			$(this).bind('paste', function(e){
				var el = $(this);
				var newValue = "";
				var invalidChars = "";
				setTimeout(function(){
					var curValue = $(el).val();
					//Replace any 'Word' specific characters
					curValue = replaceWordChars(curValue);
					curValue = curValue.split('');
					for (var i = 0; i < curValue.length; i++) {
						found = false;
						for (var j = 0; j < p.allow.length; j++) {
							if (p.allow[j] == curValue[i]) {
								found = true;
								newValue += curValue[i];
								break;
							}
						}
						if (found == false) {
							if (invalidChars.length == 0) {
								invalidChars = curValue[i];
							}
							else {
								testInvalidChars = invalidChars.split('');
								foundInvChar = false;
								for (var k = 0; k < testInvalidChars.length; k++) {
									if (testInvalidChars[k] == curValue[i]) {
										foundInvChar = true;
									}
								}
								if (foundInvChar == false) {
									invalidChars += " " + curValue[i];
								}
							}
						}
					}
					$(el).val(newValue);

					if (invalidChars == "") {
						return;
					}

					if (typeof p.message !== 'undefined') {
						if(!suppressMessages) confirmMessage(p.message + "<br /> " + invalidChars);
					}
					else 
						if (invalidChars.length == 1) {
							if(!suppressMessages) confirmMessage("The following character is not permitted here <br />" + invalidChars);
						}
						else 
							if (invalidChars.length > 1) {
								if(!suppressMessages) confirmMessage("The following characters are not permitted here <br />(" + invalidChars + ")");
							}
				}, 0);
			});
		}
		//ctrl key down
		$(this).keydown(
			function (e){
				if(e.which == 17) isCtrl=true;
			}
		);

		//ctrl key up
		$(this).keyup(
			function (e){
				if(e.which == 17) isCtrl=false;
			}
		);

		$(this).keypress(
			function (e){
				if (e.which == 0) {
					return true;
				}
				if (!e.charCode) {
					k = String.fromCharCode(e.which);
				}
				else {
					k = String.fromCharCode(e.charCode);
				}
				if (e.which == 8){}
				else if (e.which == 13){}
				else if (e.which == 17){
					isCtrl = true;
				}
				else if ((isCtrl == true) && ((e.which == 86) || (e.which == 118))){
				}
				else {
					found = false;
					for (var j = 0; j < p.allow.length; j++){
						if (p.allow[j] == k){
							found = true;
							break;
						}
					}
					if (found == false) {
						if (typeof p.message !== 'undefined'){
							if(!suppressMessages) confirmMessage(p.message + " " + k);
						}
						else {
							if(!suppressMessages) confirmMessage("The following character is not permitted here " + k);
						}
						if (e.preventDefault()) {
							e.preventDefault();
						}
						else {
							e.returnValue = false;
						}
					}
				}
			}
		);
	});
};
})(jQuery);

//Replaces commonly-used Windows 1252 encoded chars that do not exist in ASCII or ISO-8859-1 with ISO-8859-1 cognates
function replaceWordChars(text) {
	var s = text;
	// smart single quotes and apostrophe
	s = s.replace(/[\u2018|\u2019|\u201A]/g, "\u0027");
	// smart double quotes
	s = s.replace(/[\u201C|\u201D|\u201E]/g, "\u0022");
	// ellipsis
	s = s.replace(/\u2026/g, "\u002E\u002E\u002E");
	// dashes
	s = s.replace(/[\u2013|\u2014]/g, "\u002D");
	// Spaces
	s = s.replace(/[\u2002|\u2003|\u2004|\u2005|\u2006|\u2007|\u2008|\u2009|\u200A|\u3000]/g, "\u0020");
	return s;
}

function confirmMessage(message) {
	$('#confirm').modal({
		minWidth: 400,
		minHeight: 120,
		maxWidth: 400,
		maxHeight: 580,
		containerId: 'confirm-container', 
		onShow: function (dialog) {
			dialog.container.css("height", "auto");
			var modal = this;
			$('.message', dialog.data[0]).append(message);
		}
	});
}

//Check to see if event is supported on the browser
function isEventSupported(eventName) {
	var el = document.createElement('div');
	eventName = 'on' + eventName;
	var isSupported = (eventName in el);
	if (!isSupported) {
		el.setAttribute(eventName, 'return;');
		isSupported = typeof el[eventName] == 'function';
	}
	el = null;
	return isSupported;
}