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

    # 残疾/特殊需要
    public function actionIndex10() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index10',['inputName'=>$inputName]);
    }

    # （仅当您选择费用代码“ 02 UK，Chl，IoM或欧盟学生资助服务”时，此字段才可用）
    public function actionIndex11() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index11',['inputName'=>$inputName]);
    }

    # 机构代码 Institution code
    public function actionIndex12() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index12',['inputName'=>$inputName]);
    }

    # 课程代码 Course code
    public function actionIndex13() {
        $inputName = Yii::$app->request->get('functionname');
        $instcode = Yii::$app->request->get('instcode');
        $url = "https://2021.undergrad.apply.ucas.com/ucasapply/PopUpServlet?functionname=courselist&instcode={$instcode}";

        $html = file_get_contents($url);

        return $this->renderPartial('index13',[
            'inputName' => $inputName,
            'instcode' => $instcode,
            'html' => $html
        ]);
    }


    # 校园代码 Campus code
    public function actionIndex14() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index14',['inputName'=>$inputName]);
    }

    # 开始日期 Start date
    public function actionIndex15() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index15',['inputName'=>$inputName]);
    }

    # 学校/学院/中心名称 School/college/centre name
    public function actionIndex16() {
        $inputName = Yii::$app->request->get('functionname');
        return $this->renderPartial('index16',['inputName'=>$inputName]);
    }
}