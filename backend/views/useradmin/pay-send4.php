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

                    <div class="thisForm">

                        <form name="Form1" method="post" action="">

                           <div style="font-size: 18px; font-weight: bold; margin-top: 10px;">
                               Payment Details
                           </div>
                            <div style="background-color: #f2f2f2; height: 150px; margin-top: 10px; margin-bottom: 20px;">
                                <div style="padding-left: 20px; padding-top: 10px;">
                                    <h2 style="color: #000;">Payment Reference:</h2>
                                    <p> U21972391_1615105971627</p>
                                    <h2 style="color: #000;">Amount:</h2>
                                    <p> 20.00 GBP</p>
                                </div>
                            </div>

                            <div id="d2" style="background-color: #f2f2f2; height: 240px; margin-top: 10px; margin-bottom: 20px;">
                                <div style="font-weight: bold; size: 16px; ">Credit / Debit card</div>
                                <div>
                                    <span>Card Number</span>
                                    <input id="card_number" name="card_number" maxlength="23" size="26" type="text" value="<?= $model->card_number ?>" >
                                </div>
                                <div>
                                    <span>Expiry Date</span>
                                    <select id="exp_month" name="exp_month">
                                        <option value="01" selected="selected">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    /
                                    <select id="exp_year" name="exp_year">
                                        <option value="2021" selected="selected">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                        <option value="2041">2041</option>
                                        <option value="2042">2042</option>
                                        <option value="2043">2043</option>
                                        <option value="2044">2044</option>
                                        <option value="2045">2045</option>
                                        <option value="2046">2046</option>
                                        <option value="2047">2047</option>
                                        <option value="2048">2048</option>
                                        <option value="2049">2049</option>

                                    </select>
                                </div>

                                <div>
                                    <span>Card Security Code</span>
                                    <input id="cv2_number" name="cv2_number" size="6" type="text" value="<?= $model->cv2_number ?>" >
                                    <span style="margin-left: 30px; ">
                                        <img alt="" src="/static/images/securityImg.jpg" width="107" height="27">
                                    </span>

                                </div>

                                <div>
                                    <span>Issue Number</span>
                                    <input id="issue_number" name="issue_number" size="6" type="text" value="<?= $model->issue_number ?>" >
                                    (If Available)
                                </div>
                            </div>

                            <input type="button" name="submitBtn" value="send" onclick="check()"  class="submitBtn">


                        </form>
                        <!--clip ends-->
                    </div><!--close thisForm div-->

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