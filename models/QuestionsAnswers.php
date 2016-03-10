<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions_answers".
 *
 * @property integer $id
 * @property integer $question_id
 * @property string $text
 * @property integer $value
 * @property string $updated_at
 * @property string $created_at
 */
class QuestionsAnswers extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'questions_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['question_id', 'text', 'value'], 'required'],
            [['question_id', 'value'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['text'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'question_id' => 'Question ID',
            'text' => 'Text',
            'value' => 'Value',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function saveQuestionAnswers($questionId, $answers) {

        $query = 'INSERT INTO questions_answers (question_id,text,value) VALUES ';

        for ($i = 0; $i < count($answers); $i++) {
            $query .= '(' . $questionId . ',"' . $answers[$i]['text'] . '","' . $answers[$i]['value'] . '")';
            if ($i + 1 == count($answers)) $query .= ';';
            else $query .= ',';
        }

        return Yii::$app->db->createCommand($query)->execute();

    }
}
