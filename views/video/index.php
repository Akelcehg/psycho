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
                    <div class="widget search">
                        <h2><i class="fa fa-search"></i>Искать видео</h2>

                        <p><input type="text" class="form-control" placeholder="Введите слова для поиска"></p>
                        <button class="btn-style">Искать</button>
                    </div>
                    <div class="widget widget-tags">
                        <h2>Выбрать видео по категории</h2>
                        <ul>
                            <?php foreach ($videosCategories as $category): ?>
                                <li><a href="?video=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
                <!--SIDEBAR END-->
            </div>
        </div>

    </div>


</div>
