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
                <h1 class="EN">Education</h1>
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
                    Education
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">
                    <!--Form starts here-->
                    <div class="thisForm">
                        <!--clip starts-->
                        <form name="Form1" method="post" action="EducationServlet?id=e1836169083c2c1968b8b6f43643&amp;ran=1a48fz03z4ame">
                            <!--display 'Education' clip -->
                            <input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here" id="hidCharWarningMsg">
                            <p><input type="hidden" name="from" value="fromEducationSummary"></p>
                            <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p>
                            <p class="bold">Click on the 'add new school/college/centre' to add the centres you have attended. Enter details of qualifications that you have achieved or are in the process of achieving at that school/college/centre. Click on  'section completed' and 'save' when you have finished.</p>
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
                                        setCookie("UCAS_Education",false,365);
                                    }
                                    else
                                    {
                                        $("#showHideVideo").html("Hide video");
                                        setCookie("UCAS_Education",true,365);
                                    };
                                    visible = !visible;
                                    return false;
                                };
                            </script>
                            <div class="video">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661051151150093841" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>
                            <p class="bold"><span class="warningTxt">You can add up to 10 schools/colleges/centres.</span></p>
                            <ul>
                                <li><a href="EducationServlet?functionname=educationcentre&amp;mode=add&amp;edeId=0&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=1cy6p4b7j72rg">add new school/college/centre</a></li>
                            </ul>
                            <hr>
                            <table border="0" cellpadding="0" cellspacing="0" id="eduSummary">
                                <tbody><tr><td colspan="7" width="520">No schools/colleges/centres entered.</td></tr>
                                <tr><td colspan="7"><hr></td></tr>
                                </tbody></table>
                            <!--Hightest expected qualification-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="highestExpectedQualCombo">Please state the highest level of qualification you expect to have before you start your course<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <select name="cboHighestExpectedQual" size="1" class="floatLeft" id="highestExpectedQualCombo">
                                        <option value="-">Please select...</option>
                                        <option value="D">Honours degree level or above qualifications</option>
                                        <option value="B">Below honours degree level qualifications</option>
                                        <option value="N">I will have no qualifications</option>
                                    </select>

                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.SUMMARY.FIELD.HIGHESTEXPTECTEDQUAL'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="checkbox" name="chkComplete" id="chkComplete">&nbsp;section completed
                                    </div>
                                </div>
                            </div>

                            <!--display 'save' button clip -->
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">&nbsp;</div>
                                    <div class="thisFormField">
                                        <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                                        <input type="submit" name="btnSave" value="save" class="submitBtn">

                                    </div>
                                </div>
                            </div>
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
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->


</body>
</html>