<?php


namespace backend\controllers;


class HelpController extends BaseController
{
    public function actionIndex1() {
        return $this->renderPartial('index1');
    }
}