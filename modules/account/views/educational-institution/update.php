<?php

use yii\helpers\Html;


?>
<div class="col-md-9">
    <div class="profile-box editing">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
            'imagesModel' => $imagesModel
        ]) ?>

    </div>
</div>
