var $curVisa = ''; 
var $curNat = '';
var $curDualNat = '';
var $language = '';
var $boolUnicodeMsgShown = false;
var $boolSymbolShowing = false;
var $countermessage = '';

$(document).ready(function(){
  // ME110 - initialise slider checkbox 
  $('#marketPref').find('input[type=checkbox]').tzCheckbox();
  $('#unicodeMsgWarning').hide();
  $('#unicodeMsgWarningFooter').hide();
  $('#dialog-modal-extended-chars').hide();    
  $('#subCharacter').hide();      

  setCurrentValues();
  isVisaRequiredStart();
    
  $language = $('#language')[0].value;	
  var $charWarningMsg = getCharWarningMsgValue();
  getUnicodeMsgShownValue();
  pageHasSpecialChars();

  //set text counter message
  $countermessage = $('#hidDisCharCounter')[0].value;  

  var specialNeedsTextEntry = {
    'maxCharacterSize': 500,
    'originalStyle': 'originalTextareaInfo',
    'warningStyle' : 'warningTextareaInfo',
    'warningNumber': 40,
    'displayFormat': '(#left '+$countermessage+')',
    'allowCountBelowZero':'N'
  };

  $('#foreNameTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#surNameTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#prefForeNameTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#previousSurnameTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#emailTextEntry').limitChars({email:true, message:$charWarningMsg});
  $('#emailConfirmTextEntry').limitChars({email:true, message:$charWarningMsg});
  $('#homeTelNoTextEntry').limitChars({telno:true, message:$charWarningMsg});
  $('#mobileNoTextEntry').limitChars({telno:true, message:$charWarningMsg});
  $('#nominatedPersonTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#nominatedPersonRelationTextEntry').limitChars({name:true, message:$charWarningMsg});
  $('#uniqueLearnerNoTextEntry').limitChars({numeric:true, message:$charWarningMsg});  
  $('#isaNoTextEntry').limitChars({numsChars:true, message:$charWarningMsg});  
  $('#toeflNoTextEntry').limitChars({numeric:true, message:$charWarningMsg});  
  $('#ieltsNoTextEntry').limitChars({numsChars:true, message:$charWarningMsg});  
  $('#txtPassportNo').limitChars({postCode:true, message:$charWarningMsg});   
  $('#txtPlaceOfIssue').limitChars({postCode:true, message:$charWarningMsg});     
  $('#splNeedsDetailsTextEntry').limitChars({disText:true, message:$charWarningMsg}); 
  $('#splNeedsDetailsTextEntry').textareaCount(specialNeedsTextEntry, function(data){});
    
  $('#nationalityTextEntry').focus(function(){
    var $nat = $('#nationalityTextEntry')[0].value;
    var $dualNat = $('#dualNationalityTextEntry')[0].value;
    if($curNat != $nat || $curDualNat != $dualNat){
      isVisaRequired();
    }
    setCurrentValues();
  }); 

  $('#nationalityTextEntry').change(function(){
    var $nat = $('#nationalityTextEntry')[0].value;
    var $dualNat = $('#dualNationalityTextEntry')[0].value;
    if($curNat != $nat || $curDualNat != $dualNat){
      isVisaRequired();
    }
    setCurrentValues();
  }); 
		
  $('#dualNationalityTextEntry').focus(function(){
    var $nat = $('#nationalityTextEntry')[0].value;
    var $dualNat = $('#dualNationalityTextEntry')[0].value;
    if($curNat != $nat || $curDualNat != $dualNat){
      isVisaRequired();
    }
    setCurrentValues();
  }); 
	
  $('#dualNationalityTextEntry').change(function(){
    var $nat = $('#nationalityTextEntry')[0].value;
    var $dualNat = $('#dualNationalityTextEntry')[0].value;
    if($curNat != $nat || $curDualNat != $dualNat){
      isVisaRequired();
    }
    setCurrentValues();
  });   
  
  $('#cboStudentVisa').change(function(){
    var $visa =  $('#cboStudentVisa')[0].value;
    if($visa == 'Y'){
      enablePassport();
      $curVisa = 'Y';
    }  
    else if($visa == 'N'){
      if($curVisa == 'Y'){
        if($language == "2"){
          confirmed = confirmPassportMessage("Bydd newid eich ateb yn dileu unrhyw fanylion blaenorol a gasglwyd am eich pasport. " + '\n\n' + "Ydych chi'n si\u0175r eich bod am fwrw ymlaen?");
        }
        else{
          confirmed = confirmPassportMessage("Changing your response will remove your previous passport details collected." + '\n\n' + "Are you sure you want to continue?");
        }
      }		  
    }
    else if($visa == '-'){
      if($curVisa == 'Y'){
        if($language == "2"){
          confirmed = confirmPassportMessage("Bydd newid eich ateb yn dileu unrhyw fanylion blaenorol a gasglwyd am eich pasport. " + '\n\n' + "Ydych chi'n si\u0175r eich bod am fwrw ymlaen?");
        }
        else{
          confirmed = confirmPassportMessage("Changing your response will remove your previous passport details collected." + '\n\n' + "Are you sure you want to continue?");
        }
      }		  
    }		
    
    $("#btnOK").click(function(){
      clearPassport();
      disablePassport();
      $curVisa = 'N';	
    });

    $("#btnCancel").click(function(){
      $('#cboStudentVisa').val("Y"); 
      $curVisa = 'Y';
    });
    
    setCurrentValues();
  }); 	
    
  $('#foreNameTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  });
  
  $('#surNameTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  });
  
  $('#prefForeNameTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();    
  });
  
  $('#previousSurnameTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  });
    
  $('#nominatedPersonTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  });    
    
  $('#nominatedPersonRelationTextEntry').blur(function(){
    checkForASCII(this);
    pageHasSpecialChars();
  }); 
  
	//ME110 changes
	selectAllOptions('#chkAllCommsFlag', '.checkSingleComms'); //Comms option section
	selectAllOptions('#chkAllOption', '.checkSingleOption'); // contact section
	toggleCheckbox('.checkSingleComms', '.chkAllCommsFlag');
	toggleCheckbox('.checkSingleOption', '.chkAllOption');
});
  
function setCurrentValues(){
  $curVisa = $('#cboStudentVisa')[0].value; 
  $curNat = $('#nationalityTextEntry')[0];  
  $curDualNat = $('#dualNationalityTextEntry')[0];
}
  
function clearPassport(){
  $('#txtPassportNo').val("");
  $('#cboIssueDay').val("-");
  $('#cboIssueMonth').val("-");
  $('#cboIssueYear').val("-");
  $('#cboExpireDay').val("-");
  $('#cboExpireMonth').val("-"); 
  $('#cboExpireYear').val("-"); 
  $('#txtPlaceOfIssue').val("");
}  

function enableVisa(){
  $('#cboStudentVisa').attr("disabled", false); 
  $('#cboStudiedUK').attr("disabled", false); 
  $('#studiedRequired').html("*");
} 
  
function disableVisa(){
  $('#cboStudentVisa').val("-"); 
  $('#cboStudentVisa').attr("disabled", true); 
  $('#studiedRequired').html("");
  $('#cboStudiedUK').val("-"); 
  $('#cboStudiedUK').attr("disabled", true); 
}
  
function disablePassport(){
  $('#txtPassportNo').attr("disabled", true); 

  $('#cboIssueDay').attr("disabled", true); 	
  $('#cboIssueMonth').attr("disabled", true); 
  $('#cboIssueYear').attr("disabled", true); 
  $('#cboExpireDay').attr("disabled", true); 
  $('#cboExpireMonth').attr("disabled", true); 
  $('#cboExpireYear').attr("disabled", true); 
  $('#txtPlaceOfIssue').attr("disabled", true); 
}    
  
function enablePassport(){
  $('#txtPassportNo').attr("disabled", false); 
  $('#cboIssueDay').attr("disabled", false); 
  $('#cboIssueMonth').attr("disabled", false); 
  $('#cboIssueYear').attr("disabled", false); 
  $('#cboExpireDay').attr("disabled", false); 
  $('#cboExpireMonth').attr("disabled", false); 
  $('#cboExpireYear').attr("disabled", false); 
  $('#txtPlaceOfIssue').attr("disabled", false); 
}
 
function isVisaRequiredStart(){
  var $nat = $('#nationalityTextEntry')[0];  
  var $dualNat =  $('#dualNationalityTextEntry')[0];
  if($nat.value.length > 1 || $dualNat.value.length > 1){
    $.get('AjaxServlet', {functionname: 'isCountryOverseasReq', nat: $nat.value, dualNat: $dualNat.value}, function(data){ 
      $(data).find('response').each(function(){
        var $retVal = $(this);
        if ($retVal.text() == 'Y'){
          enableVisa();	
          $curVisa = $('#cboStudentVisa')[0].value;
          if($curVisa == 'Y'){
            enablePassport(); 
          }
          else if ($curVisa == 'N'){
            clearPassport();
            disablePassport();
          }
          else if ($curVisa == '-'){
	        clearPassport();
            disablePassport();
          }
        }
        else{
          disableVisa();	
	      clearPassport();
          disablePassport();
          $curVisa = '-';			
        }
      });
    });  
  }
  else{
    disableVisa();	
	disablePassport();
    $curVisa = '-';			
  }    
}    
 
function isVisaRequired(){
  var $nat = $('#nationalityTextEntry')[0];  
  var $dualNat =  $('#dualNationalityTextEntry')[0];
  if($nat.value.length > 1 || $dualNat.value.length > 1){
    $.get('AjaxServlet', {functionname: 'isCountryOverseasReq', nat: $nat.value, dualNat: $dualNat.value}, function(data){ 
      $(data).find('response').each(function(){
        var $retVal = $(this);
        if ($retVal.text() == 'Y'){
          enableVisa();	
          var $visa =  $('#cboStudentVisa')[0].value;		
          if($visa == 'Y'){
            enablePassport();
            $curVisa = 'Y';
          }  
        }
        else if($visa == 'N'){
          $curVisa = '-';
          disableVisa();
          disablePassport();
        }
        else{
          $curVisa = '-';	
          disableVisa();	
          disablePassport();
        }
      });
    });  
  }
  else{
    $curVisa = '-';
    disableVisa();		
    disablePassport();
  }
  setCurrentValues();
}

function pageHasSpecialChars(){
  var $fname = $('#foreNameTextEntry')[0].value;
  var $surname = $('#surNameTextEntry')[0].value;
  var $preFName = $('#prefForeNameTextEntry')[0].value;
  var $preSurn = $('#previousSurnameTextEntry')[0].value;
  var $nomPerson = $('#nominatedPersonTextEntry')[0].value;
  var $nomPerRel = $('#nominatedPersonRelationTextEntry')[0].value;
  var $addr1 = $('#txtAddressLine1')[0].value;
  var $addr2 = $('#txtAddressLine2')[0].value; 
  var $addr3 = $('#txtAddressLine3')[0].value; 
  var $addr4 = $('#txtAddressLine4')[0].value; 
  var $haddr1 = $('#txtHomeAddressLine1')[0].value;
  var $haddr2 = $('#txtHomeAddressLine2')[0].value; 
  var $haddr3 = $('#txtHomeAddressLine3')[0].value; 
  var $haddr4 = $('#txtHomeAddressLine4')[0].value;   
  
  if ((hasSpecialChars($fname))
   || (hasSpecialChars($surname))
   || (hasSpecialChars($preFName))
   || (hasSpecialChars($preSurn))
   || (hasSpecialChars($nomPerson))
   || (hasSpecialChars($nomPerRel))
   || (hasSpecialChars($addr1))   
   || (hasSpecialChars($addr2))   
   || (hasSpecialChars($addr3))   
   || (hasSpecialChars($addr4))
   || (hasSpecialChars($haddr1))
   || (hasSpecialChars($haddr2))
   || (hasSpecialChars($haddr3))
   || (hasSpecialChars($haddr4))){
    showExtendCharMsg();
  }
  else{
    removeSymbolToLabels();
    hideExtendCharMsg();
  }
}

function removeSymbolToLabels(){
  if ($boolSymbolShowing == true){ 
    var $temp = '';
    $temp = $("label[for=foreNameTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=foreNameTextEntry]").html($temp);

    $temp = $("label[for=surNameTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=surNameTextEntry]").html($temp);

    $temp = $("label[for=prefForeNameTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);  
    $("label[for=prefForeNameTextEntry]").html($temp);

    $temp = $("label[for=previousSurnameTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=previousSurnameTextEntry]").html($temp);
    
    $temp = $("label[for=nominatedPersonTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=nominatedPersonTextEntry]").html($temp);
    
    $temp = $("label[for=nominatedPersonRelationTextEntry]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=nominatedPersonRelationTextEntry]").html($temp);    
    
    $temp = $("label[for=homeAddress]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=homeAddress]").html($temp);  
    
    $temp = $("label[for=postalAddress]").html();
    $temp = $temp.substring(0,$temp.length - 31);
    $("label[for=postalAddress]").html($temp);
    $boolSymbolShowing = false;
  }
}

function hideExtendCharMsg(){
  $('#unicodeMsgWarning').hide();
  $('#unicodeMsgWarningFooter').hide();
  $('#subCharacter').hide();
}  

function addSymbolToLabels(){
  if ($boolSymbolShowing == false)
  {
    var $temp = '';
    var $symbol = '<span class="ReqPlus">&nbsp;&AElig;</span>';

    $temp = $("label[for=foreNameTextEntry]").html() + $symbol;
    $("label[for=foreNameTextEntry]").html($temp);

    $temp = $("label[for=surNameTextEntry]").html() + $symbol;
    $("label[for=surNameTextEntry]").html($temp);

    $temp = $("label[for=prefForeNameTextEntry]").html() + $symbol;
    $("label[for=prefForeNameTextEntry]").html($temp);

    $temp = $("label[for=previousSurnameTextEntry]").html() + $symbol;
    $("label[for=previousSurnameTextEntry]").html($temp);
  
    $temp = $("label[for=nominatedPersonTextEntry]").html() + $symbol;
    $("label[for=nominatedPersonTextEntry]").html($temp);

    $temp = $("label[for=nominatedPersonRelationTextEntry]").html() + $symbol;
    $("label[for=nominatedPersonRelationTextEntry]").html($temp);
    
    $temp = $("label[for=homeAddress]").html() + $symbol;
    $("label[for=homeAddress]").html($temp);    
    
    $temp = $("label[for=postalAddress]").html() + $symbol;
    $("label[for=postalAddress]").html($temp);    
    
    $('#subCharacter').show();

    $boolSymbolShowing = true;
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
  $('#unicodeMsgWarningFooter').show();
  $('#unicodeMsgWarning').focus();
  addSymbolToLabels();
  $boolUnicodeMsgShown = true;
}

function checkForASCII(id){
	var $curField = $(id)[0].value;
	if (hasSpecialChars($curField)){
    showExtendCharMsg();
	}
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

function confirmPassportMessage(message){
	$('#passport_confirm').modal({
    minWidth: 400,
    minHeight: 120,
    maxWidth: 500,
    maxHeight: 580,
		containerId: 'confirm-container', 
		onShow: function (dialog){
      dialog.container.css("height", "auto");      
			var modal = this;
			$('.message', dialog.data[0]).append(message);
		}
	});
}


/* ME110 - START*/

/*
 * This function is used to select / deselect an entire column
 *
 * @param group The checkbox from the "select all" row
 * @param option The child checkbox option
 */
function selectAllOptions(group, option) {
	$(group).change(function() {
		var isChecked = $(group).is(':checked');
		$(option).each(function(){
			this.checked = (isChecked) ? true: false;
			(isChecked) ? $(this).addClass('checked'): $(this).removeClass('checked');
		});
		toggleContactSection();
	});
}

/*
 * This function is used to select / deselect other columns as required when a checkbox is selected / deslected.
 *
 * @param group The checkbox from the "select all" row
 * @param option The checkbox.
 */
function toggleCheckbox(option, group) {
	$(option).change(function() {
		if (this.checked){
			var isAllChecked = 0;
			$(option).each(function(){
				if($(this).is('INPUT') && (!this.checked)) {
					isAllChecked = 1;
				}
			})      
		}
		$(group).attr("checked", (isAllChecked === 0)? true: false);
		(isAllChecked === 0) ? $(group).addClass('checked') : 
			$(group).removeClass('checked');
		toggleContactSection();
	});
}

function toggleContactSection() {
	var isCommercial = $('#chkCommercialOption').is(':checked');
	var isEducational = $('#chkEducationalOption').is(':checked');
	var section = $('#contactOption');
	if(isCommercial || isEducational) {
		section.removeAttr('disabled');
		validationMsg();
	} else {
		section.attr('disabled', 'disabled');
		section.find('span').removeClass('checked');
		section.find('input[type=checkbox]').attr('disabled', 'disabled');
		section.find('input[type=checkbox]').removeAttr('checked');
		$('#optionWarningTxt').css('visibility', 'hidden');
		$('#change-marketing').removeAttr('disabled');
	}

}

function validationMsg() {
	var email = $('input[name=chkEmailOption]').is(':checked');
	var sms = $('input[name=chkTxtOption]').is(':checked');
	var post = $('input[name=chkMailingsOption]').is(':checked');
	if (email || sms || post) {
		$('#optionWarningTxt').css('visibility', 'hidden');
		$('#change-marketing').removeAttr('disabled');
	} else {
		$('#optionWarningTxt').css('visibility', 'visible');
		$('#change-marketing').attr('disabled', 'disabled');
	}
}

function displayMarketingPreference() { 
	$('#marketPref').modal({
		minWidth: 480,
		maxWidth: 700,
		containerId: 'confirm-container',
		persist: true,
		onShow: function (dialog) {
			var modal = this;
			dialog.container.css("height", "auto"); 
			dialog.container.css("top", "2%");
			toggleContactSection();
			$('#change-marketing').click(function() {
				submitModal();
				modal.close();
			});
		},
		onClose: function(dialog) {
			setPreferences();
			toggleContactSection();
			$.modal.close();
		}
	});
}

function setPreferences() {
	// get from hidden opt-ins
	var educationOption= $("input[name='educationalMailingsCheckBox']").val();
	var commercialOption = $("input[name='commercialMailingsCheckBox']").val();
	var unplacedCommsFlag = $("input[name='unplacedCommsCheckBox']").val();
	var allOption = (unplacedCommsFlag === 'checked' &&
				educationOption === 'checked' &&
				commercialOption === 'checked');
	
	//get from hidden contact option
	var byEmailFlag = $('input[name=emailCheckBox]').val();
	var byTextFlag = $('input[name=textCheckBox]').val();
	var byPostFlag = $('input[name=noPostCheckBox]').val();
	var allChannels = (byEmailFlag === 'checked' &&
					  byTextFlag === 'checked' &&
					  byPostFlag === 'checked');	  

	$('#chkUnplacedCommsFlag').attr('checked', unplacedCommsFlag);
	$('input[name=chkAllComms]').attr('checked', allOption);
	$('#chkEducationalOption').attr('checked', educationOption);
	$('#chkCommercialOption').attr('checked', commercialOption);
	//opt-ins
	reset('chkUnplacedCommsFlag_Id', unplacedCommsFlag);
	reset('chkEducationalOption_Id', educationOption);
	reset('chkCommercialOption_Id', commercialOption);
	(allOption)? $('span[id=chkAllComms_Id]').addClass('checked') : 
				 $('span[id=chkAllComms_Id]').removeClass('checked');
	//contacts reset
	$('input[name=chkEmailOption]').attr('checked', byEmailFlag);
	$('input[name=chkTxtOption]').attr('checked', byTextFlag);
	$('input[name=chkMailingsOption]').attr('checked', byPostFlag);
	$('input[name=chkAll]').attr('checked', allChannels);
	reset('chkEmailOption_Id', byEmailFlag);
	reset('chkTxtOption_Id', byTextFlag);
	reset('chkMailingsOption_Id', byPostFlag);
	(allChannels) ? $('span[id=chkAll_Id]').addClass('checked') : 
					$('span[id=chkAll_Id]').removeClass('checked');
}

function reset(key, value) {
	(value === '') ? $("span[id=" + key + "]").removeClass('checked'):
					 $("span[id=" + key + "]").addClass('checked');
}

function submitModal() {
	var options = $('input[name=chkUnplacedCommsFlag]').is(':checked');
	var educationOption = $('input[name=chkEducationalOption]').is(':checked');
	var commercialOption = $('input[name=chkCommercialOption]').is(':checked');
	//contact option
	var allContactOption = $('input[name=chkAll]').is(':checked');
	var byEmailFlag = $('input[name=chkEmailOption]').is(':checked');
	var byTextFlag = $('input[name=chkTxtOption]').is(':checked');
	var byPostFlag = $('input[name=chkMailingsOption]').is(':checked');

	setContactOptions('unplacedCommsCheckBox', options);
	setContactOptions('commercialMailingsCheckBox', commercialOption);
	setContactOptions('educationalMailingsCheckBox', educationOption);
	setContactOptions('emailCheckBox', byEmailFlag);
	setContactOptions('textCheckBox', byTextFlag);
	setContactOptions('noPostCheckBox', byPostFlag);
}

function setContactOptions(selectedField, value) {
	if (value) {
		$("input[name="+selectedField+"]").val('checked');
		$("input[name="+selectedField+"]").removeAttr('disabled');
	}
	else {
		$("input[name="+selectedField+"]").val('');
		$("input[name="+selectedField+"]").attr('disabled', 'disabled');
	}
}

/* ME110 - END */