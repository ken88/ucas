<?php include_once "top.php";?>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">
<div id="outerWrapper" class="clearfix">

    <!--wrapper start-->
    <div id="wrapperInternal" class="floatLeft">

        <!--header start -->
        <div id="header">
            <div id="tools">
                <ul>
                    <li><a href="https://www.ucas.com/corporate/about-us/contact-us" onclick="window.open(this.href);return false;">Contact us</a> |</li>
                    <li class="help"><a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.HEADER.PAGE'); return false;">Help</a> |</li>
                    <li><a href="javascript:onclick=window.print()">Print page</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div><!--tools ENDS here-->
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Personal details</h1>
                <div id="logOut"><a href="ServicesServlet?functionname=logout&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=1xyxbh65mtj08">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <div id="strapLineApplyPrint">
                <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />
            </div><!--StrapLinePrint ENDS here-->
        </div>
        <!--header end -->

        <div class="clearDiv">&nbsp;</div>
        <div id="mainContent">
            <!--menu starts 左面菜单栏开始-->
            <?php include_once "menu.php"; ?>
            <!--menu ends 左面菜单栏结束-->


            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="/useradmin/welcome">
                        Welcome
                    </a>&gt;
                    Personal details
                </div>
                <!--breadcrumb ENDS here-->
                <hr>
                <input type="hidden" id="language" value="1">
                <div id="midBoxInternalWide">
                    <!--Form starts here-->
                    <div class="thisForm">
                        <!--clip starts-->

                        <form name="Form1" method="post" action="PersonalDetailsServlet?id=787d5c91c8b2e2a283531db7b805&amp;ran=135rcyz32p1n2">
                            <!--display &apos;Employment&apos; clip -->
                            <script language="JavaScript">
                                var tg = new Array();
                                tg[0] = "Miss|F";
                                tg[1] = "Mr|M";
                                tg[2] = "Mrs|F";
                                tg[3] = "Ms|F";
                                tg[4] = "Br|M";
                                tg[5] = "Dame|F";
                                tg[6] = "Fr|M";
                                tg[7] = "Frau|F";
                                tg[8] = "Herr|M";
                                tg[9] = "Lady|F";
                                tg[10] = "Lord|M";
                                tg[11] = "Mdm|F";
                                tg[12] = "Sir|M";
                                tg[13] = "Sr|M";
                                tg[14] = "Visc|M";
                                tg[15] = "Brns|F";
                                tg[16] = "Bron|M";
                                tg[17] = "Earl|M";
                                tg[18] = "Marq|M";
                                tg[19] = "Duch|F";
                                tg[20] = "Duke|M";
                                tg[21] = "PSir|M";
                            </script>
                            <p class="bold">Some of these details have been copied automatically from the information given when you first registered.<br><br>Compulsory fields are marked with an asterisk (<span class="Req">*</span>).<br><br>Before leaving this section please click 'save' to avoid losing any information. When you have finished all the entries please click on 'section completed' and 'save'.</p>

                            <br>
                            <div style="display: none;" id="dialog-modal-extended-chars" title="Information">
                                <p>You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.<br><br>Please check the substituted characters version for <b>each section</b> in which you have entered European characters. To do this, click 'View all details' in the left-hand navigation and tick the boxes <b>in each section</b> to show your agreement. Click 'edit' if you need to make any changes. Fields that allow European characters are marked with an '<span class="ReqPlus">Æ</span>'.</p>
                            </div>
                            <div style="display: none;" id="unicodeMsgWarning">
                                <span class="warningTxt">Warning:  You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them. <a href="https://www.ucas.com/sites/default/files/extended-character-sets-substitutions_0.pdf" target="_blank">View the list of European characters we allow.</a><br><br>Please check the substituted characters version <b>for each</b> section in which you have entered European characters. To do this, click 'View all details' in the left-hand navigation and tick the boxes <b>in each section</b> to show your agreement. Click 'edit' if you need to make any changes. Fields that allow European characters are marked with an '<span class="ReqPlus">Æ</span>'.</span><br><br>
                            </div>
                            <script>
                                function setCookie(c_name,value,exdays)
                                {
                                    var exdate=new Date();
                                    exdate.setDate(exdate.getDate() + exdays);
                                    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
                                    document.cookie=c_name + "=" + c_value;
                                }
                                var visible = true;
                                function showHideVideo(){
                                    $("#ucastv").toggle('slow', 'swing', function() { return false; });
                                    if (visible)
                                    {
                                        $("#showHideVideo").html("Show video");
                                        setCookie("UCAS_Personal_Details",false,365);
                                    }
                                    else
                                    {
                                        $("#showHideVideo").html("Hide video");
                                        setCookie("UCAS_Personal_Details",true,365);
                                    };
                                    visible = !visible;
                                    return false;
                                };
                            </script>
                            <div class="video">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661050660362105212" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>
                            <div class="clearDiv">&nbsp;</div>
                            <h2 class="inPage">Personal</h2>
                            <!--Title-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="titleCombo">Title<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth">
                                        <select name="cboTitle" size="1"  class="floatLeft" id="titleCombo">
                                            <option value="">Please select...</option>
                                            <option value="Miss" selected="selected">Miss</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Br">Br</option>
                                            <option value="Capt">Capt</option>
                                            <option value="Dame">Dame</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Fr">Fr</option>
                                            <option value="Frau">Frau</option>
                                            <option value="Herr">Herr</option>
                                            <option value="Hon">Hon</option>
                                            <option value="HRH">HRH</option>
                                            <option value="Lady">Lady</option>
                                            <option value="Lord">Lord</option>
                                            <option value="Lt">Lt</option>
                                            <option value="Maj">Maj</option>
                                            <option value="Mdm">Mdm</option>
                                            <option value="Prin">Prin</option>
                                            <option value="Prof">Prof</option>
                                            <option value="Pte">Pte</option>
                                            <option value="Rev">Rev</option>
                                            <option value="Revd">Revd</option>
                                            <option value="Sir">Sir</option>
                                            <option value="Sgt">Sgt</option>
                                            <option value="Sr">Sr</option>
                                            <option value="Visc">Visc</option>
                                            <option value="Engr">Engr</option>
                                            <option value="Brns">Brns</option>
                                            <option value="Bron">Bron</option>
                                            <option value="Earl">Earl</option>
                                            <option value="Marq">Marq</option>
                                            <option value="Duch">Duch</option>
                                            <option value="Duke">Duke</option>
                                            <option value="PSir">PSir</option>
                                            <option value="RevD">RevD</option>
                                            <option value="RHon">RHon</option>
                                            <option value="Ven">Ven</option>
                                            <option value="VRev">VRev</option>
                                            <option value="RRev">RRev</option>
                                            <option value="Brgd">Brgd</option>
                                            <option value="Col">Col</option>
                                            <option value="Gen">Gen</option>
                                            <option value="WgCd">WgCd</option>
                                            <option value="GpCp">GpCp</option>
                                            <option value="ACdr">ACdr</option>
                                            <option value="AVM">AVM</option>
                                            <option value="AM">AM</option>
                                            <option value="Adm">Adm</option>
                                            <option value="RAdm">RAdm</option>
                                            <option value="VAdm">VAdm</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.TITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--gender-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="genderRadio">Gender<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboGender" size="1" class="floatLeft" id="genderCombo">
                                            <option value="-">Please select...</option>
                                            <option value="M">Male</option>
                                            <option value="F" selected="selected">Female</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.GENDER'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--foreNameField-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="foreNameTextEntry">First/given name(s)<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtFName" value="ken" size="39" maxlength="50" class="floatLeft" id="foreNameTextEntry">
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.FORENAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--surNameField-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="surNameTextEntry">Surname/family name<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtSName" value="yu" size="39" maxlength="30" class="floatLeft" id="surNameTextEntry">
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.SURNAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--preferred foreNameField-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="prefForeNameTextEntry">Preferred first name</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtPrefFName" value="" size="39" maxlength="35" class="floatLeft" id="prefForeNameTextEntry">
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.PREFERREDFORENAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--previousSurnameField-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="previousSurnameTextEntry">Previous surname at 16th birthday</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtPrevSurn" value="" size="39" maxlength="30" class="floatLeft" id="previousSurnameTextEntry">
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.PREVIOUSSURNAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <div class="clearDiv">&nbsp;</div>
                            <!--Address summary -->
                            <!--Address Line 1 -->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="postalAddress">Postal address<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormTxt">
                                    aaa
                                </div>
                                <!--Address Line 2 -->
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormTxt">
                                    bbb
                                </div>
                                <!--Address Line 3 -->
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormTxt">
                                    ccc
                                </div>
                                <!--Address Line 4 -->
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormTxt">
                                    ddd
                                </div>
                                <!--Postal Country -->
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormTxt">
                                    Algeria
                                </div>
                            </div><!--close form element -->
                            <div class="clearDiv">&nbsp;</div>
                            <input type="submit" name="btnSave" value="dummy save button" style="position : absolute; top : -1000px; left : -1000px;">
                            <!--Change address button -->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="submit" name="btnChangeAdd" value="change my address" class="seeListBtn floatLeft">

                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.POSTALADDRESS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <div class="clearDiv">&nbsp;</div>
                            <!--LIVE UK PERMANENTLY-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="liveUKRadio">Is your permanent home in the UK?<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="radio" name="rdPermUK" value="Y" onclick="checkAPRLabel()" class="floatLeft" id="liveUKRadio"><span class="floatLeft">Yes&nbsp;&nbsp;</span><input type="radio" name="rdPermUK" value="N" onclick="checkAPRLabel()" class="floatLeft" id="liveUKRadio"><span class="floatLeft">No</span>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.LIVEUK'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <div class="clearDiv">&nbsp;</div>
                            <!--Home Address summary -->
                            <!--Home Address Line 1 -->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="homeAddress">Home address</label>
                                </div>
                                <div class="thisFormField">
                                    (if different from postal address)<br>

                                </div>
                                <!---close form element ---->
                                <div class="clearDiv">&nbsp;</div>
                                <!--Change Home address button -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="submit" name="btnAddOrChangeAdd" value="add/edit home address" class="seeListBtn floatLeft">

                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.HOMEADDRESS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <!--homeTelNoField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="homeTelNoTextEntry">Home telephone number</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtHomeTelNo" value="13123456789" size="39" maxlength="24" class="floatLeft" id="homeTelNoTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.HOMETELNO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--mobileNoField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="mobileNoTextEntry">Mobile number </label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtMobileTelNo" value="13123456789" size="39" maxlength="24" class="floatLeft" id="mobileNoTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.MOBILETELNO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        (Please do not include a dial-out code in your phone number (for example, +, or 00). Please enter the country calling code (e.g. 44 for UK phone numbers). For UK numbers, please remove the leading 0 before adding the country  code. We might use your mobile number to send you SMS reminders.)
                                    </div>
                                </div><!--close form element -->
                                <!--emailField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailTextEntry">Email address<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtEmail" value="176745155@qq.com" size="39" maxlength="60" class="floatLeft" id="emailTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.EMAIL'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--emailConfirmField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailConfirmTextEntry">Confirm email address<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtEmailConfirm" value="176745155@qq.com" size="39" maxlength="60" class="floatLeft" id="emailConfirmTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.EMAILCONFIRM'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--date of birth-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="dobCombo">Date of birth<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="cboDobDay" size="1" class="floatLeft" id="dobCombo">
                                                <option value="-">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <select name="cboDobMonth" size="1" class="floatLeft" id="dobCombo">
                                                <option value="-">Month</option>
                                                <option value="1" selected="selected">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select name="cboDobyear" size="1" class="floatLeft" id="dobCombo">
                                                <option value="-">Year</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996" selected="selected">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.DATEOFBIRTH'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--countryOfBirthField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="countryOfBirthTextEntry">Country of birth<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtCntryOfBirth" value="" size="32" maxlength="250" class="floatLeft" id="countryOfBirthTextEntry">
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnCountryList1" value="see list" onclick="seelistOpen('/help/index6', '?functionname=coblist', 'document.Form1.txtCntryOfBirth'); return false;" class="seeListBtn">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.COUNTRYOFBIRTH'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help">
                                        </a>
                                    </div>
                                </div><!--close form element -->
                                <!--Date of Entry to UK-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="entryToUKCombo">Date of first entry to UK</label>
                                    </div>
                                    <div class="thisFormField">
                                        (if not born in the UK<span class="Req">*</span>)
                                        <div id="fullWidth"><select name="cboEntryUkDay" size="1" class="floatLeft" id="entryToUKCombo">
                                                <option value="-">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <select name="cboEntryUkMonth" size="1" class="floatLeft" id="entryToUKCombo">
                                                <option value="-">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select name="cboEntryUKyear" size="1" class="floatLeft" id="entryToUKCombo">
                                                <option value="-">Year</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.DATEENTRYUK'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <!--nationalityField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="nationalityTextEntry">Nationality<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtNatioality" value="" size="32" maxlength="250" class="floatLeft" id="nationalityTextEntry">
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnCountryList2" value="see list" onclick="helpOpen('PopUpServlet', '?functionname=natlist', 'document.Form1.txtNatioality'); return false;" class="seeListBtn">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.NATIONALITY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--dualNationalityField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="dualNationalityTextEntry">Dual nationality</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtDualNatioality" value="" size="32" maxlength="250" class="floatLeft" id="dualNationalityTextEntry">
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnCountryList3" value="see list" onclick="helpOpen('PopUpServlet', '?functionname=natlist', 'document.Form1.txtDualNatioality'); return false;" class="seeListBtn">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.DUALNATIONALITY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--areaOfResidenceField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="areaOfResidenceTextEntry">Area of permanent residence<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtResidenceArea" value="" size="32" maxlength="250" class="floatLeft" id="areaOfResidenceTextEntry">
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnAreaOfResidenceList" value="see list" onclick="openAPR(); return false;" class="seeListBtn">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.AREAPERMANENTRESIDENCE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--residentialCategoryField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="residentialCategoryTextEntry">Residential category<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtResidentialCategory" value="" size="32" maxlength="50" class="floatLeft" id="residentialCategoryTextEntry">
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnResCategoryList" value="see list" onclick="helpOpen('PopUpServlet', '?functionname=rescatlist', 'document.Form1.txtResidentialCategory'); return false;" class="seeListBtn">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.RESIDENTIALCATEGORY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Reference numbers</h2>
                                <p>If you do not have any of the following reference numbers, please leave the boxes blank.</p>
                                <!--uniqueLearnerNoField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailTextEntry">Unique Learner Number (ULN)</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtUniqueLearnerNo" value="" size="10" maxlength="10" class="floatLeft" id="uniqueLearnerNoTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.ULN'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--toeflNoField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailTextEntry">Test of English as a Foreign Language (TOEFL) Number</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtToeflNo" value="" size="25" maxlength="16" class="floatLeft" id="toeflNoTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.TOEFL'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--ieltsNoField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailTextEntry">International English Language Testing System (IELTS) TRF Number</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtIeltsNo" value="" size="25" maxlength="20" class="floatLeft" id="ieltsNoTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.IELTS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Passport details</h2>
                                <p>(This section applies if you have selected a nationality for a country outside the UK)</p>
                                <div class="clearDiv">&nbsp;</div>
                                <p>Where relevant, UCAS collects applicants' passport information on behalf of universities and colleges, who need it for purposes of visa application and checks with the UK Visas and Immigration (UKVI). For further details about UK Visas and Immigration please visit the <a href="https://www.gov.uk/visas-immigration" target="_blank">UKVI website</a>.</p>
                                <div class="clearDiv">&nbsp;</div>
                                <!--student visa Field-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="cboStudentVisa">Do you require a student visa?</label>
                                    </div>
                                    <div class="thisFormField fullWidth"><select name="cboStudentVisa" size="1" class="floatLeft" onclick="checkVisaRequired()" id="cboStudentVisa" disabled="">
                                            <option value="-">Please select ...</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>

                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.STUDENTVISA'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--student visa Question 1-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="cboStudentVisaQ1">Have you previously studied in the UK on a student visa?<span id="studiedRequired" class="Req"></span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div class="fullWidth"><select name="cboStudiedUK" size="1" disabled="" class="floatLeft" onclick="checkStudiedUK()" id="cboStudiedUK">
                                                <option value="-">Please select ...</option>
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>
                                            </select>

                                            <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.VISAQ1'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        </div>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <p>Please check that the names you have provided at the top of this section match how they are stated on your passport.</p>
                                <p>Please enter the following details about your passport. If you have more than one passport, give the details of the passport you intend to use to enter the UK for the purpose of studying your course.</p>
                                <p>If you need a visa but don't yet have a valid passport, leave the sections below blank - universities and colleges will ask you to provide the details once you have submitted your application <strong>and</strong> have received an offer of a place.</p>
                                <!--passportNoField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="txtPassportNo">Passport number</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtPassportNo" value="" size="34" maxlength="35" class="floatLeft" id="txtPassportNo" disabled="">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.PASSPORTNO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Passport issue date-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="cboIssueDay">Issue date</label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="cboIssueDay" size="1" class="floatLeft" id="cboIssueDay" disabled="">
                                                <option value="-">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <select name="cboIssueMonth" size="1" class="floatLeft" id="cboIssueMonth" disabled="">
                                                <option value="-">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select name="cboIssueYear" size="1" class="floatLeft" id="cboIssueYear" disabled="">
                                                <option value="-">Year</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.ISSUEDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Passport Expiry date-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="cboExpiryDay">Expiry date</label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="cboExpireDay" size="1" class="floatLeft" id="cboExpireDay" disabled="">
                                                <option value="-">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <select name="cboExpireMonth" size="1" class="floatLeft" id="cboExpireMonth" disabled="">
                                                <option value="-">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select name="cboExpireYear" size="1" class="floatLeft" id="cboExpireYear" disabled="">
                                                <option value="-">Year</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                                <option value="2034">2034</option>
                                                <option value="2035">2035</option>
                                                <option value="2036">2036</option>
                                                <option value="2037">2037</option>
                                                <option value="2038">2038</option>
                                                <option value="2039">2039</option>
                                                <option value="2040">2040</option>
                                                <option value="2041">2041</option>
                                                <option value="2042">2042</option>
                                                <option value="2043">2043</option>
                                                <option value="2044">2044</option>
                                                <option value="2045">2045</option>
                                                <option value="2046">2046</option>
                                                <option value="2047">2047</option>
                                                <option value="2048">2048</option>
                                                <option value="2049">2049</option>
                                                <option value="2050">2050</option>
                                                <option value="2051">2051</option>
                                                <option value="2052">2052</option>
                                                <option value="2053">2053</option>
                                                <option value="2054">2054</option>
                                                <option value="2055">2055</option>
                                                <option value="2056">2056</option>
                                                <option value="2057">2057</option>
                                                <option value="2058">2058</option>
                                                <option value="2059">2059</option>
                                                <option value="2060">2060</option>
                                                <option value="2061">2061</option>
                                                <option value="2062">2062</option>
                                                <option value="2063">2063</option>
                                                <option value="2064">2064</option>
                                                <option value="2065">2065</option>
                                                <option value="2066">2066</option>
                                                <option value="2067">2067</option>
                                                <option value="2068">2068</option>
                                                <option value="2069">2069</option>
                                                <option value="2070">2070</option>
                                                <option value="2071">2071</option>
                                                <option value="2072">2072</option>
                                                <option value="2073">2073</option>
                                                <option value="2074">2074</option>
                                                <option value="2075">2075</option>
                                                <option value="2076">2076</option>
                                                <option value="2077">2077</option>
                                                <option value="2078">2078</option>
                                                <option value="2079">2079</option>
                                                <option value="2080">2080</option>
                                                <option value="2081">2081</option>
                                                <option value="2082">2082</option>
                                                <option value="2083">2083</option>
                                                <option value="2084">2084</option>
                                                <option value="2085">2085</option>
                                                <option value="2086">2086</option>
                                                <option value="2087">2087</option>
                                                <option value="2088">2088</option>
                                                <option value="2089">2089</option>
                                                <option value="2090">2090</option>
                                                <option value="2091">2091</option>
                                                <option value="2092">2092</option>
                                                <option value="2093">2093</option>
                                                <option value="2094">2094</option>
                                                <option value="2095">2095</option>
                                                <option value="2096">2096</option>
                                                <option value="2097">2097</option>
                                                <option value="2098">2098</option>
                                                <option value="2099">2099</option>
                                                <option value="2100">2100</option>
                                                <option value="2101">2101</option>
                                                <option value="2102">2102</option>
                                                <option value="2103">2103</option>
                                                <option value="2104">2104</option>
                                                <option value="2105">2105</option>
                                                <option value="2106">2106</option>
                                                <option value="2107">2107</option>
                                                <option value="2108">2108</option>
                                                <option value="2109">2109</option>
                                                <option value="2110">2110</option>
                                                <option value="2111">2111</option>
                                                <option value="2112">2112</option>
                                                <option value="2113">2113</option>
                                                <option value="2114">2114</option>
                                                <option value="2115">2115</option>
                                                <option value="2116">2116</option>
                                                <option value="2117">2117</option>
                                                <option value="2118">2118</option>
                                                <option value="2119">2119</option>
                                                <option value="2120">2120</option>
                                                <option value="2121">2121</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.EXPIRYDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--placeOfIssueField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="txtPlaceOfIssue">Place of issue</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtPlaceOfIssue" value="" size="29" maxlength="30" class="floatLeft" id="txtPlaceOfIssue" disabled="">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.POI'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Student support</h2>
                                <!--feeCodeField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt2">
                                        <label for="feeCodeCombo">Fee code<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField2">
                                        <div id="fullWidth"><select name="cboFeeCode" size="1" onchange="checkStudentSupport();" class="floatLeft" id="feeCodeCombo">
                                                <option value="-">Please select...</option>
                                                <option value="1">01   Private finance</option>
                                                <option value="2">02   UK, Chl, IoM or EU student finance services</option>
                                                <option value="4">04   Research councils</option>
                                                <option value="5">05   DH/Regional Health</option>
                                                <option value="6">06   UK Govt international award</option>
                                                <option value="7">07   Training agency</option>
                                                <option value="8">08   Other UK Govt award</option>
                                                <option value="9">09   International agency</option>
                                                <option value="10">10   UK Industry/commerce</option>
                                                <option value="90">90   Other source</option>
                                                <option value="99">99   Not known</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.FEECODE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--feeNameField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="StudentSupportArrangementsTextEntry">Student support arrangements</label>
                                    </div>
                                    <div class="thisFormField">
                                        (This field is only available if you select fee code '02   UK, Chl, IoM or EU student finance services')
                                        <br>    <input type="text" name="txtSSA_FeeName" value="" size="32" maxlength="30" disabled="" readonly="" class="floatLeft" id="StudentSupportArrangementsTextEntry" style="background-color: silver;">
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnLeaList" value="see list" onclick="helpOpen('PopUpServlet', '?functionname=lealist', 'document.Form1.txtSSA_FeeName'); return false;" class="seeListBtn" disabled="">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.STUDENTSUPPORTARRANGEMENTS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <p>Please answer the following questions about whether you and your family may have lived within the EU or EEA.The universities and colleges that you are applying to need this information to make a decision about the fees you may be charged and any scholarships, bursaries and financial support that may be available to you.            </p>
                                <!--LIVE WORKED IN EU-->
                                <!--Question1-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="euAnswersField">Have you ever lived or worked in the EU (excluding the UK), European Economic Area (EEA) or Switzerland?               <span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="euAnswers" size="1" class="floatLeft" id="euAnswers">
                                                <option value="-">Please select ...</option>
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>
                                                <option value="D">Don't know</option>
                                                <option value="P">Prefer not to say</option>
                                            </select>

                                            <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.LIVEWORKEU'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        </div>
                                    </div></div><!--close form element -->
                                <!--parentSpouseEuNat-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="euAnswersField">Do you have a parent, step parent, spouse or civil partner who is an EU (excluding the UK), EEA or Swiss national?              <span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="parentSpouse" size="1" class="floatLeft" id="parentSpouse">
                                                <option value="-">Please select ...</option>
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>
                                                <option value="D">Don't know</option>
                                                <option value="P">Prefer not to say</option>
                                            </select>

                                            <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.PARENTSPOUSEEUNAT'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        </div>
                                    </div></div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Keep up-to date with your application</h2>
                                <p>We'll keep you updated on the progress of your application - from deadline reminders to Track updates - by email and post.<br>You told us when you registered what level of support you'd like to receive. Don't forget, you can change your mind at any time - simply hit the 'Update my preferences' button below, or go to the 'Your details' section of Track once you've submit your application.
                                </p><p><input type="button" name="btnUpdate" value="Update your preferences" onclick="displayMarketingPreference()" class="submitBtn">
                                </p><div class="clearDiv">&nbsp;</div>
                                <h2 class="inPage">We won't pass on your details...</h2>
                                <p>We'll keep your data safe, and won't pass it on to third parties. For more information, take a look at our <a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" target="_blank">privacy policy</a>.</p>
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Nominated access</h2>
                                <p>You can choose to nominate someone, eg parent/guardian/adviser, who can discuss your application with us and the universities if you are unavailable. </p>
                                <!--nominatedPersonField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="nominatedPersonTextEntry">Full name of nominee</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtNominPerson" value="" size="39" maxlength="50" class="floatLeft" id="nominatedPersonTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.NOMINATEDPERSON'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--nominatedPersonRelationField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="nominatedPersonRelationTextEntry">Relationship to you</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtNominPersonRelation" value="" size="39" maxlength="50" class="floatLeft" id="nominatedPersonRelationTextEntry">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.NOMINATEDPERSON'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Disability/special needs</h2>
                                <p>Universities and colleges welcome students with disabilities, and will try to meet your needs wherever possible. The information you give here will help them do this.</p>
                                <!--disNeedsField-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="disNeedsCombo">Category<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <textarea name="txtDisabilitySplNeeds" rows="6" cols="10" readonly="true" class="floatLeft" id="disNeedsTextEntry"></textarea>
                                        <span class="floatLeft">&nbsp;<input type="button" name="btnDisList1" value="see list" onclick="helpOpen('PopUpServlet', '?functionname=dislist', 'document.Form1.txtDisabilitySplNeeds'); return false;" class="seeListBtn">
</span>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.DISABILITY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--splNeedsDetailsHelptext-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        Please give details of any special needs
                                    </div>
                                </div><!--close form element -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <textarea name="txtDisabilitySplNeedsText" rows="5" cols="15" class="floatLeft" id="splNeedsDetailsTextEntry"></textarea>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.YOURDETAILS.FIELD.DISABILITYDETAILS'); return false;"><img id="splNeedsDetailshelpImage" src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div id="charleft" class="charleft"></div>
                                </div><!--close form element -->
                                <div style="display: none;" id="unicodeMsgWarningFooter">
                                    <div class="clearDiv">&nbsp;</div>
                                    <br>
                                    <span class="warningTxt">You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.<br><br>Before leaving this section click 'save' to avoid losing any information. Please click 'View all details' in the left-hand navigation box, check the substituted characters version and tick the box to show your agreement. Then mark the section as complete and click 'save'. </span>
                                </div>
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="checkbox" name="chkComplete" id="chkComplete">&nbsp;section completed
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <br>


                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">
                                    <!--display &apos;save & cancel&apos; button clip -->
                                    <input type="submit" name="btnSave" value="save" onclick="setJavaEnabled()" class="submitBtn">

                                </div>
                                <!-- ME110::Marketing preference Modal starts here -->
                                <div id="marketPref">



                                    <div class="message">
                                        <div class="thisForm">
                                            <h2 class="inPage">Everything you need to know</h2>
                                            <div class="clearDiv">&nbsp;</div>
                                            <br>
                                            <div class="thisFormElem">
                                                <div class="thisFormElem">
                                                    <div class="thisFormTxt">
                                                        <input type="checkbox" name="chkAllComms" id="chkAllCommsFlag" class="chkAllCommsFlag" style="display: none;"><span class="chkAllCommsFlag tzCheckBox " name="chkAllComms" id="chkAllComms_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span>
                                                    </div>
                                                    <div>
                                                        <p class="bold">&nbsp;&nbsp;Get updates on everything - stay in the know</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-left: 14%;">
                                                <div class="thisFormElem">
                                                    <div class="thisFormElem">
                                                        <div class="thisFormTxt">
                                                            <input type="checkbox" id="chkEducationalOption" name="chkEducationalOption" class="checkSingleComms" style="display: none;"><span class="checkSingleComms tzCheckBox " name="chkEducationalOption" id="chkEducationalOption_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span>
                                                        </div>
                                                        <div class="thisFormField">
                                                            <label class="bold">Your options</label>
                                                            <p>Hear from unis, colleges, and employers about all your options — including courses relevant to you, open days, apprenticeship opportunities, and studying abroad.</p>
                                                        </div>
                                                    </div>
                                                    <div class="thisFormElem">
                                                        <div class="thisFormTxt">
                                                            <input type="checkbox" id="chkCommercialOption" name="chkCommercialOption" class="checkSingleComms" checked="" style="display: none;"><span class="checkSingleComms tzCheckBox checked" name="chkCommercialOption" id="chkCommercialOption_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span>
                                                        </div>
                                                        <div class="thisFormField">
                                                            <label class="bold">Student essentials</label>
                                                            <p>Make the most of student life with info on tech, retailers, publications, banks, travel, and transport, as well as recommendations for student accommodation.</p>
                                                        </div>
                                                    </div>
                                                    <div class="thisFormElem">
                                                        <div class="thisFormTxt">
                                                            <input type="checkbox" name="chkUnplacedCommsFlag" id="chkUnplacedCommsFlag" class="checkSingleComms" style="display: none;"><span class="checkSingleComms tzCheckBox " name="chkUnplacedCommsFlag" id="chkUnplacedCommsFlag_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span>
                                                        </div>
                                                        <div class="thisFormField">
                                                            <label class="bold">Relevant courses</label>
                                                            <p>If you find yourself without a place, we'll share course info from unis and colleges that have vacancies on relevant courses.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thisFormElem" id="contactOption" disabled="disabled">
                                                <div class="clearDiv">&nbsp;</div>
                                                <hr>
                                                <h2 class="inPage">How we contact you</h2>
                                                <p id="optionWarningTxt" class="warningTxt">Please select a channel</p>
                                                <div class="thisFormElem">
                                                    <div class="checkboxes">
                                                        <label for="chkAll">
                                                            <input type="checkbox" id="chkAllOption" name="chkAll" class="chkAllOption" style="display: none;"><span class="chkAllOption tzCheckBox " name="chkAll" id="chkAll_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span><span>&nbsp;&nbsp;All channels&nbsp;</span>
                                                        </label>
                                                    </div>
                                                    <div style="padding-left: 14%;">
                                                        <div class="thisFormElem">
                                                            <label for="chkEmailOption">
                                                                <input type="checkbox" name="chkEmailOption" class="checkSingleOption" checked="" style="display: none;"><span class="checkSingleOption tzCheckBox checked" name="chkEmailOption" id="chkEmailOption_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span><span>&nbsp;&nbsp;Email&nbsp;&nbsp;
						</span>
                                                            </label>
                                                            <label for="chkTxtOption">
                                                                <input type="checkbox" name="chkTxtOption" class="checkSingleOption" style="display: none;"><span class="checkSingleOption tzCheckBox " name="chkTxtOption" id="chkTxtOption_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span><span>&nbsp;&nbsp;Text/SMS&nbsp;&nbsp;
						</span>
                                                            </label>
                                                            <label for="chkMailingsOption">
                                                                <input type="checkbox" name="chkMailingsOption" class="checkSingleOption" style="display: none;"><span class="checkSingleOption tzCheckBox " name="chkMailingsOption" id="chkMailingsOption_Id"><span class="tzCBContent"></span><span class="tzCBPart"></span></span><span>&nbsp;&nbsp;Post</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thisFormElem">
                                        <div class="buttons">
                                            <div id="change-marketing">save</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ME110::Marketing preference Modal Ends here -->
                                <!--spacer -->
                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">&nbsp;</div>
                                <!--end spacer-->

                                <!--clip ends-->
                            </div></form>
                        <!--close thisForm div-->
                        <!--Form ends here-->
                    </div><!--midBoxInternalWide ends here-->
                </div><!--gatewayContent ends here-->
            </div>

        </div>

        <div class="clearDiv">&nbsp;</div>
        <!--display 'Footer' clip -->
        <div id="footer">
            <ul class="floatLeft">
                <li><a href="https://www.ucas.com/corporate/about-us" onclick="window.open(this.href);return false;">About us</a> | </li> <li><a href="https://www.ucas.com/corporate/about-us/terms-and-conditions/terms-and-conditions-use-apply" onclick="window.open(this.href);return false;">Terms &amp; conditions</a> | </li><li><a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" onclick="window.open(this.href);return false;">Privacy policy</a> </li>
            </ul>
            <p id="copy" class="floatRight">&copy; UCAS 2021</p>
        </div><!--footer ENDS here-->

        <div class="clearDiv">&nbsp;</div>
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->

</body>
</html>
<script type="text/javascript">
    function check() {
        var list= $('#cboGroups').val();
        if(list == ''){
            err = '<p>Please select your tutor group/application group.</p>';
            $('.errorTxt').html(err);
        }
        else {
            window.location="register12"
        }
    }
</script>