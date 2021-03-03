<?php


namespace backend\controllers;


use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    public function actionStudents()
    {
        return $this->renderPartial('students');
    }

    /**
     * 登录页
     * @return string
     */
    public function actionLogin()
    {
        if (\Yii::$app->request->isPost){
            exit('登录验证');
        }
        return $this->renderPartial('login');
    }
}