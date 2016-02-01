<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Image;

?>

<div class="nicdark_space50"></div>
<div class="nicdark_space20"></div>

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <?php if (isset($message)): ?>
            <div class="nicdark_alerts nicdark_bg_blue nicdark_radius nicdark_shadow" id="profileUpdateAlert"
                 style="text-align: center;">
                <p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>
                    <?= $message ?></p>
                <i class="icon-ok-outline nicdark_iconbg right medium white"></i>
            </div>
        <?php endif; ?>


        <div class="grid grid_3">


            <?php if ($logo) { ?>
                <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;"
                     src="<?= Url::base() .'/'. $logo ?>">

            <?php } else { ?>
                <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;"
                     src="<?= Url::base() ?>/img/team/img_blank.jpg">
            <?php } ?>
            <div class="nicdark_space10"></div>

            <div class="nicdark_focus center nicdark_margin10">
                <!--<div class="nicdark_margin10">

                    <a href="#"
                       class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i
                            class="icon-plus"></i></a>

                </div>-->

                <?php
                $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                    'action' => Url::base() . '/account/profile/update-photo'
                ]);
                ?>

                <?= $form->field($imagesModel, 'image_file')->fileInput() ?>

                <div style="color: white;">
                    <?= Html::submitButton('Обновить фото', ['class' => 'nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>


            <?php
            $form = ActiveForm::begin([
                'id' => 'profileForm'
            ]);
            ?>

            <div style="text-align: center;">
                <?=
                $form->field($profileModel, 'firstname')->textInput([
                    'style' => 'text-align:center;'
                ])
                ?>
                <div class="nicdark_space10"></div>
                <?=
                $form->field($profileModel, 'lastname')->textInput([
                    'style' => 'text-align:center;'
                ])
                ?>
                <div class="nicdark_space10"></div>
                <?=
                $form->field($profileModel, 'secondname')->textInput([
                    'style' => 'text-align:center;'
                ])
                ?>
            </div>

        </div>

        <div class="col-md-6">
            <div class="grid grid_6">

                <h3 class="subtitle greydark">
                    Образование


                    <a href="#" class="nicdark_btn_icon nicdark_bg_orangedark nicdark_radius_circle white"
                       data-toggle="tooltip" data-placement="top" title="Типо подсказка для тупых людей.">
                        <i class="icon-help-circled"></i>
                    </a>
                </h3>

                <!--<div class="nicdark_space20"></div>-->

                <div class="nicdark_divider left small">
                    <span class="nicdark_bg_blue nicdark_radius"></span>
                    <div class="nicdark_space20"></div>
                </div>

                <?=
                $form->field($profileModel, 'education')->textArea([
                    'id' => 'education_input',
                    'placeholder' => "Введите ваше образование бла бла",
                    'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
                ])->label(false)
                ?>


            </div>
            <div class="grid grid_6">
                <h3 class="subtitle greydark">Опыт психологической практики

                    <a href="#" class="nicdark_btn_icon nicdark_bg_orangedark nicdark_radius_circle white"
                       data-toggle="tooltip" data-placement="top" title="Типо подсказка для тупых людей.">
                        <i class="icon-help-circled"></i>
                    </a>
                </h3>
                <div class="nicdark_divider left small">
                    <span class="nicdark_bg_blue nicdark_radius"></span>
                    <div class="nicdark_space20"></div>
                </div>

                <?=
                $form->field($profileModel, 'experience')->textArea([
                    'id' => 'experience_input',
                    'placeholder' => "Введите ваш опыт работы бла бла",
                    'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
                ])->label(false)
                ?>

            </div>
        </div>
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

                <div
                    class="nicdark_textevidence nicdark_bg_green nicdark_radius nicdark_width_percentage100 center nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <div class="nicdark_space30"></div>

                        <h1 class="white subtitle">Цена сеанса</h1>

                        <?=
                        $form->field($profileModel, 'price')->textInput([
                            'style' => 'text-align:center;'
                        ])->label(FALSE)
                        ?>

                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <h4 class="white subtitle">Дать диплом
                            <i class="icon-plus"></i></h4>

                        <div class="nicdark_space30"></div>

                    </div>

                    <i class="icon-money-1 nicdark_iconbg left big green"></i>

                </div>

                <div class="nicdark_space10"></div>
                <div style="color: white;">
                    <?= Html::submitButton('Сохранить изменения профиля', ['class' => 'nicdark_btn fullwidth nicdark_bg_green medium nicdark_shadow nicdark_radius white']) ?>
                </div>

            </div>

        </div>
        <?php ActiveForm::end(); ?>


        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">

            <?php
            $form = ActiveForm::begin([
                'action' => Url::base() . '/account/profile/update-directions'
            ]);
            ?>
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                    <h4 class="white nicdark_margin20">Ваши направления в психотерапии</h4>
                    <h3 style="display: inline;">
                        <a href="#" class="nicdark_btn_icon nicdark_bg_orangedark nicdark_radius_circle white"
                           data-toggle="tooltip" data-placement="top" title="Типо подсказка для тупых людей.">
                            <i class="icon-help-circled"></i>
                        </a>
                    </h3>
                    <i class="icon-clipboard nicdark_iconbg right medium white"></i>
                </div>


                <ul class="nicdark_list border">

                    <?php foreach ($psychologistDirections as $direction): ?>
                        <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                            <div class="nicdark_margin20">
                                <div class="nicdark_activity">
                                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                           type="checkbox" name="directions[]" value="<?= $direction['id'] ?>"
                                        <?php if ($direction['active'] != NULL) echo "checked" ?>
                                    >
                                    <p style="display: inline;"><?= $direction['name'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>


            </div>

            <div class="nicdark_space20"></div>
            <div class="row">
                <div class="col-md-3" style="color: white;">
                    <?= Html::submitButton('Сохранить направления', ['class' => 'nicdark_btn fullwidth nicdark_bg_green medium nicdark_shadow nicdark_radius white']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>


</section>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">

            <?php
            $form = ActiveForm::begin([
                'action' => Url::base() . '/account/profile/update-problems'
            ]);
            ?>

            <div class="nicdark_archive1 nicdark_bg_grey nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_violet">
                    <h4 class="white nicdark_margin20">С какими поблемами работаете</h4>
                    <h3 style="display: inline;">
                        <a href="#" class="nicdark_btn_icon nicdark_bg_orangedark nicdark_radius_circle white"
                           data-toggle="tooltip" data-placement="top" title="Типо подсказка для тупых людей.">
                            <i class="icon-help-circled"></i>
                        </a>
                    </h3>
                    <i class="icon-clipboard nicdark_iconbg right medium white"></i>
                </div>

                <ul class="nicdark_list border">

                    <?php foreach ($psychologistProblems as $problem): ?>
                        <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                            <div class="nicdark_margin20">
                                <div class="nicdark_activity">
                                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                           type="checkbox" name="problems[]" value="<?= $problem['id'] ?>"
                                        <?php if ($problem['active'] != NULL) echo "checked" ?>
                                    >
                                    <p style="display: inline;"><?= $problem['name'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>

            </div>
            <div class="nicdark_space20"></div>
            <div class="row">
                <div class="col-md-3" style="color: white;">
                    <?= Html::submitButton('Сохранить проблемы', ['class' => 'nicdark_btn fullwidth nicdark_bg_green medium nicdark_shadow nicdark_radius white']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>


        </div>

        <div class="nicdark_space20"></div>

</section>