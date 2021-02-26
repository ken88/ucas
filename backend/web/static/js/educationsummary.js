var eduId = 0;

$(document).ready(function(){
  var $charWarningMsg = getCharWarningMsgValue();

  $('#scotRegnoTextEntry').limitChars({numsChars:true, message:$charWarningMsg});
  $('#tecRegNoTextEntry').limitChars({numsChars:true, message:$charWarningMsg});

  $("[id^=delSchool]").click(function(){
     var target = $(this).attr("id");
     if(target.length === 10) {
       eduId = target.slice(-1);
     } else if (target.length === 11) {
       eduId = target.slice(-2);
     } else if (target.length > 11) {
       eduId = target.slice(-3);
     }
     confirmDeleteMessage($('#ConfirmDelMsg')[0].value);     
  });

  $("#btnOK").click(function(){
    var comp = document.getElementById('schLinkDel' + eduId);
    try { //in firefox
      comp.click();
      return;
    } catch(ex) {}
    try { // in chrome
      if(document.createEvent) {
        var e = document.createEvent('MouseEvents');
        e.initEvent( 'click', true, true );
        comp.dispatchEvent(e);
        return;
      }
    } catch(ex) {}
    try { // in IE
      if(document.createEventObject) {
         var evObj = document.createEventObject();
         comp.fireEvent("onclick", evObj);
         return;
      }
    } catch(ex) {}
  });

  $("#btnCancel").click(function(){});

}); 	
    
function getCharWarningMsgValue(){
  return $('#hidCharWarningMsg')[0].value;
}

function confirmDeleteMessage(message){  
  $('#delete_confirm').modal({
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