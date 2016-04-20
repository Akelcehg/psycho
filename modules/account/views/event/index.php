<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ваши тренинги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-9">
    <div class="profile-box editing">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php $widget = ListView::begin([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {

                return '<div class="event-vanue" style="margin-top: 10px;">
                    <table>
                        <tbody>
                         <tr>
                            <td><p class="color">Название :</p></td>
                            <td>' . $model['name'] . '</td>
                            <td style="text-align: left;">
                               ' . Html::a('<span class="fa fa-pencil-square-o fa-2x"></span> Редактировать',
                    Url::base() . '/account/event/update?id=' . $model['id']) . '
                            </td>
                        </tr>
                        <tr>
                            <td><p class="color">Дата :</p></td>
                            <td><i class="fa fa-calendar-o"></i>' . $model['date'] . ' <i
                                        class="fa fa-clock-o"></i>' . $model['duration'] . '</td>
                                        <td style="text-align: left;">
                        ' . Html::a('<span class="fa fa-trash-o fa-2x"></span> Удалить',
                    Url::base() . '/account/event/delete?id=' . $model['id'], ['data-confirm' => "Are you sure you want to delete this item?",
                        'data-method' => 'POST']) . '
                                        </td>
                        </tr>
                        <tr>
                            <td><p class="color">Адрес :</p></td>
                            <td><i class="fa fa-map-marker"></i> ' . $model['address'] . '</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
        </div>';

            },
        ]) ?>

        <?php echo $widget->renderItems(); ?>


        <div class="pagination default">
            <?= $widget->renderPager(); ?>
        </div>

        <p>
            <?= Html::a('Добавить тренинг', ['create'], ['class' => 'btn-style']) ?>
        </p>

    </div>

</div>
