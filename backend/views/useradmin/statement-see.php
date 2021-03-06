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
                        <form name="Form1" method="post" action="PersonalStatementServlet?id=64e9ad6517fad857bee834ba7a13&amp;ran=1fdzlq20zjiow">

                            <!--display 'PersonalStatement' clip -->
                            <p><input type="hidden" name="from" value="fromStatementPreview"></p><p><input type="hidden" name="hidUnicodeMsgShown" value=" " id="hidUnicodeMsgShown"></p>
                            <p class="warningTxt">You have used 4 of 47 lines based on the preview and 104 of 4000 characters.</p><p class="warningTxt">Your completed statement must be between 1,000 and 4,000 characters (maximum 47 lines) including spaces </p><p class="warningTxt">Last saved date: 06 March 2021 08:24:04</p><table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr><td>&nbsp;</td><td></td><td></td></tr>
                                <tr><td class="warningTxt">1</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>php php php php php php</td></tr>
                                <tr><td class="warningTxt">2</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>java java java java java jva</td></tr>
                                <tr><td class="warningTxt">3</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>mysql mysql mysql</td></tr>
                                <tr><td class="warningTxt">4</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>golang golanng golanng golang</td></tr>
                                </tbody></table>
                            <ul><li><a href="/useradmin/statement">edit</a></li></ul>
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
                                        <input type="checkbox" name="chkComplete" id="chkComplete">&nbsp;section completed
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
        if($('#chkComplete').is(':checked')) {
            var err = '';
            var mes = 'php传过来的字符串';
            if (mes.length < 1000) {
                alert('勾选部分保存，要验证数据是否大于1000个字符')
                alert('字符串长度：'+mes.length)
                err = ' <p>Your personal statement is less than 1000 characters long.<br></p>';
                $('.errorTxt').html(err);
                scrollTo(0,0);
            }

        }else {
            alert('没有勾选部分保存，正常保存')
        }
    }

</script>