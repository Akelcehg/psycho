<?php

namespace app\modules\account\controllers;

use app\models\Directions;
use app\models\Image;
use app\models\Problems;
use app\models\PsychologistDirections;
use app\models\PsychologistProblems;
use yii\web\Controller;
use app\models\Profile;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class ProfileController extends Controller
{

    public function actionIndex() {

        $currentPsychologistId = Yii::$app->user->id;

        $profile = $this->findModel($currentPsychologistId);

 /*       $directions = new Directions();
        $problems = new Problems();*/

        $imagesModel = new Image();

        if ($profile->load(Yii::$app->request->post())) {

            if ($profile->save()) {
                return $this->render('index', [
                    'profileModel' => $profile,
                    'message' => 'Профиль успешно обновлён',
                    'imagesModel' => $imagesModel,
                    'logo' => $imagesModel->getProfilePhoto()
                ]);
            }
        } else {
            return $this->render('index', [
                'profileModel' => $profile,
                'imagesModel' => $imagesModel,
            ]);
        }
    }

    public function actionUpdatePhoto() {
        $imagesModel = new Image();
        $imagesModel->image_file = UploadedFile::getInstance($imagesModel, 'image_file');
        if ($imagesModel->upload()) return $this->redirect('index');
        else throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findModel($id) {
        if (($model = Profile::findOne(['user_id' => $id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
