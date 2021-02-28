
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
                <h1 class="EN">Initial UCAS questions: How are you applying?</h1>
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
                        Initial UCAS questions
                    </div><!--breadcrumb ENDS here-->
                    <hr>


                    <div id="midBoxInternalWide">


                        <!--Form starts here-->

                        <div class="thisForm">


                            <p class="bold">You now need to enter your buzzword - this will be given to you by your school, college or centre. You will only be asked to enter your buzzword once.<br><br>(Buzzwords are case sensitive)</p>

                            <div class="errorTxt"></div>

                            <form name="Form1" method="post" action="PostRegistrationServlet?id=37e7a685165f21aaf8a54412a0ef&amp;ran=1f3011uj1gs38">

                                <!--School option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="buzzwordTextbox">Buzzword<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtBuzzword" value="" class="floatLeft" id="txtBuzzword">
                                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.POSTREG.BUZZWORD.FIELD.BUZZWORD'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->

                                <div class="clearDiv">&nbsp;</div>

                                <p class="warningTxt">Your buzzword means we know which school, college, or centre you are applying from. By entering the buzzword, you give permission to share your data with your school, college or centre, so they can support you through the UCAS application process. <br><br>They will be able to check the progress of your application, attach a reference, add your predicted grades, and send your application to UCAS on your behalf. They will also be able to see decisions made by your chosen universities and colleges, and your replies.<br><br>If you do not want to link to a centre, you can add a reference from somewhere else, or if you no longer want them to see the progress of your application, please contact us.</p>

                                <!--spacer -->
                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">&nbsp;
                                    <!-- non-visible text box to prevent IE bug where hitting enter on form with single field doesn't submit -->
                                    <input type="text" readonly="" style="position : absolute; top : -1000px; left : -1000px; width: 0px; visibility: hidden ">
                                </div>
                                <!--end spacer-->

                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">
                                    <a href="register8">
                                        <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                    </a>

                                    &nbsp;&nbsp;<input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

                                </div>

                                <!-- Hidden field for use by servlet -->
                                <input type="hidden" name="from" value="2">
                                <input type="hidden" name="functionname" value="postreg">



                            </form>
                        </div><!--close thisForm div-->

                        <!--Form ends here-->

                    </div><!--midBoxInternalWide ends here-->
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

        var txtBuzzword= $('#txtBuzzword').val();
        if(txtBuzzword == ''){
            err = '<p>Please enter your buzzword.</p>';
            $('.errorTxt').html(err);
        }
        else {
            window.location="register10"
        }
    }
</script>