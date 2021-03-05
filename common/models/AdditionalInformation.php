<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "additional_information".
 *
 * @property int $user_id
 * @property string $cboEthnicOrigin 种族出身
 * @property string|null $cboReligiousBelief 宗教信仰
 * @property string|null $cboSexualOrientation 性取向
 * @property string|null $cboGenderIdentityDiff 您是否识别为跨性别者？
 * @property string $cboNationalIdOne 国民身份
 * @property string|null $cboNationalIdTwo 双重国籍
 * @property string|null $cboStartMonthOne 高等教育准备活动1，月
 * @property int|null $cboStartYearOne 年
 * @property int|null $cboDurationOne 持续天数
 * @property string|null $cboSchoolYearOne 学年
 * @property string|null $txtInstitutionOne 地点
 * @property string|null $cbosSSponsorOne 赞助
 * @property string $cboStartMonthTwo 高等教育准备活动2，月
 * @property int|null $cboDurationTwo 持续天数
 * @property int|null $cboStartYearTwo 年
 * @property string|null $cboSchoolYearTwo 学年
 * @property string|null $txtInstitutionTwo 地点
 * @property string|null $cbosSSponsorTwo 赞助
 * @property string|null $cboCare 你一直在照顾吗？
 * @property string|null $cboCareDuration 护理时间
 * @property string|null $cboParentalHE 家庭教育
 * @property string $txtOccupationalBG 职位背景
 * @property string|null $radioWelsh 我希望来自威尔士大学，学院和UCAS的来信在威尔士
 * @property int|null $chkComplete 部分完成
 *
 * @property User $user
 */
class AdditionalInformation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'additional_information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'cboEthnicOrigin', 'cboNationalIdOne', 'cboStartMonthTwo', 'txtOccupationalBG'], 'required'],
            [['user_id', 'cboStartYearOne', 'cboDurationOne', 'cboDurationTwo', 'cboStartYearTwo', 'chkComplete'], 'integer'],
            [['cboEthnicOrigin', 'cboReligiousBelief', 'cboSexualOrientation', 'cboGenderIdentityDiff', 'cboNationalIdOne', 'cboNationalIdTwo', 'cbosSSponsorOne', 'cbosSSponsorTwo'], 'string', 'max' => 50],
            [['cboStartMonthOne', 'cboStartMonthTwo', 'cboCareDuration', 'cboParentalHE'], 'string', 'max' => 20],
            [['cboSchoolYearOne', 'cboSchoolYearTwo', 'cboCare'], 'string', 'max' => 10],
            [['txtInstitutionOne', 'txtInstitutionTwo', 'txtOccupationalBG'], 'string', 'max' => 100],
            [['radioWelsh'], 'string', 'max' => 4],
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
            'cboEthnicOrigin' => 'Cbo Ethnic Origin',
            'cboReligiousBelief' => 'Cbo Religious Belief',
            'cboSexualOrientation' => 'Cbo Sexual Orientation',
            'cboGenderIdentityDiff' => 'Cbo Gender Identity Diff',
            'cboNationalIdOne' => 'Cbo National Id One',
            'cboNationalIdTwo' => 'Cbo National Id Two',
            'cboStartMonthOne' => 'Cbo Start Month One',
            'cboStartYearOne' => 'Cbo Start Year One',
            'cboDurationOne' => 'Cbo Duration One',
            'cboSchoolYearOne' => 'Cbo School Year One',
            'txtInstitutionOne' => 'Txt Institution One',
            'cbosSSponsorOne' => 'Cbos S Sponsor One',
            'cboStartMonthTwo' => 'Cbo Start Month Two',
            'cboDurationTwo' => 'Cbo Duration Two',
            'cboStartYearTwo' => 'Cbo Start Year Two',
            'cboSchoolYearTwo' => 'Cbo School Year Two',
            'txtInstitutionTwo' => 'Txt Institution Two',
            'cbosSSponsorTwo' => 'Cbos S Sponsor Two',
            'cboCare' => 'Cbo Care',
            'cboCareDuration' => 'Cbo Care Duration',
            'cboParentalHE' => 'Cbo Parental He',
            'txtOccupationalBG' => 'Txt Occupational Bg',
            'radioWelsh' => 'Radio Welsh',
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
}
