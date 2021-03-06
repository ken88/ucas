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
                <h1 class="EN">Initial UCAS questions: How are you applying?</h1>
                <div id="logOut"><a href="ServicesServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e?functionname=logout&amp;id=3641f9e2a10f3ad16b2596db7d3e&amp;ran=1psn0pfuvsfum">Log out</a></div>
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


                            <p class="bold">How are you applying?<span class="Req">*</span></p>


                            <div class="errorTxt"></div>
                            <form name="Form1" method="post" action="PostRegistrationServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e?id=3641f9e2a10f3ad16b2596db7d3e&amp;ran=1ji33vg3oejga">

                                <!--School option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="routeSchoolRadio">Through my school/college</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="radio" name="rdRoute" value="S" class="floatLeft" id="routeSchoolRadio" <?php if($model->rdRoute=='S') echo 'checked'?> >
                                        <a href="#" onclick="helpOpen('PopUpServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e', '?functionname=help&amp;page=HELP.POSTREG.APPLICATIONROUTE.FIELD.SCHOOL'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a></div>
                                </div><!--close form element -->


                                <!--Careers Org option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="routeCareersOrgRadio">Through a careers organisation</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="radio" name="rdRoute" value="C" class="floatLeft" id="routeCareersOrgRadio" <?php if($model->rdRoute=='C') echo 'checked'?> >
                                        <a href="#" onclick="helpOpen('PopUpServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e', '?functionname=help&amp;page=HELP.POSTREG.APPLICATIONROUTE.FIELD.CAREERSORG'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->


                                <!--Other Org option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="routeOtherOrgRadio">Through another organisation </label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="radio" name="rdRoute" value="O" class="floatLeft" id="routeOtherOrgRadio" <?php if($model->rdRoute=='O') echo 'checked'?> >
                                        <a href="#" onclick="helpOpen('PopUpServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e', '?functionname=help&amp;page=HELP.POSTREG.APPLICATIONROUTE.FIELD.OTHERORG'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->


                                <!--Individual option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="routeIndividualRadio">As an individual</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="radio" name="rdRoute" value="I" class="floatLeft" id="routeIndividualRadio" <?php if($model->rdRoute=='I') echo 'checked'?> >
                                        <a href="#" onclick="helpOpen('PopUpServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e', '?functionname=help&amp;page=HELP.POSTREG.APPLICATIONROUTE.FIELD.INDIVIDUAL'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->



                                <!--spacer -->
                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">&nbsp;</div>
                                <!--end spacer-->

                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">
                                    <!--display 'Next' button clip -->
                                    <input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

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



        var list= $('input:radio[name="rdRoute"]:checked').val();
        if(list == null){
            err = '<p>Please select an option.</p>';
            $('.errorTxt').html(err);
        }

        else {
            // window.location="register9"
            $('form').submit()
        }


    }


</script>