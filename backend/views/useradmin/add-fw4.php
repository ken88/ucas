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
                            <input type="hidden" name="txtTitle" value="International Computer Driving Licence">
                            <h2 class="inPage">European/International Computer Driving Licence</h2>
                            <p class="bold">Please enter details below, using the 'other' boxes only where the applicable option cannot be found in the lists provided.</p>
                            <p></p>
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
                            <!--Grade-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="grade">Result<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboGrade" size="1" onchange="document.forms[0].gradeTextEntry.value='';" class="floatLeft" id="gradeCombo">
                                            <option value="?" selected="selected">Please select...</option>
                                            <option value="">Pending</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='Pass') echo 'selected' ?>  value="Pass">Pass</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtGrade" value="<?= \common\logics\Func::getAttributes($data, 'txtGrade')?>" size="16" maxlength="20" onchange="if(document.forms[0].gradeCombo){document.forms[0].gradeCombo.selectedIndex=0;}" class="floatLeft" id="gradeTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><br>
                            <div class="clearDiv">&nbsp;</div>





                            <!--module begin-->
                            <?php
                            $cboModYears = \common\logics\Func::getAttributes($data, 'cboModYear0');
                            if (!($cboModYears && count($cboModYears)>0)){?>
                                <div id="unit" class="unit">
                                    <hr>
                                    <h2 class="inPage">Module / unit <span class="num">1</span></h2>
                                    <!--Module Title-->
                                    <div class="thisFormElem"><!--open form element -->
                                        <div class="thisFormTxt">
                                            <label for="module title">Subject</label>
                                        </div>
                                        <div class="thisFormField">
                                            <input type="text" name="txtModTitle0[]" value="" size="39" maxlength="50" onchange="if(document.forms[0].modTitleCombo0){document.forms[0].modTitleCombo0.selectedIndex=0;}" class="floatLeft" id="modTitleTextEntry0">
                                            <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODTITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        </div>
                                    </div><!--close form element -->
                                    <!--Module Start date-->
                                    <div class="thisFormElem">
                                        <!--open form element -->
                                        <div class="thisFormTxt">
                                            <label for="modDateCombo">Qualification date</label>
                                        </div>
                                        <div class="thisFormField">
                                            <div id="fullWidth"><select name="cboModMonth0[]" size="1" class="floatLeft" id="modDateCombo0">
                                                    <option value="-">Month</option>
                                                    <?php foreach (Yii::$app->params['months'] as $k=>$month){?>
                                                        <option value="<?= $k?>"><?= $month?></option>
                                                    <?php } ?>
                                                </select>
                                                <select name="cboModYear0[]" size="1" class="floatLeft" id="modDateCombo0">
                                                    <option value="">Year</option>
                                                    <?php foreach(\common\logics\Func::generateYear() as $year){?>
                                                        <option  value="<?= $year?>"><?= $year?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        </div>
                                    </div><!--close form element -->
                                    <!--Module Grade-->
                                    <div class="thisFormElem"><!--open form element -->
                                        <div class="thisFormTxt">
                                            <label for="module grade">Result</label>
                                        </div>
                                        <div class="thisFormField">
                                            <input type="text" name="txtModGrade0[]" value="" size="14" maxlength="15" class="floatLeft" id="modGradeTextEntry0">
                                            <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODGRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                        </div>
                                    </div><!--close form element -->
                                    <div class="clearDiv">&nbsp;</div>
                                </div>
                                <?php
                            }else{
                                $cboModMonths =\common\logics\Func::getAttributes($data, 'cboModMonth0');
                                $txtModGrades = \common\logics\Func::getAttributes($data, 'txtModGrade0');
                                $txtModTitles = \common\logics\Func::getAttributes($data, 'txtModTitle0');
                                $cboModTitles = \common\logics\Func::getAttributes($data, 'cboModTitle0');
                                ?>

                                <?php foreach ($cboModYears as $key=>$cboModYear){?>
                                    <div id="unit" class="unit">
                                        <hr>
                                        <h2 class="inPage">Module / unit <span class="num">1</span></h2>
                                        <!--Module Title-->
                                        <div class="thisFormElem"><!--open form element -->
                                            <div class="thisFormTxt">
                                                <label for="module title">Subject</label>
                                            </div>
                                            <div class="thisFormField">
                                                <input type="text" name="txtModTitle0[]" value="<?= \common\logics\Func::getAttributes($data, 'txtModTitle0')[$key] ?>" size="39" maxlength="50" onchange="if(document.forms[0].modTitleCombo0){document.forms[0].modTitleCombo0.selectedIndex=0;}" class="floatLeft" id="modTitleTextEntry0">
                                                <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODTITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                            </div>
                                        </div><!--close form element -->
                                        <!--Module Start date-->
                                        <div class="thisFormElem">
                                            <!--open form element -->
                                            <div class="thisFormTxt">
                                                <label for="modDateCombo">Qualification date</label>
                                            </div>
                                            <div class="thisFormField">
                                                <div id="fullWidth"><select name="cboModMonth0[]" size="1" class="floatLeft" id="modDateCombo0">
                                                        <option value="-">Month</option>
                                                        <?php foreach (Yii::$app->params['months'] as $k=>$month){?>
                                                            <option <?php if ($k==\common\logics\Func::getAttributes($data, 'cboModMonth0')[$key]) echo 'selected'?> value="<?= $k?>"><?= $month?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <select name="cboModYear0[]" size="1" class="floatLeft" id="modDateCombo0">
                                                        <option value="">Year</option>
                                                        <?php foreach(\common\logics\Func::generateYear() as $year){?>
                                                            <option <?php if ($year == \common\logics\Func::getAttributes($data, 'cboModYear0')[$key]) echo 'selected' ?> value="<?= $year?>"><?= $year?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                            </div>
                                        </div><!--close form element -->
                                        <!--Module Grade-->
                                        <div class="thisFormElem"><!--open form element -->
                                            <div class="thisFormTxt">
                                                <label for="module grade">Result</label>
                                            </div>
                                            <div class="thisFormField">
                                                <input type="text" name="txtModGrade0[]" value="<?= \common\logics\Func::getAttributes($data, 'txtModGrade0')[$key]?>" size="14" maxlength="15" class="floatLeft" id="modGradeTextEntry0">
                                                <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODGRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                            </div>
                                        </div><!--close form element -->
                                        <div class="">
                                            <?php if ($key!=0){ ?>
                                                <input onclick="del_div(this)" type="button" value="delete" id="3" class="del" style="margin-top: 10px; margin-left: 220px;">
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php }?>

                            <?php }?>
                            <!--module end-->

                            <div id="parent"></div>






                            <hr>
                            <br>
                            <input type="button" name="btnAddModule" value="add another module" onclick="addDiv();" class="seeListBtn">

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
                            <input type="submit" name="btnSave" value="save" class="submitBtn">

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
    var arr = '<?= $arr;?>';
    var obj = eval('(' + arr + ')');
    $('#titleCombo').change(function () {
        var val = $(this).val()
        var strHtml = '';
        if (val != '') {
            var len = obj[val].length;
            strHtml = "<option value=''>Please select ...</option>"
            for(var i = 0 ; i < len; i++) {
                strHtml += "<option value='"+obj[val][i]+"'>"+obj[val][i]+"</option>"
            }
        } else {
            strHtml = "<option value=''>Please select ...</option>"
        }

        // console.log(obj[val])
        $('.sub-x').html(strHtml);
    })



    //divs是创建各个控件时赋值变量ID所用，number是计数用
    var number = document.getElementsByClassName('unit').length;
    var divs = 0;
    var addDiv = function () {
        if (number == 10) return;//最多添加5个div
        var oDiv = document.createElement("div");
        document.getElementById("parent").appendChild(oDiv);
        oDiv.id = "div_" + divs;
        oDiv.className = 'unit';
        oDiv.style.width = "100%";
        oDiv.style.height = "auto";
        oDiv.style.marginTop = "30px";
        var _div = document.getElementById("unit").innerHTML;
        document.getElementById(oDiv.id).innerHTML = _div;

        divs++;
        number++;
        $('#'+oDiv.id).find('.num').text(number)
        $('#parent').find('.Req').text('')

        $('.del').click(function () {
            $("#div_"+this.id).remove();
        })
    }

    function del_div(t){
        $(t).parents('.unit').remove()
    }

</script>