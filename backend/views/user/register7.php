<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register: Success</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="<?= \yii\helpers\Url::to(['site/logout'])?>" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="helpOpen3('appreg/PopUpServlet?functionname=help&lang=1&page=HELP.LOGIN.WHATISAPPLY.FIELD');">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="helpOpen3('appreg/HelpServicesServlet?functionname=help&page=HELP.REGISTRATION.SUCCESS.PAGE')">Help</a></li>
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
                        Home &gt;
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
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->

                    <div class="clearDiv">&nbsp;</div><br>

                    <!-- Print username near top of page -->
                    <div class="body">Your username is&nbsp;:&nbsp;<strong><?= $username ?></strong></div><br>

                    <!-- Print 'please make a note of your username' warning (always shown on this page) -->
                    <div class="warningTxt"><strong>Please make a note of your username now, as it will not be displayed at a later stage.</strong></div><br>

                    <!-- Print 'keep your username and password safe ' warning (always shown on this page) -->
                    <div class="body">Keep your username and password safe as you will need both each time you access your application.</div>

                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">
                        <p>Your registration has been successful. If you wish you may now enter the Apply service or come back another time. If necessary, you can change any of your registration details once you have entered Apply. </p>

                        <!-- Form starts here -->


                            <!--Form style starts here-->
                            <div class="thisForm">

                                <!-- Main area of page provided here by a servlet clip -->
                                <p><input type="hidden" name="from" value="14"></p><p><input type="hidden" name="functionname" value="register"></p><br>


                                <!-- 'Login Now' and 'Go To Ucas'  Buttons starts here -->
                                <!--<div class="thisFormElem">

                                    <div class="thisFormTxt">
                                        <label >&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">-->
                                <input type="submit" name="btnLoginNow" value="log in now" class="submitBtn">


                                <!--</div>
                            </div>-->
                                <!-- 'Login Now' and 'Go To Ucas'  Buttons ends here-->

                            </div>
                            <!--Form style ends here-->


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
        <!--footer ends here-->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->
</body>
</html>