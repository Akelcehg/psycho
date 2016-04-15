<?php

use app\models\City;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

?>

<div class="col-md-9">

    <div class="profile-box editing">


        <?php if (isset($message)): ?>

            <?= $message ?></p>

        <?php endif; ?>


        <h2>Ваш профиль</h2>
        <div class="col-md-12">
            <!--<img alt="Test image" id="testImage"/>-->
            <!--<img id="blah" src="#" alt="your image" />-->
            <img id="testImage" style="max-width:400px; max-height:400px;"/>
            <div id="previewWrap"></div>
            <!--<div id="previewWrap"></div>-->

            <?php
            $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                'action' => Url::base() . '/account/profile/update-photo',
            ]);
            ?>

            <input type="hidden" id="disp_x" name="disp_x"/>
            <input type="hidden" id="disp_y" name="disp_y"/>
            <input type="hidden" id="x" name="x"/>
            <input type="hidden" id="y" name="y"/>
            <input type="hidden" id="w" name="w"/>
            <input type="hidden" id="h" name="h"/>

            <?= $form->field(new \app\models\Image(), 'image_file')->fileInput(['id' => 'imgInp'])->label('Выберите фото') ?>

            <div style="color: white; display: table; ">
                <?= Html::submitButton('Сохранить фото', ['class' => 'btn-style']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>


        <?php
        $form = ActiveForm::begin([
            'id' => 'profileForm'
        ]);
        ?>

        <div class="gap"></div>
        <div class="col-md-6">
            <?=
            $form->field($profileModel, 'firstname')->textInput()
            ?>
        </div>
        <div class="col-md-6">
            <?=
            $form->field($profileModel, 'lastname')->textInput()
            ?>
        </div>
        <div class="col-md-6">
            <?=
            $form->field($profileModel, 'secondname')->textInput()
            ?>
        </div>

        <!--<label>Gender</label>-->
        <div class="col-md-6">
            <?= $form->field($profileModel, 'gender')->dropDownList([
                '0' => 'Выберите пол',
                'мужской' => 'мужской',
                'женский' => 'женский'
            ]);
            ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($profileModel, 'city_id')->dropDownList(
                ArrayHelper::map(City::find()->where([
                    'region_id' => '10373'
                ])->orderBy('name')->all(), 'city_id', 'name'),
                ['prompt' => 'Выберите город']) ?>


        </div>
    </div>

</div>