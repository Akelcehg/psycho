<?php

use app\components\TranslitWidget;
use app\models\Image;
use yii\helpers\Url;

?>

<div class="contant">
    <div class="container">
        <div class="event-page">

            <div class="row events">
                <div class="col-md-6">
                    <div class="thumb">
                        <a href="#"><img src="<?= Image::getEventPhoto($training['id']) ?>" alt=""></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text">

                        <div class="event-header">
                            <span><?= $training['date'] ?></span>
                            <h1><?= $training['name'] ?></h1>
                            <!--                            <div class="data-tags">
                                                            <a href="#">Technology</a>
                                                        </div>-->
                        </div>

                        <div class="event-vanue">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td><p class="color">Дата:</p></td>
                                        <td><p><i class="fa fa-calendar-o"></i><?= $training['created_at'] ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="color">Продолжительность:</p></td>
                                        <td><p><?= $training['duration'] ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="color">Адрес:</p></td>
                                        <td><p><?= $training['address'] ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="color">Цена:</p></td>
                                        <td><p><?= $training['price'] ?> грн.</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="color">Телефон:</p></td>
                                        <td><p><?= $training['phone'] ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="color">Сайт:</p></td>
                                        <td><p><?= $training['site'] ?></p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!--<div class="event-footer">
                            <a href="#" class="btn-style">Записаться</a>
                        </div>-->

                    </div>
                </div>

            </div>

            <div class="text-detail">
                <h2>О тренинге</h2>
                <p><?= nl2br($training['about']) ?></p>

                <h2>Программма дня</h2>

                <p><?= nl2br($training['schedule']) ?></p>
                <!--                <ul>
                                    <li><a href="#">Quisque ut mattis dolor, a gravida turpis.</a></li>
                                    <li><a href="#">At vero eos et accusamus et iusto odio dignissimos</a></li>
                                    <li><a href="#">Ducimus qui blanditiis praesentium voluptatum</a></li>
                                    <li><a href="#">Deleniti atque corrupti quosed dolores</a></li>
                                    <li><a href="#">Quas molestias excepturi sint occaecati</a></li>
                                </ul>-->


            </div>


            <div class="text-detail">
                <h2>Организатор</h2>

                <div class="admin">
                    <div class="thumb">
                        <?php
                            $link = TranslitWidget::widget(['link' => $organizer['firstname'] . '_' . $organizer['lastname']]) . '-' . $organizer['user_id'];
                        ?>
                        <a href="<?= Url::base() . '/psychologists/profile/' . $link ?>">
                            <img alt="" class="thumb" src="<?= Image::getUserProfilePhoto($organizer['user_id']) ?>"
                                 style="max-width: 120px;">
                        </a>
                    </div>
                    <div class="text">
                        <!--                    <div class="social-icons">
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Dribbble"><i
                                                        class="fa fa-dribbble"></i></a>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Twitter"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Google Plus"><i
                                                        class="fa fa-google-plus"></i></a>
                                            </div>-->
                        <h2>
                            <a href="<?= Url::base() . '/psychologists/profile/' . $link ?>">
                                <?= $organizer['firstname'] . ' ' . $organizer['lastname'] ?></a>
                        </h2>
                        <!--<p class="profession">Photographer</p>-->
                        <p><?= $organizer['experience'] ?></p>
                    </div>
                </div>

            </div>
            <h2>Положение на карте</h2>
            <div class="row">
                <div class="event-location-map">
                    <div id="map-canvas"></div>
                </div>
            </div>


            <h2>Похожие тренинги</h2>
            <div class="row">


                <?php foreach ($eventsList as $event): ?>
                    <?php

                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($event['name']))]) . '-' . $event['id'];
                    $abrvBody = strlen($event['about']) > 100 ? substr($event['about'], 0, 100) . '...' : $event['about'];

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
                                    <!--<a href="#">Subscribe</a>-->
                                    <a href="<?= Url::base() . '/trainings/' . $link ?>">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="gap"></div>
        </div>


    </div>
</div>
<script>

    function initMap() {
        var myLatLng = {
            lat: <?=explode(';', $training['map_coordinates'])[0]?>,
            lng: <?=explode(';', $training['map_coordinates'])[1]?>};

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }

</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&signed_in=true&callback=initMap"></script>