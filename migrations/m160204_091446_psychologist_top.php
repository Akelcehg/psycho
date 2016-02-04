<?php

use yii\db\Schema;
use yii\db\Migration;

class m160204_091446_psychologist_top extends Migration
{
    public function up() {
        $this->createTable('psychologist_top', [
            'id' => Schema::TYPE_PK,
            'psychologist_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160204_091446_psychologist_top cannot be reverted.\n";

        return false;
    }
}
