/*
 * Derived from
 * jQuery Textarea Characters Counter Plugin v 2.0
 * Examples and documentation at: http://roy-jin.appspot.com/jsp/textareaCounter.jsp
 * Copyright (c) 2010 Roy Jin
 * Version: 2.0 (11-JUN-2010)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires: jQuery v1.4.2 or later
 */
(function($){  
	$.fn.textareaCount = function(options, fn) {   
		var defaults = {  
			maxCharacterSize: -1,  
			originalStyle: 'originalTextareaInfo',
			warningStyle: 'warningTextareaInfo',  
			warningNumber: 20,
			displayFormat: '#input characters | #words words',
			allowCountBelowZero: 'N'
		};  
		var options = $.extend(defaults, options);
		
		var container = $(this); 
    
    var counterText = "";

    $language = $('#language')[0].value;

//This would place a div on screen - has been replaced with the line in function limitTextAreaByCharacterCount()    
//		$("<div class='charleft'>&nbsp;</div>").insertAfter(container);  

$('#charleft').html(counterText);
		
		//create charleft css
		var charLeftCss = {
			'width' : container.width()
		};
		
		var charLeftInfo = getNextCharLeftInformation(container);
		charLeftInfo.addClass(options.originalStyle);
		charLeftInfo.css(charLeftCss);
		
		var numInput = 0;
		var maxCharacters = options.maxCharacterSize;
		var numLeft = 0;
		var numWords = 0;
		var allowCountBelowZero = options.allowCountBelowZero;
				
		container.bind('keyup', function(event){limitTextAreaByCharacterCount();})
				 .bind('mouseover', function(event){limitTextAreaByCharacterCount();})
				 .bind('otherBoxChanged', function(event){limitTextAreaByCharacterCount();})
				 .change(function(event){limitTextAreaByCharacterCount();})
				 .blur(function(event){limitTextAreaByCharacterCount();})
				 .bind('paste', function(event){limitTextAreaByCharacterCount();});

		function limitTextAreaByCharacterCount(){
			counterText = countByCharacters();
      $('#charleft').html(counterText);  //set the on-screen div 'charleft' text 
      charLeftInfo.html(counterText);
//      charLeftInfo.html(countByCharacters());
			//function call back
			if(typeof fn != 'undefined'){
				fn.call(this, getInfo());
			}
			return true;
		}

		function countByCharacters(){
			var content = container.val();
			var contentLength = content.length;
			
			//Start Cut
			if(options.maxCharacterSize > 0){
				//If copied content is already more than maxCharacterSize, chop it to maxCharacterSize.
				if (allowCountBelowZero !== 'Y') {
					if (contentLength >= options.maxCharacterSize) {
						content = content.substring(0, options.maxCharacterSize);
					}
				}

				var newlineCount = getNewlineCount(content);

				// newlineCount new line character. For windows, it occupies 2 characters
				var systemmaxCharacterSize = options.maxCharacterSize - newlineCount;
				if (!isWin()){
					 systemmaxCharacterSize = options.maxCharacterSize
				}

				if (allowCountBelowZero !== 'Y') {
					if (contentLength > systemmaxCharacterSize) {
						//avoid scroll bar moving
						var originalScrollTopPosition = this.scrollTop;
						container.val(content.substring(0, systemmaxCharacterSize));
						this.scrollTop = originalScrollTopPosition;
            
            confirmMessage($('#hidDisCharWarn')[0].value);
            
					}
				}

				charLeftInfo.removeClass(options.warningStyle);
				if(systemmaxCharacterSize - contentLength <= options.warningNumber){
					charLeftInfo.addClass(options.warningStyle);
				}

				numInput = container.val().length + newlineCount;
				if(!isWin()){
					numInput = container.val().length;
				}

				numWords = countWord(getCleanedWordString(container.val()));

				numLeft = maxCharacters - numInput;
        
			} else {
				//normal count, no cut
				var newlineCount = getNewlineCount(content);
				numInput = container.val().length + newlineCount;
				if(!isWin()){
					numInput = container.val().length;
				}
				numWords = countWord(getCleanedWordString(container.val()));
			}
			return formatDisplayInfo();
		}

		function formatDisplayInfo(){
			var format = options.displayFormat;
			format = format.replace('#input', numInput);
			format = format.replace('#words', numWords);
			//When maxCharacters <= 0, #max, #left cannot be substituted.
			if(maxCharacters > 0){
				format = format.replace('#max', maxCharacters);
				format = format.replace('#left', numLeft);
			}
			return format;
		}

		function getInfo(){
			var info = {
				input: numInput,
				max: maxCharacters,
				left: numLeft,
				words: numWords
			};
			return info;
		}

		function getNextCharLeftInformation(container){
				return container.next('.charleft');
		}

		function isWin(){
			var strOS = navigator.appVersion;
			if (strOS.toLowerCase().indexOf('win') != -1){
				return true;
			}
			return false;
		}

		function getNewlineCount(content){
			var newlineCount = 0;
			for(var i=0; i<content.length;i++){
				if(content.charAt(i) == '\n'){
					newlineCount++;
				}
			}
			return newlineCount;
		}

		function getCleanedWordString(content){
			var fullStr = content + " ";
			var initial_whitespace_rExp = /^[^A-Za-z0-9]+/gi;
			var left_trimmedStr = fullStr.replace(initial_whitespace_rExp, "");
			var non_alphanumerics_rExp = rExp = /[^A-Za-z0-9]+/gi;
			var cleanedStr = left_trimmedStr.replace(non_alphanumerics_rExp, " ");
			var splitString = cleanedStr.split(" ");
			return splitString;
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

		function countWord(cleanedWordString){
			var word_count = cleanedWordString.length-1;
			return word_count;
		}
    
	};  
})(jQuery); 