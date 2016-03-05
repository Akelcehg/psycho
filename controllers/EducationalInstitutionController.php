<?php

namespace app\controllers;

use app\models\EducationalInstitution;
use app\models\EducationalInstitutionSearch;
use app\models\EducationalInstitutionTop;
use Yii;
use yii\data\Pagination;

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

    public function actionView($id) {

        $educationInstitute = EducationalInstitution::findOne(['id' => $id]);

        return $this->render('institute', [
            'educationInstitute' => $educationInstitute
        ]);

    }

}
