<?php

use app\components\TranslitWidget;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PsychologistTopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Psychologist Tops');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psychologist-top-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Добавить психолога в топ'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',

            //'psychologist_id',
            [
                'header' => 'Психолог',
                'format' => 'raw',
                'value' => function ($model, $key, $index, $widget) {
                    $link = TranslitWidget::widget(['link' => $model['topProfile']['firstname'] . '_' . $model['topProfile']['lastname']]) . '-' . $model['topProfile']['user_id'];
                    return '<a href="' . Url::base() . '/psychologists/profile/' . $link . '" target="_blank">' . $model['topProfile']['firstname'] . ' ' . $model['topProfile']['firstname'] . '</a>';
                }
            ],

            'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
