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

    public function actionProfile($name) {

        var_dump($name);
        Yii::$app->end();

        $imagesModel = new Image();
        $psychologistDirections = new Directions();
        $psychologistProblems = new Problems();
        $psychologistId = $id;

        $videoSearchModel = new VideosSearch();
        $videoDataProvider = $videoSearchModel->search(Yii::$app->request->queryParams);
        $videoDataProvider->pagination->pageSize = 4;
        $videoDataProvider->pagination->pageParam = 'video-page';
        $videoDataProvider->pagination->route = 'psychologists/profile';


        $articleSearchModel = new ArticleSearch();
        $articleDataProvider = $articleSearchModel->search(Yii::$app->request->queryParams);
        $articleDataProvider->pagination->pageSize = 4;
        $articleDataProvider->pagination->pageParam = 'article-page';
        $articleDataProvider->pagination->route = 'psychologists/profile';

        $profile = Profile::findOne(['user_id' => $psychologistId]);
        return $this->render('profile', [
            'profile' => $profile,
            'psychologistArticles' => Article::findAll(['psychologist_id' => $id]),
            'city_name' => City::findOne(['city_id' => $profile['city_id']]),
            'logo' => $imagesModel->getUserMediumProfilePhoto($id),
            'psychologistDirections' => $psychologistDirections->getPsychologistDirectionsList($psychologistId),
            'psychologistProblems' => $psychologistProblems->getPsychologistProblemsList($psychologistId),
            'videoDataProvider' => $videoDataProvider,
            'articleDataProvider' => $articleDataProvider
        ]);
    }

}
