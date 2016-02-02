<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Schools */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schools-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            'city_id',
            'year',
            'status',
            'accreditation',
            'document_end',
            'qualification_levels:ntext',
            'address',
            'phone',
            'site',
            'map_coordinates',
            'school_directions:ntext',
            'faculties:ntext',
            'required_documents:ntext',
            'updated_at',
            'created_at',
        ],
    ]) ?>

</div>