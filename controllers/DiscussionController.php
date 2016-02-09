<?php

namespace app\controllers;

class DiscussionController extends \yii\web\Controller
{
    public function actionIndex()
    {      
        return $this->render('index');
    }

    public function actionPost() {
        return $this->render('post');
    }

}
