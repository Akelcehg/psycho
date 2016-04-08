<?php

use yii\widgets\ListView;
use app\components\TranslitWidget;
use yii\helpers\Url;

?>
<div style="margin-bottom: 25px;"></div>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="row">
                    <!--<div class="videos">
                        <a href="/mify-o-psihologah-2.html"><img src="	http://img.youtube.com/vi/CWUeglOYVAw/default.jpg" alt="видео психология"></a>
                        <a href="/mify-o-psihologah-2.html" title="Мифы о психологах. Часть 2">Мифы о психологах. Часть 2</a>
                    </div>-->

                    <div class="latest-news">

                        <?php $widget = ListView::begin([
                            'dataProvider' => $dataProvider,
                            'summary' => '',
                            'itemOptions' => ['class' => 'item'],
                            'itemView' => function ($model, $key, $index, $widget) {

                                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['id'];

                                $content = '<div class="news-contant">
                                                <div class="thumb">
                                                    <a href="' . Url::base() . '/video/' . $link . '">
                                                        <img src="' . $model['img_link'] . '"
                                                             alt="видео психология"/>
                                                    </a>
                                                </div>
                                                <div class="text">
                                                    <h2>' . $model['title'] . '</h2>
                                                    <p>' . $model['description'] . '</p>
                                                    <a href="' . Url::base() . '/video/' . $link . '" class="btn-style">Смотреть видео</a>
                                                </div>
                                            </div>';
                                return $content;
                            },
                        ]) ?>

                        <?php echo $widget->renderItems(); ?>

                    </div>

                </div>


                <div class="pagination">
                    <?= $widget->renderPager(); ?>
                </div>

            </div>
            <div class="col-md-4">
                <!--SIDEBAR START-->
                <div class="sidebar">
                    <!--SEARCH WIDGET START-->
                    <div class="widget widget-search-course">
                        <h2><i class="fa fa-search"></i> Search Course</h2>

                        <p><input type="text" class="input-block-level" placeholder="Search by Keyword"></p>
                        <button class="btn-style">Search</button>
                    </div>
                    <div class="widget widget-tags">
                        <h2>Papular Tags</h2>
                        <ul>
                            <li><a href="#">resource</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">art</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Template</a></li>
                            <li><a href="#">resource</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">art</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Template</a></li>
                        </ul>
                    </div>

                </div>
                <!--SIDEBAR END-->
            </div>
        </div>

    </div>


</div>
