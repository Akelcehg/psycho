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

                    <?php foreach ($quizQuestion as $key => $question): ?>

                        <div class="questions">
                            <p><?= $question[0]['name'] ?></p>
                            <?php foreach ($question as $question_answer): ?>

                                <input id="<?= $question_answer['id'] ?>" class="css-checkbox" type="checkbox"
                                       name="<?= $question_answer['id'] ?>"/>
                                <label for="<?= $question_answer['id'] ?>"
                                       class="css-label"><?= $question_answer['text'] ?></label>

                            <?php endforeach; ?>
                        </div>

                    <?php endforeach; ?>
                    
                </div>

            </div>
            <div class="span2"></div>
        </div>
    </div>