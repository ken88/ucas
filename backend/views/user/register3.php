<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <style type="text/css" media="screen">
        @import "/static/css/styles.css";
    </style>
    <link rel="stylesheet" type="text/css" media="screen" href="/static/css/form.css" />
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="/static/css/iefixes.css" />
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="/static/css/ie7.css" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" media="print" href="/static/css/print.css" />
    <link type='text/css' href='/static/css/popup.css' rel='stylesheet' media='screen' />

    <title>Register and log in</title>
    <script type="text/javascript" src="/static/js/jquery-1.4.2.min.js" charset="utf-8"></script>
    <script type='text/javascript' src='/static/js/jquery.simplemodal.js'></script>
    <script type='text/javascript' src='/static/js/jquery.removechars.js'></script>
    <script type="text/javascript" src="/static/js/general.js"></script>
    <script type="text/javascript" src="/static/js/security.js" charset="utf-8"></script>
    <noscript>
        <!--
            meta-tag "refresh" is provided for those browsers that
            do not support JavaScript.  Please note that the time
            delay is greater than zero.

            Notice that this is nested within a "noscript" block.
            Which means that browsers that support JavaScript will
            not "see" the refresh meta-tag.
        -->
        <meta http-equiv="refresh" content="0; URL=redirectiontarget.htm" />
    </noscript>
    <script language="JavaScript">
        function setJavaEnabled()
        {
            // set Javascript Enabled hidden field value to true
            $('#hidJavaScriptEnabled').val('true');
        }

        function popupForgotten()
        {
            /*
            var url = "SecurityServlet?functionname=reminder&SK_LOGIN_REMINDER_PAGE=1&start=Y";
            window.open(url,'lostPassword','toolbar=no,menubar=no,status=no,width=500,height=450,scrollbars=yes,resizable=yes');
            return false;
            */
            var url = 'https://loginreminder.support.ucas.com/LoginReminder/loginReminder.do?start=true&service=UA&cycle=2021';
            var lang = 1;
            url += (lang == 2)
                ? '&lang=cy'
                : '&lang=en';

            window.open(url,'loginReminder','menubar=no,toolbar=no,status=yes,scrollbars=yes,resizable=yes,width=800,height=400');
            return false;
        }
        function launchPageHelp()
        {
            //openPopUp('HelpServicesServlet;jsessionid=3acb7bb26c76eb3635cf937682c5', '?functionname=help&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');
            var lang = 1;
            openPopUp('PopUpServlet;jsessionid=3acb7bb26c76eb3635cf937682c5', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');
            return false;
        }
    </script>
</head>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">
<div id="outerWrapper" class="clearfix"><!-- Outer  Wrapper starts here-->
    <div id="wrapperInternal" class="floatLeft"><!-- Wrapper Internal starts here-->
        <!--header starts here-->
        <div id="header">
            <div id="tools">
                <ul>
                    <li><a href="https://www.ucas.com/corporate/about-us/contact-us" onclick="window.open(this.href);return false;">Contact us</a> |</li>
                    <li class="help"><a href="#" onclick="launchFieldHelp('PopUpServlet;jsessionid=3acb7bb26c76eb3635cf937682c5', '?functionname=help&amp;lang=1&amp;page=HELP.HEADER.PAGE'); return false;">Help</a> |</li>
                    <li><a href="javascript:onclick=window.print()">Print page</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div><!--tools ENDS here-->
            <div id="logo" class="floatLeft">
                <a href="http://www.ucas.com"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register: Postal address</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="SecurityServlet;jsessionid=3acb7bb26c76eb3635cf937682c5" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="launchFieldHelp('apply1', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow'); return false;">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="launchFieldHelp('/help/index5', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');return false;">Help</a></li>
                    </ul><h3>Key</h3>
                    <ul id="key">
                        <li style="display: none;" id="subCharacter">European characters allowed</li>
                        <li id="help" class="last">Help</li>
                    </ul><!--key ENDS here-->
                </div>
                <!--leftNav ENDS here-->
                <!--menu ends-->
                <!-- gatewayContent starts here -->




                <div id="gatewayContent">
                    <div id="breadcrumb">
                        <a href="RegisterWelcome.jsp?id=cbf560f6369164a30e079b45d585&amp;ran=196po3w36juma">Home</a> &gt;
                        Register
                    </div>
                    <!--breadcrumb ends here-->

                    <!-- progressBar div starts here -->

                    <!-- progressBar div starts here -->
                    <div id="progressBar">
                        <ul>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="on">&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li class="last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->

                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">
                        <p class="bold">Where is your postal address?<span class="Req">*</span></p>

                        <div class="errorTxt"></div>
                        <!-- Form starts here -->
                        <form name="Form1" action="SecurityServlet" method="post" autocomplete="off">

                            <!--Form style starts here-->
                            <div class="thisForm">

                                <!-- Main area of page provided here by a servlet clip -->
                                <p><input type="hidden" name="from" value="8"></p><p><input type="hidden" name="functionname" value="register"></p><!--Home location -->
<!--                                <div class="thisFormElem">-->
<!--                                   -->
<!--                                    <div class="thisFormTxt">-->
<!--                                        <label for="locationRadioHome">UK</label>-->
<!--                                    </div>-->
<!--                                    <div class="thisFormField">-->
<!--                                        <input type="radio" name="radioLocation" value="UK" class="floatLeft" id="locationRadioHome">-->
<!--                                        <a href="#" onclick="launchFieldHelp('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.UK'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--close form element -->
                                <!--Ucascard Already Held -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="locationRadioOverseas">Non UK/International</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="radio" name="radioLocation" value="Non UK/International" checked class="floatLeft" id="locationRadioOverseas">
                                        <a href="#" onclick="launchFieldHelp('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.OSEAS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Neither Already Held -->
<!--                                <div class="thisFormElem">-->
<!--                                   -->
<!--                                    <div class="thisFormTxt">-->
<!--                                        <label for="locationRadioBFPO">British Forces Post Office (BFPO)</label>-->
<!--                                    </div>-->
<!--                                    <div class="thisFormField">-->
<!--                                        <input type="radio" name="radioLocation" value="British Forces Post Office (BFPO)" class="floatLeft" id="locationRadioBFPO">-->
<!--                                        <a href="#" onclick="launchFieldHelp('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.BFPO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--close form element -->
                                <br>

                                <!-- Previous and Next  Buttons starts here -->
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <a href="register2">
                                            <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                        </a>

                                        &nbsp;&nbsp;<input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

                                    </div>
                                </div>
                                <!-- Previous and Next  Buttons ends here-->

                            </div>
                            <!--Form style ends here-->

                        </form>
                        <!--Form ends here-->

                        <div class="clearDiv">&nbsp;</div>
                    </div>
                    <!--midBoxInternalWide ends here-->

                    <div class="clearDiv">&nbsp;</div>
                </div>



                <!--gateway content ends here-->
            </div><!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->

        </form><!-- Form ends here -->
        <!-- 'footer' div starts here  -->
        <div id="footer">
            <ul class="floatLeft">
                <li><a href="https://www.ucas.com/corporate/about-us" onclick="window.open(this.href);return false;">About us</a> | </li> <li><a href="https://www.ucas.com/corporate/about-us/terms-and-conditions/terms-and-conditions-use-apply" onclick="window.open(this.href);return false;">Terms &amp; conditions</a> | </li><li><a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" onclick="window.open(this.href);return false;">Privacy policy</a> </li>
            </ul>
            <p id="copy" class="floatRight">&copy; UCAS 2021</p>
        </div><!--footer ENDS here-->
        <!--footer ends here-->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->
<input type="hidden" name="hidCharWarningMsg" id = "hidCharWarningMsgPassword" value="You cannot have a space in your password"/>

<div id="popupContactOK">
    <h1>Password Validation</h1>
    <div id="contactArea">
        <div id="titleMsg">You cannot have a space in your password</div>
        <br clear="all" />
        <hr />
        <div id="btnsPopUpCentreOKOnly">
            <input type="button" name="popupOKOnly" id="popupOKOnly" value="OK" class="submitBtn" />
        </div>
        <br />
        <br clear="all" />
    </div>
</div>
<div id="backgroundPopup"></div>
</body>
</html>
<script type="text/javascript">
    function check() {

        var list= $('input:radio[name="radioLocation"]:checked').val();
        if(list == null){
            err = '<p>Please choose one of the options below.</p>';
            $('.errorTxt').html(err);
        }

        else {
            window.location="register4"
        }

        scrollTo(0,0);

    }
</script>