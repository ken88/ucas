<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Choices</h1>
                <div id="logOut"><a href="#">Log out</a></div>
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
                    <a href="Welcome.jsp?id=c58898d4e06afa8944ded19eb46d&amp;ran=70fiuzzmb59v">Welcome</a> &gt;
                    <a href="ChoicesServlet?functionname=choicesummary&amp;id=c58898d4e06afa8944ded19eb46d&amp;ran=1jcmboryrsz9l">Choice summary</a> &gt;
                    Choice details
                </div><!--breadcrumb ENDS here-->
                <hr>


                <div id="midBoxInternalWide">


                    <!--Form starts here-->

                    <div class="thisForm">


                        <p class="bold">To avoid losing information please click 'save' before leaving the page.<br><br>To find courses based on subject, provider and location, check entry requirements, and view course-specific fee information, please use <a href="https://digital.ucas.com/search" target="_blank">the UCAS search tool</a> (opens in a new window).<br><br>Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p>

                        <div class="errorTxt"></div>

                        <form name="Form1" method="post" onsubmit="return setJavaEnabled()" action="">

                            <!--Inst code-->
                            <div class="thisFormElem"><!--open form element -->

                                <div class="thisFormTxt">
                                    <label for="instcodeTextEntry">Institution code<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="hidden" id="instcodeTextEntry1" name="txtInstCode1" style="text-transform: capitalize;" maxlength="3" size="5" value="<?= $model->txtInstCode1 ?>" class="floatLeft">
                                    <input type="text" id="instcodeTextEntry" name="txtInstCode" style="text-transform: capitalize;" maxlength="3" size="5" value="<?= $model->txtInstCode ?>" class="floatLeft">
                                    <span class="floatLeft">&nbsp;
            <input type="button" id="instButton" value="see list" class="seeListBtn" onclick="seelistOpen('/help/index12', '?functionname=instcodeTextEntry', 'document.Form1.txtInstCode'); return false;"></span>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.INSTCODE'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->


                            <!--Course code-->
                            <div class="thisFormElem"><!--open form element -->

                                <div class="thisFormTxt">
                                    <label for="coursecodeTextEntry">Course code<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">

                                    <input type="text" id="coursecodeTextEntry" name="txtCourseCode" value="<?= $model->txtCourseCode ?>" style="text-transform: capitalize;" maxlength="4" size="5" class="floatLeft">
                                    <span class="floatLeft">&nbsp;
                                    <input type="hidden" value="see list" class="seeListBtn"
                                           onclick="seelistOpen('/help/index12','?functionname=coursecodeTextEntry&instcode='+document.Form1.txtInstCode.value)" >
                                    </span>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.COURSECODE'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->



                            <!--Campus code-->
                            <div class="thisFormElem"><!--open form element -->

                                <div class="thisFormTxt">
                                    <label for="campuscodeTextEntry">Campus code<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">

                                    <input type="text" id="campuscodeTextEntry" name="txtCampusCode" value="<?=     $model->txtCampusCode ?>" style="text-transform: capitalize;" maxlength="1" size="2" class="floatLeft">
                                    <span class="floatLeft">&nbsp;
            <input type="hidden" value="see list" class="seeListBtn" onclick="launchCampusPopUp('PopUpServlet', '?functionname=campuslist', document.Form1.txtInstCode.value, document.Form1.txtCourseCode.value, 'document.Form1.txtCampusCode'); return false;"></span>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.CAMPUSCODE'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->


                            <!--Start date-->
                            <div class="thisFormElem"><!--open form element -->

                                <div class="thisFormTxt">
                                    <label for="startdateTextEntry">Start date<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">

                                    <input type="text" id="startdateTextEntry" name="txtStartDate" value="<?= $model->txtStartDate ?>" maxlength="20" size="20"  class="floatLeft">
                                    <span class="floatLeft">&nbsp;
            <input type="hidden" value="see list" class="seeListBtn" onclick="launchPopUp('PopUpServlet', '?functionname=startslist', document.Form1.txtInstCode.value, document.Form1.txtCourseCode.value, document.Form1.txtCampusCode.value, 'document.Form1.txtStartDate, document.Form1.hidStartDate, document.Form1.hidDefer'); return false;"></span>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.STARTDATE'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->


                            <!--Further details-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="furtherTextEntry">Further details</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" id="furtherTextEntry" name="txtFurtherDetails" value="<?= $model->txtFurtherDetails ?>" maxlength="20" size="20" class="floatLeft">
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.FURTHERDETAILS'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->

                            <!--live @ home-->
                            <div class="thisFormElem"><!--open form element -->

                                <div class="thisFormTxt">
                                    <label for="homeRadio">Live at home while studying?<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">

                                    <input type="radio" name="rdHome" value="Y" <?php if($model->rdHome=='Y') echo 'checked'?> class="floatLeft" id="homeRadio"><span class="floatLeft">Yes&nbsp;&nbsp;</span><input type="radio" name="rdHome" value="N" <?php if($model->rdHome=='N') echo 'checked'?> class="floatLeft" id="homeRadio"><span class="floatLeft">No</span>
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.LIVEATHOME'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->

                            <!--Entry Point-->
                            <div class="thisFormElem"><!--open form element -->

                                <div class="thisFormTxt">
                                    <label for="entryPointTextEntry">Point of entry</label>
                                </div>
                                <div class="thisFormField">

                                    <input type="text" id="entryPointTextEntry" name="txtPOE" value="<?= $model->txtPOE ?>" maxlength="1" size="2" class="floatLeft">
                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.POINTOFENTRY'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>

                            </div><!--close form element -->

                            <!--Criminal record declaration -->
                            <div id="crimDeclare" class="thisFormElem" style="display: none;"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="crimDeclareTextEntry">Criminal convictions declaration<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">

                                    <input type="text" id="crimDeclareTextEntry" name="crimDeclareTextEntry" value="" maxlength="13" size="13" readonly="true" class="floatLeft">


                                    <span class="floatLeft">
            <input type="button" value="edit" class="seeListBtn" onclick="crimDeclarelaunchPopUp('PopUpServlet', '?functionname=crimDeclare', 'document.Form1.crimDeclareTextEntry'); return false;">
            </span>


                                    <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.CHOICES.DETAILS.FIELD.CRIMDECLARE'); return false;">
                                        <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help">
                                    </a>
                                </div>
                            </div><!--close form element -->

                            <!-- clear both -->
                            <div class="clearDiv">&nbsp;</div>

                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">
                                <!--display 'save & cancel' button clip -->
                                <input type="button" id="btnSave" name="btnSave" value="save" class="submitBtn" onclick="check()">&nbsp;&nbsp;
                                <a href="/useradmin/choices">
                                <input type="button" id="btnCancel" name="btnCancel" value="cancel" class="submitBtn">
                                </a>
                            </div>

                            <!--hidden field holding choice number -->
                            <input type="hidden" name="choiceId" value="0">
                            <!-- Hidden field for use by servlet -->
                            <input type="hidden" name="from" value="fromChoice">

                            <!-- Hidden field to hold full start date -->
                            <input type="hidden" name="hidStartDate" value="">

                            <!-- Hidden field to hold deferred value (set by 'start date' selection) -->
                            <input type="hidden" name="hidDefer" value=" ">


                            <!-- Hidden field to hold if a paper applicant (for use in AJAX) -->
                            <input type="hidden" name="hidPaperApplicant" id="hidPaperApplicant" value="N">

                            <!-- hidden field to show character warning message in JQuery limit chars -->
                            <input type="hidden" name="hidCharWarningMsg" id="hidCharWarningMsg" value="The following character is not permitted here">

                            <!-- Hidden field to hold javascript enabled value-->
                            <input type="hidden" name="hidJavaScriptEnabled" id="hidJavaScriptEnabled" value="false">

                        </form>
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
    function check() {
        var instcodeTextEntry = $('#instcodeTextEntry').val();
        var coursecodeTextEntry= $('#coursecodeTextEntry').val();
        var campuscodeTextEntry= $('#campuscodeTextEntry').val();
        var startdateTextEntry= $('#startdateTextEntry').val();

        var rdHome= $('input:radio[name="rdHome"]:checked').val();
        var err = '';

        if (instcodeTextEntry == '') {
            err += '<p>Invalid institution code</p>';
        }
        if (coursecodeTextEntry == '') {
            err += '<p>Invalid course code</p>';
        }
//        if (campuscodeTextEntry == '') {
//            err += '<p>Invalid start date</p>';
//        }
        if (campuscodeTextEntry == '') {
            err += '<p>nvalid institution code</p>';
        }
        if (rdHome == null) {
            err += "<p>Please complete 'Live at home while studying?' question.</p>";
        }

        if (err != '') {
            $('.errorTxt').html(err);
            scrollTo(0,0);
        }else{
            $('form').submit()
        }

    }


</script>