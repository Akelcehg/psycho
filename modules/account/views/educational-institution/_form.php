<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\models\Country;
use app\models\City;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EducationalInstitution */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="educational-institution-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-md-12">
        <?= $form->field($imagesModel, 'image_file')->fileInput()->label('Выберите фото') ?>


        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>


    <div class="col-md-4">
        <?= $form->field($model, 'city_id')->dropDownList(
            ArrayHelper::map(City::find()->where([
                'region_id' => '10373'
            ])->orderBy('name')->all(), 'city_id', 'name'),['prompt' => 'Выберите город']) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'year')->textInput() ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'status')->dropDownList(['государственная' => 'государственная', 'не государственная' => 'не государственная',], ['prompt' => 'Выберите статус']) ?>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'accreditation')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'document_end')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'qualification_levels')->textarea(['rows' => 6]) ?>


        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="map" style="width: 100%; height: 400px;"></div>

        <?= $form->field($model, 'map_coordinates')->hiddenInput(['maxlength' => true])->label(false) ?>

        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6">

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    </div>

    <div class="col-md-6">

        <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'training_program')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'required_documents')->textarea(['rows' => 6]) ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить изменения', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>


<script>
    function initAutocomplete() {

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function () {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // [START region_getplaces]
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function (marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
        // [END region_getplaces]

        google.maps.event.addListener(map, 'click', function (event) {
            placeMarker(event.latLng);
        });

        function placeMarker(location) {

            removeMarkers();

            //console.log ($('#pac-input').val());

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                latLng: marker.getPosition()
            }, function (responses) {
                if (responses && responses.length > 0) {
                    console.log(responses);
                    $('#educationalinstitution-address').val(responses[0].formatted_address);
                } else {
                    updateMarkerAddress('Cannot determine address at this location.');
                }
            });

            $('#educationalinstitution-map_coordinates').val(
                marker.getPosition().lat() + ';' + marker.getPosition().lng()
            );
            markers.push(marker);
        }

        function removeMarkers() {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
        }


        /*function markerCoords(markerobject) {
         google.maps.event.addListener(markerobject, 'dragend', function (evt) {
         infoWindow.setOptions({
         content: '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>'
         });
         infoWindow.open(map, markerobject);
         console.log('asd');
         });

         google.maps.event.addListener(markerobject, 'drag', function (evt) {
         console.log("marker is being dragged");
         });

         }*/
    }


</script>