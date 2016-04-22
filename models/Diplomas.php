<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diplomas".
 *
 * @property integer $id
 * @property integer $psychologist_id
 * @property integer $is_approved
 * @property string $created_at
 * @property string $updated_at
 */
class Diplomas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diplomas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['psychologist_id', 'is_approved'], 'required'],
            [['psychologist_id', 'is_approved'], 'integer'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'psychologist_id' => 'Psychologist ID',
            'is_approved' => 'Is Approved',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getDiplomaOwner()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'psychologist_id']);
    }
}
