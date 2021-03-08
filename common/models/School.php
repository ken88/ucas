<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property int $id
 * @property int $user_id
 * @property string $txtCentreName 学校/学院/中心名称
 * @property string|null $txtCentreNumber 考试中心号码
 * @property string $cboStartMonth 开始月
 * @property int $cboStartYear 开始年
 * @property string $cboFinishMonth 结束月
 * @property int $cboFinishYear 结束年
 * @property string $rdAttendance 出勤
 * @property string $cboFormalQuals 您/您是否会在该中心获得任何资格证书？*
 *
 * @property Qualifications[] $qualifications
 * @property User $user
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'txtCentreName', 'cboStartMonth', 'cboStartYear', 'cboFinishMonth', 'cboFinishYear', 'rdAttendance', 'cboFormalQuals'], 'required'],
            [['user_id', 'cboStartYear', 'cboFinishYear'], 'integer'],
            [['txtCentreName', 'txtCentreNumber'], 'string', 'max' => 255],
            [['cboStartMonth', 'cboFinishMonth'], 'string', 'max' => 20],
            [['rdAttendance', 'cboFormalQuals'], 'string', 'max' => 10],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'txtCentreName' => 'Txt Centre Name',
            'txtCentreNumber' => 'Txt Centre Number',
            'cboStartMonth' => 'Cbo Start Month',
            'cboStartYear' => 'Cbo Start Year',
            'cboFinishMonth' => 'Cbo Finish Month',
            'cboFinishYear' => 'Cbo Finish Year',
            'rdAttendance' => 'Rd Attendance',
            'cboFormalQuals' => 'Cbo Formal Quals',
        ];
    }

    /**
     * Gets query for [[Qualifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQualifications()
    {
        return $this->hasMany(Qualifications::className(), ['school_id' => 'id']);
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
