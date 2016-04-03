<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

?>


<div class="container">
    <h1 class="page-header"><i class="fa fa-pencil"></i> <?= $postModel['title'] ?></h1>

    <ul class="media-list forum">
        <!-- Forum Post -->
        <li class="media well" style="border: 1px solid rgba(199, 1, 46, 0.5);">
            <div class="pull-left user-info" href="#">
                <img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
                     width="64" alt="Generic placeholder image">
                <strong><a href="user.html">John Doe</a></strong>
                <small>Member</small>
            </div>
            <div class="media-body">

                <div class="forum-post-panel btn-group btn-group-xs">
                    <a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> <?= $postModel['created_at'] ?>
                    </a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-warning"></i> Пожаловаться</a>
                </div>

                <p><?= $postModel['text'] ?></p>
            </div>
        </li>
    </ul>


    <ul class="media-list forum">

        <?php $widget = ListView::begin([
            'dataProvider' => $topics,
            'summary' => '',
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {

                $content = '<li class="media well">
                                <div class="pull-left user-info" href="#">
                                    <img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
                                         width="64" alt="Generic placeholder image">
                                    <strong><a href="user.html">John Doe</a></strong>
                                    <small>Member</small>
                                    <br>
                                    <small class="btn-group btn-group-xs">
                                        <a class="btn btn-default"><i class="fa fa-envelope"></i></a>
                                        <strong class="btn btn-success">98</strong>
                                    </small>
                                </div>
                                <div class="media-body">

                                    <div class="forum-post-panel btn-group btn-group-xs">
                                        <a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> ' . $model['created_at'] . '</a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-warning"></i> Пожаловаться</a>
                                    </div>

                                    <p>' . $model['text'] . '</p>

                                </div>
                            </li>';
                return $content;
            },
        ]) ?>

        <?php echo $widget->renderItems(); ?>

    </ul>


    <div class="pagination">
        <?= $widget->renderPager(); ?>
    </div>


    <div class="leave-reply">
        <h2>Оставить комментарий</h2>

        <div class="row-fluid">

            <!--<div class="text-area">
                <textarea class="input-block-level" placeholder="Comments"></textarea>
                <button class="btn-style">Submit</button>
            </div>-->

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'text')->textarea(['maxlength' => true, 'class' => 'input-block-level']) ?>

            <div class="form-group">
                <?= Html::submitButton('Создать', ['class' => 'btn-style']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>