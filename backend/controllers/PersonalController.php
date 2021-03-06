<?php
/**
 * Created by.
 * Author: baijidong
 * E-mail: baijidong1992@gmail.com
 * Date: 2021-03-06 11:42
 */

namespace backend\controllers;


use common\models\User;
use function Webmozart\Assert\Tests\StaticAnalysis\false;
use function Webmozart\Assert\Tests\StaticAnalysis\true;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;

class PersonalController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            if (\Yii::$app->user->identity->personal_id)
                                return $this->redirect(Url::to(['useradmin/welcome']));
                            else
                                return true;
                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionRegister8()
    {
        $model = User::findOne(\Yii::$app->user->identity->id);
        if (\Yii::$app->request->post()) {
            $model->rdRoute = \Yii::$app->request->post('rdRoute');
            $model->save();
            return $this->redirect(Url::to(['personal/register9']));
        }
        return $this->renderPartial('/user/register8', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionRegister9()
    {
        $model = User::findOne(\Yii::$app->user->identity->id);
        if (\Yii::$app->request->isPost) {
            $model->txtBuzzword = \Yii::$app->request->post('txtBuzzword');
            $model->save();
            return $this->redirect(Url::to(['/personal/register10']));
        }
        return $this->renderPartial('/user/register9', [
            'model' => $model,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionRegister10()
    {
        $model = User::findOne(\Yii::$app->user->identity->id);
        if (\Yii::$app->request->isPost) {
            $model->rdConfirm = \Yii::$app->request->post('rdConfirm');
            $model->save();
            return $this->redirect(Url::to(['/personal/register11']));
        }
        return $this->renderPartial('/user/register10', [
            'model' => $model,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionRegister11()
    {
        $model = User::findOne(\Yii::$app->user->identity->id);
        if (\Yii::$app->request->isPost) {
            $model->cboGroups = \Yii::$app->request->post('cboGroups');
            $model->personal_id = $model->generatePersonalId();
            $model->save();
            return $this->redirect(Url::to(['/personal/register12']));
        }
        return $this->renderPartial('/user/register11');
    }

    /**
     * @return string
     */
    public function actionRegister12()
    {
        $model = User::findOne(\Yii::$app->user->identity->id);
        if (!$model->personal_id)
            return $this->redirect(Url::to(['personal/register8']));

        return $this->renderPartial('/user/register12', [
            'model' => $model,
        ]);
    }
}