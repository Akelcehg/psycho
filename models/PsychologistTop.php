<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "psychologist_top".
 *
 * @property integer $id
 * @property integer $psychologist_id
 * @property string $updated_at
 * @property string $created_at
 */
class PsychologistTop extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'psychologist_top';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['psychologist_id'], 'required'],
            [['psychologist_id'], 'integer'],
            [['updated_at', 'created_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'psychologist_id' => 'Psychologist ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getTopPsychologists($amount = null) {
        $query = new Query();
        $query->select('profile.*')
            ->from('profile')
            ->join('join', 'psychologist_top',
                'psychologist_top.psychologist_id = profile.user_id')->orderBy('profile.id');

        if ($amount) {
            $query->limit($amount);
            return $query->all();
        }

        return $psychologistsTopDataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        //return $psychologistsTopDataProvider;
    }
}
