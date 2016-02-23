<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "educational_institution_top".
 *
 * @property integer $id
 * @property integer $educational_institution_id
 * @property string $updated_at
 * @property string $created_at
 */
class EducationalInstitutionTop extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'educational_institution_top';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['educational_institution_id'], 'required'],
            [['educational_institution_id'], 'integer'],
            [['updated_at', 'created_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'educational_institution_id' => 'Educational Institution ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getTop() {

        $query = EducationalInstitutionTop::find();

        return $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
    }

}
