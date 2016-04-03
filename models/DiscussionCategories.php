<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\oci\QueryBuilder;
use yii\db\Query;

/**
 * This is the model class for table "discussion_categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class DiscussionCategories extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'discussion_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['text'], 'string', 'max' => 255]
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

    public static function getCategoriesWithPosts() {

        foreach (DiscussionCategories::find()->all() as $category) {
            $q[] = '(SELECT *,discussion_categories.id as dcId FROM discussion_categories
        LEFT OUTER JOIN discussion_posts on discussion_posts.discussion_category_id = discussion_categories.id
        where discussion_categories.id = ' . $category['id'] . ' ORDER BY discussion_posts.id DESC LIMIT 2 )';
        }
        if (!empty($q)) {

            return DiscussionCategories::_group_by(Yii::$app->db->createCommand(implode(' UNION ALL ', $q))->queryAll(),'name');

        }
        return [];
    }

    public static function getSingleCategoryWithPosts($categoryId){
        //$query = DiscussionCategories::find();
        $query = new Query();
        $query->select('discussion_posts.*,discussion_categories.*,discussion_posts.id as dpId');
        $query->from('discussion_categories');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                //'route' => '/article',
                'pageSize' => 8,
            ],

        ]);
        $query->andFilterWhere([
            //'discussion_posts.discussion_category_id' => $categoryId,
            'discussion_categories.id' => $categoryId,
        ]);
        $query->join('left join','discussion_posts','discussion_posts.discussion_category_id=discussion_categories.id');
        $query->orderBy('discussion_posts.id DESC');
        return $dataProvider;
    }

    public static function _group_by($array, $key) {
        $return = array();
        foreach($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }
}
