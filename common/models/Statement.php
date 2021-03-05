<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "statement".
 *
 * @property int $user_id
 * @property string $taPersonalStatement 描述
 * @property int|null $chkComplete 部分完成
 *
 * @property User $user
 */
class Statement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'taPersonalStatement'], 'required'],
            [['user_id', 'chkComplete'], 'integer'],
            [['taPersonalStatement'], 'string'],
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
            'taPersonalStatement' => 'Ta Personal Statement',
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
