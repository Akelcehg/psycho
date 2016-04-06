<?php

//http://nix-tips.ru/yii2-razbiraemsya-s-gridview.html

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <div class="profile-checkbox" style="display: table;">
        <ul>
            <?php foreach ($articleCategories as $category): ?>
                <li>
                    <input id="category<?= $category['id'] ?>" class="css-checkbox" type="checkbox" name="categories[]"
                           value="<?= $category['id'] ?>">
                    <label for="category<?= $category['id'] ?>" class="css-label"><?= $category['name'] ?></label>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>


    <?php /*=$form->field($model, 'source')->textInput(['maxlength' => true])*/ ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6,
        'id' => 'editor']) ?>
    <!--    <script>
            CKEDITOR.replace('Article[text]');
        </script>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
