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

    <div class="profile-box editing">

        <div class="col-md-6">
            <?=
            $form->field($profileModel, 'price')->textInput()
            ?>
        </div>
        <div class="col-md-12">
            <?=
            $form->field($profileModel, 'education')->textArea([
                'id' => 'profile_education_input',
                'placeholder' => "Введите ваше образование бла бла",
                ///'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
                //'style' => 'overflow:auto;width:100%;'
            ])
            ?>
        </div>
        <div class="col-md-12">
            <?=
            $form->field($profileModel, 'experience')->textArea([
                'id' => 'profile_experience_input',
                'placeholder' => "Введите ваш опыт работы бла бла",
                //'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
                //'style' => 'overflow:auto;width:100%;'
            ])
            ?>
        </div>
        <?= Html::submitButton('Сохранить изменения профиля', ['class' => 'btn-style']) ?>
        <?php ActiveForm::end(); ?>
    </div>

    <div class="profile-box editing">

        <h2>Ваши направления в психотерапии</h2>

        <?php
        $form = ActiveForm::begin([
            'action' => Url::base() . '/account/profile/update-directions'
        ]);
        ?>

        <div class="profile-checkbox" style="display: table;">
            <ul>
                <?php foreach ($psychologistDirections as $direction): ?>
                    <li style="display: table-cell; width:auto;">

                        <input id="direction<?= $direction['id'] ?>" class="css-checkbox" type="checkbox"
                               name="directions[]" value="<?= $direction['id'] ?>"
                            <?php if ($direction['active'] != NULL) echo "checked" ?>>
                        <label for="direction<?= $direction['id'] ?>"
                               class="css-label"><?= $direction['name'] ?></label>

                    </li>
                <?php endforeach; ?>

            </ul>
        </div>

        <div style="color: white; display: table; margin-top: 20px;">
            <?= Html::submitButton('Сохранить направления', ['class' => 'btn-style']) ?>
        </div>


        <?php ActiveForm::end(); ?>

        <div class="gap"></div>
        <h2>С какими поблемами работаете</h2>

        <?php
        $form = ActiveForm::begin([
            'action' => Url::base() . '/account/profile/update-problems'
        ]);
        ?>

        <div class="profile-checkbox" style="display: table;">
            <ul>
                <?php foreach ($psychologistProblems as $problem): ?>
                    <li style="display: table-cell; width:auto;">

                        <input id="problem<?= $problem['id'] ?>" class="css-checkbox" type="checkbox" name="problems[]"
                               value="<?= $problem['id'] ?>"
                            <?php if ($problem['active'] != NULL) echo "checked" ?> >
                        <label for="problem<?= $problem['id'] ?>" class="css-label"><?= $problem['name'] ?></label>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
        <div style="color: white; display: table; margin-top: 20px;">
            <?= Html::submitButton('Сохранить проблемы', ['class' => 'btn-style']) ?>
        </div>


        <?php ActiveForm::end(); ?>


    </div>
