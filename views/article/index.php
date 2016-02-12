<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use app\models\Article;

?>


<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">JULIETTE LIGHT</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">KNOW JULIE OUR ART TEACHER</h3>
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

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space20"></div>

        <div class="container">

            <div class="row">


                <div class="col-md-12">

                    <div class="col-md-8">

                        <?= ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemOptions' => ['class' => 'item'],
                            'summary' => '',
                            'itemView' => function ($model, $key, $index, $widget) {
                                $a = new Article();
                                $plainBody = strip_tags($model['text']);
                                $abrvBody = strlen($plainBody) > 500 ? substr($plainBody, 0, 500) : $plainBody;
                                return '

                            <h2>
                                <a href="#">' . $model['title'] . '</a>
                            </h2>
                            <p class="lead">
                                by <a href="index.php">' . Yii::$app->user->identity['username'] . '</a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span> Posted on ' . $model['created_at'] . '</p>
                            <div class="nicdark_space10"></div>
                            <div>
                                <img class="img-responsive" src="' . $a->catch_that_image($model['text']) . '"/>
                            </div>
                            <div class="article-list-div">
                            ' . $abrvBody . '
                            </div>
                            <div class="nicdark_space10"></div>
                            <a class="btn btn-primary" href="/psycho/article/view?id=' . $model["id"] . '">Read More <span
                                    class="glyphicon glyphicon-chevron-right"></span></a>

                            <hr>
                            ';
                            },
                        ]) ?>

                    </div>

                    <div class="col-md-4">

                        <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                            <div class="nicdark_textevidence nicdark_bg_yellow nicdark_radius_top">
                                <?php $form = ActiveForm::begin([
                                    'action' => ['index'],
                                    'method' => 'get',
                                ]); ?>
                                <h4 class="white nicdark_margin20">Поиск</h4>
                                <i class="icon-search-outline nicdark_iconbg right medium yellow"></i>
                            </div>

                            <div class="nicdark_margin20">
                                <?= $form->field($searchModel, 'text')->input('text', [
                                    'class' => 'nicdark_bg_white nicdark_radius small subtitle',
                                    'placeholder' => 'KEYWORD',
                                    'size' => "200"
                                ])->label(false) ?>
                                <div class="nicdark_space20"></div>
                                <div class="form-group">
                                    <?= Html::submitInput('Искать', ['class' => 'nicdark_btn nicdark_bg_yellow medium nicdark_shadow nicdark_radius white']) ?>
                                </div>
                            </div>
                        </div>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                            <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius_top">
                                <h4 class="white nicdark_margin20">TAG</h4>
                                <i class="icon-tags-1 nicdark_iconbg right medium orange"></i>
                            </div>
                            <div class="nicdark_margin10">
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                                <a href="#"
                                   class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                            </div>
                        </div>
                        <div class="nicdark_space20"></div>

                    </div>
                </div>


            </div>


            <div class="nicdark_space20"></div>

        </div>
    </div>


</section>