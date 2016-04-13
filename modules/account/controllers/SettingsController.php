<?php

namespace app\modules\account\controllers;

use app\models\VideosCategories;
use Yii;
use app\models\Videos;
use app\models\VideosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VideosController implements the CRUD actions for Videos model.
 */
class SettingsController extends Controller {

    public function actionIndex() {

        return $this->render('index',[

        ]);
    }

}
