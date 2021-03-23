<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\logics\UserSearchLogic */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index box box-primary">
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'title',
                'gender',
                'txtForename',
                'txtSurname',
                // 'cboDobDay',
                // 'cboDobMonth',
                // 'cboDobYear',
                // 'radioLocation',
                // 'addrLine1Text',
                // 'addrLine2Text',
                // 'addrLine3Text',
                // 'addrLine4Text',
                // 'Country',
                 'txtHomePhone',
                 'txtMobilePhone',
                 'emailText:email',
                // 'chkEducationalOption',
                // 'chkCommercialOption',
                // 'chkUnplacedCommsFlag',
                // 'chkEmailOption:email',
                // 'chkTxtOption',
                // 'chkMailingsOption',
                // 'passwordText',
                // 'wenti1',
                // 'daan1',
                // 'wenti2',
                // 'daan2',
                // 'wenti3',
                // 'daan3',
                // 'wenti4',
                // 'daan4',
                // 'create_time:datetime',
                // 'personal_id',
                // 'rdRoute',
                // 'txtBuzzword',
                // 'rdConfirm',
                // 'cboGroups',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a('<i class="fa fa-eye" aria-hidden="true"></i> view', $url, ['class' => 'btn btn-primary btn-flat']);
                        }
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>
