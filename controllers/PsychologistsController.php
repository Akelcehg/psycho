<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleSearch;
use app\models\City;
use app\models\Directions;
use app\models\Image;
use app\models\Problems;
use app\models\Profile;
use app\models\ProfileSearch;
use app\models\PsychologistProblems;
use app\models\PsychologistTop;
use app\models\VideosSearch;
use Yii;

class PsychologistsController extends \yii\web\Controller {
    public function actionIndex() {
        $searchModel = new ProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $psychologistsTop = new PsychologistTop();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'psychologistsTopDataProvider' => $psychologistsTop->getTopPsychologists(),
            'psychologistProblems' => Problems::getAllProblems(),
            'psychologistDirections' => Directions::getAllDirections(),
            'allProblems' => Problems::find()->all(),
            'activePsychologists' => Profile::getMostActive()
        ]);
    }

    public function actionProfile($id) {
        $imagesModel = new Image();
        $psychologistDirections = new Directions();
        $psychologistProblems = new Problems();
        $psychologistId = $id;

        $videoSearchModel = new VideosSearch();
        $videoDataProvider = $videoSearchModel->search(Yii::$app->request->queryParams);

        $articleSearchModel = new ArticleSearch();
        $articleDataProvider = $articleSearchModel->search(Yii::$app->request->queryParams);

        $profile = Profile::findOne(['user_id' => $psychologistId]);
        return $this->render('profile', [
            'profile' => $profile,
            'psychologistArticles'=>Article::findAll(['psychologist_id'=>$id]),
            'city_name' => City::findOne(['city_id' => $profile['city_id']]),
            'logo' => $imagesModel->getUserMediumProfilePhoto($id),
            'psychologistDirections' => $psychologistDirections->getPsychologistDirectionsList($psychologistId),
            'psychologistProblems' => $psychologistProblems->getPsychologistProblemsList($psychologistId),
            'videoDataProvider' => $videoDataProvider,
            'articleDataProvider' => $articleDataProvider
        ]);
    }

}
