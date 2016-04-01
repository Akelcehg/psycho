<?php

use app\components\TranslitWidget;
use yii\helpers\Url;
use yii\widgets\ListView;

?>

<div class="page-heading">
    <div class="container">
        <h2>Student Profile</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>

<div class="contant">
    <div class="container">

        <div class="latest-news">
            <?php $widget = ListView::begin([
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {

                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['name']))]) . '-' . $model['id'];
                    $content = ' <div class="news-contant">
                                    <div class="thumb">
                                        <a href="' . Url::base() . '/school/' . $link . '">
                                            <img src="images/news-thumb.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="text">

                                            <h2><a href="' . Url::base() . '/school/' . $link . '">' . $model['name'] . '</a></h2>

                                        <div class="data-tags">
                                            <p>Posted on July 28, 2014</p>
                                            <p>' . $model['qualification_levels'] . '</p>
                                        </div>
                                        <p>' . $model['description'] . '</p>
                                        <a href="' . Url::base() . '/school/' . $link . '" class="btn-style">
                                            Подробнее о школе
                                        </a>
                                    </div>
                                </div>

                                ';
                    return $content;
                },
            ]) ?>


            <?php echo $widget->renderItems(); ?>
        </div>
        <div class="pagination">
            <?= $widget->renderPager(); ?>
        </div>
    </div>

</div>