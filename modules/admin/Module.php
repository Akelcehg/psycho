<?php

namespace app\modules\admin;

use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main.php';


    public function init() {
        $this->viewPath = Yii::$app->basePath . '/modules/admin/views/';
        parent::init();

        // custom initialization code goes here
    }
}
