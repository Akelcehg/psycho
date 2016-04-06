<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleCategories;
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
            'articleCategories' => ArticleCategories::find()->all()
        ]);

    }

    public function actionView($title) {

        $articleId = explode('-', $title);
        if ($articleId[1]) {
            return $this->render('view', [
                'model' => $this->findModel($articleId[1]),
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
