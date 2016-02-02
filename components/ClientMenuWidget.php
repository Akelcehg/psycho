<?php
/**
 * Created by PhpStorm.
 * User: ILya
 */
namespace app\components;

use app\models\Image;
use Yii;
use yii\base\Widget;

class ClientMenuWidget extends Widget
{

    public function init() {
        parent::init();
    }

    public function run() {

        $psychologistPhoto = new Image();

        return $this->render('client_menu', [
            'psychologistPhoto' => $psychologistPhoto->getSmallProfilePhoto(),
        ]);

    }
}

?>