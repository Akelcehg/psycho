<?php

namespace app\modules\account\controllers;

use app\models\Directions;
use app\models\Problems;
use app\models\PsychologistDirections;
use app\models\PsychologistProblems;
use yii\web\Controller;
use app\models\Profile;
use Yii;
use yii\web\NotFoundHttpException;

class ProfileController extends Controller
{

    public function actionIndex() {

        $profile = $this->findModel(Yii::$app->user->id);

        $directions = new Directions();
        $problems = new Problems();

        $currentPsychologistId = Yii::$app->user->id;

        if ($profile->load(Yii::$app->request->post())) {

            if ($profile->save()) {
                return $this->render('index', [
                    'profileModel' => $profile,
                    'message' => 'Профиль успешно обновлён',
                    'psychologistDirections' => $directions->getPsychologistDirections($currentPsychologistId),
                    'psychologistProblems' => $problems->getPsychologistProblems($currentPsychologistId)
                ]);
            }
        } else {

            return $this->render('index', [
                'profileModel' => $profile,
                'psychologistDirections' => $directions->getPsychologistDirections($currentPsychologistId),
                'psychologistProblems' => $problems->getPsychologistProblems($currentPsychologistId)
            ]);
        }
    }

    public function actionUpdateDirections() {

        $directionsArray = Yii::$app->request->post('directions');

        $currentPsychologistId = Yii::$app->user->id;

        $psychologistDirections = new PsychologistDirections();
        if ($psychologistDirections->setNewPsychologistDirections($currentPsychologistId, $directionsArray))
            return $this->redirect('index');
        else throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUpdateProblems() {
        $problemsArray = Yii::$app->request->post('problems');

        $currentPsychologistId = Yii::$app->user->id;

        $psychologistProblems = new PsychologistProblems();
        if ($psychologistProblems->setNewPsychologistProblems($currentPsychologistId, $problemsArray))
            return $this->redirect('index');
        else throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findModel($id) {
        if (($model = Profile::find(['user_id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
