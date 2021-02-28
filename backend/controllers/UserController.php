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

    public function actionRegister3() {
        return $this->renderPartial('register3');
    }

    public function actionRegister4() {
        return $this->renderPartial('register4');
    }

    public function actionRegister5() {
        return $this->renderPartial('register5');
    }

    public function actionRegister6() {
        return $this->renderPartial('register6');
    }
    public function actionRegister7() {
        return $this->renderPartial('register7');
    }

    public function actionRegister8() {
        return $this->renderPartial('register8');
    }

    public function actionRegister9() {
        return $this->renderPartial('register9');
    }

    public function actionRegister10() {
        return $this->renderPartial('register10');
    }

    public function actionRegister11() {
        return $this->renderPartial('register11');
    }

    public function actionRegister12() {
        return $this->renderPartial('register12');
    }

    public function actionApply1() {
        return $this->renderPartial('/apply/index1');
    }
}