<?php

namespace app\modules\account\controllers;

use app\models\Diplomas;
use app\models\Directions;
use app\models\Image;
use app\models\Problems;
use app\models\Profile;
use app\models\PsychologistDirections;
use app\models\PsychologistProblems;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class PsychoProfileController extends Controller {
    public function actionIndex() {

        $currentPsychologistId = Yii::$app->user->id;

        $profile = $this->findModel($currentPsychologistId);
        $directions = new Directions();
        $problems = new Problems();
        $sentDiplomaRequest = Diplomas::findOne(['psychologist_id' => $currentPsychologistId]);

        if ($profile->load(Yii::$app->request->post())) {

            if ($profile->save()) {
                return $this->render('index', [
                    'profileModel' => $profile,
                    'message' => 'Профиль успешно обновлён',
                    'psychologistDirections' => $directions->getPsychologistDirections($currentPsychologistId),
                    'psychologistProblems' => $problems->getPsychologistProblems($currentPsychologistId),
                    'sentDiplomaRequest' => $sentDiplomaRequest
                ]);
            }
        } else {

            //$this->logo = $imagesModel->getProfilePhoto();
            return $this->render('index', [
                'profileModel' => $profile,
                'psychologistDirections' => $directions->getPsychologistDirections($currentPsychologistId),
                'psychologistProblems' => $problems->getPsychologistProblems($currentPsychologistId),
                'sentDiplomaRequest' => $sentDiplomaRequest
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

    public function actionUpdateDiploma() {
        $imagesModel = new Image();

        if ($imagesModel->image_file = UploadedFile::getInstance($imagesModel, 'image_file')) {
            $psychologistId = Yii::$app->user->id;

            if (Diplomas::findOne(['psychologist_id' => $psychologistId]) === null) {
                $diploma = new Diplomas();
                $diploma->psychologist_id = $psychologistId;
                $diploma->is_approved = 0;
                $diploma->save();
            }

            if ($imagesModel->saveDiploma($psychologistId)) return $this->redirect('index');
            else throw new NotFoundHttpException('The requested page does not exist.');
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findModel($id) {
        if (($model = Profile::findOne(['user_id' => $id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
