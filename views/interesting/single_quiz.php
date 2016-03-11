<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="page-heading">
    <div class="container">
        <h2>Search Result</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>
<!--BANNER END-->
<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span2"></div>
            <div class="span8">
                <div class="questions-area">

                    <?php if (isset($result)):?>

                        <?=$result?>

                    <?php endif; ?>

                    <?php $form = ActiveForm::begin(); ?>

                    <?php foreach ($quizQuestion as $key => $question): ?>

                        <div class="questions">
                            <p><?= $question[0]['name'] ?></p>
                            <?php foreach ($question as $question_answer): ?>

                                <input id="<?= $question_answer['id'] ?>" class="css-checkbox" type="radio"
                                       value="<?=$question_answer['value']?>"
                                       name="answers[<?= $question_answer['qid'] ?>]"/>
                                <label for="<?= $question_answer['id'] ?>"
                                       class="css-label"><?= $question_answer['text'] ?></label>

                            <?php endforeach; ?>
                        </div>

                    <?php endforeach; ?>
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Узнать результат', ['class' => 'btn-style']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>

            </div>
            <div class="span2"></div>
        </div>
    </div>