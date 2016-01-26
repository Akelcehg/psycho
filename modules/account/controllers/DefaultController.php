<?php

namespace app\modules\account\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionProfile() {

        return $this->render('profile');

    }

    public function actionSchools() {

        return $this->render('schools');

    }
}
