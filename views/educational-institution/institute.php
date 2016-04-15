<?php
use app\models\Image;

?>
<div class="course-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?= Image::getSchoolPhoto($educationInstitute['id']) ?>" alt="">
                <!--<ul class="bxslider2">-->
                <!--<li><img src="<? /*= Image::getSchoolPhoto($educationInstitute['id']) */ ?>" alt=""></li>-->
                <!--<li><img src="../images/course-detail2.png" alt=""></li>
                <li><img src="../images/course-detail3.png" alt=""></li>
                <li><img src="../images/course-detail4.png" alt=""></li>
                <li><img src="../images/course-detail1.png" alt=""></li>
                <li><img src="../images/course-detail2.png" alt=""></li>-->
                <!--</ul>-->
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
                    <h4><?= $educationInstitute['status'] ?></h4>
                    <!--  <div class="reviews">
                          <a href="#">109 Reviews</a>
                          <div class="rating">
                              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                          </div>
                      </div>-->

                    <h3>Акредитация</h3>
                    <div class="text">
                        <p><?= $educationInstitute['accreditation'] ?></p>
                    </div>

                    <h3>Необходимые документы</h3>
                    <div class="text">

                        <p><?= $educationInstitute['required_documents'] ?></p>
                    </div>

                    <!--   <ul>
                           <li><a href="#">HTML5, CSS3, and Media Queries</a></li>
                           <li><a href="#">HTML5Shiv for Internet Explorer</a></li>
                           <li><a href="#">Photoshop Image Optimization and Slicing</a></li>
                           <li><a href="#">Design Adaptations for Various Screens</a></li>
                       </ul>-->
                </div>

            </div>

            <div class="col-md-12">
                <h3>О школе</h3>
                <div class="col-md-6">
                    <p><?= $educationInstitute['description'] ?></p>
                </div>
                <div class="col-md-6">

                    <div class="event-vanue">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                <tr>
                                    <td><p class="color">Адрес:</p></td>
                                    <td><p><?= $educationInstitute['address'] ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Год основаниия :</p></td>
                                    <td><p><?= $educationInstitute['year'] ?> г.</p></td>
                                </tr>

                                <tr>
                                    <td><p class="color">Сайт :</p></td>
                                    <td><p><?= $educationInstitute['site'] ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Телефон:</p></td>
                                    <td><p><?= $educationInstitute['phone'] ?></p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


            </div>


<!--            <div class="col-md-12">
                <h3>Необходимые документы</h3>
                <div class="text">

                    <p><?/*= $educationInstitute['required_documents'] */?></p>
                </div>

            </div>-->


        </div>
    </div>
</div>
<section class="gray-bg">
    <div class="container">

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