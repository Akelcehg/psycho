<?php
use \yii\helpers\Url;
use app\components\LoginWidget;

?>

<div class="nicdark_section nicdark_navigation fade-down">

    <div class="nicdark_menu_boxed">

        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
            <div class="nicdark_container nicdark_clearfix">
                <div class="grid grid_6">
                    <div class="nicdark_focus">
                        <h6 class="white">
                            <i class="icon-calendar-outlilne"></i><a class="white"
                                                                                 href="events.html">OUR
                                EVENTS</a>
                            <span class="grey">·</span>
                            <i class="icon-pencil-1"></i><a class="white" href="blog-masonry.html">NEWS</a>

                        </h6>
                    </div>
                </div>
                <div class="grid grid_5 right">
                    <div class="nicdark_focus right">
                        <h6 class="white">

                            <i class="icon-leaf-1"></i><a class="white"
                                                                      href="<?=Url::to('admin')?>">ADMIN</a>
                            <span class="grey">·</span>
                            <i class="icon-plus-outline"></i><a class="white nicdark_mpopup_window"
                                                                            href="#register_window">REGISTER</a>
                            <span class="grey">·</span>
                            <i class="icon-lock-1"></i><a class="white nicdark_mpopup_window"
                                                                      href="#login_window">LOG IN</a>
                        </h6>
                    </div>
                </div>

                <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i
                        class="icon-basket-1"></i></a>

                <?= LoginWidget::widget() ?>

                <?php /*echo $this->render('//partials/popup/login'); */ ?><!--
                --><?php /*echo $this->render('//partials/popup/register'); */ ?>


            </div>
        </div>

        <div class="nicdark_space3 nicdark_bg_gradient"></div>

        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">

                    <div class="nicdark_space20"></div>

                    <div class="nicdark_logo nicdark_marginleft10">
                        <a href="/"><img alt="" src="img/logo.png"></a>
                    </div>

                    <!-- <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-basket-1"></i></a> -->

                    <nav>
                        <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                            <li class="orange">
                                <a href="<?= Url::base() ?>">ГЛАВНАЯ</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('schools') ?>">ШКОЛЫ</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('blog') ?>">БЛОГИ</a>
                            </li>

                            <li class="orange">
                                <a href="<?= Url::to('video') ?>">ВИДЕО</a>
                            </li>

                            <li class="orange">
                                <a href="index-2.html">Форум</a>
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