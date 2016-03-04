<?php

namespace app\controllers;

class InterestingController extends \yii\web\Controller {
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionQuiz() {
        return $this->render('single_quiz');
    }

}
