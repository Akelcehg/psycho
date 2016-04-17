<?php

use app\components\TranslitWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use app\models\Image;

?>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="blog-contant">
                                <h2><a href="#"><?= $model['title'] ?></a></h2>

                                <!--<div class="thumb">
                                    <a href="#"><img src="../images/blog-img.jpg" alt=""></a>
                                </div>-->
                                <div class="text">
                                    <?= $model['text'] ?>
                                </div>
                                <div class="blog-comments">
                                    <!--<a href="#"><i class="fa fa-user"></i>David</a>-->
                                    <a href="#"><i class="fa fa-calendar"></i><?= $model['created_at'] ?>?</a>
                                    <!--<a class="pull-right" href="#"><i class="fa fa-comment"></i>35 Comments</a>-->
                                </div>
                            </div>
                            <!--<div class="admin">
                                <div class="thumb">
                                    <a href="#"><img src="../images/admin.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <div class="social-icons">
                                        <a href="#" data-toggle="tooltip" title="Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Linkedin"><i
                                                class="fa fa-linkedin"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Dribbble"><i
                                                class="fa fa-dribbble"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Google Plus"><i
                                                class="fa fa-google-plus"></i></a>
                                    </div>
                                    <h2><a href="#">Administrator</a></h2>
                                    <p class="profession">Photographer</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nulla metus.
                                        Interdum
                                        et malesuada fames ac ante ipsum primis in faucibus. Phasellus tristique aliquet
                                        semper.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. </p>
                                </div>
                            </div>-->


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="comments">
                                        <h2>Latest Comments</h2>

                                        <ul>

                                            <?php $widget = ListView::begin([
                                                'dataProvider' => $articleCommentsList,
                                                'summary' => '',
                                                'itemOptions' => ['class' => 'item'],
                                                'itemView' => function ($model, $key, $index, $widget) {

                                                    $content = '<li><div class="thumb">
                                                <a href="#"><img src="../images/comment-img.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h4><a href="#">John Doe</a></h4>
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

                                        <?= $form->field($articleComments, 'article_id')->input('hidden')->label(false) ?>
                                        <?= $form->field($articleComments, 'text')->textarea(['maxlength' => true, 'class' => 'input-block-level']) ?>

                                        <div class="form-group">
                                            <?= Html::submitButton('Создать', ['class' => 'btn-style']) ?>
                                        </div>

                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">


                            <!--TUTOR PROFILE START-->
                            <div class="widget course-tutor">
                                <div class="thumb">
                                    <img src="<?= Image::getUserMediumProfilePhoto($author['user_id']) ?>" alt="">
                                </div>
                                <div class="text">
                                    <p class="tutor-name color"><?= $author['firstname'] . ' ' . $author['lastname'] ?></p>
                                    <p><i class="fa fa-map-marker"></i> Germany</p>
                                    <p><i class="fa fa-link"></i> <a href="#" class="color">jackymichaels.com</a></p>
                                    <p><i class="fa fa-clock-o"></i> Joind June 2005</p>
                                </div>
                            </div>

                            <div class="widget widget-papular-post">
                                <h3>Популярные статьи</h3>
                                <ul>
                                    <?php foreach ($popularPosts as $post): ?>
                                        <?php
                                        $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($post['title']))]) . '-' . $post['id'];
                                        $plainBody = strip_tags($post['text']);
                                        $abrvBody = strlen($plainBody) > 50 ? substr($plainBody, 0, 50) . '...' : $plainBody;
                                        ?>
                                        <li style="border-bottom: solid 2px #C7012E;">
                                            <a href="<?= Url::base() . '/article/' . $link ?>">
                                                <h4><?= $post['title'] ?></h4>
                                            </a>
                                            <!--<div class="thumb">
                                        <a href="<? /*= Url::base() . '/article/' . $link */ ?>">
                                            <img src="images/papular-post.jpg" alt="">
                                        </a>
                                    </div>-->
                                            <div class="text">
                                                <p>
                                                    <i class="fa fa-calendar"></i> <?= Yii::t('app', '{0,date}', strtotime($post['created_at'])) ?>
                                                </p>
                                                <!--<p style="margin-top: 10px;"><? /*= $abrvBody */ ?></p>-->
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="gap"></div>
    </div>

</div>
