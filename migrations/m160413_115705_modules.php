<?php

use yii\db\Migration;
use yii\db\Schema;

class m160413_115705_modules extends Migration {
    public function up() {
        $this->createTable('modules', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'link' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('modules');
    }

}
