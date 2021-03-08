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
use common\models\Education;
use common\models\Employer;
use common\models\Employment;
use common\models\PersonalDetails;
use common\models\Qualifications;
use common\models\School;
use common\models\Statement;
use common\models\User;
use Yii;
use yii\helpers\Url;

class UseradminController extends BaseController
{
    # 邮件发送
    public function actionSend()
    {

        $email = Yii::$app->user->identity->emailText;

        $code = mt_rand(1000, 999999); # 验证码 随机
        $mail = Yii::$app->mailer->compose();

        $mail->setTo($email); # 发送的邮件

        $mail->setSubject("hello your code checke");

//$mail->setTextBody('zheshisha ');   //发布纯文字文本
        $mes = "<br>hello
<br><br>Before submitting your application, you need to verify that the email address you have provided is correct.
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
            'email' => $email,
            'res' => $res
        ];
        return $this->renderPartial('send', $data);
    }

    # 重新发送验证码页面
    public function actionSendCf()
    {
        $email = Yii::$app->user->identity->emailText;
        $data = [
            'view' => 'welcome',
            'email' => $email
        ];
        return $this->renderPartial('send-cf', $data);
    }

    public function actionIndex()
    {
        $model = User::find()->where(['id'=>Yii::$app->user->identity->id])->one();
        $model->chkEmailOption = '1';
        $model->save();
        $data = [
            'view' => 'welcome'
        ];
        return $this->renderPartial('index', $data);
    }

    public function actionWelcome()
    {
        $chkEmailOption = Yii::$app->user->identity->chkEmailOption ;

        $data = [
            'view' => 'welcome',
            'user' => Yii::$app->user->identity,
            'chkEmailOption' => $chkEmailOption,
        ];
        return $this->renderPartial('welcome', $data);
    }

    # 获取左侧菜单信息
    public function actionAjaxGetMenu() {
        $info = User::infoSelection();
        res(200,'',$info);
    }
    /**
     * 个人资料
     * @return string
     */
    public function actionPersonaldetails()
    {
        $user = Yii::$app->user->identity;
        $chkEmailOption = Yii::$app->user->identity->chkEmailOption;
        $model = PersonalDetails::findOne(Yii::$app->user->identity->id) ?: new PersonalDetails();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            $model->save();
        }
        return $this->renderPartial('personaldetails', [
            'view' => 'personaldetails',
            'user' => $user,
            'model' => $model,
            'chkEmailOption' => $chkEmailOption,
        ]);
    }

    # 地址修改
    public function actionChangeaddr() {
        return $this->renderPartial('changge-addr', [
            'view' => 'personaldetails'
        ]);
    }

    # 地址修改页面
    public function actionAddAddr() {
        return $this->renderPartial('add-addr', [
            'view' => 'personaldetails'
        ]);
    }

    /**
     * 选择项
     */
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

    /**
     * 教育
     */
    public function actionEducation()
    {
        $model = Education::findOne(Yii::$app->user->identity->id) ?: new Education();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            $model->save();
        }
        $schools = School::find()
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->all();
        return $this->renderPartial('education', [
            'view' => 'education',
            'schools' => $schools,
            'model' => $model,
        ]);
    }

    /**
     * 新增/编辑-教育
     */
    public function actionAddEducation()
    {
        if (!Yii::$app->request->get('id') && School::find()->where(['user_id' => Yii::$app->user->identity->id])->count() >= 10) {
            echo "<script>alert('You can add up to 10 schools/colleges/centres.')</script>";
            echo "<script>window.location.href='/useradmin/education'</script>";
            exit();
        }
        $model = School::findOne(Yii::$app->request->get('id')) ?: new School();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            if (!$model->save()) {
                exit('create/edit error');
            } else
                return $this->redirect(['useradmin/education']);
        }
        return $this->renderPartial('add-education', [
            'view' => 'education',
            'model' => $model,
        ]);
    }

    /**
     * 删除教育
     */
    public function actionDelEducation($id)
    {
        $model = School::findOne($id);
        $model->delete();
        return $this->redirect(['useradmin/education']);
    }

    /**
     * 新增-教育-资格
     */
    public function actionAddQualifications()
    {
        return $this->renderPartial('add-qualifications', [
            'view' => 'education'
        ]);
    }

    /**
     * 新增-教育-资格-资格
     */
    public function actionAddFw()
    {
        $model = Qualifications::findOne(Yii::$app->request->get('id')) ?: new Qualifications();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            $model->school_id = Yii::$app->request->get('school_id');
            if (!$model->save()) {
                exit('create/edit error');
            } else
                return $this->redirect(Url::to(['useradmin/education']));
        }
        return $this->renderPartial('add-fw', [
            'view' => 'education',
            'model' => $model,
        ]);
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


    # 支付页面1
    public function actionPaySend1()
    {
        $data = [
            'view' => 'paysend'
        ];
        return $this->renderPartial('pay-send1', $data);
    }

    # 支付页面2
    public function actionPaySend2()
    {
        $data = [
            'view' => 'paysend'
        ];
        return $this->renderPartial('pay-send2', $data);
    }

    # 支付页面3
    public function actionPaySend3()
    {
        return $this->renderPartial('pay-send3');
    }

    # 支付页面4
    public function actionPaySend4()
    {
        return $this->renderPartial('pay-send4');
    }
}