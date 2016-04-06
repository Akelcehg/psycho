<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleCategories;
use app\models\ArticleComments;
use app\models\ArticleSearch;
use Yii;
use yii\web\NotFoundHttpException;

class ArticleController extends \yii\web\Controller {

    public function actionIndex() {

        $searchModel = new ArticleSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

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
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', [
                'model' => $this->findModel($articleId[1]),
                'articleComments' => $articleModel,
                'articleCommentsList' => ArticleComments::getArticleComments($articleId[1])
            ]);
        }

        if ($articleId[1]) {
            $articleModel->article_id = $articleId[1];
            return $this->render('view', [
                'model' => $this->findModel($articleId[1]),
                'articleComments' => $articleModel,
                'articleCommentsList' => ArticleComments::getArticleComments($articleId[1])
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
