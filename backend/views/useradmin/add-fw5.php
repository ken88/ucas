<?php include_once "top.php";?>
<style>
    .errorTxt p {
        margin: 0;
        padding: 0;
        color: #309728;
        line-height: normal;
        padding-left: 17px;
        background: url(../static/images/errorIco.gif) no-repeat top left #f1f0ee;
    }
</style>
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
                    <?= Yii::$app->request->get('val')?>
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div class="errorTxt"></div>
                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <!--clip starts-->



                        <form name="Form1" method="post" action="EducationServlet?id=cee5ad2d4e49b1d23bfa995de0f2&amp;ran=1h5gc1ozyugp6">

                            <!--display 'Qual Details' clip -->
                            <p><input type="hidden" name="currentMonth" value="3"></p>
                            <p><input type="hidden" name="currentYear" value="2021"></p>
                            <p><input type="hidden" name="invalidGradeValues" value="Please select...,Pending"></p>
                            <p><input type="hidden" name="from" value="fromEducationQualDetails"></p>
                            <p><input type="hidden" name="qualKey" value="EP"></p>
                            <p><input type="hidden" name="qualId" value="0"></p>
                            <p><input type="hidden" name="edeId" value="1"></p>
                            <p><input type="hidden" name="mode" value="add"></p>
                            <p><input type="hidden" name="functionname" value=""></p>
                            <input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here" id="hidCharWarningMsg">
                            <h2 class="inPage">Extended Project (Level 3)</h2>
                            <p class="bold">Please enter details below, using the 'other' boxes only where the applicable option cannot be found in the lists provided.</p>
                            <p></p>
                            <!--Title-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="title">Subject<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtTitle" value="" size="39" maxlength="50" onchange="if(document.forms[0].titleCombo){document.forms[0].titleCombo.selectedIndex=0;}" class="floatLeft" id="titleTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.TITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Start date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="qualDateCombo">Qualification date<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboQualMonth" size="1" class="floatLeft" id="qualDateCombo">
                                            <option value="-">Month</option>
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
                                        <select name="cboQualYear" size="1" class="floatLeft" id="qualDateCombo">
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
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.DATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Awarding Body-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="awarding body">Awarding organisation<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboAwardingBody" size="1" onchange="document.forms[0].awardingBodyTextEntry.value='';" class="floatLeft" id="awardingBodyCombo">
                                            <option value="">Please select...</option>
                                            <option value="AQA">AQA</option>
                                            <option value="ASDAN">ASDAN</option>
                                            <option value="EDI">EDI</option>
                                            <option value="Edexcel">Edexcel</option>
                                            <option value="OCR">OCR</option>
                                            <option value="VTCT">VTCT</option>
                                            <option value="WJEC">WJEC</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtAwardingBody" value="" size="7" maxlength="7" onchange="if(document.forms[0].awardingBodyCombo){document.forms[0].awardingBodyCombo.selectedIndex=0;}" class="floatLeft" id="awardingBodyTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.AWARDINGBODY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Grade-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="grade">Grade<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboGrade" size="1" onchange="document.forms[0].gradeTextEntry.value='';" class="floatLeft" id="gradeCombo">
                                            <option value="?" selected="selected">Please select...</option>
                                            <option value="">Pending</option>
                                            <option value="A*">A*</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtGrade" value="" size="16" maxlength="20" onchange="if(document.forms[0].gradeCombo){document.forms[0].gradeCombo.selectedIndex=0;}" class="floatLeft" id="gradeTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><br>
                            <div class="clearDiv">&nbsp;</div>
                            <hr>


                            <!-- //print the "Back to summary" link on the screen -->
                            <ul class="skinny">
                                <li>
                                    <a href="/useradmin/education">back to summary</a>
                                </li>
                            </ul>
                            <br>&nbsp;

                            <!--display 'save' button clip -->
                            <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                            <input type="submit" name="btnSave" value="save" class="submitBtn">



                            <!--spacer -->
                            &nbsp;&nbsp;
                            <!--end spacer-->

                            <!--display 'save and add similar' button clip -->
                            <input type="submit" name="btnSaveAndAdd" value="save and add similar" class="submitBtn">






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
        var titleCombo = $('#titleCombo').val();
        var titleTextEntry = $('#titleTextEntry').val();

        var yue = $('#yue').val();
        var nian = $('#nian').val();

        var awardingBodyCombo = $('#awardingBodyCombo').val();
        var awardingBodyTextEntry = $('#awardingBodyTextEntry').val();

        var gradeCombo= $('#gradeCombo').val();
        var gradeTextEntry= $('#gradeTextEntry').val();
        var err = '';
        if (titleCombo == '' && titleTextEntry == '' ) {
            err += '<p>Qualification and/or module(s) could not be saved.</p>';
        }
        if (nian == '' || yue == '') {
            err += '<p>You must enter the qualification date.</p>';
        }
        if (awardingBodyCombo == '' && awardingBodyTextEntry == '') {
            err += '<p>One or more mandatory fields have not been filled.</p>';
        }
        if (gradeCombo == '?' && gradeTextEntry == '') {
            err += '<p>One or more mandatory fields have not been filled.</p>';
        }
        $('.errorTxt').html(err);
        if (err == '') {
            $('form').submit()
        } else {
            scrollTo(0,0);
        }

    }
    $(function () {
        var cboQualMonth_selected = "<?= $model->cboQualMonth ?>"
        $('#yue').find("option[value='"+cboQualMonth_selected+"']").attr("selected",true);
        var cboQualYear_selected = "<?= $model->cboQualYear ?>"
        $('#nian').find("option[value='"+cboQualYear_selected+"']").attr("selected",true);
        var cboTitle_selected = "<?= $model->cboTitle ?>"
        $('#titleCombo').find("option[value='"+cboTitle_selected+"']").attr("selected",true);

        var cboAwardingBody_selected = "<?= $model->cboAwardingBody ?>"
        $('#awardingBodyCombo').find("option[value='"+cboAwardingBody_selected+"']").attr("selected",true);
        var cboGrade_selected = "<?= $model->cboGrade ?>"
        $('#gradeCombo').find("option[value='"+cboGrade_selected+"']").attr("selected",true);

    })

</script>
