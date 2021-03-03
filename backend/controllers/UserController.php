<?php


namespace backend\controllers;

use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;

class UserController extends Controller
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return $this->redirect(Url::to(['useradmin/index']));
                        }
                    ],
                ],
            ],
        ];
    }
    # 注册
    public function actionRegister()
    {
        return $this->renderPartial('register');
    }

    public function actionRegister1()
    {
        if (Yii::$app->request->isPost) {
            Yii::$app->session->set('form_data', array_merge(Yii::$app->session->get('form_data', []), Yii::$app->request->post()));
            return $this->redirect(Url::to(['user/register2']));
        }
        return $this->renderPartial('register1', [
            'form_data' => Yii::$app->session->get('form_data'),
        ]);
    }

    public function actionRegister2()
    {
        if (Yii::$app->request->isPost) {
            Yii::$app->session->set('form_data', array_merge(Yii::$app->session->get('form_data', []), Yii::$app->request->post()));
            return $this->redirect(Url::to(['user/register3']));
        }
        return $this->renderPartial('register2', [
            'form_data' => Yii::$app->session->get('form_data'),
        ]);
    }

    public function actionRegister3()
    {
        if (Yii::$app->request->isPost) {
            Yii::$app->session->set('form_data', array_merge(Yii::$app->session->get('form_data', []), Yii::$app->request->post()));
            return $this->redirect(Url::to(['user/register4']));
        }
        return $this->renderPartial('register3');
    }

    public function actionRegister4()
    {
        if (Yii::$app->request->isPost) {
            Yii::$app->session->set('form_data', array_merge(Yii::$app->session->get('form_data', []), Yii::$app->request->post()));
            return $this->redirect(Url::to(['user/register5']));
        }
        return $this->renderPartial('register4', [
            'form_data' => Yii::$app->session->get('form_data'),
        ]);
    }

    public function actionRegister5()
    {
        if (Yii::$app->request->isPost) {
            Yii::$app->session->set('form_data', array_merge(Yii::$app->session->get('form_data', []), Yii::$app->request->post()));
            return $this->redirect(Url::to(['user/register6']));
        }
        return $this->renderPartial('register5', [
            'form_data' => Yii::$app->session->get('form_data'),
        ]);
    }

    public function actionRegister6()
    {
        if (Yii::$app->request->isPost) {
            Yii::$app->session->set('form_data', array_merge(Yii::$app->session->get('form_data', []), Yii::$app->request->post()));
            return $this->redirect(Url::to(['user/register7']));
        }
        return $this->renderPartial('register6');
    }

    /**
     * register7 注册结束,返回id
     * @return string|\yii\web\Response
     */
    public function actionRegister7()
    {
        $model = new User();
        $model->attributes = Yii::$app->session->get('form_data');
        if (!$model->save()) {
            var_dump($model->getErrors());
            exit('注册失败');
        } else {
            Yii::$app->session->set('form_data', []);
            return $this->renderPartial('register7', [
                'model' => $model
            ]);
        }
    }

    public function actionRegister8()
    {
        return $this->renderPartial('register8');
    }

    public function actionRegister9()
    {
        return $this->renderPartial('register9');
    }

    public function actionRegister10()
    {
        return $this->renderPartial('register10');
    }

    public function actionRegister11()
    {
        return $this->renderPartial('register11');
    }

    public function actionRegister12()
    {
        return $this->renderPartial('register12');
    }

    public function actionApply1()
    {
        return $this->renderPartial('/apply/index1');
    }

}
