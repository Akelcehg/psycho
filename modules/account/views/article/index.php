<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ваши статьи';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="span8">
    <div class="profile-box editing">

        <!--<table>
            <thead>
            <tr>
                <td>Student</td>
                <td>Part</td>
                <td>Score</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#">How To Be A Great Photographer</a></td>
                <td>1</td>
                <td>5/25</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>4</td>
                <td>Pending</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td>Total</td>
                <td>&nbsp;</td>
                <td>7.5/50</td>
            </tr>
            </tfoot>
        </table>-->

        <h1><?= Html::encode($this->title) ?></h1>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,

            'tableOptions' => [
                'class' => 'table'
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
        <p>
            <?= Html::a('Создать статью', ['create'], ['class' => 'btn-style']) ?>
        </p>
    </div>
</div>