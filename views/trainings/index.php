<?php
use app\components\TranslitWidget;
use yii\widgets\ListView;

?>
<div class="page-heading">
    <div class="container">
        <h2>Events</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>

<div class="contant">
    <div class="container">
        <div class="event-page">

            <?php $widget = ListView::begin([
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {

                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['name']))]) . '-' . $model['id'];

                    $content = '<div class="row events">
                <div class="span6">
                    <div class="thumb">
                        <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '">
                            <img src="images/events1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!--EVENT CONTANT START-->
                <div class="span6">
                    <div class="text">

                        <div class="event-header">
                            <span>' . $model['created_at'] . '</span>
                            <h2>' . $model['name'] . '</h2>
                            <div class="data-tags">
                                <a href="#">Technology</a>
                            </div>
                        </div>

                        <div class="event-body">
                            <p>' . $model['about'] . '</p>
                        </div>

                        <div class="event-vanue">
                            <table>
                                <tr>
                                    <td><p class="color">Date:</p></td>
                                    <td><a href="#"><i class="fa fa-calendar-o"></i>' . $model['created_at'] . '</a> <a
                                            href="#"><i class="fa fa-clock-o"></i>' . $model['duration'] . '</a></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Venue:</p></td>
                                    <td><a href="#">' . $model['address'] . '</a></td>
                                </tr>
                            </table>
                        </div>

                        <div class="event-footer">
                            <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '" class="btn-style">Подробнее</a>
                        </div>

                    </div>
                </div>
                <!--EVENT CONTANT END-->
            </div>';
                    return $content;
                },
            ]) ?>

            <?php echo $widget->renderItems(); ?>

        </div>
        <div class="pagination">
            <?= $widget->renderPager(); ?>
        </div>

    </div>
</div>