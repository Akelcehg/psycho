<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $secondname
 * @property string $education
 * @property string $experience
 * @property integer $price
 * @property integer $has_diplom
 * @property string $updated_at
 * @property string $created_at
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
            [['user_id', 'price', 'has_diplom'], 'integer'],
            [['education', 'experience'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
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
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'secondname' => 'Отчество',
            'education' => 'Education',
            'experience' => 'Experience',
            'price' => 'Price',
            'has_diplom' => 'Has Diplom',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function relations() {
        return [
            'problems' => array(self::HAS_MANY, 'PsychologistProblems', 'psychologist_id')
        ];
    }

    public function initProfile($userId) {
        $this->user_id = $userId;
        $this->has_diplom = 0;
        $this->updated_at = time();
        return $this->save();
    }

}
