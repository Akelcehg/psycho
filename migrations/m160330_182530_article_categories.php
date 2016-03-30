<?php

use yii\db\Migration;
use yii\db\Schema;

class m160330_182530_article_categories extends Migration {
    public function up() {
        $this->createTable('article_categories', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160330_182530_article_categories cannot be reverted.\n";

        return false;
    }

}
