<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\helpers\Url;
use app\models\Image;

?>

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-teachers-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">OUR TEACHERS</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">KNOW OUR BEST EDUCATORS</h3>
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

        <div class="nicdark_space10"></div>

        <div class="grid grid_4">

            <div
                class="nicdark_archive1 nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">
                    <a href="#"
                       class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_bluedark medium nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i>1</i></a>

                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">PEDAGOGICAL STUDY</h4>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Lorem ipsum dolor sit amet,
                            consec adipiscing elit</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="grid grid_4">
            <div
                class="nicdark_archive1 nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">
                    <a href="#"
                       class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_greendark medium nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i>2</i></a>

                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">ASSISTANCE TO DISABLED</h4>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Lorem ipsum dolor sit amet,
                            consec adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid_4">
            <div
                class="nicdark_archive1 nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">
                    <a href="#"
                       class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_yellowdark medium nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i>3</i></a>

                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">MONTESSORI TEACHING</h4>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Lorem ipsum dolor sit amet,
                            consec adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->

</section>


<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">ORANGE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 3-6 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        <?= ListView::widget([
            'dataProvider' => $psychologistsTopDataProvider,
            'summary' => '',
            'itemView' => function ($data, $key, $index, $widget) {
                return '<div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <a href="' . Url::base() . '/psychologists/profile?id=' . $data["user_id"] . '">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="img-responsive" src="' . Image::getUserMediumProfilePhoto($data["user_id"]) . '">
                    <!-- <img alt="" class="nicdark_radius_left nicdark_opacity" src=".Url::base()./img/team/img5.jpg' . '"> -->
                </div>
                </a>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="' . Url::base() . '/psychologists/profile?id=' . $data["user_id"] . '">
                        ' . $data['firstname'] . $data['lastname'] . $data['secondname'] . '
                        </a></h4>
                        <div class="nicdark_space20"></div>

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
            },
        ]); ?>


        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->

</section>


<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12 nicdark_shadow nicdark_radius nicdark_relative" style="border: 1px solid #318fff;">

            <a href="#"
               class="nicdark_displaynone_iphoneland nicdark_displaynone_iphonepotr nicdark_btn_icon nicdark_bg_green  extrabig nicdark_radius_left white nicdark_absolute"><i
                    class="icon-search-2"></i></a>

            <div class="nicdark_textevidence">
                <div
                    class="nicdark_margin1820 nicdark_marginleft100 nicdark_marginleft20_iphoneland nicdark_marginleft20_iphonepotr">


                    <?php $form = ActiveForm::begin([
                        'action' => ['/psychologists'],
                        'method' => 'get',
                    ]); ?>

                    <?= $form->field($searchModel, 'price') ?>

                    <div
                        class="nicdark_margin1820 nicdark_marginleft100 nicdark_marginleft20_iphoneland nicdark_marginleft20_iphonepotr">
                        <?php foreach($allProblems as $problem): ?>

                            <input type="checkbox" value="<?=$problem['id']?>" name="problems[]" /><?=$problem['name']?>

                        <?php endforeach; ?>
                        <input type="hidden" name="problems[]" />
                    </div>


                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>


                    <!--<input class="nicdark_btn fullwidth nicdark_bg_green medium nicdark_shadow nicdark_radius white"
                           type="submit" value="SEARCH">-->

                </div>
            </div>
        </div>
    </div>
</section>

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="grid grid_12">
            <h1 class="subtitle greydark">BLUE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 0-3 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        <!------------------------------------------------------------------------------------------------------------->
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'itemView' => function ($data, $key, $index, $widget) {
                return '<div class="grid grid_2">
                                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center">
                                <a href="' . Url::base() . '/psychologists/profile?id=' . $data['user_id'] . '">
                                    <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                                        <h4 class="white nicdark_margin10">' .
                $data["firstname"] . $data["lastname"] . $data["secondname"] . '</h4>
                                    </div>
                                    <img class="nicdark_opacity" alt="" src="' . Image::getUserMediumProfilePhoto($data["user_id"]) . '">

                                    <div class="nicdark_textevidence nicdark_bg_blue" style="min-height:150px;">
                                        <h5 class="white nicdark_margin5" style="text-align:left;">
                                            Телестно Ориентированное Чтототерапия
                                        </h5>
                                    </div>
                                    </a>
                                </div>
                            </div>';
            },
        ]); ?>


    </div>
    <!--end nicdark_container-->

</section>

<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <a class="nicdark_disable_floatright_iphoneland nicdark_disable_floatright_iphonepotr nicdark_btn nicdark_bg_green medium right nicdark_shadow nicdark_radius white nicdark_press"><i
                    class="icon-left-open-outline"></i>&nbsp;&nbsp;&nbsp;PREV</a>
        </div>
        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <a class=" nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press">NEXT&nbsp;&nbsp;&nbsp;<i
                    class="icon-right-open-outline"></i></a>
        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</div>
