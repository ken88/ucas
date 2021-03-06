<?php

namespace common\models;

use function Webmozart\Assert\Tests\StaticAnalysis\false;
use function Webmozart\Assert\Tests\StaticAnalysis\null;
use function Webmozart\Assert\Tests\StaticAnalysis\true;
use Yii;

/**
 * This is the model class for table "personal_details".
 *
 * @property int $user_id
 * @property string|null $txtPrevSurn 16岁生日的姓
 * @property string $rdPermUK 是在英国永久居住吗
 * @property string|null $txtAddrLine1 家庭住址1
 * @property string|null $txtAddrLine2 家庭住址2
 * @property string|null $txtAddrLine3 家庭住址3
 * @property string|null $txtAddrLine4 家庭住址4
 * @property string|null $cboCountryId 国家
 * @property string $txtCntryOfBirth 出生国家
 * @property int|null $cboEntryUkDay 首次进入英国的时间
 * @property string|null $cboEntryUkMonth
 * @property int|null $cboEntryUkYear
 * @property string $txtNatioality 国籍
 * @property string|null $txtDualNatioality 双重国籍
 * @property string $txtResidenceArea 永久居民区
 * @property string $txtResidentialCategory 住宅类别
 * @property string|null $txtUniqueLearnerNo 唯一学习者编号
 * @property string|null $txtToeflNo 外语考试编号
 * @property string|null $txtIeltsNo 国籍英语测试编号
 * @property string|null $cboStudentVisa 学生签证
 * @property string|null $cboStudiedUK 以前是否以学生签证在英国留学
 * @property string|null $txtPassportNo 护照号码
 * @property int|null $cboIssueDay 发行日期
 * @property string|null $cboIssueMonth
 * @property int|null $cboIssueYear
 * @property int|null $cboExpireDay 到期日期
 * @property string|null $cboExpireMonth
 * @property int|null $cboExpireYear
 * @property string|null $txtPlaceOfIssue 签发地点
 * @property string $cboFeeCode 费用代码
 * @property string|null $txtSSA_FeeName 学生支持安排
 * @property string $euAnswers 是否在欧盟工作生活
 * @property string $parentSpouse 是否在欧盟有亲人朋友
 * @property string|null $txtNominPerson 被提名人
 * @property string|null $txtNominPersonRelation 与您的关系
 * @property string $txtDisabilitySplNeeds 残疾类别
 * @property string|null $txtDisabilitySplNeedsText 特殊需求详细信息
 * @property int|null $chkComplete 部分完成
 *
 * @property User $user
 */
class PersonalDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'rdPermUK', 'txtCntryOfBirth', 'txtNatioality', 'txtResidenceArea', 'txtResidentialCategory', 'cboFeeCode', 'euAnswers', 'parentSpouse', 'txtDisabilitySplNeeds'], 'required'],
            [['user_id', 'cboEntryUkDay', 'cboEntryUkYear', 'cboIssueDay', 'cboIssueYear', 'cboExpireDay', 'cboExpireYear', 'chkComplete'], 'integer'],
            [['txtDisabilitySplNeeds', 'txtDisabilitySplNeedsText'], 'string'],
            [['txtPrevSurn', 'txtAddrLine1', 'txtAddrLine2', 'txtAddrLine3', 'txtAddrLine4', 'txtPassportNo', 'txtPlaceOfIssue'], 'string', 'max' => 255],
            [['rdPermUK', 'cboStudentVisa', 'cboStudiedUK'], 'string', 'max' => 10],
            [['cboCountryId', 'txtCntryOfBirth', 'txtNatioality', 'txtDualNatioality', 'txtResidenceArea', 'txtResidentialCategory'], 'string', 'max' => 100],
            [['cboEntryUkMonth', 'cboIssueMonth', 'cboExpireMonth', 'euAnswers', 'parentSpouse'], 'string', 'max' => 20],
            [['txtUniqueLearnerNo', 'txtToeflNo', 'txtIeltsNo', 'cboFeeCode', 'txtSSA_FeeName', 'txtNominPerson', 'txtNominPersonRelation', 'txtPrefFName'], 'string', 'max' => 50],
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
            'txtPrevSurn' => 'Txt Prev Surn',
            'rdPermUK' => 'Rd Perm Uk',
            'txtAddrLine1' => 'Txt Addr Line1',
            'txtAddrLine2' => 'Txt Addr Line2',
            'txtAddrLine3' => 'Txt Addr Line3',
            'txtAddrLine4' => 'Txt Addr Line4',
            'cboCountryId' => 'Cbo Country ID',
            'txtCntryOfBirth' => 'Txt Cntry Of Birth',
            'cboEntryUkDay' => 'Cbo Entry Uk Day',
            'cboEntryUkMonth' => 'Cbo Entry Uk Month',
            'cboEntryUkYear' => 'Cbo Entry Uk Year',
            'txtNatioality' => 'Txt Natioality',
            'txtDualNatioality' => 'Txt Dual Natioality',
            'txtResidenceArea' => 'Txt Residence Area',
            'txtResidentialCategory' => 'Txt Residential Category',
            'txtUniqueLearnerNo' => 'Txt Unique Learner No',
            'txtToeflNo' => 'Txt Toefl No',
            'txtIeltsNo' => 'Txt Ielts No',
            'cboStudentVisa' => 'Cbo Student Visa',
            'cboStudiedUK' => 'Cbo Studied Uk',
            'txtPassportNo' => 'Txt Passport No',
            'cboIssueDay' => 'Cbo Issue Day',
            'cboIssueMonth' => 'Cbo Issue Month',
            'cboIssueYear' => 'Cbo Issue Year',
            'cboExpireDay' => 'Cbo Expire Day',
            'cboExpireMonth' => 'Cbo Expire Month',
            'cboExpireYear' => 'Cbo Expire Year',
            'txtPlaceOfIssue' => 'Txt Place Of Issue',
            'cboFeeCode' => 'Cbo Fee Code',
            'txtSSA_FeeName' => 'Txt Ssa Fee Name',
            'euAnswers' => 'Eu Answers',
            'parentSpouse' => 'Parent Spouse',
            'txtNominPerson' => 'Txt Nomin Person',
            'txtNominPersonRelation' => 'Txt Nomin Person Relation',
            'txtDisabilitySplNeeds' => 'Txt Disability Spl Needs',
            'txtDisabilitySplNeedsText' => 'Txt Disability Spl Needs Text',
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
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->cboFeeCode != 'UK, Chl, IoM or EU student finance services')
                $this->txtSSA_FeeName = null;
            return true;
        }
        return false;
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
