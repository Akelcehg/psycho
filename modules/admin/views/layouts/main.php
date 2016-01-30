<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAppAsset;

AdminAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php $this->head() ?>
    </head>
    <body>
        <div id="wrapper">
            <?php $this->beginBody() ?>

            <?= $content ?>

            <?php $this->endBody() ?>
        </div>
    </body>
</html>
<?php $this->endPage() ?>
