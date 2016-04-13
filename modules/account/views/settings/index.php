<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="col-md-8">
    <div class="profile-box editing">

        <div class="row">
            <div class="col-md-12">

                <?php $form = ActiveForm::begin([
                    'action' => Url::base() . '/account/settings/update-settings'
                ]);
                ?>
                <div class="panel panel-default">

                    <!--<div class="panel-heading">Material Design Switch Demos</div>-->

                    <ul class="list-group">

                        <?php foreach ($userModules as $module): ?>
                            <li class="list-group-item">
                                <?= $module['name'] ?>
                                <div class="material-switch pull-right">
                                    <?php if ($module['active']) { ?>
                                        <input id="module<?= $module['id'] ?>" name="settings[]"
                                               value="<?= $module['id'] ?>" type="checkbox"
                                               checked/>
                                    <?php } else { ?>
                                        <input id="module<?= $module['id'] ?>" name="settings[]"
                                               value="<?= $module['id'] ?>" type="checkbox"/>
                                    <?php } ?>

                                    <label for="module<?= $module['id'] ?>" class="label-info"></label>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>


                </div>

                <div style="color: white; display: table; margin-top: 20px;">
                    <?= Html::submitButton('Сохранить настройки', ['class' => 'btn-style']) ?>
                </div>


                <?php ActiveForm::end(); ?>

            </div>

        </div>
    </div>
</div>