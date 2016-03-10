<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quiz_results".
 *
 * @property integer $id
 * @property integer $quiz_id
 * @property integer $value_from
 * @property integer $value_to
 * @property string $text
 * @property string $updated_at
 * @property string $created_at
 */
class QuizResults extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'quiz_results';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['quiz_id', 'value_from', 'value_to', 'text'], 'required'],
            [['quiz_id', 'value_from', 'value_to'], 'integer'],
            [['text'], 'string'],
            [['updated_at', 'created_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'quiz_id' => 'Quiz ID',
            'value_from' => 'Value From',
            'value_to' => 'Value To',
            'text' => 'Text',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function saveQuizResults($quizId, $results) {

        /*$query = 'INSERT INTO questions_answers (question_id,text,value) VALUES ';

        for ($i = 0; $i < count($answers); $i++) {
            $query .= '(' . $questionId . ',"' . $answers[$i]['text'] . '","' . $answers[$i]['value'] . '")';
            if ($i + 1 == count($answers)) $query .= ';';
            else $query .= ',';
        }

        return Yii::$app->db->createCommand($query)->execute();*/

        $query = 'INSERT INTO quiz_results (quiz_id,value_from,value_to,text) VALUES ';

        for ($i = 0; $i < count($results); $i++) {
            $query .= '(' . $quizId . ',"' . $results[$i]['from'] . '"
            ,"' . $results[$i]['to'] . '",
            "' . $results[$i]['text'] . '")';
            if ($i + 1 == count($results)) $query .= ';';
            else $query .= ',';
        }
        return Yii::$app->db->createCommand($query)->execute();
    }
}
