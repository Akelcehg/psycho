<?php

use yii\db\Schema;
use yii\db\Migration;

class m160310_140838_quiz_questions extends Migration {
    public function up() {
        $this->createTable('quiz_questions', [
            'id' => Schema::TYPE_PK,

            'quiz_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('quiz_questions');

    }

}
