<?php include_once "top.php";?>
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Education</h1>
                <div id="logOut"><a href="#">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/images/apply_interactive_pageHead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->


        <div class="clearDiv">&nbsp;</div>

        <div id="mainContent">
            <!--menu starts 左面菜单栏开始-->
            <?php include_once "menu.php"; ?>
            <!--menu ends 左面菜单栏结束-->

            <!--temp -->

            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="/useradminn/welcomnne">Welcome</a> &gt;
                    <a href="/useradmin/employment">Employment summary</a> &gt;
                    Employment details
                </div><!--breadcrumb ENDS here-->
                <hr>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <p class="bold">Please enter your employment details below. <br><br>Compulsory fields are marked with an asterisk (<span class="Req">*</span>). Before leaving this page, click 'save' to avoid losing any of your information.</p>

                        <div class="errorTxt"></div>
                        <!--clip starts-->
                        <form name="Form1" method="post" action="">

                            <!--display 'Employment' clip -->
                            <p><input type="hidden" name="from" value="fromEmployment"></p><p><input type="hidden" name="hidUnicodeMsgShown" value=" " id="hidUnicodeMsgShown"></p>
                            <input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here" id="hidCharWarningMsg">
                            <div style="display: none;" id="dialog-modal-extended-chars" title="Information">
                                <p>You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.<br><br>Please check the substituted characters version for <b>each section</b> in which you have entered European characters. To do this, click 'View all details' in the left-hand navigation and tick the boxes <b>in each section</b> to show your agreement. Click 'edit' if you need to make any changes. Fields that allow European characters are marked with an '<span class="ReqPlus">Æ</span>'.</p>
                            </div>
                            <div style="display: none;" id="unicodeMsgWarning">
                                <span class="warningTxt">Warning:  You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them. <a>View the list of European characters we allow.</a><br><br>Please check the substituted characters version <b>for each</b> section in which you have entered European characters. To do this, click 'View all details' in the left-hand navigation and tick the boxes <b>in each section</b> to show your agreement. Click 'edit' if you need to make any changes. Fields that allow European characters are marked with an '<span class="ReqPlus">Æ</span>'.</span><br>
                            </div>
                            <!--Employers name-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="employersNameTextEntry">Employer name<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtEmpName" value="<?= $model->txtEmpName ?>" size="35" maxlength="35" class="floatLeft" id="employersNameTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EMPLOYMENT.DETAILS.FIELD.EMPLOYERSNAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Employers address-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="employersAddressTextEntry">Employer address<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtEmpAddress" value="<?=  $model->txtEmpAddress ?>" size="39" maxlength="50" class="floatLeft" id="employersAddressTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EMPLOYMENT.DETAILS.FIELD.EMPLOYERSADDRESS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Nature of work-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="natureOfWorkTextEntry">Job description<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtEmpNature" value="<?= $model->txtEmpNature ?>" size="35" maxlength="35" class="floatLeft" id="natureOfWorkTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EMPLOYMENT.DETAILS.FIELD.JOBDESCRIPTION'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--From date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="startCombo">When did you start?<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <select name="cboStartMonth" size="1" class="floatLeft" id="startCombo2">
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

                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EMPLOYMENT.DETAILS.FIELD.STARTDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--To date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="endCombo">When did you finish?</label>
                                </div>
                                <div class="thisFormField">
                                    <select name="cboEndMonth" size="1" class="floatLeft" id="endCombo2">
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
                                    <select name="cboEndYear" size="1" class="floatLeft" id="endCombo1">
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

                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EMPLOYMENT.DETAILS.FIELD.ENDDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Employment type-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="empTypeRadio">Type of work<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="radio" name="radioEmpType" value="FT" <?php if($model->radioEmpType=='FT') echo 'checked'?> class="floatLeft" id="empTypeRadio"><span class="floatLeft">full-time&nbsp;&nbsp;</span><input type="radio" name="radioEmpType" value="PT" <?php if($model->radioEmpType=='PT') echo 'checked'?> class="floatLeft" id="empTypeRadio"><span class="floatLeft">part-time</span>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EMPLOYMENT.DETAILS.FIELD.WORKTYPE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><p><input type="hidden" name="empId" value="0"></p>

                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">
                                <!--display 'save & cancel' button clip -->

                                <input type="button" name="btnSave" value="save" onclick="check()" class="submitBtn">
                                &nbsp;&nbsp;
                                <a href="/useradmin/employment">
                                <input type="button" name="btnCancel" value="cancel"  class="submitBtn">
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



        </div><!--mainContent ends here-->

        <div class="clearDiv">&nbsp;</div>

        <!-- 底部start  -->
        <?php include_once "buttom.php"; ?>
        <!-- 底部end  -->


        <div class="clearDiv">&nbsp;</div>

    </div> <!--wrapper ENDS here-->
</div><!--outerWrapper ENDS here-->
</body>
</html>
<script type="text/javascript">
    function check() {
        var employersNameTextEntry = $('#employersNameTextEntry').val();
        var employersAddressTextEntry = $('#employersAddressTextEntry').val();
        var natureOfWorkTextEntry = $('#natureOfWorkTextEntry').val();
        var startCombo1 = $('#startCombo1').val();
        var startCombo2 = $('#startCombo2').val();

        var radioEmpType= $('input:radio[name="radioEmpType"]:checked').val();

        var err = '';
        if (employersNameTextEntry == '' ) {
            err += '<p>ou must enter a name for the employer.</p>';
        }
        if (employersAddressTextEntry == '' ) {
            err += '<p>You must enter an address for the employer.</p>';
        }
        if (natureOfWorkTextEntry == '' ) {
            err += '<p>You must enter the nature of work.</p>';
        }
        if (startCombo1 == '' || startCombo2 == '') {
            err += '<p>You must enter the start date.</p>';
        }

        if (radioEmpType == null) {
            err += '<p>You must enter the mode of attendance (FT / PT).</p>';
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
        var startCombo2_selected = "<?= $model->cboEndMonth ?>"
        $('#endCombo2').find("option[value='"+startCombo2_selected+"']").attr("selected",true);
        var startCombo2_selected = "<?= $model->cboEndYear ?>"
        $('#endCombo1').find("option[value='"+startCombo2_selected+"']").attr("selected",true);
    })


</script>