<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'direction') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'about') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'schedule') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'map_coordinates') ?>

    <?php // echo $form->field($model, 'organizer_id') ?>

    <?php // echo $form->field($model, 'is_user_organizer') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
