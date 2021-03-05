var $popupStatus = 0; //0 means disabled; 1 means enabled;
var $charWarningMsgPassword = '';

$(document).ready(function(){


 $charWarningMsgPassword = getCharWarningMsgPasswordValue();
 
 $('#txtPassword').removechars({space:true, message:$charWarningMsgPassword});
 
 /* $('#txtPassword').blur(function(){
    var $passwordText = $('#txtPassword')[0].value;
    var n=$passwordText.replace(" ","%"); 
    if (n.indexOf("%") >= 0)
    {
      $('#txtPassword').val("");
      confirmDeleteMessage2();
    }
  });*/ 
  
  function getCharWarningMsgPasswordValue(){
  return $('#hidCharWarningMsgPassword')[0].value;}
  
  
  $("#popupOKOnly").click(function(){
    disablePopup();
  });
});


 function confirmMessage2(message) {
      $message = message;
      jQuery('#appsNoQualsList').html($message);
     // jQuery('#popupContactOK h1').html(jQuery('#hidCharWarningMsgPasswordTitle').val());  
      centerPopup();
      loadPopup();
      jQuery("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    } 
    
function confirmDeleteMessage2() {
  jQuery('#appsNoQualsList').html(jQuery('#hidCharWarningMsgPassword').val());
  centerPopup();
  loadPopup();
  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
} 

function loadPopup() {
  if($popupStatus==0) {
    jQuery("#popupOKOnly").focus();
    jQuery("#backgroundPopup").css( {
      "opacity": "0.7"
    });
    jQuery("#backgroundPopup").fadeIn("slow");
    jQuery("#popupContactOK").fadeIn("slow");
    $popupStatus = 1;
    
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