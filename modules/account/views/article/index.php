<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="span8">
    <div class="profile-box editing">

        <table>
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
                <td>Instructor: Rebecca Smith</td>
                <td>2</td>
                <td>2.5/25</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>3</td>
                <td>Pending</td>
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
        </table>

        <h1><?= Html::encode($this->title) ?></h1>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,

            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],
                //'id',
                ///'psychologist_id',
                'is_owner',
                'source',
                //'text:ntext',
                // 'updated_at',
                // 'created_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>