<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Videos */
/* @var $form yii\widgets\ActiveForm */
?>
Добавить категории видео и описание
<div class="videos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">

        <div class="profile-checkbox" style="display: table;">
            <ul>
                <?php foreach ($videosCategories as $category): ?>
                    <li>
                        <input id="category<?= $category['id'] ?>" class="css-checkbox" type="checkbox" name="categories[]"
                               value="<?= $category['id'] ?>">
                        <label for="category<?= $category['id'] ?>" class="css-label"><?= $category['name'] ?></label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
