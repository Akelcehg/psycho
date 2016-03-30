<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_categories".
 *
 * @property integer $id
 * @property string $name
 * @property integer $updated_at
 * @property string $created_at
 */
class ArticleCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'updated_at'], 'required'],
            [['updated_at'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
