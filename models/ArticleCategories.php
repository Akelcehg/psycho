<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "article_categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class ArticleCategories extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'article_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'unique'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function saveArticleCategories($articleId, $categories) {

        if (count($categories) > 0) {
            $this->deleteArticleCategories($articleId);
            return $this->insertNewData($articleId, $categories);
        } else {
            return $this->deleteArticleCategories($articleId);
        }
    }


    private function insertNewData($articleId, $categoriesArray) {
        $command = Yii::$app->db->createCommand();
        $valuesArray = [];

        for ($i = 0; $i < count($categoriesArray); $i++) {
            array_push($valuesArray, [$articleId, $categoriesArray[$i]]);
        }

        $command->batchInsert('article_categories_bind',
            ['article_id', 'categories'], $valuesArray);

        return $command->execute();
    }

    private function deleteArticleCategories($articleId) {
        if (ArticleCategoriesBind::findOne('article_id = ' . $articleId)) {
            return ArticleCategoriesBind::deleteAll('article_id = ' . $articleId);
        }
        return true;
    }

    /*    public static function getArticleCategories($articleId) {
            $query = new Query();

            $query->select('article_categories.*')
                ->from('article_categories')
                ->join('left outer join', 'article_categories_bind',
                    'article_categories.id = article_categories_bind.categories and
                    article_categories_bind.article_id= ' . $articleId
                )->orderBy('article_categories.id');

            return $query->all();
        }*/

    public static function getArticleCategories($articleId) {
        $query = new Query();

        $query->select('article_categories.*,article_categories_bind.article_id as active')
            ->from('article_categories')
            ->join('left outer join', 'article_categories_bind',
                'article_categories.id = article_categories_bind.categories and
                article_categories_bind.article_id= ' . $articleId
            )->orderBy('article_categories.id');

        return $query->all();
    }
}
