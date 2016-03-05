<?php

namespace app\controllers;

class VideoController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionView($id) {
        return $this->render('view');
    }

}
