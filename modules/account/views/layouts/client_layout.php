<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use \app\models\UsersModules;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">

    <?php echo $this->render('//partials/header'); ?>

    <div class="contant" style="background-color: #eeeeee;">
        <div class="container">
            <div style="margin-top: 15px;"></div>
            <div class="row">
                <div class="col-md-3">

                    <div class="profile-box profile-view">
                        <div class="thumb">
                            <a href="#"><img class="thumb" src="<?= Url::base() . '/' . $this->context->module->logo ?>"
                                             alt=""></a>
                        </div>
                        <div class="text">
                            <p><?= $this->context->module->first_name . " " . $this->context->module->last_name ?></p>
                        </div>

                    </div>

                    <div class="profile-box edit-profile">
                        <!--<h2>Настройки</h2>-->
                        <ul>
                            <li><a href="<?= Url::base() ?>/account/settings">Настройки</a></li>
                            <li><a href="<?= Url::base() ?>/account/profile">Профиль</a></li>
                            <?php foreach ($this->context->module->userModules as $module): ?>
                                <li><a href="<?= Url::base() . $module['link'] ?>"><?= $module['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="logout">
                            <?= Html::a('Выйти', ['/site/logout'], [
                                'data' => [
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>
                    </div>

                </div>

                <?= $content ?>

            </div>
            <div class="gap"></div>
        </div>
    </div>

    <?php echo $this->render('//partials/footer'); ?>

</div>


<?php $this->endBody() ?>
<script>
    initSample();
</script>
</body>
</html>
<?php $this->endPage() ?>
