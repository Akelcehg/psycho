<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schools-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'accreditation') ?>

    <?php // echo $form->field($model, 'document_end') ?>

    <?php // echo $form->field($model, 'qualification_levels') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'map_coordinates') ?>

    <?php // echo $form->field($model, 'school_directions') ?>

    <?php // echo $form->field($model, 'faculties') ?>

    <?php // echo $form->field($model, 'required_documents') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
