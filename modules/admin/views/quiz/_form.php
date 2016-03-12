<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Quiz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quiz-form">

    <?php $form = ActiveForm::begin([
        //'htmlOptions' => [
        'class' => 'quizForm'
        //]
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <label>
        Введи кол-во вопросов
        <input type="text" class="form-control" id="questionsNumberInput" maxlength="3">
    </label>
    <input class="btn btn-info" type="button" id="createQuizQuestionsButton" value="Создать вопросы">

    <hr>

    <div id="questionsDiv">

    </div>

    <hr>
    <label>
        Введи кол-во результатов теста
        <input type="text" class="form-control" id="resultsNumberInput" maxlength="3">
    </label>
    <input class="btn btn-info" type="button" id="createQuizResultsButton" value="Создать результаты тестирования">
    <div id="testResultsValuesDiv">

    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>