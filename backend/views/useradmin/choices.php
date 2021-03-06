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
                <h1 class="EN">Choices</h1>
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
                    Choice summary
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">

                    <div class="thisForm"><!--Form starts here-->
                        <form name="Form1" onsubmit="return setJavaEnabled()" method="post" action="ChoicesServlet?id=e1836169083c2c1968b8b6f43643&amp;ran=16km4zkhauw1r">
                            <p class="bold">Please make sure you have read the latest information about course fees on our <a href="https://www.ucas.com/ucas/undergraduate/finance-and-support/" target="_blank">student finance</a> pages (opens in a new window).</p>

                            <p class="bold"><span class="warningTxt">Please add a choice. You can make a maximum of 5 choices.</span> <br><br>Compulsory fields are marked with an asterisk (<span class="Req">*</span>).<br><br>Before leaving this section please click 'save' to avoid losing any information. When you have finished all the entries please click on 'section completed' and 'save'.</p>

                            <div class="video">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661051070344701874" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>


                            <ul>
                                <li><a href="/useradmin/add-choice">add a choice</a></li>
                            </ul>

                            <hr>
                            <!--//display data -->
                            <?php if (!$choices){?>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <!--//loop through choices collection and display -->

                                <tbody><tr><td>No details entered.</td></tr>

                                </tbody>
                            </table>
                            <?php }else{ ?>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <!--//loop through choices collection and display -->

                                <tbody>
                                <?php foreach ($choices as $key=>$val){?>
                                <tr>
                                    <td colspan="2" width="481" valign="top">

                                        <p class="bold"><?= $val->txtInstCode1.'('.$val->txtInstCode.')'?></p>

                                        <p class="bold"><?= $val->txtCourseCode?></p>
                                    </td>
                                    <td rowspan="2" valign="top">
                                        <ul>
                                            <li><a href="<?= \yii\helpers\Url::to(['useradmin/add-choice','id'=>$val->id])?>">edit</a></li>
                                            <li><a id="delChoice1" href="<?= \yii\helpers\Url::to(['useradmin/del-choice','id'=>$val->id])?>">remove</a></li>
                                            <li style="display:none;"><a id="chcLinkDel1" href="ChoicesServlet?functionname=delete&amp;choiceId=1&amp;id=c58898d4e06afa8944ded19eb46d&amp;ran=uxgbdf445xnp">remove</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <p>Campus: <?= $val->txtCampusCode?></p>
                                        <p>Start date: <?= $val->txtStartDate?></p>

                                    </td>
                                    <td valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody><tr><td colspan="2">&nbsp;</td></tr>
                                            <tr><td>Live at home while studying?</td><td><?= $val->rdHome?></td></tr>
                                            <tr><td colspan="2">&nbsp;</td></tr>
                                            <tr><td>Deferred entry?</td><td>N</td></tr>
                                            <tr><td colspan="2">&nbsp;</td></tr>
                                            <tr><td nowrap="nowrap">Point of entry:&nbsp;&nbsp;</td><td><?= $val->txtPOE?> &nbsp;&nbsp;</td></tr>

                                            </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr></td></tr>
                                <?php }?>

                                <tr><td colspan="2"><p class="warningTxt">NOTE:<br>The following admissions test may be required for entry on this course:<br>Institution's own test (IOT). </p></td><td>&nbsp;</td></tr>


                                <tr><td colspan="3"><hr></td></tr>

                                <tr>
                                    <td colspan="5">
                                        <div class="thisForm">
                                            <div class="thisFormElem">
                                                <div class="thisFormTxt">&nbsp;</div>
                                                <div class="thisFormField">
                                                    <input type="checkbox" name="chkComplete">
                                                    &nbsp;section completed
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <div class="thisForm">
                                            <div class="thisFormElem">
                                                <div class="thisFormTxt">&nbsp;</div>
                                                <div class="thisFormField">
                                                    <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                                                    <input type="submit" name="btnSave" value="save" class="submitBtn">

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody></table>
                            <?php } ?>
                            <!-- Hidden field for use by servlet -->
                            <input type="hidden" name="from" value="fromChoiceSummary">
                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->
                            <!-- Hidden field for use by servlet -->
                            <input type="hidden" name="from" value="fromChoiceSummary">
                            <!-- non-visible text box to prevent IE bug where hitting enter on form with single field doesn't submit -->
                            <input type="text" style="position: absolute; top: -1000px; left: -1000px; width: 0px; visibility: hidden;">

                            <!-- Hidden field for use by servlet -->
                            <input type="hidden" id="ssid" name="ssid" value="e1836169083c2c1968b8b6f43643">
                            <!-- On screen message for Confirmation deleting a choice -->
                            <input type="hidden" id="ConfirmDelMsg" name="ConfirmDelMsg" value="Are you sure you want to remove this choice?">
                        </form>
                    </div><!--close thisForm div-->

                    <!--Form ends here-->
                    <div class="clearDiv">&nbsp;</div>
                </div>
                <div class="clearDiv">&nbsp;</div>
            </div>



        </div>


        <div class="clearDiv">&nbsp;</div>
        <!--display 'Footer' clip -->
        <div id="footer">
            <ul class="floatLeft">
                <li><a href="https://www.ucas.com/corporate/about-us" onclick="window.open(this.href);return false;">About us</a> | </li> <li><a href="https://www.ucas.com/corporate/about-us/terms-and-conditions/terms-and-conditions-use-apply" onclick="window.open(this.href);return false;">Terms &amp; conditions</a> | </li><li><a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" onclick="window.open(this.href);return false;">Privacy policy</a> </li>
            </ul>
            <p id="copy" class="floatRight">&copy; UCAS 2021</p>
        </div><!--footer ENDS here-->

        <div class="clearDiv">&nbsp;</div>
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->


</body>
</html>