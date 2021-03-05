<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employer".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $txtEmpName 雇主姓名
 * @property string $txtEmpAddress 雇主地址
 * @property string $txtEmpNature 职位描述
 * @property string $cboStartMonth 开始月
 * @property int $cboStartYear 开始年
 * @property string|null $cboEndMonth 结束月
 * @property int|null $cboEndYear 结束年
 * @property string $radioEmpType
 *
 * @property User $user
 */
class Employer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'cboStartYear', 'cboEndYear'], 'integer'],
            [['txtEmpName', 'txtEmpAddress', 'txtEmpNature', 'cboStartMonth', 'cboStartYear', 'radioEmpType'], 'required'],
            [['txtEmpName', 'txtEmpAddress', 'txtEmpNature'], 'string', 'max' => 255],
            [['cboStartMonth', 'cboEndMonth', 'radioEmpType'], 'string', 'max' => 20],
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
            'txtEmpName' => 'Txt Emp Name',
            'txtEmpAddress' => 'Txt Emp Address',
            'txtEmpNature' => 'Txt Emp Nature',
            'cboStartMonth' => 'Cbo Start Month',
            'cboStartYear' => 'Cbo Start Year',
            'cboEndMonth' => 'Cbo End Month',
            'cboEndYear' => 'Cbo End Year',
            'radioEmpType' => 'Radio Emp Type',
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
