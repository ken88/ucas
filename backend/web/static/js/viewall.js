$(document).ready(function() {
  $('#chkPDAgreed').change(function(){
    $('#chkComplete').attr('checked', false);  
    checkSectionComplete();
  });   

  $('#chkEmploymentAgreed').change(function(){
    $('#chkComplete').attr('checked', false); 
    checkSectionComplete();
  });   

  $('#chkStatementAgreed').change(function(){
    $('#chkComplete').attr('checked', false); 
    checkSectionComplete();
  });
  
  
  
  
  
  checkSectionComplete();  
});

function checkSectionComplete(){ 
  enableComplete = true;
  checked = true;
  showCheckMessage=false;
  
  if ($('#chkPDAgreed').length != 0) {  
    checked = $('#chkPDAgreed').attr('checked');
    
    showCheckMessage = true;
    
    if (!checked) {
      enableComplete = false;     
    } 
  }
  
  if ($('#chkEmploymentAgreed').length != 0) {  
    checked = $('#chkEmploymentAgreed').attr('checked');
    
    showCheckMessage = true;

    if (!checked) {
      enableComplete = false;     
    } 
  }  
  
  if ($('#chkStatementAgreed').length != 0) {  
    checked = $('#chkStatementAgreed').attr('checked');
    
    showCheckMessage = true;
    
    if (!checked) {
      enableComplete = false;     
    }
  }    
  
  if (showCheckMessage == true)
  {
      $('#sectionCheckMessage').show();
  }
  else
  {
      $('#sectionCheckMessage').hide();
  }
  
  if (enableComplete) { 
    $('#chkComplete').attr('disabled', ''); 
  }
  else {
    
    $('#chkComplete').attr('disabled', 'disabled');    
  }
}

function unCheckSectionComplete(){
  $('#chkComplete').attr('checked', false); 
}

