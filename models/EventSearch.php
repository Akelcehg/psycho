<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Events;

/**
 * EventSearch represents the model behind the search form about `app\models\Events`.
 */
class EventSearch extends Events
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'price', 'organizer_id', 'is_user_organizer'], 'integer'],
            [['direction', 'name', 'about', 'date', 'duration', 'schedule', 'address', 'phone', 'site', 'map_coordinates', 'updated_at', 'created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = Events::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'type' => $this->type,
            'date' => $this->date,
            'price' => $this->price,
            'organizer_id' => $this->organizer_id,
            'is_user_organizer' => $this->is_user_organizer,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'schedule', $this->schedule])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'map_coordinates', $this->map_coordinates]);

        return $dataProvider;
    }
}
