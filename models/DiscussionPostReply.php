<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "discussion_post_reply".
 *
 * @property integer $id
 * @property integer $discussion_post_id
 * @property integer $user_id
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 */
class DiscussionPostReply extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'discussion_post_reply';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['discussion_post_id', 'user_id', 'text'], 'required'],
            [['discussion_post_id', 'user_id'], 'integer'],
            [['text'], 'string'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'discussion_post_id' => 'Discussion Post ID',
            'user_id' => 'User ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getPostReplies($postId) {
        $query = DiscussionPostReply::find();
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
        $query->andFilterWhere([
            'discussion_post_id' => $postId,
        ]);

        return $dataProvider;
    }
}
