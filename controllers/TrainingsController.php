<?php

namespace app\controllers;

use app\models\EventSearch;
use Yii;

class TrainingsController extends \yii\web\Controller
{
    public function actionIndex() {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //var_dump($dataProvider->count);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'itemsOnPage'=>$dataProvider->count
        ]);
    }

}