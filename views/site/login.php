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
<!--BANNER END-->
<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <!--        <div class="buttons">
                    <button class="btn1 login-btn"><i class="fa fa-facebook"></i>Login with Facebook</button>

                    <button class="btn2 login-btn"><i class="fa fa-google-plus"></i>Login with Google</button>

                    <button class="btn3 login-btn"><i class="fa fa-yahoo"></i>Login with Yahoo</button>

                    <button class="btn4 login-btn"><i class="fa fa-linkedin"></i>Login with Linkein</button>

                    <button class="btn5 login-btn"><i class="fa fa-windows"></i>Login with Window Live</button>

                </div>-->
        <div class="row">
            <div class="span3"></div>
            <div class="span6">
                <div class="form-box">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="form-body">
                        <fieldset>
                            <legend>Login Below:</legend>
                            <legend>user@gmail.com</legend>
                            <legend>123456</legend>
                            <legend>admin@gmail.com</legend>
                            <legend>123456</legend>

                            <!--<label>Email Address</label>-->

                            <!--<input type="text" placeholder="Enter your E-mail ID" class="input-block-level">-->

                            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'class' => "input-block-level"]) ?>

                            <!--<label>Password</label>-->

                            <!--<input type="password" placeholder="Enter Password" class="input-block-level">-->

                            <?= $form->field($model, 'password')->passwordInput(['class' => 'input-block-level']) ?>


                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-11">
                                    <?= Html::submitButton('Login', ['class' => 'btn-style', 'name' => 'login-button']) ?>
                                </div>
                            </div>

                            <!--<button type="submit" class="btn-style">Submit</button>-->
                        </fieldset>
                    </div>
                 <!--   <div class="footer">
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
