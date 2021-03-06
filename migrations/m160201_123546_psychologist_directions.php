<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_123546_psychologist_directions extends Migration
{
    public function up() {
        $this->createTable('psychologist_directions', [
            'id' => Schema::TYPE_PK,
            'psychologist_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'direction_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('psychologist_directions');

    }
}
