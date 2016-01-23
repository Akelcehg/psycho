<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="start_nicdark_framework">
<?php $this->beginBody() ?>

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix">
        <div class="nicdark_overlay"></div>

        <?php echo $this->render('//partials/menu'); ?>
        <?php echo $this->render('//partials/client_menu'); ?>

        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
<?php echo $this->render('//partials/footer'); ?>
</body>
</html>
<?php $this->endPage() ?>
