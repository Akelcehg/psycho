<?php

use yii\widgets\ListView;

use app\components\TranslitWidget;
use yii\helpers\Url;

?>


<section style="padding: 0;">
    <div class="container" id="forum">

        <?php

            $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($categoryModel['name']))]) . '-' . $categoryModel['id'];

        ?>
        <table class="table forum table-striped" style="table-layout: fixed;
    word-wrap: break-word;">
            <thead>
            <tr>
                <th class="cell-stat"></th>
                <th>
                    <h3><a href="<?= Url::base() . '/topic/' . $link ?>" class="discussion-link">
                            <?=$categoryModel['name']?></a>
                        <i class="fa fa-pencil"></i>
                    </h3>
                </th>
                <!--<th class="cell-stat text-center hidden-xs hidden-sm"></th>-->
                <th class="cell-stat-2x text-center hidden-xs hidden-sm">Комментариев</th>
                <th class="cell-stat-2x hidden-xs hidden-sm">Последний добавил</th>
            </tr>
            </thead>
            <tbody>


            <?php $widget = ListView::begin([
                'dataProvider' => $topicPosts,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {

                    $postLink = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($model['title']))]) . '-' . $model['dpId'];

                    $content = ' <tr>
                                    <td class="text-center"><i class="fa fa-envelope fa-2x text-primary"></i></td>
                                    <td style="text-align: left;">

                                        <p>
                                            <a href="'.Url::base() ."/post/" . $postLink.'">'.$model['title'].'</a><br>
                                            <small>Some description'.$model['dpId'].'</small>
                                        </p>

                                    </td>
                                    <!--<td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>-->
                                    <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                                    <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                                        <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                                    </td>
                                </tr>';
                    return $content;
                },
            ]) ?>

            <?php echo $widget->renderItems(); ?>

            </tbody>
        </table>

    </div>
    <div class="pagination">
        <?= $widget->renderPager(); ?>
    </div>

</section>
