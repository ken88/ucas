<?php


namespace backend\controllers;


use common\logics\UserLoginLogic;
use Yii;
use yii\helpers\Url;
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
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $model = new UserLoginLogic();
            $model->username = Yii::$app->request->post('txtUsername');
            $model->password = Yii::$app->request->post('txtPassword');
            if (!$model->login()) {
                return ['code' => 0, 'msg' => '用户名密码错误'];
            } else {
                return ['code' => 200, 'msg' => '登录成功'];
            }
        }

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(Url::to(['useradmin/welcome']));
            //return $this->goHome(); //跳转register8 或者 welcome
        }
        return $this->renderPartial('login');
    }
}