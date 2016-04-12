<?php

use yii\helpers\Html;

?>

<?php

$this->registerJsFile('https://maps.googleapis.com/maps/api/js?language=ru&key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&libraries=places&callback=initAutocomplete');

?>
<div class="col-md-9">
    <div class="profile-box editing">
        
        <?= $this->render('_form', [
            'model' => $model,
            'imagesModel' => $imagesModel
        ]) ?>

    </div>
</div>
