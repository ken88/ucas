<?php


namespace backend\controllers;


class DefaultController extends BaseController
{
    public function actionIndex() {
        return $this->renderPartial('index');
    }


    public function actionStudents() {
        return $this->renderPartial('students');
    }
}