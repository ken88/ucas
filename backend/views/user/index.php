


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
            openPopUp('/help/index1','?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');
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
                <h1 class="EN">Register and log in</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="login" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="launchFieldHelp('apply1', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow'); return false;">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="launchFieldHelp('/help/index2', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow'); return false;">Help</a></li>
                    </ul><h3>Key</h3>
                    <ul id="key">
                        <li id="help" class="last">Help</li>
                    </ul><!--key ENDS here-->
                </div><!--leftNav ENDS here--><!--menu ends-->
                <!-- gatewayContent starts here -->
                <div id="gatewayContent">
                    <!--breadcrumb starts here-->
                    <div id="breadcrumb">
                        <a href="Login.jsp;jsessionid=3acb7bb26c76eb3635cf937682c5?id=3acb7bb26c76eb3635cf937682c5&amp;ran=1rankh7ap4p8x">Home</a> &gt;
                        Register and log in
                    </div><!--breadcrumb ends here-->
                    <hr />
                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">
                        <h2 class="inPage">Log in</h2>
                        <p>If you have already registered, please enter your username and password below to log in. <STRONG>You must enter your username in lower case and your password in the same case you used to register.</STRONG></p>
                        <div class="clearDiv">&nbsp;</div>
                        <p><input type="hidden" name="from" value="22" /></p><div class="thisFormElem">
                            <!--open form element -->
                            <div class="thisFormTxt">
                                <label for="usernameTextEntry">Username
                            </div>
                            <div class="thisFormField">
                                <input type="text" name="txtUsername" value="" size="20" maxlength="20"  style="width: 150px" tabindex="1" id="txtUsername"/>
                            </div>
                        </div><!--close form element -->
                        <script language="JavaScript">
                            document.Form1.txtUsername.focus();
                        </script>
                        <div class="thisFormElem">
                            <!--open form element -->
                            <div class="thisFormTxt">
                                <label for="passwordTextEntry">Password
                            </div>
                            <div class="thisFormField">
                                <input type="password" name="txtPassword" value="" size="20" maxlength="14"  style="width: 150px" tabindex="2" id="txtPassword"/>&nbsp;&nbsp;<a href="#" onclick="popupForgotten();">Forgotten login?</a>
                            </div>
                        </div><!--close form element -->
                        <div class="thisFormElem">
                            <!--open form element -->
                            <div class="thisFormTxt">
                                <label for="submitButton">&nbsp;
                            </div>
                            <div class="thisFormField">
                                <input type="submit" name="btnLogin" value="log in" tabindex="3" class="submitBtn"/>

                            </div>
                        </div><!--close form element -->

                        <div class="clearDiv">&nbsp;</div>
                        <hr/>
                        <div class="clearDiv">&nbsp;</div>
                        <h2 class="inPage">Register</h2>
                        <!--Form style starts here-->
                        <div class="thisForm">
                            <p>If you have not registered for 2021 entry, please click the 'register' button to use this service. <strong>You only need to register once.</strong> If you apply more than once in a cycle your application fee will not be refunded.</p>
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label >&nbsp;</label>
                                </div>
                                <div class="thisFormField">
                                    <a href="register">
                                    <input type="button" name="btnRegister" value="register" tabindex="3" class="submitBtn"/>
                                    </a>

                                </div>
                            </div><!--close form element -->

                            <div class="clearDiv">&nbsp;</div>
                            <!-- Hidden fields for use by servlet -->
                            <input type="hidden" name="functionname" value="loginorregister" />
                        </div><!--Form style ends here-->
                        <div class="clearDiv">&nbsp;</div>
                    </div><!--midBoxInternalWide ends here-->
                    <div class="clearDiv">&nbsp;</div>
                </div><!--gateway content ends here-->
            </div><!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->
            <p style="color:#81725e;">Version 16.0.6-master-1</p>
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