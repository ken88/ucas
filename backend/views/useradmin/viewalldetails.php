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
                <h1 class="EN">View all</h1>
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
                    <a href="welcome">Welcome</a> &gt;
                    View all
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <form name="Form1" method="post" action="ViewAllServlet?id=e1836169083c2c1968b8b6f43643&amp;ran=1cgqiukilh6g8">

                            <div id="ViewAll">
                                <div class="errorTxt"><p>The application contains errors.</p></div>
                                <div class="inPage"><p>Please review your application below to ensure that the details you have provided are both correct and reflect your preferences. Please confirm your preferences to receive further information from UCAS and UCAS Media about courses or products and services by ticking "Section completed" at the bottom of this screen.<br><br>If the details below are either incorrect, or do not reflect your preferences, please change your application.</p></div>
                                <table>
                                    <tbody><tr>
                                        <td class="sectionHeading" valign="bottom"><div class="cardIcon"><img valign="bottom" src="/static/images/notStarted.gif" width="14" height="14" class="floatLeft" alt="Not started"></div>&nbsp;Personal details</td>
                                        <td class="sectionStatus"><ul class="skinny"><li><a href="PersonalDetailsServlet?functionname=personaldetails&amp;from=fromViewAll&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=rrnb3ze0ciqh">edit</a></li></ul></td>
                                    </tr>
                                    </tbody></table>
                                <div class="errorTxt"><p>This section contains errors.</p></div>
                                <h2 class="inPage">
                                    Personal&nbsp;&nbsp;
                                </h2>
                                <table width="100%">
                                    <tbody><tr>
                                        <th style="width:33%;">
                                            Title
                                        </th>
                                        <td style="width:33%;" class="value">
                                            Miss&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Gender
                                        </th>
                                        <td style="width:33%;" class="value">
                                            Female&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            First/given name(s)
                                        </th>
                                        <td style="width:33%;" class="value">
                                            ken&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Surname/family name
                                        </th>
                                        <td style="width:33%;" class="value">
                                            yu&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Preferred first name
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Previous surname at 16th birthday
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Postal address
                                        </th>
                                        <td style="width:33%;" class="value">
                                            aaa bbb ccc ddd Algeria &nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="error">
                                            Is your permanent home in the UK?
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please select whether you live in UK permanently or not.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Home address
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Home telephone number
                                        </th>
                                        <td style="width:33%;" class="value">
                                            13123456789&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Mobile number
                                        </th>
                                        <td style="width:33%;" class="value">
                                            13123456789&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Email address
                                        </th>
                                        <td style="width:33%;" class="value">
                                            176745155@qq.com&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Date of birth
                                        </th>
                                        <td style="width:33%;" class="value">
                                            4 January 1996&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="error">
                                            Country of birth
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please select country of birth.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Date of first entry to UK
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="error">
                                            Nationality
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please select nationality.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Dual nationality
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="error">
                                            Area of permanent residence
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please enter area of permanent residence.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th class="error last">
                                            Residential category
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error last">
                                            Please select residential category.&nbsp;</td>
                                    </tr>
                                    </tbody></table>
                                <h2 class="inPage">
                                    Reference numbers&nbsp;&nbsp;
                                </h2>
                                <table width="100%">
                                    <tbody><tr>
                                        <th style="width:33%;">
                                            Unique Learner Number (ULN)
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Test of English as a Foreign Language (TOEFL) Number
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="last">
                                            International English Language Testing System (IELTS) TRF Number
                                        </th>
                                        <td style="width:33%;" class="value last">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value last"></td>
                                    </tr>
                                    </tbody></table>
                                <h2 class="inPage">
                                    Student support&nbsp;&nbsp;
                                </h2>
                                <table width="100%">
                                    <tbody><tr>
                                        <th class="error">
                                            Fee code
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please select fee code.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            Student support arrangements
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="error">
                                            Have you ever lived or worked in the EU (excluding the UK), European Economic Area (EEA) or Switzerland?
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please select an answer to the residency question.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th class="error last">
                                            Do you have a parent, step parent, spouse or civil partner who is an EU (excluding the UK), EEA or Swiss national?
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error last">
                                            Please select an answer to your family's nationality question.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    </tbody></table>
                                <h2 class="inPage">
                                    Receiving further information about courses and/or products and services&nbsp;&nbsp;
                                </h2>
                                <table width="100%">
                                    <tbody><tr>
                                        <th style="width:33%;">
                                            I want to receive targeted course vacancy information if I am unplaced.
                                        </th>
                                        <td style="width:33%;" class="value">
                                            No&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            I want to receive information about health, careers and study opportunities by email
                                        </th>
                                        <td style="width:33%;" class="value">
                                            No&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            I want to receive information about commercial products and services by email
                                        </th>
                                        <td style="width:33%;" class="value">
                                            Yes&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            I want to receive information about health, careers and study opportunities by text/SMS
                                        </th>
                                        <td style="width:33%;" class="value">
                                            No&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            I want to receive information about commercial products and services by text/SMS
                                        </th>
                                        <td style="width:33%;" class="value">
                                            No&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:33%;">
                                            I want to receive information about health, careers and study opportunities by post
                                        </th>
                                        <td style="width:33%;" class="value">
                                            No&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="last">
                                            I want to receive information about commercial products and services by post
                                        </th>
                                        <td style="width:33%;" class="value last">
                                            No&nbsp;</td>
                                        <td style="width:33%;" class="value last"></td>
                                    </tr>
                                    </tbody></table>
                                <h2 class="inPage">
                                    Nominated access&nbsp;&nbsp;
                                </h2>
                                <table width="100%">
                                    <tbody><tr>
                                        <th style="width:33%;">
                                            Full name of nominee
                                        </th>
                                        <td style="width:33%;" class="value">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value"></td>
                                    </tr>
                                    <tr>
                                        <th class="last">
                                            Relationship to you
                                        </th>
                                        <td style="width:33%;" class="value last">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value last"></td>
                                    </tr>
                                    </tbody></table>
                                <h2 class="inPage">
                                    Disability/special needs&nbsp;&nbsp;
                                </h2>
                                <table width="100%">
                                    <tbody><tr>
                                        <th class="error">
                                            Category
                                        </th>
                                        <td style="width:66%;" colspan="2" class="error">
                                            Please select disability or special needs.<br><span class="value"></span>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th class="last">
                                            Please give details of any special needs
                                        </th>
                                        <td style="width:33%;" class="value last">
                                            &nbsp;&nbsp;</td>
                                        <td style="width:33%;" class="value last"></td>
                                    </tr>
                                    </tbody></table>
                                <p>&nbsp;</p>
                                <table>
                                    <tbody><tr>
                                        <td class="sectionHeading" valign="bottom"><div class="cardIcon"><img valign="bottom" src="/static/images/notStarted.gif" width="14" height="14" class="floatLeft" alt="Not started"></div>&nbsp;Choices</td>
                                        <td class="sectionStatus"><ul class="skinny"><li><a href="ChoicesServlet?functionname=choicesummary&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=1dgrwh3l0hsqc">edit</a></li></ul></td>
                                    </tr>
                                    </tbody></table>
                                <table>
                                    <tbody><tr>
                                        <td class="sectionHeading" valign="bottom"><div class="cardIcon"><img valign="bottom" src="/static/images/notStarted.gif" width="14" height="14" class="floatLeft" alt="Not started"></div>&nbsp;Education</td>
                                        <td class="sectionStatus"><ul class="skinny"><li><a href="EducationServlet?functionname=educationsummary&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=hqhz9pozgd20">edit</a></li></ul></td>
                                    </tr>
                                    </tbody></table>
                                <table>
                                    <tbody><tr>
                                        <td class="sectionHeading" valign="bottom"><div class="cardIcon"><img valign="bottom" src="/static/images/notStarted.gif" width="14" height="14" class="floatLeft" alt="Not started"></div>&nbsp;Employment</td>
                                        <td class="sectionStatus"><ul class="skinny"><li><a href="EmploymentServlet?functionname=empsummary&amp;from=fromViewAll&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=odp21iljp62i">edit</a></li></ul></td>
                                    </tr>
                                    </tbody></table>
                                <table>
                                    <tbody><tr>
                                        <td class="sectionHeading" valign="bottom"><div class="cardIcon"><img valign="bottom" src="/static/images/notStarted.gif" width="14" height="14" class="floatLeft" alt="Not started"></div>&nbsp;Personal statement</td>
                                        <td class="sectionStatus"><ul class="skinny"><li><a href="PersonalStatementServlet?functionname=perStatement&amp;from=fromViewAll&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=t3ja9ml7r51s">edit</a></li></ul></td>
                                    </tr>
                                    </tbody></table>
                                <div class="thisForm">
                                    <div class="thisFormElem">
                                        <div class="warningTxt" id="sectionCheckMessage" style="display:none;">
                                            You will not be able to mark this section as complete until you have ticked all the boxes on this page to agree with the substituted characters.
                                        </div>&nbsp;
                                        <div class="thisFormTxt">
                                            &nbsp;
                                        </div>
                                        <div class="thisFormField">
                                            <input type="checkbox" name="chkComplete" id="chkComplete">&nbsp;section completed
                                        </div>
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                            </div>



                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">
                                <!--display 'save' button clip -->
                                <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                                <input type="submit" name="btnSave" value="save" class="submitBtn">

                            </div>


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
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->


</body>
</html>