<?php
use \yii\helpers\Url;
use app\components\LoginWidget;
use app\components\RegisterWidget;
use yii\helpers\Html;

?>

<div class="nicdark_section nicdark_navigation fade-down">

    <div class="nicdark_menu_boxed">


        <div class="nicdark_section nicdark_bg_blue_custom">
            <div class="white_mask">
                <div class="nicdark_container nicdark_clearfix">

                    <div class="grid grid_12 right">
                        <div class="nicdark_focus right">
                            <h6 class="white">

                                <?php if (Yii::$app->user->isGuest) { ?>
                                    <i class="icon-plus-outline"></i><a class="white nicdark_mpopup_window"
                                                                        href="#register_window">REGISTER</a>
                                    <span class="grey">·</span>
                                    <i class="icon-lock-1"></i><a class="white nicdark_mpopup_window"
                                                                  href="#login_window">LOG IN</a>
                                    <span class="grey">·</span>
                                <?php } else { ?>
                                    <!--<i class="icon-leaf-1"></i><a class="white" href="<? /*= Url::to('admin') */ ?>">ADMIN</a>-->

                                    <!--<span class="grey">·</span>-->
                                    <!--<i class="icon-lock-1"></i><a class="white nicdark_right_sidebar_btn_open"
                                                                  href="#login_window">User Panel</a>-->
                                    <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"
                                       href="<?= Url::to(['site/logout']) ?>" data-method="post">ВЫЙТИ</a>
                                    <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"
                                       href="<?= Url::to(Url::base() . '/admin') ?>">ADMIN</a>
                                    <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right">МЕНЮ</a>
                                    <!--<i class="icon-lock-1"></i><a class="white"
                                                              href="<? /*= Url::to(['site/logout']) */ ?>" data-method="post">Logout</a>-->

                                <?php } ?>
                            </h6>
                        </div>
                    </div>

                    <?= LoginWidget::widget() ?>
                    <?= RegisterWidget::widget() ?>

                </div>
            </div>
        </div>

        <div class="nicdark_space3 nicdark_bg_gradient"></div>

        <div class="nicdark_section nicdark_bg_white nicdark_shadow nicdark_radius_bottom"
             style="border: 1px solid rgba(0,0,255,0.1);">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">

                    <div class="nicdark_space20"></div>
                    <div class="nicdark_logo nicdark_marginleft10">

                        <a href="<?= Url::base() ?>"><img alt="" src="<?= Url::base() ?>/img/logo.png"></a>
                    </div>

                    <!-- <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-basket-1"></i></a> -->

                    <nav>
                        <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                            <li class="orange">
                                <a href="<?= Url::base() ?>">ГЛАВНАЯ</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('educational-institution') ?>">УЧЕБНЫЕ ЗАВЕДЕНИЯ</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('article') ?>">СТАТЬИ</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('video') ?>">ВИДЕО</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('discussion') ?>">ФОРУМ</a>
                            </li>

                            <li class="orange">
                                <a href="index-2.html">Интересное</a>
                                <ul class="sub-menu" style="display: none;">
                                    <li><a href="courses.php">выфвфыв</a></li>
                                    <li><a href="courses.php">выфвфы</a></li>
                                    <li><a href="courses.php">выфвфывфвф</a></li>
                                    <li><a href="courses.php">выфвфы</a></li>
                                </ul>
                            </li>


                            <li class="orange">
                                <a href="<?= Url::to('trainings') ?>">ТРЕНИНГИ</a>
                            </li>


                            <li class="orange">
                                <a href="<?= Url::to('psychologists') ?>">ПСИХОЛОГИ</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="nicdark_space20"></div>

                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>