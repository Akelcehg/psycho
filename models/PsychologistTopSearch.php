<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PsychologistTop;

/**
 * PsychologistTopSearch represents the model behind the search form about `app\models\PsychologistTop`.
 */
class PsychologistTopSearch extends PsychologistTop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'psychologist_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
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
        $query = PsychologistTop::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->with('topProfile');

        $query->andFilterWhere([
            'id' => $this->id,
            'psychologist_id' => $this->psychologist_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
