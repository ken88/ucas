<?php include_once "top.php";?>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">

            <div id="logo" class="floatLeft">
                <a href="#"><img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" /></a>
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Register: Initial details</h1>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->
            <div id="strapLineApplyPrint">
                <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />
            </div>
            <!--StrapLinePrint ENDS here-->
        </div>
        <!--header ENDS here-->

        <!--header ends here-->
        <div class="clearDiv">&nbsp;</div>
        <!-- Form starts here -->
            <!-- main content starts here -->
            <div id="mainContent">
                <!--menu starts-->
                <div id="leftNavInternal" class="floatLeft">
                    <ul>
                        <li><a href="#" onclick="helpOpen3('appreg/PopUpServlet?functionname=help&lang=1&page=HELP.LOGIN.WHATISAPPLY.FIELD');">What is Apply?</a></li>
                        <li class="last"><a href="#" onclick="helpOpen3('appreg/HelpServicesServlet?functionname=help&page=HELP.REGISTRATION.INITIALDETAILS.PAGE')">Help</a></li>
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
                            <li class="on">&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li class="last">&nbsp;</li>
                        </ul>
                        <span id="progressBarLabel">Progress</span>
                    </div><!--progressBar ends here-->
                    <!--progressBar ends here-->

                    <!-- midBoxInternalWide starts here -->
                    <div id="midBoxInternalWide">

                        <!-- Form starts here -->
                        <form name="Form1" action="register2" method="post" autocomplete="off">

                            <!--Form style starts here-->
                            <div class="thisForm">

                                <!-- Main area of page provided here by a servlet clip -->
                                <script language="JavaScript">
                                    var tg = new Array();
                                    tg[0] = "Miss|F";
                                    tg[1] = "Mr|M";
                                    tg[2] = "Mrs|F";
                                    tg[3] = "Ms|F";
                                    tg[4] = "Br|M";
                                    tg[5] = "Dame|F";
                                    tg[6] = "Fr|M";
                                    tg[7] = "Frau|F";
                                    tg[8] = "Herr|M";
                                    tg[9] = "Lady|F";
                                    tg[10] = "Lord|M";
                                    tg[11] = "Mdm|F";
                                    tg[12] = "Sir|M";
                                    tg[13] = "Sr|M";
                                    tg[14] = "Visc|M";
                                    tg[15] = "Brns|F";
                                    tg[16] = "Bron|M";
                                    tg[17] = "Earl|M";
                                    tg[18] = "Marq|M";
                                    tg[19] = "Duch|F";
                                    tg[20] = "Duke|M";
                                    tg[21] = "PSir|M";
                                </script>
                                <p><input type="hidden" name="from" value="3"></p><p><input type="hidden" name="functionname" value="register"></p>
                                <p class="bold">Compulsory fields are marked with an asterisk (<span class="Req">*</span>).

                                <br>
                                <div class="errorTxt"></div>
                                <div style="display: none;" id="dialog-modal-extended-chars" title="Information">
                                    <p>You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them.</p>
                                </div>
                                <div style="display: none;" id="unicodeMsgWarning">
                                    <span class="warningTxt">Warning:  You have entered some European characters that are not in the English alphabet. Not all universities and colleges can view these characters correctly, so a version with substituted English characters is also made available to them. Fields that allow European characters are marked with an '<span class="ReqPlus">?</span>'. <a href="https://www.ucas.com/sites/default/files/extended-character-sets-substitutions_0.pdf" target="_blank">View the list of European characters we allow.</a></span><br><br>
                                </div>
                                <!--Title-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="titleCombo">Title<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth">
                                            <select name="title" id="title" size="1"  class="floatLeft" >
                                                <option value="">Please select...</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mx">Mx</option>
                                                <option value="Br">Br</option>
                                                <option value="Capt">Capt</option>
                                                <option value="Dame">Dame</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Fr">Fr</option>
                                                <option value="Frau">Frau</option>
                                                <option value="Herr">Herr</option>
                                                <option value="Hon">Hon</option>
                                                <option value="HRH">HRH</option>
                                                <option value="Lady">Lady</option>
                                                <option value="Lord">Lord</option>
                                                <option value="Lt">Lt</option>
                                                <option value="Maj">Maj</option>
                                                <option value="Mdm">Mdm</option>
                                                <option value="Prin">Prin</option>
                                                <option value="Prof">Prof</option>
                                                <option value="Pte">Pte</option>
                                                <option value="Rev">Rev</option>
                                                <option value="Revd">Revd</option>
                                                <option value="Sir">Sir</option>
                                                <option value="Sgt">Sgt</option>
                                                <option value="Sr">Sr</option>
                                                <option value="Visc">Visc</option>
                                                <option value="Engr">Engr</option>
                                                <option value="Brns">Brns</option>
                                                <option value="Bron">Bron</option>
                                                <option value="Earl">Earl</option>
                                                <option value="Marq">Marq</option>
                                                <option value="Duch">Duch</option>
                                                <option value="Duke">Duke</option>
                                                <option value="PSir">PSir</option>
                                                <option value="RevD">RevD</option>
                                                <option value="RHon">RHon</option>
                                                <option value="Ven">Ven</option>
                                                <option value="VRev">VRev</option>
                                                <option value="RRev">RRev</option>
                                                <option value="Brgd">Brgd</option>
                                                <option value="Col">Col</option>
                                                <option value="Gen">Gen</option>
                                                <option value="WgCd">WgCd</option>
                                                <option value="GpCp">GpCp</option>
                                                <option value="ACdr">ACdr</option>
                                                <option value="AVM">AVM</option>
                                                <option value="AM">AM</option>
                                                <option value="Adm">Adm</option>
                                                <option value="RAdm">RAdm</option>
                                                <option value="VAdm">VAdm</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.INITIALDETAILS.FIELD.TITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Gender Combo -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="genderCombo">Gender<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="gender" size="1" class="floatLeft" id="gender">
                                                <option value="">Please select...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&page=HELP.REGISTRATION.INITIALDETAILS.FIELD.GENDER'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div>&nbsp;</div><div><p class="bold">Please enter your name as it is stated on official documents, such as your passport, birth certificate or driving licence.</p></div><!--Forename -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="forenameText">First/given name(s)<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtForename" value="<?= $form_data['txtForename']??''?>" size="24" maxlength="50" class="floatLeft" id="txtForename">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&page=HELP.REGISTRATION.INITIALDETAILS.FIELD.FORENAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Surname -->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="surnameText">Surname/family name<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtSurname" value="<?= $form_data['txtSurname']??''?>" size="24" maxlength="30" class="floatLeft" id="txtSurname">
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.INITIALDETAILS.FIELD.SURNAME'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Title-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="dobDayCombo">Date of birth<span class="Req">*</span></label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="cboDobDay" size="1" class="floatLeft" id="cboDobDay">
                                                <option value="">Day</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div id="fullWidth">
                                            <select name="cboDobMonth" size="1" class="floatLeft" id="cboDobMonth">
                                                <option value="">Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div id="fullWidth">
                                            <select name="cboDobYear" size="1" class="floatLeft" id="cboDobYear">
                                                <option value="">Year</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                            </select>
                                        </div>
                                        <a href="#" onclick="helpOpen('HelpServicesServlet', '?functionname=help&amp;page=HELP.REGISTRATION.INITIALDETAILS.FIELD.DATEOFBIRTH'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <br>


                                <!-- Previous and Next  Buttons starts here -->
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="thisFormField">
                                        <a href="register1">
                                        <input type="button" name="btnPrevious" value="previous"  class="submitBtn">
                                        </a>
                                        &nbsp;&nbsp;
                                        <input type="button" name="btnNext" value="next" onclick="check()" class="submitBtn">

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
            </div>
            <!--maincontent ends here-->
            <div class="clearDiv">&nbsp;</div>
            <!-- temporary position/style -->

        <!-- 'footer' div starts here  -->
        <?php include_once "buttom.php"; ?>
        <!--footer ENDS here-->
        <!--footer ends here-->
        <div class="clearDiv">&nbsp;</div>
    </div> <!--wrapper internal ends here-->
</div><!--outer wrapper ends here-->

</body>
</html>
<script type="text/javascript">
    function check() {

        var  title = $('#title').val(); // 标题*
        var  gender = $('#gender').val(); // 性别*
        var  txtForename = $('#txtForename').val(); // 名
        var  txtSurname = $('#txtSurname').val(); // 姓
        var  cboDobYear = $('#cboDobYear').val(); // 年
        var  cboDobMonth = $('#cboDobMonth').val(); // 月
        var  cboDobDay = $('#cboDobDay').val(); // 日
        var err = '';
        if(title == '') {
            err += '<p>Your title must be selected.</p>';
        }
        if(gender == '') {
            err += '<p>Your gender must be specified.</p>';

        }
        if(txtForename == '') {

            err += '<p>Your first/given name(s) must be provided.</p>';
        }
        if(txtSurname == '') {

            err += '<p>Your surname/family name must be provided.</p>';
        }
        if(cboDobYear == '' || cboDobMonth == '' || cboDobDay == '') {

            err += '<p>Your date of birth must be provided.</p>';
        }
        else {
            $('form').submit();
            // window.location="register3";
        }
        $('.errorTxt').html(err);
        scrollTo(0,0);

    }

    $(function() {
        var title_selected = "<?= $form_data['title'] ?? ''?>"
        $("#title").find("option[value='"+title_selected+"']").attr("selected",true);

        var gender_selected = "<?= $form_data['gender'] ?? ''?>"
        $("#gender").find("option[value='"+gender_selected+"']").attr("selected",true);

        var cboDobDay_selected = "<?= $form_data['cboDobDay'] ?? ''?>"
        $("#cboDobDay").find("option[value='"+cboDobDay_selected+"']").attr("selected",true);

        var cboDobMonth_selected = "<?= $form_data['cboDobMonth'] ?? ''?>"
        $("#cboDobMonth").find("option[value='"+cboDobMonth_selected+"']").attr("selected",true);

        var cboDobYear_selected = "<?= $form_data['cboDobYear'] ?? ''?>"
        $("#cboDobYear").find("option[value='"+cboDobYear_selected+"']").attr("selected",true);
    });

</script>