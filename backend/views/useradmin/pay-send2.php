<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Declaration</h1>
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
                    Declaration
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <form name="Form1" method="post" action="">

                            <p class="bold">Tick boxes if you agree:</p>
                            <br>
                            <div class="errorTxt"></div>
                            <br>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr><td valign="middle" width="20"><input type="checkbox" id="checkAgreement1" <?php if ($model->checkAgreement1) echo 'checked' ?> name="checkAgreement1" value="1">&nbsp;</td><td id="cardIcon" valign="middle" width="30"><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.PAYSEND.DECLARATION.FIELD.TERMS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" alt="Help"></a></td><td valign="middle">I have read and agree to be bound by the <a href="#" onclick="openPopUp('PopUpServlet', '?functionname=help&amp;lang=1&amp;page=HELP.CONTRACT', 810, 550, 'Declaration'); return false;">declaration</a>.</td></tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
                                <tr><td valign="middle" width="20"><input type="checkbox" id="checkAgreement3" name="checkAgreement3" <?php if ($model->checkAgreement3) echo 'checked' ?> value="1">&nbsp;</td><td id="cardIcon" valign="middle" width="30"><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.PAYSEND.DECLARATION.FIELD.INFOISTRUE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" alt="Help"></a></td><td valign="middle">I confirm that the information given on this application is true, complete and accurate and no information requested or other material information has been omitted.</td></tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
                                <tr><td valign="middle" width="20"><input type="checkbox" id="checkAgreement4" name="checkAgreement4" <?php if ($model->checkAgreement4) echo 'checked' ?> value="1">&nbsp;</td><td id="cardIcon" valign="middle" width="30"><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.PAYSEND.DECLARATION.FIELD.PERSONALDATA'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" alt="Help"></a></td><td valign="middle">I understand that the personal data within my application will be used in the ways explained in the <a href="#" onclick="openPopUp('PopUpServlet', '?functionname=help&amp;lang=1&amp;page=HELP.CONTRACT', 810, 550, 'Declaration'); return false;">declaration</a> and <a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" target="_blank">privacy policy</a>.</td></tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
                                <tr><td valign="middle" width="20"><input type="checkbox" id="checkAgreement5" name="checkAgreement5" <?php if ($model->checkAgreement5) echo 'checked' ?> value="1">&nbsp;</td><td id="cardIcon" valign="middle" width="30"><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.PAYSEND.DECLARATION.FIELD.CANCELAPP'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" alt="Help"></a></td><td valign="middle">I accept that, if I do not fully comply with these requirements, UCAS shall have the right to cancel my application and I shall have no claim against UCAS or any higher education institution or college in relation thereto.</td></tr>
                                </tbody></table>
                            <p><input type="hidden" name="from" value="fromPaymentDeclaration"></p>
                            <p><input type="hidden" name="functionname" value="getCardDetails"></p>
                            <p><input type="hidden" name="performDeclarationCheck" value="true"></p>
                            <p><input type="hidden" name="previousPageFunction" value="reminderMessages"></p>


                            <!--spacer -->
                            <p>&nbsp;</p>
                            <!--end spacer-->
                            <a href="/useradmin/pay-send1">
                                <input type="button" name="btnPrevious" value="previous" onclick="setJavaEnabled()" class="submitBtn">
                            </a>


                            &nbsp;&nbsp;
                            <input type="button" name="submitBtn" value="I agree" onclick="check()" class="submitBtn">


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

        var err = '';
        if(
            $('#checkAgreement1').is(':checked') &&
            $('#checkAgreement3').is(':checked') &&
            $('#checkAgreement4').is(':checked') &&
            $('#checkAgreement5').is(':checked')
        ){
            $(Form1).submit();

        } else {

            err += '<p>You must agree to these 4 items before proceeding.</p>';
        }
        $('.errorTxt').html(err);
        scrollTo(0,0);

    }
    $(function() {
        var Country_selected = "<?= $form_data['Country'] ?? ''?>"
        $("#Country").find("option[value='" + Country_selected + "']").attr("selected", true);
    })
</script>