  var $curInst;
  var $curJacs;
  var $curCampus;
  var $curPaperApplicant;

  $(document).ready(function() 
  {
    var $charWarningMsg = getCharWarningMsgValue();

    $('#furtherTextEntry').limitChars({postCode:true, message:$charWarningMsg});
    $('#entryPointTextEntry').limitChars({numeric:true, message:$charWarningMsg});    
    $('#campuscodeTextEntry').limitChars({campus:true, message:$charWarningMsg});        
    
    $curInst =  $('#instcodeTextEntry')[0].value;
    $curJacs = $('#coursecodeTextEntry')[0].value;
    $curCampus = $('#campuscodeTextEntry')[0].value;
    $curPaperApplicant = $('#hidPaperApplicant')[0].value;
    var $crimDeclare = $('#crimDeclareTextEntry')[0];  
    
    courseRequiresCrimQuestionStart();
  });

  function crimDeclarelaunchPopUp(page, args, theField)
  {
    var $crimDeclare = $('#crimDeclareTextEntry')[0];
    args += "&Declared=" + $crimDeclare.value
    args += "&field="+theField;
    
    openPopUp(page, args, 506, 500, 'popupwindow');
    return false;
  }
  
  function courseRequiresCrimQuestionSave(notPresentedMsg)
  {
    var $inst =  $('#instcodeTextEntry')[0];
    var $jacs = $('#coursecodeTextEntry')[0];
    var $campus = $('#campuscodeTextEntry')[0];
    var $paperApplicant = $('#hidPaperApplicant')[0];
    var $crimDec = $('#crimDeclareTextEntry')[0];
    var showPopup = false;
    
    if($inst.value.length > 2 &&  $jacs.value.length > 3 && $campus.value.length > 0)
    {
      $.ajax({
         url:     'AjaxServlet'    
                  + '?functionname=isCrimQuestionReq' 
                  + '&inst=' + $inst.value.toUpperCase()
                  + '&jacs=' + $jacs.value.toUpperCase()
                  + '&campus=' + $campus.value.toUpperCase(),
         success: function(data) {
		       $(data).find('response').each(function() 
		       {
            var $retVal = $(this);
            if ($retVal.text() == 'Y') 
            {
              if($crimDec.value.length < 1 || $crimDec.value == notPresentedMsg)          
              {
                if($paperApplicant.value == 'Y')
                {
                  $('#crimDeclareTextEntry').val(notPresentedMsg);
                  showPopup = false;
                }
                else
                {
                  showPopup = true;
                }
		           }
            }
            else
            {
              $('#crimDeclareTextEntry').val(notPresentedMsg);
            }
		       });  
         },
         async:   false
      });  
    }
    
    if (showPopup == true)
    {
      $('#crimDeclare').show();
      crimDeclarelaunchPopUp("PopUpServlet", "?functionname=crimDeclare", 'document.Form1.crimDeclareTextEntry');
      return false;
    }
  }
  
 function courseRequiresCrimQuestionStart()
  {
    var $inst =  $('#instcodeTextEntry')[0];
    var $jacs = $('#coursecodeTextEntry')[0];
    var $campus = $('#campuscodeTextEntry')[0];
    
    if($inst.value.length > 2 &&  $jacs.value.length > 3 && $campus.value.length > 0)
    {
      $.get('AjaxServlet', {functionname: 'isCrimQuestionReq', inst: $inst.value.toUpperCase(), jacs: $jacs.value.toUpperCase(), campus: $campus.value.toUpperCase()}, function(data) 
      { 
        $(data).find('response').each(function() 
        {
          var $retVal = $(this);
          if ($retVal.text() == 'Y') 
          {
            $('#crimDeclare').show();
          }
          else
          {
            $('#crimDeclare').hide();
          }
        });
      });  
    }
    else
    {
      $('#crimDeclare').hide();
    }    
  }  
  
function getCharWarningMsgValue(){
  return $('#hidCharWarningMsg')[0].value;
}