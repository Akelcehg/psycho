<?php

namespace app\modules\account\controllers;

use app\models\Image;
use Yii;
use app\models\EducationalInstitution;
use app\models\EducationalInstitutionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * EducationalInstitutionController implements the CRUD actions for EducationalInstitution model.
 */
class EducationalInstitutionController extends Controller {
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
     * Lists all EducationalInstitution models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new EducationalInstitutionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EducationalInstitution model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EducationalInstitution model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new EducationalInstitution();
        $imagesModel = new Image();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                $imagesModel->image_file = UploadedFile::getInstance($imagesModel, 'image_file');
                if ($imagesModel->image_file) $imagesModel->saveSchoolImage($model->id, 400, 200);
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
     * Updates an existing EducationalInstitution model.
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
                if ($imagesModel->image_file) $imagesModel->saveSchoolImage($model->id, 400, 200);
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
     * Deletes an existing EducationalInstitution model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EducationalInstitution model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return EducationalInstitution the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = EducationalInstitution::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
