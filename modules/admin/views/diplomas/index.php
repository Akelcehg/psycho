<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

use app\models\Image;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiplomasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Diplomas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diplomas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <? /*= Html::a(Yii::t('app', 'Create Diplomas'), ['create'], ['class' => 'btn btn-success']) */ ?>
    </p>-->


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                //'type' => 'raw',
                'header' => 'Психолог',
                'value' => function ($model, $key, $index, $widget) {
                    return $model['diplomaOwner']['firstname'] . ' ' . $model['diplomaOwner']['lastname'];
                }
            ],
            //'psychologist_id',
            //'is_approved',
            [
                'header' => 'Одобрен',
                'value' => function ($model, $key, $index, $widget) {
                    if ($model['is_approved']) return 'Одобрен';
                    return 'Не одобрен';
                }
            ],
            [
                'header' => 'Фото',
                'format' => 'raw',
                'value' => function ($model, $key, $index, $widget) {
                    $url = '../'.Image::getPsychologistDiploma($model['psychologist_id']);
                    return '<a class="btn btn-default" href="' . $url . '" target="_blank">Фото</a>';
                }
            ],
            [
                'header' => 'Одобрить',
                'format' => 'raw',
                'value' => function ($model, $key, $index, $widget) {
                    $url = Url::base().'/admin/diplomas/approve?id='.$model["id"];
                    return '<a class="btn btn-info" href="'.$url.'" data-confirm="Подтвердить диплом ?" data-method="post">Подтвердить</a>';
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
