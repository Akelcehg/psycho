<?php

use yii\helpers\Html;

?>
<div class="span8">
    <div class="profile-box editing">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
