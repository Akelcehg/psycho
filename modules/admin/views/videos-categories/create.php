<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VideoCategories */

$this->title = Yii::t('app', 'Create Video Categories');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Video Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
