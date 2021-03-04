<?php
/**
 * Created by PhpStorm.
 * User: yukai
 * Date: 2021/2/27
 * Time: 21:18
 */

namespace backend\controllers;

use Yii;

class UseradminController extends BaseController
{
    # 邮件发送
    public function actionSend() {
        $mail= Yii::$app->mailer->compose();
//        $mail->setTo('yukai08621@163.com');
        $mail->setTo('176745155@qq.com');
        $mail->setSubject("发布纯文字文本");

//$mail->setTextBody('zheshisha ');   //发布纯文字文本
//        $mes = "<br>Dear Miss qaz wsx
//<br><br>Before submitting your application, you need to verify that the email address you have provided is correct.
//In order to verify this, please log in to the UCAS website (https://www.ucas.com/ucas/undergraduate/login)
//and enter the verification code shown below:
//<br><br>email address: 176745155@qq.com
//<br><br>verification code: mkx61508
//<br><br>This code is only valid for the address shown above. If you change your email address, you will need to obtain a new verification code.
//<br><br>Once we have verified your email address, we can then send emails
//alerting you to changes to your application, including decisions made by your chosen universities and colleges.
//they will tell you to log in to the Track service to view any changes.
//Track is available on the UCAS website for you to use once we have processed your application.
//For environmental reasons you will not receive a letter containing an individual decision,
//although you will be able to print these letters from the Track system if necessary.
//<br><br>Note: this is an automated email, so please do not reply to this address.";
        $mes = '发布纯文字文本发布纯文字文本发布纯文字文本发布纯文字文本';
        $mail->setHtmlBody($mes);    //发布可以带html标签的文本
        if($mail->send())
            echo "ok";
        else
            echo "failse";
        return $this->renderPartial('send');

    }

    public function actionIndex() {
        $data = [
            'view' => 'welcome'
        ];
        return $this->renderPartial('index',$data);
    }

    public function actionWelcome() {
        $data = [
            'view' => 'welcome'
        ];
        return $this->renderPartial('welcome',$data);
    }

    # 个人资料
    public function actionPersonaldetails() {
        $data = [
            'view' => 'personaldetails'
        ];
        return $this->renderPartial('personaldetails',$data);
    }

    # 选择项
    public function actionChoices() {
        $data = [
            'view' => 'choices'
        ];
        return $this->renderPartial('choices',$data);
    }

    # 教育
    public function actionEducation() {
        $data = [
            'view' => 'education'
        ];
        return $this->renderPartial('education',$data);
    }

    # 就业机会
    public function actionEmployment() {
        $data = [
            'view' => 'employment'
        ];
        return $this->renderPartial('employment',$data);
    }

    # 陈述
    public function actionStatement() {
        $data = [
            'view' => 'statement'
        ];
        return $this->renderPartial('statement',$data);
    }

    # 查看所有细节
    public function actionViewalldetails() {
        $data = [
            'view' => 'viewalldetails'
        ];
        return $this->renderPartial('viewalldetails',$data);
    }

}