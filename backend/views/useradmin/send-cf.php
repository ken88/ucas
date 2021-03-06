<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Verify email: Enter code</h1>
                <div id="logOut"><a href="#">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <div class="clearDiv">&nbsp;</div>
        <div id="mainContent">
            <!--menu starts 左面菜单栏开始-->
            <?php include_once "menu.php"; ?>
            <!--menu ends 左面菜单栏结束-->


            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="">Welcome</a> &gt;
                    Verify email
                </div><!--breadcrumb ENDS here-->
                <hr>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <!--<p class="bold">To generate an email verification code click the button below. The email will be sent from <strong>enquiries@ucas.ac.uk</strong> - we recommend that you add this address to your list of contacts. This should prevent our message being diverted into your junk or spam folder.<br /><br /> <strong>Please do not click on the button more than once.</strong></p>-->

                        <!--clip starts-->
                        <form name="Form1" method="post" action="/useradmin/send">

                            <!--display 'Verify Email Generate Code' clip -->
                            <p>
                                To generate an email verification code click the button below. The email will be sent from
                                <strong>enquiries@ucas.ac.uk</strong> - we recommend that you
                                add this address to your list of contacts. This should prevent our message being
                                diverted into your junk or spam folder.
                                <br>
                                <br>
                                <strong>Please do not click on the button more than once.</strong>
                            </p>
                            <p><input type="submit" name="btnGenerateCode" value="generate a verification code" class="submitBtn">
                            </p>
                            <p>This code will be sent to <strong><?= $email;?></strong>.</p>

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
    </div> <!--wrapper ENDS here-->
</div><!--outerWrapper ENDS here-->
<!-- modal box content -->

</body>
</html>