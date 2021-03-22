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
                            if ($action->id != 'register7')
                                return $this->redirect(Url::to(['useradmin/index']));
                            return true;
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
        if (isset(Yii::$app->user->identity->id)) {
            $username = Yii::$app->user->identity->id;
        } else {
            $model = new User();
            $model->attributes = Yii::$app->session->get('form_data');
            if (!$model->save()) {
                var_dump($model->getErrors());
                exit('注册失败');
            } else {
                Yii::$app->session->set('form_data', []);
                //登录
                Yii::$app->user->login(User::findOne($model->id));
                $username = $model->id;
            }
        }
        return $this->renderPartial('register7', [
            'username' => $username
        ]);

    }

    public function actionApply1()
    {
        return $this->renderPartial('/apply/index1');
    }

    public function actionTest() {
        $str = "We\'ll carry out checks to verify your personal statement is your own work. Provided it is your own work, you can use your personal statement from your application last year.If it appears to have been copied from another source, we\'ll inform the universities and colleges to which you have applied. They will then take the action they consider appropriate. We\'ll also contact you by email to tell you this has happened.";

        $data = [];

        while (true) {
            $str1 = $str;
//            dd1(strlen($str1));
            if (strlen($str1) >= 90) {

                for ($i = 80; $i < 100; $i++) {
                    if ($str[$i] == ' ') {

                        $data[] = substr($str1,0, $i);

                        $str = substr($str1, $i);
                        break;
//
                    }
                }
            } else {
                $data[] = $str1;
                break;
            }

        }
        dd($data);
    }

}
