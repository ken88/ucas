<?php include_once "top.php";?>
<style>
    .errorTxt p {
        margin: 0;
        padding: 0;
        color: #309728;
        line-height: normal;
        padding-left: 17px;
        background: url(../static/images/errorIco.gif) no-repeat top left #f1f0ee;
    }
</style>
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Education</h1>
                <div id="logOut"><a href="#">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <div id="strapLineApplyPrint">
                <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />
            </div><!--StrapLinePrint ENDS here-->
        </div>
        <!--header end -->

        <div class="clearDiv">&nbsp;</div>
        <div id="mainContent">
            <!--menu starts 左面菜单栏开始-->
            <?php include_once "menu.php"; ?>
            <!--menu ends 左面菜单栏结束-->

            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="<?= \yii\helpers\Url::to(['useradmin/welcome'])?>">Welcome</a> &gt;
                    <a href="<?= \yii\helpers\Url::to(['useradmin/education'])?>">Education</a> &gt;
                    <?= Yii::$app->request->get('val')?>
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div class="errorTxt"></div>
                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">

                        <!--clip starts-->





                        <form name="Form1" method="post" action="EducationServlet?id=26e02525cc9d846fbb82de653d4e&amp;ran=6qyfajmd1dfd">

                            <h2 class="inPage">Cambridge International A Level</h2>
                            <p class="bold">Please enter details below, using the 'other' boxes only where the applicable option cannot be found in the lists provided.</p>
                            <p></p>
                            <!--Title-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="title">Title<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fitWidth"><select name="cboTitle" size="1" onchange="document.forms[0].titleTextEntry.value='';" class="floatLeft" id="titleCombo">
                                            <option value="">Please select...</option>
                                            <option value="Accounting - 9706">Accounting - 9706</option>
                                            <option value="Afrikaans - 9679">Afrikaans - 9679</option>
                                            <option value="Arabic - 9680">Arabic - 9680</option>
                                            <option value="Art and Design - 9479">Art and Design - 9479</option>
                                            <option value="Art and Design - 9704">Art and Design - 9704</option>
                                            <option value="Biology - 9700">Biology - 9700</option>
                                            <option value="Business - 9609">Business - 9609</option>
                                            <option value="Chemistry - 9701">Chemistry - 9701</option>
                                            <option value="Chinese - 9715">Chinese - 9715</option>
                                            <option value="Classical Studies - 9274">Classical Studies - 9274</option>
                                            <option value="Computer Science - 9608">Computer Science - 9608</option>
                                            <option value="Computer Science - 9618 (from 2021)&nbsp;New">Computer Science - 9618 (from 2021)&nbsp;New</option>
                                            <option value="Design and Technology - 9705">Design and Technology - 9705</option>
                                            <option value="Design and Textiles - 9631">Design and Textiles - 9631</option>
                                            <option value="Digital Media and Design - 9481&nbsp;New">Digital Media and Design - 9481&nbsp;New</option>
                                            <option value="Divinity - 9011">Divinity - 9011</option>
                                            <option value="Economics - 9708">Economics - 9708</option>
                                            <option value="English - Language - 9093">English - Language - 9093</option>
                                            <option value="English - Literature - 9695">English - Literature - 9695</option>
                                            <option value="Food Studies - 9336">Food Studies - 9336</option>
                                            <option value="French - 9716">French - 9716</option>
                                            <option value="Geography - 9696">Geography - 9696</option>
                                            <option value="German - 9717">German - 9717</option>
                                            <option value="Global Perspectives and Research - 9239">Global Perspectives and Research - 9239</option>
                                            <option value="Hindi - 9687">Hindi - 9687</option>
                                            <option value="Hinduism - 9014">Hinduism - 9014</option>
                                            <option value="Hinduism - 9487&nbsp;New">Hinduism - 9487&nbsp;New</option>
                                            <option value="History - 9389">History - 9389</option>
                                            <option value="History - 9489&nbsp;New">History - 9489&nbsp;New</option>
                                            <option value="Information Technology - 9626">Information Technology - 9626</option>
                                            <option value="Islamic Studies - 9013">Islamic Studies - 9013</option>
                                            <option value="Islamic Studies - 9488&nbsp;New">Islamic Studies - 9488&nbsp;New</option>
                                            <option value="Law - 9084">Law - 9084</option>
                                            <option value="Marathi - 9688">Marathi - 9688</option>
                                            <option value="Marine Science - 9693">Marine Science - 9693</option>
                                            <option value="Mathematics - 9709">Mathematics - 9709</option>
                                            <option value="Mathematics - Further - 9231">Mathematics - Further - 9231</option>
                                            <option value="Media Studies - 9607&nbsp;New">Media Studies - 9607&nbsp;New</option>
                                            <option value="Music - 9483&nbsp;New">Music - 9483&nbsp;New</option>
                                            <option value="Music - 9703">Music - 9703</option>
                                            <option value="Physical Education - 9396">Physical Education - 9396</option>
                                            <option value="Physics - 9702">Physics - 9702</option>
                                            <option value="Portuguese - 9718">Portuguese - 9718</option>
                                            <option value="Psychology - 9990&nbsp;New">Psychology - 9990&nbsp;New</option>
                                            <option value="Sociology - 9699">Sociology - 9699</option>
                                            <option value="Spanish - 9719">Spanish - 9719</option>
                                            <option value="Tamil - 9689">Tamil - 9689</option>
                                            <option value="Thinking Skills - 9694">Thinking Skills - 9694</option>
                                            <option value="Travel and Tourism - 9395">Travel and Tourism - 9395</option>
                                            <option value="Urdu - 9676">Urdu - 9676</option>
                                            <option value="Urdu - Pakistan only - 9686">Urdu - Pakistan only - 9686</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.TITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    <div class="clearDiv">&nbsp;</div>
                                    (other)
                                    <div class="clearDiv">&nbsp;</div>
                                    <input type="text" name="txtTitle" value="" size="39" maxlength="50" onchange="if(document.forms[0].titleCombo){document.forms[0].titleCombo.selectedIndex=0;}" class="floatLeft" id="titleTextEntry">
                                </div>
                            </div><!--close form element -->
                            <!--Start date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="qualDateCombo">Qualification date<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboQualMonth" size="1" class="floatLeft" id="qualDateCombo">
                                            <option value="-">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select name="cboQualYear" size="1" class="floatLeft" id="qualDateCombo">
                                            <option value="">Year</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
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
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.DATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Awarding Body-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="awarding body">Awarding organisation<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboAwardingBody" size="1" onchange="document.forms[0].awardingBodyTextEntry.value='';" class="floatLeft" id="awardingBodyCombo">
                                            <option value="">Please select...</option>
                                            <option value="CAIE">CAIE</option>
                                            <option value="CI">CI</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtAwardingBody" value="" size="7" maxlength="7" onchange="if(document.forms[0].awardingBodyCombo){document.forms[0].awardingBodyCombo.selectedIndex=0;}" class="floatLeft" id="awardingBodyTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.AWARDINGBODY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Grade-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="grade">Grade<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboGrade" size="1" onchange="document.forms[0].gradeTextEntry.value='';" class="floatLeft" id="gradeCombo">
                                            <option value="?" selected="selected">Please select...</option>
                                            <option value="">Pending</option>
                                            <option value="A*">A*</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="U (Ungraded)">U (Ungraded)</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtGrade" value="" size="16" maxlength="20" onchange="if(document.forms[0].gradeCombo){document.forms[0].gradeCombo.selectedIndex=0;}" class="floatLeft" id="gradeTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><br>
                            <div class="clearDiv">&nbsp;</div>






                            <div id="unit" class="unit">
                            <hr>
                            <h2 class="inPage">Module / unit <span class="num">1</span></h2>
                            <!--Module Title-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="module title">Subject</label>
                                </div>
                                <div class="thisFormField">
                                    <input type="text" name="txtModTitle0" value="" size="39" maxlength="50" onchange="if(document.forms[0].modTitleCombo0){document.forms[0].modTitleCombo0.selectedIndex=0;}" class="floatLeft" id="modTitleTextEntry0">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODTITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Module Start date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="modDateCombo">Qualification date</label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth"><select name="cboModMonth0" size="1" class="floatLeft" id="modDateCombo0">
                                            <option value="-">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select name="cboModYear0" size="1" class="floatLeft" id="modDateCombo0">
                                            <option value="">Year</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
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
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <div class="clearDiv">&nbsp;</div>
                    </div>
                    <div id="parent"></div>







                            <hr>
                            <br>
                            <input type="button" name="btnAddModule" value="add another module"  onclick="addDiv();" class="seeListBtn">

                            <div class="clearDiv">&nbsp;</div>
                            <hr>


                            <!-- //print the "Back to summary" link on the screen -->
                            <ul class="skinny">
                                <li>
                                    <a href="/useradmin/education">back to summary</a>
                                </li>
                            </ul>
                            <br>&nbsp;

                            <!--display 'save' button clip -->
                            <input type="button" name="btnSave" value="save" class="submitBtn">



                            <!--spacer -->
                            &nbsp;&nbsp;
                            <!--end spacer-->

                            <!--display 'save and add similar' button clip -->
                            <input type="button" name="btnSaveAndAdd" value="save and add similar" class="submitBtn">






                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->

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
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->


</body>
</html>
<script type="text/javascript">
    var arr = '<?= $arr;?>';
    var obj = eval('(' + arr + ')');
    $('#titleCombo').change(function () {
        var val = $(this).val()
        var strHtml = '';
        if (val != '') {
            var len = obj[val].length;
            strHtml = "<option value=''>Please select ...</option>"
            for(var i = 0 ; i < len; i++) {
                strHtml += "<option value='"+obj[val][i]+"'>"+obj[val][i]+"</option>"
            }
        } else {
            strHtml = "<option value=''>Please select ...</option>"
        }

        // console.log(obj[val])
        $('.sub-x').html(strHtml);
    })



    //divs是创建各个控件时赋值变量ID所用，number是计数用
    var number = document.getElementsByClassName('unit').length;
    var divs = 0;
    var addDiv = function () {
        if (number == 10) return;//最多添加5个div
        var oDiv = document.createElement("div");
        document.getElementById("parent").appendChild(oDiv);
        oDiv.id = "div_" + divs;
        oDiv.className = 'unit';
        oDiv.style.width = "100%";
        oDiv.style.height = "auto";
        oDiv.style.marginTop = "30px";
        var _div = document.getElementById("unit").innerHTML;
        document.getElementById(oDiv.id).innerHTML = _div;
        //添加按钮
        // var commit = document.createElement("input");
        // commit.type = "button";
        // commit.value = "提交";
        // commit.id = "com_" + divs;
        // commit.className = "btn btn-success";
        // commit.style.marginTop = "10px";
        // commit.style.marginLeft = "220px";
        // oDiv.appendChild(commit);

        divs++;
        number++;
        $('#'+oDiv.id).find('.num').text(number)
        $('#parent').find('.Req').text('')
    }

</script>
