<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "users_modules".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $module_id
 * @property string $created_at
 * @property string $updated_at
 */
class UsersModules extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'users_modules';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'module_id'], 'required'],
            [['user_id', 'module_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'module_id' => 'Module ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getUsersModules() {
        $modules = Modules::find();
        $modules->join('inner join', 'users_modules', 'modules.id = users_modules.module_id');
        $modules->where(['users_modules.user_id' => Yii::$app->user->id]);
        return $modules->all();
    }

}
