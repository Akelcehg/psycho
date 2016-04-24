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

        <input type="text" class="form-control" value="<?= $quizQuestions ? count($quizQuestions) : '' ?>"
               id="questionsNumberInput" maxlength="3"
            <?= $quizQuestions ? 'disabled' : '' ?>>

    </label>
    <input class="btn btn-info" type="button" id="createQuizQuestionsButton" value="Создать вопросы" <?= $quizQuestions ? 'disabled' : '' ?>>

    <hr>

    <div id="questionsDiv">
        <?php if ($quizQuestions) { ?>
            <?php foreach ($quizQuestions as $key => $question): ?>
                <div class='form-group required well'>
                    <label style='width: 100%;'>Введи сам вопрос
                        <input type='text' class='form-control'
                               value="<?= $question['name'] ?>" name='question[][name]' maxlength='50'></label>
                    <label>Кол-во ответов
                        <input type='text' class='form-control answersNumberInput' <?= $quizQuestions ? 'disabled' : '' ?>
                               value="<?= $question['quizAnswers'] ? count($question['quizAnswers']) : '' ?>">
                        <input class='btn btn-info createQuizAnswersButton' style='margin-top: 10px;' id='<?= $key ?>'
                               type='button' value='Создать ответы' <?= $quizQuestions ? 'disabled' : '' ?>></label>
                    <div class='questionAnswersDiv'>
                        <?php if ($question['quizAnswers']) { ?>
                            <?php foreach ($question['quizAnswers'] as $answerKey => $answer): ?>
                                <div class='form-group required'>
                                    <label>Введи текст ответа для вопроса
                                        <input type='text' class='form-control' value="<?= $answer['text'] ?>"
                                               name='question[<?= $key ?>][answers][<?= $answerKey ?>][text]'>
                                    </label>
                                </div>
                                <div class='form-group required'>
                                    <label>Введи кол-во балов за ответ на вопрос
                                        <input type='text' class='form-control' value="<?= $answer['value'] ?>"
                                               name='question[<?= $key ?>][answers][<?= $answerKey ?>][value]'
                                               required>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } ?>
    </div>

    <hr>
    <label>
        Введи кол-во результатов теста
        <input type="text" class="form-control" id="resultsNumberInput" maxlength="3"
               value="<?= $quizResults ? count($quizResults) : '' ?>">
    </label>
    <input class="btn btn-info" type="button" id="createQuizResultsButton" value="Создать результаты тестирования">
    <div id="testResultsValuesDiv">

        <?php if ($quizResults) { ?>
            <?php foreach ($quizResults as $key => $result): ?>
                <div class='form-group required'>
                    <label>Введи от балов<input type='text' class='form-control'
                                                value="<?= $result['value_from'] ?>"
                                                name='results[<?= $key ?>][from]'
                                                required></label>
                    <label>Введи до балов<input type='text' class='form-control'
                                                value="<?= $result['value_to'] ?>"
                                                name='results[<?= $key ?>][to]'
                                                required></label>
                    <label style='width: 100%;'>Введи результат
                        <textarea class='form-control'
                                  name='results[<?= $key ?>][text]'><?= $result['text'] ?></textarea>
                    </label>
                </div>
            <?php endforeach; ?>
        <?php } ?>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
