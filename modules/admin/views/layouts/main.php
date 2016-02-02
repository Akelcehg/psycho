<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAppAsset;

AdminAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php $this->head() ?>
</head>
<body style="height: 100%;">
<div id="wrapper" style="height: 100%;">
    <?php $this->beginBody() ?>

    <?php echo $this->render('/partials/sidebar'); ?>

    <div id="page-wrapper" style="min-height: 100%; height:auto !important; /* cross-browser */">

        <div class="container-fluid">
            <?= $content ?>

        </div>
    </div>

    <?php $this->endBody() ?>
</div>
</body>
</html>
<?php $this->endPage() ?>
