<?php

namespace frontend\controllers;

use common\logics\AdminLoginLogic;
use frontend\logics\UpdatePasswordLogic;
use Yii;

/**
 * Site controller
 */
class SiteController extends BaseController
{
     /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLoginLogic();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * update password
     */
    public function actionUpdatePassword()
    {
        $model = new UpdatePasswordLogic();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            exit('修改成功');
        }

        return $this->render('update-password');
    }
}
