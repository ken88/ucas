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



                        <form name="Form1" method="post" action="">

                            <!--display 'Qual Details' clip -->
                            <h2 class="inPage">Extended Project (Level 3)</h2>
                            <p class="bold">Please enter details below, using the 'other' boxes only where the applicable option cannot be found in the lists provided.</p>
                            <p></p>
                            <!--Title-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="title">Subject<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtTitle" value="<?= \common\logics\Func::getAttributes($data, 'txtTitle')?>" size="39" maxlength="50" onchange="if(document.forms[0].titleCombo){document.forms[0].titleCombo.selectedIndex=0;}" class="floatLeft" id="titleTextEntry">
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
                                            <?php foreach (Yii::$app->params['months'] as $k=>$month){?>
                                                <option <?php if ($k==\common\logics\Func::getAttributes($data, 'cboQualMonth')) echo 'selected'?> value="<?= $k?>"><?= $month?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="cboQualYear" size="1" class="floatLeft" id="qualDateCombo">
                                            <option value="">Year</option>
                                            <?php foreach(\common\logics\Func::generateYear() as $year){?>
                                                <option <?php if ($year == \common\logics\Func::getAttributes($data, 'cboQualYear')) echo 'selected' ?> value="<?= $year?>"><?= $year?></option>
                                            <?php }?>
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
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='AQA') echo 'selected' ?>  value="AQA">AQA</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='ASDAN') echo 'selected' ?> value="ASDAN">ASDAN</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='EDI') echo 'selected' ?> value="EDI">EDI</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='Edexcel') echo 'selected' ?> value="Edexcel">Edexcel</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='OCR') echo 'selected' ?> value="OCR">OCR</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='VTCT') echo 'selected' ?> value="VTCT">VTCT</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='WJEC') echo 'selected' ?> value="WJEC">WJEC</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtAwardingBody" value="<?= \common\logics\Func::getAttributes($data, 'txtAwardingBody')?>" size="7" maxlength="7" onchange="if(document.forms[0].awardingBodyCombo){document.forms[0].awardingBodyCombo.selectedIndex=0;}" class="floatLeft" id="awardingBodyTextEntry">
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
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='A*') echo 'selected' ?> value="A*">A*</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='A') echo 'selected' ?> value="A">A</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='B') echo 'selected' ?> value="B">B</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='C') echo 'selected' ?> value="C">C</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='D') echo 'selected' ?> value="D">D</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='E') echo 'selected' ?> value="E">E</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtGrade" value="<?= \common\logics\Func::getAttributes($data, 'txtGrade')?>" size="16" maxlength="20" onchange="if(document.forms[0].gradeCombo){document.forms[0].gradeCombo.selectedIndex=0;}" class="floatLeft" id="gradeTextEntry">
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


                            <?php if (Yii::$app->request->get('id')){ ?>
                                <input style="margin-left: 10px" onclick="window.location.href='<?= \yii\helpers\Url::to(['useradmin/delete-qualifications', 'id'=>Yii::$app->request->get('id')])?>'" type="button" name="btnDelete" value="delete" class="submitBtn">
                            <?php }?>



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
    $('input[name=btnSaveAndAdd]').click(function () {
        $('form').append('<input type="hidden" name="saveAndAdd" value="1" />')
        $('form').submit()
    })
</script>
