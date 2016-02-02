<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'accreditation')->textInput() ?>

    <?= $form->field($model, 'document_end')->textInput() ?>

    <?= $form->field($model, 'qualification_levels')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map_coordinates')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_directions')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'faculties')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'required_documents')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photos')->textInput() ?>

    <?= $form->field($model, 'videos')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
