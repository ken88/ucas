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




                        <form name="Form1" method="post" action="">

                            <h2 class="inPage">International GCSE</h2>
                            <p class="bold">Please enter details below, using the 'other' boxes only where the applicable option cannot be found in the lists provided.</p>
                            <p></p><p>Please enter details below using the other boxes only where the applicable option cannot be found in the lists provided.</p><p>

                            </p><p>If the awarding body is not known enter ‘_’ in the other box. </p><p>

                            </p><p>If you have taken CIE English language syllabus 0500, including speaking and listening, or 0510 with oral endorsement, enter your overall grade and your speaking, listening / oral endorsement grade together in the other box, i.e. A*-1 or B -2 etc. </p><p>

                            </p><p>For UK students: </p><p>
                            </p><p>If you have taken a CIE Ofqual-approved IGCSE qualification, that is, CIE First Language English, syllabus 0522 or CIE English as a Second Language, syllabus 0511, in the UK, you should enter your grade as a Level 1 /Level 2 Certificate. Go to the section ‘Level 1/Level 2 Certificates’ to do this. </p><p>

                            </p><p>For students outside the UK</p><p>
                            </p><p>If you have taken CIE First Language English, syllabus 0522 or CIE English as a Second Language, syllabus 0511, outside the UK, enter your overall grade (that is, A*-G) in the grade box below. You do not need to enter a speaking endorsement grade in the ‘other’ box. Your speaking grade is included in your overall grade. You should enter your grade in this section ‘International GCSE’. </p><p>

                            </p><p>If you have completed Cambridge International qualifications please choose CIE as your Awarding organisation, if you are currently taking Cambridge International qualifications choose CAIE
                            </p><p>
                            </p>
                            <!--Title-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="title">Subject<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fitWidth"><select name="cboTitle" size="1" onchange="document.forms[0].titleTextEntry.value='';" class="floatLeft" id="titleCombo">
                                            <option value="">Please select...</option>
                                            <option value="Accounting">Accounting</option>
                                            <option value="Additional Mathematics">Additional Mathematics</option>
                                            <option value="Afrikaans (First Language)">Afrikaans (First Language)</option>
                                            <option value="Afrikaans (Second Language)">Afrikaans (Second Language)</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Arabic (First Language)">Arabic (First Language)</option>
                                            <option value="Arabic (Foreign Language)">Arabic (Foreign Language)</option>
                                            <option value="Art and Design">Art and Design</option>
                                            <option value="Art and Design: 3D Studies">Art and Design: 3D Studies</option>
                                            <option value="Art and Design: Graphics">Art and Design: Graphics</option>
                                            <option value="Art and Design: Painting and Drawing">Art and Design: Painting and Drawing</option>
                                            <option value="Art and Design: Photography">Art and Design: Photography</option>
                                            <option value="Art and Design: Textiles">Art and Design: Textiles</option>
                                            <option value="Bangladesh Studies">Bangladesh Studies</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Biology (Human)">Biology (Human)</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Child Development">Child Development</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Chinese (First Language)">Chinese (First Language)</option>
                                            <option value="Chinese (Mandarin) - Foreign Language">Chinese (Mandarin) - Foreign Language</option>
                                            <option value="Classical Arabic">Classical Arabic</option>
                                            <option value="Co-ordinated Sciences">Co-ordinated Sciences</option>
                                            <option value="Combined Science">Combined Science</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Computer Studies">Computer Studies</option>
                                            <option value="Czech (First Language)">Czech (First Language)</option>
                                            <option value="Design and Technology">Design and Technology</option>
                                            <option value="Development Studies">Development Studies</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Dutch (First Language)">Dutch (First Language)</option>
                                            <option value="Dutch (Foreign Language)">Dutch (Foreign Language)</option>
                                            <option value="Economics">Economics</option>
                                            <option value="English">English</option>
                                            <option value="English (Second Language)">English (Second Language)</option>
                                            <option value="English 1st Lang CIE 0500 (inc speaking/listening)">English 1st Lang CIE 0500 (inc speaking/listening)</option>
                                            <option value="English 1st Lang CIE 0500 (no speaking/listening)">English 1st Lang CIE 0500 (no speaking/listening)</option>
                                            <option value="English 1st Lang CIE 0522 (inc speaking/listening)">English 1st Lang CIE 0522 (inc speaking/listening)</option>
                                            <option value="English 2nd Lang CIE 0510 (oral endorsement)">English 2nd Lang CIE 0510 (oral endorsement)</option>
                                            <option value="English 2nd Lang CIE 0511 (count in oral)">English 2nd Lang CIE 0511 (count in oral)</option>
                                            <option value="English Language">English Language</option>
                                            <option value="English Language A">English Language A</option>
                                            <option value="English Language B">English Language B</option>
                                            <option value="English Literature">English Literature</option>
                                            <option value="Enterprise">Enterprise</option>
                                            <option value="Environmental Management">Environmental Management</option>
                                            <option value="Food Science">Food Science</option>
                                            <option value="Food and Nutrition">Food and Nutrition</option>
                                            <option value="French">French</option>
                                            <option value="French (First Language)">French (First Language)</option>
                                            <option value="French (Foreign Language)">French (Foreign Language)</option>
                                            <option value="Geography">Geography</option>
                                            <option value="German">German</option>
                                            <option value="German (First Language)">German (First Language)</option>
                                            <option value="German (Foreign Language)">German (Foreign Language)</option>
                                            <option value="Global Citizenship">Global Citizenship</option>
                                            <option value="Global Perspectives">Global Perspectives</option>
                                            <option value="Greek (Foreign Language)">Greek (Foreign Language)</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Hindi (Second Language)">Hindi (Second Language)</option>
                                            <option value="History">History</option>
                                            <option value="ICT">ICT</option>
                                            <option value="Indonesian (Foreign Language)">Indonesian (Foreign Language)</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Information and Communication Technology">Information and Communication Technology</option>
                                            <option value="IsiZulu (Second Language)">IsiZulu (Second Language)</option>
                                            <option value="Islamiyat">Islamiyat</option>
                                            <option value="Italian (Foreign Language)">Italian (Foreign Language)</option>
                                            <option value="Japanese (First Language)">Japanese (First Language)</option>
                                            <option value="Japanese (Foreign Language)">Japanese (Foreign Language)</option>
                                            <option value="Kazakh (Second Language)">Kazakh (Second Language)</option>
                                            <option value="Korean (First Language)">Korean (First Language)</option>
                                            <option value="Latin">Latin</option>
                                            <option value="Literature">Literature</option>
                                            <option value="Malay (Foreign Language)">Malay (Foreign Language)</option>
                                            <option value="Mandarin Chinese (Foreign Language)">Mandarin Chinese (Foreign Language)</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Mathematics (Additional)">Mathematics (Additional)</option>
                                            <option value="Mathematics (Further Pure)">Mathematics (Further Pure)</option>
                                            <option value="Mathematics (International)">Mathematics (International)</option>
                                            <option value="Mathematics (with coursework)">Mathematics (with coursework)</option>
                                            <option value="Mathematics A">Mathematics A</option>
                                            <option value="Mathematics B">Mathematics B</option>
                                            <option value="Modern Greek">Modern Greek</option>
                                            <option value="Music">Music</option>
                                            <option value="Natural Economy">Natural Economy</option>
                                            <option value="Pakistan Studies">Pakistan Studies</option>
                                            <option value="Physical Education">Physical Education</option>
                                            <option value="Physical Science">Physical Science</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Portuguese (First Language)">Portuguese (First Language)</option>
                                            <option value="Portuguese (Foreign Language)">Portuguese (Foreign Language)</option>
                                            <option value="Religious Studies">Religious Studies</option>
                                            <option value="Russian (First Language)">Russian (First Language)</option>
                                            <option value="Science (combined)">Science (combined)</option>
                                            <option value="Science (twenty-first century)">Science (twenty-first century)</option>
                                            <option value="Sesotho (First Language)">Sesotho (First Language)</option>
                                            <option value="Sinhala">Sinhala</option>
                                            <option value="Sociology">Sociology</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Spanish (First Language)">Spanish (First Language)</option>
                                            <option value="Spanish (Foreign Language)">Spanish (Foreign Language)</option>
                                            <option value="Spanish Literature">Spanish Literature</option>
                                            <option value="Swahili">Swahili</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Thai (First Language)">Thai (First Language)</option>
                                            <option value="Travel and Tourism">Travel and Tourism</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Turkish (First Language)">Turkish (First Language)</option>
                                            <option value="Urdu">Urdu</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.TITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    <div class="clearDiv">&nbsp;</div>
                                    (other)
                                    <div class="clearDiv">&nbsp;</div>
                                    <input type="text" name="txtTitle" value="<?= \common\logics\Func::getAttributes($data, 'txtTitle')?>" size="39" maxlength="50" onchange="if(document.forms[0].titleCombo){document.forms[0].titleCombo.selectedIndex=0;}" class="floatLeft" id="titleTextEntry">
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
                                            <?php foreach (Yii::$app->params['months'] as $k=>$month){?>
                                                <option <?php if ($k==\common\logics\Func::getAttributes($data, 'cboQualMonth')) echo 'selected'?> value="<?= $k?>"><?= $month?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="cboQualYear" size="1" class="floatLeft" id="qualDateCombo">
                                            <option value="">Year</option>
                                            <?php foreach(\common\logics\Func::generateYear() as $year){?>
                                                <option <?php if ($year == \common\logics\Func::getAttributes($data, 'cboQualYear')) echo 'selected' ?> value="<?= $year?>"><?= $year?></option>
                                            <?php }?>
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
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='CAIE') echo 'selected' ?> value="CAIE">CAIE</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='CIE') echo 'selected' ?> value="CIE">CIE</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='Edexcel') echo 'selected' ?> value="Edexcel">Edexcel</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='PEARSON') echo 'selected' ?> value="PEARSON">PEARSON</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboAwardingBody')=='UCLES') echo 'selected' ?> value="UCLES">UCLES</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtAwardingBody" value="<?= \common\logics\Func::getAttributes($data, 'txtAwardingBody')?>" size="7" maxlength="7" onchange="if(document.forms[0].awardingBodyCombo){document.forms[0].awardingBodyCombo.selectedIndex=0;}" class="floatLeft" id="awardingBodyTextEntry">
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
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='A*') echo 'selected' ?> value="A*">A*</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='A') echo 'selected' ?>  value="A">A</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='B') echo 'selected' ?> value="B">B</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='C') echo 'selected' ?> value="C">C</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='D') echo 'selected' ?> value="D">D</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='E') echo 'selected' ?> value="E">E</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='F') echo 'selected' ?> value="F">F</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='G') echo 'selected' ?> value="G">G</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='U') echo 'selected' ?> value="U">U</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtGrade" value="<?= \common\logics\Func::getAttributes($data, 'txtGrade')?>" size="16" maxlength="20" onchange="if(document.forms[0].gradeCombo){document.forms[0].gradeCombo.selectedIndex=0;}" class="floatLeft" id="gradeTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><br>
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
                            <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                            <input type="submit" name="btnSave" value="save" class="submitBtn">



                            <!--spacer -->
                            &nbsp;&nbsp;
                            <!--end spacer-->

                            <!--display 'save and add similar' button clip -->
                            <input type="submit" name="btnSaveAndAdd" value="save and add similar" class="submitBtn">






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
    $(function () {
        var cboTitle_selected = "<?= \common\logics\Func::getAttributes($data, 'cboTitle') ?>"
        $('#titleCombo').find("option[value='" + cboTitle_selected + "']").attr("selected", true);
    })

    $('input[name=btnSaveAndAdd]').click(function () {
        $('form').append('<input type="hidden" name="saveAndAdd" value="1" />')
        $('form').submit()
    })

</script>
