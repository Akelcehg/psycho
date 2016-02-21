<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EducationalInstitution */

$this->title = 'Create Educational Institution';
$this->params['breadcrumbs'][] = ['label' => 'Educational Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="nicdark_space100"></div>
<div class="nicdark_space50"></div>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</section>
