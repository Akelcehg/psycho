<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diplomas */

$this->title = Yii::t('app', 'Create Diplomas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diplomas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diplomas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
