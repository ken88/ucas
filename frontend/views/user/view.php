<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view box box-primary">
    <div class="box-body table-responsive no-padding">
        <h3>Personal details</h3>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
//                'id',
                'title',
                'gender',
                'txtForename',
                'txtSurname',
                [
                    'label' => 'Preferred first name',
                    'value' => function ($model) {
                        return $model->personalDetails['txtPrefFName'];
                    }
                ],
                [
                    'label' => 'Previous surname at 16th birthday',
                    'value' => function ($model) {
                        return $model->personalDetails['txtPrefFName'];
                    }
                ],
                [
                    'label' => 'Postal address',
                    'value' => function ($model) {
                        return $model->addrLine1Text . '<br>' . $model->addrLine2Text . '<br>' . $model->addrLine3Text . '<br>' . $model->addrLine4Text . '<br>' . $model->Country;
                    },
                    'format' => 'raw'
                ],
                [
                    'label' => 'Is your permanent home in the UK?',
                    'value' => function ($model) {
                        return $model->personalDetails['rdPermUK'];
                    }
                ],
                [
                    'label' => 'Home address',
                    'value' => function ($model) {
                        return $model->personalDetails['addrLine1Text'] . '<br>' . $model->personalDetails['addrLine2Text'] . '<br>' . $model->personalDetails['addrLine3Text'] . '<br>' . $model->personalDetails['addrLine4Text'] . '<br>' . $model->Country;
                    },
                    'format' => 'raw'
                ],
                'txtHomePhone',
                'txtMobilePhone',
                'emailText',
                [
                    'label' => 'Date of birth',
                    'value' => function ($model) {
                        return $model->cboDobDay . '/' . $model->cboDobMonth . '/' . $model->cboDobYear;
                    },
                ],
                [
                    'label' => 'Country of birth',
                    'value' => function ($model) {
                        return $model->personalDetails['txtCntryOfBirth'];
                    }
                ],
                [
                    'label' => 'Date of first entry to UK',
                    'value' => function ($model) {
                        return $model->personalDetails['cboEntryUkDay'] . '/' . $model->personalDetails['cboEntryUkMonth'] . '/' . $model->personalDetails['cboEntryUkYear'];
                    }
                ],
                [
                    'label' => 'Nationality',
                    'value' => function ($model) {
                        return $model->personalDetails['txtNatioality'];
                    }
                ],
                [
                    'label' => 'Dual nationality',
                    'value' => function ($model) {
                        return $model->personalDetails['txtDualNatioality'];
                    }
                ],
                [
                    'label' => 'Area of permanent residence',
                    'value' => function ($model) {
                        return $model->personalDetails['txtResidenceArea'];
                    }
                ],
                [
                    'label' => 'Residential category',
                    'value' => function ($model) {
                        return $model->personalDetails['txtResidentialCategory'];
                    }
                ],
                [
                    'label' => '<h4>Reference numbers</h4>',
                    'value' => ''
                ],
                [
                    'label' => 'Unique Learner Number (ULN)',
                    'value' => function ($model) {
                        return $model->personalDetails['txtUniqueLearnerNo'];
                    }
                ],
                [
                    'label' => 'Test of English as a Foreign Language (TOEFL) Number',
                    'value' => function ($model) {
                        return $model->personalDetails['txtToeflNo'];
                    }
                ],
                [
                    'label' => 'International English Language Testing System (IELTS) TRF Number',
                    'value' => function ($model) {
                        return $model->personalDetails['txtIeltsNo'];
                    }
                ],
                [
                    'label' => '<h4>Passport details</h4>',
                    'value' => ''
                ],
                [
                    'label' => 'Do you require a student visa?',
                    'value' => function ($model) {
                        return $model->personalDetails['cboStudentVisa'];
                    }
                ],
                [
                    'label' => 'Have you previously studied in the UK on a student visa?',
                    'value' => function ($model) {
                        return $model->personalDetails['cboStudiedUK'];
                    }
                ],
                [
                    'label' => '<h4>Student support</h4>',
                    'value' => ''
                ],
                [
                    'label' => 'Fee code',
                    'value' => function ($model) {
                        return $model->personalDetails['cboFeeCode'];
                    }
                ],
                [
                    'label' => 'Student support arrangements',
                    'value' => function ($model) {
                        return $model->personalDetails['txtSSA_FeeName'];
                    }
                ],
                [
                    'label' => 'Have you ever lived or worked in the EU (excluding the UK), European Economic Area (EEA) or Switzerland?',
                    'value' => function ($model) {
                        return $model->personalDetails['euAnswers'];
                    }
                ],
                [
                    'label' => 'Do you have a parent, step parent, spouse or civil partner who is an EU (excluding the UK), EEA or Swiss national?',
                    'value' => function ($model) {
                        return $model->personalDetails['parentSpouse'];
                    }
                ],
                [
                    'label' => '<h4>Nominated access</h4>',
                    'value' => ''
                ],
                [
                    'label' => 'Full name of nominee',
                    'value' => function ($model) {
                        return $model->personalDetails['txtNominPerson'];
                    }
                ],
                [
                    'label' => 'Relationship to you',
                    'value' => function ($model) {
                        return $model->personalDetails['txtNominPersonRelation'];
                    }
                ],
                [
                    'label' => '<h4>Disability/special needs</h4>',
                    'value' => ''
                ],
                [
                    'label' => 'Category',
                    'value' => function ($model) {
                        return $model->personalDetails['txtDisabilitySplNeeds'];
                    }
                ],
                [
                    'label' => 'Please give details of any special needs',
                    'value' => function ($model) {
                        return $model->personalDetails['txtDisabilitySplNeedsText'];
                    }
                ],
            ],
            'template' => '<tr><th  style="width: 200px" {captionOptions}>{label}</th><td{contentOptions}>{value}</td></tr>'
        ]) ?>
        <br>
        <h3>Choices</h3>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <?php foreach ($model->choices as $key => $val) { ?>
                <tr>
                    <th colspan="2"><?= $val->txtInstCode1 . '(' . $val->txtInstCode . ')' ?></th>
                </tr>
                <tr>
                    <th colspan="2"><?= $val->txtCourseCode ?></th>
                </tr>
                <tr>
                    <th style="width: 200px">Campus: <?= $val->txtCampusCode ?></th>
                    <th>Live at home while studying?: <?= $val->rdHome ?></th>
                </tr>
                <tr>
                    <th>Start date: <?= $val->txtStartDate ?></th>
                    <th>Deferred entry?: No</th>
                </tr>
                <tr>
                    <th></th>
                    <th>Point of entry: <?= $val->txtPOE ?></th>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <br>
        <h3>Education</h3>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <?php foreach ($model->schools as $key => $val) { ?>
                <tr>
                    <th><?= $val->txtCentreName ?> (<?= $val->cboStartMonth ?>/<?= $val->cboStartYear ?>
                        - <?= $val->cboFinishMonth ?>/<?= $val->cboFinishYear ?>, <?= $val->rdAttendance ?>)
                    </th>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <br>
        <h3>Employment</h3>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <?php foreach ($model->employers as $key => $val) { ?>
                <tr>
                    <th>
                        <p><?= $val->txtEmpName ?></p>
                        <p>Address: <?= $val->txtEmpAddress ?></p>
                        <p>Nature of work: <?= $val->txtEmpNature ?></p>
                        <p>From <?= $val->cboStartMonth ?>/<?= $val->cboStartYear ?> to <?= $val->cboEndMonth ?>
                            /<?= $val->cboEndYear ?>, <?= $val->radioEmpType ?></p>
                    </th>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <br>
        <h3>Personal statement</h3>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td>
                    <?php if(isset($model->statement['taPersonalStatementArr'])){ foreach ($model->statement['taPersonalStatementArr'] as $key => $val) { ?>
                        <p><?= $val ?></p>
                    <?php } } ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
