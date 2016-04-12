<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

?>
<div class="col-md-9">
    <div class="profile-box editing">

        <?= $this->render('_form', [
            'model' => $model,
            'articleCategories' => $articleCategories
        ]) ?>

    </div>
</div>
