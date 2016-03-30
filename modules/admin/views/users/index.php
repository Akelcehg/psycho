<?php

use yii\grid\GridView;

?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Зарегестрированные пользователи</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="dataTable_wrapper">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,

                        'filterModel' => $searchModel,

                        'summary' => '',
                        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'email',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                    ]); ?>

                </div>

            </div>

        </div>

    </div>

</div>
