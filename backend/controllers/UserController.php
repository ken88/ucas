<?php


namespace backend\controllers;


class UserController extends BaseController
{
    # 登录首页
    public function actionIndex() {
        return $this->renderPartial('index');
    }

    public function actionApply1() {
        return $this->renderPartial('/apply/index1');
    }
}