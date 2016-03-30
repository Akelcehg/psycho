<?php

use yii\db\Schema;
use yii\db\Migration;

class m160310_140920_quiz_results extends Migration {
    public function up() {
        $this->createTable('quiz_results', [
            'id' => Schema::TYPE_PK,

            'quiz_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'value_from' => Schema::TYPE_INTEGER . ' NOT NULL',
            'value_to' => Schema::TYPE_INTEGER . ' NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',

            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('quiz_results');
    }

}
