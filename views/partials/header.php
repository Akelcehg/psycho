<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<header class="header-2">
    <!--NAVIGATION START-->
    <div class="navigation-bar">
        <div class="container">

            <div class="logo">
                <a href="index.html"><img src="images/logo3.png" alt=""></a>
            </div>

            <div class="navigation">
                <div class="navbar">
                    <div class="container">
                        <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar collapsed"
                                type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul>
                                <li><a href="<?= Url::base() ?>">Главная</a></li>
                                <?php if (Yii::$app->user->isGuest) { ?>
                                    <li>
                                        <a href="#">Кабинет</a>
                                        <ul>
                                            <li><a href="<?= Url::to('signup') ?>">Регистрация</a></li>
                                            <li><a href="<?= Url::to('login') ?>">Войти</a></li>
                                        </ul>
                                    </li>
                                <?php } else { ?>

                                    <li>

                                        <a href="#">Мой профиль</a>
                                        <ul>
                                            <li><a href="account/profile">Profile</a></li>
                                            <li><a href="#">Account Setting</a></li>
                                            <li><a href="#">Privacy Setting</a></li>
                                            <li>
                                                <?= Html::a('Выйти', ['site/logout'], [
                                                    'data' => [
                                                        'method' => 'post',
                                                    ],
                                                ]) ?>
                                            </li>
                                        </ul>

                                    </li>
                                <?php } ?>
                                <li><a href="<?= Url::base() ?>/interesting">Интересное</a></li>
                                <li><a href="<?= Url::base() ?>/article">Статьи</a></li>
                                <li><a href="<?= Url::base() ?>/video">Видео</a></li>
                                <li><a href="<?= Url::base() ?>/discussion">Форум</a></li>
                                <li><a href="<?= Url::base() ?>/trainings">Тренинги</a></li>
                                <li><a href="<?= Url::base() ?>/educational-institution">Школы</a></li>
                                <li><a href="<?= Url::base() ?>/psychologists">Психологи</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>