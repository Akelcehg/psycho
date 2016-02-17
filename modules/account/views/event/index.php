<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nicdark_space100"></div>
<div class="nicdark_space50"></div>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Events', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'type',
                'direction',
                'name',
                'about:ntext',
                // 'date',
                // 'duration',
                // 'schedule:ntext',
                // 'price',
                // 'address',
                // 'phone',
                // 'site',
                // 'map_coordinates',
                // 'organizer_id',
                // 'is_user_organizer',
                // 'updated_at',
                // 'created_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>
</section>
