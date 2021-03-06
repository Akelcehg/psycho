<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "videos".
 *
 * @property integer $id
 * @property string $link
 * @property string $img_link
 * @property string $title
 * @property string $description
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
            [['link', 'description', 'img_link', 'title', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['link', 'img_link', 'description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'link' => 'Ссылка на видео',
            'img_link' => 'Img Link',
            'title' => 'Заголовок видео',
            'description' => 'Описание видео',
            'user_id' => 'User ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getEmbedLink($link) {
        if (strpos($link, 'youtube') !== false) {
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

    public static function getPopularVideos() {
        $query = new Query();
        $query->select('videos.*,(SELECT  COUNT(*) FROM videos_comments WHERE videos.id = videos_comments.video_id) as commentsCount');
        $query->from('videos');
        $query->orderBy('commentsCount DESC');
        $query->limit('4');
        return $query->all();
    }
}
