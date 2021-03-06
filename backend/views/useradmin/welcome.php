<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Welcome</h1>
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
                    Welcome
                </div><!--breadcrumb ENDS here-->
                <hr>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <!--clip starts-->
                        <!--<form name="Form1">-->

                        <!--display 'Welcome' clip -->
                        <p>Welcome <?= $user->txtForename ?>,</p>
                        <p>Your Personal ID is: <font size="3"><strong><?= $user->personal_id ?></strong></font>.<br><br><strong>Please make a note of this number and keep it handy. You will need to quote this number if you call our Customer Contact Centre.</strong></p>
                        <script>
                            function setCookie(c_name,value,exdays)
                            {
                                var exdate=new Date();
                                exdate.setDate(exdate.getDate() + exdays);
                                var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
                                document.cookie=c_name + "=" + c_value;
                            }
                            var visible = true;
                            function showHideVideo(){
                                $("#ucastv").toggle('slow', 'swing', function() { return false; });
                                if (visible)
                                {
                                    $("#showHideVideo").html("Show video");
                                    setCookie("UCAS_Welcome",false,365);
                                }
                                else
                                {
                                    $("#showHideVideo").html("Hide video");
                                    setCookie("UCAS_Welcome",true,365);
                                };
                                visible = !visible;
                                return false;
                            };
                        </script>
                        <div class="video" style="text-align: center;margin-top:1.4em;">
                            <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                            <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661049804837201669" scrolling="no"></iframe><br>
                                (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                        </div>
                        <!-- 验证邮箱是否已经验证，没有验证显示下面错误 start -->
                        <div class="errorTxt">
                            <p>
                                <strong>Verify your email address</strong>
                                <br>
                                Your email address needs to be verified as valid before you send your application to us.
                                <br>
                                <a href="/useradmin/send">
                                    Please click here to verify your email address
                                </a>
                            </p>
                        </div>
                        <!-- 验证邮箱是否已经验证，没有验证显示下面错误 end -->
                        <p>Before starting your application, please read through the relevant information below regarding: </p><ul class="display"><li><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.WELCOME.COMPLETEAPP.LINK'); return false;" class="plain">completing your application</a></li><li><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.WELCOME.SCHOOLAPPLY.LINK'); return false;" class="plain">applicants applying through a school, college or organisation</a></li><li><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.WELCOME.INDIVIDUALAPPLY.LINK'); return false;" class="plain">applicants applying as an individual</a></li><li><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.WELCOME.WELCOME.APPDEADLINES.LINK'); return false;" class="plain">deadlines for submitting your application.</a></li></ul><p></p>

                        <!--spacer -->
                        <div class="thisFormTxt">&nbsp;</div>
                        <div class="thisFormField">&nbsp;</div>
                        <!--end spacer-->

                        <!--</form>-->
                        <!--clip ends-->
                    </div><!--close thisForm div-->

                    <!--Form ends here-->

                </div><!--midBoxInternalWide ENDS here-->
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