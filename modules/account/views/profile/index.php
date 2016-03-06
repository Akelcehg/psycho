<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

?>

<div class="span8">
    <!--EDIT PROFILE START-->
    <div class="profile-box editing">
        <h2>Ваш профиль</h2>

        <!--<img alt="Test image" id="testImage"/>-->
        <!--<img id="blah" src="#" alt="your image" />-->
        <img alt="Test image" id="testImage" style="max-width:600px; max-height:500px;" />
        <div id="previewWrap"></div>
        <!--<div id="previewWrap"></div>-->

        <?php
        $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
            'action' => Url::base() . '/account/profile/update-photo',
        ]);
        ?>

        <input type="hidden" id="x" name="x" />
        <input type="hidden" id="y" name="y" />
        <input type="hidden" id="w" name="w" />
        <input type="hidden" id="h" name="h" />

        <?= $form->field(new \app\models\Image(), 'image_file')->fileInput(['id'=>'imgInp'])->label('Выберите фото') ?>

        <div style="color: white; display: table; ">
            <?= Html::submitButton('Сохранить фото', ['class' => 'btn-style']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <ul>
            <li>
                <label>First Name</label>
                <input type="text" class="input-block-level" placeholder="Enter your First Name">
            </li>
            <li>
                <label>Last Name</label>
                <input type="text" class="input-block-level" placeholder="Enter your Last Name">
            </li>
            <li>
                <label>Genter</label>
                <select class="input-block-level">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </li>
            <li>
                <label>Date of Birth</label>
                <input type="text" class="input-block-level">
            </li>
            <li>
                <label>Email</label>
                <input type="text" class="input-block-level" placeholder="Enter your E-mail ID">
            </li>
            <li>
                <label>Phone</label>
                <input type="text" class="input-block-level" placeholder="Enter your Phone Number">
            </li>
            <li class="fw">
                <label>Address</label>
                <textarea class="input-block-level"></textarea>
            </li>
            <li class="fw">
                <button class="btn-style">Update</button>
            </li>
        </ul>
    </div>
    <!--EDIT PROFILE END-->
    <!--EDIT PASSWORD START-->
    <div class="profile-box editing">
        <h2>Edit Password</h2>
        <ul>
            <li>
                <label>New Password</label>
                <input type="text" class="input-block-level" placeholder="Enter your New Password">
            </li>
            <li>
                <label>Confirm Password</label>
                <input type="text" class="input-block-level" placeholder="Confirm Password">
            </li>
            <li>
                <label>Old Password</label>
                <input type="password" class="input-block-level" placeholder="Enter your old Password">
            </li>
            <li class="fw">
                <button class="btn-style">Update</button>
            </li>
        </ul>
    </div>
    <!--EDIT PASSWORD END-->
    <!--QUIZ SCORE START-->
    <div class="profile-box editing">
        <h2>View quizes scores (only online course)</h2>
        <table>
            <thead>
            <tr>
                <td>Student</td>
                <td>Part</td>
                <td>Score</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#">How To Be A Great Photographer</a></td>
                <td>1</td>
                <td>5/25</td>
            </tr>
            <tr>
                <td>Instructor: Rebecca Smith</td>
                <td>2</td>
                <td>2.5/25</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>3</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>4</td>
                <td>Pending</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td>Total</td>
                <td>&nbsp;</td>
                <td>7.5/50</td>
            </tr>
            </tfoot>
        </table>


    </div>
    <!--QUIZ SCORE END-->
</div>
