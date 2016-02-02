<?php

use yii\helpers\Url;

?>

<div class="nicdark_right_sidebar nicdark_bg_greydark nicdark_nicescrool">

    <a class="nicdark_right_sidebar_btn_close nicdark_btn_icon small nicdark_bg_red nicdark_radius white nicdark_absolute_right10 nicdark_shadow"><i
            class="icon-cancel-circled"></i></a>


    <!--start CART-->
    <div class="nicdark_margin020">
        <div class="nicdark_space20"></div>
        <h4 class="white">Пользозвательское меню</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>


    <div class="nicdark_textevidence">
        <div class="nicdark_margin20">
            <ul class="nicdark_list nicdark_relative">
                <li>

                    <?php if ($psychologistPhoto) { ?>
                        <div class="grid grid_3">
                            <img alt=""
                                 class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width100"
                                 src="<?= Url::base() . '/' . $psychologistPhoto ?>">
                        </div>
                    <?php } else { ?>

                        <img alt=""
                             class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width100"
                             src="<?= Url::base() ?>/img/team/img_blank.jpg">

                    <?php } ?>

                    <div class="nicdark_activity nicdark_marginleft100" style="margin-left:120px;">
                        <h5 class="grey subtitle">BOOK CHILDREN</h5>
                        <div class="nicdark_space10"></div>
                        <a href="<?= Url::to(Url::base() . '/account/profile') ?>"
                           class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white"><i
                                class="icon-basket-1"></i>Профиль</a>
                    </div>
                    <div class="nicdark_space20"></div>
                </li>
            </ul>
        </div>
    </div>

    <div class="nicdark_margin020">
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>

    <div class="nicdark_margin10">

        <a href="<?= Url::to(Url::base() . '/account/schools') ?>"
           class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white"><i
                class="icon-graduation-cap-1"></i>Школы</a>

        <a href="<?= Url::to(Url::base() . '/account/article') ?>"
           class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white"><i
                class="icon-graduation-cap-1"></i>Статьи</a>


        <a href="shop-cart.php" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white"><i
                class="icon-basket-1"></i>Школы</a>


    </div>

</div>