javascript:window.history.forward(1);

function launchFieldHelp(page, args)
{
  //presuming all help pop-ups are going to be the same dimensions...
  openPopUp(page, args, 506, 200, 'helpwindow');
  return false;
}

function launchPostFieldHelp(page, args) {
  OpenPostPopUp(page, args, 506, 200, 'helpwindow');
  return false;
}

/*have to give different method names - JavaScript doesn't support overloading...*/
//default function
function launchDefaultPopUp(page, args, theField)
{
  launchPopUp(page, args, null, null, null, theField)
}

//constructor used for course pop-up
function launchCoursePopUp(page, args, instCode, theField)
{
  launchPopUp(page, args, instCode, null, null, theField)
}

//constructor used for campus pop-up
function launchCampusPopUp(page, args, instCode, courseCode, theField)
{
  launchPopUp(page, args, instCode, courseCode, null, theField)
}

function OpenWindowWithPost(url, windowoption, name, params) {
  var form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("action", url);
  form.setAttribute("target", name);
  for (var i in params) {
    if (params.hasOwnProperty(i)) {
      var input = document.createElement('input');
      input.type = 'hidden';
      input.name = i;
      input.value = params[i];
      form.appendChild(input);
    }
  }
  document.body.appendChild(form);
  window.open("post.html", name, windowoption);
  form.submit();
  document.body.removeChild(form);
}

function OpenPostPopUp(page, args, xCoord, yCoord, winName) {
  //always centre the window, irrespective of size
	var popX = xCoord;
	var popY = yCoord;
	posX = ((screen.availWidth/2)-(popX/2));
	posY = ((screen.availHeight/2)-(popY/2));
  var param = { 'uid' : '1234'};
  OpenWindowWithPost(page, 'width='+popX+',height='+popY+'toolbar=0,menubar=0,directories=0,location=0,scrollbars=1,left='+posX+',top='+posY, "NewFile", args);
}

//constructor used for campus pop-up
function launchPopUp(page, args, instCode, courseCode, campusCode, theField)
{
  args += "&field="+theField;//should never be null/empty
  args += (instCode != null) ? "&instcode="+instCode.toUpperCase() : "";
  args += (courseCode != null) ? "&coursecode="+courseCode.toUpperCase() : "";
  args += (campusCode != null) ? "&campuscode="+campusCode.toUpperCase() : "";


  //alert(args);

  openPopUp(page, args, 506, 355, 'popupwindow');
  return false;
}

//constructor used for campus pop-up
function launchSchoolSearchPopUp(page, args, theField)
{
  args += "&field="+theField;//should never be null/empty
  openPopUp(page, args, 750, 450, 'popupwindow');
  return false;
}

//constructor used for POC search pop-up
function launchPOCSearchPopUp(page, args, theField)
{
  args += "&field="+theField;//should never be null/empty

  openPopUp(page, args, 506, 355, 'popupwindow');
  return false;
}

function openPopUp(page, args, xCoord, yCoord, winName)
{
  //always centre the window, irrespective of size
	var popX = xCoord;
	var popY = yCoord;
	posX = ((screen.availWidth/2)-(popX/2));
	posY = ((screen.availHeight/2)-(popY/2));

  page += args;
  var url = "https://2021.undergrad.apply.ucas.com/ucasapply/"+page;
	var myPopup = window.open(url,winName,'width='+popX+',height='+popY+'toolbar=0,menubar=0,directories=0,location=0,scrollbars=1,left='+posX+',top='+posY);
  if (!myPopup.opener)
       myPopup.opener = self;

	myPopup.focus();
	return false;
}

function removeBlanks(inStr)
{
  var outStr = "";

  for(var i=0; i<inStr.length; i++)
  {
    if(inStr.charAt(i) != " ")
      outStr += inStr.charAt(i);
  }

  return outStr;
}


//removes any backslashes (used for escaping quotes)
function removeEscapeChar(inStr)
{
  var outStr = "";

  for(var i=0; i<inStr.length; i++)
  {
    if(inStr.charAt(i) != "\\")
      outStr += inStr.charAt(i);
  }

  return outStr;
}

/* links to the 3D Secure info pages */
function linkTo3DSecureInfo(scheme)
{
  if (scheme=="mastercard") openPopUp("http://www.mastercardbusiness.com/mcbiz/index.jsp?template=/orphans&content=securecodepopup","",600,450,"3DS");
  else if (scheme=="visa") openPopUp("http://www.visaeurope.com/making-payments/verified-by-visa/","",800,450,"3DS");
}

/* restricts input of special characters in text fields to those in "okval".
   Also limits length of entry to "length"
*/
function checkInput(e, textfield, length, okval)
{
  var key;
	var keychar;

	if (window.event)
		key = window.event.keyCode;
	else if (e)
		key = e.which;
	else
		return true;

  if(textfield.value.length >= length)
  {
	  if ((key==null) || (key==0) || (key==8) ||
			  (key==9) || (key==27))
			return true;//allow backspace, delete etc (but not return (key == 13)
		else//computer says no
			return false;
  }
	else
	{
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();

    if ((okval.indexOf(keychar) > -1))
      return true;

    if ((key==null) || (key==0) || (key==8) ||
        (key==9) || (key==13) || (key==27) )
      return true;

    return false;
  }
}

/*CCB/RFC/192 - JP 24/07/2008 - Javascript array of titles and genders built by
Java code on page.  This function looks up the title chosen and sets the gender
if appropriate. (Copied from HC's code in GttrApply09)*/
function setGender(arrayTitleGenders, titleField, genderField)
{
  var titleValue = titleField.options[titleField.selectedIndex].value;

  for (x in arrayTitleGenders)
  {
    var pipePos = arrayTitleGenders[x].indexOf("|");
    var titleFromArray = arrayTitleGenders[x].substring(0,pipePos);
    var genderFromArray = arrayTitleGenders[x].substring(pipePos+1);

    if(titleFromArray == titleValue)
    {
      //note: only titles with gender M or F included in array, even though
      //table contains entries with '-' so no need to check if gender valid

      //go through options and stop at the relevant one
      for(var i=0; i<genderField.length; i++)
      {
        if(genderField.options[i].value == genderFromArray)
        {
          genderField.selectedIndex = i;
          return;
        }
      }
    }
  }
}

function setJavaEnabled()
{
// set Javascript Enabled hidden field value to true
  $('#hidJavaScriptEnabled').val('true');
}
