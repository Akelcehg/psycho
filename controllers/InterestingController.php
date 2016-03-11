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

    public function actionQuiz($id) {
        $quiz = new Quiz();
        $quiz->id = $id;
        if (Yii::$app->request->post()) {
            return $this->render('single_quiz', [
                'quizQuestion' => $quiz->getQuiz($id),
                'result' => $quiz->getQuizResult(array_sum(Yii::$app->request->post('answers')))
            ]);
        }

        return $this->render('single_quiz', [
            'quizQuestion' => $quiz->getQuiz($id)
        ]);
    }

}
