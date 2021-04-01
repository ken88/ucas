<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Initial UCAS questions: Which centre?</h1>
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
                        <li><a href="#" onclick="helpOpen3('appreg/PopUpServlet?functionname=help&lang=1&page=HELP.LOGIN.WHATISAPPLY.FIELD');">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="helpOpen3('ucasapply/PopUpServlet?functionname=help&page=HELP.POSTREG.CONFIRM.PAGE')">Help</a></li>
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




                            <div class="errorTxt"></div>

                            <form name="Form1" method="post" action="PostRegistrationServlet?id=37e7a685165f21aaf8a54412a0ef&amp;ran=zff1zpq8dbzo">
                                <p class="bold">You are registering through...<br><br></p>
                                <div style="position: relative; float: left;" >
                                    <div>
                                        <input type="text" style="width: 260px;" placeholder="School/college/centre name" id="title1" name="school_name">
                                        <span style="color: red">*</span>
                                    </div>
                                    <div>
                                        <textarea style="width: 260px; height: 80px;" placeholder="School/college/centre address" id="title2"  name="school_address"></textarea>
                                        <span style="color: red; position: absolute; top: 35px; ">&nbsp;&nbsp;*</span>
                                    </div>

                                </div>
                                <div style="margin-left: 300px; font-size: 14px;" >
                                    真实官方UCAS网站中，本项目会根据上页填写的Buzzword自动跳出详细信息。本模拟网站填写方式为手动填写，
                                    <span style="color: red;">与官网有一定差异。正式申请时务必以官网为准。</span>
                                </div>

                                <!--Confirm 'Yes'-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="confirmYesRadio">...Is this correct?<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <span class="floatLeft">Yes</span><input type="radio" name="rdConfirm" value="Y" class="floatLeft" id="confirmYesRadio" <?php if ($model->rdConfirm=='Y') echo 'checked'?> >
                                        <span class="floatLeft">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <span class="floatLeft">No</span><input type="radio" name="rdConfirm" value="N" class="floatLeft" id="confirmNoRadio" <?php if ($model->rdConfirm=='N') echo 'checked'?> >
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.POSTREG.CONFIRM.FIELD.CONFIRM'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->


                                <!--spacer -->
                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">&nbsp;</div>
                                <!--end spacer-->

                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">
                                    <a href="register9">
                                        <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                    </a>

                                    &nbsp;&nbsp;<input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

                                </div>


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
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->
</body>
</html>
<script type="text/javascript">
    function check() {
        var list= $('input:radio[name="rdConfirm"]:checked').val();
        if(list == null){
            err = '<p>Please confirm if this is the correct school/college.</p>';
            $('.errorTxt').html(err);
        }
        else {
            $('form').submit()
            // window.location="register11"
        }
    }
</script>