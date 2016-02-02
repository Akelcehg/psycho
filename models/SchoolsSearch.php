<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Schools;

/**
 * SchoolsSearch represents the model behind the search form about `app\models\Schools`.
 */
class SchoolsSearch extends Schools
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'city_id', 'year', 'status', 'accreditation', 'document_end'], 'integer'],
            [['name', 'description', 'qualification_levels', 'address', 'phone', 'site', 'map_coordinates', 'school_directions', 'faculties', 'required_documents', 'updated_at', 'created_at'], 'safe'],
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
        $query = Schools::find();

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
            'city_id' => $this->city_id,
            'year' => $this->year,
            'status' => $this->status,
            'accreditation' => $this->accreditation,
            'document_end' => $this->document_end,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'qualification_levels', $this->qualification_levels])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'map_coordinates', $this->map_coordinates])
            ->andFilterWhere(['like', 'school_directions', $this->school_directions])
            ->andFilterWhere(['like', 'faculties', $this->faculties])
            ->andFilterWhere(['like', 'required_documents', $this->required_documents]);

        return $dataProvider;
    }
}
