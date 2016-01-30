<?php

namespace app\modules\account\controllers;

use yii\web\Controller;
use app\models\Profile;
use Yii;

class ProfileController extends Controller {

    public function actionIndex() {
        $profile = $this->findModel(Yii::$app->user->id);

        if ($profile->load(Yii::$app->request->post())) {
            
            //$profile['education'] = nl2br($profile['education']);

            
            if ($profile->save()) {
                return $this->render('index', [
                            'profileModel' => $profile,
                            'message' => 'Обновлено'
                ]);
            }
        } else {
            return $this->render('index', [
                        'profileModel' => $profile
            ]);
        }
    }

    protected function findModel($id) {
        if (($model = Profile::find(['user_id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
