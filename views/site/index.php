<?php use app\components\TranslitWidget;
use app\models\Image;
use yii\helpers\Url;

echo $this->render('//partials/slider'); ?>

<section>
    <div class="container">
        <!--SECTION HEADER START-->
        <div class="sec-header">
            <h2>Our Services</h2>
            <p>Take a look at what we have are doing</p>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!--SECTION HEADER END-->
        <div class="row">
            <!--SERVICE ITEM START-->
            <div class="col-md-4">
                <div class="services">
                    <div class="header">
                        <a href="psychologists">
                            <i class="fa fa-tablet"></i>
                            <i class="fa fa-user inner-icon"></i>
                        </a>
                    </div>
                    <div class="text">
                        <h3><a href="psychologists">Психологи</a></h3>
                        <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to
                            agree on: </p>
                    </div>
                </div>
            </div>
            <!--SERVICE ITEM END-->
            <!--SERVICE ITEM START-->
            <div class="col-md-4">
                <div class="services">
                    <div class="header">
                        <a href="article">
                            <i class="fa fa-tablet"></i>
                            <i class="fa fa-list-alt inner-icon"></i>
                        </a>
                    </div>
                    <div class="text">
                        <h3><a href="article">Статьи</a></h3>
                        <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to
                            agree on: </p>
                    </div>
                </div>
            </div>
            <!--SERVICE ITEM END-->
            <!--SERVICE ITEM START-->
            <div class="col-md-4">
                <div class="services">
                    <div class="header">
                        <a href="interesting">
                            <i class="fa fa-tablet"></i>
                            <i class="fa fa-cogs inner-icon"></i>
                        </a>
                    </div>
                    <div class="text">
                        <h3><a href="interesting">Тесты</a></h3>
                        <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to
                            agree on: </p>
                    </div>
                </div>
            </div>
            <!--SERVICE ITEM END-->
        </div>
    </div>
</section>


<section class="happy-parents">
    <div class="container">
        <ul class="bxslider">
            <!--LIST ITEM START-->
            <li>
                <div class="thumb">
                    <a href="#"><img src="images/parents-says.png" alt=""></a>
                </div>
                <div class="text">
                    <h2>What Our Happy Parents Say</h2>
                    <p>Praesent tincidunt molestie libero mollis porta. Praesent sit amet faucibus leo, ac aliquet
                        magna. Vivamus ullamcorper mollis leo, at sagittis quis.</p>
                    <a href="#" class="signature">Jack Marine</a>
                </div>
            </li>

            <!--LIST ITEM END-->
            <!--LIST ITEM START-->
            <li>
                <div class="thumb">
                    <a href="#"><img src="images/parents-says2.png" alt=""></a>
                </div>
                <div class="text">
                    <h2>What Our Happy Parents Say</h2>
                    <p>Praesent tincidunt molestie libero mollis porta. Praesent sit amet faucibus leo, ac aliquet
                        magna. Vivamus ullamcorper mollis leo, at sagittis quis.</p>
                    <a href="#" class="signature">Ricky Richerd</a>
                </div>
            </li>
            <!--LIST ITEM END-->
            <!--LIST ITEM START-->
            <li>
                <div class="thumb">
                    <a href="#"><img src="images/parents-says3.png" alt=""></a>
                </div>
                <div class="text">
                    <h2>What Our Happy Parents Say</h2>
                    <p>Praesent tincidunt molestie libero mollis porta. Praesent sit amet faucibus leo, ac aliquet
                        magna. Vivamus ullamcorper mollis leo, at sagittis quis.</p>
                    <a href="#" class="signature">Fiona Thomson</a>
                </div>
            </li>
            <!--LIST ITEM END-->
        </ul>
    </div>
</section>


<section class="gray-bg">
    <div class="container">
        <!--SECTION HEADER START-->
        <div class="sec-header">
            <h2>Ближайшие тренинги</h2>
            <p>Check Our Featured Courses</p>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!--SECTION HEADER END-->

        <div class="row">

            <?php foreach ($eventsList as $event): ?>
                <?php

                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($event['name']))]) . '-' . $event['id'];
                $abrvBody = strlen($event['about']) > 50 ? substr($event['about'], 0, 50) . '...' : $event['about'];

                ?>
                <div class="col-md-3">
                    <div class="course">
                        <div class="thumb">
                            <a href="<?= Url::base() . '/trainings/' . $link ?>"><img
                                    src="<?= Image::getEventPhoto($event['id']) ?>" alt=""></a>
                            <div class="price"><span>$</span><?= $event['price'] ?></div>
                        </div>
                        <div class="text">
                            <div class="header">
                                <h4><?= $event['name'] ?></h4>
                                <!--<div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>-->
                            </div>
                            <div class="course-name">
                                <p><?= $abrvBody ?></p>
                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="<?= Url::base() . '/trainings/' . $link ?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>


    </div>
</section>


<section class="papular-post">
    <div id="bg4" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
    <div class="container post-contant">
        <!--SECTION HEADER START-->
        <div class="sec-header">
            <h2>Новые статьи</h2>
            <p>Тут показывать новые статьи</p>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!--SECTION HEADER END-->
        <div class="row">

            <?php foreach ($articlesList as $article): ?>
                <?php

                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($article['title']))]) . '-' . $article['id'];
                $plainBody = strip_tags($article['text']);
                $abrvBody = strlen($plainBody) > 500 ? substr($plainBody, 0, 500) : $plainBody;


                ?>
                <div class="col-md-6">
                    <div class="post">
                        <div class="thumb"><img src="images/posts/post.png" alt=""></div>

                        <div class="header">

                            <div class="post-date">
                                <p><?= $article['created_at'] ?></p>
                            </div>

                            <!-- <div class="icons">
                                 <ul>
                                     <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span>
                                     </li>
                                     <li><a href="#"><i class="fa fa-link"></i></a></li>
                                     <li><a href="#"><i class="fa fa-comments-o"></i></a></li>
                                 </ul>
                             </div>-->
                        </div>
                        <!--POST HEADER END-->
                        <div class="text">
                            <h2><?= $article['title'] ?></h2>
                            <!--<h5>Writer David / Poetry course</h5>-->
                            <p><?= $abrvBody ?></p>
                            <a href="<?=Url::base() . '/article/' . $link?>" class="more">Читать статью</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<section class="follow-us">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="follow">
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                        <div class="text">
                            <p></p>
                            <h4>Мы в Facebook</h4>
                            <!--<p>Faucibus toroot menuts</p>-->
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="follow">
                    <a href="#">
                        <i class="fa fa-google"></i>
                        <div class="text">
                            <p></p>
                            <h4>Мы в Google Plus</h4>
                            <!--<p>Faucibus toroot menuts</p>-->
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="follow">
                    <a href="#">
                        <i class="fa fa-vk"></i>
                        <div class="text">
                            <p></p>
                            <h4>Мы в Vkontakte</h4>
                            <!--<p>Faucibus toroot menuts</p>-->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>