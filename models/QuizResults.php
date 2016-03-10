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
class QuizResults extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quiz_results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
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
    public function attributeLabels()
    {
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
}
