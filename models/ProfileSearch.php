<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `app\models\Profile`.
 */
class ProfileSearch extends Profile {

    public $directions;
    public $problems;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'user_id', 'city_id', 'price', 'has_diplom'], 'integer'],
            [['firstname', 'directions', 'problems', 'lastname', 'gender', 'secondname', 'education', 'experience', 'updated_at', 'created_at'], 'safe'],
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
        $query = Profile::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            //$query->where('0=1');
            return $dataProvider;
        }

        if ($this['directions'] != '') {
            $query->join("inner join", "psychologist_directions", "psychologist_directions.psychologist_id=profile.user_id");
            $query->andOnCondition("psychologist_directions.direction_id in ('" . $this['directions'] . "')");
        }

        if ($this['problems'] != '') {
            $query->join("inner join", "psychologist_problems", "psychologist_problems.psychologist_id=profile.user_id");
            $query->andOnCondition("psychologist_problems.problem_id in ('" . $this['problems'] . "')");
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'price' => $this->price,
            'has_diplom' => $this->has_diplom,
            'city_id' => $this->city_id,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'secondname', $this->secondname])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['=', 'gender', $this->gender]);

        return $dataProvider;
    }
}
