<?php

namespace app\modules\account\controllers;

use app\models\UsersModules;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * VideosController implements the CRUD actions for Videos model.
 */
class SettingsController extends Controller {

    public function actionIndex() {

        return $this->render('index', [
            'userModules' => UsersModules::getUsersModulesList()
        ]);
    }

    public function actionUpdateSettings() {

        $settingsArray = $directionsArray = Yii::$app->request->post('settings');
        $currentPsychologistId = Yii::$app->user->id;
        $userModules = new UsersModules();
        if ($userModules->setNewUserSettings($currentPsychologistId, $settingsArray))
            return $this->redirect('index');
        else throw new NotFoundHttpException('The requested page does not exist.');
    }

}
