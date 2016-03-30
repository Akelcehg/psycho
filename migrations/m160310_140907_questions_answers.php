<?php

use yii\db\Schema;
use yii\db\Migration;

class m160310_140907_questions_answers extends Migration {
    public function up() {
        $this->createTable('questions_answers', [
            'id' => Schema::TYPE_PK,

            'question_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'text' => Schema::TYPE_STRING . ' NOT NULL',
            'value' => Schema::TYPE_INTEGER . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('questions_answers');

    }

}
