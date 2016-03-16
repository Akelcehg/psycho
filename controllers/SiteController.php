<?php

namespace app\controllers;

use app\models\Events;
use app\models\Image;
use app\models\PsychologistTop;
use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Profile;
use yii\web\UploadedFile;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'upload' => ['post'],
                ],
            ],
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction>',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    protected function verbs()
    {
        return [

            'upload' => ['POST'],

        ];
    }
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    public function actionIndex() {

        $topPsychologists = new PsychologistTop();
        $eventsList = new Events();
        return $this->render('index', [
            'topPsychologists' => $topPsychologists->getTopPsychologists(4),
            'eventsList' => $eventsList->getEvents(4)
        ]);
    }

    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                $profile = new Profile();
                if ($profile->initProfile($model, $user->id)) {
                    if (Yii::$app->getUser()->login($user)) {
                        return $this->goHome();
                    }
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionLogin() {

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);

    }

    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout() {
        return $this->render('about');
    }

    public function actionUpload() {
        $imagesModel = new Image();
        //var_dump(Yii::$app->request->post());

        ///if(isset($_POST['upload'])) {
            /*$imagesModel->image_file = UploadedFile::getInstance($imagesModel, 'image_file');
            $imagesModel->image_file->saveAs('test.jpg');*/
            /*return '{
    "uploaded": 1,
    "fileName": "blank.jpg",
    "url": "/psycho/images/profile_photos/blank.jpg"
}';*/
        return var_dump(Yii::$app->request->post());
            //UploadedFile::getInstance($image,'image_file');


//upload

        //http://localhost/psycho/images/profile_photos/blank.jpg
    }

}
