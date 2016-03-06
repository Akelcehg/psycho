<?php

namespace app\modules\account;

use app\models\Image;

class Module extends \yii\base\Module {

    public $controllerNamespace = 'app\modules\account\controllers';
    public $logo;

    public function init() {
        $this->layout = 'client_layout';
        $imagesModel = new Image();
        $this->logo = $imagesModel->getProfilePhoto();
        parent::init();

        // custom initialization code goes here
    }
}
