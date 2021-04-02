<?php include_once "top.php"; ?>
<div id="logo" class="floatLeft">
    <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS"/>
</div><!--logo ENDS here-->
<div class="clearDiv">&nbsp;</div>
<div id="strapLineApply">
    <h1 class="EN">View all</h1>
    <div id="logOut"><a href="#">Log out</a></div>
</div><!--strapLineApply ENDS here-->
<div id="strapLineApplyPrint">
    <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply"/>
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
            <a href="/useradmin/welcome">Welcome</a> &gt;
            View all
        </div><!--breadcrumb ENDS here-->
        <hr>
        <div id="midBoxInternalWide">

            <!--Form starts here-->

            <div class="thisForm">

                <form name="Form1" method="post" action="">

                    <div id="ViewAll">
                        <div class="inPage"><p>Please review your application below to ensure that the details you have
                                provided are both correct and reflect your preferences. Please confirm your preferences
                                to receive further information from UCAS and UCAS Media about courses or products and
                                services by ticking "Section completed" at the bottom of this screen.<br><br>If the
                                details below are either incorrect, or do not reflect your preferences, please change
                                your application.</p></div>
                        <table>
                            <tbody>
                            <tr>
                                <td class="sectionHeading" valign="bottom">
                                    <div class="cardIcon"><img valign="bottom" src="/static/images/complete.gif"
                                                               width="14" height="14" class="floatLeft" alt="Completed">
                                    </div>&nbsp;Personal details
                                </td>
                                <td class="sectionStatus">
                                    <ul class="skinny">
                                        <li>
                                            <a href="<?= \yii\helpers\Url::to(['useradmin/personaldetails']) ?>">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 class="inPage">
                            Personal&nbsp;&nbsp;
                        </h2>
                        <div class="warningTxt"><p>Please tick this box if you agree with all the substituted characters
                                in your Personal details section. If you want to make any changes, click 'edit'.&nbsp;
                                <input type="hidden" name="=chkPDAgreed" value="0">
                                <input type="checkbox" value="1" <?php if ($model->chkPDAgreed) echo 'checked' ?>
                                       name="chkPDAgreed" id="chkPDAgreed"></p></div>
                        <table width="100%">
                            <tbody>
                            <tr style="width:100%;">
                                <th style="width:33%; border-top:none;">&nbsp;</th>
                                <td class="value" style="width:33%; border-top:none;">&nbsp;</td>
                                <td class="value" style="width:33%; border-top:none;"><h3>Character substitution
                                        version</h3></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Title
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->title ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Gender
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->gender ?>&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    First/given name(s)
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->txtForename ?></td>
                                <td style="width:33%;" class="value value Dotted">
                                    <?= $user->txtForename ?></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Surname/family name
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->txtSurname ?></td>
                                <td style="width:33%;" class="value value Dotted">
                                    <?= $user->txtSurname ?></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Preferred first name
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtPrefFName'] ?? '' ?>&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Previous surname at 16th birthday
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtPrevSurn'] ?? '' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Postal address
                                </th>
                                <td style="width:33%;" class="value">
                                    <div><?= $user->addrLine1Text ?></div>
                                    <div><?= $user->addrLine2Text ?></div>
                                    <div><?= $user->addrLine3Text ?></div>
                                    <div><?= $user->addrLine4Text ?></div>
                                    <div><?= $user->Country ?></div>
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Is your permanent home in the UK?
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['rdPermUK'] ?? '' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Home address
                                </th>
                                <td style="width:33%;" class="value">
                                    <div><?= $personal['addrLine1Text'] ?? '' ?></div>
                                    <div><?= $personal['addrLine2Text'] ?? '' ?></div>
                                    <div><?= $personal['addrLine3Text'] ?? '' ?></div>
                                    <div><?= $personal['addrLine4Text'] ?? '' ?></div>
                                    <div><?= $personal['Country'] ?? '' ?></div>
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Home telephone number
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->txtHomePhone ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Mobile number
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->txtMobilePhone ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Email address
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->emailText ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Date of birth
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $user->cboDobDay . '/' . $user->cboDobMonth . '/' . $user->cboDobYear ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Country of birth
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtCntryOfBirth'] ?? '' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Date of first entry to UK
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['cboEntryUkDay'] ?? '' ?> /
                                    <?= $personal['cboEntryUkMonth'] ?? '' ?> /
                                    <?= $personal['cboEntryUkYear'] ?? '' ?>
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Nationality
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtNatioality'] ?? '' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Dual nationality
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtDualNatioality'] ?? '' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Area of permanent residence
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtResidenceArea']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    Residential category
                                </th>
                                <td style="width:33%;" class="value last">
                                    <?= $personal['txtResidentialCategory']??'' ?></td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>


                        <h2 class="inPage">
                            Reference numbers&nbsp;&nbsp;
                        </h2>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th style="width:33%;">
                                    Unique Learner Number (ULN)
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtUniqueLearnerNo']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Test of English as a Foreign Language (TOEFL) Number
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtToeflNo']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    International English Language Testing System (IELTS) TRF Number
                                </th>
                                <td style="width:33%;" class="value last">
                                    <?= $personal['txtIeltsNo']??'' ?></td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 class="inPage">
                            Passport details&nbsp;&nbsp;
                        </h2>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th style="width:33%;">
                                    Do you require a student visa?
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['cboStudentVisa']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    Have you previously studied in the UK on a student visa?
                                </th>
                                <td style="width:33%;" class="value last">
                                    <?= $personal['cboStudiedUK']??'' ?></td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 class="inPage">
                            Student support&nbsp;&nbsp;
                        </h2>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th style="width:33%;">
                                    Fee code
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['cboFeeCode']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Student support arrangements
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtSSA_FeeName']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    Have you ever lived or worked in the EU (excluding the UK), European Economic Area
                                    (EEA) or Switzerland?
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['euAnswers']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    Do you have a parent, step parent, spouse or civil partner who is an EU (excluding
                                    the UK), EEA or Swiss national?
                                </th>
                                <td style="width:33%;" class="value last">
                                    <?= $personal['parentSpouse']??'' ?></td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 class="inPage">
                            Receiving further information about courses and/or products and services&nbsp;&nbsp;
                        </h2>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th style="width:33%;">
                                    I want to receive targeted course vacancy information if I am unplaced.
                                </th>
                                <td style="width:33%;" class="value">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    I want to receive information about health, careers and study opportunities by email
                                </th>
                                <td style="width:33%;" class="value">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    I want to receive information about commercial products and services by email
                                </th>
                                <td style="width:33%;" class="value">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    I want to receive information about health, careers and study opportunities by
                                    text/SMS
                                </th>
                                <td style="width:33%;" class="value">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    I want to receive information about commercial products and services by text/SMS
                                </th>
                                <td style="width:33%;" class="value">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th style="width:33%;">
                                    I want to receive information about health, careers and study opportunities by post
                                </th>
                                <td style="width:33%;" class="value">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    I want to receive information about commercial products and services by post
                                </th>
                                <td style="width:33%;" class="value last">
                                    Yes&nbsp;
                                </td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 class="inPage">
                            Nominated access&nbsp;&nbsp;
                        </h2>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th style="width:33%;">
                                    Full name of nominee
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtNominPerson']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    Relationship to you
                                </th>
                                <td style="width:33%;" class="value last">
                                    <?= $personal['txtNominPersonRelation']??'' ?></td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 class="inPage">
                            Disability/special needs&nbsp;&nbsp;
                        </h2>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th style="width:33%;">
                                    Category
                                </th>
                                <td style="width:33%;" class="value">
                                    <?= $personal['txtDisabilitySplNeeds']??'' ?></td>
                                <td style="width:33%;" class="value"></td>
                            </tr>
                            <tr>
                                <th class="last">
                                    Please give details of any special needs
                                </th>
                                <td style="width:33%;" class="value last">
                                    <?= $personal['txtDisabilitySplNeedsText']??'' ?></td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="sectionHeading" valign="bottom">
                                    <div class="cardIcon"><img valign="bottom" src="/static/images/complete.gif"
                                                               width="14" height="14" class="floatLeft" alt="Completed">
                                    </div>&nbsp;Choices
                                </td>
                                <td class="sectionStatus">
                                    <ul class="skinny">
                                        <li><a href="<?= \yii\helpers\Url::to(['useradmin/choices']) ?>">edit</a></li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php foreach ($choices as $key => $val) { ?>
                            <h2 class="inPage">
                                <a href="#"><?= $val->txtInstCode1 ?> (<?= $val->txtInstCode ?>)</a>
                            </h2>
                            <h2 class="inPage">
                                <?= $val->txtCourseCode ?>&nbsp;
                            </h2>
                            <table>
                                <tbody>
                                <tr>
                                    <td class="choiceCol1">Campus: <?= $val->txtCampusCode ?></td>
                                    <td class="choiceCol2">Live at home while studying?: <?= $val->rdHome ?></td>
                                </tr>
                                <tr>
                                    <td class="choiceCol1">Start date: <?= $val->txtStartDate ?></td>
                                    <td class="choiceCol2">Deferred entry?: No</td>
                                </tr>
                                <tr>
                                    <td class="choiceCol1">&nbsp;</td>
                                    <td class="choiceCol2">Point of entry: <?= $val->txtPOE ?> </td>
                                </tr>
                                </tbody>
                            </table>
                        <?php } ?>
                        <div class="warningTxt"><p>If you apply for this course you may be invited to attend an
                                interview or audition or provide a portfolio, essay or other piece of work.</p></div>
                        <table width="100%">
                        </table>
                        <p>&nbsp;</p>
                        <table>
                            <tbody>
                            <tr>
                                <td class="sectionHeading" valign="bottom">
                                    <div class="cardIcon"><img valign="bottom" src="/static/images/complete.gif"
                                                               width="14" height="14" class="floatLeft" alt="Completed">
                                    </div>&nbsp;Education
                                </td>
                                <td class="sectionStatus">
                                    <ul class="skinny">
                                        <li><a href="<?= \yii\helpers\Url::to(['useradmin/education']) ?>">edit</a></li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php foreach ($schools as $key => $val) { ?>
                            <h2 class="inPage">
                                <a href="#"><?= $val->txtCentreName ?>
                                    (<?= $val->cboStartMonth . '/' . $val->cboStartYear . ' - ' . $val->cboFinishMonth . '/' . $val->cboFinishYear ?>
                                    , <?= $val->rdAttendance ?>)</a>
                            </h2>
                        <?php } ?>
                        <table border="0" width="100%">
                        </table>
                        <table width="100%">
                        </table>
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th class="last">
                                    Please state the highest level of qualification you expect to have before you start
                                    your course
                                </th>
                                <td style="width:33%;" class="value last">
                                    I will have no qualifications&nbsp;
                                </td>
                                <td style="width:33%;" class="value last"></td>
                            </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                        <table>
                            <tbody>
                            <tr>
                                <td class="sectionHeading" valign="bottom">
                                    <div class="cardIcon"><img valign="bottom" src="/static/images/complete.gif"
                                                               width="14" height="14" class="floatLeft" alt="Completed">
                                    </div>&nbsp;Employment
                                </td>
                                <td class="sectionStatus">
                                    <ul class="skinny">
                                        <li><a href="<?= \yii\helpers\Url::to(['useradmin/employment']) ?>">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php foreach ($employers as $key => $val) { ?>
                            <h2 class="inPage">
                                <a href="#"><?= $val->txtEmpName ?></a>
                            </h2>
                            <table border="0" cellpadding="0" cellspacing="0" valign="top">
                                <tbody>
                                <tr>
                                    <td class="employment">Address: <?= $val->txtEmpAddress ?></td>
                                </tr>
                                <tr>
                                    <td class="employment">Nature of work: <?= $val->txtEmpNature ?>&nbsp;&nbsp;&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="employment">From <?= $val->cboStartMonth . '/' . $val->cboStartYear ?>
                                        to <?= $val->cboEndMonth . '/' . $val->cboEndYear ?>
                                        , <?= $val->radioEmpType ?></td>
                                </tr>
                                </tbody>
                            </table>
                        <?php } ?>
                        <p>&nbsp;</p>
                        <table>
                            <tbody>
                            <tr>
                                <td class="sectionHeading" valign="bottom">
                                    <div class="cardIcon"><img valign="bottom" src="/static/images/complete.gif"
                                                               width="14" height="14" class="floatLeft" alt="Completed">
                                    </div>&nbsp;Personal statement
                                </td>
                                <td class="sectionStatus">
                                    <ul class="skinny">
                                        <li><a href="<?= \yii\helpers\Url::to(['useradmin/statement']) ?>">edit</a></li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>
                            <?= $statement['taPersonalStatementText']??'' ?>
                        </p>


                        <p>&nbsp;</p>
                        <div class="thisForm">
                            <div class="thisFormElem">
                                <div class="warningTxt" id="sectionCheckMessage" style="">
                                    You will not be able to mark this section as complete until you have ticked all the
                                    boxes on this page to agree with the substituted characters.
                                </div>&nbsp;
                                <div class="thisFormTxt">
                                    &nbsp;
                                </div>
                                <div class="thisFormField">
                                    <input type="hidden" name="chkComplete" value="0">
                                    <input type="checkbox"
                                           name="chkComplete" <?php if ($model->chkComplete) echo 'checked' ?> value="1"
                                           id="chkComplete">&nbsp;section completed
                                </div>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                    </div>


                    <div class="thisFormTxt">&nbsp;</div>
                    <div class="thisFormField">
                        <!--display 'save' button clip -->
                        <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                        <input type="submit" name="btnSave" value="save" class="submitBtn">

                    </div>


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