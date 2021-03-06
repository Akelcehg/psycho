<?php

namespace app\modules\account\controllers;

use app\models\Image;
use Yii;
use app\models\Events;
use app\models\EventSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * EventController implements the CRUD actions for Events model.
 */
class EventController extends Controller {
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
     * Lists all Events models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Events model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Events model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Events();
        $imagesModel = new Image();
        if ($model->load(Yii::$app->request->post())) {
            $userId = Yii::$app->user->id;
            $model->is_user_organizer = $userId;
            $model->organizer_id = $userId;
            if ($model->save()) {
                $imagesModel->image_file = UploadedFile::getInstance($imagesModel, 'image_file');
                if ($imagesModel->image_file) $imagesModel->saveEventImage($model->id, 550, 330);
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'imagesModel' => $imagesModel
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'imagesModel' => $imagesModel
            ]);
        }
    }

    /**
     * Updates an existing Events model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $imagesModel = new Image();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                $imagesModel->image_file = UploadedFile::getInstance($imagesModel, 'image_file');
                if ($imagesModel->image_file) $imagesModel->saveEventImage($model->id, 550, 330);
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'imagesModel' => $imagesModel
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'imagesModel' => $imagesModel
            ]);
        }
    }

    /**
     * Deletes an existing Events model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Events model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Events the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Events::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
