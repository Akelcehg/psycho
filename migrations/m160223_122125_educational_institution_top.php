<?php

use yii\db\Schema;
use yii\db\Migration;

class m160223_122125_educational_institution_top extends Migration {
    public function up() {
        $this->createTable('educational_institution_top', [
            'id' => Schema::TYPE_PK,
            'educational_institution_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('educational_institution_top');

    }
}
