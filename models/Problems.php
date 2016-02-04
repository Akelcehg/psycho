<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "problems".
 *
 * @property integer $id
 * @property string $name
 * @property string $updated_at
 * @property string $created_at
 */
class Problems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'problems';
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

    public function getPsychologistProblems($psychologistId) {
        $query = new Query();

        $query->select('problems.*,psychologist_problems.psychologist_id as active')
            ->from('problems')
            ->join('left join', 'psychologist_problems',
                'problems.id = psychologist_problems.problem_id and
                psychologist_problems.psychologist_id= ' . $psychologistId
            )->orderBy('problems.id');

        return $query->all();
    }

    public function getPsychologistProblemsList($psychologistId) {
        $query = new Query();

        $query->select('problems.*')
            ->from('problems')
            ->join('join', 'psychologist_problems',
                'problems.id = psychologist_problems.problem_id and
                psychologist_problems.psychologist_id= ' . $psychologistId
            )->orderBy('problems.id');

        return $query->all();
    }
}
