<?php
use app\components\TranslitWidget;
use app\models\Image;
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
                    $abrvBody = strlen($model['about']) > 200 ? substr($model['about'], 0, 200) . '...' : $model['about'];
                    $content = '<div class="row events">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '">
                                                <img src="' . Image::getEventPhoto($model['id']) . '" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text">

                                            <div class="event-header">
                                                <span>' . $model['date'] . '</span>
                                                <h2>' . $model['name'] . '</h2>
                                                <!-- <div class="data-tags">
                                                    <a href="#">Technology</a>
                                                </div> -->
                                            </div>

                                            <div class="event-body">
                                                <p>' . $abrvBody . '</p>
                                            </div>

                                            <div class="event-vanue">
                                                <table>
                                                    <tr>
                                                        <td><p class="color">Дата:</p></td>
                                                        <td><a href="#"><i class="fa fa-calendar-o"></i>' . $model['created_at'] . '</a> <a
                                                                href="#"><i class="fa fa-clock-o"></i>' . $model['duration'] . '</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p class="color">Адрес:</p></td>
                                                        <td><a href="#">' . $model['address'] . '</a></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="event-footer">
                                                <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '" class="btn-style">Подробнее</a>
                                            </div>

                                        </div>
                                    </div>
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