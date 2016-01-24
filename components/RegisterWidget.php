<?php
/**
 * Created by PhpStorm.
 * User: ILya
 */
namespace app\components;

use app\models\SignupForm;
use Yii;
use yii\base\Widget;

class RegisterWidget extends Widget
{

    public function init() {
        parent::init();
    }

    public function run() {

        //return $modal = $this->render('popup/payment_modal');

        $model = new SignupForm();

        return $this->render('popup/register', [
            'model' => $model,
        ]);

    }
}

?>