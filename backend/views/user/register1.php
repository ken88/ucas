


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
                <h1 class="EN">Register: Please read</h1>
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
                        <li class="last"><a href="#" onclick="launchFieldHelp('/help/index2', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');return false;">Help</a></li>
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
                        <a href="RegisterWelcome.jsp?id=cbf560f6369164a30e079b45d585&amp;ran=9q7gtqzvu233">Home</a> &gt;
                        Register
                    </div>
                    <!--breadcrumb ends here-->

                    <!-- progressBar div starts here -->

                    <!-- progressBar div starts here -->
                    <div id="progressBar">
                        <ul>
                            <li class="done">&nbsp;</li>
                            <li class="on">&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
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
                        <div class="errorTxt" style="display: none;">
                            <p>You cannot proceed until you tick the box indicating you accept the terms and conditions.<br></p>
                        </div>
                        <!-- print any summary error or warning messages and then remove them from session... -->



                        <!-- end of summary error or warning messages... -->

                        <p></p><p class="bold">Terms and conditions for the use of Apply</p><p>These terms &amp; conditions confirm your agreement to the general terms and conditions of the use of the UCAS <a href="https://www.ucas.com/corporate/about-us/terms-and-conditions-use-ucas-network" target="_blank" name="tandc" class="externalLink">website</a>, the <a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" target="_blank" name="Private policy" class="externalLink">privacy policy</a> and for use of <span class="bold">Apply (the "Product")</span>.</p><div id="terms"><ol><li class="decimal">By using this Product you acknowledge that you accept all terms and conditions of this agreement ("Agreement"), which include:</li><ul class="display"><li>those contained in this website's general <a href="https://www.ucas.com/corporate/about-us/terms-and-conditions-use-ucas-network" target="_blank" name="tandc" class="externalLink">terms and conditions</a> for its use.</li><li>those contained in the <a href="#" onclick="openPopUp('HelpServicesServlet', '?functionname=help&amp;page=HELP.CONTRACT', 810, 550, 'Declaration'); return false;">declaration</a> in respect of your application.</li><li>the terms and conditions for use of the Product as set out below.</li></ul><li>Licence to use the Product</li><ol class="lower-alpha"><li>In consideration of you agreeing to abide by the terms of this Agreement, you are hereby granted a non-exclusive, non-transferable licence to use a single copy of the Product on your own personal computer in connection with your application to one or more higher education institutions (your "Application").</li><li>You may copy material (by printing off individual pages on to paper) for your personal non-commercial use only.</li><li>You must not: -</li><ol class="lower-roman"><li>translate, disassemble, decompile, modify or reverse engineer the Product in whole or in part or merge it with other software programs.</li><li>adapt any modules of the Product for your own purposes.</li><li>use the Product for any commercial purpose whatsoever.</li></ol><li>You must not at any time publish or disclose to any unauthorised person any confidential information relating to the Product, or any passwords or user names provided to you by UCAS to enable the use of the Product or the website.</li></ol><li>Licence to use materials provided by you as part of your Application</li><ol class="lower-alpha"><li>You hereby grant to us a licence (including the right to sub-license) to use all data, text, information, or other materials which you provide to us in connection with your use of the Product and your Application ("<span class="bold">Application Data</span>") to:</li><ol class="lower-roman"><li>process, store and electronically reproduce the Application Data and display the Application Data on the Product.</li><li>reproduce and distribute through any media now known, or hereafter developed, excerpts of the Application Data to higher education institutions chosen by you as part of your Application, and any other agreed third parties. </li></ol></ol><li>Reliance on information</li><ol class="lower-alpha"><li>The institution and course data contained in the Product reflects the most current information known to UCAS. Institutions may add or cancel courses after this date. You should check each time you use the Product to see if there have been any changes made which may affect your Application.</li><li>University and course codes and other information contained in the Product are supplied to enable completion of your Application only and do not constitute any form of advice or recommendation relating to any particular course or institution.</li></ol><li>Termination</li><ul><li class="nodisplay">UCAS shall have the right to terminate your use of the Product immediately if you fail to comply with the terms and conditions of this Agreement.</li></ul></ol></div><p>Amended 16 March 2011</p><p></p>

                        <!--Form style starts here-->
                        <div class="thisForm">

                            <!-- Hidden fields for use by servlet -->
                            <input type="hidden" name="from" value="2">
                            <input type="hidden" name="functionname" value="register">

                            <hr>
                            <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p>

                            <!--Tick box if you accept these Terms and Conditions starts -->
                            <div class="thisFormElem">
                                <div class="thisFormTxt">
                                    <label for="termsCheckBox">Please tick the box if you accept the terms and conditions<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="checkbox" id="termsCheckBox" name="termsCheckBox" class="floatLeft">

                                    <a href="#" onclick="launchFieldHelp('/help/index4', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt=""></a>
                                </div>
                            </div>
                            <!--Tick box if you accept these Terms and Conditions ends -->

                            <!-- Previous and Next  Buttons starts here -->
                            <div class="thisFormElem">
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormField">
                                    <a href="register">
                                        <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                    </a>

                                    <input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">


                                </div>
                            </div>
                            <!-- Previous and Next  Buttons ends here-->

                        </div>
                        <!--Form style ends here-->
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

</body>
</html>
<script type="text/javascript">
    function check() {

        if($('#termsCheckBox').is(':checked')) {
            window.location="register2"

        }else {
            $('.errorTxt').show();
            scrollTo(0,0);
        }

    }
</script>