<?php

use yii\db\Schema;
use yii\db\Migration;

class m160131_133238_countries extends Migration {

    public function up() {
        $this->createTable('countries', [

            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160131_133238_countries cannot be reverted.\n";

        return false;
    }

}
