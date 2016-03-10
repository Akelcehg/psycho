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
        //$query->select('quiz.*,quiz_questions.*,questions_answers.*')->from('quiz');
        $query->select('quiz_questions.id as qid,quiz_questions.*,questions_answers.*')->from('quiz_questions');
        //$query->join('join', 'quiz_questions', 'quiz.id=quiz_questions.quiz_id');
        $query->join('join', 'questions_answers', 'quiz_questions.id=question_id');
        //$query->join('join', 'quiz_results', 'quiz.id=quiz_id');
        $query->where('quiz_questions.quiz_id=' . $id);
        //$query->addGroupBy('quiz_questions.id');
        //var_dump($query->all());
        var_dump($this->_group_by($query->all(),'qid'));
        return ($this->_group_by($query->all(),'qid'));
        //return $query->all();
        /*$query = new Query();
        $query->select('profile.*')
            ->from('profile')
            ->join('join', 'psychologist_top',
                'psychologist_top.psychologist_id = profile.user_id')->orderBy('profile.id');

        if ($amount) {
            $query->limit($amount);
            return $query->all();
        }

        return $psychologistsTopDataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);*/


        //return true;
    }

    function _group_by($array, $key) {
        $return = array();
        foreach($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }
}
