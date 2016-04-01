<?php

use yii\helpers\Html;


?>
<div class="span8">
    <div class="profile-box editing">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
