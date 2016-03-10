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

            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160310_140907_questions_answers cannot be reverted.\n";

        return false;
    }

}
