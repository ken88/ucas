<?php

# 帮助文档
namespace backend\controllers;


class HelpController extends BaseController
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

    public function actionIndex6() {
        return $this->renderPartial('index6');
    }
}