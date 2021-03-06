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
use common\models\PaySend;
use common\models\PersonalDetails;
use common\models\Qualifications;
use common\models\School;
use common\models\Statement;
use common\models\User;
use common\models\ViewAll;
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
        $model = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        $model->chkEmailOption = '1';
        $model->save();
        $data = [
            'view' => 'welcome'
        ];
        return $this->renderPartial('index', $data);
    }

    public function actionWelcome()
    {
        $chkEmailOption = Yii::$app->user->identity->chkEmailOption;

        $data = [
            'view' => 'welcome',
            'user' => Yii::$app->user->identity,
            'chkEmailOption' => $chkEmailOption,
        ];
        return $this->renderPartial('welcome', $data);
    }

    # 获取左侧菜单信息
    public function actionAjaxGetMenu()
    {
        $info = User::infoSelection();
        res(200, '', $info);
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
            $sw = Yii::$app->db->beginTransaction();
            $model->attributes = Yii::$app->request->post();
            if (!$model->save()) {
                $sw->rollBack();
                exit('create/edit err');
            }
            $user->attributes = Yii::$app->request->post();
            if (!$user->save()) {
                $sw->rollBack();
                exit('create/edit err');
            }
            $sw->commit();
        }
        return $this->renderPartial('personaldetails', [
            'view' => 'personaldetails',
            'user' => $user,
            'model' => $model,
            'chkEmailOption' => $chkEmailOption,
        ]);
    }

    # 地址修改
    public function actionChangeaddr()
    {
        if (Yii::$app->request->isPost)
            return $this->redirect(['useradmin/add-addr']);
        return $this->renderPartial('changge-addr', [
            'view' => 'personaldetails'
        ]);
    }

    # 地址修改页面
    public function actionAddAddr()
    {
        $user = Yii::$app->user->identity;
        if (Yii::$app->request->isPost) {
            $user->attributes = Yii::$app->request->post();
            if (!$user->save()) {
                exit('address save error');
            } else
                return $this->redirect(Url::to(['useradmin/personaldetails']));
        }
        return $this->renderPartial('add-addr', [
            'view' => 'personaldetails',
            'model' => $user,
        ]);
    }

    /**
     * 修改家庭地址
     */
    public function actionChangeHomeAddr()
    {
        if (Yii::$app->request->isPost)
            return $this->redirect(['useradmin/add-home-addr']);
        return $this->renderPartial('/useradmin/changge-addr', [
            'view' => 'personaldetails'
        ]);
    }

    /**
     * 修改家庭地址
     */
    public function actionAddHomeAddr()
    {
        $model = PersonalDetails::findOne(Yii::$app->user->identity->id) ?: new PersonalDetails();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            if (!$model->save()) {
                exit('address save error');
            } else
                return $this->redirect(Url::to(['useradmin/personaldetails']));
        }
        return $this->renderPartial('/useradmin/add-addr', [
            'view' => 'personaldetails',
            'model' => $model,
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
            ->orderBy(['id' => SORT_DESC])
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
            $json = json_encode(Yii::$app->request->post());
//            var_dump(json_decode($json, true));
            $model->content = $json;
            if (Yii::$app->request->get('school_id'))
                $model->school_id = Yii::$app->request->get('school_id');
            $model->val = Yii::$app->request->get('val');
            if (!$model->save()) {
                var_dump($model->getFirstErrors());
                die;
            } else {
                if (Yii::$app->request->post('saveAndAdd'))
                    return $this->redirect(Url::to(['useradmin/add-fw', 'school_id' => $model->school_id, 'val' => $model->val]));
                else
                    return $this->redirect(Url::to(['useradmin/education']));
            }
//            die;
//            $model->attributes = Yii::$app->request->post();
//            if (Yii::$app->request->get('school_id')) {
//                $model->school_id = Yii::$app->request->get('school_id');
//            }
//            if (!$model->save()) {
//                exit('create/edit error');
//            } else
//                return $this->redirect(Url::to(['useradmin/education']));
        }

        $arr = [];
        $view = 'add-fw';
        $val = Yii::$app->request->get('val');
        switch ($val) {
            case  'International A Level' :
                $view = 'add-fw1';
                $arr = [
                    'Biology' => [
                        'Biological Systems and disease (AS)',
                        'Control (A2)',
                        'Populations and genes (A2)',
                        'Synoptic paper (A2)',
                        'The delivery of living organisms (AS)'
                    ],
                    'Chemistry' => [
                        'Inorganic 1 and Physical 1 (AS)',
                        'Inorganic 2 and Physical 2 (A2)',
                        'Organic 1 and Physical 1 (AS)',
                        'Organic 2 and Physical 2 (A2)',
                        'Practical and synoptic (A2)'
                    ],
                    'English Language' => [
                        'Language Variation (A2)',
                        'Language and context  (AS)',
                        'Language and society (AS)',
                        'Language exploration (A2)'
                    ],
                    'English Literature' => [
                        'Aspects of dramatic tragedy (AS)',
                        'Elements of crime and mystery (A2)',
                        'Literary representations (A2)',
                        'Place in literary text (AS)'
                    ],
                    'Further Mathematics' => [
                        'Further Mechanics (A2)',
                        'Further Pure Maths (A2)',
                        'Further Pure Maths (AS)',
                        'Further Pure Maths,Stats and Mechanics (AS)',
                        'Further Statistics (A2)'
                    ],
                    'Mathematics' => [
                        'Mechanics (A2)',
                        'Pure Maths (A2)',
                        'Pure Maths (AS)',
                        'Pure Maths, Statistics, Mechanics (AS)',
                        'Statistics (A2)'
                    ],
                    'Physics' => [
                        'Electricity, waves and particles (AS)',
                        'Energy and energy resources (A2)',
                        'Fields and their consequences (A2)',
                        'Mechanics, materials and atoms (AS)',
                        'Physics in practice and multiple choice (A2)'
                    ]
                ];
                break;
            case  'International GCSE' :
                $view = 'add-fw2';
                break;
            case  'International Advanced Subsidiary' :
                $view = 'add-fw3';
                $arr = [
                    'Biology' => [
                        'Biological systems and disease',
                        'The diversity of living organisms'
                    ],
                    'Chemistry' => [
                        'Inorganic 1 and Physical 1',
                        'Organic 1 and Physical 1'
                    ],
                    'English Language' => [
                        'Language and Context',
                        'Language and society'
                    ],
                    'English Literature' => [
                        'Aspects of Dramatic Tragedy',
                        'Place in literary texts'
                    ],
                    'Further Mathematics' => [
                        'Pure Maths',
                        'Pure, Statistics and Mechanics'
                    ],
                    'Mathematics' => [
                        'Pure Maths',
                        'Pure Maths, Statistics and mechanics'
                    ],
                    'Physics' => [
                        'Electricity, waves and particles',
                        'Mechanics, materials and atoms'
                    ]
                ];
                break;
            case  'International Computer Driving Licence' :
                $view = 'add-fw4';
                break;
            case  'EPQ' :
                $view = 'add-fw5';
                break;
            case  'Cambridge International Project Qualification (Cambridge IPQ)' :
                $view = 'add-fw6';
                break;
            case  'OxfordAQA Exams International Independent Project Qualification (IPQ)' :
                $view = 'add-fw7';
                break;
            case  'OxfordAQA International IPQ' :
                $view = 'add-fw7';
                break;
            case  'Cambridge International A Level' :
                $view = 'add-fw8';
                break;
            case  'Cambridge International AS Level' :
                $view = 'add-fw9';
                break;
        }


        return $this->renderPartial($view, [
            'view' => 'education',
            'arr' => json_encode($arr),
            'model' => $model,
            'data' => json_decode($model->content, true),
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
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->all();
        return $this->renderPartial('employment', [
            'view' => 'employment',
            'employer' => $employer,
            'model' => $model,
        ]);
    }

    /**
     * 资格删除
     * @return \yii\web\Response
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDeleteQualifications()
    {
        $model = Qualifications::findOne(Yii::$app->request->get('id'));
        if ($model->delete()) {
            return $this->redirect(['useradmin/education']);
        } else {
            exit('delete error');
        }
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
            if ($model->save() && Yii::$app->request->post('is_preview'))
                return $this->redirect(['useradmin/statement-see']);
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
        $model = ViewAll::findOne(Yii::$app->user->identity->id) ?: new ViewAll();
        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            $model->save();
        }
        $user = Yii::$app->user->identity;
        return $this->renderPartial('viewalldetails', [
            'view' => 'viewalldetails',
            'model' => $model,
            'user' => $user,
            'personal' => $user->personalDetails,
            'choices' => $user->choices,
            'schools' => $user->schools,
            'employers' => $user->employers,
            'statement' => $user->statement,
        ]);
    }

    # 支付页面1
    public function actionPaySend1()
    {
        $data = [
            'view' => 'paysend'
        ];
        return $this->renderPartial('pay-send1', $data);
    }

    /**
     * 支付页面2
     */
    public function actionPaySend2()
    {
        $model = PaySend::findOne(Yii::$app->user->identity->id) ?: new PaySend();
        if (Yii::$app->request->isPost) {
            $model->scenario = 'one';
            $model->attributes = Yii::$app->request->post();
            if ($model->save()) {
                return $this->redirect(Url::to(['useradmin/pay-send3']));
            }
        }
        return $this->renderPartial('pay-send2', [
            'view' => 'paysend',
            'model' => $model,
        ]);
    }

    # 支付页面3
    public function actionPaySend3()
    {
        $data = [
            'view' => 'paysend'
        ];
        return $this->renderPartial('pay-send3', $data);
    }

    /**
     * 支付页面4
     */
    public function actionPaySend4()
    {
        $model = PaySend::findOne(Yii::$app->user->identity->id) ?: new PaySend();
        if (Yii::$app->request->isPost) {
            $model->scenario = 'two';
            $model->attributes = Yii::$app->request->post();
            $model->chkComplete = 1;
            $model->save();
        }
        return $this->renderPartial('pay-send4', [
            'view' => 'paysend',
            'model' => $model,
        ]);
    }

    /**
     * 支付页面5
     */
    public function actionPaySend5()
    {
        $model = PaySend::findOne(Yii::$app->user->identity->id) ?: new PaySend();

        return $this->renderPartial('pay-send5', [
            'view' => 'paysend',
            'data' => Yii::$app->user->identity
        ]);
    }
}