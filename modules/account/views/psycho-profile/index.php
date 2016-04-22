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

    <div class="profile-box editing">
        <h2>Наличие диплома</h2>

        <?php if (!$sentDiplomaRequest) { ?>
            <?php
            $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                'action' => Url::base() . '/account/psycho-profile/update-diploma',
            ]);
            ?>

            <?= $form->field(new \app\models\Image(), 'image_file')->fileInput(['id' => 'imgInp'])->label('Выберите фото диплома') ?>

            <div style="color: white; display: table; ">
                <?= Html::submitButton('Отправить диплом на проверку', ['class' => 'btn-style']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        <?php } else { ?>
            <?php if ($sentDiplomaRequest['is_approved'] == '1') { ?>
                <div class="alert alert-success" role="alert">Ваш диплом подтвердили. Пользователи будут
                    видеть у вас в профиле этот знак
                </div>
                <div class="col-md-3">

                    <img src="<?= Url::base() ?>/images/diploma.png" class="img-responsive"/>

                </div>
            <?php } else { ?>
                <div class="alert alert-info" role="alert">Вы уже отправили заявку на проверку диплома</div>
            <?php } ?>
        <?php } ?>
    </div>
</div>