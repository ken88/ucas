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
                <h1 class="EN">Personal statement</h1>
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
                    Personal statement
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">

                    <!--Form starts here-->
                    <div class="thisForm">
                        <p class="bold">Our <a href="https://www.ucas.com/ucas/undergraduate/apply-track/writing-personal-statement" target="_blank">guide to writing your personal statement</a> (opens in a new window) should help you complete this section. <br><br>We strongly recommend you write the statement using a word-processing package and paste it in to Apply. <br><br>You can type your statement directly into the box or edit a statement you have pasted in.</p>

                        <!--clip starts-->
                        <form name="Form1" method="post" action="/useradmin/add-save-statement" >

                            <!--display 'PersonalStatement' clip -->
                            <p><input type="hidden" name="from" value="fromStatementStatement"></p><p><input type="hidden" name="hidUnicodeMsgShown" value=" " id="hidUnicodeMsgShown"></p>
                            <input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here" id="hidCharWarningMsg">
                            <div style="display: none;" id="dialog-modal-extended-chars" title="Information">
                                <p>You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.<br><br>Please check the substituted characters version for <b>each section</b> in which you have entered European characters. To do this, click 'View all details' in the left-hand navigation and tick the boxes <b>in each section</b> to show your agreement. Click 'edit' if you need to make any changes. Fields that allow European characters are marked with an '<span class="ReqPlus">Æ</span>'.</p>
                            </div>
                            <div style="display: none;" id="unicodeMsgWarning">
                                <span class="warningTxt">Warning:  You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them. <a href="https://www.ucas.com/sites/default/files/extended-character-sets-substitutions_0.pdf" target="_blank">View the list of European characters we allow.</a><br><br>Please check the substituted characters version <b>for each</b> section in which you have entered European characters. To do this, click 'View all details' in the left-hand navigation and tick the boxes <b>in each section</b> to show your agreement. Click 'edit' if you need to make any changes. Fields that allow European characters are marked with an '<span class="ReqPlus">Æ</span>'.</span><br>
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
                                        setCookie("UCAS_Statement",false,365);
                                    }
                                    else
                                    {
                                        $("#showHideVideo").html("Hide video");
                                        setCookie("UCAS_Statement",true,365);
                                    };
                                    visible = !visible;
                                    return false;
                                };
                            </script>
                            <div class="video">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661051871827046563" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>
                            <br>
                            <h2 div="" style="display:inline;" class="inPage"><label for="statementTextEntry">Personal statement</label></h2>
                            <p>
                                <strong>
                                    Make sure your personal statement is your own work.
                                </strong>
                            </p>
                            <p>We'll carry out checks to verify your personal statement
                                is your own work. Provided it is your own work, you can use
                                your personal statement from your application last year.
                                If it appears to have been copied from another source,
                                we'll inform the universities and colleges to which you
                                have applied. They will then take the action they consider
                                appropriate. We'll also contact you by email to tell
                                you this has happened.</p>
                            <div class="errorTxt"></div>
                            <p class="warningTxt">
                                Click 'save' within
                                <span id="timer">35 minutes </span>
                                so that your work is not lost.
                            </p>
                            <p class="warningTxt">You have used 0 of 47 lines based on the preview and 0 of 4000 characters.</p>
                            <p class="warningTxt">Your completed statement must be between
                                1,000 and 4,000 characters (maximum 47 lines) including spaces
                            </p><!--Personal Statement-->


                            <textarea name="taPersonalStatement" rows="20" cols="75"  class="floatLeft"  id="statementTextEntry"></textarea><span class="floatLeft">&nbsp;</span>    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.PERSONALSTATEMENT.STATEMENT.FIELD.STATEMENT'); return false;"><div id="statementHelpIcon"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></div></a>
                            <div class="clearDiv">&nbsp;</div>
                            <div id="asciiStatement" style="display: none;">
                                <p class="warningTxt">Text containing substituted characters</p>    <textarea name="taAsciiPersonalStatement" rows="20" cols="75" onmousedown="forceSessionUpdate()" readonly="true" onmouseup="forceSessionUpdate()" onchange="forceSessionUpdate()" onkeypress="forceSessionUpdate()" class="floatLeft" onkeydown="forceSessionUpdate()" id="taAsciiPersonalStatement"></textarea><span class="floatLeft">&nbsp;</span></div>
                            <div class="clearDiv">&nbsp;</div>
                            <br>
                            <div style="display: none;" id="unicodeMsgWarningFooter">
                                <span class="warningTxt">In your personal statement you have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.<br><br>Please check the substituted characters version. Then preview your personal statement, mark the section as complete and click 'save'. </span>
                            </div>


                            <p class="bold">Before you can mark this section as complete you must click on 'preview'. The system will then tell you how many lines and characters are still available for your personal statement.</p>

                            <!--display 'save & preview' button clip -->
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="hidden" name="flag" id="flag">
                                        <input type="button" name="btnSave" value="save" onclick="check(1)" class="submitBtn">
                                        &nbsp;&nbsp;<input type="button" name="btnPreview" value="preview" onclick="check(2)" class="submitBtn">

                                    </div>
                                </div>
                            </div>

                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

                            <!-- Hidden field for use by servlet -->
                            <input type="hidden" name="from" value="fromStatementStatement">
                            <!--spacer -->
                            <p>&nbsp;</p>
                            <!--end spacer-->

                        </form>
                        <!--clip ends-->
                    </div><!--close thisForm div-->

                    <!--Form ends here-->

                </div><!--midBoxInternalWide ends here-->
            </div>



        </div>


        <div class="clearDiv">&nbsp;</div>
        <!-- 底部start  -->
        <?php include_once "buttom.php"; ?>
        <!-- 底部end  -->

        <div class="clearDiv">&nbsp;</div>
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->


</body>
</html>
<script type="text/javascript">
    function check(flag) {
        // flag==1 正常保存  flag==2  保存后跳转到预览页面（前提数据不能为空）
        var statementTextEntry = $('#statementTextEntry').val();
        var err = '';
        if(statementTextEntry == ''){
            err = '<p>Statement is blank. You must enter between 1,000 and 4000 characters (maximum 47 lines) including spaces.</p>';
            $('.errorTxt').html(err);
            scrollTo(0,0);
        } else {
            $('#flag').val(flag);
            $(Form1).submit();
        }
    }

</script>