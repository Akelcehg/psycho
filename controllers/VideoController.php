<?php

namespace app\controllers;

use app\models\Videos;
use app\models\VideosCategories;
use app\models\VideosSearch;
use Yii;
use yii\web\NotFoundHttpException;

class VideoController extends \yii\web\Controller {

    public function actionIndex() {

        $searchModel = new VideosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'videosCategories' => VideosCategories::find()->all(),
        ]);

    }

    public function actionView($title) {
        $articleId = explode('-', $title);
        return $this->render('view', [
            'model' => $this->findModel($articleId[1]),
        ]);
    }

    protected function findModel($id) {
        if (($model = Videos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}