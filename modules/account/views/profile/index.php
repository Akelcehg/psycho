<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="nicdark_space50"></div>
<div class="nicdark_space20"></div>

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <?php if (isset($message)): ?>
            <div class="nicdark_alerts nicdark_bg_blue nicdark_radius nicdark_shadow" id="profileUpdateAlert" style="text-align: center;">
                <p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>
                    <?= $message ?></p>
                <i class="icon-ok-outline nicdark_iconbg right medium white"></i>
            </div>
        <?php endif; ?>

        <?php
        $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                    'id' => 'profileForm']);
        ?>

        <div class="grid grid_3">

            <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;"
                 src="<?= Url::base() ?>/img/team/img_blank.jpg">

            <div class="nicdark_space10"></div>

            <div class="nicdark_focus center">
                <div class="nicdark_margin10">
                    <a href="#"
                       class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i
                            class="icon-plus"></i></a>
                </div>
            </div>

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


        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                    <h4 class="white nicdark_margin20">MENU WIDGET</h4>
                    <h3 style="display: inline;">
                        <a href="#" class="nicdark_btn_icon nicdark_bg_orangedark nicdark_radius_circle white"
                           data-toggle="tooltip" data-placement="top" title="Типо подсказка для тупых людей.">
                            <i class="icon-help-circled"></i>
                        </a>
                    </h3>
                    <i class="icon-clipboard nicdark_iconbg right medium white"></i>
                </div>

                <ul class="nicdark_list border">

                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet" checked>
                                <p style="display: inline;">das09sa0d jsa</p>
                            </div>
                        </div>
                    </li>

                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">1das65d1as65d </p>
                            </div>
                        </div>
                    </li>

                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

            <div class="nicdark_space20"></div>


        </div>

</section>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_violet">
                    <h4 class="white nicdark_margin20">MENU WIDGET</h4>
                    <h3 style="display: inline;">
                        <a href="#" class="nicdark_btn_icon nicdark_bg_orangedark nicdark_radius_circle white"
                           data-toggle="tooltip" data-placement="top" title="Типо подсказка для тупых людей.">
                            <i class="icon-help-circled"></i>
                        </a>
                    </h3>
                    <i class="icon-clipboard nicdark_iconbg right medium white"></i>
                </div>

                <ul class="nicdark_list border">

                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">999asd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">das1 21asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">sd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">fwfewfew</p>
                            </div>
                        </div>
                    </li>
                    <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                        <div class="nicdark_margin20">
                            <div class="nicdark_activity">
                                <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                       type="checkbox" name="option1" value="Lorem ipsum dolor sit amet">
                                <p style="display: inline;">DSAdasdasd asd a</p>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="nicdark_space20"></div>


        </div>

        <div class="nicdark_space20"></div>
        <?php ActiveForm::end(); ?>

</section>