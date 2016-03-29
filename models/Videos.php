<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property integer $id
 * @property string $link
 * @property string $img_link
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
            [['link', 'img_link', 'title', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['link', 'img_link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'img_link' => 'Img Link',
            'title' => 'Title',
            'user_id' => 'User ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getEmbedLink($link) {
        if (strpos($link, 'youtube') !== false) {
            //https://www.youtube.com/watch?v=Y9ebAMzt-oA
            return str_replace('watch?v=', 'embed/', $link) . '?autoplay=0';
        }
    }

    public function getVideoImage($link) {
        $image_link = '';

        if (strpos($link, 'youtube') !== false) {
            $videoId = explode('watch?v=', $link)[1];
            return 'http://img.youtube.com/vi/' . $videoId . '/mqdefault.jpg';
        }

        return $image_link;
    }
}
