<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div id="register_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide popup_window">

    <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
        <div class="nicdark_margin20">
            <h4 class="white">Register Form</h4>
        </div>
    </div>
    <div class="nicdark_margin20">

        <div class="site-signup">

            <div class="row">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'action' => 'site/signup'
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
