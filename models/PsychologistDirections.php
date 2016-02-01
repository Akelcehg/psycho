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

    public function setNewPsychologistDirections($psychologistId, $directionsArray) {

        if (count($directionsArray) > 0) {
            $this->deletePsychologistDirections($psychologistId);

            return $this->insertNewData($psychologistId, $directionsArray);
        } else {
            return $this->deletePsychologistDirections($psychologistId);
        }
    }

    private function insertNewData($psychologistId, $directionsArray) {

        $command = Yii::$app->db->createCommand();
        $valuesArray = [];

        for ($i = 0; $i < count($directionsArray); $i++) {
            array_push($valuesArray, [$psychologistId, $directionsArray[$i]]);
        }

        $command->batchInsert('psychologist_directions',
            ['psychologist_id', 'direction_id'], $valuesArray);

        return $command->execute();
    }

    private function deletePsychologistDirections($psychologistId) {
        return PsychologistDirections::deleteAll('psychologist_id = ' . $psychologistId);
    }

}
