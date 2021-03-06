<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleCategories;
use app\models\ArticleComments;
use app\models\ArticleSearch;
use app\models\Profile;
use Yii;
use yii\web\NotFoundHttpException;

class ArticleController extends \yii\web\Controller {

    public function actionIndex() {

        $searchModel = new ArticleSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 6;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'articleCategories' => ArticleCategories::find()->all(),
            'popularPosts' => Article::getPopularPosts()
        ]);

    }

    public function actionView($title) {

        $articleId = explode('-', $title);
        $articleModel = new ArticleComments();

        $model = new ArticleComments();
        $model->user_id = Yii::$app->user->id;
        $article = $this->findModel($articleId[1]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', [
                'model' => $article,
                'articleComments' => $articleModel,
                'articleCommentsList' => ArticleComments::getArticleComments($articleId[1]),
                'popularPosts' => Article::getPopularPosts(),
                'author' => Profile::findOne(['user_id' => $article['psychologist_id']]),
            ]);
        }

        if ($articleId[1]) {
            $articleModel->article_id = $articleId[1];
            return $this->render('view', [
                'model' => $article,
                'articleComments' => $articleModel,
                'articleCommentsList' => ArticleComments::getArticleComments($articleId[1]),
                'popularPosts' => Article::getPopularPosts(),
                'author' => Profile::findOne(['user_id' => $article['psychologist_id']]),
            ]);
        }
    }

    protected function findModel($id) {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
