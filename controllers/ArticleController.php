<?php

namespace app\controllers;

use app\models\ArticleSearch;
use Yii;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex() {

        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

}
