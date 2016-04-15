<?php
use app\models\Image;

?>

<div class="page-heading">
    <div class="container">
        <h2>Search Result</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>

<div class="contant" style="background-color: #f7f7f7">
    <div class="container">
        <div class="row">

            <div class="gap"></div>
            <div class="col-md-3 sidebar">
                <!--TUTOR PROFILE START-->
                <div class="widget course-tutor">
                    <h3>Владелец школы</h3>
                    <div class="thumb">
                        <img src="../images/tutor.jpg" alt="">
                    </div>
                    <div class="text">
                        <p class="tutor-name color">Jacky Michaels</p>
                    </div>
                    <div class="text">
                        <h3>Дополнительная информация о школе</h3>

                        <p><i class="fa fa-map-marker"></i> <?= $educationInstitute['address'] ?></p>
                        <p><i class="fa fa-link"></i> <a href="#" class="color"><?= $educationInstitute['site'] ?></a>
                        </p>
                        <p><i class="fa fa-calendar"></i> Основана <?= $educationInstitute['year'] ?> г.</p>
                    </div>

                </div>


            </div>
            <div class="col-md-9">
                <!--COURSE DETAIL START-->
                <div class="tutor-detail-section">


                    <div class="row">
                        <div class="col-md-12">

                            <img class="thumbnail img-responsive"
                                 src="<?= Image::getSchoolPhoto($educationInstitute['id']) ?>"
                                 style="margin: 0 auto;" alt="">
                        </div>

                    </div>

                    <div class="text">

                        <h3>О школе</h3>

                        <p><?= $educationInstitute['description'] ?></p>


                    </div>
                    <div class="text">
                        <h3>Необходимые документы</h3>


                        <p><?= $educationInstitute['required_documents'] ?></p>
                    </div>

                </div>


            </div>

        </div>


    </div>

    <section class="follow-us">
        <div class="row">
            <div class="col-md-4">
                <div class="adminstrative">
                    <h3 style="color: #c7012e"><i class="fa fa-heart-o"></i> Уровни квалификации</h3>
                    <p>вп вап вап ку ук пук ук вп вап вап ку ук пук ук вп вап вап ку ук пук ук вп вап вап ку ук пук
                        ук </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adminstrative">
                    <h3 style="color: #c7012e"><i class="fa fa-graduation-cap"></i> Документы об окончании</h3>
                    <p>йуйцу йцу йцуй уйц, йуйцу йцу йцуй уйц, йуйцу йцу йцуй уйц, йуйцу йцу йцуй уйц, йуйцу йцу
                        йцуй уйц, </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adminstrative">
                    <h3 style="color: #c7012e"><i class="fa fa-pencil"></i> Программа обучения</h3>
                    <p>пукпукп укпукпу кпу кпук пук уквбзфщылв фыв фыло пукпукп укпукпу кпу кпук пук уквбзфщылв фыв
                        фыло пукпукп укпукпу кпу кпук пук уквбзфщылв фыв фыло пукпукп укпукпу кпу кпук пук
                        уквбзфщылв фыв фыло </p>
                </div>
            </div>
        </div>
    </section>

</div>

<div class="contant">
    <div class="container">
        <div class="contact-us">
            <div class="event-location-map">

                <div id="map-canvas"></div>

            </div>
        </div>
    </div>
</div>

<script>

    function initMap() {
        var myLatLng = {
            lat: <?=explode(';', $educationInstitute['map_coordinates'])[0]?>,
            lng: <?=explode(';', $educationInstitute['map_coordinates'])[1]?>};

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