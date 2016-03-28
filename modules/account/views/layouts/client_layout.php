<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

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

    <div class="contant">
        <div class="container">
            <div style="margin-top: 15px;"></div>
            <div class="row">
                <div class="span4">
                    <!--PROFILE IMAGE START-->
                    <div class="profile-box profile-view">
                        <div class="thumb">

                            <a href="#"><img src="<?= Url::base() . '/' . $this->context->module->logo ?>" alt=""></a>

                        </div>
                        <div class="text">
                            <p><?=$this->context->module->first_name." ".$this->context->module->last_name?></p>
                        </div>
                    </div>
                    <!--PROFILE IMAGE END-->
                    <!--EDIT PROFILE START-->
                    <div class="profile-box edit-profile">
                        <h2>Account Setting</h2>
                        <ul>
                            <li><a href="<?= Url::base() ?>/account/profile">Мой профиль</a></li>
                            <li><a href="<?= Url::base() ?>/account/article">Мои статьи</a></li>
                            <li><a href="<?= Url::base() ?>/account/educational-institution">Мои школы</a></li>
                            <li><a href="<?= Url::base() ?>/account/videos">Мои видео</a></li>
                            <li><a href="<?= Url::base() ?>/account/event">Мои тренинги</a></li>
                        </ul>
                        <div class="logout">
                            <a href="#">Log Out</a>
                        </div>
                    </div>
                    <!--EDIT PROFILE END-->
                </div>

                <?= $content ?>

            </div>
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
