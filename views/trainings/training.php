<div class="page-heading">
    <div class="container">
        <h2>Event Detail</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>
<!--BANNER END-->
<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="event-page">
            <!--EVENT START-->
            <div class="row events">
                <div class="col-md-6">
                    <div class="thumb">
                        <a href="#"><img src="../images/events1.jpg" alt=""></a>
                    </div>
                </div>
                <!--EVENT CONTANT START-->
                <div class="col-md-6">
                    <div class="text">
                        <!--EVENT HEADER START-->
                        <div class="event-header">
                            <span><?= $training['date'] ?></span>
                            <h2><?= $training['name'] ?></h2>
                            <div class="data-tags">
                                <a href="#">Technology</a>
                            </div>
                        </div>

                        <div class="event-vanue">
                            <table>
                                <tr>
                                    <td><p class="color">Date:</p></td>
                                    <td><a href="#"><i class="fa fa-calendar-o"></i><?= $training['date'] ?></a> <a
                                            href="#"><i class="fa fa-clock-o"></i><?= $training['duration'] ?></a></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Venue:</p></td>
                                    <td><a href="#"><?= $training['address'] ?></a></td>
                                </tr>
                            </table>
                        </div>
                        <!--EVENT VANUE END-->
                        <!--EVENT FOOTER START-->
                        <div class="event-footer">
                            <a href="#" class="btn-style">Записаться</a>
                        </div>
                        <!--EVENT FOOTER END-->
                    </div>
                </div>
                <!--EVENT CONTANT END-->
            </div>
            <!--EVENT DETAIL TEXT START-->
            <div class="text-detail">
                <p><?= $training['about'] ?></p>

                <h2>Программма дня</h2>

                <pre
                    style="font-size: 18px; background-color: transparent; border: 0;"><?= $training['schedule'] ?></pre>
                <!--                <ul>
                                    <li><a href="#">Quisque ut mattis dolor, a gravida turpis.</a></li>
                                    <li><a href="#">At vero eos et accusamus et iusto odio dignissimos</a></li>
                                    <li><a href="#">Ducimus qui blanditiis praesentium voluptatum</a></li>
                                    <li><a href="#">Deleniti atque corrupti quosed dolores</a></li>
                                    <li><a href="#">Quas molestias excepturi sint occaecati</a></li>
                                </ul>-->


            </div>
            <!--EVENT DETAIL TEXT END-->
            <!--EVENT LOCATION MAP START-->
            <div class="event-location-map">
                <div id="map-canvas"></div>
            </div>
            <!--EVENT LOCATION MAP END-->
            <!--ADMIN START-->
            <div class="admin">
                <div class="thumb">
                    <a href="#"><img alt="" src="../images/admin.jpg"></a>
                </div>
                <div class="text">
                    <div class="social-icons">
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
                    </div>
                    <h2><a href="#">Administrator</a></h2>
                    <p class="profession">Photographer</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nulla metus. Interdum et
                        malesuada fames ac ante ipsum primis in faucibus. Phasellus tristique aliquet semper. Class
                        aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                </div>
            </div>
            <!--ADMIN END-->
            <div class="row">
                <div class="col-md-8">
                    <div class="leave-reply">
                        <h2>Leave Us a Reply</h2>
                        <form>
                            <div class="row-fluid">
                                <div class="col-md-12">
                                    <div class="text-area">
                                        <textarea placeholder="Comments" class="input-block-level"></textarea>
                                        <button class="btn-style">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign">
                        <h4>Campaign Launched on 25 January, 2014 at LONDON, UK</h4>
                        <p>share THIS CAMPAIGN</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                            <a href="#"><i class="fa fa-comment-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--EVENT END-->
        </div>

    </div>
</div>
<script>

    function initMap() {
        var myLatLng = {lat: 46.384241150566865, lng: 30.721131563186646};

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