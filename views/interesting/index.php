<?php

use yii\widgets\ListView;
use yii\helpers\Url;

?>


<div class="page-heading">
    <div class="container">
        <h2>Our Lessons</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>
<!--BANNER END-->
<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="our-lessons">
            <h3>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                to using 'Content here, content here', making it look like readable English.</h3>
            <div class="course-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#test" data-toggle="tab"><i class="fa fa-pencil-square"></i>Тесты</a>
                    </li>
                    <li><a href="#books" data-toggle="tab"><i class="fa fa-book"></i>Книги</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content container">
                    <div class="tab-pane fade active in" id="test">
                        <ul class="course-topics row">
                            <!--LIST ITEM START-->

                            <?= ListView::widget([
                                'dataProvider' => $dataProvider,
                                //'itemOptions' => ['class' => 'item'],
                                'itemView' => function ($model, $key, $index, $widget) {
                                    //return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
                                    return '<li class="span4">
                                <div class="thumb">
                                    <a href="' . Url::base() . '/interesting/quiz?id=' . $model['id'] . '"><img alt="" src="images/topic1.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">' . $model['name'] . '</a></h4>
                                    <p>' . $model['description'] . '</p>
                                </div>
                            </li>';
                                },
                            ]) ?>


                        </ul>
                    </div>
                    <div class="tab-pane fade" id="books">
                        <ul class="course-topics row">
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic2.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic3.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic4.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic1.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic5.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic6.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic2.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic3.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic4.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic1.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic5.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic6.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic2.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic3.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic4.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic1.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic5.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                            <!--LIST ITEM START-->
                            <li class="span4">
                                <div class="thumb">
                                    <a href="#"><img alt="" src="images/topic6.jpg"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">HTML5 Programming</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span>$ 199</span>
                                </div>
                            </li>
                            <!--LIST ITEM START-->
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>