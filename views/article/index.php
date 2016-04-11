<?php

use app\components\TranslitWidget;
use app\models\Article;
use yii\widgets\ListView;
use yii\helpers\Url;

?>

<div style="margin-top: 25px;"></div>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog">

                    <?php $widget = ListView::begin(array(
                        'dataProvider' => $dataProvider,
                        'summary' => '',
                        'itemOptions' => array('class' => 'item'),
                        'itemView' => function ($model, $key, $index, $widget) {
                            $a = new Article();
                            $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['id'];
                            $plainBody = strip_tags($model['text']);
                            $abrvBody = strlen($plainBody) > 500 ? substr($plainBody, 0, 500) : $plainBody;
                            $firstImage = $a->catch_that_image($model['text']);

                            $content = '<div class="blog-contant">
                            <h2><a href="' . Url::base() . '/article/' . $link . '">' . $model["title"] . '</a></h2>
                            <div class="blog-tags">
                                Filed in: <a href="#">Online Courses</a> / Tags: <a href="#">Fashion</a>, <a href="#">Learning</a>,
                                <a href="#">webdesign</a>, <a href="#">Course</a>
                            </div>';

                            if ($firstImage)
                                $content .= '<div class="thumb" >

                                <div class="col-md-3" >
                                    <a href="' . Url::base() . '/article/view/' . $link . '">
                                        <img class="img-responsive" src = "' . $a->catch_that_image($model['text']) . '" />
                                    </a>
                                </div >
                            </div >';

                            $content .= '<div class="text">' . $abrvBody . '
                                <a href="' . Url::base() . '/article/' . $link . '" class="btn-style">Читать</a>
                            </div>
                            <div class="blog-comments">
                                <a href="#"><i class="fa fa-user"></i>' . Yii::$app->user->identity['email'] . '</a>
                                <a href="#"><i class="fa fa-calendar"></i>' . Yii::t('app', '{0,date}', strtotime($model['created_at'])) . '</a>
                                <!-- <a href="#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a> -->
                            </div>
                        </div>';
                            return $content;
                        },
                    )) ?>

                    <?php echo $widget->renderItems(); ?>

                </div>
                <div class="pagination">
                    <?= $widget->renderPager(); ?>
                </div>

            </div>
            <div class="col-md-4">

                <div class="sidebar">

                    <div class="widget search">
                        <h2><i class="fa fa-search"></i>Искать статью</h2>

                        <p><input type="text" class="form-control" placeholder="Введите слова для поиска"></p>
                        <button class="btn-style">Искать</button>
                    </div>
                    <div class="widget widget-course-categories">
                        <h2>Выбрать статью по категории</h2>
                        <ul>

                            <?php foreach ($articleCategories as $category): ?>
                                <li><a href="?article=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="widget widget-papular-post">
                        <h2>Популярные статьи</h2>
                        <ul>
                            <?php foreach ($popularPosts as $post): ?>
                                <?php
                                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($post['title']))]) . '-' . $post['id'];
                                ?>
                                <li style="border-bottom: solid 2px #C7012E;">
                                    <a href="<?= Url::base() . '/article/' . $link ?>">
                                        <h4><?= $post['title'] ?></h4>
                                    </a>
                                    <div class="text">
                                        <p><i class="fa fa-calendar"></i> <?= Yii::t('app', '{0,date}', strtotime($post['created_at'])) ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="gap"></div>

</div>
