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

            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160310_140920_quiz_results cannot be reverted.\n";

        return false;
    }

}
