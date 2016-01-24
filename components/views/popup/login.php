<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div id="login_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide popup_window">

    <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
        <div class="nicdark_margin20">
            <h4 class="white">Login Form</h4>
        </div>
    </div>
    <div class="nicdark_margin20">

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'action' => 'site/login',
            'options' => ['class' => 'form-horizontal',
            ],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>