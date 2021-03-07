<?php include_once "top.php";?>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Payment</h1>
                <div id="logOut"><a href="#">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <div class="clearDiv">&nbsp;</div>




<div id="mainContent">

    <!-- leftNavInternal div starts here -->
    <div id="leftNavInternal" class="floatLeft">
        <div id="cardLogos">
            <a href="#" onfocus="this.blur();" onclick="linkTo3DSecureInfo('mastercard');"><img src="/static/images/mastercard_securecard.gif" class="mastercard"></a>
            <a href="#" onfocus="this.blur();" onclick="linkTo3DSecureInfo('visa');"><img src="/static/images/visa_vbv.gif" class="visa"></a>
        </div>
    </div>

    <!--temp -->
    <div id="gatewayContent">
        <div id="breadcrumb">
            <a href="/useradmin/welcome">Welcome</a> &gt;
            Payment
        </div><!--breadcrumb ENDS here-->
        <hr>
        <div id="midBoxInternalWide">

            <div class="thisForm">

                <form name="form1" method="post" action="/useradmin/pay-send4">


                    <!--spacer -->
                    <p>&nbsp;</p>
                    <!--end spacer-->

                    <p class="bold">Please check your choice details carefully, then click pay now, where you will be asked to enter your card details. Compulsory fields are marked with an asterisk (<span class="Req">*</span>).</p>
                    <h2 class="inPage">Choice summary</h2>
                    <br><table border="0">
                        <tbody><tr>
                            <td width="150px" valign="top">Choice 1:</td>
                            <td width="500px">UCEN Manchester (M10)</td>
                            <td width="500px" valign="top">3D Modelling and Animation for Games and Media (W213)</td>
                        </tr>
                        </tbody></table>
                    <hr>
                    <h2 class="inPage">Card payment details</h2>
                    <br><span class="bold">Credit and debit cards: we accept UK and international Visa, Visa Debit, Delta, MasterCard, JCB, Maestro, and Electron. At the moment we do not accept American Express or Diners Club cards.<br>
Your card details will be encrypted before being transferred over the internet.<br>The application will not be progressed until your payment has been authorised by the card issuer.</span><br><span class="warningTxt">
If it is subsequently discovered that you did not have authority to make payment using the credit or debit card whose details are entered, we will cancel your application.<br><br>Do not refresh the page or use the back button while we process your payment.</span>

                    <p>&nbsp;</p>
                    <input type="submit" value="Pay now" name="Submit" class="submitBtn">
                </form>
                <!--clip ends-->
            </div><!--close thisForm div-->

        </div><!--midBoxInternalWide ends here-->

    </div><!--gatewayContent ends here-->
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