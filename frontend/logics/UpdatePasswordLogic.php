<?php
/**
 * Created by.
 * Author: baijidong
 * E-mail: baijidong1992@gmail.com
 * Date: 2021-03-08 19:12
 */

namespace frontend\logics;


use yii\base\Model;

/**
 * 修改密码
 * Class UpdatePasswordLogic
 * @package frontend\logics
 */
class UpdatePasswordLogic extends Model
{
    public $oldPassword;
    public $newPassword;
    public $confirmPassword;
    protected $_user;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['oldPassword', 'newPassword', 'confirmPassword'], 'required'],
            ['oldPassword', 'validateOldPassword'],
            ['confirmPassword', 'compare', 'compareAttribute' => 'newPassword', 'message' => '两次密码输入不一致'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'oldPassword' => 'old password',
            'newPassword' => 'new password',
            'confirmPassword' => 'confirm password',
        ];
    }

    /**
     * 验证原始密码
     */
    public function validateOldPassword()
    {
        if (!$this->_user->validatePassword($this->oldPassword)) {
            $this->addError('oldPassword', 'old password error');
        }
    }

    /**
     * @return bool
     */
    public function save()
    {
        $this->_user = \Yii::$app->user->identity;
        if (!$this->validate())
            return false;
        $this->_user->setPassword($this->newPassword);
        return $this->_user->save();
    }
}