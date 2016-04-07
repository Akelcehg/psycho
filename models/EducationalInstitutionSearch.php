<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EducationalInstitution;

/**
 * EducationalInstitutionSearch represents the model behind the search form about `app\models\EducationalInstitution`.
 */
class EducationalInstitutionSearch extends EducationalInstitution {
    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'city_id', 'year'], 'integer'],
            [['name', 'description', 'status', 'accreditation', 'document_end', 'qualification_levels', 'address', 'phone', 'site', 'map_coordinates', 'training_program', 'required_documents', 'updated_at', 'created_at'], 'safe'],
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
        $query = EducationalInstitution::find();

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
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'accreditation', $this->accreditation])
            ->andFilterWhere(['like', 'document_end', $this->document_end])
            ->andFilterWhere(['like', 'qualification_levels', $this->qualification_levels])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'map_coordinates', $this->map_coordinates])
            ->andFilterWhere(['like', 'training_program', $this->training_program])
            ->andFilterWhere(['like', 'required_documents', $this->required_documents]);

        return $dataProvider;
    }
}
