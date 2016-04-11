<?php
use app\models\Image;

?>
<div class="course-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="bxslider2">
                    <li><img src="<?= Image::getSchoolPhoto($educationInstitute['id']) ?>" alt=""></li>
                    <!--<li><img src="../images/course-detail2.png" alt=""></li>
                    <li><img src="../images/course-detail3.png" alt=""></li>
                    <li><img src="../images/course-detail4.png" alt=""></li>
                    <li><img src="../images/course-detail1.png" alt=""></li>
                    <li><img src="../images/course-detail2.png" alt=""></li>-->
                </ul>
                <!--    <div id="bx-pager">
                        <a data-slide-index="0" href=""><img src="../images/course-detail1.png" alt=""></a>
                        <a data-slide-index="1" href=""><img src="../images/course-detail2.png" alt=""></a>
                        <a data-slide-index="2" href=""><img src="../images/course-detail3.png" alt=""></a>
                        <a data-slide-index="3" href=""><img src="../images/course-detail4.png" alt=""></a>
                        <a data-slide-index="4" href=""><img src="../images/course-detail1.png" alt=""></a>
                        <a data-slide-index="5" href=""><img src="../images/course-detail2.png" alt=""></a>
                    </div>-->
            </div>
            <div class="col-md-6">
                <div class="text">
                    <h2><?= $educationInstitute['name'] ?></h2>
                    <h5><?= $educationInstitute['status'] ?></h5>
                    <!--  <div class="reviews">
                          <a href="#">109 Reviews</a>
                          <div class="rating">
                              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                          </div>
                      </div>-->
                    <h4>О школе</h4>
                    <p><?= $educationInstitute['description'] ?></p>
                    <h4>Необходимые документы</h4>
                    <p><?= $educationInstitute['required_documents'] ?></p>
                    <!--   <ul>
                           <li><a href="#">HTML5, CSS3, and Media Queries</a></li>
                           <li><a href="#">HTML5Shiv for Internet Explorer</a></li>
                           <li><a href="#">Photoshop Image Optimization and Slicing</a></li>
                           <li><a href="#">Design Adaptations for Various Screens</a></li>
                       </ul>-->
                </div>

            </div>
        </div>
    </div>
</div>
<section class="gray-bg">
    <div class="container">
        <!--SECTION HEADER END-->
        <div class="row">
            <div class="col-md-4">
                <div class="adminstrative">
                    <h3 style="color: #c7012e"><i class="fa fa-heart-o"></i> Уровни квалификации</h3>
                    <p><?= $educationInstitute['qualification_levels'] ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adminstrative">
                    <h3 style="color: #c7012e"><i class="fa fa-graduation-cap"></i> Документы об окончании</h3>
                    <p><?= $educationInstitute['document_end'] ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adminstrative">
                    <h3 style="color: #c7012e"><i class="fa fa-pencil"></i> Программа обучения</h3>
                    <p><?= $educationInstitute['training_program'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

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