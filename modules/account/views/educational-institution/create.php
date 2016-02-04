<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Schools */

$this->title = 'Create Schools';
$this->params['breadcrumbs'][] = ['label' => 'Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nicdark_space100"></div>
<div class="nicdark_space20"></div>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</section>
