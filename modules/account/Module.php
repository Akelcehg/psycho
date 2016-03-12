<?php

namespace app\modules\account;

use app\models\Image;
use app\models\Profile;
use app\modules\account\controllers\ProfileController;
use Yii;
use yii\web\NotFoundHttpException;

class Module extends \yii\base\Module {

    public $controllerNamespace = 'app\modules\account\controllers';
    public $logo;
    public $first_name;
    public $last_name;

    public function init() {
        $this->layout = 'client_layout';
        $imagesModel = new Image();
        $this->logo = $imagesModel->getProfilePhoto();
        $profile = $this->findModel(Yii::$app->user->id);

        $this->first_name = $profile->firstname;
        $this->last_name = $profile->lastname;
        parent::init();

        // custom initialization code goes here
    }

    protected function findModel($id) {
        if (($model = Profile::find(['user_id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
