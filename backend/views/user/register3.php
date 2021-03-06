<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register: Postal address</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="register3" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="helpOpen3('appreg/PopUpServlet?functionname=help&lang=1&page=HELP.LOGIN.WHATISAPPLY.FIELD');">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="helpOpen3('appreg/HelpServicesServlet?functionname=help&page=HELP.REGISTRATION.POSTALADDRESS.PAGE')">Help</a></li>
                    </ul><h3>Key</h3>
                    <ul id="key">
                        <li style="display: none;" id="subCharacter">European characters allowed</li>
                        <li id="help" class="last">Help</li>
                    </ul><!--key ENDS here-->
                </div>
                <!--leftNav ENDS here-->
                <!--menu ends-->
                <!-- gatewayContent starts here -->




                <div id="gatewayContent">
                    <div id="breadcrumb">
                        <a href="/user/register">Home</a> &gt;
                        Register
                    </div>
                    <!--breadcrumb ends here-->

                    <!-- progressBar div starts here -->

                    <!-- progressBar div starts here -->
                    <div id="progressBar">
                        <ul>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="on">&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li class="last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->

                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">
                        <p class="bold">Where is your postal address?<span class="Req">*</span></p>

                        <div class="errorTxt"></div>
                        <!-- Form starts here -->
                        <form name="Form1" action="SecurityServlet" method="post" autocomplete="off">

                            <!--Form style starts here-->
                            <div class="thisForm">

                                <!-- Main area of page provided here by a servlet clip -->
                                <p><input type="hidden" name="from" value="8"></p><p><input type="hidden" name="functionname" value="register"></p><!--Home location -->
<!--                                <div class="thisFormElem">-->
<!--                                   -->
<!--                                    <div class="thisFormTxt">-->
<!--                                        <label for="locationRadioHome">UK</label>-->
<!--                                    </div>-->
<!--                                    <div class="thisFormField">-->
<!--                                        <input type="radio" name="radioLocation" value="UK" class="floatLeft" id="locationRadioHome">-->
<!--                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.UK'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--close form element -->
                                <!--Ucascard Already Held -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="locationRadioOverseas">Non UK/International</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="radio" name="radioLocation" value="Non UK/International" checked class="floatLeft" id="locationRadioOverseas">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.OSEAS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Neither Already Held -->
<!--                                <div class="thisFormElem">-->
<!--                                   -->
<!--                                    <div class="thisFormTxt">-->
<!--                                        <label for="locationRadioBFPO">British Forces Post Office (BFPO)</label>-->
<!--                                    </div>-->
<!--                                    <div class="thisFormField">-->
<!--                                        <input type="radio" name="radioLocation" value="British Forces Post Office (BFPO)" class="floatLeft" id="locationRadioBFPO">-->
<!--                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.POSTALADDRESS.FIELD.BFPO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--close form element -->
                                <br>

                                <!-- Previous and Next  Buttons starts here -->
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <a href="register2">
                                            <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                        </a>

                                        &nbsp;&nbsp;<input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

                                    </div>
                                </div>
                                <!-- Previous and Next  Buttons ends here-->

                            </div>
                            <!--Form style ends here-->

                        </form>
                        <!--Form ends here-->

                        <div class="clearDiv">&nbsp;</div>
                    </div>
                    <!--midBoxInternalWide ends here-->

                    <div class="clearDiv">&nbsp;</div>
                </div>



                <!--gateway content ends here-->
            </div><!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->

        </form><!-- Form ends here -->

        <!-- 底部start  -->
        <?php include_once "buttom.php"; ?>
        <!-- 底部end  -->

        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->

</body>
</html>
<script type="text/javascript">
    function check() {

        var list= $('input:radio[name="radioLocation"]:checked').val();
        if(list == null){
            err = '<p>Please choose one of the options below.</p>';
            $('.errorTxt').html(err);
        }

        else {
            $('form').submit()
            // window.location="register4"
        }

        scrollTo(0,0);

    }
</script>