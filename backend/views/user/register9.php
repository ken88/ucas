<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Initial UCAS questions: How are you applying?</h1>
                <div id="logOut"><a href="#">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="helpOpen('apply1', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow'); return false;">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="helpOpen('/help/index5', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');return false;">Help</a></li>
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
                        Initial UCAS questions
                    </div><!--breadcrumb ENDS here-->
                    <hr>


                    <div id="midBoxInternalWide">


                        <!--Form starts here-->

                        <div class="thisForm">


                            <p class="bold">You now need to enter your buzzword - this will be given to you by your school, college or centre. You will only be asked to enter your buzzword once.<br><br>(Buzzwords are case sensitive)</p>

                            <div class="errorTxt"></div>

                            <form name="Form1" method="post" action="PostRegistrationServlet?id=37e7a685165f21aaf8a54412a0ef&amp;ran=1f3011uj1gs38">

                                <!--School option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="buzzwordTextbox">Buzzword<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtBuzzword" value="<?= $model->txtBuzzword ?>" class="floatLeft" id="txtBuzzword">
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.POSTREG.BUZZWORD.FIELD.BUZZWORD'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->

                                <div class="clearDiv">&nbsp;</div>

                                <p class="warningTxt">Your buzzword means we know which school, college, or centre you are applying from. By entering the buzzword, you give permission to share your data with your school, college or centre, so they can support you through the UCAS application process. <br><br>They will be able to check the progress of your application, attach a reference, add your predicted grades, and send your application to UCAS on your behalf. They will also be able to see decisions made by your chosen universities and colleges, and your replies.<br><br>If you do not want to link to a centre, you can add a reference from somewhere else, or if you no longer want them to see the progress of your application, please contact us.</p>

                                <!--spacer -->
                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">&nbsp;
                                    <!-- non-visible text box to prevent IE bug where hitting enter on form with single field doesn't submit -->
                                    <input type="text" readonly="" style="position : absolute; top : -1000px; left : -1000px; width: 0px; visibility: hidden ">
                                </div>
                                <!--end spacer-->

                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">
                                    <a href="register8">
                                        <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                    </a>

                                    &nbsp;&nbsp;<input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

                                </div>

                                <!-- Hidden field for use by servlet -->
                                <input type="hidden" name="from" value="2">
                                <input type="hidden" name="functionname" value="postreg">



                            </form>
                        </div><!--close thisForm div-->

                        <!--Form ends here-->

                    </div><!--midBoxInternalWide ends here-->
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
<script type="text/javascript">
    function check() {

        var txtBuzzword= $('#txtBuzzword').val();
        if(txtBuzzword == ''){
            err = '<p>Please enter your buzzword.</p>';
            $('.errorTxt').html(err);
        }
        else {
            $('form').submit()
            //window.location="register10"
        }
    }
</script>