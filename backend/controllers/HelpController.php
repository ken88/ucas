<?php

# 帮助文档
namespace backend\controllers;


use yii\web\Controller;
use Yii;

class HelpController extends Controller
{
    public function actionIndex1() {
        return $this->renderPartial('index1');
    }

    public function actionIndex2() {
        return $this->renderPartial('index2');
    }

    public function actionIndex3() {
        return $this->renderPartial('index3');
    }

    public function actionIndex4() {
        return $this->renderPartial('index4');
    }

    public function actionIndex5() {
        return $this->renderPartial('index5');
    }

    # 出生国家
    public function actionIndex6() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index6',['inputName'=>$inputName]);
    }

    # 国籍
    public function actionIndex7() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index7',['inputName'=>$inputName]);
    }

    # 永久居民区
    public function actionIndex8() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index8',['inputName'=>$inputName]);
    }

    # 住宅类别
    public function actionIndex9() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index9',['inputName'=>$inputName]);
    }
}