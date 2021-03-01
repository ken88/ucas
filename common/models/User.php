<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $cboTitle 标题
 * @property string $cboGender 性别
 * @property string $txtForename 名
 * @property string $txtSurname 姓
 * @property int $cboDobDay 出生日
 * @property string $cboDobMonth 出生月
 * @property int $cboDobYear 出生年
 * @property string $radioLocation 邮政
 * @property string $txtAddrLine1 邮寄地址1
 * @property string|null $txtAddrLine2 邮寄地址2
 * @property string|null $txtAddrLine3 邮寄地址3
 * @property string|null $txtAddrLine4 邮寄地址4
 * @property string $cboCountryId 国家
 * @property string|null $txtHomeTelNo 座机
 * @property string|null $txtMobileTelNo 手机
 * @property string $txtEmail 邮箱
 * @property int|null $chkEducationalOption 您的选择
 * @property int|null $chkCommercialOption 学生必需品
 * @property int|null $chkUnplacedCommsFlag 相关课程
 * @property int|null $chkEmailOption 电子邮件
 * @property int|null $chkTxtOption 短信
 * @property int|null $chkMailingsOption 邮政
 * @property string $txtPassword 密码
 * @property string $cboSecurityQuestion1 问题1
 * @property string $txtReply1 回答1
 * @property string $cboSecurityQuestion2 问题2
 * @property string $txtReply2 回答2
 * @property string $cboSecurityQuestion3 问题3
 * @property string $txtReply3 回答3
 * @property string $cboSecurityQuestion4 问题4
 * @property string $txtReply4 回答4
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
            [['cboTitle', 'cboGender', 'txtForename', 'txtSurname', 'cboDobDay', 'cboDobMonth', 'cboDobYear', 'radioLocation', 'txtAddrLine1', 'cboCountryId', 'txtEmail', 'txtPassword', 'cboSecurityQuestion1', 'txtReply1', 'cboSecurityQuestion2', 'txtReply2', 'cboSecurityQuestion3', 'txtReply3', 'cboSecurityQuestion4', 'txtReply4'], 'required'],
            [['cboDobDay', 'cboDobYear', 'chkEducationalOption', 'chkCommercialOption', 'chkUnplacedCommsFlag', 'chkEmailOption', 'chkTxtOption', 'chkMailingsOption', 'create_time'], 'integer'],
            [['cboTitle', 'cboGender'], 'string', 'max' => 10],
            [['txtForename', 'txtSurname', 'cboCountryId', 'txtHomeTelNo', 'txtMobileTelNo'], 'string', 'max' => 50],
            [['cboDobMonth', 'personal_id'], 'string', 'max' => 20],
            [['radioLocation', 'txtAddrLine1', 'txtAddrLine2', 'txtAddrLine3', 'txtAddrLine4', 'txtPassword', 'txtReply1', 'txtReply2', 'txtReply3', 'txtReply4'], 'string', 'max' => 255],
            [['txtEmail', 'cboSecurityQuestion1', 'cboSecurityQuestion2', 'cboSecurityQuestion3', 'cboSecurityQuestion4'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cboTitle' => 'Cbo Title',
            'cboGender' => 'Cbo Gender',
            'txtForename' => 'Txt Forename',
            'txtSurname' => 'Txt Surname',
            'cboDobDay' => 'Cbo Dob Day',
            'cboDobMonth' => 'Cbo Dob Month',
            'cboDobYear' => 'Cbo Dob Year',
            'radioLocation' => 'Radio Location',
            'txtAddrLine1' => 'Txt Addr Line1',
            'txtAddrLine2' => 'Txt Addr Line2',
            'txtAddrLine3' => 'Txt Addr Line3',
            'txtAddrLine4' => 'Txt Addr Line4',
            'cboCountryId' => 'Cbo Country ID',
            'txtHomeTelNo' => 'Txt Home Tel No',
            'txtMobileTelNo' => 'Txt Mobile Tel No',
            'txtEmail' => 'Txt Email',
            'chkEducationalOption' => 'Chk Educational Option',
            'chkCommercialOption' => 'Chk Commercial Option',
            'chkUnplacedCommsFlag' => 'Chk Unplaced Comms Flag',
            'chkEmailOption' => 'Chk Email Option',
            'chkTxtOption' => 'Chk Txt Option',
            'chkMailingsOption' => 'Chk Mailings Option',
            'txtPassword' => 'Txt Password',
            'cboSecurityQuestion1' => 'Cbo Security Question1',
            'txtReply1' => 'Txt Reply1',
            'cboSecurityQuestion2' => 'Cbo Security Question2',
            'txtReply2' => 'Txt Reply2',
            'cboSecurityQuestion3' => 'Cbo Security Question3',
            'txtReply3' => 'Txt Reply3',
            'cboSecurityQuestion4' => 'Cbo Security Question4',
            'txtReply4' => 'Txt Reply4',
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
}
