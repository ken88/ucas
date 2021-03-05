<?php include_once "top.php";?>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">
<div id="outerWrapper" class="clearfix"><!-- Outer  Wrapper starts here-->
    <div id="wrapperInternal" class="floatLeft"><!-- Wrapper Internal starts here-->
        <!--header starts here-->
        <div id="header">
            <div id="tools">
                <ul>
                    <li><a href="https://www.ucas.com/corporate/about-us/contact-us" onclick="window.open(this.href);return false;">Contact us</a> |</li>
                    <li class="help"><a href="#" onclick="helpOpen('PopUpServlet;jsessionid=3acb7bb26c76eb3635cf937682c5', '?functionname=help&amp;lang=1&amp;page=HELP.HEADER.PAGE'); return false;">Help</a> |</li>
                    <li><a href="javascript:onclick=window.print()">Print page</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div><!--tools ENDS here-->
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register: Security</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="register6" method="post" autocomplete="off">
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
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="done">&nbsp;</li>
                            <li class="on">&nbsp;</li>
                            <li class="last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->

                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">
                        <p class="bold">Please enter a password and choose 4 unique security questions together with their appropriate answers. Please do not choose answers which might cause offence.</p>

                        <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p>

                        <p class="bold">Your password must: <span class="bold"></span></p><ul class="display"><li>be at least eight characters long</li><li>have at least one lowercase letter (a—z) and one uppercase letter (A—Z)</li><li>contain at least one number (0—9)</li><li>use at least one special character, such as: % $ — &amp; @ * ! ?</li></ul>Our <a href="#" onclick="launchPageHelp();return false;">guidance</a> will help you choose a secure password.<br><br>Please make a note of your password now, as it will not be displayed at a later stage.<p></p>


                        <div class="errorTxt"></div>

                        <!-- Form starts here -->
                        <form name="Form1" action="SecurityServlet" method="post" autocomplete="off">

                            <!--Form style starts here-->
                            <div class="thisForm">

                                <!-- Main area of page provided here by a servlet clip -->
                                <input type="hidden" name="from" value="13"><input type="hidden" name="functionname" value="register"><input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here " id="hidCharWarningMsg">
                                <input type="hidden" name="hidJavaScriptEnabled" value="false" id="hidJavaScriptEnabled">
                                <!--Password -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="passwordText">Password<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="password" name="passwordText" value="" size="16" maxlength="14" class="floatLeft" id="passwordText">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.PASSWORD'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Confirm Password -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="confirmPasswordText">Confirm password<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="password" name="confirmPasswordText" value="" size="16" maxlength="14" class="floatLeft" id="confirmPasswordText">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.PASSWORDCONFIRM'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <p class="warningTxt">It is important that you can remember the answers to your security questions and that they cannot be easily guessed by others. If you lose or forget your password you will be asked one or more of these security questions in order to identify you.</p><!--Security Question 1 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="securityQuestion1Combo">Security question 1<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fitWidth"><select name="wenti1" size="1" class="floatLeft" id="wenti1">
                                                <option value="">Please select...</option>
                                                <option value="What was the name of your first school?">What was the name of your first school?</option>
                                                <option value="What is your pet's name?">What is your pet's name?</option>
                                                <option value="What is your favourite sport?">What is your favourite sport?</option>
                                                <option value="What was your first car?">What was your first car?</option>
                                                <option value="Where was your favourite holiday?">Where was your favourite holiday?</option>
                                                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                <option value="What is your father's first name?">What is your father's first name?</option>
                                                <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                <option value="Who is your favourite fictional character?">Who is your favourite fictional character?</option>
                                                <option value="What is your favourite food?">What is your favourite food?</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYQUESTION'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Reply 1 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="reply1Text">Your answer<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="daan1" value="" size="20" maxlength="100" class="floatLeft" id="daan1">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYRESPONSE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Security Question 2 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="securityQuestion2Combo">Security question 2<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fitWidth"><select name="wenti2" size="1" class="floatLeft" id="wenti2">
                                                <option value="">Please select...</option>
                                                <option value="What was the name of your first school?">What was the name of your first school?</option>
                                                <option value="What is your pet's name?">What is your pet's name?</option>
                                                <option value="What is your favourite sport?">What is your favourite sport?</option>
                                                <option value="What was your first car?">What was your first car?</option>
                                                <option value="Where was your favourite holiday?">Where was your favourite holiday?</option>
                                                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                <option value="What is your father's first name?">What is your father's first name?</option>
                                                <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                <option value="Who is your favourite fictional character?">Who is your favourite fictional character?</option>
                                                <option value="What is your favourite food?">What is your favourite food?</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYQUESTION'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Reply 2 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="reply2Text">Your answer<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="daan2" value="" size="20" maxlength="100" class="floatLeft" id="daan2">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYRESPONSE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Security Question 3 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="securityQuestion3Combo">Security question 3<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fitWidth"><select name="wenti3" size="1" class="floatLeft" id="wenti3">
                                                <option value="">Please select...</option>
                                                <option value="What was the name of your first school?">What was the name of your first school?</option>
                                                <option value="What is your pet's name?">What is your pet's name?</option>
                                                <option value="What is your favourite sport?">What is your favourite sport?</option>
                                                <option value="What was your first car?">What was your first car?</option>
                                                <option value="Where was your favourite holiday?">Where was your favourite holiday?</option>
                                                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                <option value="What is your father's first name?">What is your father's first name?</option>
                                                <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                <option value="Who is your favourite fictional character?">Who is your favourite fictional character?</option>
                                                <option value="What is your favourite food?">What is your favourite food?</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYQUESTION'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Reply 3 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="reply1Text">Your answer<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="daan3" value="" size="20" maxlength="100" class="floatLeft" id="daan3">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYRESPONSE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Security Question 4 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="securityQuestion4Combo">Security question 4<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fitWidth"><select name="wenti4" size="1" class="floatLeft" id="wenti4">
                                                <option value="">Please select...</option>
                                                <option value="What was the name of your first school?">What was the name of your first school?</option>
                                                <option value="What is your pet's name?">What is your pet's name?</option>
                                                <option value="What is your favourite sport?">What is your favourite sport?</option>
                                                <option value="What was your first car?">What was your first car?</option>
                                                <option value="Where was your favourite holiday?">Where was your favourite holiday?</option>
                                                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                <option value="What is your father's first name?">What is your father's first name?</option>
                                                <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                <option value="Who is your favourite fictional character?">Who is your favourite fictional character?</option>
                                                <option value="What is your favourite food?">What is your favourite food?</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYQUESTION'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Reply 4 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="reply4Text">Your answer<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="daan4" value="" size="20" maxlength="100" class="floatLeft" id="daan4">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.SECURITY.FIELD.SECURITYRESPONSE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <br>


                                <!-- Previous and Next  Buttons starts here -->
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <a href="register5">
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
        <!-- 'footer' div starts here  -->
        <div id="footer">
            <ul class="floatLeft">
                <li><a href="https://www.ucas.com/corporate/about-us" onclick="window.open(this.href);return false;">About us</a> | </li> <li><a href="https://www.ucas.com/corporate/about-us/terms-and-conditions/terms-and-conditions-use-apply" onclick="window.open(this.href);return false;">Terms &amp; conditions</a> | </li><li><a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" onclick="window.open(this.href);return false;">Privacy policy</a> </li>
            </ul>
            <p id="copy" class="floatRight">&copy; UCAS 2021</p>
        </div><!--footer ENDS here-->
        <!--footer ends here-->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->

</body>
</html>
<script type="text/javascript">
    function check() {

        var passwordText= $("#passwordText").val(); // 密码
        var confirmPasswordText= $("#confirmPasswordText").val(); //  确认密码
        var wenti1= $("#wenti1").val();// 问题1
        var daan1= $("#daan1").val();//答案1
        var wenti2= $("#wenti2").val(); // 提问2
        var daan2= $("#daan2").val(); // 提问2
        var wenti3= $("#wenti3").val(); // 提问2
        var daan3= $("#daan3").val(); // 提问2
        var wenti4= $("#wenti4").val(); // 提问2
        var daan4= $("#daan4").val(); // 提问2
        var re =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[^]{8,16}$/;
        var result=  re.test(passwordText);
        err = '';
        if(passwordText == '' || confirmPasswordText == '' ){
            err += '<p>Please provide a password.</p>';

        }
        else if(passwordText != confirmPasswordText){
            err += '<p>Your confirmation password does not match.</p>';
        }

//        else if (!result) {
//            err += '<p>Incorrect password format</p>'
//        }

        else if(wenti1 == '' || wenti2 == ''  || wenti3 == '' || wenti4 == '' || daan1 == '' || daan2 == '' || daan3 == '' || daan4 == '' ){
            err += '<p>You must provide answers to four different security questions.</p>';
        }

        else {
            var flag = false;
            for (var i = 1 ; i <= 4; i++) {
                for (var k = i+1 ; k <= 4; k++) {
                    if ($("#wenti"+i).val() == $("#wenti"+k).val()) {
                        err += '<p>错误You must provide answers to four different security questions.</p>';
                        flag = true;
                        break ;
                    }
                }
                if (flag) {
                    break;
                }
            }
            if (!flag) {
                // window.location="register7"
                $('form').submit()
            }


        }
        $('.errorTxt').html(err);
        scrollTo(0,0);

    }
</script>