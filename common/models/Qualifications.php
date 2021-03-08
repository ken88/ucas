<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qualifications".
 *
 * @property int $id
 * @property int $user_id
 * @property int $school_id
 * @property string $cboTitle 主题
 * @property string|null $txtTitle 主题，其他
 * @property string $cboQualMonth 资格日期
 * @property int $cboQualYear
 * @property string $cboAwardingBody 颁奖机构
 * @property string|null $txtAwardingBody
 * @property string $cboGrade 等级
 * @property string|null $txtGrade
 *
 * @property User $user
 * @property School $school
 */
class Qualifications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qualifications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'school_id', 'cboTitle', 'cboQualMonth', 'cboQualYear', 'cboAwardingBody', 'cboGrade'], 'required'],
            [['user_id', 'school_id', 'cboQualYear'], 'integer'],
            [['cboTitle', 'txtTitle', 'txtAwardingBody', 'txtGrade'], 'string', 'max' => 255],
            [['cboQualMonth', 'cboAwardingBody', 'cboGrade'], 'string', 'max' => 20],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['school_id'], 'exist', 'skipOnError' => true, 'targetClass' => School::className(), 'targetAttribute' => ['school_id' => 'id']],
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
            'school_id' => 'School ID',
            'cboTitle' => 'Cbo Title',
            'txtTitle' => 'Txt Title',
            'cboQualMonth' => 'Cbo Qual Month',
            'cboQualYear' => 'Cbo Qual Year',
            'cboAwardingBody' => 'Cbo Awarding Body',
            'txtAwardingBody' => 'Txt Awarding Body',
            'cboGrade' => 'Cbo Grade',
            'txtGrade' => 'Txt Grade',
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
     * Gets query for [[School]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'school_id']);
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

