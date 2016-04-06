<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-9">
    <div class="profile-box editing form">

        <?= $this->render('_form', [
            'model' => $model,
            'articleCategories' => $articleCategories
        ]) ?>

    </div>
</div>
