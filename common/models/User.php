<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $title 标题
 * @property string $gender 性别
 * @property string $txtForename 名
 * @property string $txtSurname 姓
 * @property int $cboDobDay 出生日
 * @property string $cboDobMonth 出生月
 * @property int $cboDobYear 出生年
 * @property string $radioLocation 邮政
 * @property string $addrLine1Text 邮寄地址1
 * @property string|null $addrLine2Text 邮寄地址2
 * @property string|null $addrLine3Text 邮寄地址3
 * @property string|null $addrLine4Text 邮寄地址4
 * @property string $Country 国家
 * @property string|null $txtHomePhone 座机
 * @property string|null $txtMobilePhone 手机
 * @property string $emailText 邮箱
 * @property int|null $chkEducationalOption 您的选择
 * @property int|null $chkCommercialOption 学生必需品
 * @property int|null $chkUnplacedCommsFlag 相关课程
 * @property int|null $chkEmailOption 电子邮件
 * @property int|null $chkTxtOption 短信
 * @property int|null $chkMailingsOption 邮政
 * @property string $passwordText 密码
 * @property string $wenti1 问题1
 * @property string $daan1 回答1
 * @property string $wenti2 问题2
 * @property string $daan2 回答2
 * @property string $wenti3 问题3
 * @property string $daan3 回答3
 * @property string $wenti4 问题4
 * @property string $daan4 回答4
 * @property int|null $create_time 创建时间
 * @property string|null $personal_id 个人id
 *
 * @property AdditionalInformation $additionalInformation
 * @property Choice $choice
 * @property Choices[] $choices
 * @property Education $education
 * @property Employer[] $employers
 * @property Employment $employment
 * @property PersonalDetails $personalDetails
 * @property Reference $reference
 * @property School[] $schools
 * @property Statement $statement
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'gender', 'txtForename', 'txtSurname', 'cboDobDay', 'cboDobMonth', 'cboDobYear', 'radioLocation', 'addrLine1Text', 'Country', 'emailText', 'passwordText', 'wenti1', 'daan1', 'wenti2', 'daan2', 'wenti3', 'daan3', 'wenti4', 'daan4'], 'required'],
            [['cboDobDay', 'cboDobYear', 'chkEducationalOption', 'chkCommercialOption', 'chkUnplacedCommsFlag', 'chkEmailOption', 'chkTxtOption', 'chkMailingsOption', 'create_time'], 'integer'],
            [['title', 'gender'], 'string', 'max' => 10],
            [['txtForename', 'txtSurname', 'Country', 'txtHomePhone', 'txtMobilePhone'], 'string', 'max' => 50],
            [['cboDobMonth', 'personal_id'], 'string', 'max' => 20],
            [['radioLocation', 'addrLine1Text', 'addrLine2Text', 'addrLine3Text', 'addrLine4Text', 'passwordText', 'daan1', 'daan2', 'daan3', 'daan4'], 'string', 'max' => 255],
            [['emailText', 'wenti1', 'wenti2', 'wenti3', 'wenti4'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'gender' => 'Gender',
            'txtForename' => 'Txt Forename',
            'txtSurname' => 'Txt Surname',
            'cboDobDay' => 'Cbo Dob Day',
            'cboDobMonth' => 'Cbo Dob Month',
            'cboDobYear' => 'Cbo Dob Year',
            'radioLocation' => 'Radio Location',
            'addrLine1Text' => 'Addr Line1 Text',
            'addrLine2Text' => 'Addr Line2 Text',
            'addrLine3Text' => 'Addr Line3 Text',
            'addrLine4Text' => 'Addr Line4 Text',
            'Country' => 'Country',
            'txtHomePhone' => 'Txt Home Phone',
            'txtMobilePhone' => 'Txt Mobile Phone',
            'emailText' => 'Email Text',
            'chkEducationalOption' => 'Chk Educational Option',
            'chkCommercialOption' => 'Chk Commercial Option',
            'chkUnplacedCommsFlag' => 'Chk Unplaced Comms Flag',
            'chkEmailOption' => 'Chk Email Option',
            'chkTxtOption' => 'Chk Txt Option',
            'chkMailingsOption' => 'Chk Mailings Option',
            'passwordText' => 'Password Text',
            'wenti1' => 'Wenti1',
            'daan1' => 'Daan1',
            'wenti2' => 'Wenti2',
            'daan2' => 'Daan2',
            'wenti3' => 'Wenti3',
            'daan3' => 'Daan3',
            'wenti4' => 'Wenti4',
            'daan4' => 'Daan4',
            'create_time' => 'Create Time',
            'personal_id' => 'Personal ID',
        ];
    }

    /**
     * Gets query for [[AdditionalInformation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdditionalInformation()
    {
        return $this->hasOne(AdditionalInformation::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Choice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChoice()
    {
        return $this->hasOne(Choice::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Choices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChoices()
    {
        return $this->hasMany(Choices::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Education]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Employers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployers()
    {
        return $this->hasMany(Employer::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Employment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployment()
    {
        return $this->hasOne(Employment::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[PersonalDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalDetails()
    {
        return $this->hasOne(PersonalDetails::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Reference]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReference()
    {
        return $this->hasOne(Reference::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Schools]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSchools()
    {
        return $this->hasMany(School::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Statement]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatement()
    {
        return $this->hasOne(Statement::className(), ['user_id' => 'id']);
    }

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->create_time = time();
                $this->passwordText = Yii::$app->security->generatePasswordHash($this->passwordText);
            }
            return true;
        }
        return false;
    }
}
