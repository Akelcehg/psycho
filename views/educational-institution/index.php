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
            <div class="col-md-9">
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

            <div class="col-md-3">

                <div class="sidebar">

                    <div class="widget widget-papular-post">
                        <h2>Популярные школы или чёто ещё ???? ?</h2>
                        <ul>
                            <li style="border-bottom: solid 2px #C7012E;">
                                <a href="/psycho/article/asdasdvcxzvxcv-9">
                                    <h4>asdasdvcxzvxcv</h4>
                                </a>
                                <!--<div class="thumb">
                                        <a href="<? /*= Url::base() . '/article/' . $link */ ?>">
                                            <img src="images/papular-post.jpg" alt="">
                                        </a>
                                    </div>-->
                                <div class="text">
                                    <p><i class="fa fa-calendar"></i> 6 апр. 2016 г.</p>
                                    <p style="margin-top: 10px;">xcvasxsdsas asd assd asd asa ads as as adasdasdas
                                        ...</p>
                                </div>
                            </li>
                            <li style="border-bottom: solid 2px #C7012E;">
                                <a href="/psycho/article/Testovaya_statyya-1">
                                    <h4>Тестовая статья</h4>
                                </a>
                                <!--<div class="thumb">
                                        <a href="<? /*= Url::base() . '/article/' . $link */ ?>">
                                            <img src="images/papular-post.jpg" alt="">
                                        </a>
                                    </div>-->
                                <div class="text">
                                    <p><i class="fa fa-calendar"></i> 1 апр. 2016 г.</p>
                                    <p style="margin-top: 10px;">das
                                    </p>
                                </div>
                            </li>
                            <li style="border-bottom: solid 2px #C7012E;">
                                <a href="/psycho/article/test2-3">
                                    <h4>test2</h4>
                                </a>
                                <!--<div class="thumb">
                                        <a href="<? /*= Url::base() . '/article/' . $link */ ?>">
                                            <img src="images/papular-post.jpg" alt="">
                                        </a>
                                    </div>-->
                                <div class="text">
                                    <p><i class="fa fa-calendar"></i> 6 апр. 2016 г.</p>
                                    <p style="margin-top: 10px;">xxxx
                                    </p>
                                </div>
                            </li>
                            <li style="border-bottom: solid 2px #C7012E;">
                                <a href="/psycho/article/xcadasdasdas-4">
                                    <h4>xcadasdasdas</h4>
                                </a>
                                <!--<div class="thumb">
                                        <a href="<? /*= Url::base() . '/article/' . $link */ ?>">
                                            <img src="images/papular-post.jpg" alt="">
                                        </a>
                                    </div>-->
                                <div class="text">
                                    <p><i class="fa fa-calendar"></i> 6 апр. 2016 г.</p>
                                    <p style="margin-top: 10px;">dasdas
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


        </div>

    </div>


</div>

</div>