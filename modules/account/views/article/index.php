<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ваши статьи';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-9">
    <div class="profile-box editing">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


        <?php $widget=GridView::begin([
            'dataProvider' => $dataProvider,

            'tableOptions' => [
                'class' => 'table editing_table'
            ],
            //'filterModel' => $searchModel,

            'summary' => '',
            'columns' => [

                //['class' => 'yii\grid\SerialColumn'],
                //'id',
                ///'psychologist_id',
                [
                    'header' => 'Название статьи',
                    'attribute' => 'title',
                    //'format' => ['decimal', 2],
                ],
                ///'is_owner',
                //'source',
                //'text:ntext',
                // 'updated_at',
                // 'created_at',

                //['class' => 'yii\grid\ActionColumn'],
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
            <?= Html::a('Создать статью', ['create'], ['class' => 'btn-style']) ?>
        </p>
    </div>
</div>