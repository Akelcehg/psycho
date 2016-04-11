<?php

use app\components\TranslitWidget;
use yii\helpers\Url;
use yii\widgets\ListView;
use \app\models\Image;

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
            <div class="col-md-12">
                <?php $widget = ListView::begin([
                    'dataProvider' => $dataProvider,
                    'summary' => '',
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => function ($model, $key, $index, $widget) {

                        $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['name']))]) . '-' . $model['id'];

                        $content = '<div class="row">
                                    <div class="col-md-5">
                                    <div class="thumb">
                                        <a href="' . Url::base() . '/school/' . $link . '">
                                            <img class="img-responsive" src="' . Image::getSchoolPhoto($model['id']) . '" alt="">
                                        </a>
                                    </div>

                                    </div>
                                    <div class="col-md-7">
                                    <div class="text">

                                            <h2><a href="' . Url::base() . '/school/' . $link . '">' . $model['name'] . '</a></h2>

                                        <div class="data-tags">
                                            <p>' . $model['created_at'] . '</p>
                                            <!-- <p>' . $model['qualification_levels'] . '</p> --->
                                        </div>
                                        <p>' . $model['description'] . '</p>
                                        <a href="' . Url::base() . '/school/' . $link . '" class="btn-style">
                                            Подробнее о школе
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="gap"></div>
                                ';
                        return $content;
                    },
                ]) ?>


                <?php echo $widget->renderItems(); ?>
                <div class="pagination">
                    <?= $widget->renderPager(); ?>
                </div>
            </div>

        </div>

    </div>


</div>

</div>