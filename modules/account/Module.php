<?php

namespace app\modules\account;

class Module extends \yii\base\Module {

    public $controllerNamespace = 'app\modules\account\controllers';

    public function init() {
        $this->layout = 'client_layout';
        parent::init();

        // custom initialization code goes here
    }
}
