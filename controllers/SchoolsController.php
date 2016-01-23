<?php

namespace app\controllers;

class SchoolsController extends \yii\web\Controller
{
    public function actionIndex() {
        return $this->render('index');
    }

}
