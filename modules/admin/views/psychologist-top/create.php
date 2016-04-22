<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PsychologistTop */

$this->title = Yii::t('app', 'Create Psychologist Top');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Psychologist Tops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psychologist-top-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
