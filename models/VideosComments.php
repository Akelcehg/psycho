<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "videos_comments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $video_id
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 */
class VideosComments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'videos_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'video_id', 'text'], 'required'],
            [['user_id', 'video_id'], 'integer'],
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
            'video_id' => 'Video ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCommentOwner()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'user_id']);
    }

    public static function getVideosComments($articleId) {
        $query = VideosComments::find();
        $query->with('commentOwner');
        $query->andFilterWhere([
            'video_id' => $articleId,
        ]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ]
        ]);
        return $dataProvider;
    }
}
