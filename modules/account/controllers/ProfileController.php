<?php

namespace app\modules\account\controllers;

use app\models\Directions;
use app\models\PsychologistDirections;
use yii\web\Controller;
use app\models\Profile;
use Yii;
use yii\web\NotFoundHttpException;

class ProfileController extends Controller
{

    public function actionIndex() {

        $profile = $this->findModel(Yii::$app->user->id);
        $directions = new Directions();
        $currentPsychologistId = Yii::$app->user->id;

        if ($profile->load(Yii::$app->request->post())) {

            if ($profile->save()) {
                return $this->render('index', [
                    'profileModel' => $profile,
                    'message' => 'Профиль успешно обновлён',
                    'psychologistDirections' => $directions->getPsychologistDirections($currentPsychologistId)
                ]);
            }
        } else {

            return $this->render('index', [
                'profileModel' => $profile,
                'psychologistDirections' => $directions->getPsychologistDirections($currentPsychologistId)
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
        return "dsa";
    }

    protected function findModel($id) {
        if (($model = Profile::find(['user_id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
