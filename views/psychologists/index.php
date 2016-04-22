<?php

use app\models\City;
use yii\helpers\ArrayHelper;
use \yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use \yii\helpers\Url;
use app\models\Image;
use \app\components\TranslitWidget;

?>

<section class="gray-bg">
    <div class="container">

        <div class="sec-header">
            <h2>Our Teachers Добавить сбоку самых активных</h2>
            <p>Discover courses by topic</p>
        </div>

        <div class="row">

            <?php $widget = ListView::begin(array(
                'dataProvider' => $psychologistsTopDataProvider,
                'summary' => '',
                'itemOptions' => array('class' => 'item'),
                'itemView' => function ($model, $key, $index, $widget) {
                    $link = TranslitWidget::widget(['link' => $model['firstname'] . '_' . $model['lastname']]) . '-' . $model['user_id'];
                    $abrvBody = strlen($model['experience']) > 300 ? mb_substr($model['experience'], 0, 300) . '...' : $model['experience'];
                    return '<div class="col-md-3">
                                <div class="card">
                                    <canvas class="header-bg" width="250" height="150" id="header-blur"></canvas>
                                    <div class="avatar">
                                        <img src="' . Image::getUserProfilePhoto($model['user_id']) . '" alt=""/>
                                    </div>
                                    <div class="content">
                                        <p>' . $abrvBody . '</p>
                                        <p>
                                            <a href="' . Url::base() . '/psychologists/profile/' . $link . '">
                                            <button type="button" class="btn btn-default">Профиль</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <img class="src-image" src="' . Image::getUserProfilePhoto($model['user_id']) . '"/>
                            ';
                },
            )) ?>
            <?php echo $widget->renderItems(); ?>
        </div>
    </div>
</section>


<section class="gray-bg">

    <div class="container">
        <!--
                <div class="row">
                    <div style="margin-bottom: 20px;">
                        <a href="#" class="btn-style btn-large link-white" data-toggle="modal" data-target="#myModal">Найти психолога</a>
                    </div>
                </div>-->
        <!--
                <div class="contant">

                </div>
        -->
        <div class="row">

            <div class="col-md-12">
                <h2>Выбери кто тебе нужен</h2>
                <div class="form-box">
                    <!--<form style="text-align: left;">-->
                    <?php $form = ActiveForm::begin([
                        'action' => ['index'],
                        'method' => 'get',
                        'id' => 'psycho-search-form'
                    ]); ?>
                    <div class="form-body">
                        <fieldset>
                            <!--<h4>Выберите что вам интересно</h4>-->
                            <div class="row-fluid">

                                <div class="col-md-2">
                                    <label>Выберите пол</label>

                                    <?= $form->field($searchModel, 'gender')->dropDownList([
                                        "" => 'Выберите пол',
                                        "мужской" => 'Мужской',
                                        "женский" => 'Женский'
                                    ])->label(false) ?>

                                    <!--- <select class="input-block-level" name="ProfileSearch[gender]">
                                        <option value="">Выберите пол</option>
                                        <option value="мужской">Мужской</option>
                                        <option value="женский">Женский</option>
                                    </select> -->
                                </div>
                                <div class="col-md-3">
                                    <label>В каком городе ищите</label>
                                    <?= $form->field($searchModel, 'city_id')->dropDownList(
                                        ArrayHelper::map(
                                            City::find()->where([
                                                'region_id' => '10373'
                                            ])->orderBy('name')->all(), 'city_id', 'name'),
                                        ['prompt' => 'Выберите город']

                                    )->label(false) ?>
                                </div>
                                <!--               <div class="col-md-2">
                                                   <label>Стоимость сеанса от</label>
                                                   <div class="form-group">
                                                       <input type="text" name="pricef"/>
                                                   </div>
                                               </div>
                                               <div class="col-md-2">
                                                   <label>Стоимость сеанса до</label>
                                                   <div class="form-group">
                                                       <input type="text" name="pricet"/>
                                                   </div>
                                               </div>-->
                                <div class="col-md-2">
                                    <label>Стоимость сеанса от</label>
                                    <?= $form->field($searchModel, 'pricef')->textInput()->label(false) ?>
                                </div>
                                <div class="col-md-2">
                                    <label>Стоимость сеанса до</label>
                                    <?= $form->field($searchModel, 'pricet')->textInput()->label(false) ?>
                                </div>
                                <div class="col-md-2">
                                    <label>Наличие диплома</label>

                                    <?= $form->field($searchModel, 'has_diplom')->dropDownList([
                                        "" => 'Неважно',
                                        "1" => 'Только с дипломом'
                                    ])->label(false) ?>

                                    <!--- <select class="input-block-level" name="ProfileSearch[gender]">
                                        <option value="">Выберите пол</option>
                                        <option value="мужской">Мужской</option>
                                        <option value="женский">Женский</option>
                                    </select> -->
                                </div>
                                <!-- <div class="col-md-3">
                                     <label>Education Level</label>
                                     <input type="text" placeholder="Enter your Education Level"
                                            class="input-block-level">

                                 </div>
                                 <div class="col-md-3">

                                     <label>Education Level</label>
                                     <input type="text" placeholder="Enter your Education Level"
                                            class="input-block-level">

                                 </div>-->
                            </div>
                            <div class="row-fluid">

                                <div class="col-md-12">
                                    <label>Выберите с какими проблемами хотите что бы работал</label>

                                    <?= $form->field($searchModel, 'problems')->hiddenInput([
                                        'id' => "hidden_problem"
                                    ])->label(false) ?>

                                    <div class="profile-checkbox">
                                        <ul class="list-inline">
                                            <?php foreach ($psychologistProblems as $problem): ?>
                                                <li>

                                                    <input id="problem<?= $problem['id'] ?>" class="css-checkbox"
                                                           type="checkbox"
                                                           value="<?= $problem['id'] ?>">
                                                    <label for="problem<?= $problem['id'] ?>"
                                                           class="css-label"><?= $problem['name'] ?></label>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="row-fluid">

                                <div class="col-md-12">
                                    <label>Выберите с какими проблемами хотите что бы работал</label>

                                    <?= $form->field($searchModel, 'directions')->hiddenInput([
                                        'id' => "hidden_direction"
                                    ])->label(false) ?>
                                    <div class="profile-checkbox">
                                        <ul class="list-inline">
                                            <?php foreach ($psychologistDirections as $direction): ?>
                                                <li>

                                                    <input id="direction<?= $direction['id'] ?>"
                                                           class="css-checkbox"
                                                           type="checkbox"
                                                           value="<?= $direction['id'] ?>">
                                                    <label for="direction<?= $direction['id'] ?>"
                                                           class="css-label"><?= $direction['name'] ?></label>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--                <div class="row-fluid" style="margin-top: 2%;">
                                            <button type="submit" class="btn-style pull-right">Найти психолога</button>
                                        </div>-->
                        <div class="form-group">
                            <?= Html::submitButton('Искать', ['class' => 'btn-style pull-right']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>


        <div class="col-md-8">
            <h2>Результат поиска</h2>


            <?php $widget = ListView::begin(array(
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => array('class' => 'item'),
                'itemView' => function ($model, $key, $index, $widget) {

                    $link = TranslitWidget::widget(['link' => $model['firstname'] . '_' . $model['lastname']]) . '-' . $model['user_id'];

                    return '<div class="admin">

                                    <div class="col-md-3">
                                        <a href="' . Url::base() . '/psychologists/profile/' . $link . '">
                                            <img class="img-responsive" alt="" src="' . Image::getUserProfilePhoto($model['user_id']) . '"/>
                                        </a>
                                    </div>

                                    <div class="text">
                                        <div class="social-icons">
                                            <a title="" data-toggle="tooltip" href="#" data-original-title="Facebook"><i
                                                    class="fa fa-facebook"></i></a>
                                            <a title="" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i
                                                    class="fa fa-linkedin"></i></a>
                                            <a title="" data-toggle="tooltip" href="#" data-original-title="Dribbble"><i
                                                    class="fa fa-dribbble"></i></a>
                                            <a title="" data-toggle="tooltip" href="#" data-original-title="Twitter"><i
                                                    class="fa fa-twitter"></i></a>
                                            <a title="" data-toggle="tooltip" href="#" data-original-title="Google Plus"><i
                                                    class="fa fa-google-plus"></i></a>
                                        </div>
                                        <h2 style="text-align: left; ">
                                        <a href="' . Url::base() . '/psychologists/profile/' . $link . '">' . $model['firstname'] . " " . $model['lastname'] . ' </a>
                                        </h2>
                                        <p style="text-align: left; ">' . nl2br($model['experience']) . '</p>
                                    </div>
                                </div>';
                },
            )) ?>

            <?php echo $widget->renderItems(); ?>

        </div>
        <div class="col-md-4">
            <div class="sidebar">

                <div class="widget">
                    <div class="box">
                        <h2>Самые активные психологи</h2>
                        <ul class="event-galley next-course">

                            <?php foreach ($activePsychologists as $psychologist): ?>
                                <?php
                                $link = TranslitWidget::widget(['link' => $psychologist['firstname'] . '_' . $psychologist['lastname']]) . '-' . $psychologist['user_id'];
                                ?>
                                <li>
                                    <div class="thumb">
                                        <a href="<?= Url::base() . '/psychologists/profile/' . $link ?>">
                                            <img alt="" class="thumb"
                                                 src="<?= Image::getUserProfilePhoto($psychologist['user_id']) ?>">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h4>
                                            <a href="<?= Url::base() . '/psychologists/profile/' . $link ?>">
                                                <?= $psychologist['firstname'] . ' ' . $psychologist['lastname'] ?>
                                            </a>
                                        </h4>
                                        <div class="gap"></div>
                                        <p>
                                            <a href="<?= Url::base() . '/psychologists/profile/' . $link ?>">Посмотреть
                                                профиль</a>
                                        </p>
                                    </div>
                                </li>
                            <?php endforeach;; ?>

                        </ul>
                    </div>
                </div>

            </div>
        </div>


    </div>

</section>