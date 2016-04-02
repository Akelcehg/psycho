<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "discussion_categories".
 *
 * @property integer $id
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 */
class DiscussionCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discussion_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['text'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
