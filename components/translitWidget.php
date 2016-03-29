<?php
/**
 * Created by PhpStorm.
 * User: ILya
 */
namespace app\components;

use Yii;
use yii\base\Widget;

class TranslitWidget extends Widget {

    public $link;

    public function init() {
        parent::init();
    }

    public function getTranslit() {
        return $this->link;
    }

    public function run() {

        return $this->getTranslit();

    }
}

?>