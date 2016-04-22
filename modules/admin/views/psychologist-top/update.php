<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PsychologistTop */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Psychologist Top',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Psychologist Tops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="psychologist-top-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
