<?php

namespace app\controllers;

use app\models\Directions;
use app\models\Image;
use app\models\Problems;
use app\models\Profile;
use app\models\ProfileSearch;
use app\models\PsychologistTop;
use Yii;
use yii\data\ActiveDataProvider;

class PsychologistsController extends \yii\web\Controller
{
    public function actionIndex() {

        $searchModel = new ProfileSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $psychologistsTop = new PsychologistTop();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'psychologistsTopDataProvider' => $psychologistsTop->getTopPsychologists()
        ]);
    }

    public function actionProfile($id) {
        $imagesModel = new Image();
        $psychologistDirections = new Directions();
        $psychologistproblems = new Problems();
        $psychologistId = $id;

        return $this->render('profile', [
            'profile' => Profile::findOne(['user_id' => $psychologistId]),
            'logo' => $imagesModel->getProfilePhoto(),
            'psychologistDirections' => $psychologistDirections->getPsychologistDirectionsList($psychologistId),
            'psychologistProblems' => $psychologistproblems->getPsychologistProblemsList($psychologistId)
        ]);
    }

}
