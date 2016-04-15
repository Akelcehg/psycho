<?php

namespace app\controllers;

use app\models\Events;
use app\models\EventSearch;
use app\models\Profile;
use Yii;
use yii\web\NotFoundHttpException;

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

        $eventId = explode('-', $title)[1];
        //$training = Events::find(['id' => $eventId[1]])->one();
        $training = $this->findModel($eventId);
        return $this->render('training', [
            'training' => $training,
            'organizer' => Profile::findOne(['user_id'=>$training['organizer_id']]),
            'eventsList' => Events::find()->limit('4')->all()
        ]);

    }

    protected function findModel($id) {
        if (($model = Events::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}