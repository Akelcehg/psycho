<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

?>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog">
                    <!--BLOG START-->
                    <div class="blog-contant">
                        <h2><a href="#"><?= $model['title'] ?></a></h2>
                        <div class="blog-tags">
                            Filed in: <a href="#">Online Courses</a> / Tags: <a href="#">Fashion</a>, <a href="#">Learning</a>,
                            <a href="#">webdesign</a>, <a href="#">Course</a>
                        </div>
                        <!--<div class="thumb">
                            <a href="#"><img src="../images/blog-img.jpg" alt=""></a>
                        </div>-->
                        <div class="text">
                            <?= $model['text'] ?>
                        </div>
                        <div class="blog-comments">
                            <a href="#"><i class="fa fa-user"></i>David</a>
                            <a href="#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>
                            <a class="pull-right" href="#"><i class="fa fa-comment"></i>35 Comments</a>
                        </div>
                    </div>
                    <!--BLOG END-->
                    <!--ADMIN START-->
                    <div class="admin">
                        <div class="thumb">
                            <a href="#"><img src="../images/admin.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <div class="social-icons">
                                <a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <h2><a href="#">Administrator</a></h2>
                            <p class="profession">Photographer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nulla metus. Interdum
                                et malesuada fames ac ante ipsum primis in faucibus. Phasellus tristique aliquet semper.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos. </p>
                        </div>
                    </div>
                    <!--ADMIN END-->
                    <!--COMMENTS START-->
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

                    <div class="leave-reply">
                        <div class="col-md-12">
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

        </div>

        <div class="gap"></div>
    </div>

</div>
