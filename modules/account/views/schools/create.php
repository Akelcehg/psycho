<?php

use yii\helpers\Html;

?>

<div class="nicdark_space100"></div>
<div class="nicdark_space20"></div>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</section>
