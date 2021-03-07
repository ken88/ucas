<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "statement".
 *
 * @property int $user_id
 * @property string $taPersonalStatement 描述
 * @property int|null $chkComplete 部分完成
 * @property int|null $update_time
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
            [['user_id', 'chkComplete', 'update_time'], 'integer'],
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
            'update_time' => 'Update Time',
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

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->update_time = time();
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public function getTaPersonalStatementArr()
    {
        return explode("\n", $this->taPersonalStatement);
    }
}

