<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use app\components\TranslitWidget;
use yii\helpers\Url;

?>
<div style="margin-bottom: 25px;"></div>

<div class="contant">
    <div class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="row">
                    <div class="latest-news">

                        <?php $widget = ListView::begin([
                            'dataProvider' => $dataProvider,
                            'summary' => '',
                            'itemOptions' => ['class' => 'item'],
                            'itemView' => function ($model, $key, $index, $widget) {

                                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['id'];

                                $content = '<div class="news-contant">
                                                <div class="thumb">
                                                    <a href="' . Url::base() . '/video/' . $link . '">
                                                        <img class="img-responsive" src="' . $model['img_link'] . '"
                                                             alt="видео психология"/>
                                                    </a>
                                                </div>
                                                <div class="text">
                                                    <h2>' . $model['title'] . '</h2>
                                                    <p>' . $model['description'] . '</p>
                                                    <a href="' . Url::base() . '/video/' . $link . '" class="btn-style">Смотреть видео</a>
                                                </div>
                                            </div>';
                                return $content;
                            },
                        ]) ?>

                        <?php echo $widget->renderItems(); ?>

                    </div>

                </div>


                <div class="pagination">
                    <?= $widget->renderPager(); ?>
                </div>

            </div>
            <div class="col-md-4">

                <div class="sidebar">

                    <div class="widget search">
                        <h2><i class="fa fa-search"></i>Искать видео</h2>

                        <?php $form = ActiveForm::begin([
                            'action' => ['index'],
                            'method' => 'get',
                        ]); ?>
                        <?= $form->field($searchModel, 'description')->textInput([
                            'class' => "form-control",
                            'placeholder' => "Введите слова для поиска"
                        ])->label(false) ?>
                        <?= Html::submitButton('Искать', ['class' => 'btn-style']) ?>
                        <?php ActiveForm::end(); ?>

                    </div>
                    <div class="widget widget-tags">
                        <h2>Выбрать видео по категории</h2>
                        <ul>
                            <?php foreach ($videosCategories as $category): ?>
                                <li><a href="?video=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>


                <div class="widget widget-papular-post">
                    <div class="gap"></div>
                    <h2>Популярное видео</h2>

                    <ul>
                        <?php foreach ($popularVideos as $popularVideo): ?>
                            <?php

                            $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($popularVideo['title']))]) . '-' . $popularVideo['id'];

                            ?>
                            <li>

                                <a href="<?= Url::base() . '/video/' . $link ?>">
                                    <h4>
                                        <?= $popularVideo['title'] ?>
                                    </h4>
                                </a>

                                <div class="thumb">
                                    <a href="<?= Url::base() . '/video/' . $link ?>">
                                        <img class="img-responsive" src="<?= $popularVideo['img_link'] ?>"
                                             alt="видео психология"/>
                                    </a>
                                </div>
                                <!--<div class="text">-->
                                <!--<p class="date"><span><? /*= $popularVideo['created_at'] */ ?></span></p>-->
                                <!--<p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>-->
                                <!--</div>-->
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>


            </div>
        </div>

    </div>


</div>
