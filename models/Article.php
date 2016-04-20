<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $psychologist_id
 * @property integer $is_owner
 * @property string $source
 * @property string $title
 * @property string $text
 * @property string $updated_at
 * @property string $created_at
 */
class Article extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['psychologist_id', 'is_owner', 'text', 'title'], 'required'],
            [['psychologist_id', 'is_owner'], 'integer'],
            [['text', 'title'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['source'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'psychologist_id' => 'Psychologist ID',
            'is_owner' => 'Is Owner',
            'source' => 'Source',
            'text' => 'Текст статьи',
            'title' => 'Заголовок статьи',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getArticleAuthor()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'psychologist_id']);
    }

    public function catch_that_image($text) {
//        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $text, $matches);
        //$first_img = $matches[1][0];
        $first_img = $matches[1];
        //var_dump($matches[1]);

        if (empty($first_img)) {
            //var_dump($first_img);
            $first_img = null;
        } else $first_img = $matches[1][0];
        return $first_img;
    }

    public static function getPopularPosts() {
        $query = new Query();
        $query->select('article.*,(SELECT  COUNT(*) FROM article_comments WHERE   article.id = article_comments.article_id) as commentsCount');
        $query->from('article');
        $query->orderBy('commentsCount DESC');
        $query->limit('4');
        return $query->all();
    }
}
