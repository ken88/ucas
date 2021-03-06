<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Employment</h1>
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
                    <a href="welcome">Welcome</a> &gt;
                    Employment summary
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">
                    <!--Form starts here-->
                    <div class="thisForm">
                        <!--clip starts-->
                        <form name="Form1" method="post" action="">
                            <!--display 'Employment' clip -->
                            <p><input type="hidden" name="from" value="fromEmploymentSummary"></p><p class="bold">Please give the names and addresses of your most recent employers. If you have not had any paid work experience, you can leave this section blank, but you will need to mark it as complete.</p><script>
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
                                        setCookie("UCAS_Employment",false,365);
                                    }
                                    else
                                    {
                                        $("#showHideVideo").html("Hide video");
                                        setCookie("UCAS_Employment",true,365);
                                    };
                                    visible = !visible;
                                    return false;
                                };
                            </script>
                            <div class="video">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661051711021625506" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>
                            <p class="bold"><span class="warningTxt">You can add details of up to 5 employers.</span></p><ul>
                                <li><a href="add-employment">add an employer</a></li>
                            </ul>
                            <hr>
                            <?php if(!$employer){ ?>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr><td colspan="2" width="520">No details entered.</td></tr><tr><td colspan="2"><hr></td></tr>
                                </tbody></table>
                            <?php }else{ ?>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                <?php foreach ($employer as $key=>$val){?>
                                <tr>
                                    <td width="481"><p class="bold"><?php $val->txtEmpName ?></p><p>Address: <?= $val->txtEmpAddress ?></p>
                                        <p>Nature of work: <?= $val->txtEmpNature ?></p>
                                        <p>From <?= $val->cboStartMonth?> <?= $val->cboStartYear ?> to <?= $val->cboEndMonth ?> <?= $val->cboEndYear ?>, <?= $val->radioEmpTypeStr ?></p></td>
                                    <td><ul><li><a href="<?= \yii\helpers\Url::to(['useradmin/add-employment', 'id'=>$val->id])?>">edit</a></li>
                                            <li><a id="delEmployer2" href="<?= \yii\helpers\Url::to(['useradmin/del-employment', 'id'=>$val->id])?>">remove</a></li>
                                            <li style="display:none;"><a id="empLinkDel2" href="EmploymentServlet?functionname=delete&amp;empId=2&amp;id=16b456d9812f48ee415bba4cd4e5&amp;ran=zqb5leqfye7r">remove</a></li></ul></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <?php }?>
                                </tbody></table>
                            <?php } ?>
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="hidden" name="chkComplete" value="0">
                                        <input value="1" type="checkbox" name="chkComplete" <?php if ($model->chkComplete) echo 'checked' ?> id="chkComplete">&nbsp;section completed
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