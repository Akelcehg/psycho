<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VideosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-8">
    <div class="profile-box editing">

        <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <?php $widget = ListView::begin([
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                    $abrvBody = strlen($model['title']) > 30 ? substr($model['title'], 0, 30) . '...' : $model['title'];
                    return '<div class="col-md-4">
                <div class="course">
                    <div class="thumb">
                        <a href="#"><img alt="" src="' . $model['img_link'] . '"></a>
                    </div>
                    <div class="text">
                        <div class="header">
                             <h4>' . $abrvBody . '</h4>
                        </div>

                        <div class="course-detail-btn">

                        ' . Html::a('<span class="fa fa-trash-o"></span> Удалить',
                        Url::base() . '/account/videos/delete?id=' . $model['id'], ['data-confirm' => "Are you sure you want to delete this item?",
                            'data-method' => 'POST']) . '

                               ' . Html::a('<span class="fa fa-pencil-square-o"></span> Редактировать',
                        Url::base() . '/account/videos/update?id=' . $model['id']) . '
                        </div>
                    </div>
                </div>
            </div>';

                },
            ]) ?>

            <?php echo $widget->renderItems(); ?>

        </div>

        <div class="pagination default">
            <?= $widget->renderPager(); ?>
        </div>

        <p>
            <?= Html::a('Добавить видео', ['create'], ['class' => 'btn-style']) ?>
        </p>


    </div>
</div>