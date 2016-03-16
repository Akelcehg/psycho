<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="span8">
    <div class="profile-box editing form">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
