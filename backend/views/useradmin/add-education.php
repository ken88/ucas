<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Education</h1>
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
                    <a href="<?= \yii\helpers\Url::to(['useradmin/welcome'])?>">Welcome</a> &gt;
                    <a href="<?= \yii\helpers\Url::to(['useradmin/education'])?>">Education</a> &gt;
                    Where have you studied?
                </div><!--breadcrumb ENDS here-->
                <hr>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).<br>Before leaving this page click 'save' to avoid losing any of your information.</p>
                        <div class="errorTxt"></div>
                        <!--clip starts-->
                        <form name="Form1" method="post" action="">

                            <!--display 'Education: Centre details' clip -->
                            <input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here" id="hidCharWarningMsg">
                            <p><input type="hidden" name="from" value="fromEducationCentre"></p><p><input type="hidden" name="hidSchoolCode" value="40596" class="floatLeft" id="schoolCodeTextEntry" readonly="" style="background-color: silver;"></p><!--Centre name-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="centreNameTextEntry">School/college/centre name<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtCentreName" value="<?= $model->txtCentreName ?>" size="33" maxlength="50" class="floatLeft" id="centreNameTextEntry" readonly="" style="background-color: silver;">
                                    <span class="floatLeft">&nbsp;
                                        <input type="button" name="btnFind" value="find..."
                                               onclick="seelistOpen('/help/index16', '?functionname=centreNameTextEntry'); return false;" class="seeListBtn">
</span>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.CENTRE.FIELD.SCHOOL'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Employers address-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="centreNumberTextEntry">Exam centre number</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtCentreNumber" value="<?= $model->txtCentreNumber ?>" size="8" maxlength="7" class="floatLeft" id="centreNumberTextEntry" readonly="" style="background-color: silver;">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.CENTRE.FIELD.CENTRENO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Start date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="startCombo">When did you start...<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboStartMonth" size="1" class="floatLeft" id="startCombo2">
                                            <option value="">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select name="cboStartYear" size="1" class="floatLeft" id="startCombo1">
                                            <option value="">Year</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.CENTRE.FIELD.STARTDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Finish date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="endCombo">...and finish?<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboFinishMonth" size="1" class="floatLeft" id="finishCombo2">
                                            <option value="">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select name="cboFinishYear" size="1" class="floatLeft" id="finishCombo1">
                                            <option value="">Year</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.CENTRE.FIELD.FINISHDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Attendance-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="empTypeRadio">Attendance<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="radio" name="rdAttendance" value="FT" class="floatLeft" id="attendanceRadio" <?php if ($model->rdAttendance=='FT') echo 'checked' ?> ><span class="floatLeft">full-time&nbsp;&nbsp;</span><input type="radio" name="rdAttendance" value="PT" class="floatLeft" id="attendanceRadio" <?php if ($model->rdAttendance=='PT') echo 'checked' ?> ><span class="floatLeft">part-time&nbsp;&nbsp;</span><input type="radio" name="rdAttendance" value="SW" class="floatLeft" id="attendanceRadio" <?php if ($model->rdAttendance=='SW') echo 'checked' ?> ><span class="floatLeft">sandwich</span>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.CENTRE.FIELD.ATTENDANCE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Formal Quals-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="startCombo">Did you / will you receive any qualifications at this centre?<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboFormalQuals" size="1" class="floatLeft" id="formalQualsCombo">
                                            <option value="">Please select...</option>
                                            <option value="Y" <?php if ($model->cboFormalQuals=='Y') echo 'selected' ?> >Yes</option>
                                            <option value="N"<?php if ($model->cboFormalQuals=='N') echo 'selected' ?> >No</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.CENTRE.FIELD.FORMALQUALS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><p><input type="hidden" name="edeId" value="0"></p>


                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">
                                <!--display 'save & cancel' button clip -->
                                <input type="button" name="btnSave" value="save" onclick="check()" class="submitBtn">
                                &nbsp;&nbsp;
                                <a href="/useradmin/education">
                                <input type="button" name="btnCancel" value="cancel" class="submitBtn">
                                </a>

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
        var centreNameTextEntry = $('#centreNameTextEntry').val();
        var startCombo1 = $('#startCombo1').val();
        var startCombo2 = $('#startCombo2').val();
        var finishCombo1 = $('#finishCombo1').val();
        var finishCombo2 = $('#finishCombo2').val();
        var formalQualsCombo = $('#formalQualsCombo').val();
        var rdAttendance= $('input:radio[name="rdAttendance"]:checked').val();
        var err = '';
        if (centreNameTextEntry == '') {
            err += '<p>You must enter the school or college name.</p>';
        }
        if (startCombo1 == '' || startCombo2 == '') {
            err += '<p>You must enter the start date.</p>';
        }
        if (finishCombo1 == '' || finishCombo2 == '') {
            err += '<p>You must enter the finish date.</p>';
        }
        if (rdAttendance == null) {
            err += '<p>You must enter the attendance type.</p>';
        }
        if (formalQualsCombo == '') {
            err += '<p>You must choose if qualifications were received.</p>';
        }
        $('.errorTxt').html(err);
        if (err == '') {
            $('form').submit()
        } else {
            scrollTo(0,0);
        }

    }
    $(function () {
        var cboStartMonth_selected = "<?= $model->cboStartMonth ?>"
        $('#startCombo2').find("option[value='"+cboStartMonth_selected+"']").attr("selected",true);
        var cboStartYear_selected = "<?= $model->cboStartYear ?>"
        $('#startCombo1').find("option[value='"+cboStartYear_selected+"']").attr("selected",true);
        var cboFinishMonth_selected = "<?= $model->cboFinishMonth ?>"
        $('#finishCombo2').find("option[value='"+cboFinishMonth_selected+"']").attr("selected",true);
        var cboFinishYear_selected = "<?= $model->cboFinishYear ?>"
        $('#finishCombo1').find("option[value='"+cboFinishYear_selected+"']").attr("selected",true);
    })


</script>