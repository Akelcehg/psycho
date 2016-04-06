<?php

namespace app\controllers;

use app\models\DiscussionCategories;
use app\models\DiscussionPostReply;
use app\models\DiscussionPosts;
use Yii;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;

class DiscussionController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index', [
            'DiscussionCategories' => DiscussionCategories::getCategoriesWithPosts(),
        ]);
    }

    public function actionPost($title) {
        $postId = explode('-', $title)[1];
        $postModel = $this->findPostModel($postId);

        $model = new DiscussionPostReply();

        if ($model->load(Yii::$app->request->post())) {
            $model->discussion_post_id = $postId;
            $model->user_id = Yii::$app->user->id;
            if ($model->save())
                return $this->render('post', [
                    'postModel' => $postModel,
                    'model' => $model,
                    'topics' => DiscussionPostReply::getPostReplies($postId)
                ]);
        } else {
            return $this->render('post', [
                'postModel' => $postModel,
                'model' => $model,
                'topics' => DiscussionPostReply::getPostReplies($postId)
            ]);
        }
    }

    public function actionTopic($title) {
        $topicId = explode('-', $title)[1];
        $categoryModel = $this->findModel($topicId);
        return $this->render('single-topic', [
            "categoryModel" => $categoryModel,
            "topicPosts" => DiscussionCategories::getSingleCategoryWithPosts($categoryModel['id'])
        ]);
    }

    public function actionNewTopic($category) {

        $model = new DiscussionPosts();
        $categoryModel = $this->findModel($category);
        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = Yii::$app->user->id;
            $model->discussion_category_id = $categoryModel['id'];

            if ($model->save())
                return $this->redirect(Url::base() . '/discussion');
        } else {
            return $this->render('new_topic', [
                'model' => $model,
                'categoryModel' => $categoryModel
            ]);
        }

    }

    protected function findModel($id) {
        if (($model = DiscussionCategories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findPostModel($id) {
        if (($model = DiscussionPosts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
