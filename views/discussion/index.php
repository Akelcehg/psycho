<?php

use app\components\TranslitWidget;
use yii\helpers\Url;

?>

<section style="padding: 0;">
    <div class="container" id="forum">

        <div class="table-responsive">

            <?php foreach ($DiscussionCategories as $categoryName => $categoryPosts): ?>

                <?php

                if ($categoryPosts[0]['id'])
                    $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($categoryName))]) . '-' . $categoryPosts[0]['id'];

                ?>
                <table class="table forum table-striped">
                    <thead>
                    <tr>
                        <th class="cell-stat"></th>
                        <th>
                            <?php if ($categoryPosts[0]['id']) { ?>
                                <h3><a href="<?= Url::base() . '/topic/' . $link ?>"
                                       class="discussion-link"><?= $categoryName ?></a>
                                    <i class="fa fa-pencil"></i>
                                </h3>
                            <?php } else { ?>
                                <h3><?= $categoryName ?> <i class="fa fa-pencil"></i></h3>
                            <?php } ?>
                        </th>
                        <!--<th class="cell-stat text-center hidden-xs hidden-sm"></th>-->
                        <th class="cell-stat text-center hidden-xs hidden-sm">Комментариев</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Последний добавил</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    if ($categoryPosts[0]['id']) {
                        foreach ($categoryPosts as $postId => $post):
                            ?>
                            <?php
                            $postLink = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($post['text']))]) . '-' . $post['id'];
                            ?>
                            <tr>
                                <td class="text-center"><i class="fa fa-envelope fa-2x text-primary"></i></td>
                                <td>
                                    <h4><a href="<?= Url::base() . '/post/' . $postLink ?>"><?= $post['text'] ?></a><br>
                                        <small>Some description</small>
                                    </h4>
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
                            <td>
                                <a href="#" class="btn-style" style="color: white;">Добавить сообщение</a>
                            </td>
                            <!--<td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>-->
                            <td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>
                            <td class="hidden-xs hidden-sm"></td>
                        </tr>
                    <?php } else { ?>

                        <tr>
                            <td class="text-center"><i class="fa fa-envelope fa-2x text-primary"></i></td>
                            <td>
                                <a href="#" class="btn-style" style="color: white;">Добавить сообщение</a>
                            </td>
                            <!--<td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>-->
                            <td class="text-center hidden-xs hidden-sm"><a href="#"></a></td>
                            <td class="hidden-xs hidden-sm"></td>
                        </tr>

                    <?php } ?>

                    </tbody>
                </table>

            <?php endforeach; ?>

            <!--<table class="table forum table-striped">

                    <thead>
                    <tr>
                        <th class="cell-stat"></th>
                        <th>
                            <h3>Вопросы психологам (ссылка)</h3>
                        </th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                        <td>
                            <h4><a href="#">Вопрос 1</a><br>
                                <small>Some description</small>
                            </h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                            <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                        <td>
                            <h4><a href="#">Вопрос 2</a><br>
                                <small>Some description</small>
                            </h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                            <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="#">Вопрос 3</a><br>
                                <small>Category description</small>
                            </h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br>
                            <small><i class="fa fa-clock-o"></i> 1 years ago</small>
                        </td>
                    </tr>
                    </tbody>
                </table>-->
            <!--<table class="table forum table-striped">
                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        <h3>Вопросы</h3>
                    </th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="#">More more more</a><br>
                            <small>Category description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-magic fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="#">Haha</a><br>
                            <small>Category description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 1 years ago</small>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="table forum table-striped">
                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        <h3>Open discussion</h3>
                    </th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td colspan="4" class="center">No topics have been added yet.</td>
                </tr>
                </tbody>
            </table>-->
        </div>

    </div>
</section>
