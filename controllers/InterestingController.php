<?php

namespace app\controllers;

use app\models\Quiz;
use app\models\QuizSearch;
use Yii;

class InterestingController extends \yii\web\Controller {
    public function actionIndex() {

        $searchModel = new QuizSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionQuiz() {
        return $this->render('single_quiz');
    }

}
