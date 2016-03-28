<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="span8">
    <div class="profile-box editing">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



        <?= GridView::widget([
            'dataProvider' => $dataProvider,

            'tableOptions' => [
                'class' => 'table'
            ],

            'summary' => '',
            'columns' => [

                [
                    'header' => 'Название тренинга',
                    'attribute' => 'name',
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {delete} {link}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-eye"></span>',
                                $url);
                        },
                        'update' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-pencil-square-o"></span>',
                                $url);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-trash-o"></span>',
                                $url);
                        },
                        /*'link' => function ($url,$model,$key) {
                            return Html::a('Действие', $url);
                        },*/
                    ],
                ],
            ],
        ]); ?>
        <p>
            <?= Html::a('Добавить тренинг', ['create'], ['class' => 'btn-style']) ?>
        </p>


    </div>
</div>
