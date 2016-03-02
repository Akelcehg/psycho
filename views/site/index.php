<?php

use yii\helpers\Url;
use app\models\Image;

?>

<!--<section class="nicdark_section">

    <div class="tp-banner-container">
        <div class="nicdark_slide1" style="max-height: 650px; height: 650px;">

            <ul>

                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="FRIENDS">
                    <img src="img/slide/1st.jpg" alt="" data-lazyload="img/slide/1st.jpg"
                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="FRIENDS">
                    <img src="img/slide/1st.jpg" alt="" data-lazyload="img/slide/1st.jpg"
                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                </li>
            </ul>

        </div>
    </div>

</section>-->

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>

                <div class="nicdark_space10"></div>

                <div class="nicdark_space20"></div>

                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>

<section class="nicdark_section nicdark_margintop45_negative">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12 percentage nomargin">
            <div class="nicdark_textevidence center">
                <div
                    class="nicdark_textevidence nicdark_width_percentage25 nicdark_shadow nicdark_radius_left"
                    style="background-color: #337ab7;">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white nicdark_zoom subtitle"><a class="white" href="courses.php">COURSES</a></h2>
                        </div>
                        <!--<i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig white nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>-->
                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_shadow"
                     style="background-color: #337ab7;border-left: 1px solid white;">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white nicdark_zoom subtitle"><a class="white" href="prices.php">PRICES</a></h2>
                        </div>
                        <!--<i class="nicdark_zoom icon-money-1 nicdark_iconbg left extrabig white nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>-->
                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_shadow"
                     style="background-color: #337ab7;border-left: 1px solid white;">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white nicdark_zoom subtitle"><a class="white" href="events.php">ТЕСТЫ</a></h2>
                        </div>
                        <!--<i class="nicdark_zoom icon-music-2 nicdark_iconbg left extrabig white nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>-->
                    </div>
                </div>
                <div
                    class="nicdark_textevidence nicdark_width_percentage25 nicdark_shadow nicdark_radius_right"
                    style="background-color: #337ab7;border-left: 1px solid white;">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white nicdark_zoom subtitle"><a class="white" href="teachers.php">TEACHERS</a>
                            </h2>
                        </div>
                        <!--<i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig white nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>-->
                    </div>
                </div>
                <div class="nicdark_space5"></div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->

</section>

<div class="nicdark_container nicdark_clearfix">

    <div class="nicdark_space50"></div>

    <p><span class="white nicdark_dropcap nicdark_bg_yellow nicdark_radius nicdark_shadow">L</span>orem
        commodo lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet, rhoncus non
        turpis. Aenean convallis ac lorem et sodales. Sed dictum vel orci nec rhoncus. Donec quis porttitor
        arcu. Nulla ut justo quis augue commodo mattis nec vel ante.<br/><br/>Lorem commodo lectus at
        sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet, rhoncus non turpis.
        Aenean convallis ac lorem et sodales. Sed dictum vel orci nec rhoncus. Donec quis porttitor arcu. Nulla
        ut justo quis augue commodo mattis nec vel ante.<br/><br/>Lorem commodo lectus at sollicitudin
        elementum. Sed dolor turpis, condimentum sit amet maximus sit amet, rhoncus non turpis. Aenean convallis
        ac lorem et sodales. Sed dictum vel orci nec rhoncus. Donec quis porttitor arcu. Nulla ut justo quis
        augue commodo mattis nec vel ante.</p>

</div>

<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle">Топ психологов</h1>
            <div class="nicdark_space10"></div>
        </div>


        <?php
        foreach ($topPsychologists as $index => $data):
            echo '<div class="grid grid_6">

            <div class="nicdark_archive1 psycho_top_windows">

                <a href="' . Url::base() . '/psychologists/profile?id=' . $data["user_id"] . '">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="' . Image::getUserMediumProfilePhoto($data["user_id"]) . '">
                </div>
                </a>

                <div class="nicdark_textevidence nicdark_width_percentage60 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4><a style="color:black;" href="' . Url::base() . '/psychologists/profile?id=' . $data["user_id"] . '">
                        ' . $data['firstname'] . ' ' . $data['lastname'] . ' ' . $data['secondname'] . '
                        </a></h4>



                        <div class="nicdark_space20"></div>
                        ';
            if (strlen($data['education']) > 200)
                $summary = substr($data['education'], 0, strrpos(substr($data['education'], 0, 200), ' ')) . '...';
            echo '
                        <p>
                            ' . $summary . '
                        </p>

                        <div class="nicdark_space20"></div>
                        <div style="margin-left:10%; display:inline;"></div>
                        <a title="CURRICULUM" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_blue_light nicdark_radius_circle white"><i
                            class="icon-download-outline"></i></a>
                            <div style="margin-left:10%; display:inline;"></div>
                            <a title="DOCUMENTS" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_blue_light nicdark_radius_circle white"><i
                            class="icon-attach-outline"></i></a>
                            <div style="margin-left:10%; display:inline;"></div>
                            <a title="COURSES" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_blue_light nicdark_radius_circle white"><i
                            class="icon-mic-outline"></i></a>

                    </div>
                </div>

            </div>

        </div>';
        endforeach; ?>


    </div>
    <!--end nicdark_container-->

</section>


<!--start section-->
<section class="nicdark_section">


    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">
            <div class="nicdark_textevidence center">
                <a href="blog-masonry.html"
                   class="nicdark_zoom nicdark_btn nicdark_bg_blue_light medium nicdark_shadow nicdark_radius white nicdark_margin10"><i
                        class="icon-th-outline"></i> Все психологи</a>
            </div>
        </div>


    </div>
    <!--end nicdark_container-->


</section>
<!--end section--><!--end-->


<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">
            <h1 class="subtitle">Мероприятия</h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue_light nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <?php foreach ($eventsList as $index => $data):
            $string = strip_tags($data['schedule']);
            if (strlen($string) > 100) {
                $stringCut = substr($string, 0, 100);
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
            }

            $template = '<div class="grid grid_3">

            <div class="nicdark_archive1 events_top_windows nicdark_radius nicdark_shadow">


                <a href="single-event.html"
                   class="nicdark_btn nicdark_bg_blue_custom white medium nicdark_radius nicdark_absolute_left">
                   21<br/>
                    <small>DEC</small>

                </a>

                <img alt="" src="' . Url::base() . '/img/events/img1.jpg">

                <div class="nicdark_textevidence nicdark_bg_blue_custom">
                <div class="white_mask">
                    <h4 class="white nicdark_margin20">' . $data['name'] . '</h4>
                </div>
                </div>

                <div class="nicdark_margin10">
                <div style="min-height:40px;">
                    <h5><i class="icon-pin-outline"></i>' . $data['address'] . '</h5>
                    </div>

                    <h5>
                        <p style="padding:0px;">' . nl2br($string) . '</p>
                    </h5>

                    <div class="nicdark_space10"></div>


                    <p>' . substr($data['about'], 0, 100) . '</p>
                    <div class="nicdark_space20"></div>
                    <a href="' . Url::base() . '/trainings/description?id=' . $data['id'] . '"
                       class=" nicdark_press nicdark_btn nicdark_bg_blue_light white nicdark_radius medium">
                       Подробнее</a>
                </div>
            </div>
        </div>';
            echo $template;
        endforeach;
        ?>


    </div>
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">
            <div class="nicdark_textevidence center">
                <a href="blog-masonry.html"
                   class="nicdark_zoom nicdark_btn nicdark_bg_blue_light medium nicdark_shadow nicdark_radius white nicdark_margin10"><i
                        class="icon-th-outline"></i> Все мероприятия</a>
            </div>
        </div>

    </div>

</section>


</section>
<!--end section--><!--end-->

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">
            <h1 class="subtitle">Последние новости</h1>

            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue_light nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <!--<div class="nicdark_masonry_btns">
            <div class="nicdark_margin10">
                <a data-filter="*"
                   class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">ALL</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".educational"
                   class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">EDUCATIONAL</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".excursions"
                   class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">EXCURSIONS</a>
            </div>
            <div class="nicdark_space10"></div>
        </div>-->


        <!--start nicdark_masonry_container-->
        <div class="nicdark_masonry_container">


            <div class="grid grid_3 nicdark_masonry_item educational">
                <div class="nicdark_archive1 news_top_windows nicdark_radius">

                    <a href="single-post-right-sidebar.html"
                       class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue_custom white medium nicdark_radius_circle nicdark_absolute_left"><i
                            class="icon-link-outline"></i></a>

                    <img alt="" src="img/blog/img1.jpg">

                    <div class="nicdark_margin20">
                        <h4>OUR SCHOOL ANNIVERSARY</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span
                                class="nicdark_bg_blue_light nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor
                            sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                    </div>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html"
                       class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i
                            class="icon-link-outline"></i></a>

                    <img alt="" src="img/blog/img1.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">OUR SCHOOL ANNIVERSARY</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span
                                class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor
                            sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i
                                class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium blue"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html"
                       class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i
                            class="icon-link-outline"></i></a>

                    <img alt="" src="img/blog/img1.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">OUR SCHOOL ANNIVERSARY</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span
                                class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor
                            sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i
                                class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium blue"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html"
                       class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i
                            class="icon-link-outline"></i></a>

                    <img alt="" src="img/blog/img1.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">OUR SCHOOL ANNIVERSARY</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span
                                class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor
                            sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i
                                class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium blue"></i>

                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                    <a href="single-post-right-sidebar.html"
                       class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i
                            class="icon-link-outline"></i></a>

                    <img alt="" src="img/blog/img1.jpg">

                    <div class="nicdark_margin20">
                        <h4 class="white">OUR SCHOOL ANNIVERSARY</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span
                                class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor
                            sit amet, consectetur adip iscing elit psum dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-post-right-sidebar.html" class="white nicdark_btn"><i
                                class="icon-doc-text-1 "></i> Read More</a>
                    </div>

                    <i class="icon-camera-outline nicdark_iconbg right medium blue"></i>

                </div>
            </div>


        </div>
        <!--end nicdark_masonry_container-->
        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>
<!--end section-->
