<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "directions".
 *
 * @property integer $id
 * @property string $name
 * @property string $updated_at
 * @property string $created_at
 */
class Directions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'directions';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getPsychologistDirections($psychologistId) {
        $querry = new Query();
        /*$rawQuerry = Yii::$app->db;
        $rawQuerry = $rawQuerry->createCommand("select directions.*,psychologist_directions.psychologist_id
        from directions
        left join psychologist_directions
        on directions.id = psychologist_directions.direction_id and psychologist_directions.psychologist_id = 1");*/

        $querry->select('directions.*,psychologist_directions.psychologist_id as active')
            ->from('directions')
            ->join('left join', 'psychologist_directions',
                'directions.id = psychologist_directions.direction_id and
                psychologist_directions.psychologist_id= ' . $psychologistId
            )->orderBy('directions.id');

        return $querry->all();
    }
}
