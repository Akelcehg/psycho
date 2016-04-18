<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $secondname
 * @property string $gender
 * @property string $education
 * @property string $experience
 * @property integer $price
 * @property integer $city_id
 * @property integer $has_diplom
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 */
class Profile extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id'], 'required'],
            [['user_id', 'price', 'has_diplom', 'city_id', 'is_active'], 'integer'],
            [['gender', 'education', 'experience'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['firstname', 'lastname', 'secondname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'firstname' => 'Фамилия',
            'lastname' => 'Имя',
            'secondname' => 'Отчество',
            'gender' => 'Пол',
            'education' => 'Образование',
            'experience' => 'Опыт работы',
            'price' => 'Цена за сеанс',
            'city_id' => 'Город',
            'has_diplom' => 'Has Diplom',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function relations() {
        return [
            'problems' => array(self::HAS_MANY, 'PsychologistProblems', 'psychologist_id')
        ];
    }

    public function initProfile($model, $userId) {
        $this->firstname = $model->first_name;
        $this->lastname = $model->last_name;
        $this->secondname = $model->second_name;
        $this->user_id = $userId;
        $this->has_diplom = 0;
        return $this->save();
    }

    public static function getMostActive() {
        $query = new Query();
        $query->select('profile.*,(SELECT  COUNT(*) FROM discussion_post_reply WHERE profile.user_id = discussion_post_reply.user_id) as repliesCount');
        $query->from('profile');
        $query->orderBy('repliesCount DESC');
        $query->limit('4');
        return $query->all();
    }

}
