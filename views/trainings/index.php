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


<section class="nicdark_section">
    <div class="nicdark_space40"></div>
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">
            <h1 class="subtitle greydark">Тренинги</h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'itemView' => function ($data, $key, $index, $widget) {
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

                if ($index + 1 == $widget->dataProvider->count) $template .= '<div align="center" style="display: block; block; width: 100%; clear:both"></div>';
                return $template;
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