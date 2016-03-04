<?php
/**
 * Created by PhpStorm.
 * User: ILya
 */
namespace app\components;

use Yii;
use app\models\LoginForm;
use yii\base\Widget;

class PsychoSearchWidget extends Widget
{

    public function init() {
        parent::init();
    }

    public function run() {

        return $this->render('popup/psycho_search_modal');

    }
}

?>