<?php

namespace app\controllers;

use app\models\EducationalInstitution;
use app\models\EducationalInstitutionSearch;
use Yii;
use yii\data\Pagination;

class EducationalInstitutionController extends \yii\web\Controller
{
    public function actionIndex() {

        $searchModel = new EducationalInstitutionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

}
