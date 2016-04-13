<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modules".
 *
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property string $created_at
 * @property string $updated_at
 */
class Modules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'link'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'link' => 'Link',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
