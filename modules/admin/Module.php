<?php

namespace app\modules\admin;

use app\models\User;
use Yii;
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main.php';

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['logout', 'signup', 'about'],
                'rules' => [
                    [
                        //'actions' => ['about'],
                        //'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserAdmin();
                        }
                    ],
                ],
            ],
        ];
    }

    public function init() {
        $this->viewPath = Yii::$app->basePath . '/modules/admin/views/';
        parent::init();

        // custom initialization code goes here
    }
}
