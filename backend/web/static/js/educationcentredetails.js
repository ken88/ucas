$(document).ready(function(){
  var $charWarningMsg = getCharWarningMsgValue();

  $('#centreNameTextEntry').limitChars({houseName:true, message:$charWarningMsg});
}); 	
    
function getCharWarningMsgValue(){
  return $('#hidCharWarningMsg')[0].value;
}