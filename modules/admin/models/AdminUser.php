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
class AdminUser extends \yii\db\ActiveRecord
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


}
