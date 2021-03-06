<?php

namespace app\modules\admin\controllers;

use app\models\QuestionsAnswers;
use app\models\QuizQuestions;
use app\models\QuizResults;
use Yii;
use app\models\Quiz;
use app\models\QuizSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QuizController implements the CRUD actions for Quiz model.
 */
class QuizController extends Controller {
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
     * Lists all Quiz models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new QuizSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Quiz model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Quiz model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Quiz();
        $quizQuestion = new QuizQuestions();
        $quizResults = new QuizResults();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($quizQuestion->saveQuizQuestions(Yii::$app->request->post('question'), $model['id'])) {
                if ($quizResults->saveQuizResults($model['id'], Yii::$app->request->post('results'))) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            //return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Quiz model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public
    function actionUpdate($id) {
        $model = $this->findModel($id);

        $quizQuestions = QuizQuestions::find()->where(['quiz_id' => $id])
            ->with('quizAnswers')
            ->all();
        $quizResults = QuizResults::findAll(['quiz_id' => $id]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            foreach ($quizQuestions as $question) {
                QuestionsAnswers::deleteAll(['question_id' => $question['id']]);
            }

            QuizResults::deleteAll(['quiz_id' => $id]);
            QuizQuestions::deleteAll(['quiz_id' => $id]);

            $newQuizQuestion = new QuizQuestions();
            $newQuizResults = new QuizResults();

            if ($newQuizQuestion->saveQuizQuestions(Yii::$app->request->post('question'), $model['id'])) {
                if ($newQuizResults->saveQuizResults($model['id'], Yii::$app->request->post('results'))) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'quizQuestions' => $quizQuestions,
                'quizResults' => $quizResults
            ]);
        }
    }

    /**
     * Deletes an existing Quiz model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public
    function actionDelete($id) {
        $this->findModel($id)->delete();
        QuizResults::deleteAll(['quiz_id' => $id]);
        QuizQuestions::deleteAll(['quiz_id' => $id]);
        return $this->redirect(['index']);
    }

    /**
     * Finds the Quiz model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Quiz the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findModel($id) {
        if (($model = Quiz::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
