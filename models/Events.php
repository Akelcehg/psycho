<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $type
 * @property string $direction
 * @property string $name
 * @property string $about
 * @property string $date
 * @property string $duration
 * @property string $schedule
 * @property integer $price
 * @property string $address
 * @property string $phone
 * @property string $site
 * @property string $map_coordinates
 * @property integer $organizer_id
 * @property integer $city_id
 * @property integer $is_user_organizer
 * @property string $updated_at
 * @property string $created_at
 */
class Events extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['type', 'direction', 'city_id', 'name', 'about', 'date', 'duration', 'schedule', 'price', 'address', 'phone', 'map_coordinates', 'organizer_id', 'is_user_organizer'], 'required'],
            [['type', 'price', 'city_id', 'organizer_id', 'is_user_organizer'], 'integer'],
            [['about', 'schedule'], 'string'],
            [['date', 'updated_at', 'created_at'], 'safe'],
            [['direction', 'name', 'duration', 'address', 'phone', 'site', 'map_coordinates'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'direction' => 'Direction',
            'name' => 'Name',
            'about' => 'About',
            'date' => 'Date',
            'duration' => 'Duration',
            'schedule' => 'Schedule',
            'price' => 'Price',
            'address' => 'Address',
            'phone' => 'Phone',
            'site' => 'Site',
            'map_coordinates' => 'Map Coordinates',
            'organizer_id' => 'Organizer ID',
            'is_user_organizer' => 'Is User Organizer',
            'city_id' => 'City Id',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getEvents($amount = null) {
        $query = Events::find();
        if ($amount) {
            $query->limit($amount);
        }
        return $query->all();
    }
}
