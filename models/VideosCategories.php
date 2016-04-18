<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "video_categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class VideosCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function saveVideosCategories($videoId,$categories){
        if (count($categories) > 0) {
            $this->deleteVideosCategories($videoId);
            return $this->insertNewData($videoId, $categories);
        } else {
            return $this->deleteVideosCategories($videoId);
        }
    }



    private function insertNewData($videoId, $categoriesArray){
        $command = Yii::$app->db->createCommand();
        $valuesArray = [];

        for ($i = 0; $i < count($categoriesArray); $i++) {
            array_push($valuesArray, [$videoId, $categoriesArray[$i]]);
        }

        $command->batchInsert('video_categories_bind',
            ['video_id', 'category_id'], $valuesArray);

        return $command->execute();
    }

    private function deleteVideosCategories($videoId) {
        if (VideoCategoriesBind::findOne('video_id = ' . $videoId)) {
            return VideoCategoriesBind::deleteAll('video_id = ' . $videoId);
        }
        return true;
    }

    public static function getVideosCategories($videoId) {
        $query = new Query();

        $query->select('video_categories.*,video_categories_bind.video_id as active')
            ->from('video_categories')
            ->join('left outer join', 'video_categories_bind',
                'video_categories.id = video_categories_bind.category_id and
                video_categories_bind.video_id= ' . $videoId
            )->orderBy('video_categories.id');

        return $query->all();
    }
}
