<?php

namespace app\controllers;

use app\models\Events;
use app\models\EventSearch;
use Yii;
use yii\base\Event;

class TrainingsController extends \yii\web\Controller {
    public function actionIndex() {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($title) {

        $eventId = explode('-', $title);
        $training = Events::find(['id' => $eventId]);

        return $this->render('training', [
            'training' => $training
        ]);

    }

}