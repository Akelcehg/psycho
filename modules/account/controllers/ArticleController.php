<?php

namespace app\modules\account\controllers;

use app\models\ArticleCategories;
use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller {
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) /*&& $model->save()*/) {
            $categories = new ArticleCategories();
            $model->psychologist_id = Yii::$app->user->id;
            $model->is_owner = 1;
            if ($model->save()) {
                $articleCategories = Yii::$app->request->post('categories');
                if ($categories->saveArticleCategories($model->id, $articleCategories)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'articleCategories' => ArticleCategories::find()->all()
                ]);
            }

            /*if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }*/
        } else {
            return $this->render('create', [
                'model' => $model,
                'articleCategories' => ArticleCategories::find()->all()
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $articleCategories = Yii::$app->request->post('categories');
            $categories = new ArticleCategories();

            if ($model->save()) {

                if ($categories->saveArticleCategories($model->id, $articleCategories)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                var_dump($model->errors);
                return $this->render('update', [
                    'model' => $model,
                    'articleCategories' => ArticleCategories::getArticleCategories($id)
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'articleCategories' => ArticleCategories::getArticleCategories($id)
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
