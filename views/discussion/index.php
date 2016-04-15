<?php

use app\components\TranslitWidget;
use yii\helpers\Url;

?>

<section style="padding: 0;">

    <div class="container" id="forum">


        <?php foreach ($DiscussionCategories as $categoryName => $categoryPosts): ?>

            <?php

            if (isset($categoryPosts[0]['id']))
                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($categoryName))]) . '-' . $categoryPosts[0]['discussion_category_id'];

            ?>
            <table class="table forum table-striped" style="table-layout: fixed;
    word-wrap: break-word;">
                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        <?php if (isset($categoryPosts[0]['id'])) { ?>
                            <h3><a href="<?= Url::base() . '/topic/' . $link ?>"
                                   class="discussion-link"><?= $categoryName ?></a>
                                <i class="fa fa-pencil"></i>
                            </h3>
                        <?php } else { ?>
                            <h3><?= $categoryName ?> <i class="fa fa-pencil"></i></h3>
                        <?php } ?>
                    </th>
                    <!--<th class="cell-stat text-center hidden-xs hidden-sm"></th>-->
                    <th class="cell-stat-2x text-center hidden-xs hidden-sm">Комментариев</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Последний добавил</th>
                </tr>
                </thead>
                <tbody>

                <?php

                if (isset($categoryPosts[0]['id'])) {
                    foreach ($categoryPosts as $postId => $post):
                        ?>
                        <?php
                        $postLink = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($post['title']))]) . '-' . $post['id'];
                        ?>
                        <tr>
                            <td class="text-center"><i class="fa fa-envelope fa-2x text-primary"></i></td>
                            <td style="text-align: left;">

                                <p>
                                    <a href="<?= Url::base() . '/post/' . $postLink ?>"><?= $post['title'] ?></a><br>
                                    <small>Some description</small>
                                </p>

                            </td>
                            <!--<td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>-->
                            <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                            <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                                <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td class="text-center"><i class="fa fa-plus fa-2x text-primary"></i></td>
                        <td style="text-align: left;">
                            <a href="<?= Url::base() . '/discussion/new-topic?category=' . $categoryPosts[0]['discussion_category_id'] ?>"
                               class="btn-style"
                               style="color: white;">Задать вопрос психологам</a>
                        </td>
                        <!--<td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>-->
                        <td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>
                        <td class="hidden-xs hidden-sm"></td>
                    </tr>
                <?php } else { ?>

                    <tr>
                        <td class="text-center"><i class="fa fa-plus fa-2x text-primary"></i></td>
                        <td style="text-align: left;">
                            <a href="<?= Url::base() . '/discussion/new-topic?category=' . $categoryPosts[0] ?>"
                               class="btn-style"
                               style="color: white;">Задать вопрос психологам</a>
                        </td>
                        <!--<td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>-->
                        <td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>
                        <td class="hidden-xs hidden-sm"></td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>

        <?php endforeach; ?>

    </div>


</section>
