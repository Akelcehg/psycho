<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="page-heading">
    <div class="container">
        <h2>Sign In</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>

<div class="contant">
    <div class="container">

        <div class="row">
            <div class="span3"></div>
            <div class="span6">
                <div class="form-box">

                    <?php $form = ActiveForm::begin(); ?>

                    <!--<div class="form-body">
                        <fieldset>
                            <legend>Login Below:</legend>

                            <? /*= $form->field($model, 'email')->textInput(['autofocus' => true, 'class' => "input-block-level"]) */ ?>
                            <? /*= $form->field($model, 'password')->passwordInput(['class' => 'input-block-level']) */ ?>

                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-11">
                                    <? /*= Html::submitButton('Login', ['class' => 'btn-style', 'name' => 'login-button']) */ ?>
                                </div>
                            </div>


                        </fieldset>
                    </div>-->

                    <div class="form-body">
                        <fieldset>
                            <legend>First time here? Sign up now!</legend>
                            <div class="row-fluid">
                                <div class="span6">
                                    <!--<label>First Name</label>-->
                                    <!--<input type="text" placeholder="First Name" class="input-block-level">-->
                                    <?= $form->field($model, 'first_name')->textInput(['class' => "input-block-level"]) ?>
                                </div>
                                <div class="span6">
                                    <!--<label>Last Name</label>
                                    <input type="text" placeholder="Last Name" class="input-block-level">-->
                                    <?= $form->field($model, 'last_name')->textInput(['class' => "input-block-level"]) ?>
                                </div>
                            </div>
                            <!--<label>Email Address</label>
                            <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">-->
                            <?= $form->field($model, 'email')->textInput(['class' => "input-block-level"]) ?>
                            <!--<label>Password</label>
                            <input type="password" placeholder="Enter Password" class="input-block-level">-->
                            <?= $form->field($model, 'password')->textInput(['class' => "input-block-level"]) ?>
                            <!--<button type="submit" class="btn-style">Sign Up</button>-->
                            <?= Html::submitButton('Sign Up', ['class' => 'btn-style']) ?>
                        </fieldset>
                    </div>
                    <div class="footer">
                        <p>By Registering, You Accept Terms &amp; Conditions</p>
                    </div>
                    <!--<div class="footer">
                        <ul>
                            <li><a href="#">Forgot My Password</a></li>
                            <li><a href="#">Re-send Confirmation Email</a></li>
                            <li><a href="#">Sign up Today for Free!</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                        <button class="btn-style">Register</button>
                    </div>-->

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="span3"></div>

        </div>
    </div>

</div>
