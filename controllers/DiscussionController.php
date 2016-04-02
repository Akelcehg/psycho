<?php

namespace app\controllers;

use app\models\DiscussionCategories;
use yii\helpers\ArrayHelper;

class DiscussionController extends \yii\web\Controller {
    public function actionIndex() {

        //var_dump(DiscussionCategories::getCategoriesWithPosts());
        //var_dump(ArrayHelper::map(DiscussionCategories::getCategoriesWithPosts(),'id','text','name'));

        //\Yii::$app->end();
        return $this->render('index', [
            'DiscussionCategories' => ArrayHelper::map(DiscussionCategories::getCategoriesWithPosts(), 'id', 'text', 'name')
        ]);
    }

    public function actionPost() {
        return $this->render('post');
    }

}
