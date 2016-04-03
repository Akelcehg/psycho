<?php

namespace app\controllers;

use app\models\DiscussionCategories;
use yii\web\NotFoundHttpException;

class DiscussionController extends \yii\web\Controller {
    public function actionIndex() {
        return $this->render('index', [
            'DiscussionCategories' => DiscussionCategories::getCategoriesWithPosts(),
        ]);
    }

    public function actionPost() {
        return $this->render('post');
    }

    public function actionTopic($title) {
        $topicId = explode('-', $title)[1];
        $categoryModel = $this->findModel($topicId);
        return $this->render('single-topic', [
            "categoryModel" => $categoryModel,
            "topicPosts" => DiscussionCategories::getSingleCategoryWithPosts($categoryModel['id'])
        ]);
    }

    protected function findModel($id) {
        if (($model = DiscussionCategories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
