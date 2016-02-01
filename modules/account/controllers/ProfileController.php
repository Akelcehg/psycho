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

        if ($profile->load(Yii::$app->request->post())) {

            if ($profile->save()) {
                return $this->render('index', [
                    'profileModel' => $profile,
                    'message' => 'Профиль успешно обновлён'
                ]);
            }
        } else {
            $d = new Directions();
            var_dump($d->getPsychologistDirections(Yii::$app->user->id));
            return $this->render('index', [
                'profileModel' => $profile,
            ]);
        }
    }

    public function actionUpdateDirections() {
        return "dsa";
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
