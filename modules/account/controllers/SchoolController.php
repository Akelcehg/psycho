<?php

namespace app\modules\account\controllers;

use yii\web\Controller;

class SchoolController extends Controller
{
    public function actionIndex() {

        return $this->render('index');

    }
}
