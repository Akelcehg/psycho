<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_123541_psychologist_problems extends Migration
{
    public function up() {
        $this->createTable('psychologist_problems', [
            'id' => Schema::TYPE_PK,
            'psychologist_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'problem_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160201_123541_psychologist_problems cannot be reverted.\n";

        return false;
    }

}
