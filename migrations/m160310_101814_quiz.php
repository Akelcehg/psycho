<?php

use yii\db\Schema;
use yii\db\Migration;

class m160310_101814_quiz extends Migration {
    public function up() {
        $this->createTable('quiz', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160310_101814_quiz cannot be reverted.\n";

        return false;
    }

}
