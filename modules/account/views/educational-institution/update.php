<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EducationalInstitution */

$this->title = 'Update Educational Institution: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Educational Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="educational-institution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
