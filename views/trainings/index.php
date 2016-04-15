<?php
use app\components\TranslitWidget;
use app\models\City;
use app\models\EventType;
use app\models\Image;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

?>
<div class="page-heading">
    <div class="container">
        <h2>Тренинги</h2>
        <div class="gap"></div>
        <div class="col-md-12">
            <div class="row">
                <?php $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',
                    'id' => 'event-search-form'
                ]); ?>
                <div class="col-md-3">
                    <?= $form->field($searchModel, 'type')->dropDownList(
                        ArrayHelper::map(EventType::find()->all(), 'id', 'name')
                        , [
                        'prompt' => 'Любой тип тренинга'
                    ])->label(false); ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($searchModel, 'city_id')->dropDownList(
                        ArrayHelper::map(City::find()->where([
                            'region_id' => '10373'
                        ])->orderBy('name')->all(), 'city_id', 'name'), [
                        'prompt' => 'В любом городе'
                    ])->label(false); ?>
                </div>
                <div class="col-md-6">
                    <!--<button type="submit" class="btn-style">Искать</button>-->
                    <?= Html::submitButton('Искать', ['class' => 'btn-style']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<div class="contant">
    <div class="container">
        <div class="event-page">

            <?php $widget = ListView::begin([
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {

                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['name']))]) . '-' . $model['id'];
                    $abrvBody = strlen($model['about']) > 300 ? substr($model['about'], 0, 300) . '...' : $model['about'];
                    $content = '<div class="row events">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '">
                                                <img src="' . Image::getEventPhoto($model['id']) . '" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text">

                                            <div class="event-header">
                                                <span>' . $model['date'] . '</span>
                                                <h1>
                                                <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '">
                                                ' . $model['name'] . '
                                                </a>
                                                </h1>
                                                <!-- <div class="data-tags">
                                                    <a href="#">Technology</a>
                                                </div> -->
                                            </div>

                                            <div class="event-body">
                                                <p>' . $abrvBody . '</p>
                                            </div>

                                            <div class="event-vanue">
                                                <table>
                                                    <tr>
                                                        <td><p class="color">Дата:</p></td>
                                                        <td><p><i class="fa fa-calendar-o"></i>' . $model['created_at'] . '</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p class="color">Адрес:</p></td>
                                                        <td><p>' . $model['address'] . '</p></td>
                                                    </tr>
                                                     <tr>
                                                        <td><p class="color">Цена:</p></td>
                                                        <td><p>' . $model['price'] . ' грн.</p></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- <div class="event-footer">
                                                <a href="' . \yii\helpers\Url::base() . '/trainings/' . $link . '" class="btn-style">Подробнее</a>
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="gap"></div>';
                    return $content;
                },
            ]) ?>

            <?php echo $widget->renderItems(); ?>

        </div>
        <div class="pagination">
            <?= $widget->renderPager(); ?>
        </div>

    </div>
</div>