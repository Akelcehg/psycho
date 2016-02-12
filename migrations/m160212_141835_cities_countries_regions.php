<?php

use yii\db\Schema;
use yii\db\Migration;

class m160212_141835_cities_countries_regions extends Migration
{
    public function up() {
        //$this->execute(file_get_contents(__DIR__ . '/cities_countries_regions.sql'));
        Yii::$app->db->createCommand(file_get_contents(__DIR__ . '/cities_countries_regions.sql'))->execute();
    }


    public function down() {
        echo "m160212_141835_cities_countries_regions cannot be reverted.\n";

        return false;
    }
}
