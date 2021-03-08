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
                    <a href="/useradmin/welcome">
                        Welcome
                    </a>&gt;
                    Personal details
                </div>
                <!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">
                    <p class="bold">Where is your postal address?<span class="Req">*</span></p>
                    <!--Form starts here-->
                    <div class="thisForm">

                        <!--clip starts-->

                        <form name="Form1" method="post" action="">
                            <!-- Main area of page provided here by re-use of a registration servlet clip -->
                            <p><input type="hidden" name="from" value="8"></p><p><input type="hidden" name="functionname" value="register"></p><!--Home location -->

                            <!--Ucascard Already Held -->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="locationRadioOverseas">Non UK/International</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="radio" name="radioLocation" value="O" checked class="floatLeft" id="locationRadioOverseas">
                                    <a href="#" onclick="launchFieldHelp('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.OSEAS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->


                            <br>

                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">
                                <table><tbody><tr>
                                        <td>
                                            <a href="/useradmin/personaldetails">
                                            <input type="button" name="btnPrevious" value="previous" class="submitBtn">
                                            </a>
                                            &nbsp;&nbsp;
                                            <input type="submit" name="btnNext" value="next"  class="submitBtn">


                                        </td>
                                    </tr></tbody></table>
                            </div>
                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->
                        </form>
                        <!--clip ends-->
                    </div>
                    <!--close thisForm div-->
                    <!--Form ends here-->
                </div>
                <!--midBoxInternalWide ends here-->
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