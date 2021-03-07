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
                    <a href="/useradmin/welcome">Welcome</a> &gt;
                    Verify email
                </div><!--breadcrumb ENDS here-->
                <hr>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <!--<p class="bold">The email verification code has been sent to <strong><<APPLICANT_EMAIL_ADDRESS>></strong>. To confirm that this address is valid please enter the code from the relevant email in the box below.<br /><br /> If this email is not in your inbox then there are three possible reasons for this:<br /><br /><ul class="display"><li>Your computer email filter settings or those maintained by your internet service provider may have diverted the message to a junk/spam mail folder. Please check this.<br />&nbsp;</li><li>Your internet service provider may be extremely busy, and therefore may not have been able to pass on our message. Please be patient and look again later.<br />&nbsp;</li><li>The email address recorded here as above may be incorrect. You can change the email address in the Personal details section of your application. If you do this you must click on 'save' to save the new details. You must then request that the verification code is reissued by clicking the relevant link below.</ul><br />If the email containing the code cannot be found as above then you should:<br /><br /><ol class="display"><li>add our sending address <a href= "mailto:enquiries@ucas.ac.uk" class="plain">enquiries@ucas.ac.uk</a> to your list of approved senders on your email system (this can usually be done by adding it to your address list), and<br />&nbsp;</li><li>request that the verification code is reissued by clicking the relevant link below. An email will then be sent containing a new code.</ol><br />If the code is not accepted please make sure that the email was sent <strong>after</strong> you requested a new code. If it was sent <strong>earlier</strong>, then the code will be invalid because you requested another verification code since that time. Make sure you use the code from the most recent email. <br /><br />Please enter your email verification code below to verify your address is <strong><<APPLICANT_EMAIL_ADDRESS>></strong>:</p>-->

                        <!--clip starts-->
                        <form name="Form1" method="post" action="/useradmin/index">
                            <input type="hidden" id="code" value="<?= $code;?>">
                            <input type="hidden" id="res" value="<?= $res;?>">
                            <!--display 'Verify Email Generate Code' clip -->

                            <div class="errorTxt"></div>
                            <p>The email verification code has been sent to <strong><?= $email;?></strong>. To confirm that this address is valid please enter the code from the relevant email in the box below.<br><br> If this email is not in your inbox then there are three possible reasons for this:<br><br></p>
                            <ul class="display">
                                <li>Your computer email filter settings or those maintained by your internet service provider may
                                    have diverted the message to a junk/spam mail folder. Please check this.
                                    <br>&nbsp;
                                </li>
                                <li>Your internet service provider may be extremely busy, and therefore may not
                                    have been able to pass on our message. Please be patient and look again later.
                                    <br>&nbsp;
                                </li>
                                <li>The email address recorded here as above may be incorrect. You can change the email
                                    address in the Personal details section of your application.
                                    If you do this you must click on 'save' to save the new details.
                                    You must then request that the verification code is reissued by
                                    clicking the relevant link below.
                                </li>
                            </ul>
                            <br>
                            If the email containing the code cannot be found as above then you should:
                            <br>
                            <br>
                            <ol class="display">
                                <li>
                                    add our sending address
                                    <a href="mailto:enquiries@ucas.ac.uk" class="plain">
                                        enquiries@ucas.ac.uk
                                    </a>
                                    to your list of approved senders on your email system
                                    (this can usually be done by adding it to your address list),
                                    and
                                    <br>&nbsp;
                                </li>
                                <li>request that the verification code is reissued by clicking the relevant link below.
                                    An email will then be sent containing a new code.
                                </li>
                            </ol>
                            <br>
                            If the code is not accepted please make sure that the email was sent
                            <strong>after</strong> you requested a new code. If it was sent
                            <strong>earlier</strong>,
                            then the code will be invalid because you requested another verification code
                            since that time. Make sure you use the code from the most recent email.
                            <br>
                            <br>
                            Please enter your email verification code below to verify your address is
                            <strong><?= $email;?></strong>:
                            <p></p>
                            <p>
                                <input type="text" name="txtEnterCode" value="" size="8" maxlength="20" class="floatLeft" id="enterCodeTextEntry">
                                <span class="floatLeft">&nbsp;</span><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.VERIFYENTERCODE.FIELD.ENTERCODE'); return false;"></a>
                            </p>
                            <div id="cardIcon">
                                <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.VERIFYENTERCODE.FIELD.ENTERCODE'); return false;">
                                    <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help">
                                </a></div><p></p><div id="clearDiv"></div><p><br><br>
                                <input type="button" name="btnVerifyEmail" value="verify email " onclick="check()" class="submitBtn">
                            </p>
                            <p>
                                <strong>No verification code</strong>
                                <br>
                                If you have not received the verification email, please read through the possible reasons above, or
                                <a href="/useradmin/send-cf">
                                    click here to reissue a code
                                </a>.
                            </p>

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
<script type="text/javascript">
    function check() {
        var enterCodeTextEntry = $('#enterCodeTextEntry').val();
        var code = $('#code').val();
        if (enterCodeTextEntry != code) {
            err = '<p>The code you have entered is incorrect.</p>';
            $('.errorTxt').html(err);
            scrollTo(0,0);
        }else {
            $(Form1).submit();
        }
    }
</script>