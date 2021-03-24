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
    <div class="box-header with-border">
        <?= Html::a('数据导出', \yii\helpers\Url::to(['user/export']), ['class' => 'btn btn-flat btn-xs btn-success', 'target' => '_blank']) ?>
    </div>
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
                'txtHomePhone',
                'txtMobilePhone',
                'emailText:email',

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
