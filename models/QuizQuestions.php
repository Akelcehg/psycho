<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quiz_questions".
 *
 * @property integer $id
 * @property integer $quiz_id
 * @property string $name
 * @property string $updated_at
 * @property string $created_at
 */
class QuizQuestions extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'quiz_questions';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['quiz_id', 'name'], 'required'],
            [['quiz_id'], 'integer'],
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
            'quiz_id' => 'Quiz ID',
            'name' => 'Name',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getQuizAnswers() {
        return $this->hasMany(QuestionsAnswers::className(), ['question_id' => 'id']);
    }

    public function saveQuizQuestions($questions, $quiz_id) {

        $questionAnswers = new QuestionsAnswers();

        for ($i = 0; $i < count($questions); $i++) {
            $quizQuestion = new QuizQuestions();
            $quizQuestion->name = $questions[$i]['name'];
            $quizQuestion->quiz_id = $quiz_id;

            if (!$quizQuestion->save()) {
                return false;

            } else {
                if (!$questionAnswers->saveQuestionAnswers($quizQuestion->id, $questions[$i]['answers'])) {
                    return false;
                }
            }

        }

        return true;
    }
}
