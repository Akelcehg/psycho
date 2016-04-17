<?php

use app\components\TranslitWidget;
use app\models\Image;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

?>


<div class="page-heading">
    <div class="container">
        <h2>Видео и прочая хрень</h2>
        <p>Описание чего то то там</p>
    </div>
</div>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog">
                    <!--BLOG START-->
                    <div class="blog-contant">

                        <h2><a href="#"><?= $model['title'] ?></a></h2>

                        <div class="blog-tags">
                            Filed in: <a href="#">Online Courses</a> / Tags: <a href="#">Fashion</a>, <a href="#">Learning</a>,
                            <a href="#">webdesign</a>, <a href="#">Course</a>
                        </div>
                        <div class="h_iframe">
                            <!-- a transparent image is preferable -->
                            <img class="ratio" src="../images/-text.png"/>
                            <iframe src="<?= $model['link'] ?>" frameborder="0" allowfullscreen></iframe>
                        </div>


                        <div class="text">

                        </div>

                        <div class="blog-comments">
                            <a href="#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="comments">
                                <h2>Latest Comments</h2>
                                <ul>
                                    <?php $widget = ListView::begin([
                                        'dataProvider' => $videosCommentsList,
                                        'summary' => '',
                                        'itemOptions' => ['class' => 'item'],
                                        'itemView' => function ($model, $key, $index, $widget) {
                                            $link = TranslitWidget::widget(['link' => $model['commentOwner']['firstname'] . '_' . $model['commentOwner']['lastname']]) . '-' . $model['commentOwner']['user_id'];
                                            $content = '<li>
                                                    <div class="thumb" style="width: 70px;">
                                                        <a href="' . Url::base() . '/psychologists/profile/' . $link . '">
                                                        <img class="img-responsive"
                                                        src="' . Image::getUserProfilePhoto($model['commentOwner']['user_id']) . '" alt=""></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="' . Url::base() . '/psychologists/profile/' . $link . '">
                                                        ' . $model['commentOwner']['firstname'] . ' ' . $model['commentOwner']['lastname'] . '
                                                        </a></h4>
                                                        <p class="date">' . $model['created_at'] . '</p>
                                                        <p>' . $model['text'] . '</p>
                                                    </div>

                                                </li>';
                                            return $content;
                                        },
                                    ]) ?>

                                    <?php echo $widget->renderItems(); ?>

                                </ul>
                                <div class="pagination default">
                                    <?= $widget->renderPager(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leave-reply">
                        <div class="col-md-12">
                            <div class="row">
                                <h2>Оставьте комментарий под статьёй</h2>


                                <?php $form = ActiveForm::begin(); ?>

                                <?= $form->field($videosComments, 'video_id')->input('hidden')->label(false) ?>
                                <?= $form->field($videosComments, 'text')->textarea(['maxlength' => true, 'class' => 'input-block-level']) ?>

                                <div class="form-group">
                                    <?= Html::submitButton('Создать', ['class' => 'btn-style']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="col-md-4">
                <!--SIDEBAR START-->
                <div class="sidebar">

                    <div class="widget widget-papular-post">
                        <div class="gap"></div>
                        <h2>Популярное видео</h2>
                        <ul>
                            <?php foreach ($popularVideos as $popularVideo): ?>
                                <?php

                                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($popularVideo['title']))]) . '-' . $popularVideo['id'];

                                ?>
                                <li>
                                    <h4><?= $popularVideo['title'] ?></h4>
                                    <div class="thumb">
                                        <a href="<?= $link ?>">
                                            <img src="<?= $popularVideo['img_link'] ?>"
                                                 alt="видео психология"/>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <p class="date"><span><?= $popularVideo['created_at'] ?></span></p>
                                        <!--<p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>-->
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                </div>
                <!--SIDEBAR END-->
            </div>
        </div>

    </div>

</div>
















