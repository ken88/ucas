<?php include_once "top.php"; ?>
<div id="logo" class="floatLeft">
    <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS"/>
</div><!--logo ENDS here-->
<div class="clearDiv">&nbsp;</div>
<div id="strapLineApply">
    <h1 class="EN">Education</h1>
    <div id="logOut"><a href="#">Log out</a></div>
</div><!--strapLineApply ENDS here-->
<div id="strapLineApplyPrint">
    <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply"/>
</div><!--StrapLinePrint ENDS here-->
</div>
<!--header end -->

<div class="clearDiv"></div>

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
                <form name="Form1" method="post" action="">
                    <!--display 'Education' clip -->
                    <input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here"
                           id="hidCharWarningMsg">
                    <p><input type="hidden" name="from" value="fromEducationSummary"></p>
                    <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p>
                    <p class="bold">Click on the 'add new school/college/centre' to add the centres you have attended.
                        Enter details of qualifications that you have achieved or are in the process of achieving at
                        that school/college/centre. Click on 'section completed' and 'save' when you have finished.</p>
                    <script>
                        function setCookie(c_name, value, exdays) {
                            var exdate = new Date();
                            exdate.setDate(exdate.getDate() + exdays);
                            var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
                            document.cookie = c_name + "=" + c_value;
                        }

                        var visible = true;

                        function showHideVideo() {
                            $("#ucastv").toggle('slow', 'swing', function () {
                                return false;
                            });
                            if (visible) {
                                $("#showHideVideo").html("Show video");
                                setCookie("UCAS_Education", false, 365);
                            } else {
                                $("#showHideVideo").html("Hide video");
                                setCookie("UCAS_Education", true, 365);
                            }
                            ;
                            visible = !visible;
                            return false;
                        };
                    </script>

                    <div class="video">
                        <strong>Need guidance?</strong> Watch the video advice below [<a href="#"
                                                                                         onclick="showHideVideo(); return false;"
                                                                                         id="showHideVideo">Hide
                            video</a>].<br>
                        <p id="ucastv">
                            <iframe class="videoIFrame"
                                    src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661051151150093841"
                                    scrolling="no"></iframe>
                            <br>
                            (Unable to view videos here? You can watch them at <a>www.ucas.com/connect/videos</a>
                            instead)
                        </p>
                    </div>
                    <div class="errorTxt"></div>
                    <p class="bold"><span class="warningTxt">You can add up to 10 schools/colleges/centres.</span></p>
                    <ul>
                        <li><a href="/useradmin/add-education">add new school/college/centre</a></li>
                    </ul>
                    <hr>
                    <?php if (!$schools) { ?>
                        <table border="0" cellpadding="0" cellspacing="0" id="eduSummary">
                            <tbody>
                            <tr>
                                <td colspan="7" width="520">No schools/colleges/centres entered.</td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <hr>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <table border="0" cellpadding="0" cellspacing="0" id="eduSummary">
                            <tbody>
                            <?php foreach ($schools

                            as $key => $val){ ?>
                            <tr>

                                <td colspan="7" width="481">
                                    <p><span class="bold"><?= $val->txtCentreName ?></span>
                                        (<?= $val->txtCentreNumber ?>
                                        , <?= $val->cboStartMonth . '/' . $val->cboStartYear ?>
                                        - <?= $val->cboFinishMonth . '/' . $val->cboFinishYear ?>
                                        , <?= $val->rdAttendance ?>)</p>

                                </td>

                                <td>
                                    <ul class="skinny">
                                        <li>
                                            <a href="<?= \yii\helpers\Url::to(['useradmin/add-education', 'id' => $val->id]) ?>">edit</a>
                                        </li>
                                        <li><a id="delSchool1"
                                               href="<?= \yii\helpers\Url::to(['useradmin/del-education', 'id' => $val->id]) ?>">remove</a>
                                        </li>
                                        <li style="display:none;"><a id="schLinkDel1"
                                                                     href="EducationServlet?functionname=delete&amp;edeId=1&amp;from=fromEducationSummary ">remove</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8">&nbsp;</td>
                            </tr>

                            <!-- 资格开始 -->
                            <?php foreach ($val->qualifications as $k => $v) {
                                $data = json_decode($v->content, true);
                                ?>
                                <tr>
                                    <td class="eduCol" colspan="3">
                                        <a href="<?= \yii\helpers\Url::to(['useradmin/add-fw', 'id' => $v->id, 'val' => $v->val]) ?>">
                                            <?php
                                            if (isset($data['txtTitle']) && !empty($data['txtTitle']))
                                                echo $data['txtTitle'];
                                            elseif (isset($data['cboTitle']) && !empty($data['cboTitle']))
                                                echo $data['cboTitle'];
                                            else
                                                echo '';
                                            ?>
                                        </a>
                                    </td>
                                    <td class="eduCol">
                                        <?php
                                        if (isset($data['txtGrade']) && !empty($data['txtGrade']))
                                            echo $data['txtGrade'];
                                        elseif (isset($data['cboGrade']) && !empty($data['cboGrade']))
                                            echo $data['cboGrade'];
                                        else
                                            echo '';
                                        ?>
                                    </td>
                                    <td class="eduCol">
                                        <?= $data['cboQualMonth'] . '/' . $data['cboQualYear'] ?>
                                    </td>
                                    <td class="eduCol">
                                        <?php
                                        if (isset($data['cboAwardingBody']) && !empty($data['cboAwardingBody']))
                                            echo $data['cboAwardingBody'];
                                        elseif (isset($data['txtAwardingBody']) && !empty($data['txtAwardingBody']))
                                            echo $data['txtAwardingBody'];
                                        else
                                            echo '';
                                        ?>
                                    </td>
                                    <td class="eduCol">
                                        <?php
                                        if (\common\logics\Func::getAttributes($data, 'cboModYear0'))
                                            echo '(' . count(\common\logics\Func::getAttributes($data, 'cboModYear0')) . ' modules)';
                                        ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                </tr>
                            <?php } ?>
                            <!-- 资格结束 -->

                            <tr>
                                <td colspan="8">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <ul class="skinny">
                                        <li>
                                            <a href="<?= \yii\helpers\Url::to(['useradmin/add-qualifications', 'school_id' => $val->id]) ?>">add
                                                qualifications</a></li>
                                    </ul>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="8">
                                    <?php } ?>
                                    <hr>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <?php } ?>

                    <!--Hightest expected qualification-->
                    <div class="thisFormElem">
                        <!--open form element -->
                        <div class="thisFormTxt">
                            <label for="highestExpectedQualCombo">Please state the highest level of qualification you
                                expect to have before you start your course<span class="Req">*</span></label>
                        </div>
                        <div class="thisFormField">
                            <select name="cboHighestExpectedQual" size="1" class="floatLeft"
                                    id="highestExpectedQualCombo">
                                <option value="">Please select...</option>
                                <option <?php if ($model->cboHighestExpectedQual == 'D') echo 'selected' ?> value="D">
                                    Honours degree level or above qualifications
                                </option>
                                <option <?php if ($model->cboHighestExpectedQual == 'B') echo 'selected' ?> value="B">
                                    Below honours degree level qualifications
                                </option>
                                <option <?php if ($model->cboHighestExpectedQual == 'N') echo 'selected' ?> value="N">I
                                    will have no qualifications
                                </option>
                            </select>

                            <a href="#"
                               onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.SUMMARY.FIELD.HIGHESTEXPTECTEDQUAL'); return false;"><img
                                        src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft"
                                        alt="Help"></a>
                        </div>
                    </div><!--close form element -->
                    <div class="thisForm">
                        <div class="thisFormElem">
                            <div class="thisFormTxt">
                                &nbsp;
                            </div>
                            <div class="thisFormField">
                                <input type="hidden" name="chkComplete" value="0">
                                <input type="checkbox" name="chkComplete"
                                       value="1" <?php if ($model->chkComplete) echo 'checked' ?> id="chkComplete">&nbsp;section
                                completed
                            </div>
                        </div>
                    </div>

                    <!--display 'save' button clip -->
                    <div class="thisForm">
                        <div class="thisFormElem">
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">
                                <input type="button" name="btnSave" value="save" onclick="check()" class="submitBtn">
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
        var highestExpectedQualCombo = $('#highestExpectedQualCombo').val();
        var err = '';
        if (highestExpectedQualCombo == '') {
            err += '<p>Please select the highest level of qualification you expect to have before you start your course.</p>';
            $('.errorTxt').html(err);
            scrollTo(0, 0);
        } else {
            $('form').submit()
        }
    }


</script>