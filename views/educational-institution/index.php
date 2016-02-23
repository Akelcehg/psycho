<?php

use yii\widgets\ListView;
use yii\helpers\Url;

?>

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">PRICE</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">OUR PACKAGES AT THE BEST PRICE</h3>
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

<section class="nicdark_section nicdark_bg_yellow nicdark_shadow">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div
            class="grid grid_4 nomargin nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow nicdark_radius_left">

            <div class="nicdark_focus">
                <div class="nicdark_margin10">
                    <h4 class="white">01 · CHECK THE RANGE OF AGE</h4>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lroin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec
                        arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam Nam elementum quam</p>
                </div>
            </div>

        </div>

        <div
            class="grid grid_4 nomargin nicdark_bg_orange nicdark_bg_orangedark_hover nicdark_transition nicdark_shadow">

            <div class="nicdark_focus">
                <div class="nicdark_margin10">
                    <h4 class="white">02 · CHOOSE FULL OR HALF TIME</h4>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lroin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec
                        arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam Nam elementum quam</p>
                </div>
            </div>
        </div>

        <div
            class="grid grid_4 nomargin nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow nicdark_radius_right">

            <div class="nicdark_focus">
                <div class="nicdark_margin10">
                    <h4 class="white">03 · ASK A FREE QUOTATION</h4>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lroin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec
                        arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam Nam elementum quam</p>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->

</section><!--start section-->


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">BEST SERVICES</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">WE ALSO OFFER ADDITIONAL SERVICES</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>



        <?= ListView::widget([
            'dataProvider' => $educationsTop,
            'summary' => '',
            'itemView' => function ($data, $key, $index, $widget) {
                return '
                <div class="grid grid_3">

            <div class="nicdark_archive1 center nicdark_bg_blue nicdark_shadow nicdark_radius">


                <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                    <h4 class="white nicdark_margin20">Название учебного заведения</h4>
                </div>


                <div style="background:url(img/prices/img1.jpg); background-size:cover;" class="nicdark_archive1">


                    <div class="nicdark_space100"></div>
                    <div class="nicdark_space100"></div>

                    <!--<div class="nicdark_space40"></div>

                    <h3 class="white subtitle">$ 123.00</h3>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <h4 class="white subtitle">WEEKLY</h4>

                    <div class="nicdark_space40"></div>-->


                </div>

                <div class="nicdark_textevidence nicdark_bg_grey">
                    <div class="nicdark_margin20">
                        <ul class="nicdark_list border">
                            <li class="nicdark_border_grey">
                                <p>Lorem Ipsum Dolor Sit Amet Cons</p>
                                <div class="nicdark_space10"></div>
                            </li>
                            <li class="nicdark_border_grey">
                                <div class="nicdark_space10"></div>
                                <p>Lorem Ipsum Dolor Sit Amet Cons</p>
                                <div class="nicdark_space10"></div>
                            </li>
                            <li class="nicdark_border_grey">
                                <div class="nicdark_space10"></div>
                                <p>Lorem Ipsum Dolor Sit Amet Cons</p>
                                <div class="nicdark_space10"></div>
                            </li>
                            <li class="nicdark_border_grey">
                                <div class="nicdark_space10"></div>
                                <p>Lorem Ipsum Dolor Sit Amet Cons</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="#" class="white nicdark_btn nicdark_bg_blue medium nicdark_radius_bottom">Подробнее</a>

            </div>

        </div>
                ';
            },

            'pager' => [
                'firstPageLabel' => 'Первая',
                'lastPageLabel' => 'Последняя',
                'prevPageLabel' => '<i class="icon-left-open-outline"></i>',
                'nextPageLabel' => '<i class="icon-right-open-outline"></i>',
                'maxButtonCount' => 3,
            ],
        ]); ?>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>


<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'itemView' => function ($data, $key, $index, $widget) {
                return ' <div class="grid grid_4 nicdark_relative">

            <a href="' . Url::base() . '/educational-institution/description?id=' . $data['id'] . '">
                <div class="nicdark_btn_iconbg nicdark_bg_yellow nicdark_absolute extrabig nicdark_shadow nicdark_radius"
                style="background:url(img/prices/img4.jpg); background-size:cover;">
                        <i class="icon-leaf-1 nicdark_iconbg left big white"></i>
                </div>
            </a>

            <div class="nicdark_activity nicdark_marginleft100">
                <a href="' . Url::base() . '/educational-institution/description?id=' . $data['id'] . '">
                    <h4>' . $data['name'] . '</h4>
                </a>
                <div class="nicdark_space20"></div>
                <div style="height:50px;">
                <p style="word-break: break-word;">' . substr($data['description'], 0, 50) . '</p>
                </div>
                <div class="nicdark_space40"></div>
                <a href="' . Url::base() . '/educational-institution/description?id=' . $data['id'] . '" class="nicdark_btn grey"><i class="icon-right-open-outline"></i>Подробнее</a>
                <div class="nicdark_space20"></div>
            </div>

        </div>';
            },

            'pager' => [
                'firstPageLabel' => 'Первая',
                'lastPageLabel' => 'Последняя',
                'prevPageLabel' => '<i class="icon-left-open-outline"></i>',
                'nextPageLabel' => '<i class="icon-right-open-outline"></i>',
                'maxButtonCount' => 3,
            ],
        ]); ?>

    </div>

    <div class="nicdark_space50"></div>

</section>