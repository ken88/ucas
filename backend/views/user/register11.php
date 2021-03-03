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
                <a href="http://www.ucas.com"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Initial UCAS questions: Which centre?</h1>
                <div id="logOut"><a href="ServicesServlet;jsessionid=3641f9e2a10f3ad16b2596db7d3e?functionname=logout&amp;id=3641f9e2a10f3ad16b2596db7d3e&amp;ran=1psn0pfuvsfum">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
        <form name="Form1" action="SecurityServlet;jsessionid=3acb7bb26c76eb3635cf937682c5" method="post" autocomplete="off">
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


                            <p class="bold">Please select your tutor group/application group. If you are unsure, please speak to your tutor or careers adviser or select the option 'don't know'.</p>



                            <div class="errorTxt"></div>

                            <form name="Form1" method="post" action="PostRegistrationServlet?id=37e7a685165f21aaf8a54412a0ef&amp;ran=fm4airccqp6y">

                                <!--School option-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="groupsCombo">Tutor/application group<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fitWidth"><select name="cboGroups" size="1" class="floatLeft" id="cboGroups">
                                                <option value="">Please select...</option>
                                                <option value="39639">Don't know</option>
                                                <option value="39640">AL 1</option>
                                                <option value="39641">AL 2</option>
                                                <option value="39643">AL 4</option>
                                                <option value="39646">AL 6</option>
                                                <option value="42354">AL 7</option>
                                                <option value="42355">AL 8</option>
                                                <option value="39645">AL G4-3</option>
                                                <option value="39642">AL G4-4</option>
                                                <option value="61749">AL G4-5</option>
                                                <option value="39650">AP 1</option>
                                                <option value="39651">AP 2</option>
                                                <option value="42356">AP 3</option>
                                                <option value="53731">AP Oxbridge</option>
                                                <option value="39648">DP 1</option>
                                                <option value="39649">DP 2</option>
                                                <option value="63532">IFD</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.POSTREG.TUTORGROUP.FIELD.TUTORGROUP'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->

                                <!--spacer -->
                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">&nbsp;</div>
                                <!--end spacer-->

                                <div class="thisFormTxt">&nbsp;</div>
                                <div class="thisFormField">
                                    <a href="register10">
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
        var list= $('#cboGroups').val();
        if(list == ''){
            err = '<p>Please select your tutor group/application group.</p>';
            $('.errorTxt').html(err);
        }
        else {
            window.location="register12"
        }
    }
</script>