<?php include_once "top.php";?>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">
<div id="outerWrapper" class="clearfix">
    <div id="wrapperInternal" class="floatLeft">
        <div id="header">
            <div id="tools">
                <ul>
                    <li><a href="https://www.ucas.com/corporate/about-us/contact-us" onclick="window.open(this.href);return false;">Contact us</a> |</li>
                    <li class="help"><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.HEADER.PAGE'); return false;">Help</a> |</li>
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
                <h1 class="EN">Verify email: Enter code</h1>
                <div id="logOut"><a href="ServicesServlet?functionname=logout&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=1xyxbh65mtj08">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <div class="clearDiv">&nbsp;</div>
        <div id="mainContent">
            <!--menu starts-->
            <div id="leftNavInternal" class="floatLeft">
                <ul>
                    <li class="current notStarted"><a href="Welcome.jsp?id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=fhb6pjfu0udf">Welcome</a></li>
                    <li class="notStarted"><a href="PersonalDetailsServlet?functionname=personaldetails&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=15otj4qrw76pk">Personal details</a></li>
                    <li class="notStarted"><a href="ChoicesServlet?functionname=choicesummary&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=tk3neje9prxt">Choices</a></li>
                    <li class="notStarted"><a href="EducationServlet?functionname=educationsummary&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=mvi4z9313tn1">Education</a></li>
                    <li class="notStarted"><a href="EmploymentServlet?functionname=empsummary&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=1p705jgj51a08">Employment</a></li>
                    <li class="notStarted"><a href="PersonalStatementServlet?functionname=perStatement&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=1jhtwem3t8axd">Statement</a></li>
                    <li class="notStarted"><a href="ViewAllServlet?id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=174hksccuwvpn">View all details</a></li>
                    <li class="notStarted">Pay/Send</li>
                    <li><a href="#" onclick="javascript:if(window.launchPageHelp){launchPageHelp();}else{alert('Help has not been set up for this page');}; return false;">Help</a></li>
                    <li class="last"><a href="ServicesServlet?functionname=options&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=9grky6hg0has">Options/Opsiynau</a></li>
                </ul><h3>Key</h3>
                <ul id="key">
                    <li id="complete">Completed</li>
                    <li id="inProgress">In progress</li>
                    <li id="notStarted">Not started</li>
                    <li style="display: none;" id="subCharacter">European characters allowed</li>
                    <li id="help">Help</li>
                </ul><!--key ENDS here-->
            </div><!--leftNav ENDS here-->
            <!--menu ends-->




            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="Welcome.jsp?id=37e7a685165f21aaf8a54412a0ef&amp;ran=hokuhpycwdir">Welcome</a> &gt;
                    Verify email
                </div><!--breadcrumb ENDS here-->
                <hr>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <!--<p class="bold">The email verification code has been sent to <strong><<APPLICANT_EMAIL_ADDRESS>></strong>. To confirm that this address is valid please enter the code from the relevant email in the box below.<br /><br /> If this email is not in your inbox then there are three possible reasons for this:<br /><br /><ul class="display"><li>Your computer email filter settings or those maintained by your internet service provider may have diverted the message to a junk/spam mail folder. Please check this.<br />&nbsp;</li><li>Your internet service provider may be extremely busy, and therefore may not have been able to pass on our message. Please be patient and look again later.<br />&nbsp;</li><li>The email address recorded here as above may be incorrect. You can change the email address in the Personal details section of your application. If you do this you must click on 'save' to save the new details. You must then request that the verification code is reissued by clicking the relevant link below.</ul><br />If the email containing the code cannot be found as above then you should:<br /><br /><ol class="display"><li>add our sending address <a href= "mailto:enquiries@ucas.ac.uk" class="plain">enquiries@ucas.ac.uk</a> to your list of approved senders on your email system (this can usually be done by adding it to your address list), and<br />&nbsp;</li><li>request that the verification code is reissued by clicking the relevant link below. An email will then be sent containing a new code.</ol><br />If the code is not accepted please make sure that the email was sent <strong>after</strong> you requested a new code. If it was sent <strong>earlier</strong>, then the code will be invalid because you requested another verification code since that time. Make sure you use the code from the most recent email. <br /><br />Please enter your email verification code below to verify your address is <strong><<APPLICANT_EMAIL_ADDRESS>></strong>:</p>-->

                        <!--clip starts-->
                        <form name="Form1" method="post" action="index">

                            <!--display 'Verify Email Generate Code' clip -->
                            <p><input type="hidden" name="from" value="fromVerifyEmailEnterCode"></p>
                            <p>The email verification code has been sent to <strong>176745155@qq.com</strong>. To confirm that this address is valid please enter the code from the relevant email in the box below.<br><br> If this email is not in your inbox then there are three possible reasons for this:<br><br></p>
                            <ul class="display"><li>Your computer email filter settings or those maintained by your internet service provider may have diverted the message to a junk/spam mail folder. Please check this.<br>&nbsp;</li><li>Your internet service provider may be extremely busy, and therefore may not have been able to pass on our message. Please be patient and look again later.<br>&nbsp;</li><li>The email address recorded here as above may be incorrect. You can change the email address in the Personal details section of your application. If you do this you must click on 'save' to save the new details. You must then request that the verification code is reissued by clicking the relevant link below.</li></ul><br>If the email containing the code cannot be found as above then you should:<br><br><ol class="display"><li>add our sending address <a href="mailto:enquiries@ucas.ac.uk" class="plain">enquiries@ucas.ac.uk</a> to your list of approved senders on your email system (this can usually be done by adding it to your address list), and<br>&nbsp;</li><li>request that the verification code is reissued by clicking the relevant link below. An email will then be sent containing a new code.</li></ol><br>If the code is not accepted please make sure that the email was sent <strong>after</strong> you requested a new code. If it was sent <strong>earlier</strong>, then the code will be invalid because you requested another verification code since that time. Make sure you use the code from the most recent email. <br><br>Please enter your email verification code below to verify your address is <strong>176745155@qq.com</strong>:<p></p>
                            <p>
                                <input type="text" name="txtEnterCode" value="" size="8" maxlength="8" class="floatLeft" id="enterCodeTextEntry">
                                <span class="floatLeft">&nbsp;</span><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.VERIFYENTERCODE.FIELD.ENTERCODE'); return false;"></a>
                            </p>
                            <div id="cardIcon">
                                <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.VERIFYENTERCODE.FIELD.ENTERCODE'); return false;">
                                    <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help">
                                </a></div><p></p><div id="clearDiv"></div><p><br><br>
                                <input type="submit" name="btnVerifyEmail" value="verify email " class="submitBtn">
                            </p>
                            <p><strong>No verification code</strong><br>If you have not received the verification email, please read through the possible reasons above, or <a href="VerifyEmailServlet?functionname=generatecode&amp;id=37e7a685165f21aaf8a54412a0ef&amp;ran=102xmnokn2cte">click here to reissue a code</a>.</p>

                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

                        </form>
                        <!--clip ends-->
                    </div><!--close thisForm div-->

                    <!--Form ends here-->

                </div><!--midBoxInternalWide ends here-->
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
    </div> <!--wrapper ENDS here-->
</div><!--outerWrapper ENDS here-->
<!-- modal box content -->

</body>
</html>