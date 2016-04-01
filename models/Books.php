<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property integer $is_published
 * @property string $created_at
 * @property string $updated_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'link'], 'required'],
            [['is_published'], 'integer'],
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
            'is_published' => 'Is Published',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
