<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_123320_directions extends Migration
{
    public function up() {
        $this->createTable('directions', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160201_123320_directions cannot be reverted.\n";

        return false;
    }
}
