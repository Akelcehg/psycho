<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "psychologist_problems".
 *
 * @property integer $id
 * @property integer $psychologist_id
 * @property integer $problem_id
 * @property string $updated_at
 * @property string $created_at
 */
class PsychologistProblems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'psychologist_problems';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['psychologist_id', 'problem_id'], 'required'],
            [['psychologist_id', 'problem_id'], 'integer'],
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
            'problem_id' => 'Problem ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function setNewPsychologistProblems($psychologistId, $problemsArray) {

        if (count($problemsArray) > 0) {
            $this->deletePsychologistProblems($psychologistId);

            return $this->insertNewData($psychologistId, $problemsArray);
        } else {
            return $this->deletePsychologistProblems($psychologistId);
        }
    }

    private function insertNewData($psychologistId, $problemsArray) {

        $command = Yii::$app->db->createCommand();
        $valuesArray = [];

        for ($i = 0; $i < count($problemsArray); $i++) {
            array_push($valuesArray, [$psychologistId, $problemsArray[$i]]);
        }

        $command->batchInsert('psychologist_problems',
            ['psychologist_id', 'problem_id'], $valuesArray);

        return $command->execute();
    }

    private function deletePsychologistProblems($psychologistId) {
        return PsychologistProblems::deleteAll('psychologist_id = ' . $psychologistId);
    }

}
