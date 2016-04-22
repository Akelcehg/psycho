<?php

use app\components\TranslitWidget;
use yii\helpers\Url;
use yii\widgets\ListView;

?>

<!--<div class="page-heading">
    <div class="container">
        <h2>Search Result Добавить Видео внизу и сделать кнопку для перехода на его статьи</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>-->

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar">

                <div class="widget course-tutor">
                    <div>
                        <img class="img-responsive" src="<?= $logo ?>" alt="">
                    </div>
                    <div class="text">
                        <div class="gap"></div>
                        <p class="tutor-name color"><?= $profile['firstname'] . ' ' . $profile['lastname'] ?></p>
                        <!--<p>Senior Lecturer - Marketing</p>-->
                        <p><i class="fa fa-map-marker"></i> <?= $city_name['name'] ?></p>
                        <?php if ($profile['has_diplom']){?>
                        <a href="#" data-toggle="tooltip" title="Данный психолог подтвердил свой диплом">
                            <img src="<?= Url::base() ?>/images/diploma.png" class="img-responsive"/>
                        </a>
                        <?php } ?>
                        <!--<p><i class="fa fa-link"></i> <a href="#" class="color">jackymichaels.com</a></p>
                        <p><i class="fa fa-clock-o"></i> Joind June 2005</p>-->
                        <!--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, </p>-->
                    </div>

                </div>

            </div>
            <div class="col-md-9">

                <div class="gap"></div>
                <div class="tutor-detail-section">


                    <div class="tutor-duration" style="background-color: white;">
                        <div class="duration" style="margin-top: 20px;">

                            <div class="share-course">

                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>


                        </div>
                        <div class="course-price">
                            <p>Цена сеанса</p>
                            <p><?= $profile['price'] ?> грн.</p>
                        </div>
                    </div>
                    <div class="text">

                        <div class="tabs">
                            <div class="row">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#about">О психологе</a></li>
                                    <li><a data-toggle="tab" href="#video">Видео психолога</a></li>
                                    <li><a data-toggle="tab" href="#article">Статьи психолога</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="about" class="tab-pane fade active in">
                                        <h2>Образование</h2>
                                        <p><?= nl2br($profile['education']) ?></p>
                                        <h2>Опыт работы</h2>
                                        <p><?= nl2br($profile['experience']) ?></p>
                                    </div>


                                    <div id="video" class="tab-pane fade">

                                        <div class="row">


                                            <?php $videoWidget = ListView::begin([
                                                'dataProvider' => $videoDataProvider,
                                                'summary' => '',
                                                'itemOptions' => ['class' => 'item'],
                                                'itemView' => function ($model, $key, $index, $widget) {

                                                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['id'];
                                                    $abrvBody = strlen($model['description']) > 30 ? substr($model['description'], 0, 30) . '...' : $model['description'];
                                                    return ' <div class="col-md-3">
                                                                <div class="f-stories">
                                                                    <div class="thumb">
                                                                        <a href="' . Url::base() . '/video/' . $link . '">
                                                                            <img src="' . $model['img_link'] . '" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h4>' . $abrvBody . '</h4>
                                                                        <a href="' . Url::base() . '/video/' . $link . '" style="text-align:center;">Смотреть</a>
                                                                    </div>
                                                                </div>
                                                            </div>';
                                                },
                                            ]) ?>

                                            <?php echo $videoWidget->renderItems(); ?>

                                        </div>

                                        <div class="pagination">
                                            <?= $videoWidget->renderPager(); ?>
                                        </div>
                                    </div>

                                    <div id="article" class="tab-pane fade">

                                        <?php $articleWidget = ListView::begin([
                                            'dataProvider' => $articleDataProvider,
                                            'summary' => '',
                                            'itemOptions' => ['class' => 'item'],
                                            'itemView' => function ($model, $key, $index, $widget) {

                                                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['id'];
                                                $plainBody = strip_tags($model['text']);
                                                $abrvBody = strlen($plainBody) > 500 ? substr($plainBody, 0, 500) . '...' : $plainBody;

                                                return '<div id="postlist">
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="text-center">
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h3 class="pull-left">' . $model["title"] . '</h3>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <h4 class="pull-right">
                                                                                        <small>
                                                                                        ' . $model['created_at'] . '
                                                                                        </small>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel-body">
                                                                    ' . $abrvBody . '
                                                                     <!-- <a href="' . Url::base() . '/article/' . $link . '" class="btn-style" style="float: right;">Читать</a> -->
                                                                    </div>
                                                                   <div class="blog-comments">
                                <a href="#"><i class="fa fa-user"></i>user@gmail.com</a>
                                <a href="#"><i class="fa fa-calendar"></i>13 апр. 2016 г.</a>
                                <!-- <a href="#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a> -->
                                <a href="' . Url::base() . '/article/' . $link . '" class="btn-style pull-right" style="color:white;">Читать</a>
                            </div>

                                                                </div>

                                                            </div>';
                                            },
                                        ]) ?>

                                        <?php echo $articleWidget->renderItems(); ?>


                                        <div class="pagination">
                                            <?= $articleWidget->renderPager(); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!--                  <h2>My Biography</h2>
                                              <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit
                                                  nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                                  hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                                  mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.
                                                  hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id,
                                                  mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec u
                                                  In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In
                                                  nisi neque, aliquet vel</p>-->

                            <!--                      <div class="row">
                                                      <div class="col-md-3"><h2>Пробелмы</h2>

                                                          <ul style="list-style: none;">
                                                              <li style="display: inline;">

                                                                  <i class="fa fa-angle-double-right text-primary"></i>
                                                                  <p style="display: inline; word-wrap: break-word;">IntroductionIntr oduction
                                                                      Introduc tionIntro duction1</p>

                                                              </li>
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Getting
                                                                      started
                                                                  </p>
                                                              </li>
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Setting up
                                                                      our page
                                                                  </p>
                                                              </li>
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Conclusion
                                                                  </p>
                                                              </li>

                                                          </ul>
                                                      </div>
                                                      <div class="col-md-3"><h2>Направления</h2>

                                                          <ul style="list-style: none;">
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Introduction
                                                                  </p>
                                                              </li>
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Getting
                                                                      started
                                                                  </p>
                                                              </li>
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Setting up
                                                                      our page
                                                                  </p>
                                                              </li>
                                                              <li>
                                                                  <p>
                                                                      <span class="fa fa-angle-double-right text-primary"></span> Conclusion
                                                                  </p>
                                                              </li>

                                                          </ul>
                                                      </div>
                                                  </div>-->

                            <!--<a href="#" class="enroll">Enroll Now</a>-->
                        </div>
                    </div>
                    <!--
                                    <div class="related-courses">
                                        <h2>Information System</h2>
                                        <ul>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img src="../images/related-course.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h4>Bachelor Of Nursing</h4>
                                                    <p>November 24, 2014</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img src="../images/related-course.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h4>Bachelor Of Nursing</h4>
                                                    <p>November 24, 2014</p>
                                                </div>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img src="../images/related-course.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h4>Bachelor Of Nursing</h4>
                                                    <p>November 24, 2014</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img src="../images/related-course.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h4>Bachelor Of Nursing</h4>
                                                    <p>November 24, 2014</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img src="../images/related-course.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h4>Bachelor Of Nursing</h4>
                                                    <p>November 24, 2014</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img src="../images/related-course.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h4>Bachelor Of Nursing</h4>
                                                    <p>November 24, 2014</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>-->

                </div>
            </div>
        </div>

    </div>
 