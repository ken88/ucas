<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $user_id
 * @property string $cboHighestExpectedQual 在开始课程之前，请注明您期望获得的最高资格*
 * @property int|null $chkComplete 部分完成
 *
 * @property User $user
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'cboHighestExpectedQual'], 'required'],
            [['user_id', 'chkComplete'], 'integer'],
            [['cboHighestExpectedQual'], 'string', 'max' => 255],
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
            'cboHighestExpectedQual' => 'Cbo Highest Expected Qual',
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
