<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "quiz".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 */
class Quiz extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'quiz';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
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
            'description' => 'Description',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getQuiz($id) {
        $query = new Query();

        $query->select('quiz_questions.id as qid,quiz_questions.*,questions_answers.*')->from('quiz_questions');

        $query->join('join', 'questions_answers', 'quiz_questions.id=question_id');

        $query->where('quiz_questions.quiz_id=' . $id);

        return ($this->_group_by($query->all(), 'qid'));
        
    }

    function _group_by($array, $key) {
        $return = array();
        foreach ($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }
}
