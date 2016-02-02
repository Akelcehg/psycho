<?php
use app\components\ClientMenuWidget;

?>

<?php echo $this->render('//partials/menu'); ?>

<?= ClientMenuWidget::widget(); ?>