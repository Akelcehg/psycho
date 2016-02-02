<?php

namespace app\controllers;

use app\models\ProfileSearch;
use Yii;

class PsychologistsController extends \yii\web\Controller
{
    public function actionIndex() {

        $searchModel = new ProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
