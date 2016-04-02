<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_comments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $article_id
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 */
class ArticleComments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'article_id', 'text'], 'required'],
            [['user_id', 'article_id'], 'integer'],
            [['text'], 'string'],
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
            'user_id' => 'User ID',
            'article_id' => 'Article ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
