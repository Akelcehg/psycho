<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property integer $id
 * @property string $link
 * @property string $title
 * @property integer $user_id
 * @property string $updated_at
 * @property string $created_at
 */
class Videos extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'videos';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['link', 'title', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'title' => 'Title',
            'user_id' => 'User ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
