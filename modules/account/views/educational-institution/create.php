<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EducationalInstitution */

$this->title = 'Create Educational Institution';
$this->params['breadcrumbs'][] = ['label' => 'Educational Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

$this->registerJsFile('https://maps.googleapis.com/maps/api/js?language=ru&key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&libraries=places&callback=initAutocomplete');

?>
<div class="col-md-9">
    <div class="profile-box editing form">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
            'imagesModel' => $imagesModel
        ]) ?>

    </div>
</div>
