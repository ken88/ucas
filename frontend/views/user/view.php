<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view box box-primary">
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'gender',
                'txtForename',
                'txtSurname',
                'cboDobDay',
                'cboDobMonth',
                'cboDobYear',
                'radioLocation',
                'addrLine1Text',
                'addrLine2Text',
                'addrLine3Text',
                'addrLine4Text',
                'Country',
                'txtHomePhone',
                'txtMobilePhone',
                'emailText:email',
                'chkEducationalOption',
                'chkCommercialOption',
                'chkUnplacedCommsFlag',
                'chkEmailOption:email',
                'chkTxtOption',
                'chkMailingsOption',
                'passwordText',
                'wenti1',
                'daan1',
                'wenti2',
                'daan2',
                'wenti3',
                'daan3',
                'wenti4',
                'daan4',
                'create_time:datetime',
                'personal_id',
                'rdRoute',
                'txtBuzzword',
                'rdConfirm',
                'cboGroups',
            ],
        ]) ?>
    </div>
</div>
