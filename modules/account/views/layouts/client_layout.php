<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\ActiveForm;
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
                            <?php
                            $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                                'action' => Url::base() . '/account/profile/update-photo'
                            ]);
                            ?>

                            <?= $form->field(new \app\models\Image(), 'image_file')->fileInput()->label('Выберите фото') ?>

                            <div style="color: white; display: table; margin: 0 auto;">
                                <?= Html::submitButton('Сохранить фото', ['class' => 'btn-style']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                            <a href="#" class="btn-style">Marrie James</a>
                        </div>
                    </div>
                    <!--PROFILE IMAGE END-->
                    <!--EDIT PROFILE START-->
                    <div class="profile-box edit-profile">
                        <h2>Account Setting</h2>
                        <ul>
                            <li><a href="<?= Url::base() ?>/account/article">Мои статьи</a></li>
                            <li><a href="<?= Url::base() ?>/account/profile">Мой профиль</a></li>
                            <li><a href="#">Edit Password</a></li>
                            <li><a href="#">View Quiz Scores</a></li>
                            <li><a href="#">Attended Courses</a></li>
                            <li><a href="#">Booked Courses</a></li>
                            <li><a href="#">Confirmed Courses</a></li>
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

</body>
</html>
<?php $this->endPage() ?>
