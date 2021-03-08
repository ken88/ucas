<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\logics\UserSearchLogic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'txtForename') ?>

    <?= $form->field($model, 'txtSurname') ?>

    <?php // echo $form->field($model, 'cboDobDay') ?>

    <?php // echo $form->field($model, 'cboDobMonth') ?>

    <?php // echo $form->field($model, 'cboDobYear') ?>

    <?php // echo $form->field($model, 'radioLocation') ?>

    <?php // echo $form->field($model, 'addrLine1Text') ?>

    <?php // echo $form->field($model, 'addrLine2Text') ?>

    <?php // echo $form->field($model, 'addrLine3Text') ?>

    <?php // echo $form->field($model, 'addrLine4Text') ?>

    <?php // echo $form->field($model, 'Country') ?>

    <?php // echo $form->field($model, 'txtHomePhone') ?>

    <?php // echo $form->field($model, 'txtMobilePhone') ?>

    <?php // echo $form->field($model, 'emailText') ?>

    <?php // echo $form->field($model, 'chkEducationalOption') ?>

    <?php // echo $form->field($model, 'chkCommercialOption') ?>

    <?php // echo $form->field($model, 'chkUnplacedCommsFlag') ?>

    <?php // echo $form->field($model, 'chkEmailOption') ?>

    <?php // echo $form->field($model, 'chkTxtOption') ?>

    <?php // echo $form->field($model, 'chkMailingsOption') ?>

    <?php // echo $form->field($model, 'passwordText') ?>

    <?php // echo $form->field($model, 'wenti1') ?>

    <?php // echo $form->field($model, 'daan1') ?>

    <?php // echo $form->field($model, 'wenti2') ?>

    <?php // echo $form->field($model, 'daan2') ?>

    <?php // echo $form->field($model, 'wenti3') ?>

    <?php // echo $form->field($model, 'daan3') ?>

    <?php // echo $form->field($model, 'wenti4') ?>

    <?php // echo $form->field($model, 'daan4') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'personal_id') ?>

    <?php // echo $form->field($model, 'rdRoute') ?>

    <?php // echo $form->field($model, 'txtBuzzword') ?>

    <?php // echo $form->field($model, 'rdConfirm') ?>

    <?php // echo $form->field($model, 'cboGroups') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
