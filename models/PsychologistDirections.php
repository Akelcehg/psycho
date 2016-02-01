<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "psychologist_directions".
 *
 * @property integer $id
 * @property integer $psychologist_id
 * @property integer $direction_id
 * @property string $updated_at
 * @property string $created_at
 */
class PsychologistDirections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'psychologist_directions';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['psychologist_id', 'direction_id'], 'required'],
            [['psychologist_id', 'direction_id'], 'integer'],
            [['updated_at', 'created_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'psychologist_id' => 'Psychologist ID',
            'direction_id' => 'Direction ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

}
