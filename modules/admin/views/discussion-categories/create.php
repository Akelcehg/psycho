<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiscussionCategories */

$this->title = Yii::t('app', 'Create Discussion Categories');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Discussion Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discussion-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
