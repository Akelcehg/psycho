<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Events */

$this->title = 'Create Events';
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

$this->registerJsFile('https://maps.googleapis.com/maps/api/js?language=ru&key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&libraries=places&callback=initAutocomplete');

?>
<div class="col-md-9">
    <div class="profile-box editing">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
            'imagesModel' => $imagesModel
        ]) ?>

    </div>
</div>