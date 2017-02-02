<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%admin_user}}".
 *
 * @property integer $admin_id
 * @property string $admin_name
 * @property string $admin_psw
 * @property integer $group_id
 */
class AdminUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id'], 'integer'],
            [['admin_name'], 'string', 'max' => 24],
            [['admin_psw'], 'string', 'max' => 64],
            [['admin_name','admin_psw','group_id'],required,'message' => '不能为空']
        ];
    }
    
    public static function  adminGroupArray()
    {
        return ['1'=>'超级管理员','2'=>'管理员'];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => '管理员ID',
            'admin_name' => '管理员名称',
            'admin_psw' => '管理员密码',
            'group_id' => '管理员组',
        ];
    }

    public function hashPassword($admin_psw)
    {
        return md5(Yii::$app->params['md5_halt'].$admin_psw);
    }
    
    public static function findByUsername($username)
    {
        $admin_info = self::findOne(['admin_name' => $username]);
        return new static($admin_info);
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return self::findOne(['admin_id'=>$id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->admin_id;
    }
    
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
    
    public function validatePassword($password_db,$password_post)
    {
        return $password_db===$this->hashPassword($password_post);
    }
    
}
