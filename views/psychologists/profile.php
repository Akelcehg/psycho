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
                    <div class="thumb">
                        <img src="<?= $logo ?>" alt="">
                    </div>
                    <div class="text">
                        <p class="tutor-name color"><?= $profile['firstname'] . ' ' . $profile['lastname'] ?></p>
                        <!--<p>Senior Lecturer - Marketing</p>-->
                        <p><i class="fa fa-map-marker"></i> <?= $city_name['name'] ?></p>
                        <!--<p><i class="fa fa-link"></i> <a href="#" class="color">jackymichaels.com</a></p>
                        <p><i class="fa fa-clock-o"></i> Joind June 2005</p>-->
                        <!--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, </p>-->
                    </div>


                    <div class="widget widget-papular-post">
                        <h2>Недавние статьи</h2>
                        <ul>
                            <?php foreach ($psychologistArticles as $post): ?>
                                <?php
                                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($post['title']))]) . '-' . $post['id'];
                                ?>
                                <li style="border-bottom: solid 2px #C7012E;">
                                    <a href="<?= Url::base() . '/article/' . $link ?>">
                                        <h4><?= $post['title'] ?></h4>
                                    </a>
                                    <div class="text">
                                        <p>
                                            <i class="fa fa-calendar"></i> <?= Yii::t('app', '{0,date}', strtotime($post['created_at'])) ?>
                                        </p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                </div>

            </div>
            <div class="col-md-9">

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
                                    <li><a data-toggle="tab" href="#about">О психологе</a></li>
                                    <li><a data-toggle="tab" href="#video">Видео психолога</a></li>
                                    <li class="active"><a data-toggle="tab" href="#article">Статьи психолога</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="about" class="tab-pane fade">
                                        <h2>Образование</h2>
                                        <p><?= nl2br($profile['education']) ?></p>
                                        <h2>Опыт работы</h2>
                                        <p><?= nl2br($profile['experience']) ?></p>
                                    </div>


                                    <div id="video" class="tab-pane fade">

                                    </div>

                                    <div id="article" class="tab-pane fade active in">

                                        <div class="row">


                                            <?php $widget = ListView::begin([
                                                'dataProvider' => $dataProvider,
                                                'summary' => '',
                                                'itemOptions' => ['class' => 'item'],
                                                'itemView' => function ($model, $key, $index, $widget) {

                                                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['id'];
                                                    $abrvBody = strlen($model['description']) > 30 ? substr($model['description'], 0, 30).'...' : $model['description'];
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

                                            <?php echo $widget->renderItems(); ?>

                                        </div>


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
 