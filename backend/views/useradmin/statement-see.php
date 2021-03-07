<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Personal statement</h1>
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
                    <a href="/useradmin/welcome">Welcome</a> &gt;
                    <a href="/useradmin/statement">Personal statement</a> &gt;
                    preview
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <p class="bold">To make changes to this section click 'edit' below. Before leaving this section please click 'save' to avoid losing any information. When you have finished, please tick the 'section completed' box and click 'save'. </p>
                        <div class="errorTxt"></div>
                        <!--clip starts-->
                        <form name="Form1" method="post" action="">

                            <!--display 'PersonalStatement' clip -->
                            <p><input type="hidden" name="from" value="fromStatementPreview"></p><p><input type="hidden" name="hidUnicodeMsgShown" value=" " id="hidUnicodeMsgShown"></p>
                            <p class="warningTxt">You have used <?= count($model->taPersonalStatementArr)?> of 47 lines based on the preview and <?= strlen($model->taPersonalStatement)?> of 4000 characters.</p><p class="warningTxt">Your completed statement must be between 1,000 and 4,000 characters (maximum 47 lines) including spaces </p><p class="warningTxt">Last saved date: <?= date('d M Y H:i:s',$model->update_time) ?></p><table border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td>&nbsp;</td><td></td><td></td>
                                </tr>
                                <?php foreach ($model->taPersonalStatementArr as $key=>$val){ ?>
                                <tr>
                                    <td class="warningTxt"><?= ++$key?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?= $val?></td>
                                </tr>
                                <?php } ?>
                                </tbody></table>
                            <ul><li><a href="<?= \yii\helpers\Url::to(['useradmin/edit-statement'])?>">edit</a></li></ul>
                            <hr>
                            <div class="clearDiv">&nbsp;</div><p><strong>Make sure your personal statement is your own work.</strong></p><p>We'll carry out checks to verify your personal statement is your own work. Provided it is your own work, you can use your personal statement from your application last year. If it appears to have been copied from another source, we'll inform the universities and colleges to which you have applied. They will then take the action they consider appropriate. We'll also contact you by email to tell you this has happened.</p><br>
                            <div style="display: none;" id="unicodeMsgWarningFooter">
                                <span class="warningTxt">In your personal statement you have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.<br><br>Please check the substituted characters version. Then preview your personal statement, mark the section as complete and click 'save'. </span>
                            </div>
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="hidden" name="chkComplete" value="0">
                                        <input type="checkbox" value="1" <?php if ($model->chkComplete) echo 'checked' ?> name="chkComplete" id="chkComplete">&nbsp;section completed
                                    </div>
                                </div>
                            </div>


                            <!--display 'save' button clip -->
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
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
            <input type="hidden" name="taPersonalStatement" value="<?= $model->taPersonalStatement ?>">


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
    //var mes = "<?//= $model->taPersonalStatement ?>//";
    function check() {
        var txt = $('input[name=taPersonalStatement]').val()
        var err = '';
           if (txt.length < 1000 || txt.length > 4000) {
               err = ' <p>Your personal statement is less than 1000 characters long.<br></p>';
               $('.errorTxt').html(err);
               scrollTo(0,0);
           }else {
               $('form').submit()
           }
    }

</script>