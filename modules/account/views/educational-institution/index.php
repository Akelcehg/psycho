<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/*$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;*/
?>
<!--<div class="schools-index">

    <h1><? /*= Html::encode($this->title) */ ?></h1>
    <?php /*echo $this->render('_search', ['model' => $searchModel]); */ ?>

    <p>
        <? /*= Html::a('Create Schools', ['create'], ['class' => 'btn btn-success']) */ ?>
    </p>

    <? /*= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
        },
    ]) */ ?>

</div>-->

<div class="col-md-9">
    <div class="profile-box editing">

        <?php $widget = GridView::begin([
            'dataProvider' => $dataProvider,

            'tableOptions' => [
                'class' => 'table editing_table'
            ],

            'summary' => '',
            'columns' => [

                [
                    'header' => 'Название школы',
                    'attribute' => 'name',
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    //'template' => '{view} {update} {delete} {link}',
                    'template' => '{update} {delete} {link}',
                    'buttons' => [
/*                        'view' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-eye"></span>',
                                $url);
                        },*/
                        'update' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-pencil-square-o fa-2x"></span>',
                                $url);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-trash-o fa-2x"></span>',
                                $url, ['data-confirm' => "Are you sure you want to delete this item?",
                                'data-method' => 'POST']);
                        },
                        /*'link' => function ($url,$model,$key) {
                            return Html::a('Действие', $url);
                        },*/
                    ],
                ],
            ],
        ]); ?>

        <?php echo $widget->renderItems(); ?>


        <div class="pagination default">
            <?= $widget->renderPager(); ?>
        </div>

        <p>
            <?= Html::a('Добавить школу', ['create'], ['class' => 'btn-style']) ?>
        </p>

    </div>
</div>
