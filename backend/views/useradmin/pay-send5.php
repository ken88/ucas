<?php include_once "top.php";?>
<style type="text/css">
    #d2 div{
        margin-top: 10px; margin-left: 20px; padding-top: 10px;
    }
</style>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Send</h1>
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
                    <a href="/useradmin/welcome">Welcome</a> &gt;
                    Send
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">
                    <div class="errorTxt"></div>
                    <!--Form starts here-->
                    <div>
                        <div style="font-size: 18px; font-weight: bold; margin-top: 10px;">You have submitted your application successfully！</div>
                        <div style="margin-top: 10px; font-weight: bold">
                            Please wait for the update through your email and telephone number. Or
                            <br>you can directly
                            contect us by the
                            <span style="color: red;">wechat ID :<?= $data->personal_id;?></span>.
                            Thank you so
                            <br> much for
                            your participation and we are happy to hear any suggestion
                            <br>through the
                            <span style="color: red;">email ：<?= $data->emailText;?></span>
                        </div>
                        <div style="margin-top: 40px; background-color: rgb(240,240,240) ; width: 300px;" >
                            <span style="margin-left: 15px;">
                                <img src="/static/images/erweima2.jpg" width="120">
                            </span>
                            <span style="margin-left: 20px;">
                                <img src="/static/images/erweima1.jpg" width="120">
                            </span>
                        </div>
                    </div>


                    <!--Form ends here-->

                </div><!--midBoxInternalWide ends here-->
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
<script type="text/javascript">
    function check() {

        var card_number = $('#card_number').val();
        var cv2_number = $('#cv2_number').val();
        var err = '';
        if(card_number == ''){
            err += '<p>Please enter a valid card number.</p>';

        }
        if(cv2_number == ''){
            err += '<p>Please enter a valid CV2 number.</p>';

        }

        if (err != '') {
            $('.errorTxt').html(err);
            scrollTo(0,0);
        }
        else {
            $(Form1).submit();
        }


    }

</script>