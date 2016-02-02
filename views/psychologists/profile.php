<?php

use yii\helpers\Url;

?>

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle"><?= $profile['firstname'] ?></h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white"><?= $profile['lastname'] ?></h3>
                <div class="nicdark_space20"></div>
                <h3 class="subtitle white"><?= $profile['secondname'] ?></h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_3">
            <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;"
                 src="<?= Url::base() . '/' . $logo ?>">

            <div class="nicdark_space10"></div>

            <div class="nicdark_focus center">
                <div class="nicdark_margin10">
                    <a title="YOUTUBE" href="#"
                       class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i
                            class="icon-youtube-play"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a title="DRIBBBLE" href="#"
                       class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_violet nicdark_shadow small nicdark_radius white"><i
                            class="icon-dribbble-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a title="TWITTER" href="#"
                       class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i
                            class="icon-twitter-1"></i></a>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="grid grid_6">
                <h3 class="subtitle greydark">Образование</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
                <p><?= $profile['education'] ?></p>
            </div>


            <div class="grid grid_6">
                <h3 class="subtitle greydark">Опыт психологической практики</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
                <p><?= $profile['experience'] ?></p>
            </div>
        </div>
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

                <div
                    class="nicdark_textevidence nicdark_bg_green nicdark_radius nicdark_width_percentage100 center nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <div class="nicdark_space30"></div>

                        <h1 class="white subtitle"><?= $profile['price'] ?></h1>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span>
                        </div>
                        <div class="nicdark_space20"></div>
                        <h4 class="white subtitle">QUARTERLY</h4>

                        <div class="nicdark_space30"></div>

                    </div>

                    <i class="icon-money-1 nicdark_iconbg left big green"></i>
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
                    <h4 class="white nicdark_margin20">Ваши направления в психотерапии</h4>
                    <i class="icon-clipboard nicdark_iconbg right medium violet"></i>
                </div>

                <ul class="nicdark_list border">

                    <?php foreach ($psychologistDirections as $direction): ?>

                        <li class="nicdark_border_grey" style="display: table-cell;width:auto;">

                            <div class="nicdark_margin20">
                                <div class="nicdark_activity">
                                    <p><i class="icon-right-open-outline"></i><?= $direction['name'] ?></p>
                                </div>
                            </div>

                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

        </div>

</section>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_violet nicdark_radius_top">
                    <h4 class="white nicdark_margin20">С какими поблемами работаете</h4>
                    <i class="icon-clipboard nicdark_iconbg right medium violet"></i>
                </div>

                <ul class="nicdark_list border">

                    <?php foreach ($psychologistProblems as $problem): ?>

                        <li class="nicdark_border_grey" style="display: table-cell; width:auto;">
                            <div class="nicdark_margin20">
                                <div class="nicdark_activity">
                                    <p><i class="icon-right-open-outline"></i><?= $problem['name'] ?></p>
                                </div>
                            </div>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

        </div>

</section>

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_4">
            <h3 class="subtitle greydark">Видео психолога</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <!--start section-->

            <section class="nicdark_section">


            </section>
        </div>


    </div>
    <!--end nicdark_container-->
    <section class="nicdark_section">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space50"></div>

            <div class="grid grid_6">
                <h3 class="subtitle greydark">Тренинги психолога</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>

                <ul class="nicdark_list border">
                    <li class="nicdark_border_grey">
                        <p>DRAWING LESSON IN ALL CLASSES <a href="#"
                                                            class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">Подробнее</a>
                        </p>
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>BASIC NICE ART VIDEOS <a href="#"
                                                    class="nicdark_btn nicdark_bg_violet extrasmall nicdark_radius nicdark_shadow white right">Подробнее</a>
                        </p>
                        <div class="nicdark_space15"></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <p>SOME WATER COLOR PRACTICE <a href="#"
                                                        class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">Подробнее</a>
                        </p>
                        <div class="nicdark_space15"></div>
                    </li>

                </ul>

            </div>


            <div class="grid grid_6">
                <h3 class="subtitle greydark">CONTACT ME</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>

                <input class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" type="text" value=""
                       placeholder="EMAIL">
                <div class="nicdark_space20"></div>
                <textarea class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle"
                          placeholder="MESSAGE" rows="9"></textarea>
                <div class="nicdark_space20"></div>
                <!--<input class="nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white right" type="submit" value="SEND">-->
                <a href="submit-message.html"
                   class="nicdark_mpopup_ajax nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white nicdark_press right">SEND</a>
            </div>


        </div>
        <div class="nicdark_space30"></div>
    </section>

</section>