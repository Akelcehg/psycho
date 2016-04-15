<?php

namespace app\controllers;

use app\models\EducationalInstitution;
use app\models\EducationalInstitutionSearch;
use app\models\EducationalInstitutionTop;
use app\models\Profile;
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

        $institute = $this->findModel($educationInstituteId[1]);
        return $this->render('institute', [
            'educationInstitute' => $institute,
            //'organizer' => Profile::findOne(['user_id'=>$institute['organizer_id']]),
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
