<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="schools-index">

    <h1><? /*= Html::encode($this->title) */ ?></h1>
    <?php /*echo $this->render('_search', ['model' => $searchModel]); */ ?>

    <p>
        <? /*= Html::a('Create Schools', ['create'], ['class' => 'btn btn-success']) */ ?>
    </p>

    <? /*= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
        },
    ]) */ ?>

</div>-->

<?php

use yii\helpers\Url;

?>

<div class="nicdark_space100"></div>
<div class="nicdark_space20"></div>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_4">

            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_margin10 nicdark_relative">

                    <a href="/psycho/account/schools/create"
                       class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_red medium nicdark_radius_circle white nicdark_absolute"><i
                            class="icon-plus"></i></a>

                    <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                        <h4>Добавить школу</h4>
                        <p>Lorem ipsum dolor sit amet, consec adipiscing elit.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12">

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'summary' => '',
                'itemView' => function ($model, $key, $index, $widget) {
                    return '<div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage20 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="' . Url::base() . '/img/team/img1.jpg">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage70 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">JULIETTE LIGHT</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span>
                        </div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum
                            dolor sit amet.</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i>
                            Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence " style="width:5%; !important;">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i
                            class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i
                            class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html"
                       class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i
                            class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>';
                },
            ]) ?>

        </div>


    </div>
</section>