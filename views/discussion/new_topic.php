<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

?>


<div class="container">
    <h1 class="page-header"><i class="fa fa-pencil"></i> Оставить вопрос в разделе</h1>

    <div class="leave-reply">

        <div class="row-fluid">

            <!--<div class="text-area">
                <textarea class="input-block-level" placeholder="Comments"></textarea>
                <button class="btn-style">Submit</button>
            </div>-->

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class' => 'input-block-level']) ?>

            <?= $form->field($model, 'text')->textarea(['maxlength' => true, 'class' => 'input-block-level']) ?>

            <div class="form-group">
                <?= Html::submitButton('Создать', ['class' => 'btn-style']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>