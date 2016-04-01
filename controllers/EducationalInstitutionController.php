<?php

namespace app\controllers;

use app\models\EducationalInstitution;
use app\models\EducationalInstitutionSearch;
use app\models\EducationalInstitutionTop;
use Yii;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class EducationalInstitutionController extends \yii\web\Controller {
    public function actionIndex() {

        $educationsTop = new EducationalInstitutionTop();

        $searchModel = new EducationalInstitutionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'educationsTop' => $educationsTop->getTop()
        ]);
    }

    public function actionView($title) {

        $educationInstituteId = explode('-', $title);

        return $this->render('institute', [
            'educationInstitute' => $this->findModel($educationInstituteId[1]),
        ]);

    }

    protected function findModel($id) {
        if (($model = EducationalInstitution::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
