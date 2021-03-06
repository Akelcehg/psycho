<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Article;

/**
 * ArticleSearch represents the model behind the search form about `app\models\Article`.
 */
class ArticleSearch extends Article {
    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'psychologist_id', 'is_owner'], 'integer'],
            [['source', 'title', 'text', 'updated_at', 'created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params) {
        $query = Article::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'route' => '/article',
                //'pageSize' => 8,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'psychologist_id' => $this->psychologist_id,
            'is_owner' => $this->is_owner,
            'title' => $this->title,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);
        
        $query->andFilterWhere(['like', 'source', $this->source]);
            ///->andFilterWhere(['like', 'text', $this->text]);
        foreach (explode(" ",$this->text) as $qs) {
            $query->orWhere(['like', 'text', $qs]);
        }

        //$query->andOnCondition('Match(text) agaisnst("' . $this->text . '")');

        if (isset($params['article'])) {
            $query->join("join", "article_categories_bind", "article_categories_bind.article_id=article.id");
            $query->where("article_categories_bind.categories = " . $params['article']);
        }

        return $dataProvider;
    }
}
