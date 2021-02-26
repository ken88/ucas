// version 0.1 By G.A.Morris 23/08/2012
(function($){
$.fn.removechars = function(p){
   return this.each (function(){
		var nums = "01234567890";
		var cLower = "abcdefghijklmnopqrstuvwxyz";
		var cUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		var chars = cLower + cUpper;
		var fld;
    
		//sort out which characters are not to be allowed
		if (p.space) p.remove = " ";
		if (p.numbers) p.remove = nums;
		if (p.alpha) p.remove = chars;

		p.remove = p.remove.split('');
		var isCtrl = false;

		//Opera do not use bind event.
		if (jQuery.browser.opera) {
			this.onpaste = function(){return false;};//disable paste
		}

		//sort out pasting
		$(this).bind('paste', function(e){
			var el = $(this);
			var newValue = "";
			var invalidChars = "";
			setTimeout(function() {
				var curValue = $(el).val();
				curValue = curValue.split('');
				for (var i = 0; i < curValue.length; i++) {
					found = false;
					for (var j = 0; j < p.remove.length; j++){
						if (p.remove[j] == curValue[i]){
							found = true;
							break;
						} else {
							newValue += curValue[i];
						}
					}
					if (found == true) {
						if(invalidChars.length == 0) {
							invalidChars = curValue[i];
						} else {
							testInvalidChars = invalidChars.split('');
							foundInvChar = false;
							for (var k = 0; k < testInvalidChars.length; k++){
								if (testInvalidChars[k] == curValue[i]){
									foundInvChar = true;
								}
							}
							if (foundInvChar == false){
								invalidChars += " " + curValue[i];
							}
						}
					}
				}
				$(el).val(newValue);

				if(invalidChars == ""){
					return;
				}

				if (typeof p.message !== 'undefined'){
					confirmMessage2(p.message + "<br /> " + invalidChars);
				        } else if (invalidChars.length == 1) {
             
					confirmMessage2("The following character is not permitted here <br />" + invalidChars);
				 
        }
        else if (invalidChars.length > 1) {
        
					confirmMessage2("The following characters are not permitted here <br />(" + invalidChars + ")");
				}
			}, 0);
		});

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
					for (var j = 0; j < p.remove.length; j++){
						if (p.remove[j] == k){
							found = true;
							break;
						}
					}
					if (found) {
						if (typeof p.message !== 'undefined'){
            fld = $(this);
            fld.val("");  
         		confirmMessage2(p.message + " " + k);
            	}
						else {
            
							confirmMessage2("The following character is not permitted here " + k);
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