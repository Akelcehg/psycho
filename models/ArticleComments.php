<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

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
class ArticleComments extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'article_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
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
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'article_id' => 'Article ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCommentOwner()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'user_id']);
    }

    public static function getArticleComments($articleId) {
        $query = ArticleComments::find();
        //$query->addSelect('article_comments.*,profile.firstname,profile.lastname');
        $query->with('commentOwner');
        //$query->innerJoin('profile', 'profile.user_id=article_comments.user_id');
        $query->andFilterWhere([
            'article_id' => $articleId,
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
