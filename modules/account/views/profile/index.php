<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

?>

<div class="col-md-8">
    <!--EDIT PROFILE START-->
    <div class="profile-box editing">


        <?php if (isset($message)): ?>
            <div class="nicdark_alerts nicdark_bg_blue nicdark_radius nicdark_shadow" id="profileUpdateAlert"
                 style="text-align: center;">
                <p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>
                    <?= $message ?></p>
                <i class="icon-ok-outline nicdark_iconbg right medium white"></i>
            </div>
        <?php endif; ?>


        <h2>Ваш профиль</h2>

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



        <?php
        $form = ActiveForm::begin([
            'id' => 'profileForm'
        ]);
        ?>

        <ul>
            <li>
                <?=
                $form->field($profileModel, 'firstname')->textInput([
                    'class' => 'input-block-level'
                ])
                ?>
            </li>
            <li>
                <?=
                $form->field($profileModel, 'lastname')->textInput([
                    'class' => 'input-block-level'
                ])
                ?>
            </li>
            <li>
                <?=
                $form->field($profileModel, 'secondname')->textInput([
                    'class' => 'input-block-level'
                ])
                ?>
            </li>

            <li>
                <label>Gender</label>
                <?=$form->field($profileModel, 'gender')->dropDownList([
                    '0' => 'Выберите пол',
                    'мужской' => 'мужской',
                    'женский'=>'женский'
                ])->label(false);
                ?>

                <!--<select class="input-block-level">
                    <option>Male</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>-->
            </li>

            <!--<li>
                <label>Email</label>
                <input type="text" class="input-block-level" placeholder="Enter your E-mail ID">
            </li>-->

            <!--<li class="fw">
                <button class="btn-style">Update</button>
            </li>-->

        </ul>


    </div>

    <div class="profile-box editing">
        <h2>Edit Password</h2>

        <?=
        $form->field($profileModel, 'price')->textInput()
        ?>

        <?=
        $form->field($profileModel, 'education')->textArea([
            'id' => 'profile_education_input',
            'placeholder' => "Введите ваше образование бла бла",
            ///'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
            'style' => 'overflow:auto;width:100%;'
        ])
        ?>

        <?=
        $form->field($profileModel, 'experience')->textArea([
            'id' => 'profile_experience_input',
            'placeholder' => "Введите ваш опыт работы бла бла",
            //'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
            'style' => 'overflow:auto;width:100%;'
        ])
        ?>

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

                        <input id="direction<?= $direction['id'] ?>" class="css-checkbox" type="checkbox" name="directions[]" value="<?= $direction['id'] ?>"
                            <?php if ($direction['active'] != NULL) echo "checked" ?>>
                        <label for="direction<?= $direction['id'] ?>" class="css-label"><?= $direction['name'] ?></label>

                    </li>
                <?php endforeach; ?>

            </ul>
        </div>

        <div style="color: white; display: table; margin-top: 20px;">
            <?= Html::submitButton('Сохранить направления', ['class' => 'btn-style']) ?>
        </div>


        <?php ActiveForm::end(); ?>


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

                    <input id="problem<?= $problem['id'] ?>" class="css-checkbox" type="checkbox" name="problems[]" value="<?= $problem['id'] ?>"
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
