<?php
use \yii\helpers\Url;

?>

<div class="nicdark_section nicdark_navigation fade-down">

    <div class="nicdark_menu_boxed">

        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
            <div class="nicdark_container nicdark_clearfix">
                <div class="grid grid_6">
                    <div class="nicdark_focus">
                        <h6 class="white">
                            <i class="icon-calendar-outlilne"></i>&nbsp;&nbsp;<a class="white"
                                                                                 href="events.html">OUR
                                EVENTS</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-pencil-1"></i>&nbsp;&nbsp;<a class="white" href="blog-masonry.html">NEWS</a>

                        </h6>
                    </div>
                </div>
                <div class="grid grid_5 right">
                    <div class="nicdark_focus right">
                        <h6 class="white">
                            <i class="icon-plus-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax"
                                                                            href="form-register.html">REGISTER</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax"
                                                                      href="form-login.html">LOG IN</a>
                        </h6>
                    </div>
                </div>

                <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i
                        class="icon-basket-1"></i></a>

                <!--info window for languages-->
                <div id="nicdark_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide">

                    <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                        <div class="nicdark_margin20">
                            <h4 class="white">LANGUAGES</h4>
                        </div>
                    </div>

                    <div class="nicdark_margin20">

                        <ul class="nicdark_list border">

                            <li class="nicdark_border_grey">
                                <p><a class="grey" href="index-2.html">ENGLISH</a><a href="index-2.html"
                                                                                     class="nicdark_btn right nicdark_opacity"><img
                                            alt="" width="30" src="img/flag/img1.png"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index-2.html">RUSSIAN</a><a href="index-2.html"
                                                                                     class="nicdark_btn right nicdark_opacity"><img
                                            alt="" width="30" src="img/flag/img2.png"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index-2.html">ARABIC</a><a href="index-2.html"
                                                                                    class="nicdark_btn right nicdark_opacity"><img
                                            alt="" width="30" src="img/flag/img3.png"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index-2.html">ITALIAN</a><a href="index-2.html"
                                                                                     class="nicdark_btn right nicdark_opacity"><img
                                            alt="" width="30" src="img/flag/img4.png"></a></p>
                            </li>

                        </ul>

                    </div>
                </div>
                <!--end window-->

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
                                <a href="<?=Url::to('schools')?>">ШКОЛЫ</a>
                            </li>

                            <li class="orange">
                                <a href="index-2.html">Блоги</a>
                            </li>

                            <li class="orange">
                                <a href="index-2.html">Видео</a>
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
                                <a href="index-2.html">Тренинги</a>
                            </li>


                            <li class="orange">
                                <a href="index-2.html">Психологи</a>
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