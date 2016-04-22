<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Profile;

/* @var $this yii\web\View */
/* @var $model app\models\PsychologistTop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psychologist-top-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'psychologist_id')->dropDownList(
            ArrayHelper::map(
                Profile::find()->orderBy('id')->all(), 'user_id', 'lastname'),
            ['prompt' => 'Выбери психолога']

        )->label(false) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
