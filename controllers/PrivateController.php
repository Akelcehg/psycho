<?php

namespace app\controllers;

class PrivateController extends \yii\web\Controller
{

    public function actionProfile() {

        return $this->render('profile');

    }

}
