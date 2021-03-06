<?php include_once "top.php";?>
            <!--tools ENDS here-->
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register: Welcome</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="SecurityServlet;jsessionid=3acb7bb26c76eb3635cf937682c5" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="helpOpen3('appreg/PopUpServlet?functionname=help&lang=1&page=HELP.LOGIN.WHATISAPPLY.FIELD');">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="helpOpen3('appreg/HelpServicesServlet?functionname=help&page=HELP.REGISTRATION.WELCOME.PAGE')">Help</a></li>
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
                    </div><!--breadcrumb ends here-->
                    <!-- progressBar div starts here -->

                    <!-- progressBar div starts here -->
                    <div id="progressBar">
                        <ul>
                            <li class="on">&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li class="last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->
                    <div id="midBoxInternalWide">
                        <p>You need to register before you can start your application. This is free and will take approximately 15 minutes.</p>
                        <p>If you apply more than once for the same year of entry, your application fee will not be refunded.
                            If you have already registered but cannot remember your details,
                            please use the 'forgotten login' link on the
                            <a href="#">sign in</a>
                            screen.</p>
                        <p>If you are applying through a school, college or centre, you will be asked to enter their  buzzword  provided by them,
                            so please have this available. This will allow your school, college or centre to support you through the UCAS application process.
                            They will be able to see and check the progress of your application, attach a reference, add predicted grades,
                            and send your application to UCAS on your behalf. They will also be able to see decisions made by your chosen
                            universities and colleges, and your replies.
                        </p>
                        <p>If you are not applying through a school,
                            college or centre, you can apply as an individual applicant.</p>
                        <p>Once you have registered, a username will be automatically generated and you will be
                            asked to create a password.<strong>Please make a note of these details as you will need them to
                                sign in to your application later.</strong></p>
                        <p>You can find more information about applying on ucas.com.
                        </p>
                        <p><a href="#" >Help</a>
                            text is available throughout each section.</p><p></p>
                        <!--Form style starts here-->
                        <div class="thisForm">
                            <!-- Hidden fields for use by servlet -->
                            <input type="hidden" name="from" value="1">
                            <input type="hidden" name="functionname" value="register">
                            <!-- Previous and Next  Buttons starts here -->
                            <div class="thisFormElem">
                                <div class="thisFormTxt">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="thisFormField">

                                    <a href="/default/login">
                                        <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                    </a>
                                    &nbsp;&nbsp;
                                    <a href="register1">
                                        <input type="button" name="btnNext" value="next" class="submitBtn">
                                    </a>
                                </div>
                            </div><!-- Previous and Next  Buttons ends here-->
                        </div><!--Form style ends here-->
                        <div class="clearDiv">&nbsp;</div>
                    </div><!--midBoxInternalWide ends here-->
                    <div class="clearDiv">&nbsp;</div>
                </div><!--gateway content ends here-->
            </div><!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->
        </form><!-- Form ends here -->
        <!-- 'footer' div starts here  -->
        <?php include_once "buttom.php"; ?>
        <!--footer ENDS here-->
        <!--footer ends here-->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->
</body>
</html>