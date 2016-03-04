<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<header class="header-6">
    <!--NAVIGATION START-->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="span2">
                </div>
                <div class="span10">
                    <div class="navigation">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container">
                                    <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"
                                            type="button">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="nav-collapse collapse">
                                        <ul>
                                            <li><a href="<?= Url::base() ?>">Главная</a>
                                                <!--<ul>
                                                    <li><a href="index.html">Home Page Default</a></li>
                                                    <li><a href="index-1.html">Home Page 1</a></li>
                                                    <li><a href="index-2.html">Home Page 2</a></li>
                                                    <li><a href="index-3.html">Home Page 3</a></li>
                                                    <li><a href="index-4.html">Home Page 4</a></li>
                                                    <li><a href="index-sidemenu.html">Home Page 5</a></li>
                                                </ul>-->
                                            </li>
                                            <li><a href="<?= Url::to('interesting') ?>">Интересное</a></li>
                                            <li><a href="<?= Url::to('article') ?>">!!Статьи</a></li>
                                            <li><a href="<?= Url::to('psychologists') ?>">!!Видео</a></li>
                                            <li><a href="<?= Url::to('trainings') ?>">Тренинги</a></li>
                                            <li><a href="<?= Url::to('psychologists') ?>">Учебные заведения</a></li>
                                            <li><a href="<?= Url::to('psychologists') ?>">Психологи</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--NAVIGATION END-->
    <!--TOP STRIP START-->
    <div class="top-strip">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="<?= Url::base() ?>/images/logo3.png" alt=""></a>
            </div>
            <!--ACCOUNT SECTION START-->
            <div class="account">
                <ul>
                    <?php if (Yii::$app->user->isGuest) { ?>
                        <li><a href="<?= Url::to('signup') ?>">Регистрация</a></li>
                        <li><a href="<?= Url::to('login') ?>">Войти</a></li>
                    <?php } else { ?>

                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown"
                                   data-target="#"
                                   href="/page.html">
                                    My Account
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                    <li><a href="#">Profile</a></li>
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
                            </div>
                        </li>

                    <?php } ?>
                    <!--<li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#"
                               href="/page.html">
                                My Account
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Account Setting</a></li>
                                <li><a href="#">Privacy Setting</a></li>
                            </ul>
                        </div>
                    </li>-->
                </ul>
            </div>
            <!--ACCOUNT SECTION START-->
        </div>
    </div>
    <!--TOP STRIP END-->

</header>
