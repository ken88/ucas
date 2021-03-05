<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reference".
 *
 * @property int $user_id
 * @property string $txtRefereeName 裁判员的全名和姓名*
 * @property string $txtPost 职位/职业/关系*
 * @property string $txtOrgName 机构名称*
 * @property string $txtAddr1 地址1
 * @property string|null $txtAddr2 地址2
 * @property string|null $txtAddr3 地址3
 * @property string|null $txtAddr4 地址4
 * @property string $txtTelephoneNumber 电话
 * @property string|null $txtFaxNumber 传真
 * @property string $txtEmail 邮箱
 * @property string|null $txtDatesUnavail 日期不可用
 *
 * @property User $user
 */
class Reference extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reference';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'txtRefereeName', 'txtPost', 'txtOrgName', 'txtAddr1', 'txtTelephoneNumber', 'txtEmail'], 'required'],
            [['user_id'], 'integer'],
            [['txtRefereeName', 'txtPost', 'txtOrgName', 'txtAddr1', 'txtAddr2', 'txtAddr3', 'txtAddr4', 'txtDatesUnavail'], 'string', 'max' => 255],
            [['txtTelephoneNumber', 'txtFaxNumber'], 'string', 'max' => 50],
            [['txtEmail'], 'string', 'max' => 100],
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
            'txtRefereeName' => 'Txt Referee Name',
            'txtPost' => 'Txt Post',
            'txtOrgName' => 'Txt Org Name',
            'txtAddr1' => 'Txt Addr1',
            'txtAddr2' => 'Txt Addr2',
            'txtAddr3' => 'Txt Addr3',
            'txtAddr4' => 'Txt Addr4',
            'txtTelephoneNumber' => 'Txt Telephone Number',
            'txtFaxNumber' => 'Txt Fax Number',
            'txtEmail' => 'Txt Email',
            'txtDatesUnavail' => 'Txt Dates Unavail',
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
