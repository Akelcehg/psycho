<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="col-md-8">
    <div class="profile-box editing">

        <?php
        $form = ActiveForm::begin([
            'id' => 'profileForm'
        ]);
        ?>
        <div class="col-md-3">
            <?=
            $form->field($profileModel, 'price')->textInput()
            ?>
        </div>
        <div class="col-md-12">
            <?=
            $form->field($profileModel, 'education')->textArea([
                'id' => 'profile_education_input',
                'placeholder' => "Введите ваше образование бла бла",
                ///'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
                //'style' => 'overflow:auto;width:100%;'
            ])
            ?>
        </div>
        <div class="col-md-12">
            <?=
            $form->field($profileModel, 'experience')->textArea([
                'id' => 'profile_experience_input',
                'placeholder' => "Введите ваш опыт работы бла бла",
                //'style' => 'overflow:automin-height:100px;resize: none;border: 2px solid #52b7e7;'
                //'style' => 'overflow:auto;width:100%;'
            ])
            ?>
        </div>
        <?= Html::submitButton('Сохранить изменения профиля', ['class' => 'btn-style']) ?>
        <?php ActiveForm::end(); ?>
    </div>

    <div class="profile-box editing">

        <h2>Ваши направления в психотерапии</h2>

        <?php
        $form = ActiveForm::begin([
            'action' => Url::base() . '/account/psycho-profile/update-directions'
        ]);
        ?>

        <div class="profile-checkbox">

            <div class="col-md-12">
                <ul class="list-inline">
                    <?php foreach ($psychologistDirections as $direction): ?>
                        <li>

                            <input id="direction<?= $direction['id'] ?>" class="css-checkbox" type="checkbox"
                                   name="directions[]" value="<?= $direction['id'] ?>"
                                <?php if ($direction['active'] != NULL) echo "checked" ?>>
                            <label for="direction<?= $direction['id'] ?>"
                                   class="css-label"><?= $direction['name'] ?></label>

                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>

        <div style="color: white; display: table; margin-top: 20px;">
            <?= Html::submitButton('Сохранить направления', ['class' => 'btn-style']) ?>
        </div>


        <?php ActiveForm::end(); ?>

        <div class="gap"></div>
        <h2>С какими поблемами работаете</h2>

        <?php
        $form = ActiveForm::begin([
            'action' => Url::base() . '/account/psycho-profile/update-problems'
        ]);
        ?>

        <div class="profile-checkbox" style="display: table;">
            <div class="col-md-12">
                <ul class="list-inline">
                    <?php foreach ($psychologistProblems as $problem): ?>
                        <li>

                            <input id="problem<?= $problem['id'] ?>" class="css-checkbox" type="checkbox"
                                   name="problems[]"
                                   value="<?= $problem['id'] ?>"
                                <?php if ($problem['active'] != NULL) echo "checked" ?> >
                            <label for="problem<?= $problem['id'] ?>" class="css-label"><?= $problem['name'] ?></label>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
        <div style="color: white; display: table; margin-top: 20px;">
            <?= Html::submitButton('Сохранить проблемы', ['class' => 'btn-style']) ?>
        </div>


        <?php ActiveForm::end(); ?>


    </div>
</div>