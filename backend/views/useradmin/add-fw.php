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

                            <h2 class="inPage"><?= Yii::$app->request->get('val')?></h2>
                            <p class="bold">Please enter details below, using the 'other' boxes only where the applicable option cannot be found in the lists provided.</p>
                            <p></p><p>For AS subjects please enter when you plan to 'certificate' your AS. If you are in any doubt about this you should check with your school or college, or whoever is helping you with your application. Or you can contact our Customer Service Unit. Click on the 'contact us' link at the top of the page for our contact details. Entering unit details for AS levels is optional.</p><p>

                            </p><p>If you have completed Cambridge International qualifications please choose CIE as your Awarding organisation, if you are currently taking Cambridge International qualifications choose CAIE</p><p>
                            </p>
                            <!--Title-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="title">Subject<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fitWidth">
                                        <select name="cboTitle" size="1" class="floatLeft" id="titleCombo">
                                            <option value="">Please select...</option>
                                            <option value="Accounting">Accounting</option>
                                            <option value="Afrikaans - Language">Afrikaans - Language</option>
                                            <option value="Ancient History">Ancient History</option>
                                            <option value="Ancient History (JACT)">Ancient History (JACT)</option>
                                            <option value="Anthropology">Anthropology</option>
                                            <option value="Applied Art and Design">Applied Art and Design</option>
                                            <option value="Applied Business">Applied Business</option>
                                            <option value="Applied Information and Communication Tech">Applied Information and Communication Tech</option>
                                            <option value="Applied Mathematics">Applied Mathematics</option>
                                            <option value="Applied Performing Arts">Applied Performing Arts</option>
                                            <option value="Applied Science">Applied Science</option>
                                            <option value="Applied Welsh Second Language">Applied Welsh Second Language</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="Arabic - Language">Arabic - Language</option>
                                            <option value="Archaeology">Archaeology</option>
                                            <option value="Art and Design">Art and Design</option>
                                            <option value="Art and Design: 3D Design">Art and Design: 3D Design</option>
                                            <option value="Art and Design: Critical and Contextual St">Art and Design: Critical and Contextual St</option>
                                            <option value="Art and Design: Fine Art">Art and Design: Fine Art</option>
                                            <option value="Art and Design: Graphic Design">Art and Design: Graphic Design</option>
                                            <option value="Art and Design: Photography">Art and Design: Photography</option>
                                            <option value="Art and Design: Textiles">Art and Design: Textiles</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Biblical Hebrew">Biblical Hebrew</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Biology &amp; Biology (Human)">Biology &amp; Biology (Human)</option>
                                            <option value="Biology &amp; Human Biology A">Biology &amp; Human Biology A</option>
                                            <option value="Biology (Human)">Biology (Human)</option>
                                            <option value="Biology (Salters-Nuffield)">Biology (Salters-Nuffield)</option>
                                            <option value="Biology A">Biology A</option>
                                            <option value="Biology B">Biology B</option>
                                            <option value="Business">Business</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Chemistry (Nuffield)">Chemistry (Nuffield)</option>
                                            <option value="Chemistry A">Chemistry A</option>
                                            <option value="Chemistry B (Salters)">Chemistry B (Salters)</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Chinese - Language">Chinese - Language</option>
                                            <option value="Chinese - Literature">Chinese - Literature</option>
                                            <option value="Citizenship Studies">Citizenship Studies</option>
                                            <option value="Classical Civilisation">Classical Civilisation</option>
                                            <option value="Classical Greek">Classical Greek</option>
                                            <option value="Classical Studies">Classical Studies</option>
                                            <option value="Classics">Classics</option>
                                            <option value="Classics: Ancient History">Classics: Ancient History</option>
                                            <option value="Classics: Classical Civilisation">Classics: Classical Civilisation</option>
                                            <option value="Classics: Classical Greek">Classics: Classical Greek</option>
                                            <option value="Classics: Latin">Classics: Latin</option>
                                            <option value="Communication Studies">Communication Studies</option>
                                            <option value="Communication and Culture">Communication and Culture</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Computing">Computing</option>
                                            <option value="Creative Writing">Creative Writing</option>
                                            <option value="Critical Thinking">Critical Thinking</option>
                                            <option value="Cymraeg Ail Iaith">Cymraeg Ail Iaith</option>
                                            <option value="Cymraeg Iaith Gyntaf">Cymraeg Iaith Gyntaf</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Design &amp; Tech:Prod Des-Graphics with Mat Tech">Design &amp; Tech:Prod Des-Graphics with Mat Tech</option>
                                            <option value="Design &amp; Tech:Prod Des-Resistant Mats Tech">Design &amp; Tech:Prod Des-Resistant Mats Tech</option>
                                            <option value="Design &amp; Tech:Product Design-Textiles Tech">Design &amp; Tech:Product Design-Textiles Tech</option>
                                            <option value="Design &amp; Technology">Design &amp; Technology</option>
                                            <option value="Design and Technology: Fashion and Textiles">Design and Technology: Fashion and Textiles</option>
                                            <option value="Design and Technology: Food Technology">Design and Technology: Food Technology</option>
                                            <option value="Design and Technology: Product Design">Design and Technology: Product Design</option>
                                            <option value="Design and Technology: Systems &amp; Control Tech">Design and Technology: Systems &amp; Control Tech</option>
                                            <option value="Design and Technology: Textiles Technology">Design and Technology: Textiles Technology</option>
                                            <option value="Design and Textiles">Design and Textiles</option>
                                            <option value="Digital Technology">Digital Technology</option>
                                            <option value="Discrete Mathematics">Discrete Mathematics</option>
                                            <option value="Divinity">Divinity</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Drama and Theatre Studies">Drama and Theatre Studies</option>
                                            <option value="Dress and Textiles">Dress and Textiles</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Economics &amp; Business Studies">Economics &amp; Business Studies</option>
                                            <option value="Economics and Business Studies (Nuffield)">Economics and Business Studies (Nuffield)</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="English Language">English Language</option>
                                            <option value="English Language &amp; Literature">English Language &amp; Literature</option>
                                            <option value="English Language &amp; Literature A">English Language &amp; Literature A</option>
                                            <option value="English Language &amp; Literature B">English Language &amp; Literature B</option>
                                            <option value="English Language A">English Language A</option>
                                            <option value="English Language B">English Language B</option>
                                            <option value="English Literature">English Literature</option>
                                            <option value="English Literature A">English Literature A</option>
                                            <option value="English Literature B">English Literature B</option>
                                            <option value="Environmental Management">Environmental Management</option>
                                            <option value="Environmental Science">Environmental Science</option>
                                            <option value="Environmental Studies">Environmental Studies</option>
                                            <option value="European Studies">European Studies</option>
                                            <option value="Film Studies">Film Studies</option>
                                            <option value="Food Studies">Food Studies</option>
                                            <option value="French">French</option>
                                            <option value="French - Language">French - Language</option>
                                            <option value="French - Literature">French - Literature</option>
                                            <option value="Further Mathematics">Further Mathematics</option>
                                            <option value="Further Mathematics (Additional)">Further Mathematics (Additional)</option>
                                            <option value="Further Mathematics (MEI)">Further Mathematics (MEI)</option>
                                            <option value="General Paper 8001">General Paper 8001</option>
                                            <option value="General Paper 8004">General Paper 8004</option>
                                            <option value="General Studies">General Studies</option>
                                            <option value="General Studies A">General Studies A</option>
                                            <option value="General Studies B">General Studies B</option>
                                            <option value="Geography">Geography</option>
                                            <option value="Geography A">Geography A</option>
                                            <option value="Geography B">Geography B</option>
                                            <option value="Geology">Geology</option>
                                            <option value="German">German</option>
                                            <option value="German - Language">German - Language</option>
                                            <option value="Global Perspectives &amp; Research (AS)">Global Perspectives &amp; Research (AS)</option>
                                            <option value="Government &amp; Politics">Government &amp; Politics</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Health and Social Care">Health and Social Care</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Hindi - Language">Hindi - Language</option>
                                            <option value="Hindi - Literature">Hindi - Literature</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="History">History</option>
                                            <option value="History B">History B</option>
                                            <option value="History of Art">History of Art</option>
                                            <option value="History of Art and Design">History of Art and Design</option>
                                            <option value="History, Philosophy and Ethics of Science">History, Philosophy and Ethics of Science</option>
                                            <option value="Home Economics">Home Economics</option>
                                            <option value="Human Biology">Human Biology</option>
                                            <option value="Human Biology A">Human Biology A</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Information and Communication Technology">Information and Communication Technology</option>
                                            <option value="Irish">Irish</option>
                                            <option value="Islamic Studies">Islamic Studies</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Japanese Language">Japanese Language</option>
                                            <option value="Language &amp; Literature in English">Language &amp; Literature in English</option>
                                            <option value="Latin">Latin</option>
                                            <option value="Law">Law</option>
                                            <option value="Learning for Life and Work">Learning for Life and Work</option>
                                            <option value="Leisure Studies">Leisure Studies</option>
                                            <option value="Life and Health Sciences">Life and Health Sciences</option>
                                            <option value="Literature in English">Literature in English</option>
                                            <option value="Marathi - Language">Marathi - Language</option>
                                            <option value="Marine Science">Marine Science</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Mathematics (Further)">Mathematics (Further)</option>
                                            <option value="Mathematics (MEI)">Mathematics (MEI)</option>
                                            <option value="Mathematics A">Mathematics A</option>
                                            <option value="Mathematics B">Mathematics B</option>
                                            <option value="Mechanics">Mechanics</option>
                                            <option value="Media Studies">Media Studies</option>
                                            <option value="Media: Communication and Production">Media: Communication and Production</option>
                                            <option value="Modern Greek">Modern Greek</option>
                                            <option value="Modern Hebrew">Modern Hebrew</option>
                                            <option value="Moving Image Arts">Moving Image Arts</option>
                                            <option value="Music">Music</option>
                                            <option value="Music Technology">Music Technology</option>
                                            <option value="Nepal Studies">Nepal Studies</option>
                                            <option value="Nutrition and Food Science">Nutrition and Food Science</option>
                                            <option value="Panjabi">Panjabi</option>
                                            <option value="Performance Studies">Performance Studies</option>
                                            <option value="Performing Arts">Performing Arts</option>
                                            <option value="Persian">Persian</option>
                                            <option value="Philosophy">Philosophy</option>
                                            <option value="Physical Education">Physical Education</option>
                                            <option value="Physical Science">Physical Science</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Physics (Salters Horners)">Physics (Salters Horners)</option>
                                            <option value="Physics A">Physics A</option>
                                            <option value="Physics B">Physics B</option>
                                            <option value="Physics B (Advancing Physics)">Physics B (Advancing Physics)</option>
                                            <option value="Polish">Polish</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Portuguese - Language">Portuguese - Language</option>
                                            <option value="Portuguese - Literature">Portuguese - Literature</option>
                                            <option value="Psychology">Psychology</option>
                                            <option value="Psychology A">Psychology A</option>
                                            <option value="Psychology B">Psychology B</option>
                                            <option value="Pure Mathematics">Pure Mathematics</option>
                                            <option value="Pure Mathematics (MEI)">Pure Mathematics (MEI)</option>
                                            <option value="Religious Studies">Religious Studies</option>
                                            <option value="Research Project">Research Project</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Science">Science</option>
                                            <option value="Science for Public Understanding">Science for Public Understanding</option>
                                            <option value="Science in Society">Science in Society</option>
                                            <option value="Social Policy">Social Policy</option>
                                            <option value="Social Science: Citizenship">Social Science: Citizenship</option>
                                            <option value="Sociology">Sociology</option>
                                            <option value="Software Systems Design">Software Systems Design</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Spanish - First Language">Spanish - First Language</option>
                                            <option value="Spanish - Language">Spanish - Language</option>
                                            <option value="Spanish - Literature">Spanish - Literature</option>
                                            <option value="Sport &amp; Physical Education">Sport &amp; Physical Education</option>
                                            <option value="Sports Science and the Active Leisure Industry">Sports Science and the Active Leisure Industry</option>
                                            <option value="Statistics">Statistics</option>
                                            <option value="Statistics (MEI)">Statistics (MEI)</option>
                                            <option value="Tamil - Language">Tamil - Language</option>
                                            <option value="Technology &amp; Design">Technology &amp; Design</option>
                                            <option value="Technology &amp; Design (Systems &amp; Control)">Technology &amp; Design (Systems &amp; Control)</option>
                                            <option value="Telugu - Language">Telugu - Language</option>
                                            <option value="Thinking Skills">Thinking Skills</option>
                                            <option value="Travel and Tourism">Travel and Tourism</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Urdu">Urdu</option>
                                            <option value="Urdu - Language">Urdu - Language</option>
                                            <option value="Urdu - Pakistan only">Urdu - Pakistan only</option>
                                            <option value="Use of Mathematics">Use of Mathematics</option>
                                            <option value="Welsh">Welsh</option>
                                            <option value="Welsh Second Language">Welsh Second Language</option>
                                            <option value="World Development">World Development</option>
                                        </select>
                                    </div>
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.TITLE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    <div class="clearDiv">&nbsp;</div>
                                    (other)
                                    <div class="clearDiv">&nbsp;</div>
                                    <input type="text" name="txtTitle" value="<?= \common\logics\Func::getAttributes($data, 'txtTitle')?>" size="39" maxlength="50"  class="floatLeft" id="titleTextEntry">
                                </div>
                            </div><!--close form element -->
                            <!--Start date-->
                            <div class="thisFormElem">
                                <!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="qualDateCombo">Qualification date<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth">
                                        <select name="cboQualMonth" size="1" class="floatLeft" id="yue">
                                            <option value="">Month</option>
                                            <?php foreach (Yii::$app->params['months'] as $k=>$month){?>
                                            <option <?php if ($k==\common\logics\Func::getAttributes($data, 'cboQualMonth')) echo 'selected'?> value="<?= $k?>"><?= $month?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="cboQualYear" size="1" class="floatLeft" id="nian">
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
                                    <div id="fullWidth">
                                        <select name="cboAwardingBody" size="1" onchange="document.forms[0].awardingBodyTextEntry.value='';" class="floatLeft" id="awardingBodyCombo">
                                            <option value="">Please select...</option>
                                            <option value="AQA">AQA</option>
                                            <option value="CAIE">CAIE</option>
                                            <option value="CCEA">CCEA</option>
                                            <option value="CIE">CIE</option>
                                            <option value="Edexcel">Edexcel</option>
                                            <option value="Eduqas">Eduqas</option>
                                            <option value="OCR">OCR</option>
                                            <option value="UCLES">UCLES</option>
                                            <option value="WJEC">WJEC</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtAwardingBody" value="<?= \common\logics\Func::getAttributes($data, 'txtAwardingBody')?>" size="7" maxlength="7" class="floatLeft" id="awardingBodyTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.AWARDINGBODY'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <!--Grade-->
                            <div class="thisFormElem"><!--open form element -->
                                <div class="thisFormTxt">
                                    <label for="grade">Grade<span class="Req">*</span></label>
                                </div>
                                <div class="thisFormField">
                                    <div id="fullWidth">
                                        <select name="cboGrade" size="1"  class="floatLeft" id="gradeCombo">
                                            <option value="?" selected="selected">Please select...</option>
                                            <option value="">Pending</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='A') echo 'selected'?> value="A">A</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='B') echo 'selected'?> value="B">B</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='C') echo 'selected'?> value="C">C</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='D') echo 'selected'?> value="D">D</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='E') echo 'selected'?> value="E">E</option>
                                            <option <?php if (\common\logics\Func::getAttributes($data, 'cboGrade')=='U') echo 'selected'?> value="U">U</option>
                                        </select>
                                    </div>
                                    <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                    <input type="text" name="txtGrade" value="<?= \common\logics\Func::getAttributes($data, 'txtGrade')?>" size="16" maxlength="20"  class="floatLeft" id="gradeTextEntry">
                                    <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                </div>
                            </div><!--close form element -->
                            <br><br>
                            <div class="clearDiv">&nbsp;</div>


                            <?php
                            $cboModYears = \common\logics\Func::getAttributes($data, 'cboModYear0');
                            if ($cboModYears && count($cboModYears)>0){
                                foreach ($cboModYears as $key=>$cboModYear){
                            ?>
                            <div id="unit" class="unit">
                                <hr>
                                <h2 class="inPage">Module / unit <span class="num"><?= ($key+1)?></span></h2>
                                <!--Module Title-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="module title">Subject</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtModTitle0[]" value="<?= \common\logics\Func::getAttributes($data,'txtModTitle0')[$key] ?>" size="39" maxlength="50" class="floatLeft" id="modTitleTextEntry0">
                                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODTITLE'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help">
                                        </a>
                                        <div class="clearDiv">&nbsp;</div>

                                    </div>
                                </div><!--close form element -->
                                <!--Module Start date-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="modDateCombo">Qualification date</label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="cboModMonth0[]" size="1" class="floatLeft" id="modDateCombo0">
                                                <option value="-">Month</option>
                                                <?php foreach (Yii::$app->params['months'] as $k=>$month){?>
                                                <option <?php if ($k==\common\logics\Func::getAttributes($data,'cboModMonth0')[$key]) echo 'selected' ?> value="<?= $k?>"><?= $month?></option>
                                           <?php } ?>
                                            </select>
                                            <select name="cboModYear0[]" size="1" class="floatLeft" id="modDateCombo0">
                                                <option value="">Year</option>
                                                <?php foreach (\common\logics\Func::generateYear() as $year){?>
                                                <option <?php if ($year==\common\logics\Func::getAttributes($data,'cboModYear0')[$key]) echo 'selected' ?> value="<?= $year?>"><?= $year?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODDATE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <!--Module Grade-->
                                <div class="thisFormElem"><!--open form element -->

                                    <div class="thisFormTxt">
                                        <label for="module grade">Grade</label>
                                    </div>

                                    <div class="thisFormField">
                                        <div id="fullWidth">
                                            <select name="cboGrade0[]" size="1"  class="floatLeft" id="gradeCombo">
                                                <option value="?" selected="selected">Please select...</option>
                                                <option value="">Pending</option>
                                                <option <?php if ('A'==\common\logics\Func::getAttributes($data,'cboGrade0')[$key]) echo 'selected' ?> value="A">A</option>
                                                <option <?php if ('B'==\common\logics\Func::getAttributes($data,'cboGrade0')[$key]) echo 'selected' ?> value="B">B</option>
                                                <option <?php if ('C'==\common\logics\Func::getAttributes($data,'cboGrade0')[$key]) echo 'selected' ?> value="C">C</option>
                                                <option <?php if ('D'==\common\logics\Func::getAttributes($data,'cboGrade0')[$key]) echo 'selected' ?> value="D">D</option>
                                                <option <?php if ('E'==\common\logics\Func::getAttributes($data,'cboGrade0')[$key]) echo 'selected' ?> value="E">E</option>
                                                <option <?php if ('U'==\common\logics\Func::getAttributes($data,'cboGrade0')[$key]) echo 'selected' ?> value="U">U</option>
                                            </select>
                                        </div>
                                        <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                        <input type="text" name="txtGrade0[]"  size="16" maxlength="20"  class="floatLeft" id="gradeTextEntry" value="<?= \common\logics\Func::getAttributes($data,'txtGrade0')[$key]?>">
                                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                            </div>
                            <?php
                                }
                            }else{ ?>
                            <div id="unit" class="unit">
                                <hr>
                                <h2 class="inPage">Module / unit <span class="num">1</span></h2>
                                <!--Module Title-->
                                <div class="thisFormElem"><!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="module title">Subject</label>
                                    </div>
                                    <div class="thisFormField">
                                        <input type="text" name="txtModTitle0[]" value="" size="39" maxlength="50" class="floatLeft" id="modTitleTextEntry0">
                                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.MODTITLE'); return false;">
                                            <img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help">
                                        </a>
                                        <div class="clearDiv">&nbsp;</div>

                                    </div>
                                </div><!--close form element -->
                                <!--Module Start date-->
                                <div class="thisFormElem">
                                    <!--open form element -->
                                    <div class="thisFormTxt">
                                        <label for="modDateCombo">Qualification date</label>
                                    </div>
                                    <div class="thisFormField">
                                        <div id="fullWidth"><select name="cboModMonth0[]" size="1" class="floatLeft" id="modDateCombo0">
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
                                            <select name="cboModYear0[]" size="1" class="floatLeft" id="modDateCombo0">
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
                                <!--Module Grade-->
                                <div class="thisFormElem"><!--open form element -->

                                    <div class="thisFormTxt">
                                        <label for="module grade">Grade</label>
                                    </div>

                                    <div class="thisFormField">
                                        <div id="fullWidth">
                                            <select name="cboGrade0[]" size="1"  class="floatLeft" id="gradeCombo">
                                                <option value="?" selected="selected">Please select...</option>
                                                <option value="">Pending</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="U">U</option>
                                            </select>
                                        </div>
                                        <span class="floatLeft">&nbsp;&nbsp;(other)&nbsp;&nbsp;</span>
                                        <input type="text" name="txtGrade0[]"  size="16" maxlength="20"  class="floatLeft" id="gradeTextEntry">
                                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.EDUCATION.QUALIFICATION.FIELD.GRADE'); return false;"><img src="/static/images/questMarkBox.gif" width="20" height="20" class="floatLeft" alt="Help"></a>
                                    </div>
                                </div><!--close form element -->
                                <div class="clearDiv">&nbsp;</div>
                            </div>
                            <?php } ?>
                            <div id="parent"></div>








                            <hr>
                            <br>
                            <input type="button"  onclick="addDiv();"  value="add another module" class="seeListBtn">

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
                            <input type="button" name="btnSave" value="save" onclick="check()" class="submitBtn">



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
    function check() {
        var titleCombo = $('#titleCombo').val();
        var titleTextEntry = $('#titleTextEntry').val();

        var yue = $('#yue').val();
        var nian = $('#nian').val();

        var awardingBodyCombo = $('#awardingBodyCombo').val();
        var awardingBodyTextEntry = $('#awardingBodyTextEntry').val();

        var gradeCombo= $('#gradeCombo').val();
        var gradeTextEntry= $('#gradeTextEntry').val();
        var err = '';
        if (titleCombo == '' && titleTextEntry == '' ) {
            err += '<p>Qualification and/or module(s) could not be saved.</p>';
        }
        if (nian == '' || yue == '') {
            err += '<p>You must enter the qualification date.</p>';
        }
        if (awardingBodyCombo == '' && awardingBodyTextEntry == '') {
            err += '<p>One or more mandatory fields have not been filled.</p>';
        }
        if (gradeCombo == '?' && gradeTextEntry == '') {
            err += '<p>One or more mandatory fields have not been filled.</p>';
        }
        $('.errorTxt').html(err);
        if (err == '') {
            $('form').submit()
        } else {
            scrollTo(0,0);
        }

    }
    $(function () {
        // var cboQualMonth_selected = ""
        // $('#yue').find("option[value='"+cboQualMonth_selected+"']").attr("selected",true);
        // var cboQualYear_selected = ""
        // $('#nian').find("option[value='"+cboQualYear_selected+"']").attr("selected",true);
        var cboTitle_selected = "<?= \common\logics\Func::getAttributes($data, 'cboTitle') ?>"
        $('#titleCombo').find("option[value='"+cboTitle_selected+"']").attr("selected",true);
        //
        var cboAwardingBody_selected = "<?= \common\logics\Func::getAttributes($data, 'cboAwardingBody') ?>"
        $('#awardingBodyCombo').find("option[value='"+cboAwardingBody_selected+"']").attr("selected",true);
        // var cboGrade_selected = ""
        // $('#gradeCombo').find("option[value='"+cboGrade_selected+"']").attr("selected",true);

    })



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

    $('input[name=btnSaveAndAdd]').click(function () {
        $('form').append('<input type="hidden" name="saveAndAdd" value="1" />')
        $('form').submit()
    })
</script>
