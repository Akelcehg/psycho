<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_160533_books extends Migration {
    public function up() {
        $this->createTable('books', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'link' => Schema::TYPE_STRING . ' NOT NULL',
            'is_published' => Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT FALSE',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        echo "m160401_160533_books cannot be reverted.\n";

        return false;
    }

}
