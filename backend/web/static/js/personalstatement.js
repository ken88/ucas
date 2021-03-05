var $boolUnicodeMsgShown = false;
var $boolSymbolShowing = false;
var $popupStatus = 0; //0 means disabled; 1 means enabled;

$(document).ready(function() {

  $('#unicodeMsgWarning').hide();
  $('#unicodeMsgWarningFooter').hide();
  $('#dialog-modal-extended-chars').hide();  

  var $charWarningMsg = getCharWarningMsgValue();
  getUnicodeMsgShownValue();
  
  $('#statementTextEntry').limitChars({statement:true, message:$charWarningMsg});
  $('#statementTextEntry').blur(function(){
    checkStatement();
  });

	checkStatement();

 $("#popupOKOnly").click(function(){
      disablePopup();
    });

});

function checkStatement(){
  var $curStatement = $('#statementTextEntry')[0].value; 
  var containsSpecialChars = false;
  var chunkSize = 1000;
  
  var $changedStatement = "";

  var chunkStart = 0;
  var chunkEnd = chunkSize;
  var curChunk = "";
    
  while ($curStatement.length >= chunkEnd){   
    curChunk = $curStatement.substring(chunkStart, chunkEnd);    
    if (hasSpecialChars(curChunk)){
      containsSpecialChars = true;
      curChunk = encodeURIComponent(curChunk); 
      curChunk = removeAsciiChars(curChunk);
    }
    $changedStatement += curChunk;
    chunkStart = chunkEnd;
    chunkEnd += chunkSize;    
  }
  curChunk = $curStatement.substring(chunkStart, $curStatement.length);    
  if (hasSpecialChars(curChunk)){
    containsSpecialChars = true;
    curChunk = encodeURIComponent(curChunk); 
    curChunk = removeAsciiChars(curChunk);
  }
  $changedStatement +=curChunk;    
    
  if ($changedStatement == 'N' || containsSpecialChars == false) {
		$('#taAsciiPersonalStatement').text('');
    $('#asciiStatement').hide();
    $('#subCharacter').hide();
    $('#unicodeMsgWarning').hide();
    $('#unicodeMsgWarningFooter').hide();
    removeSymbolToLabels();
    $boolSymbolShowing = false;
  }
  else {
    $('#taAsciiPersonalStatement').val($changedStatement);
    $('#asciiStatement').show();
    $('#unicodeMsgWarning').show();
    $('#subCharacter').show();
    $('#unicodeMsgWarningFooter').show();  
    addSymbolToLabels();
    $boolSymbolShowing = true;
    showExtendCharMsg();
  }
}

function checkForASCII(id){
	var $curField = $(id)[0].value;
	if (hasSpecialChars($curField)){
    showExtendCharMsg();
	}
}

function showExtendCharMsg(){
  if($boolUnicodeMsgShown == false)
  {
    $( "#dialog-modal-extended-chars" ).dialog({
      height: 250,
      width: 600,  
      modal: true,
      open: function(event, ui) { 
        //hide close button.
        $(this).parent().children().children('.ui-dialog-titlebar-close').hide();
      },
      buttons: {
        "Ok": function() { 
          $(this).dialog("close"); 
        }
      }
    });
    setUnicodeMsgShownValue();
  }
  $boolUnicodeMsgShown = true;
}

function getUnicodeMsgShownValue(){
  $uniCodeVal = $('#hidUnicodeMsgShown')[0].value;
  if($uniCodeVal == 'Y'){
    $boolUnicodeMsgShown = true;
  }
}

function setUnicodeMsgShownValue(){
  $('#hidUnicodeMsgShown').val("Y"); 
}

function getCharWarningMsgValue(){
  return $('#hidCharWarningMsg')[0].value;
}

function addSymbolToLabels(){
  if ($boolSymbolShowing == false)
  {
    var $temp = '';
    var $symbol = '<span class="ReqPlus">&nbsp;&AElig;</span>';

    $temp = $("label[for=statementTextEntry]").html() + $symbol;
    $("label[for=statementTextEntry]").html($temp);

    $boolSymbolShowing = true;
  }  
}

function removeSymbolToLabels(){
  if ($boolSymbolShowing == true){ 
    var $temp = '';
    
    $temp = $("label[for=statementTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=statementTextEntry]").html($temp);
    $boolSymbolShowing = false;
  }
  }
  function warningPopupMessage() 
{
 jQuery('#appsNoQualsListOKOnly').html(jQuery('#hidCharWarningMsgPassword').val());
 jQuery('#popupContactOK h1').html(jQuery('#hidCharWarningMsgPasswordTitle').val());      
 centerPopup();
 loadPopup();
 jQuery("html, body").animate({ scrollTop: 0 }, "slow");
 return false;
 } 



function loadPopup() {
  if($popupStatus==0) {
    jQuery("#backgroundPopup").css( {
      "opacity": "0.7"
    });
    jQuery("#backgroundPopup").fadeIn("slow");
    jQuery("#popupContactOK").fadeIn("slow");
   // errorFound = "Y";
    $popupStatus = 1;
    jQuery("#popupOKOnly").focus();
    }
}

function centerPopup() {
  var windowWidth = jQuery(window).width();
  var windowHeight = jQuery(window).height();	
  var popupHeight = jQuery("#popupContactOK").height();
  var popupWidth = jQuery("#popupContactOK").width();

  jQuery("#popupContactOK").css( {
    "top": (windowHeight/2) - (popupHeight/2) + "px",
    "left": (windowWidth/2) - (popupWidth/2) + "px"
  });
  //only need force for IE6
  jQuery("#backgroundPopup").css( {
    "height": document.documentElement.height
  });
}
function disablePopup() {
  if($popupStatus==1) {
    jQuery("#backgroundPopup").fadeOut("slow");
    jQuery("#popupContactOK").fadeOut("slow");
    $popupStatus = 0;
  }
 
}