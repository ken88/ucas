var $boolUnicodeMsgShown = false;
var $boolSymbolShowing = false;

$(document).ready(function(){

  $('#unicodeMsgWarning').hide();
  $('#dialog-modal-extended-chars').hide(); 
  $('#subCharacter').hide(); 

  var $charWarningMsg = getCharWarningMsgValue();
  getUnicodeMsgShownValue();
  pageHasSpecialChars();

  //CHG43078  Employer name and job desc. should accept numbers and punctuation chars
	//$('#employersNameTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#employersNameTextEntry').limitChars({address:true, message:$charWarningMsg});
	$('#employersAddressTextEntry').limitChars({address:true, message:$charWarningMsg});
	//$('#natureOfWorkTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#natureOfWorkTextEntry').limitChars({address:true, message:$charWarningMsg});
  
  $('#employersNameTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  });
  
  $('#employersAddressTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  });
  
  $('#natureOfWorkTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  }); 
});

function pageHasSpecialChars(){
  var $empName = $('#employersNameTextEntry')[0].value;
  var $empAddress = $('#employersAddressTextEntry')[0].value;
  var $natureOfWork = $('#natureOfWorkTextEntry')[0].value;
  
  if (hasSpecialChars($empName)
   || hasSpecialChars($empAddress)
   || hasSpecialChars($natureOfWork)){
    showExtendCharMsg();
  }
  else{
    removeSymbolToLabels();
    hideExtendCharMsg();
  }  
}

function hideExtendCharMsg(){
  $('#unicodeMsgWarning').hide();
  $('#subCharacter').hide(); 
}

function addSymbolToLabels(){
  if ($boolSymbolShowing == false)
  {
    var $temp = '';
    var $symbol = '<span class="ReqPlus">&nbsp;&AElig;</span>';

    $temp = $("label[for=employersNameTextEntry]").html() + $symbol;
    $("label[for=employersNameTextEntry]").html($temp);
    
    $temp = $("label[for=employersAddressTextEntry]").html() + $symbol;
    $("label[for=employersAddressTextEntry]").html($temp);
    
    $temp = $("label[for=natureOfWorkTextEntry]").html() + $symbol;
    $("label[for=natureOfWorkTextEntry]").html($temp);    
    
    $('#subCharacter').show();    
    $boolSymbolShowing = true;
  }
}

function removeSymbolToLabels(){
  if ($boolSymbolShowing == true){ 
    var $temp = '';
    $temp = $("label[for=employersNameTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=employersNameTextEntry]").html($temp);

    $temp = $("label[for=employersAddressTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=employersAddressTextEntry]").html($temp);

    $temp = $("label[for=natureOfWorkTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);  
    $("label[for=natureOfWorkTextEntry]").html($temp);
    $boolSymbolShowing = false;
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
  $('#unicodeMsgWarning').show();
  $('#unicodeMsgWarning').focus();
  addSymbolToLabels();
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