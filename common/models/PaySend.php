<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pay_send".
 *
 * @property int $user_id
 * @property int $checkAgreement1
 * @property int $checkAgreement3
 * @property int $checkAgreement4
 * @property int $checkAgreement5
 * @property string $card_number 卡号
 * @property int $exp_month 到期月
 * @property int $exp_year 到期年
 * @property string $cv2_number 安全码
 * @property string|null $issue_number 发行量
 * @property int|null $chkComplete 部分完成
 *
 * @property User $user
 */
class PaySend extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_send';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['user_id', 'checkAgreement1', 'checkAgreement3', 'checkAgreement4', 'checkAgreement5', 'card_number', 'exp_month', 'exp_year', 'cv2_number'], 'required'],
            [['user_id', 'checkAgreement1', 'checkAgreement3', 'checkAgreement4', 'checkAgreement5'], 'required', 'on' => 'one'],
            [['user_id', 'card_number', 'exp_month', 'exp_year', 'cv2_number'], 'required', 'on' => 'two'],
            [['user_id', 'checkAgreement1', 'checkAgreement3', 'checkAgreement4', 'checkAgreement5', 'exp_month', 'exp_year', 'chkComplete'], 'integer'],
            [['card_number'], 'string', 'max' => 255],
            [['cv2_number', 'issue_number'], 'string', 'max' => 50],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'checkAgreement1' => 'Check Agreement1',
            'checkAgreement3' => 'Check Agreement3',
            'checkAgreement4' => 'Check Agreement4',
            'checkAgreement5' => 'Check Agreement5',
            'card_number' => 'Card Number',
            'exp_month' => 'Exp Month',
            'exp_year' => 'Exp Year',
            'cv2_number' => 'Cv2 Number',
            'issue_number' => 'Issue Number',
            'chkComplete' => 'Chk Complete',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return bool
     */
    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->user_id = Yii::$app->user->identity->id;
            return true;
        }
        return false;
    }
}
