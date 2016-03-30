<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_123311_problems extends Migration
{
    public function up() {
        $this->createTable('problems', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('problems');

    }

}
