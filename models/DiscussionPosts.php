<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "discussion_posts".
 *
 * @property integer $id
 * @property integer $discussion_category_id
 * @property integer $user_id
 * @property string $text
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 */
class DiscussionPosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discussion_posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discussion_category_id', 'user_id', 'text','title'], 'required'],
            [['discussion_category_id', 'user_id'], 'integer'],
            [['text','title'], 'string'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'discussion_category_id' => 'Discussion Category ID',
            'user_id' => 'User ID',
            'text' => 'Text',
            'title' => 'Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
