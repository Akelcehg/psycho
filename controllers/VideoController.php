<?php

namespace app\controllers;

use app\models\Videos;
use app\models\VideosCategories;
use app\models\VideosComments;
use app\models\VideosSearch;
use Yii;
use yii\web\NotFoundHttpException;

class VideoController extends \yii\web\Controller {

    public function actionIndex() {

        $searchModel = new VideosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 6;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'videosCategories' => VideosCategories::find()->all(),
            'popularVideos' => Videos::getPopularVideos(),
        ]);

    }

    public function actionView($title) {
        /*        $videoId = explode('-', $title);
                return $this->render('view', [
                    'model' => $this->findModel($videoId[1]),
                ]);*/


        $videoId = explode('-', $title);
        $videoModel = new VideosComments();

        $model = new VideosComments();
        $model->user_id = Yii::$app->user->id;
        $video = $this->findModel($videoId[1]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', [
                'model' => $video,
                'videosComments' => $videoModel,
                'videosCommentsList' => VideosComments::getVideosComments($videoId[1]),
                'popularVideos' => Videos::getPopularVideos(),
                //'author' => Profile::findOne(['user_id' => $video['psychologist_id']]),
            ]);
        }

        if ($videoId[1]) {
            $videoModel->video_id = $videoId[1];
            return $this->render('view', [
                'model' => $video,
                'videosComments' => $videoModel,
                'videosCommentsList' => VideosComments::getVideosComments($videoId[1]),
                'popularVideos' => Videos::getPopularVideos(),
                //'author' => Profile::findOne(['user_id' => $video['psychologist_id']]),
            ]);
        }

    }

    protected function findModel($id) {
        if (($model = Videos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}