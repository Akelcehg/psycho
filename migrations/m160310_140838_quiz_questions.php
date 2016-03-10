<?php

use yii\db\Schema;
use yii\db\Migration;

class m160310_140838_quiz_questions extends Migration {
    public function up() {
        $this->createTable('quiz_questions', [
            'id' => Schema::TYPE_PK,

            'quiz_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL',

            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160310_140838_quiz_questions cannot be reverted.\n";

        return false;
    }

}
