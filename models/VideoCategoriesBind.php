<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video_categories_bind".
 *
 * @property integer $id
 * @property integer $video_id
 * @property integer $category_id
 * @property string $created_at
 * @property string $updated_at
 */
class VideoCategoriesBind extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video_categories_bind';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_id', 'category_id'], 'required'],
            [['video_id', 'category_id'], 'integer'],
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
            'video_id' => 'Video ID',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
