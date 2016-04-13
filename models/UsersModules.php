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

    public static function getUsersModulesList() {
        $query = new Query();

        $query->select('modules.*,users_modules.user_id as active')
            ->from('modules')
            ->join('left join', 'users_modules',
                'modules.id = users_modules.module_id and
                users_modules.user_id= ' . Yii::$app->user->id
            )->orderBy('modules.id');

        return $query->all();
    }

    public function setNewUserSettings($psychologistId, $settingsArray) {

        if (count($settingsArray) > 0) {
            $this->deleteUserSettings($psychologistId);

            return $this->insertNewData($psychologistId, $settingsArray);
        } else {
            return $this->deleteUserSettings($psychologistId);
        }
    }

    private function insertNewData($psychologistId, $settingsArray) {

        $command = Yii::$app->db->createCommand();
        $valuesArray = [];

        for ($i = 0; $i < count($settingsArray); $i++) {
            array_push($valuesArray, [$psychologistId, $settingsArray[$i]]);
        }

        $command->batchInsert('users_modules',
            ['user_id', 'module_id'], $valuesArray);

        return $command->execute();
    }

    private function deleteUserSettings($psychologistId) {
        return UsersModules::deleteAll('user_id = ' . $psychologistId);
    }
}
