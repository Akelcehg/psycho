<?php

namespace app\commands;

use yii\console\Controller;

class FillDbController extends Controller {

    public function actionIndex() {
        return true;
    }

    public function actionAll() {
        echo "Dropping database\n";
        //$this->stdout('C:\wamp64\bin\php\php5.6.16\php.exe yii migrate/down 1000');
        exec('C:\wamp64\bin\php\php5.6.16\php.exe yii migrate/down 1000 --interactive=0');
        echo "Initializing migrations\n";
        exec('C:\wamp64\bin\php\php5.6.16\php.exe yii migrate --interactive=0');
        echo "Updating Roles and adding default users\n";
        exec('C:\wamp64\bin\php\php5.6.16\php.exe yii rbac/init');
    }

}
