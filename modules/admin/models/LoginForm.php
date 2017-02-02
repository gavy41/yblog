<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use app\modules\admin\models\AdminUser;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $admin_name;
    public $admin_psw;
    public $rememberMe = true;
    
    private $_user = false;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['admin_name','admin_psw'],required,'message' => '不能为空'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            //['admin_psw', 'validatePassword'],
            
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'admin_name' => '用户名',
            'admin_psw' => '密码',
            'rememberMe'=>'记住我'
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        $AdminUser=new AdminUser();
        $admin_info=$AdminUser->findByUsername($this->admin_name);
        if ($this->validate()&&$admin_info) {
            if($AdminUser->validatePassword($admin_info['admin_psw'],$this->admin_psw)){
                return Yii::$app->adminUser->login($admin_info, $this->rememberMe ? 3600*24*30 : 0);
            }
        }else{
            // 使用 $model->getErrors() 获取错误详情
        }
        return false;
    }
}
