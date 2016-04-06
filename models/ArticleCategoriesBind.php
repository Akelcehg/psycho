<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_categories_bind".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $categories
 * @property string $created_at
 * @property string $updated_at
 */
class ArticleCategoriesBind extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_categories_bind';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'categories'], 'required'],
            [['article_id', 'categories'], 'integer'],
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
            'article_id' => 'Article ID',
            'categories' => 'Categories',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
