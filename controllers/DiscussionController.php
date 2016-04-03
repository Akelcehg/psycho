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
        return $this->render('single-topic', [
            "topicPosts" => DiscussionCategories::getSingleCategoryWithPosts($this->findModel($topicId)['id'])
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
