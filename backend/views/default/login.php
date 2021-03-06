<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register and log in</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" onsubmit="return sub()" action="" method="post" autocomplete="off">
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="launchFieldHelp('apply1', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow'); return false;">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="launchFieldHelp('/help/index2', '?functionname=help&lang='+lang+'&page=HELP.LOGIN.LOGIN.PAGE', 506, 200, 'helpwindow');return false;">Help</a></li>
                    </ul><h3>Key</h3>
                    <ul id="key">
                        <li id="help" class="last">Help</li>
                    </ul><!--key ENDS here-->
                </div><!--leftNav ENDS here--><!--menu ends-->
                <!-- gatewayContent starts here -->
                <div id="gatewayContent">
                    <!--breadcrumb starts here-->
                    <div id="breadcrumb">
                        <a href="/user/index">Home</a> &gt;
                        Register and log in
                    </div><!--breadcrumb ends here-->
                    <hr />
                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">
                        <h2 class="inPage">Log in</h2>
                        <p>If you have already registered, please enter your username and password below to log in. <STRONG>You must enter your username in lower case and your password in the same case you used to register.</STRONG></p>
                        <div class="clearDiv">&nbsp;</div>
                        <p><input type="hidden" name="from" value="22" /></p><div class="thisFormElem">
                            <!--open form element -->
                            <div class="thisFormTxt">
                                <label for="usernameTextEntry">Username
                            </div>
                            <div class="thisFormField">
                                <input type="text" name="txtUsername" value="" size="20" maxlength="20"  style="width: 150px" tabindex="1" id="txtUsername"/>
                            </div>
                        </div><!--close form element -->
                        <script language="JavaScript">
                            document.Form1.txtUsername.focus();
                        </script>
                        <div class="thisFormElem">
                            <!--open form element -->
                            <div class="thisFormTxt">
                                <label for="passwordTextEntry">Password
                            </div>
                            <div class="thisFormField">
                                <input type="password" name="txtPassword" value="" size="20" maxlength="14"  style="width: 150px" tabindex="2" id="txtPassword"/>&nbsp;&nbsp;<a href="#" onclick="popupForgotten();">Forgotten login?</a>
                            </div>
                        </div><!--close form element -->
                        <div class="thisFormElem">
                            <!--open form element -->
                            <div class="thisFormTxt">
                                <label for="submitButton">&nbsp;
                            </div>
                            <div class="thisFormField">
                                <input id="form-submit" type="submit" name="btnLogin" value="log in" tabindex="3" class="submitBtn"/>

                            </div>
                        </div><!--close form element -->

                        <div class="clearDiv">&nbsp;</div>
                        <hr/>
                        <div class="clearDiv">&nbsp;</div>
                        <h2 class="inPage">Register</h2>
                        <!--Form style starts here-->
                        <div class="thisForm">
                            <p>If you have not registered for 2021 entry, please click the 'register' button to use this service. <strong>You only need to register once.</strong> If you apply more than once in a cycle your application fee will not be refunded.</p>
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label >&nbsp;</label>
                                </div>
                                <div class="thisFormField">
                                    <a href="/user/register">
                                    <input type="button" name="btnRegister" value="register" tabindex="3" class="submitBtn"/>
                                    </a>

                                </div>
                            </div><!--close form element -->

                            <div class="clearDiv">&nbsp;</div>
                            <!-- Hidden fields for use by servlet -->
                            <input type="hidden" name="functionname" value="loginorregister" />
                        </div><!--Form style ends here-->
                        <div class="clearDiv">&nbsp;</div>
                    </div><!--midBoxInternalWide ends here-->
                    <div class="clearDiv">&nbsp;</div>
                </div><!--gateway content ends here-->
            </div><!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->
            <p style="color:#81725e;">Version 16.0.6-master-1</p>
        </form><!-- Form ends here -->
        <!-- 'footer' div starts here  -->
       <?php include_once "buttom.php"; ?>
        <!--footer ENDS here-->
        <!--footer ends here-->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->
</body>
<script>
    function sub() {
        var bt = $('#form-submit')
        $.ajax({
            type:'post',
            data:$('form').serialize(),
            beforeSend:function () {
                $(bt).attr('disabled', 'disabled')
            },
            success:function (res) {
                $(bt).attr('disabled', '')
                if (res.code==200){
                    window.location.href = '/site/login'
                } else{
                    alert(res.msg)
                }
            }
        })
        return false;
    }
</script>
</html>