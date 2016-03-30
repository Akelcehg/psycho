<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_123320_directions extends Migration
{
    public function up() {
        $this->createTable('directions', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('directions');

    }
}
