<?php
/**
 * Created by PhpStorm.
 * User: ILya
 */
namespace app\components;

use Yii;
use app\models\LoginForm;
use yii\base\Widget;

class LoginWidget extends Widget
{

    public function init() {
        parent::init();
    }

    public function run() {

        //return $modal = $this->render('popup/payment_modal');

        $model = new LoginForm();

        return $this->render('popup/login', [
            'model' => $model,
        ]);

    }
}

?>