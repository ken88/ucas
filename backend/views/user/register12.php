
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
                <h1 class="EN">Initial UCAS questions: Which centre?</h1>
                <div id="logOut"><a href="ServicesServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e?functionname=logout&amp;id=3641f9e2a10f3ad16b2596db7d3e&amp;ran=1psn0pfuvsfum">Log out</a></div>
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
                        Welcome
                    </div><!--breadcrumb ENDS here-->
                    <hr>

                    <div id="midBoxInternalWide">

                        <!--Form starts here-->

                        <div class="thisForm">

                            <!--clip starts-->
                            <!--<form name="Form1">-->

                            <!--display 'Welcome' clip -->
                            <p>Welcome qaz,</p>
                            <p>Your Personal ID is: <font size="3"><strong>158-766-3000</strong></font>.<br><br><strong>Please make a note of this number and keep it handy. You will need to quote this number if you call our Customer Contact Centre.</strong></p>
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
                                        setCookie("UCAS_Welcome",false,365);
                                    }
                                    else
                                    {
                                        $("#showHideVideo").html("Hide video");
                                        setCookie("UCAS_Welcome",true,365);
                                    };
                                    visible = !visible;
                                    return false;
                                };
                            </script>
                            <div class="video" style="text-align: center; margin-top: 1.4em;">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661049804837201669" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>
                            <div class="errorTxt">
                                <p><strong>Verify your email address</strong>
                                    <br>Your email address needs to be verified as valid before you send your application to us.
                                    <br>
                                    <a href="/useradmin/send">
                                        Please click here to verify your email address
                                    </a>
                                </p>
                            </div>
                            </p>

                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

                            <!--</form>-->
                            <!--clip ends-->
                        </div><!--close thisForm div-->

                        <!--Form ends here-->

                    </div><!--midBoxInternalWide ENDS here-->
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


<div id="backgroundPopup"></div>
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