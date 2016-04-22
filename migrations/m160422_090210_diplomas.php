<?php

use yii\db\Migration;
use yii\db\Schema;

class m160422_090210_diplomas extends Migration {
    public function up() {
        $this->createTable('diplomas', [
            'id' => Schema::TYPE_PK,

            'psychologist_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'is_approved' => Schema::TYPE_INTEGER . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down() {
        $this->dropTable('diplomas');
    }

}
