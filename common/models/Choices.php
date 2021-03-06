<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "choices".
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property string $txtInstCode 机构代码
 * @property string|null $txtInstCode1 机构代码1
 * @property string $txtCourseCode 课程代码
 * @property string $txtCampusCode 校园代码
 * @property string $txtStartDate 开始日期
 * @property string|null $txtFurtherDetails 更多详细信息
 * @property string $rdHome 住在家里
 * @property int|null $txtPOE 入口点,填写的就是数字
 *
 * @property User $user
 */
class Choices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'txtInstCode', 'txtCourseCode', 'txtCampusCode', 'txtStartDate', 'rdHome'], 'required'],
            [['user_id', 'txtPOE'], 'integer'],
            [['txtInstCode', 'txtInstCode1', 'txtCourseCode', 'txtCampusCode', 'txtFurtherDetails'], 'string', 'max' => 255],
            [['txtStartDate'], 'string', 'max' => 50],
            [['rdHome'], 'string', 'max' => 4],
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
            'txtInstCode' => 'Txt Inst Code',
            'txtInstCode1' => 'Txt Inst Code1',
            'txtCourseCode' => 'Txt Course Code',
            'txtCampusCode' => 'Txt Campus Code',
            'txtStartDate' => 'Txt Start Date',
            'txtFurtherDetails' => 'Txt Further Details',
            'rdHome' => 'Rd Home',
            'txtPOE' => 'Txt Poe',
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

