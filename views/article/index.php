<?php

use yii\widgets\ListView;

?>

<div style="margin-top: 25px;"></div>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span8">
                <div class="blog">


                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'summary' => '',
                        'itemOptions' => ['class' => 'item'],
                        'itemView' => function ($model, $key, $index, $widget) {
                            return '<div class="blog-contant">
                        <h2><a href="article/' . $model['title'] . '-' . $model['id'] . '">' . $model["title"] . '</a></h2>
                        <div class="blog-tags">
                            Filed in: <a href="#">Online Courses</a> / Tags: <a href="#">Fashion</a>, <a href="#">Learning</a>,
                            <a href="#">webdesign</a>, <a href="#">Course</a>
                        </div>
                        <!-- <div class="thumb">
                            <a href="#"><img src="images/blog-img.jpg" alt=""></a>
                        </div> -->
                        <div class="text">
                            ' . $model['text'] . '
                            <a href="article/' . $model['title'] . '-' . $model['id'] . '" class="btn-style">Подробнее</a>
                        </div>
                        <div class="blog-comments">
                            <a href="#"><i class="fa fa-user"></i>David</a>
                            <a href="#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>
                            <a href="#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>
                        </div>
                    </div>';
                        },
                    ]) ?>

                </div>
                <div class="pagination">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="span4">
                <!--SIDEBAR START-->
                <div class="sidebar">
                    <!--SEARCH WIDGET START-->
                    <div class="widget widget-search-course">
                        <h2><i class="fa fa-search"></i>Искать статью</h2>

                        <!--<div class="styled-select">
                            <select class="input-block-level">
                                <option>Here is the first option</option>
                                <option>The second option</option>
                            </select>
                        </div>-->
                        <p><input type="text" class="input-block-level" placeholder="Search by Keyword"></p>
                        <button class="btn-style">Search</button>
                    </div>
                    <div class="widget widget-tags">
                        <h2>Категории статей</h2>
                        <ul>
                            <li><a href="#">resource</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">art</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Template</a></li>
                            <li><a href="#">resource</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">art</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Template</a></li>
                        </ul>
                    </div>
                    <!--SEARCH WIDGET END-->
                    <!--PAPULAR POST WIDGET START-->
                    <div class="widget widget-papular-post">
                        <h2>Популярные статьи</h2>
                        <ul>
                            <!--LIST ITEM START-->
                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>
                            <!--LIST ITEM END-->
                            <!--LIST ITEM START-->
                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post2.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>
                            <!--LIST ITEM END-->
                            <!--LIST ITEM START-->
                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post3.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>
                            <!--LIST ITEM END-->
                            <!--LIST ITEM START-->
                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post4.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>
                            <!--LIST ITEM END-->
                        </ul>
                    </div>

                    <!--TAGS WIDGET END-->
                    <!--NEWS LETTERS WIDGET START-->
                    <div class="widget widget-newsletter">
                        <div class="inner">
                            <h2>Join Newsletters</h2>
                            <div class="input-cover">
                                <i class="fa fa-envelope-o"></i>
                                <input type="text" class="input-block-level" placeholder="Enter Your E-Mail ID">
                            </div>
                            <button class="btn-style">Subscribe</button>
                        </div>
                    </div>
                    <!--NEWS LETTERS WIDGET END-->
                </div>
                <!--SIDEBAR END-->
            </div>
        </div>
        <div class="the-best">
            <p>The Best Websites for Free Online Courses, Certificates, Degrees, and Educational Resources</p>
            <h2>take $10 0ff for new users</h2>
        </div>
    </div>

    <section class="follow-us">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                            <div class="text">
                                <h4>Follow us on Facebook</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-google"></i>
                            <div class="text">
                                <h4>Follow us on Google Plus</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                            <div class="text">
                                <h4>Follow us on Linkedin</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
