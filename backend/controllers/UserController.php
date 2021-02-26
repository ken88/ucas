<?php


namespace backend\controllers;


class UserController extends BaseController
{
    # 登录首页
    public function actionIndex() {
        return $this->renderPartial('index');
    }

    # 注册
    public function actionRegister() {
        return $this->renderPartial('register');
    }

    public function actionRegister1() {
        return $this->renderPartial('register1');
    }

    public function actionRegister2() {
        return $this->renderPartial('register2');
    }

    public function actionApply1() {
        return $this->renderPartial('/apply/index1');
    }
}