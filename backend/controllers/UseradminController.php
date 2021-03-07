<?php
/**
 * Created by PhpStorm.
 * User: yukai
 * Date: 2021/2/27
 * Time: 21:18
 */

namespace backend\controllers;

use common\models\Choice;
use common\models\Choices;
use common\models\Employer;
use common\models\Employment;
use common\models\PersonalDetails;
use common\models\Statement;
use DeepCopyTest\Matcher\Y;
use phpDocumentor\Reflection\Types\This;
use Yii;
use yii\helpers\Url;

class UseradminController extends BaseController
{
    # 邮件发送
    public function actionSend()
    {
        $code = mt_rand(1000, 999999); # 验证码 随机
        $mail = Yii::$app->mailer->compose();
//        $mail->setTo('yukai08621@163.com');
        $mail->setTo('176745155@qq.com');
        $mail->setSubject("hello your code checke");

//$mail->setTextBody('zheshisha ');   //发布纯文字文本
        $mes = "<br>Dear Miss qaz wsx
<br><br>Before submitting your application, you need to verify that the email address you have provided is correct.
In order to verify this, please log in to the UCAS website (https://www.ucas.com/ucas/undergraduate/login)
and enter the verification code shown below:
<br><br>verification code: mkx{$code}
<br><br>This code is only valid for the address shown above. If you change your email address, you will need to obtain a new verification code.
<br><br>Once we have verified your email address, we can then send emails
alerting you to changes to your application, including decisions made by your chosen universities and colleges.
they will tell you to log in to the Track service to view any changes.
Track is available on the UCAS website for you to use once we have processed your application.
For environmental reasons you will not receive a letter containing an individual decision,
although you will be able to print these letters from the Track system if necessary.
<br><br>Note: this is an automated email, so please do not reply to this address.";

        $mail->setHtmlBody($mes);    //发布可以带html标签的文本
        $res = '';
        if ($mail->send())
            $res = "ok";
        else
            $res = "false";
        $data = [
            'view' => 'welcome',
            'code' => 'mkx' . $code,
            'res' => $res
        ];
        return $this->renderPartial('send', $data);
    }

    # 重新发送验证码页面
    public function actionSendCf()
    {
        $data = [
            'email' => '176745155@qq.com'
        ];
        return $this->renderPartial('send-cf', $data);
    }

    public function actionIndex()
    {
        $data = [
            'view' => 'welcome'
        ];
        return $this->renderPartial('index', $data);
    }

    public function actionWelcome()
    {
        $data = [
            'view' => 'welcome',
            'user' => Yii::$app->user->identity,
        ];
        return $this->renderPartial('welcome', $data);
    }

    /**
     * 个人资料
     * @return string
     */
    public function actionPersonaldetails()
    {
        $user = Yii::$app->user->identity;
        $model = PersonalDetails::findOne(Yii::$app->user->identity->id) ?: new PersonalDetails();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            $model->save();
        }
        return $this->renderPartial('personaldetails', [
            'view' => 'personaldetails',
            'user' => $user,
            'model' => $model,
        ]);
    }

    # 选择项
    public function actionChoices()
    {
        $model = Choice::findOne(Yii::$app->user->identity->id) ?: new Choice();
        if (Yii::$app->request->isPost) {
            $model->chkComplete = Yii::$app->request->post('chkComplete');
            $model->save();
        }
        $choices = Choices::find()
            ->orderBy(['id' => SORT_DESC])
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->all();
        return $this->renderPartial('choices', [
            'view' => 'choices',
            'choices' => $choices,
            'model' => $model,
        ]);
    }

    /**
     * 新增选择项
     */
    public function actionAddChoice()
    {
        if (!Yii::$app->request->get('id') && Choices::find()->where(['user_id' => Yii::$app->user->identity->id])->count() >= 5) {
            echo "<script>alert('You can make a maximum of 5 choices.')</script>";
            echo "<script>window.location.href='/useradmin/choices'</script>";
            exit();
        }

        $model = Yii::$app->request->get('id') ? Choices::findOne(Yii::$app->request->get('id')) : new Choices();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            if (!$model->save()) {
//                var_dump($model->getErrors());
                exit('create/edit error');
            } else
                return $this->redirect(Url::to(['useradmin/choices']));
        }

        return $this->renderPartial('add-choices', [
            'view' => 'choices',
            'model' => $model,
        ]);
    }

    /**
     * 选择项删除
     */
    public function actionDelChoice($id)
    {
        $model = Choices::findOne($id);
        $model->delete();
        $this->redirect(Url::to(['useradmin/choices']));
    }

    # 教育
    public function actionEducation()
    {
        $data = [
            'view' => 'education'
        ];
        return $this->renderPartial('education', $data);
    }

    # 新增-教育
    public function actionAddEducation()
    {
        $data = [
            'view' => 'education'
        ];
        return $this->renderPartial('add-education', $data);
    }

    # 新增-教育-资格
    public function actionAddQualifications()
    {
        $data = [
            'view' => 'education'
        ];
        return $this->renderPartial('add-qualifications', $data);
    }

    # 新增-教育-资格-资格
    public function actionAddFw()
    {
        $data = [
            'view' => 'education'
        ];
        return $this->renderPartial('add-fw', $data);
    }

    /**
     * 就业机会
     * @return string
     */
    public function actionEmployment()
    {
        $model = Employment::findOne(Yii::$app->user->identity->id) ?: new Employment();
        if (Yii::$app->request->isPost) {
            $model->chkComplete = Yii::$app->request->post('chkComplete');
            $model->save();
        }
        $employer = Employer::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->renderPartial('employment', [
            'view' => 'employment',
            'employer' => $employer,
            'model' => $model,
        ]);
    }

    /**
     * 新增就业机会
     */
    public function actionAddEmployment()
    {
        if (!Yii::$app->request->get('id') && Employer::find()->where(['user_id' => Yii::$app->user->identity->id])->count() >= 5) {
            echo "<script>alert('You can add details of up to 5 employers.')</script>";
            echo "<script>window.location.href='/useradmin/employment'</script>";
            exit();
        }

        $model = Employer::findOne(Yii::$app->request->get('id')) ?: new Employer();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            if (!$model->save()) {
//                var_dump($model->getErrors());
                exit('create or edit error');
            } else
                return $this->redirect(Url::to(['useradmin/employment']));
        }
        return $this->renderPartial('add-employment', [
            'view' => 'employment',
            'model' => $model,
        ]);
    }

    /**
     * 就业机会删除
     */
    public function actionDelEmployment($id)
    {
        $model = Employer::findOne($id);
        $model->delete();
        return $this->redirect(Url::to(['useradmin/employment']));
    }

    /**
     * 陈述
     */
    public function actionStatement()
    {
        $model = Statement::findOne(Yii::$app->user->identity->id) ?: new Statement();
        if ($model->chkComplete)
            return $this->redirect(['useradmin/statement-see']);
        if (Yii::$app->request->isPost) {
            $model->taPersonalStatement = Yii::$app->request->post('taPersonalStatement');
            $model->save();
        }
        return $this->renderPartial('statement', [
            'view' => 'statement',
            'model' => $model,
        ]);
    }

    /**
     * 陈述改为编辑模式
     */
    public function actionEditStatement()
    {
        $model = Statement::findOne(Yii::$app->user->identity->id);
        $model->chkComplete = 0;
        $model->save();
        return $this->redirect(['useradmin/statement']);
    }

    /**
     * 陈述预览
     */
    public function actionStatementSee()
    {
        $model = Statement::findOne(Yii::$app->user->identity->id);
        if (Yii::$app->request->isPost) {
            $model->chkComplete = Yii::$app->request->post('chkComplete');
            $model->save();
        }
        return $this->renderPartial('statement-see', [
            'view' => 'statement',
            'model' => $model,
        ]);
    }

    # 查看所有细节
    public function actionViewalldetails()
    {
        $data = [
            'view' => 'viewalldetails'
        ];
        return $this->renderPartial('viewalldetails', $data);
    }

}