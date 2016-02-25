<?php

use yii\helpers\Url;
use app\models\Image;

?>

<section class="nicdark_section">

    <div class="tp-banner-container">
        <div class="nicdark_slide1" style="max-height: 650px; height: 650px;">

            <ul>

                <!--start first-->
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
                <!--end first-->


                <!--
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="LESSON">
                    <img src="img/slide/1st.jpg" alt="" data-lazyload="img/slide/1st.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                </li>
                -->

            </ul>

        </div>
    </div>

</section>
<section class="nicdark_section nicdark_margintop45_negative">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12 percentage nomargin">
            <div class="nicdark_textevidence center">
                <div
                    class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white subtitle"><a class="white" href="courses.php">COURSES</a></h2>
                        </div>
                        <i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
                    </div>
                </div>
                <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white subtitle"><a class="white" href="prices.php">PRICES</a></h2>
                        </div>
                        <i class="nicdark_zoom icon-money-1 nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
                    </div>
                </div>
                <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white subtitle"><a class="white" href="events.php">EVENTS</a></h2>
                        </div>
                        <i class="nicdark_zoom icon-music-2 nicdark_iconbg left extrabig orange nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
                    </div>
                </div>
                <div
                    class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right">
                    <div class="nicdark_textevidence">
                        <div class="nicdark_margin30">
                            <h2 class="white subtitle"><a class="white" href="teachers.php">TEACHERS</a></h2>
                        </div>
                        <i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
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

    <p class="blue_custom"><span class="white nicdark_dropcap nicdark_bg_yellow nicdark_radius nicdark_shadow">L</span>orem
        commodo
        lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet, rhoncus non
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
            <h1 class="subtitle greydark">Топ психологов</h1>
            <div class="nicdark_space10"></div>
        </div>


        <?php
        foreach ($topPsychologists as $index => $data):
            echo '<div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <a href="' . Url::base() . '/psychologists/profile?id=' . $data["user_id"] . '">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="' . Image::getUserMediumProfilePhoto($data["user_id"]) . '">
                </div>
                </a>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="' . Url::base() . '/psychologists/profile?id=' . $data["user_id"] . '">
                        ' . $data['firstname'] . $data['lastname'] . $data['secondname'] . '
                        </a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span>
                        </div>
                        <div class="nicdark_space50"></div>
                        <!--<div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum
                            dolor sit amet.</p>
                        <div class="nicdark_space20"></div> -->
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i>
                            Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i
                            class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i
                            class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i
                            class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
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
                   class="nicdark_zoom nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin10"><i
                        class="icon-th-outline"></i>&nbsp;&nbsp;&nbsp;VIEW MORE</a>
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
            <h1 class="subtitle greydark">OUR EVENTS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">DON'T MISS OUR EVENTS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <?php foreach ($eventsList as $index => $data):
            $string = strip_tags($data['schedule']);
            if (strlen($string) > 100) {
                $stringCut = substr($string, 0, 100);
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
            }

            $template = '<div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">

                <a href="single-event.html"
                   class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">21<br/>
                    <small>DEC</small>
                </a>

                <img alt="" src="' . Url::base() . '/img/events/img1.jpg">

                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">' . $data['name'] . '</h4>
                </div>

                <div class="nicdark_margin20">
                <div style="min-height:50px;">
                    <h5 class="white"><i class="icon-pin-outline"></i>' . $data['address'] . '</h5>
                    </div>
                    <div class="nicdark_space10"></div>
                    <h5 class="white">
                        <p style="padding:0px;color:white;">' . nl2br($string) . '</p>
                    </h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">' . substr($data['about'], 0, 100) . '</p>
                    <div class="nicdark_space20"></div>
                    <a href="' . Url::base() . '/trainings/description?id=' . $data['id'] . '"
                       class=" nicdark_press nicdark_btn nicdark_bg_greendark white nicdark_radius nicdark_shadow medium">
                       Подробнее</a>
                </div>
            </div>
        </div>';
            //if ($index + 1 == 4) $template .= '<div align="center" style="display: block; block; width: 100%; clear:both"></div>';
            echo $template;
        endforeach;
        ?>
        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR NEWS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FOLLOW OUR MOST IMPORTANT NEWS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="nicdark_masonry_btns">
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
        </div>


        <!--start nicdark_masonry_container-->
        <div class="nicdark_masonry_container">


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
